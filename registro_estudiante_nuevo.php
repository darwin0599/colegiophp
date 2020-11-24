<?php 
    include ("config.php");
    include ("header_forms.php");
    $primer_apellidoErr = $segundo_apellidoErr = $nombreErr  = $dateErr = $nacimientoErr = $rhErr = $section_documentoErr = $documentoErr = $expedicionErr = $section_gradoErr = $provieneErr = $section_regimenErr =$url_mediaErr = '';
    $primer_apellido = $segundo_apellido = $nombre = $date = $nacimiento = $rh = $section_documento = $documento = $expedicion = $section_grado = $proviene = $section_regimen = $url_media = '';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if(isset($_POST['primer_apellido']) && trim($_POST['primer_apellido'])){
            $primer_apellido = filter_var($_POST['primer_apellido'], FILTER_SANITIZE_STRING);
        }else{
            $primer_apellidoErr = "Primer apellido incorrecto";
        }
        if(isset($_POST['segundo_apellido']) && trim($_POST['segundo_apellido'])){
            $segundo_apellido = filter_var($_POST['segundo_apellido'], FILTER_SANITIZE_STRING);
        }else{
            $segundo_apellidoErr = "Segundo apellido incorrecto";
        }
        if(isset($_POST['nombre']) && trim($_POST['nombre'])){
            $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
        }else{
            $nombreErr = "Nombre incorrecto";
        }
        if(isset($_POST['date']) && trim($_POST['date'])){
            $date = filter_var($_POST['date'], FILTER_SANITIZE_STRING);
        }else{
            $dateErr = "Fecha incorrecto";
        }
        if(isset($_POST['nacimiento']) && trim($_POST['nacimiento'])){
            $nacimiento = filter_var($_POST['nacimiento'], FILTER_SANITIZE_STRING);
        }else{
            $nacimientoErr = "Lugar de nacimiento incorrecto";
        }
        if(isset($_POST['rh']) && trim($_POST['rh'])){
            $rh = filter_var($_POST['rh'], FILTER_SANITIZE_STRING);
        }else{
            $rhErr = "Tipo de sangre incorrecto";
        }
        if(isset($_POST['section_documento']) && trim($_POST['section_documento'])){
            $section_documento = filter_var($_POST['section_documento'], FILTER_SANITIZE_STRING);
        }else{
            $section_documentoErr = "Tipo de documento incorrecta";
        }
        if(isset($_POST['documento']) && trim($_POST['documento'])){
            $documento = filter_var($_POST['documento'], FILTER_SANITIZE_STRING);
        }else{
            $documentoErr = "Documento incorrecta";
        }
        if(isset($_POST['expedicion']) && trim($_POST['expedicion'])){
            $expedicion = filter_var($_POST['expedicion'], FILTER_SANITIZE_STRING);
        }else{
            $expedicionErr = "Expedición incorrecta";
        }
        if(isset($_POST['section_grado']) && trim($_POST['section_grado'])){
            $section_grado = filter_var($_POST['section_grado'], FILTER_SANITIZE_STRING);
        }else{
            $section_gradoErr = "Grado incorrecto";
        }
        if(isset($_POST['proviene']) && trim($_POST['proviene'])){
            $proviene = filter_var($_POST['proviene'], FILTER_SANITIZE_STRING);
        }else{
            $provieneErr = "Institución incorrecta";
        }
        if(isset($_POST['section_regimen']) && trim($_POST['section_regimen'])){
            $section_regimen = filter_var($_POST['expedicion'], FILTER_SANITIZE_STRING);
        }else{
            $section_regimenErr = "Regimen incorrecta";
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
                    chmod('images/'.$url_media, 0777);
                    $url_media = 'images/'.mt_srand(5).$url_media;
                }
                else {
                    $url_mediaErr = 'Ocurrió algún error al subir el fichero. No pudo guardarse.';
                }
            }
        }

        if ($titleErr == '' && $descriptionErr == '' && $positionErr == '' && $sectionErr == '' && $url_mediaErr == '') {
            $sql = "INSERT INTO banners(id, url_media, title, description, position, type, update_at, section) VALUES 
                                    (null, '{$url_media}', '{$title}', '{$description}', {$position}, 'image', null, '{$section}')";
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
            <div class="col-9 d-flex justify-content-center">
                <div class="container my-3">
                    <div class="col-md-10 m-auto">
                    <form method="post" action="form_creator_banner.php" enctype="multipart/form-data">
                            <h4 class="form-header text-center bg-warning">CREAR ESTUDIANTE</h4>
                            <div class="form-group text-left">
                                <h5 class="text-dark">FOTO DE ESTUDIANTE </h5>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 my-4 ">
                                    <div class="row justify-content-center">
                                        <div class="col-5 d-flex justify-content-center py-3">
                                            <img id="thumbnil" src="images/user.png" alt="image"/>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input type="file" name="url_media" accept="image/*" onchange="showMyImage(this)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center col-12">
                                    <h5 class="text-dark">INFORMACIÓN DEL ESTUDIANTE </h5>
                                    <hr>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="primer_apellido" id="primer_apellido" class="form-control" placeholder="Primer apellido" required/>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="segundo_apellido" id="segundo_apellido" class="form-control" placeholder="Segundo apellido" required/>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombres" required/>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="date" name="date" id="date" class="form-control" required/>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="nacimiento" id="nacimiento" class="form-control" placeholder="Lugar de nacimiento" required/>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="rh" id="rh" class="form-control" placeholder="Tipo de sangre" required/>
                                </div>
                                <div class="form-group col-md-4">
                                    <select class="form-control" name="section_documento" id="section_documento" required>
                                        <option value="">Tipo de documento</option>
                                        <option value="slider_index">T.I</option>
                                        <option value="admisiones">C.C</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="documento" id="documento" class="form-control" placeholder="N° de documento" required/>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="expedicion" id="expedicion" class="form-control" placeholder="Lugar de expedición" required/>
                                </div>
                                <div class="form-group text-center col-12">
                                    <h5 class="text-dark">GRADO AL QUE ASPIRA INGRESAR</h5>
                                    <hr>
                                </div>
                                <div class="form-group col-md-12">
                                    <select class="form-control" name="section_grado" id="section_grado" required>
                                        <option value="">Seleccione al grado que desea ingresar</option>
                                        <option value="salacuna">Salacuna</option>
                                        <option value="parvulos">Parvulos</option>
                                        <option value="pre_jardin">Pre-jardín</option>
                                        <option value="jardin">Jardín</option>
                                        <option value="transicion">Transición</option>
                                    </select>
                                </div>
                                <div class="form-group text-center col-12">
                                    <h5 class="text-dark">PARA ALUMNOS NUEVOS</h5>
                                    <hr>
                                </div>
                                <div class="form-group col-md-8">
                                    <input type="text" name="proviene" id="proviene" class="form-control" placeholder="Establecimiento privado donde proviene" required/>
                                </div>
                                <div class="form-group col-md-4">
                                    <select class="form-control" name="section_regimen" id="section_regimen" required>
                                        <option value="">Regimen</option>
                                        <option value="privado">Privado</option>
                                        <option value="publico">Público</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-outline-warning col-md-4" type="submit">Crear</button>
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
                    var img=document.getElementById("thumbnil");            
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