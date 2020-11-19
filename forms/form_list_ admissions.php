<!DOCTYPE html>
<html lang="en">
<?php 
    include ("config.php");
    $ret=mysqli_query($con,"SELECT * FROM news WHERE section='admisiones'");
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/forms.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Mi Pequeño Mundo</title>
</head>

<body>
    <section class="container-fluid">
        <div class="row ">
            <div class="col-2 bg-warning">
                <nav class="bg-warning w-100">
                    <h5>Mi pequeño mundo</h5>
                    <hr class="my-2">
                    <ul class="style-none">
                        <li class="py-2">
                            <a href="form_list_banner.php"><i class="fas fa-cog"></i> Banners, imagenes, videos</a>
                        </li>
                        <li class="py-2">
                            <a href="form_list_news.php"><i class="fas fa-cog"></i> Noticias, Eventos </a>
                        </li>
                        <li class="py-2">
                            <a href="form_list_admissions.php"><i class="fas fa-cog"></i> Admisiones, Inscripciones </a>
                        </li>
                        <li class="py-2">
                            <a href="#"><i class="fas fa-cog"></i> Cuadro Honores</a>
                        </li>
                        <li class="py-2">
                            <a href="#"><i class="fas fa-cog"></i> Docentes</a>
                        </li>
                        <li class="py-2">
                            <a href="#"><i class="fas fa-cog"></i> Informacion Contacto</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-8 offset-1">
                <div class="container my-4">
                    <div class="d-flex justify-content-between bg-warning form-header">
                        <h2 class="d-flex m-0 align-items-center">Listado de categorias</h2>
                        <a id="show_add_category" href="form_creator_banner.php"
                            class="btn bg-transparent d-flex align-items-center"><i class="fa fa-plus"></i></a>
                    </div>
                    <form class="form group">
                        <div class="row">
                            <div class="col-12">
                                Lista de Admisiones y Matriculas.  
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Imagen</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Sección</th>
                                        <th scope="col">Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                            $i = 0;
                                            while($row = mysqli_fetch_assoc($ret)) {
                                                $i++;
                                                echo ' <tr>
                                                <th>'.$row['id'].'</th>
                                                <td><a href="'.$row['url_media'].'" class="logo">
                                                <img src="'.$row['url_media'].'" alt="'.$row['title'].'"
                                                    class="img-fluid"></a></td>
                                                <td>'.$row['title'].'</td>
                                                <td>'.$row['description'].'</td>
                                                <td>'.$row['section'].'</td>
                                                <td class="text-center">
                                                    <a href="form_edit_banner.php" class="btn">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                </td>
                                                
                                            </tr>';
                                            }
                                        ?>
                                </tbody>
                            </table>
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
</body>

</html>