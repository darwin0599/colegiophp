<?php 
    include ("config.php");
    include ("header_forms.php");
    $ret=mysqli_query($con,"SELECT * FROM banners WHERE id=".$_GET["id"]);
    $num = $ret->fetch_assoc();
    $titleErr = $descriptionErr = $positionErr = $sectionErr = $url_mediaErr = '';
    $title = $description = $position = $section = $url_media = '';
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
        if(isset($_POST['position']) && trim($_POST['position'])){
            $position = filter_var($_POST['position'], FILTER_SANITIZE_STRING);
        }else{
            $positionErr = "Posición incorrecta";
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

        if ($titleErr == '' && $descriptionErr == '' && $positionErr == '' && $sectionErr == '' && $url_mediaErr == '') {
            $sql = "UPDATE banners SET title = '".$title."', description = '".$description."', position = '".$position."', url_media = '".$url_media."', section = '".$section."' WHERE id = ".$_GET["id"];
            //realizar la insercion en la base de datos
            mysqli_query($con, $sql);
            header("Location: form_list_banner.php");
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
                        <form method="post" action="form_edit_banner.php?id=<?php echo $_GET['id']; ?>"
                            enctype="multipart/form-data">
                            <h4 class="form-header text-center bg-warning">EDITAR BANNERS</h4>
                            <div class="form-group text-left">
                                <h5 class="text-dark">Imagenes </h5>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 my-4 ">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center py-3">
                                            <img id="thumbnil" src="<?php echo $num["url_media"]; ?>" alt="image" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input type="file" name="url_media" accept="image/*"
                                                onchange="showMyImage(this)" />
                                            <small class="text-danger"><?php echo $url_mediaErr; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="title" class="form-control" id="nombre"
                                        placeholder="Nombre" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars"
                                        value="<?php echo !empty($title) ? $title : $num["title"]; ?>" required />
                                    <small class="text-danger"><?php echo $titleErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="description" name="description"
                                        placeholder="Descripción"
                                        required><?php echo !empty($description) ? $description : $num["description"]; ?></textarea>
                                    <small class="text-danger"><?php echo $descriptionErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="number" name="position" class="form-control" id="posicion"
                                        placeholder="Posición" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required
                                        value="<?php echo !empty($position) ? $position : $num["position"]; ?>" />
                                    <small class="text-danger"><?php echo $positionErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlSelect1">Sección</label>
                                    <select class="form-control" name="section">
                                        <option value="slider_index"
                                            <?php if ($num['section'] == 'slider_index') echo 'selected';?>>slider_index
                                        </option>
                                        <option value="admisiones"
                                            <?php if ($num['section'] == 'admisiones') echo 'selected';?>>admisiones
                                        </option>
                                        <option value="matriculas"
                                            <?php if ($num['section'] == 'matriculas') echo 'selected'?>>matriculas
                                        </option>
                                        <option value="galeria"
                                            <?php if ($num['section'] == 'galeria') echo 'selected'?>>galeria</option>
                                        <option value="cronograma"
                                            <?php if ($num['section'] == 'cronograma') echo 'selected'?>>cronograma
                                        </option>
                                        <option value="horario_jardin"
                                            <?php if ($num['section'] == 'horario_jardin') echo 'selected'?>>
                                            horario_jardin</option>
                                        <option value="horario_prejardin"
                                            <?php if ($num['section'] == 'horario_prejardin') echo 'selected'?>>
                                            horario_prejardin</option>
                                        <option value="horario_parvulos"
                                            <?php if ($num['section'] == 'horario_parvulos') echo 'selected'?>>
                                            horario_parvulos</option>
                                    </select>
                                    <small class="text-danger"><?php echo $sectionErr; ?></small>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-warning" type="submit" name="" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script>
    function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType;
            if (!file.type.match(imageType)) {
                continue;
            }
            var img = document.getElementById("thumbnil");
            img.file = file;
            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }
    </script>
</body>

</html>