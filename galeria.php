<?php 
    include ('header.php'); 
    include ("config.php");
    $ret=mysqli_query($con,"SELECT * FROM banners WHERE section='galeria' ");
?>

<!--============= Galeria Imagenes ============== -->
<div class="container mt-5">
    <p class="h2 text-center color-blue mb-3 bg-color-blue-light text-white p-2">MOMENTOS MI PEQUEÑO MUNDO</p>
    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-left">
        <?php
            $i = 0;
            while($row = mysqli_fetch_assoc($ret)) {
                $i++;
                $clase = ($i==1) ?'mb-1':'';
                echo ' <div class="col-lg-3 col-md-4 col-12 '.$clase.'">
                <a href="'.$row['url_media'].'" class="d-block mb-4 h-100">
                    <img width="220px" height="220px" class="" src="'.$row['url_media'].'" alt="'.$row['title'].'">
                </a>
            </div>';
            }
        ?>
    </div>
</div>
<!-- =======Final Seccion Galeria======= -->
<!--Footer -->
<?php include ('footer.php'); ?>