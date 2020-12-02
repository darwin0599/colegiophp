<?php
session_start();
error_reporting(0);
include ("config.php");
if ($_SERVER['REQUEST_METHOD']=="POST") {
    var_dump("entra a post");
    if(isset($_POST['usuario']) && trim($_POST['usuario']) && isset($_POST['password']) && trim($_POST['password'])){
        var_dump("entra a validacion de campo");
        $ret=mysqli_query($con,"SELECT * FROM users WHERE user='".$_POST['usuario']."' and password='".md5($_POST['password'])."'");
        var_dump($ret);
        $num=mysqli_fetch_array($ret);
        var_dump($num);
        if($num>0){
            var_dump("entra exito");
        
        echo("entra");
        // For stroing log if user login successfull
        header("location:form_list_banner.php");
        exit();
        }
    }else{
        
    }
}

?>



<!doctype html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/estilos.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link rel="icon" type="image/png" href="images/favicon.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Signika:wght@700&display=swap" rel="stylesheet">
        <title>Mi pequeño mundo</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-primary d-flex justify-content-center">
            <a class="navbar-brand">
                <h3 class="text-light text-center">Mi pequeño mundo</h3>
            </a>
        </nav>
    </header>
    <section id="inicio-sesion" class="py-5 justify-content-center">
        <div class="container ">
        <div class="form-content row justify-content-end PY-5">
            <div class="col-10 col-md-5">
                <div class="row justify-content-center border border-dark font-weight-bold rounded">
                    <div class="col-8 text-center my-4">
                        <img src="images/circle-cropped.png" class="img-fluid" alt="">
                    </div>
                    <form class="col-12 bg-ligth d-flex justify-content-center p-3" method="post" action="inicio_sesion.php">
                        <div class="form-row justify-content-center align-items-center bg-blue">
                            <div class="col-12 text-center">
                                <h4 class=" font-weight-bold">INICIO DE SESIÓN</h4>
                            </div>
                            <div class="col-12">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                <div class="input-group-text"><i class="fas fa-user"></i></div>
                                </div>
                                <input name="usuario" type="text" class="form-control"  placeholder="Usuario" required>
                            </div>
                            </div>
                            <div class="col-12">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-lock"></i></div>
                                    </div>
                                <input name="password" type="password" class="form-control" placeholder="Contraseña" require>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-check mb-2">
                                <input class="form-check-input" type="checkbox" id="autoSizingCheck">
                                <label class="form-check-label text-dark font-weight-bold" for="autoSizingCheck">
                                    Recordar nombre de usuario
                                </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-outline-dark font-weight-bold mb-2 w-100">Iniciar sesión</button>
                            </div>
                            <div class="col-12 text-center">
                                <a href="#" class="text-decoration-none text-dark font-weight-bold">¿Olvidó su nombre o contraseña?</a>
                            </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    
    
    <!--Footer -->
    <?php include ('footer.php'); ?>


