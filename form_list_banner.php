<?php 
   
    include ("config.php");
    include ('header_forms.php');
    if (isset($_GET['id'])) {
        $sql = "DELETE FROM banners WHERE id = ".$_GET['id'];
        mysqli_query($con, $sql);
        unlink($_GET['url_media']);
    }
    $ret=mysqli_query($con,"SELECT * FROM banners");
?>

<body>
    <Section class="container-fluid">
        <div class="row ">
            <div class="col-3 bg-danger">
                <?php include ("menu_forms.php"); ?>
            </div>
            <div class="col-8 center-block">
                <div class="container ">
                <div class="d-flex justify-content-between bg-warning form-header">
                        <h2 class="d-flex m-0 align-items-center text-center">ADMINISTRADOR DE CONTENIDO</h2>
                        <a id="show_add_category" href="form_creator_banner.php"
                            class="btn bg-transparent d-flex align-items-center"><i class="fa fa-plus"></i></a>
                    </div>

                    <form class="form group">
                        <div class="row">
                            <div class="col-12">
                                Lista de Banners, Imagenes, Videos.
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
                                                <td class="d-flex justify-content-center">
                                                    <a href="'.$row['url_media'].'" >
                                                        <img class="image_form" src="'.$row['url_media'].'" alt="'.$row['title'].'"
                                                    ></a>
                                                </td>
                                                <td>'.$row['title'].'</td>
                                                <td>'.$row['section'].'</td>
                                                <td class="text-center">
                                                    <a href="form_edit_banner.php?id='.$row['id'].'" class="btn">
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
        </div>
</body>
<script type="text/javascript">
        function test(id, url_media) {
           Swal
               .fire({
                   title: "Venta #123465",
                   text: "¿Eliminar?",
                   icon: 'warning',
                   showCancelButton: true,
                   confirmButtonText: "Sí, eliminar",
                   cancelButtonText: "Cancelar",
               })
               .then(resultado => {
                   if (resultado.value) {
                       // Hicieron click en "Sí"
                       var newLocation = "form_list_banner.php?id=" + id + "&url_media=" + url_media;
                       window.location = newLocation;
                   }
               });
        }
    </script>
</html>
