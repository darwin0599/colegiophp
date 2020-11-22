<?php 
    include ("config.php");
    include ("header_forms.php");
    $ret=mysqli_query($con,"SELECT * FROM news WHERE id=".$_GET["id"]);
    $num = $ret->fetch_assoc();
    $titleErr = $descriptionErr = $sectionErr = $url_mediaErr = '';
    $title = $description = $section = $url_media = '';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if(isset($_POST['title']) && trim($_POST['title'])){
            $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
        }else{
            $titleErr = "Titulo incorrecto";
        }
        if(isset($_POST['description']) && trim($_POST['description'])){
            $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
        }else{
            $descriptionErr = "Descripción incorrecta";
        }
        if(isset($_POST['section']) && trim($_POST['section'])){
            $section = filter_var($_POST['section'], FILTER_SANITIZE_STRING);
        }else{
            $sectionErr = "Sección incorrecta";
        }

        $url_media = $_FILES['url_media']['name'];
        if (isset($url_media) && $url_media != "") {
            $tipo = $_FILES['url_media']['type'];
            $tamano = $_FILES['url_media']['size'];
            $temp = $_FILES['url_media']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                $url_mediaErr = 'La extensión o el tamaño de los archivos no es correcta - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.';
            }
            else {
                if (move_uploaded_file($temp, 'images/'.$url_media)) {
                    echo 'entra';
                    chmod('images/'.$url_media, 0777);
                    unlink($num['url_media']);
                    $url_media = 'images/'.mt_srand(5).$url_media;
                }
                else {
                    $url_mediaErr = 'Ocurrió algún error al subir el fichero. No pudo guardarse.';
                }
            }
        }

        if($url_media == '') {
            $url_media = $num['url_media'];
        }

        if ($titleErr == '' && $descriptionErr == '' && $positionErr == '' && $url_mediaErr == '') {
            $sql = "UPDATE news SET title = '".$title."', description = '".$description."', url_media = '".$url_media."', section = '".$section."' WHERE id = ".$_GET["id"];
            //realizar la insercion en la base de datos
            mysqli_query($con, $sql);
            header("Location: form_list_news.php");
        }
    }
?>


<body>
    <section class="container-fluid">
        <div class="row ">
            <div class="col-3 bg-danger">
                <nav class="bg-danger w-100">
                    <?php include ("menu_forms.php"); ?>
            </div>
            <div class="col-9">
                <div class="container my-3">
                    <div class="col-md-10 m-auto">
                        <form method="post" action="form_edit_news.php?id=<?php echo $_GET['id']; ?>"
                            enctype="multipart/form-data">
                            <h4 class="form-header text-center bg-warning">EDITAR PUBLICACIONES</h4>
                            <div class="form-group text-left">
                                <h5 class="text-dark">ADMISIONES y MATRICULAS</h5>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 my-4 ">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center py-3">
                                            <img id="thumbnil" src="" alt="image" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input type="file" name="url_media" accept="image/*"
                                                onchange="showMyImage(this)" />
                                            <small class="text-danger"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="title" class="form-control" id="nombre"
                                        placeholder="Nombre" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars"
                                        value="" required />
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="description" name="description"
                                        placeholder="Descripción"
                                        required></textarea>
                                    <small class="text-danger"></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlSelect1">Sección</label>
                                    <select class="form-control" name="section">
                                    <option value="">- Selecciona una la sección -</option>
                                        <option value="admisiones">admisiones</option>
                                        <option value="matriculas">matriculas</option>
                                        
                                       
                                    </select>
                                    <small class="text-danger"> </small>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-warning" type="submit" name="" value="Crear">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>