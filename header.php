<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Darwin Salinas y Lyda Barbosa">
    <meta name="description"
        content="Plataforma web para Mi Pequeño Mundo albergara informacion de la institucion, observador virtual y gestion documental ">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/estilos.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Mi Pequeño Mundo</title>
</head>

<body>
    <header>
        <!--Social-->
        <div class="social">
            <ul class="d-inline">
                <li>
                    <a href="horarios.php" class="cronograma d-inline-flex align-items-center">
                        <i class="far fa-calendar-alt width-icons"></i> 
                        <p class="m-0 ml-3">Cronograma</p>
                    </a>
                </li>
                <li>
                    <a href="honores.php" class="cuadro d-inline-flex align-items-center">
                        <i class="fas fa-award width-icons"></i>
                        <p class="m-0 ml-3">Cuadro Honor</p>
                    </a>
                </li>
                <li>
                    <a href="docentes.php" class="docentes d-inline-flex align-items-center">
                        <i class="fas fa-chalkboard-teacher width-icons"></i>
                        <p class="m-0 ml-3">Docentes</p>
                    </a>
                </li>
                <li>
                    <a href="eventos.php" class="eventos d-inline-flex align-items-center">
                        <i class="far fa-list-alt width-icons"></i>
                        <p class="m-0 ml-3">Eventos</p>
                    </a>
                </li>
                <li>
                    <a href="informacion.php" class="info d-inline-flex align-items-center">
                        <i class="fas fa-school width-icons"></i>
                        <p class="m-0 ml-3">Información Institucional</p>
                    </a>
                </li>
                <li>
                    <a href="galeria.php" class="multi d-inline-flex align-items-center">
                        <i class="far fa-images width-icons"></i>
                        <p class="m-0 ml-3">Multimedia</p>
                    </a>
                </li>
                <li>
                    <a href="manual.php" class="manual d-inline-flex align-items-center">
                        <i class="fas fa-book width-icons"></i>
                        <p class="m-0 ml-3">Manual de convivencia</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="container">
            <div id="social" class="row justify-content-md-center">
                <div class="contact-info col-12 col-md-6 col-lg-5 ">
                    <div class="row">
                        <div class="col-12 col-12 d-flex justify-content-center justify-content-md-start">
                            <a href="#"> <i class="fas fa-map-marker-alt"></i> Crr 8 # 14a-15 Barbosa,
                                Santander.</a>
                        </div>
                        <div class="col-12 d-flex justify-content-center justify-content-md-start">
                            <a href="mailto:contact@example.com" target="_blank"><i class="far fa-envelope-open"></i>
                                contact@example.com</a>
                        </div>
                        <div class="col-12 col-12 d-flex justify-content-center justify-content-md-start">
                            <a href="https://api.whatsapp.com/send?phone=573136052704&text=Hola!%20Quiero%20generar%20mas%20ventas!"
                                target="_blank"><i class="fab fa-whatsapp"></i> +57 3136052704</a>
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
        <nav class="navbar navbar-expand-md navbar-dark bg-red mt-1">
            <a class="navbar-brand d-block d-md-none" href="#">Mi pequeño mundo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container" data-aos="fade-down">
                <div class="collapse navbar-collapse justify-content-center " id="navbarSupportedContent">
                    <ul class="navbar-nav text-right">
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="Index.php">Inicio</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link text-white" href="informacion.php">¿Quienes somos?</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="noticias.php">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="contactenos.php">Contactenos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">Inicio de Sesion</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>