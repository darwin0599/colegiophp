<?php 
    include ('header.php'); 
    include ("config.php");
    $ret=mysqli_query($con,"SELECT * FROM informations");
    $num=$ret->fetch_assoc();
?>
<!-- =======Seccion Contactanos======= -->
<section id="contact" class="contact">
    <!-- =======Seccion Contactanos======= -->
    <div class="container mt-5">
        <p class="h2 text-center color-blue mb-3 bg-color-blue-light text-white p-2">Ubicación</p>
        <div class="row">
            <div class="col-12 ml-0">
                <div class="gallery-item">
                    <a href="<?php echo $num['url_image']; ?>"
                        target="_blank">
                        <img src="<?php echo $num['image']; ?>" alt="<?php echo $num['location']; ?>" class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <p class="h2 text-center color-blue mb-3 bg-color-blue-light text-white p-2">Contactános</p>
        <div class="section-title">
            <p><?php echo $num['description']; ?></p>
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
                                <p class="m-0"><?php echo $num['location']; ?></p>
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
                                <p class="m-0"><?php echo $num['email_one']; ?></p>
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
                                <p class="m-0"><?php echo $num['phone_one']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-8 mt-5 mt-md-0">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="col-12 col-lg-6 form-group ">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Nombres"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        </div>
                        <div class="col-12 col-lg-6 form-group">
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Correo Electronico" data-rule="email"
                                data-msg="Please enter a valid email" />
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto"
                            data-rule="minlen:4" data-msg="Please enter at least 15 chars of subject" />
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="4" data-rule="required"
                            data-msg="PorFavor¡ Escriba su mensaje" placeholder="Message"></textarea>
                    </div>
                    <div class="text-center">
                        <a class="btn btn-outline-primary mb-3">
                            Enviar Mensaje
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ====Final Sección De Contacto==== -->
</section><!-- ====Final Sección De Contacto==== -->

<!--Footer -->
<?php include ('footer.php'); ?>