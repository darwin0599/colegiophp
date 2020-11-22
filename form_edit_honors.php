<?php 
    include ("config.php");
    include ("header_forms.php");
    $ret=mysqli_query($con,"SELECT * FROM honors WHERE id=".$_GET["id"]);
    $num = $ret->fetch_assoc();
    $nameErr = $descriptionErr = $gradeErr = $imageErr = '';
    $name = $description = $grade = $image = '';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if(isset($_POST['name']) && trim($_POST['name'])){
            $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        }else{
            $nameErr = "Nombre incorrecto";
        }
        if(isset($_POST['description']) && trim($_POST['description'])){
            $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
        }else{
            $descriptionErr = "Descripción incorrecta";
        }
        if(isset($_POST['grade']) && trim($_POST['grade'])){
            $grade = filter_var($_POST['grade'], FILTER_SANITIZE_STRING);
        }else{
            $gradeErr = "Grado incorrecto";
        }

        $image = $_FILES['image']['name'];
        if (isset($image) && $image != "") {
            $tipo = $_FILES['image']['type'];
            $tamano = $_FILES['image']['size'];
            $temp = $_FILES['image']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                $url_mediaErr = 'La extensión o el tamaño de los archivos no es correcta - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.';
            }
            else {
                if (move_uploaded_file($temp, 'images/'.$image)) {
                   
                    chmod('images/'.$image, 0777);
                    unlink($num['image']);
                    $image = 'images/'.mt_srand(5).$image;
                }
                else {
                    $url_mediaErr = 'Ocurrió algún error al subir el fichero. No pudo guardarse.';
                }
            }
        }

        if($image == '') {
            $image = $num['image'];
        }

        if ($nameErr == '' && $descriptionErr == '' && $gradeErr == '' && $image == '') {
            $sql = "UPDATE honors SET name = '".$name."', description = '".$description."', grade = '".$grade."', image = '".$image."' WHERE id = ".$_GET["id"];
            //realizar la insercion en la base de datos
            mysqli_query($con, $sql);
            header("Location: form_list_honors.php");
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
                        <form method="post" action="form_edit_honors.php?id=<?php echo $_GET['id']; ?>"
                            enctype="multipart/form-data">
                            <h4 class="form-header text-center bg-warning">EDITAR CUADRO DE HONOR</h4>
                            <div class="form-group text-left">
                                <h5 class="text-dark">Estudiantes</h5>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 my-4 ">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center py-3">
                                            <img id="thumbnil" src="<?php echo $num["image"]; ?>" alt="image" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input type="file" name="image" accept="image/*"
                                                onchange="showMyImage(this)" />
                                            <small class="text-danger"><?php echo $imageErr; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nombre" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars"
                                        value="<?php echo !empty($name) ? $name : $num["name"]; ?>" required />
                                    <small class="text-danger"><?php echo $nameErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="description" name="description"
                                        placeholder="Descripción"
                                        required><?php echo !empty($description) ? $description : $num["description"]; ?></textarea>
                                    <small class="text-danger"><?php echo $descriptionErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlSelect1">Grado</label>
                                    <select class="form-control" name="grade">
                                        <option value="jardin"
                                            <?php if ($num['grade'] == 'jardin') echo 'selected';?>>Jardin
                                        </option>
                                        <option value="prejardin"
                                            <?php if ($num['grade'] == 'prejardin') echo 'selected';?>>Prejardin
                                        </option>
                                        <option value="parvulos"
                                            <?php if ($num['grade'] == 'parvulos') echo 'selected'?>>Parvulos
                                        </option>
                                       
                                    </select>
                                    <small class="text-danger"><?php echo $gradeErr; 
                                    ?></small>
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