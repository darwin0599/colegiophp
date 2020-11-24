<?php 
    include ("config.php");
    include ("header_forms.php");
    $titleErr = $descriptionErr = $positionErr = $sectionErr = '';
    $title = $description = $position = $section = '';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if(isset($_POST['title']) && trim($_POST['title'])){
            $title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
        }else{
            $titleErr = "Titulo incorrecto";
        }
        if(isset($_POST['description']) && trim($_POST['description'])){
            $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
        }else{
            $descriptionErr = "Descripción incorrecta";
        }
        if(isset($_POST['position']) && trim($_POST['position'])){
            $position = filter_var($_POST['position'], FILTER_SANITIZE_STRING);
        }else{
            $positionErr = "Posición incorrecta";
        }
        if(isset($_POST['section']) && trim($_POST['section'])){
            $section = filter_var($_POST['section'], FILTER_SANITIZE_STRING);
        }else{
            $sectionErr = "Sección incorrecta";
        }
    }
?>
<body>
    <section class="container-fluid">
        <div class="row ">
            <div class="col-3 bg-danger">
                <nav class="bg-danger w-100">
                    <?php include ("menu_forms.php"); ?>
                </nav>
            </div>
            <div class="col-9">
                <div class="row my-3">
                    <div class="col-md-10 m-auto container">
                        <h4 class="form-header text-center bg-warning">RESGISTRO ESTUDIANTE</h4>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">            
                                    <input type="text" name="primer_apellido" class="form-control" id="primer_apellido" placeholder="Primer apellido" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required /> <small class="text-danger"><?php echo $titleErr; ?></small>
                                </div>
                                <div class="form-group col-md-6">            
                                    <input type="text" name="segundo_apellido" class="form-control" id="segundo_apellido" placeholder="Segundo Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required /> <small class="text-danger"><?php echo $titleErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="nombres" class="form-control" id="nombres" placeholder="Nombres" data-rule="minlen:4" data-msg="Please enter at least 4 chars" value="<?php echo !empty($title) ? $title : ""; ?>" required /> <small class="text-danger"><?php echo $titleErr; ?></small></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Address 2</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
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