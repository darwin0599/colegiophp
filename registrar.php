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
                            <h4 class="form-header text-center bg-primary">REGISTRAR OBSERVACIONES</h4>
                            <div class="form-group text-left">
                                <h5 class="text-dark"></h5>
                                <hr>
                            </div>
                            <div class="form-group text-center col-12">
                                <h5 class="text-dark">DOCENTE:</h5>
                                <hr>
                            </div>
                            <div class="form-group col-md-12">
                                <select class="form-control" name="section_grado" id="section_grado" required>
                                    <option value="">Seleccione al docente</option>
                                    <option value="salacuna">Salacuna</option>
                                    <option value="parvulos">Parvulos</option>
                                    <option value="pre_jardin">Pre-jardín</option>
                                    <option value="jardin">Jardín</option>
                                    <option value="transicion">Transición</option>
                                </select>
                                <hr>
                            </div>

                            <div class="form-group text-center col-12">
                                <h5 class="text-dark">GRADO AL QUE PERTENECE:</h5>
                                <hr>
                            </div>
                            <div class="form-group col-md-12">
                                <select class="form-control" name="section_grado" id="section_grado" required>
                                    <option value="">Seleccione al grado</option>
                                    <option value="salacuna">Salacuna</option>
                                    <option value="parvulos">Parvulos</option>
                                    <option value="pre_jardin">Pre-jardín</option>
                                    <option value="jardin">Jardín</option>
                                    <option value="transicion">Transición</option>
                                </select>
                                <hr>
                            </div>
                            <div class="form-group text-center col-12">
                                <h5 class="text-dark">ALUMNOS </h5>
                                <hr>
                            </div>
                            <div class="form-group col-md-12">
                                <select class="form-control" name="section_grado" id="section_grado" required>
                                    <option value="">Seleccione al alumno que desea ingresar</option>
                                    <option value="salacuna">Salacuna</option>
                                    <option value="parvulos">Parvulos</option>
                                    <option value="pre_jardin">Pre-jardín</option>
                                    <option value="jardin">Jardín</option>
                                    <option value="transicion">Transición</option>
                                </select>
                                <hr>
                            </div>
                            <div class="form-group text-center col-12">
                                <h5 class="text-dark">OBSERVACIÓN </h5>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="form-group col-4">
                                    <select class="form-control" name="section_regimen" id="section_regimen" required>
                                        <option value="">TIPO</option>
                                        <option value="privado">Conducta</option>
                                        <option value="publico">Promedio</option>
                                    </select>
                                </div>
                                <div class="form-group col-4">
                                    <input type="date" name="date" id="date" class="form-control" required />
                                </div>
                                <div class="form-group col-4">
                                    <input type="name" name="title" id="title" class="form-control" required />
                                </div>
                                <div class="form-group col-12">
                                    <textarea class="form-control" id="description" name="description"
                                        placeholder="Descripción" required></textarea>
                                    <small class="text-danger"></small>
                                </div>

                            </div>

                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-outline-primary col-md-4" type="submit">Crear</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>

    </section>