<?php include ('header.php');
      include ("config.php");
      $retjardin=mysqli_query($con,"SELECT * FROM honors WHERE grade='jardin'"); 
      $retprejardin=mysqli_query($con,"SELECT * FROM honors WHERE grade='prejardin'"); 
      $retparvulos=mysqli_query($con,"SELECT * FROM honors WHERE grade='parvulos'"); 
?>

<!-- ======= Seccion Cuadro Honor======= -->
<div class="container mt-5">
    <p class="h2 text-center color-blue mb-3 bg-color-blue-light text-white p-2">Estudiantes Destacados</p>
    <div class="section-title">
        <p class="h5">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
            sint
            consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit
            in iste officiis commodi quidem hic quas.</p>
    </div>
    <div class="row justify-content-between my-3">
        <div class="col-12">
            <p class="h1 color-blue font-weight-blod">Honores JARDIN</p>
            <hr>
        </div>

        <?php
                $i = 0;
                while($row = mysqli_fetch_assoc($retjardin)) {
                    $i++;
                    echo '<div class="col-12 col-md-6 col-lg-4 mb-3">
             
                    <div id="card" class="card" style="width: 100%">
                        <img src="'.$row['image'].'" class="card-img-top" alt="'.$row['description'].'">
                        <div class="card-body">
                            <h4 class="card-title font-weight-blod color-blue">'.$row['name'].'</h5>
                            <p class="card-text">'.$row['description'].'</p>
                        </div>
                    </div>
                </div>';
                }
            ?>

        <div class="row justify-content-between my-3">
            <div class="col-12">
                <p class="h1 color-blue font-weight-blod">Honores PREJARDIN</p>
                <hr>
            </div>
            <?php
                $i = 0;
                while($row = mysqli_fetch_assoc($retprejardin)) {
                    $i++;
                    echo '<div class="col-12 col-md-6 col-lg-4 mb-3">
             
                    <div id="card" class="card" style="width: 100%">
                        <img src="'.$row['image'].'" class="card-img-top" alt="'.$row['description'].'">
                        <div class="card-body">
                            <h4 class="card-title font-weight-blod color-blue">'.$row['name'].'</h5>
                            <p class="card-text">'.$row['description'].'</p>
                        </div>
                    </div>
                </div>';
                }
            ?>
        </div>
        <div class="row justify-content-between my-3">
            <div class="col-12">
                <p class="h1 color-blue font-weight-blod">Honores PARVULOS</p>
                <hr>
            </div>
            <?php
                $i = 0;
                while($row = mysqli_fetch_assoc($retparvulos)) {
                    $i++;
                    echo '<div class="col-12 col-md-6 col-lg-4 mb-3">
             
                    <div id="card" class="card" style="width: 100%">
                        <img src="'.$row['image'].'" class="card-img-top" alt="'.$row['description'].'">
                        <div class="card-body">
                            <h4 class="card-title font-weight-blod color-blue">'.$row['name'].'</h5>
                            <p class="card-text">'.$row['description'].'</p>
                        </div>
                    </div>
                </div>';
                }
            ?>
        </div>
    </div>
    <!--Footer -->
    <?php include ('footer.php'); ?>