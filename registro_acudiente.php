Yo -------------------------------------------------------------------------------------- identificado(a) con C.C.
N°…………………………………….
Expedida en……………………………………………….. En calidad de acudiente del niño/a……………………………………………………………..
Me comprometo a cumplir con el siguiente reglamento interno en su totalidad y acatar las sanciones correspondientes en
caso de incumplimiento para con el colegio.

AUTORIZACION: permito que se le tomen fotos al niño o niño que represento como acudiente, estas pueden ser publicadas en
las redes sociales, siempre y cuando no se afecte la dignidad del menor.
SI--------------------------- NO------------------------
En constancia se firma a los ------------ días del mes de------------- de 20—

ACUDIENTE ------------------------------------------
C.C N°------------------------------------------- COORDINADORA



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
                        <form method="post" action="form_creator_banner.php" enctype="multipart/form-data">
                            <h4 class="form-header text-center bg-primary">CREAR REGISTRAR ESTUDIANTE</h4>
                            <div class="form-group text-left">
                                <h5 class="text-dark text-center">FOTO DE ESTUDIANTE </h5>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-12 my-4 ">
                                    <div class="row justify-content-center">
                                        <div class="col-5 d-flex justify-content-center py-3">
                                            <img id="thumbnil" src="images/user.png" alt="image" />
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <input type="file" name="url_media" accept="image/*"
                                                onchange="showMyImage(this)" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group text-center col-12">
                                    <hr>
                                    <h5 class="text-dark">INFORMACIÓN DEL ESTUDIANTE </h5>
                                    <hr>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="primer_apellido" id="primer_apellido" class="form-control"
                                        placeholder="Primer apellido" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" name="segundo_apellido" id="segundo_apellido"
                                        class="form-control" placeholder="Segundo apellido" required />
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" name="nombre" id="nombre" class="form-control"
                                        placeholder="Nombres" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <select class="form-control" name="section_documento" id="section_documento"
                                        required>
                                        <option value="">Tipo de documento</option>
                                        <option value="tarjeta">T.I</option>
                                        <option value="registro">Registro civil</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="documento" id="documento" class="form-control"
                                        placeholder="N° de documento" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="expedicion" id="expedicion" class="form-control"
                                        placeholder="Lugar de expedición" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <select class="form-control" name="rol" id="rol" required>
                                        <option value="">Rol</option>

                                        <option value="registro">Estudiante</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="localidad" id="localidad" class="form-control"
                                        placeholder="Localidad O Barrio" required />
                                </div>
                                <div class="form-group col-md-2">
                                    <input type="number" name="edad" id="edad" class="form-control" placeholder="Edad"
                                        required />
                                </div>


                                <div class="form-group text-center col-12">
                                    <hr>
                                    <h5 class="text-dark">REGISTRO NACIMIENTO</h5>
                                    <hr>
                                </div>

                                <div class="form-group col-md-4">
                                    <input type="date" name="date" id="date" class="form-control" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="nacimiento" id="nacimiento" class="form-control"
                                        placeholder="Lugar de nacimiento" required />
                                </div>
                                <div class="form-group col-md-4">
                                    <input type="text" name="rh" id="rh" class="form-control"
                                        placeholder="Tipo de sangre" required />
                                </div>

                                <div class="form-group text-center col-12">
                                    <hr>
                                    <h5 class="text-dark">COMPROMISOS</h5>
                                    <P>
                                    <P> 1. El pago de la pensión se hará durante los CINCO PRIMEROS DIAS DEL MES. El no
                                        pago en los días estipulados, se cobrara el 2% de interés por día.  </P>
                                    <p> 2. La asistencia a la escuela de padres es obligatoria. La no asistencia
                                        acarreara una observación a la carpeta de el niño(a). </P>
                                    <p> 3. En caso de enfermedad del niño(a) se deberá enviar excusa vía telefónica o
                                        escrita el mismo día de la falta. En caso contrario y faltar por más de tres
                                        días sin causa justificada será causal para perder el cupo en el colegio,
                                        igualmente cuando se encuentre enfermo(a) deberá ser llevado(a) al médico y
                                        abstenerse de enviarlo(a) al colegio. Las fiebres, vómitos, diarreas, tos, gripe
                                        persistentes a cualquier otra enfermedadinfecto contagiosa, deberá ser tratada
                                        por sus familiares para evitar un contagio masivo en el colegio. Excusa si es
                                        posible con la asistencia al médico o la incapacidad del médico.  </P>
                                    <p> 4. Llevar al niño o niña en los horarios establecidos por el colegio (ser muy
                                        puntuales). En caso de llegar después de la hora fijada sin justificación valida
                                        no se recibirá el niño. En caso de retirar el niño o niña después de la hora
                                        establecida, ni la rectora, coordinadora , docentes, ni la unta interna de
                                        padres respondan por lo que le pueda suceder al niño o niña después de la hora
                                        de salida ( BIEN CLARO), se deberá llevar una excusa firmada por el acudiente de
                                        el niño o niña. </P>
                                    <p> 5. El padre de familia (acudiente) deberá responder por los daños causados por
                                        su hijo en el colegio, cualquiera que este sea. </P>
                                    <p> 6. Al niño o niña se le debe llevar bien presentado, bañado y con el respectivo
                                        uniforme que identifica la pertenencia al colegio. </P>
                                    <p> 7. En caso que el niño o niña se ensucie en la ropa se le avisara
                                        telefónicamente al acudiente y/o padre para que se acerque a las instalaciones
                                        del hogar a realizar su respectiva limpieza. De no poder hacerlo autoriza a la
                                        docente del grupo para que lo haga siempre y cuando el niño o niña traiga su
                                        respectiva ropa.
                                        SI --------------------------- NO---------------------- </P>
                                    <p> 8. Se debe promover el buen ambiente en el colegio evitando chismes o
                                        comentarios negativos que perjudiquen el buen nombre tanto de las docentes,
                                        auxiliares y colegio. </P>
                                    <p> 9. Para cualquier inquietud, queja o reclamo se deberá seguir el conducto
                                        regular que es: coordinadora, docentes, junta interna de padres. </P>
                                    <p> 10. Participar responsablemente y activamente en la actividad cualquiera que sea
                                        programadas por el colegio para el beneficio, integración y aprendizaje del niño
                                        o niña. </P>
                                    <p> 11. Tratar con respeto y dignidad a los docentes y entes directivos del colegio. </P>
                                    <p> 12. Darle continuidad a los hábitos de higiene, aseo personal alimentación que
                                        se fomentan en el colegio durante los fines de semana y vacaciones. </P>
                                    <p> 13. Dar buen ejemplo en la casa, en la calle en todas partes donde se
                                        encuentran, promoviendo el buen trato, el respeto, la unidad, el calor familiar,
                                        el amor y el temor por nuestro papito DIOS. </P>

                                    <p>  AUTORIZACION: permito que se le tomen fotos al niño o niño que represento como
                                        acudiente, estas pueden ser publicadas en las redes sociales, siempre y cuando
                                        no se afecte la dignidad del menor.
                                   
                                    </P>

                                    <hr>
                                </div>

                                <div class="form-group text-center col-12">
                                    <hr>
                                    <h5 class="text-dark">ACUDIENTE</h5>
                                    <hr>
                                </div>
                                <div class="form-group col-md-12">
                                    <select class="form-control" name="section_grado" id="section_grado" required>
                                        <option value="">Seleccione el acudiente responsable</option>

                                    </select>
                                </div>
                                <div class="form-group text-center col-12">
                                    <hr>
                                    <h5 class="text-dark">SEGURO SOCIAL</h5>
                                    <hr>
                                </div>
                                <div class="form-group col-md-12">
                                    <select class="form-control" name="section_regimen" id="section_regimen" required>
                                        <option value="">Regimen</option>
                                        <option value="privado">Privado</option>
                                        <option value="publico">Público</option>
                                    </select>
                                </div>

                            </div>
                            <div>
                                <div class="form-group text-center">
                                    <button class="btn btn-outline-primary col-md-4" type="submit">Crear</button>
                                </div>
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
    <script type="text/javascript">
    function test(documento) {
        Swal
            .fire({
                title: "Estudiante",
                text: "¿Cargar?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: "Sí, cargar",
                cancelButtonText: "Cancelar",
            })
            .then(resultado => {
                if (resultado.value) {
                    // Hicieron click en "Sí"
                    var newLocation = "registro_estudiante_nuevo.php?id=" + id + "&url_media=" + url_media;
                    window.location = newLocation;
                }
            });
    }
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