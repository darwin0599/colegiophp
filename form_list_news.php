<?php 
    include ('header_forms.php');
    include ("config.php");
    $ret=mysqli_query($con,"SELECT * FROM news WHERE section='news' OR section='events'");
?>

<body>
    <section class="container-fluid">
        <div class="row ">
            <div class="col-3 bg-danger">
                <?php include ("menu_forms.php"); ?>
            </div>
            <div class="col-8 center-block">
                <div class="container ">
                    <div class="d-flex justify-content-between bg-primary form-header">
                        <h2 class="d-flex m-0 align-items-center text-center">ADMINISTRADOR DE CONTENIDO</h2>
                        <a id="show_add_category" href="form_creator_news.php"
                            class="btn bg-transparent d-flex align-items-center"><i class="fa fa-plus"></i></a>
                    </div>
                    <form class="form group">
                        <div class="row">
                            <div class="col-12">
                                LISTA DE NOTICIAS Y EVENTOS.
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
                                                <td><a href="'.$row['url_media'].'" >
                                                <img  class="image_form" src="'.$row['url_media'].'" alt="'.$row['title'].'"
                                                   ></a></td>
                                                <td>'.$row['title'].'</td>
                                                <td>'.$row['description'].'</td>
                                                <td>'.$row['section'].'</td>
                                                <td class="text-center">
                                                    <a href="form_edit_news.php?id='.$row['id'].'" class="btn">
                                                    <i href="" class="fa fa-edit color-blue"></i>
                                                    </a>
                                                    <button onclick="test('.$row['id'].', `'.$row['url_media'].'`)" class="btn">
                                                        <i class="fa fa-trash text-danger"></i>
                                                    </button>
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