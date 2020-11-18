<?php 
    include ('header.php'); 
    include ("config.php");
    $ret_admisiones=mysqli_query($con,"SELECT * FROM news WHERE section='admisiones'");
    $ret_inscripciones=mysqli_query($con,"SELECT * FROM news WHERE section='matriculas'");


?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="h2 text-center color-blue bg-color-blue-light text-white mt-5 p-2">ADMISIONES</p>
        </div>
        <div class="col-12">
            <p class="text-center p-2">En esta seccion se encuentra la información para el proceso de inscripciones y matriculas en el centro educativo mi pequeño mundo</p>
        </div>
    </div>
    <?php
        $i = 1;
        while($row = mysqli_fetch_assoc($ret_admisiones)) {
            $i++;
            $html_code = '';
            if ($i%2==0) {
                $html_code = '<div class="container mt-3">
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-6 order-1 my-3">
                                            <img width="100%" height="350" src="'.$row['url_media'].'"></img>
                                        </div>
                                        <div class="col-12 col-md-6 order-2 my-3">
                                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                            <h4 class="font-weight-bold color-blue">'.$row['title'].'</h4>
                                            <hr class="d-none d-md-block">
                                            <p>'.$row['description'].'</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>';
            } else {
                $html_code = '<div class="container mt-3">
                                <div class="row">
                                    <div class="col-12 col-md-6 order-2 order-md-1 my-3">
                                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                        <h4 class="font-weight-bold color-blue">'.$row['title'].'</h4>
                                        <hr class="d-none d-md-block">
                                        <p>'.$row['description'].'</p>
                                    </div>
                                    <div class="col-12 col-md-6 order-1 order-md-2 my-3">
                                        <img width="100%" height="350" src="'.$row['url_media'].'"></img>
                                    </div>
                                </div>
                                <hr>
                            </div>';
            }
            echo $html_code;
        }
    ?>
</div>
<!------ Sección Inscripciones ------->
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="h2 text-center color-blue bg-color-blue-light text-white mt-5 p-2">MATRICULAS ABIERTAS</p>
        </div>
        <div class="col-12">
            <p class="text-center p-2">En esta seccion se encuentra la información para el proceso de inscripciones y matriculas en el centro educativo mi pequeño mundo </p>
        </div>
    </div>
    <?php
        $i = 1;
        while($row = mysqli_fetch_assoc($ret_inscripciones)) {
            $i++;
            $html_code = '';
            if ($i%2==0) {
                $html_code = '<div class="container mt-3">
                                    <hr>
                                    <div class="row">
                                        <div class="col-12 col-md-6 order-1 my-3">
                                            <img width="100%" height="350" src="'.$row['url_media'].'"></img>
                                        </div>
                                        <div class="col-12 col-md-6 order-2 my-3">
                                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                            <h4 class="font-weight-bold color-blue">'.$row['title'].'</h4>
                                            <hr class="d-none d-md-block">
                                            <p>'.$row['description'].'</p>
                                        </div>
                                    </div>
                                    <hr>
                                </div>';
            } else {
                $html_code = '<div class="container mt-3">
                                <div class="row">
                                    <div class="col-12 col-md-6 order-2 order-md-1 my-3">
                                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                                        <h4 class="font-weight-bold color-blue">'.$row['title'].'</h4>
                                        <hr class="d-none d-md-block">
                                        <p>'.$row['description'].'</p>
                                    </div>
                                    <div class="col-12 col-md-6 order-1 order-md-2 my-3">
                                        <img width="100%" height="350" src="'.$row['url_media'].'"></img>
                                    </div>
                                </div>
                                <hr>
                            </div>';
            }
            echo $html_code;
        }
    ?>
<!------ Final Sección Noticias ------->
<!--Footer -->
<?php include ('footer.php'); ?>