<?php 
    include ('header.php'); 
    include ("config.php");
    $ret=mysqli_query($con,"SELECT * FROM news WHERE section='news'");
?>
<pre>
<?php echo $ret->fetch_assoc() ?></pre>
<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="h2 text-center color-blue bg-color-blue-light text-white mt-5 p-2">Noticias</p>
        </div>
        <div class="col-12">
            <p class="text-center p-2">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid
                fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>
    </div>
    <?php 
    while ($obj = $ret->fetch_object()) {
        echo ` <div class="container mt-3">
        <hr>
        <div class="row">
            <div class="col-12 col-md-6 order-1 my-3">
                <img width="100%" height="350" src=" $obj->url_media"></img>
            </div>
            <div class="col-12 col-md-6 order-2 my-3">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="font-weight-bold color-blue"> $obj->title </h4>
                <hr class="d-none d-md-block">
                <p>
                $obj->description
                </p>
            </div>
        </div>
        <hr>
    </div>`;
       
    }
    ?>
    
    <div class="container mt-3">
        <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1 my-3">
                <div class="icon"><i class="bx bx-fingerprint"></i></div>
                <h4 class="font-weight-bold color-blue"> Celebración dia de la independencia</h4>
                <hr class="d-none d-md-block">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quam porro dolores recusandae
                    molestias aspernatur praesentium nisi modi excepturi! Eos consequuntur sequi sapiente dolore
                    numquam alias, ipsa laudantium? Doloremque, delectus!
                </p>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2 my-3">
                <img width="100%" height="350" src="images/evento_dia_docente.jpg"></img>
            </div>
        </div>
        <hr>
    </div>
</div>
<!------ Final Sección Noticias ------->
<!--Footer -->
<?php include ('footer.php'); ?>