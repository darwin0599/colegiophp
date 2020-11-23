<?php 
    include ("config.php");
    include ("header_forms.php");
    $ret=mysqli_query($con,"SELECT * FROM informations");
    $num=$ret->fetch_assoc();
?>

<body>
    <section class="container-fluid justify-content-between">
        <div class="row ">
            <div class="col-3 bg-danger">
                <?php 
                include ("menu_forms.php");
                ?>
            </div>
            <div class="col-8 center-block ">
                <div class="container ">
                    <div class="d-flex justify-content-center bg-primary form-header">
                        <h2 class="d-flex m-0 align-items-center text-center">ADMINISTRADOR DE CONTENIDO</h2>
                    </div>
                    <form class="form group">
                        <div class="row">
                            <div class="col-12">
                                LISTA DE INFROMACIÓN.
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Descripcion</th>
                                        <th scope="col">Ubicación</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Email-1</th>
                                        <th scope="col">Email-2</th>
                                        <th scope="col">Tel-1</th>
                                        <th scope="col">Tel-2</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Opciones</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th><?php echo $num['id']; ?></th>
                                        <td><?php echo $num['description']; ?></td>
                                        <td><?php echo $num['location']; ?></td>
                                        <td><?php echo $num['address']; ?></td>
                                        <td><?php echo $num['email_one']; ?></td>
                                        <td><?php echo $num['email_two']; ?></td>
                                        <td><?php echo $num['phone_one']; ?></td>
                                        <td><?php echo $num['phone_two']; ?></td>
                                        <td><a href="<?php echo $num['image']; ?>" class="logo">
                                                <img src="<?php echo $num['image']; ?>"
                                                    alt="<?php echo $num['url_image']; ?>" class="image_form"></a></td>
                                        <td class="text-center">
                                            <a href="form_edit_info.php?id=<?php echo $num['id']; ?>" class="btn">
                                                <i class="fa fa-edit color-blue"></i>
                                            </a>
                                        </td>
                                    </tr>

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