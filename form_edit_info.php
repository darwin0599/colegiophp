<?php 
    include ("config.php");
    include ("header_forms.php");
    $ret=mysqli_query($con,"SELECT * FROM informations WHERE id=".$_GET["id"]);
    $num = $ret->fetch_assoc();
    $imageErr = $url_imageErr = $descriptionErr = $locationErr = $addressErr = $email_oneErr = $email_twoErr = $phone_oneErr = $phone_twoErr = '';
    $image = $url_image = $description = $location = $address = $email_one = $email_two = $phone_one = $phone_two = '';
    if ($_SERVER['REQUEST_METHOD']=="POST") {
        if(isset($_POST['url_image']) && trim($_POST['url_image'])){
            $url_image = filter_var($_POST['url_image'], FILTER_SANITIZE_STRING);
        }else{
            $url_imageErr = "Url image incorrecta";
        }
        if(isset($_POST['description']) && trim($_POST['description'])){
            $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
        }else{
            $descriptionErr = "Descripción incorrecta";
        }
        if(isset($_POST['location']) && trim($_POST['location'])){
            $location = filter_var($_POST['location'], FILTER_SANITIZE_STRING);
        }else{
            $locationErr = "Posición incorrecta";
        }
        if(isset($_POST['address']) && trim($_POST['address'])){
            $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
        }else{
            $addressErr = "Dirección incorrecta";
        }
        if(isset($_POST['email_one']) && trim($_POST['email_one'])){
            $email_one = filter_var($_POST['email_one'], FILTER_SANITIZE_STRING);
        }else{
            $email_oneErr = "Correo incorrecto";
        }
        if(isset($_POST['email_two']) && trim($_POST['email_two'])){
            $email_two = filter_var($_POST['email_two'], FILTER_SANITIZE_STRING);
        }else{
            $email_twoErr = "Correo incorrecto";
        }
        if(isset($_POST['phone_one']) && trim($_POST['phone_one'])){
            $phone_one = filter_var($_POST['phone_one'], FILTER_SANITIZE_STRING);
        }else{
            $phone_oneErr = "Teléfono incorrecto";
        }
        if(isset($_POST['phone_two']) && trim($_POST['phone_two'])){
            $phone_two = filter_var($_POST['phone_two'], FILTER_SANITIZE_STRING);
        }else{
            $phone_twoErr = "Teléfono incorrecto";
        }

        $image = $_FILES['image']['name'];
        if (isset($image) && $image != "") {
            $tipo = $_FILES['image']['type'];
            $tamano = $_FILES['image']['size'];
            $temp = $_FILES['image']['tmp_name'];
            if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
                $imageErr = 'La extensión o el tamaño de los archivos no es correcta - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.';
            }
            else {
                if (move_uploaded_file($temp, 'images/'.$image)) {
                    echo 'entra';
                    chmod('images/'.$image, 0777);
                    unlink($num['image']);
                    $image = 'images/'.mt_srand(5).$image;
                }
                else {
                    $imageErr = 'Ocurrió algún error al subir el fichero. No pudo guardarse.';
                }
            }
        }

        if($image == '') {
            $image = $num['image'];
        }
        $imageErr = $url_imageErr = $descriptionErr = $locationErr = $addressErr = $email_oneErr = $email_twoErr = $phone_oneErr = $phone_twoErr = '';
        if ($imageErr == '' && $url_imageErr == '' && $descriptionErr == '' && $locationErr == '' && $addressErr == '' && $email_oneErr == '' && $email_twoErr == '' && $phone_oneErr == '' && $phone_twoErr == '') {
            $sql = "UPDATE informations SET description='{$description}',location='{$location}',address='{$address}',email_one='{$email_one}',email_two='{$email_two}',phone_one='{$phone_one}',phone_two='{$phone_two}',url_image='{$url_image}', image='{$image}' WHERE id = ".$_GET["id"];
            // realizar la insercion en la base de datos
            mysqli_query($con, $sql);
            header("Location: form_list_info.php");
        }
    }
?>
<body>
    <section class="container-fluid">
        <div class="row ">
            <div class="col-3 bg-danger">
                <nav class="bg-danger w-100">
                    <?php include ("menu_forms.php"); ?>
            </div>
            <div class="col-9">
                <div class="container my-3">
                    <div class="col-md-10 m-auto">
                        <form method="post" action="form_edit_info.php?id=<?php echo $_GET['id']; ?>"
                            enctype="multipart/form-data">
                            <h4 class="form-header text-center bg-primary">EDITAR INFORMATION</h4>
                            <div class="form-group text-left">
                                <h5 class="text-dark">INFORMACIÓN </h5>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 my-4 ">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center py-3">
                                            <img id="thumbnil" src="<?php echo $num["image"]; ?>" alt="image" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input type="file" name="image" accept="image/*"
                                                onchange="showMyImage(this)" />
                                            <small class="text-danger"><?php echo $imageErr; ?></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="url_image" class="form-control" id="url_image"
                                        placeholder="Url image" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars"
                                        value="<?php echo !empty($url_image) ? $url_image : $num["url_image"]; ?>" required />
                                    <small class="text-danger"><?php echo $url_imageErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" id="description" name="description"
                                        placeholder="Descripción"
                                        required><?php echo !empty($description) ? $description : $num["description"]; ?></textarea>
                                    <small class="text-danger"><?php echo $descriptionErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="location" class="form-control" id="location"
                                        placeholder="Ubicación" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required
                                        value="<?php echo !empty($location) ? $location : $num["location"]; ?>" />
                                    <small class="text-danger"><?php echo $locationErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="address" class="form-control" id="address"
                                        placeholder="Dirección" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required
                                        value="<?php echo !empty($address) ? $address : $num["address"]; ?>" />
                                    <small class="text-danger"><?php echo $addressErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="email_one" class="form-control" id="email_one"
                                        placeholder="Correo 1" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required
                                        value="<?php echo !empty($email_one) ? $email_one : $num["email_one"]; ?>" />
                                    <small class="text-danger"><?php echo $email_oneErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="email_two" class="form-control" id="email_two"
                                        placeholder="Correo 2" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars"
                                        value="<?php echo !empty($email_two) ? $email_two : $num["email_two"]; ?>" />
                                    <small class="text-danger"><?php echo $email_twoErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="phone_one" class="form-control" id="phone_one"
                                        placeholder="Teléfono 1" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars" required
                                        value="<?php echo !empty($phone_one) ? $phone_one : $num["phone_one"]; ?>" />
                                    <small class="text-danger"><?php echo $phone_oneErr; ?></small>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="phone_two" class="form-control" id="phone_two"
                                        placeholder="Teléfono 2" data-rule="minlen:4"
                                        data-msg="Please enter at least 4 chars"
                                        value="<?php echo !empty($phone_two) ? $phone_two : $num["phone_two"]; ?>" />
                                    <small class="text-danger"><?php echo $phone_twoErr; ?></small>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <input class="btn btn-warning" type="submit" name="" value="Enviar">
                            </div>
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
    <script>
    function showMyImage(fileInput) {
        var files = fileInput.files;
        for (var i = 0; i < files.length; i++) {
            var file = files[i];
            var imageType;
            if (!file.type.match(imageType)) {
                continue;
            }
            var img = document.getElementById("thumbnil");
            img.file = file;
            var reader = new FileReader();
            reader.onload = (function(aImg) {
                return function(e) {
                    aImg.src = e.target.result;
                };
            })(img);
            reader.readAsDataURL(file);
        }
    }
    </script>
</body>

</html>