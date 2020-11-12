
<?php
$conectar= mysqli_connect('127.0.0.1:3306', 'root', '',  'my_little_world');
if($conectar->connect_errno){
  echo "Fallo al conectar:".$conectar->connect_errno;
  header('Location: formulario.php?error=1');
}else{echo"prendio perro";}
?>

<?php include ('header.php'); ?>
    <section>
      <div class="container ">
         <div class="border-content pt-2 pb-2 pr-3 mt-2 mb-3">
          <h3 class="text-center">NOTICIAS</h3>
          <p class="italic text-center">Informativas</p>
        </div>
        <div class="row mb-2">
              <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-center">
                <img width="450" height="320" src="images/almuerzo niños.jpg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></img>
                <a href="" class="" data-vbtype="video" data-autoplay="true"></a>
              </div>
          <div class="col-xl-6 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5 border-content">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4> Estudios muestran los beneficios de comer acompañado
              </h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quam porro dolores recusandae molestias aspernatur praesentium nisi modi excepturi! Eos consequuntur sequi sapiente dolore numquam alias, ipsa laudantium? Doloremque, delectus!
                    </p>
              </div>
            </div>
       </div>
      </div>
    </section>
    <section>
        <div class="container">
          <div class="row mb-2">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-center">
              <img width="450" height="320" src="images/almuerzo niños.jpg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></img>
              <a href="" class="" data-vbtype="video" data-autoplay="true"></a>
            </div>
        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5 border-content">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4> Estudios muestran los beneficios de comer acompañado
            </h4>
                  <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quam porro dolores recusandae molestias aspernatur praesentium nisi modi excepturi! Eos consequuntur sequi sapiente dolore numquam alias, ipsa laudantium? Doloremque, delectus!
                  </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
          <div class="container">
            <div class="row mb-2">
              <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-center">
                <img width="450" height="320" src="images/almuerzo niños.jpg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></img>
                <a href="" class="" data-vbtype="video" data-autoplay="true"></a>
              </div>
          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5 border-content">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4> Estudios muestran los beneficios de comer acompañado
              </h4>
                    <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quam porro dolores recusandae molestias aspernatur praesentium nisi modi excepturi! Eos consequuntur sequi sapiente dolore numquam alias, ipsa laudantium? Doloremque, delectus!
                    </p>
              </div>
            </div>
       </div>
      </div>
    </section>
    <section>
        <div class="container">
          <div class="row mb-3 mt-2">
            <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-center">
              <img width="450" height="320" src="images/almuerzo niños.jpg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></img>
              <a href="" class="" data-vbtype="video" data-autoplay="true"></a>
            </div>
        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5 border-content">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-fingerprint"></i></div>
            <h4> Estudios muestran los beneficios de comer acompañado
            </h4>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quam porro dolores recusandae molestias aspernatur praesentium nisi modi excepturi! Eos consequuntur sequi sapiente dolore numquam alias, ipsa laudantium? Doloremque, delectus!
                </p>
              </div>
            </div>
      </div>
      </div>
    </section>
 <!--Footer -->
 <?php include ('footer.php'); ?>