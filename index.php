<?php 
    include ('header.php'); 
    include ("config.php");
    $ret=mysqli_query($con,"SELECT * FROM banners WHERE section='slider_index' ORDER BY position ASC");
    $admisiones_ret = mysqli_query($con,"SELECT * FROM banners WHERE section='admisiones' ORDER BY position ASC LIMIT 1");
    $inscripciones_video_ret = mysqli_query($con,"SELECT * FROM banners WHERE section='matriculas' AND type='video' ORDER BY position ASC LIMIT 1");
    $inscripciones_image_ret = mysqli_query($con,"SELECT * FROM banners WHERE section='matriculas' AND type='image' ORDER BY position ASC LIMIT 2");
    $galeria=mysqli_query($con,"SELECT * FROM banners WHERE section='galeria' ");
    $inscripciones_video = $inscripciones_video_ret->fetch_assoc();
    $admisiones = $admisiones_ret->fetch_assoc();
?>

<!-- ======= Section Images ======= -->

<div class="background-image">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 text-center">
                <a id="logo" href="index.php" class="logo">
                    <img src="images/circle-cropped.png" alt="Logo escudo institucional" class="img-fluid">
                </a>
            </div>
            <div class="col-12 mt-5">
                <p class="name title h2 text-center">
                    <a class="color-blue" href="index.php">Centro Educativo Mi Pequeño Mundo</a>
                </p>
            </div>
            <div class="col-12 text-center mt-3">
                <p class="lema title text-center h3">
                    <a class="color-blue"  href="index.php">Formando Futuros Soñadores</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- ======= Imagenes presentación  ======= -->
<div class="container py-3">
    <p class="h2 text-center color-blue mb-3 bg-color-blue-light text-white p-2">IMAGENES</p>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
                $i = 0;
                while($row = mysqli_fetch_assoc($ret)) {
                    $i++;
                    $clase = ($i==1) ?'active':'';
                    echo '<div class="carousel-item '.$clase.'">
                            <img src="'.$row['url_media'].'" class="d-block img-carousel" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>'.$row['title'].'</h5>
                                <p>'.$row['description'].'</p>
                            </div>
                        </div>';
                }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- ======= FINAL Imagenes presentación  ======= -->

<!-- ======= Participación Admisiones  ======= -->
<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <p class="h2 text-center color-blue bg-color-blue-light text-white p-2">PROCESO DE ADMISIONES</p>
        </div>
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-7 col-lg-8 pr-3 pr-md-0">
                    <a id="" href="admisiones.php" class="logo">
                        <img src="<?php echo $admisiones['url_media'] ?>" alt="<?php echo $admisiones['title'] ?>"
                            class="w-100 h-100"></a>
                </div>
                <div class="col-12 col-md-5 col-lg-4 pl-3 pl-md-0">
                    <div class="bg-color-blue-light p-3 h-100">
                        <p class="text-white h4 mb-4"><?php echo $admisiones['title'] ?></p>
                        <p class="text-white mb-4"><?php echo $admisiones['description'] ?></p>
                        <a href="admisiones.php" class="btn btn-outline-light  mb-4">Más información</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ======= Final Admisiones  ======= -->

<!-- ======= Más sobre nosotros  ======= -->
<div class="container mt-5">
    <p class="h2 text-center color-blue bg-color-blue-light text-white p-2">INSCRIPCIONES</p>
    <div class="row mt-2">
        <div class="col-12 col-md-7">
            <div class="bg-color-blue-light p-2 w-100 h-100 d-flex justify-content-center align-items-center">
                <iframe width="100%" height="100%" src="<?php echo $inscripciones_video['url_media'] ?>" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-12 col-md-5 d-flex mt-2 mt-md-0">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <?php
                        $i = 0;
                        while($row = mysqli_fetch_assoc($inscripciones_image_ret)) {
                            $i++;
                            $clase = ($i==1) ?'mb-1':'';
                            echo '<div class="col-12 d-flex align-items-stretch '.$clase.'">
                                    <div class="bg-color-blue-light p-2">
                                        <a href="admisiones.php" class="logo">
                                            <img class="w-100 h-100" src="'.$row['url_media'].'"
                                                alt="'.$row['title'].'">
                                        </a>
                                    </div>
                                </div>';
                        }
                    ?>
                </div>
            </div>
        </div><!-- ===== Final del contenido inicial ======= -->
    </div>
</div>
<!--important-->

<!--============= Galeria Imagenes ============== -->
<div class="container mt-5">
    <p class="h2 text-center color-blue mb-3 bg-color-blue-light text-white p-2">MOMENTOS MI PEQUEÑO MUNDO</p>
    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-left">
        <?php
            $i = 0;
            while($row = mysqli_fetch_assoc($galeria)) {
                $i++;
                $clase = ($i==1) ?'mb-1':'';
                echo ' <div class="col-lg-3 col-md-4 col-12 '.$clase.'">
                <a href="'.$row['url_media'].'" class="d-block mb-4 h-100">
                    <img width="220px" height="220px" class="" src="'.$row['url_media'].'" alt="'.$row['title'].'">
                </a>
            </div>';
            }
        ?>
    </div>
</div>
<!-- =======Final Seccion Galeria======= -->

<!-- =======Seccion Contactanos======= -->
<div class="container ">
    <p class="h2 text-center color-blue mb-3 bg-color-blue-light text-white p-2">UBICACIÓN</p>
    <div class="row">
        <div class="col-12 ml-0">
            <div class="gallery-item">
                <a href="<?php echo $num['url_image']; ?>" target="_blank">
                    <img src="images/barbosaubicacion.jpg" alt="Ubicación Barbosa Santander " class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <p class="h2 text-center color-blue mb-3 bg-color-blue-light text-white p-2">CONTACTÁNOS</p>
    <div class="section-title">
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui .impedit suscipit alias ea. Quia
            fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="row info">
                <div class="address col-12">
                    <div class="row mb-3">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <i class="fas fa-map-marker-alt fa-2x color-blue"></i>
                        </div>
                        <div class="col-9 pl-0">
                            <h4>Ubicación:</h4>
                            <p class="m-0">Barbosa, Santander</p>
                        </div>
                    </div>
                </div>
                <div class="email col-12">
                    <div class="row mb-3">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <i class="fas fa-envelope-open fa-2x text-danger"></i>
                        </div>
                        <div class="col-9 pl-0">
                            <h4>Correo Electronico:</h4>
                            <p class="m-0">mipequeñomundo@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="phone col-12">
                    <div class="row">
                        <div class="col-3 d-flex justify-content-center align-items-center">
                            <i class="fab fa-whatsapp fa-2x text-success"></i>
                        </div>
                        <div class="col-9 pl-0">
                            <h4>Telefono:</h4>
                            <p class="m-0">+57 3136052704</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-lg-8 mt-5 mt-md-0">
            <form action="correo.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                    <div class="col-12 col-lg-6 form-group ">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nombres"
                            data-rule="minlen:4" data-msg="" required/>
                    </div>
                    <div class="col-12 col-lg-6 form-group">
                        <input type="email" class="form-control" name="email" id="email"
                            placeholder="Correo Electronico" data-rule="email" data-msg="Please enter a valid email" required />
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"
                    data-rule="minlen:4" data-msg="Please enter at least 15 chars of subject" required />
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="4" data-rule="required"
                        data-msg="PorFavor¡ Escriba su mensaje" placeholder="Message" required></textarea>
                </div>
                <div class="text-center">
                    <a class="btn btn-outline-primary mb-3"
                    value="Enviar" type="submit" >
                        Enviar Mensaje
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ====Final Sección De Contacto==== -->
<!-- ====FOOTER==== -->
<?php include ('footer.php'); ?>