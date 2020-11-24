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
                        <h4 class="form-header text-center bg-warning">RESGISTRO OBSERVACIONES</h4>
                        <P>Adjuntar aquí los cambios o aspectos relevantes que se presenten en torno al niño- niña y su familia que ameriten ser tenidos en cuenta, lo anterior con el objeto de no hacer tachones ni borrones en esta ficha, igualmente registre eventos de maltrato, descuido o negligencia de parte de los padres o  cuidadores haciéndole firmar.</P>
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