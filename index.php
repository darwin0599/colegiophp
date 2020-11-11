<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Darwin Salinas y Lyda Barbosa">
        <meta name="description" content="Plataforma web para Mi Pequeño Mundo albergara informacion de la institucion, observador virtual y gestion documental ">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/estilos.css">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
       <title>Mi Pequeño Mundo</title>
</head>
<body>
  <header class="background-image">

    <!--Social-->
      <div class="container">
        <div id="social" class="row justify-content-md-center">
          <div class="contact-info col-12 col-md-6 col-lg-5 ">
              <div class="row">
                <div class="col-12 col-12 d-flex justify-content-center justify-content-md-start">
                  <a href="#">                                    <i class="fas fa-map-marker-alt"></i> Crr 8 # 14a-15 Barbosa, Santander.</a>
                </div>
                <div class="col-12 d-flex justify-content-center justify-content-md-start">
                  <a href="mailto:contact@example.com" target="_blank"><i class="far fa-envelope-open"></i> contact@example.com</a>
                </div>
                <div class="col-12 col-12 d-flex justify-content-center justify-content-md-start">
                  <a href="https://api.whatsapp.com/send?phone=573136052704&text=Hola!%20Quiero%20generar%20mas%20ventas!" target="_blank"><i class="fab fa-whatsapp"></i> +57 3136052704</a>
                </div>
              </div>
          </div>
          <div class="social-network d-flex justify-content-center align-items-center col-12 col-md-6 col-lg-6">
              <a href="#" class="twitter mx-1" target="_blank"><i class="fab fa-twitter"></i></a>
              <a href="#" class="facebook mx-1"><i class="fab fa-facebook-f"></i></a>
              <a href="#" class="instagram mx-1"><i class="fab fa-instagram"></i></a>
              <a href="#" class="google-plus mx-1"><i class="fab fa-google-plus-g"></i></a>
              <a href="#" class="linkedin mx-1"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
      <!--Navbar, menú-->
      <nav class="navbar navbar-expand-lg navbar-light bg-red d-flex ">
            <div class="container"data-aos="fade-down">
                <a class="navbar-brand d-block d-md-none" href="#">Bienvenidos a Mi pequeño mundo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>           
                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <ul class="navbar-nav">
                      <li class="nav-item active">
                          <a class="nav-link" href="Index.php">Inicio</a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="informacion.php">¿Quienes somos?</a>
                      </li>
                      <li class="nav-item">
                              <a class="nav-link" href="noticias.php">Noticias</a>
                      </li>
                      <li class="nav-item">
                              <a class="nav-link" href="contactenos.php">Contactenos</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="">Inicio de Sesion</a>
                      </li>
                    </ul>
                </div>
            </div>
      </nav>
            <div class="container row">
              <div class="col-12 col-md-4 " >
                <a id="logo"href="index.php" class="logo"><img src="images/circle-cropped.png" alt="Logo escudo institucional" class="img-fluid"></a>
              </div>
            <div class="col-12 col-md-4 text-center mt-12  style tittle" > 
              <h1 id="name"class="name"><a href="index.php">Centro Educativo Mi Pequeño Mundo</a></h1>
            </div>
            <div class="col-12 col-md-4 text-center mt-12" >
              <h2 class="lema"><a href="index.php">Formando Futuros Soñadores</a></h2>
            </div>
          </div>
        </div>  
      </header>

      <!-- ======= Section Menu ======= -->

      <section class="service container m-auto row-21 justify-content-center py-21">
        <div class="col-12 col-md-3 col-lg-3">
            <div class="card">
                <div class="card-body d-flex justify-content-around align-items-center">
                        <span><i class="fa fa-users fa-3x"></i></span>
                        <a href="horarios.php">Cronograma</a>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 col-lg-3">
          <div class="card">
              <div class="card-body d-flex justify-content-around align-items-center">
                      <span ><i class="fa fa-users fa-3x" ></i></span>
                      <a href="honores.php">Cuadro Honor</a>
              </div>
          </div>
        </div>

      <div class="col-12 col-md-4 col-lg-3">
        <div class="card">
            <div class="card-body d-flex align-items-center">
                    <span class="pr-2"><i class="fa fa-users fa-3x"></i></span>
                    <a href="docentes.php">Docentes Administrativos</a>
                    
            </div>
        </div>
      </div>

      <div class="col-12 col-md-3 col-lg-3">
        <div class="card">
            <div class="card-body d-flex align-items-center">
                    <span class="pr-3"><i class="fa fa-users fa-3x"></i></span>
                    <a href="eventos.php">Eventos</a>
                  
            </div>
        </div>
      </div>

      <div class="col-12 col-md-4 col-lg-3">
        <div class="card">
            <div class="card-body d-flex align-items-center">
                    <span class="pr-3"><i class="fa fa-users fa-3x"></i></span>
                    <a href="informacion.php">Información Institucional</a>
                  
            </div>
        </div>
      </div>
      <div class="col-12 col-md-3 col-lg-3">
        <div class="card">
              <div class="card-body d-flex justify-content-around align-items-center">
                      <span><i class="fa fa-users fa-3x"></i></span>
                      <a href="galeria.php">Multimedia</a>                   
              </div>
        </div>
        </div>
        <div class="col-12 col-md-4 col-lg-3">
          <div class="card">
                <div class="card-body d-flex align-items-center">
                        <span class="pr-2"><i class="fa fa-users fa-3x"></i></span>
                        <a href="manual.php">Manual de convivencia</a>
                </div>
          </div>
        </div>
      </section>
      <!-- ======= Imagenes presentación  ======= -->
        <div class="container border-content pt-2 pb-2">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/biblioteca.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/adaptacion camping.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/ubicacion.jpg" class="d-block w-100" alt="...">
              </div>
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
      
      <!-- ======= Participación  ======= -->
      <div class="container ">
      <div class="row text-center mt-3 pt-2 pb-2 border-content">
        <div class="col-4 text-center">
            <h4 id=""class="informacion"><a href="informacion.php">Proceso Admisiones</a></h4>
        </div>
        <div class="col-4 ">    
            <h4 class="Contacto"><a href="contactenos.php">Contacto</a></h4>
        </div>
        <div class="col-4 ">    
          <h4 class="Información"><a href="informacion.php">Información</a></h4>
      </div>
      </div>
    </div>
      <div class="container d-lg-flex d-md-flex ">
        <div class="container col-12 col-lg-10 col-md-6 justify-content-center border-content">
            <a id="" href="index.php" class="logo"><img src="images/globos jardin.jpg" alt="Imagen invitación a admisiones y contacto" class="img-fluid"></a>
        </div>   
      </div>
    

      <!-- ======= Más sobre nosotros  ======= -->
<!--Div important-->
<section id="important" class="d-flex align-items-center py-5">
  <div class="container">
      <div class="row mt-2">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-center border-content ">
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/BD4qBctPHzU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <a href="" class="" data-vbtype="video" data-autoplay="true"></a>
              </div>
          <div class="col-lg-6 d-flex">
              <div class="d-flex justify-content-center">
                  <div class="row">
                      <div class="col-lg-5 col-xl-5 d-flex align-items-stretch">
                          <div class="mt-4 mt-xl-0 border-content p-2">
                          <a id="" href="index.php" class="logo"><img src="images/globos jardin.jpg" alt="Imagen invitación a admisiones y contacto" class="img-fluid"></a>    
                        </div>
                      </div>
                      <div class=" col-lg-5 col-xl-5 d-flex align-items-stretch">
                          <div class="mt-4 mt-xl-0 border-content p-2">
                          <a id="" href="index.php" class="logo"><img src="images/globos jardin.jpg" alt="Imagen invitación a admisiones y contacto" class="img-fluid"></a>    
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div><!-- ===== Final del contenido inicial ======= -->
        </div>
      </div>
  </div>
</section><!--Ens div important-->
      <!--============= Galeria Imagenes ============== -->
      <section id="gallery" class="gallery">
        <div class="container border-content pt-2">

          <div class="section-title">
            <h2 class="text-center mt-3 md-3">Momentos de Mi Pequeño Mundo</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row no-gutters">

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="images/biblioteca.jpg" class="venobox" data-gall="gallery-item">
                  <img src="images/biblioteca.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="images/biblioteca.jpg" class="venobox" data-gall="gallery-item">
                  <img src="images/biblioteca.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="images/biblioteca.jpg" class="venobox" data-gall="gallery-item">
                  <img src="images/biblioteca.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="images/biblioteca.jpg" class="venobox" data-gall="gallery-item">
                  <img src="images/biblioteca.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="images/biblioteca.jpg" class="venobox" data-gall="gallery-item">
                  <img src="images/biblioteca.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="images/biblioteca.jpg" class="venobox" data-gall="gallery-item">
                  <img src="images/biblioteca.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="images/biblioteca.jpg" class="venobox" data-gall="gallery-item">
                  <img src="images/biblioteca.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

            <div class="col-lg-3 col-md-4">
              <div class="gallery-item">
                <a href="images/biblioteca.jpg" class="venobox" data-gall="gallery-item">
                  <img src="images/biblioteca.jpg" alt="" class="img-fluid">
                </a>
              </div>
            </div>

          </div>

        </div>
      </section>

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
            <!--<div class="mb-3">
              <div class="loading">Cargando...</div>
              <div class="error-message"></div>
              <div class="sent-message">El Mensaje Se Ha Enviado.</div>
            </div>-->
            <div class="text-center "><a class="btn btn-outline-primary border-content-blue mb-3">Enviar Mensaje</a></div>
          </form>
        </div>
      </div>
    </div>
  </section><!-- ====Final Sección De Contacto==== -->
      <!--Footer -->
      <footer id="footer">
        <div class="footer-top">
          <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Mi Pequeño Mundo</h3>
                <p>
                    Crr 8 # 14a-15<br>
                    Barbosa, Santander <br>
                    Colombia <br><br>
                    <strong>Telefono:</strong> +57 3136052704<br>
                    <strong>Email:</strong> info@example.com<br>
                </p>
                </div>
                <div class="col-lg-2 col-md-6 footer-links">
                <h4>Menú Final</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="index.php">Inicio</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="informacion.php">Nosotros Somos!</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="horarios.php">Matriculas</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="informacion.php">Perfil Institucional</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="noticias.php">Noticias</a></li>
                
                </ul>
                </div>
                <div class="col-lg-3 col-md-6 footer-links">
                <h4>
                  <br>
                </h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="contenido.php">Observador Virtual</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="docentes.php">Docentes y Administrativos </a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="cronograma.php">Horarios</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="contactenos.php">Contactanos</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="#">Inicio Sesion</a></li>
                </ul>
                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Te contactamos</h4>
                <p>Mi pequeño mundo ofrece llamarte, si deseas conocer mas informacion sobre nuestros servicios digita tu NUMERO TELEFONICO.</p>
                <form class="border-content-blue" method="post">
                    <input type="number" name="number"><input type="submit" value="Enviar Contacto">
                </form>
                </div>
            </div>
            <div class="row">
              <div id="social-footer" class="d-flex align-items-center py-3 col-12">
                <div class="row">
                    <div class="copyright d-flex justify-content-center col-12 col-xl-5">
                        <p>&copy; Todos los Derechos Reservados<strong><span> Mi Pequeño Mundo</span></strong>.</p>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="row justify-content-md-center">
                            <div class="contact-info col-12 col-md-6 col-lg-5 ">
                                <div class="row">
                                  <div class="col-12 col-12 d-flex justify-content-center justify-content-md-start">
                                    <a href="#">                                    <i class="fas fa-map-marker-alt"></i>Crr 8 # 14a-15 Barbosa, Santander.</a>
                                  </div>
                                  <div class="col-12 d-flex justify-content-center justify-content-md-start">
                                    <a href="mailto:contact@example.com" target="_blank"><i class="far fa-envelope-open"></i> contact@example.com</a>
                                  </div>
                                  <div class="col-12 col-12 d-flex justify-content-center justify-content-md-start">
                                    <a href="https://api.whatsapp.com/send?phone=573136052704&text=Hola!%20Quiero%20generar%20mas%20ventas!" target="_blank"><i class="fab fa-whatsapp"></i> +57 3136052704</a>
                                  </div>
                                </div>
                            </div>
                            <div class="social-footer-network d-flex justify-content-center align-items-center col-12 col-md-6 col-lg-6">
                                <a href="#" class="twitter mx-1" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="facebook mx-1"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="instagram mx-1"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="google-plus mx-1"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="linkedin mx-1"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer><!-- End Footer -->
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
          integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
          crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
          integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
          crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
          integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
          crossorigin="anonymous"></script>
  </body>
  </html>


