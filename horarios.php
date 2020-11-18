<?php include ('header.php'); 
      include ('config.php'); 
      $ret_cronograma=mysqli_query($con,"SELECT * FROM banners WHERE section='cronograma' ");
      $ret_jardin=mysqli_query($con,"SELECT * FROM banners WHERE section='horario_jardin' ");
      $ret_prejardin=mysqli_query($con,"SELECT * FROM banners WHERE section='horario_prejardin' ");
      $ret_parvulos=mysqli_query($con,"SELECT * FROM banners WHERE section='horario_parvulos' ");
      $cronograma = $ret_cronograma->fetch_assoc();
      $jardin = $ret_jardin->fetch_assoc();
      $prejardin = $ret_prejardin->fetch_assoc();
      $parvulos = $ret_parvulos->fetch_assoc();
?>

<section>
    <!--===== Section Cronograma=====-->
    <div class="container mt-3 mb-3 ">
        <div class="col-12 pt-2 pb-2">
            <p class="h2 text-center mb-3 bg-color-blue-light text-white p-2">CRONOGRAMA</p>
            <p class="italic text-center"></p>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-12 ml-0">
                    <div class="horarios">
                        <a href="<?php echo $cronograma['url_media'] ?>" target="_blank">
                            <img src="<?php echo $cronograma['url_media'] ?>"
                                alt="<?php echo $cronograma['description'] ?>" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!--=====Final Section Cronograma=====-->

<section>
    <!--====Section Horarios=====-->
    <div class="container mt-3 mb-3 ">
        <div class="col-12">
            <p class="h2 text-center color-blue mb-3 bg-color-blue-light text-white p-2">HORARIOS</p>
            <p class="italic text-center"></p>
        </div>
        <div class="col 12 mt-3">
            <p class="h4 text-center color-blue mb-3 bg-color-blue-light text-white p-2">HORARIO JARDIN </p>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-12 ml-0">
                <div class="horarios">
                    <a href="<?php echo $jardin['url_media'] ?>" target="_blank">
                        <img src="<?php echo $jardin['url_media'] ?>" alt="<?php echo $jardin['description'] ?> "
                            class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-3">
        <div class="col 12 mt-3">
            <p class="h4 text-center color-blue mb-3 bg-color-blue-light text-white p-2">HORARIO PREJARDIN </p>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-12 ml-0">
                <div class="horarios">
                    <a href="<?php echo $prejardin['url_media'] ?>" target="_blank">
                        <img src="<?php echo $prejardin['url_media'] ?>" alt="<?php echo $prejardin['description'] ?> "
                            class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3 mb-3">
        <div class="col 12 mt-3">
            <p class="h4 text-center color-blue mb-3 bg-color-blue-light text-white p-2">HORARIO PARVULOS </p>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="col-12 ml-0">
                <div class="horarios">
                    <a href="images/HorarioParvulos.jpg" target="_blank">
                        <img src="images/HorarioParvulos.jpg" alt="Cronograma " class="img-fluid">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=====Final Section Horarios=====-->

<!--Footer -->
<?php include ('footer.php'); ?>