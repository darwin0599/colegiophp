<?php 
    include ("config.php");
    include ("header_forms.php");
    $ret=mysqli_query($con,"SELECT * FROM banners");
    $num = $ret->fetch_assoc();
?>

<body>
    <section class="container-fluid">
        <div class="row ">
            <div class="col-3 bg-danger">
                <nav class="bg-danger w-100">
                    <?php include ("menu_forms.php"); ?>
            </div>
            <div class="col-9 d-flex justify-content-center">
                <div class="container my-3">
                    <div class="col-md-10 m-auto">
                        <form id="uploadForm" action="registro_banner.php" method="post" role="form" class="form-width">
                            <h4 class="form-header text-center bg-warning">CREAR BANNER</h4>
                            <div class="form-group text-left">
                                <h5 class="text-dark">Imagenes y videos</h5>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 my-4 ">
                                    <div class="row">
                                        <div class="col-12 d-flex justify-content-center py-3">
                                            <img id="thumbnil" src="images/user.png" alt="image"/>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input type="file" accept="image/*" onchange="showMyImage(this)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre" required/>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea type="text" name="description" id="description" class="form-control" placeholder="Descripción"
                                        required></textarea>

                                </div>
                                <div class="form-group col-md-12">
                                    <input type="number" name="posicion" class="form-control" id="posicion" placeholder="Posición"/>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="exampleFormControlSelect1">Sectión</label>
                                    <select class="form-control" name="seccion" id="seccion">
                                        <option value="">- Selecciona una la sección -</option>
                                        <option value="slide_index">slider_index</option>
                                        <option value="admisiones">admisiones</option>
                                        <option value="matriculas">matriculas</option>
                                        <option value="galeria">galeria</option>
                                        <option value="cronograma">cronograma</option>
                                        <option value="horario_jardin">horario_jardin</option>
                                        <option value="horario_prejardin">horario_prejardin</option>
                                        <option value="horario_parvulos">horario_parvulos</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-center bg-warning">
                                <button class="btn btn-outline-warning col-md-4" type="submit">Crear</button>
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
                    var img=document.getElementById("thumbnil");            
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