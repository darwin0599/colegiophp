<?php include ('header.php'); ?>

       <!-- =======Seccion Contactanos======= -->
<section id="contact" class="contact">
  <div class="container">
    <h2 class="text-center mb-3 mt-3 border-content-blue">Ubicación</h2>
    <div class="row ">
      <div class="col-12 col-md-6 mr-0">
        <div class="gallery-item">
          <a href="https://www.google.com/maps/place/Barbosa,+Santander/@5.9343848,-73.6244343,15z/data=!3m1!4b1!4m5!3m4!1s0x8e41e5b0c45020ab:0x9053c0246944f9a2!8m2!3d5.934363!4d-73.615679?hl=es" target="_blank" >
            <img src="images/ubicacion.jpg" alt="Ubicación calle 9" class="img-fluid">
          </a>
        </div>
      </div>
      <div class="col-12  col-md-6 ml-0">
        <div class="gallery-item">
          <a href="https://www.google.com/maps/place/Barbosa,+Santander/@5.9343848,-73.6244343,15z/data=!3m1!4b1!4m5!3m4!1s0x8e41e5b0c45020ab:0x9053c0246944f9a2!8m2!3d5.934363!4d-73.615679?hl=es" target="_blank">
          <img src="images/barbosaubicacion.jpg" alt="Ubicación Barbosa Santander " class="img-fluid">
          </a>
        </div>
      </div>
    </div>  
    <div class="container">
      <div class="section-title">
        <h2 class="text-center mb-3 mt-3 border-content-blue">Contactános</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui .impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>
    </div>
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-4">
          <div class="row info">
            <div class="address col-12">
              <div class="row">
                <div class="col-3 d-flex justify-content-center align-items-center">
                  <span>
                    <i class="fas fa-map-marker-alt d-flex justify-content-center align-items-center"></i>
                  </span>
                </div>
                <div class="col-9">
                  <h4>Ubicación:</h4>
                  <p>Barbosa, Santander</p>
                </div>
              </div>
            </div>
            <div class="email col-12">
              <div class="row">
                <div class="col-3 d-flex justify-content-center align-items-center">
                  <span>
                    <i class="fas fa-envelope-open d-flex justify-content-center align-items-center"></i>
                  </span>
                </div>
                <div class="col-9">
                  <h4>Correo Electronico:</h4>
                  <p>mipequeñomundo@gmail.com</p>
                </div>
              </div>
            </div>
            <div class="phone col-12">
              <div class="row">
                <div class="col-3 d-flex justify-content-center align-items-center">
                  <span>
                    <i class="fab fa-whatsapp d-flex justify-content-center align-items-center"></i>
                  </span>
                </div>
                <div class="col-9">
                  <h4>Telefono:</h4>
                  <p>+57 3136052704</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-8 mt-5 mt-lg-0">

          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group ">
                <input type="text" name="name" class="form-control border-content-blue" id="name" placeholder="Nombres" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control border-content-blue" name="email" id="email" placeholder="Correo Electronico" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control border-content-blue" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 15 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control border-content-blue" name="message" rows="5" data-rule="required" data-msg="PorFavor¡ Escriba su mensaje" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
      
            <div class="text-center "><a class="btn btn-outline-primary border-content-blue mb-3">Enviar Mensaje</a></div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- ====Final Sección De Contacto==== -->
 
  <!--Footer -->
   <?php include ('footer.php'); ?>