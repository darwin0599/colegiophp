
<?php
$conectar= mysqli_connect('127.0.0.1:3306', 'root', '',  'my_little_world');
if($conectar->connect_errno){
  echo "Fallo al conectar:".$conectar->connect_errno;
  header('Location: formulario.php?error=1');
}else{echo"prendio perro";}
?>

<?php include ('header.php'); ?>
    <section>  <!------ Sección Noticias ------->
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="h2 text-center color-blue bg-color-blue-light text-white mt-5 p-2">Noticias</p>
                </div>
                <div class="col-12">
                    <p class="text-center color-blue bg-color-blue-light text-white p-2">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
                </div>
            </div>
          <div class="container mt-3">  
            <div class="row">
              <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-center">
                <img width="450" height="315" src="images/almuerzo_niños.jpg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></img>
                <a href="" class="" data-vbtype="video" data-autoplay="true"></a>
              </div>
              <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-4 bg-color-blue-light ">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 > Estudios muestran los beneficios de comer acompañado
              </h4>
                    <p class="text-white">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quam porro dolores recusandae molestias aspernatur praesentium nisi modi excepturi! Eos consequuntur sequi sapiente dolore numquam alias, ipsa laudantium? Doloremque, delectus!
                    </p>
              </div>
            </div>
          </div>
          <div class="container mt-3">  
            <div class="row">
              <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-center">
                <img width="450" height="315" src="images/noticias_clases_continuar.jpg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></img>
                <a href="" class="" data-vbtype="video" data-autoplay="true"></a>
              </div>
              <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-4 bg-color-blue-light ">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 > Sin Importar las Circunstancias Seguimos Educando
              </h4>
                    <p class="text-white">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quam porro dolores recusandae molestias aspernatur praesentium nisi modi excepturi! Eos consequuntur sequi sapiente dolore numquam alias, ipsa laudantium? Doloremque, delectus!
                    </p>
              </div>
            </div>
          </div>
          <div class="container mt-3">  
            <div class="row">
              <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-center">
                <img width="450" height="315" src="images/almuerzo_niños.jpg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></img>
                <a href="" class="" data-vbtype="video" data-autoplay="true"></a>
              </div>
              <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-4 bg-color-blue-light ">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 > Estudios muestran los beneficios de comer acompañado
              </h4>
                    <p class="text-white">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quam porro dolores recusandae molestias aspernatur praesentium nisi modi excepturi! Eos consequuntur sequi sapiente dolore numquam alias, ipsa laudantium? Doloremque, delectus!
                    </p>
              </div>
            </div>
          </div>
      </div>
    </section>  <!------ Final Sección Noticias ------->
 <!--Footer -->
 <?php include ('footer.php'); ?>