<?php 
    include ("config.php");
    $rethonors=mysqli_query($con,"SELECT * FROM honors "); 
?>

<body>
    <section class="container-fluid">
        <div class="row ">
            <div class="col-2 bg-warning">
                <nav class="bg-warning w-100">
                    <h5>Mi pequeño mundo</h5>
                    <hr class="my-2">
                    <ul class="style-none">
                        <li class="py-2">
                            <a href="form_list_banner.php"><i class="fas fa-cog"></i> Imagenes y videos</a>
                        </li>
                        <li class="py-">
                            <a href="form_list_news.php"><i class="fas fa-cog"></i> Noticias y Eventos </a>
                        </li>
                        <li class="py-2">
                            <a href="form_list_admissions.php"><i class="fas fa-cog"></i> Admisiones y Matriculas </a>
                        </li>
                        <li class="py-2">
                            <a href="form_list_honors.php"><i class="fas fa-cog"></i> Cuadro Honores</a>
                        </li>
                        <li class="py-2">
                            <a href="form_list_teacher.php"><i class="fas fa-cog"></i> Docentes</a>
                        </li>
                        <li class="py-2">
                            <a href="form_list_info.php"><i class="fas fa-cog"></i> Información Contacto</a>
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
                                Lista de Noticias y Eventos.  
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
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
                                            while($row = mysqli_fetch_assoc($rethonors)) {
                                                $i++;
                                                echo ' <tr>
                                                <th>'.$row['id'].'</th>
                                                <td><a href="'.$row['image'].'" class="logo">
                                                <img class="image_form" src="'.$row['image'].'" alt="'.$row['name'].'"
                                                    ></a></td>
                                                <td>'.$row['name'].'</td>
                                                <td>'.$row['description'].'</td>
                                                <td>'.$row['grade'].'</td>
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