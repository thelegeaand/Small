<!DOCTYPE html>
<html lang="ca">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>img/LogoSmallSinFondo.png">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>js/scripts.js">



  <title>Pàgina Principal Small</title>
</head>

<body>

  <!--Header-->
  <header class="header">
    <nav class="navbar navbar-light bgcust justify-content-between ">
      <a class="navbar-brand ml-3"><img src="<?php echo base_url(); ?>img/LogoSmallSinFondo.png" id="logo" alt="Imatge Corporativa Small"></a>
      <form class="form-inline d-flex justify-content-left">
        <button id="bcolor" class="btn btn-outline-success my-2 my-sm-0 mr-3" type="button" data-toggle="modal" data-target="#exampleModal">Iniciar Sessió</button>
        <button id="bcolor" class="btn btn-outline-success my-2 my-sm-0  mr-3" type="submit">Registrar-se</button>
      </form>
    </nav>

</div>

    <!-- Modal Iniciar Sessió -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container lletrero d-flex justify-content-center ">
      <div class="row ">
        <div class="Tlletrero text-center">
          <h1 class="titol p-5">EL MERCAT ONLINE JA HA ARRIBAT A LA TEVA CIUTAT</h1>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="seccions">
        <form>
          <div class="form-inline mt-2 d-flex justify-content-center ">
            <select class="form-control mr-sm-2 col-sm-6" id="exampleFormControlSelect1">
              <option>Aviram</option>
              <option>Carnisseries</option>
              <option>Peixateries</option>
              <option>Fruiteria</option>
            </select>

            <button id="bcolor" class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar Botigues</button>

          </div>
      </div>
      </form>
    </div>
   
      <!--Fletxa desplaçament al contingut-->
      <div class="text-center mt-4">
            <a href="#A">
                <span class="fa fa-angle-down flecha"></span>
                <span class="sr-only">Seccions</span>
            </a>
        </div>
     
  </header>
 

  <main>
    <section id="A">

      <div class="container mt-5">
        <div class="text-center">
          <h2 id="dSeccions">DIFERENTS SECCIONS!</h2>
        </div>
        <div class="row text-center">
          <div class="col-md-12 col-12">
            <div class="row mt-5">
              <div class="col-md-6 col-lg-3 col-6 mt-2 text-center">
                <div class="mb-2">
                  <img id="fotosSeccions" src="<?php echo base_url(); ?>img/pescado.jpg" alt="Imatge Fruiteria">
                </div>
                <div class="text-center">
                  <p id="seccio">PEIXATERIA</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 col-6 mt-2 text-center">
                <div class="mb-2">
                  <img id="fotosSeccions2" src="<?php echo base_url(); ?>img/fruta_verdura.jpg" alt="Imatge Fruiteria">
                </div>
                <div>
                  <p id="seccio" class="text-center">FRUITERIA</p>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-6 mt-2 text-center">
                <div class="mb-2">
                  <img id="fotosSeccions3" src="<?php echo base_url(); ?>img/Carne.jpg" alt="Imatge Fruiteria">
                </div>
                <div>
                  <p id="seccio" class="text-center">CARNISSERIA<br>XARCUTERIA</p>
                </div>

              </div>
              <div class="col-md-6 col-lg-3 col-6 mt-2 text-center">
                <div class="mb-2">
                  <img id="fotosSeccions4" src="<?php echo base_url(); ?>img/Aviram.jpg" alt="Imatge Fruiteria">
                </div>
                <div>
                  <p id="seccio" class="text-center">AVIRAM</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="B" class="mt-5">
      <div class="container-fluid bgcontainer">
        <div class="container text-center pt-5">
          <h3 id="ProdBot">PRODUCTES DE LES BOTIGUES DE LA TEVA CIUTAT A CASA!</h3>
          <div class="row pt-4">
            <div class="col-md-4 col-lg-4 col-12 mt-2 text-center">
              <div class="mb-2">
                <img id="bot" src="<?php echo base_url(); ?>img/tienda.png" alt="Imatge Fruiteria">
              </div>
              <div class="text-center">
                <h4 id="c">Les Botigues de Confiança</h4>
                <p id="p">Varietat de Botigues amb diferents que podràs explorar....</p>
              </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 mt-2 text-center">
              <div class="mb-2">
                <img id="bot" src="<?php echo base_url(); ?>img/productos-lacteos.png" alt="Imatge Fruiteria">
              </div>
              <div class="text-center">
                <h4 id="c">Fes la Compra</h4>
                <p id="p">Pots Trobar qualsevol aliment ,el quan Pots escollir entre diferents Botigues. </p>
              </div>
            </div>
            <div class="col-md-4 col-lg-4 col-12 mt-2 text-center">
              <div class="mb-2">
                <img id="bot" src="<?php echo base_url(); ?>img/nuevo-producto.png" alt="Imatge Fruiteria">
              </div>
              <div class="text-center">
                <h4 id="c">Entrega Globalitzada</h4>
                <p id="p">Demana el que vulguis de diferents Establiments i nosaltres t'ho portem tot.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="C">

      <div class="container mt-5 mb-5">
        <div class="row">

          <div class="card1">


          </div>

          <div class="card2">


          </div>

          <div class="card3">


          </div>
        </div>






    </section>
  </main>
  <footer>

    <div class="container-fluid bgcontainer2">

    <div class="container">

        <div class="row pt-4 SmallScroll d-flex justify-content-center ">

        <div class="row rowc">
        <div class="col-sm-4 col-12 col-lg-4">
    <div class="card" style="background-color:#4B4B4B;color:white;margin-top: 3%;">
      <div class="card-body">
        <h5 class="card-title t1">LEGAL</h5> 
        <ul class="lista">
          <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;" href="#">Termes i Condicions</a></li>   
        <li class="pt-3"><a class="card-text pt-2" style="text-decoration:none;color:white;" href="#">Privacitat</a></li>
        <li class="pt-3"> <a class="card-text pt-2" style="text-decoration:none;color:white;" href="#">Cookies</a></li>
       </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-4 col-12 col-lg-4">
    <div class="card" style="background-color:#4B4B4B;color:white;margin-top: 3%;">
      <div class="card-body">
        <h5 class="card-title t1">LEGAL</h5> 
        <ul class="lista">
          <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;" href="#">Termes i Condicions</a></li>   
        <li class="pt-3"><a class="card-text pt-2" style="text-decoration:none;color:white;" href="#">Privacitat</a></li>
        <li class="pt-3"> <a class="card-text pt-2" style="text-decoration:none;color:white;" href="#">Cookies</a></li>
       </ul>
      </div>
    </div>
  </div>
  <div class="col-sm-4 col-12 col-lg-4">
    <div class="card" style="background-color:#4B4B4B;color:white;margin-top: 3%;">
      <div class="card-body">
        <h5 class="card-title t1">LEGAL</h5> 
        <ul class="lista">
          <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;" href="#">Termes i Condicions</a></li>   
        <li class="pt-3"><a class="card-text pt-2" style="text-decoration:none;color:white;" href="#">Privacitat</a></li>
        <li class="pt-3"> <a class="card-text pt-2" style="text-decoration:none;color:white;" href="#">Cookies</a></li>
       </ul>
      </div>
    </div>
  </div>
  </div>
  <div class="container d-flex justify-content-center  mt-4 mb-4">

  <div class="row">
<div >
  <a href="https://www.instagram.com/" class="btn btn-block btn-social btn-instagram">
                        <span class="sr-only">LogoInsta</span>
                        <span class="fa fa-instagram fa-3x ICON"></span>
  </a>

  </div>

  <div>
  <a href="https://www.instagram.com/" class="btn btn-block btn-social btn-twitter">
                        <span class="sr-only">LogoInsta</span>
                        <span class="fa fa-twitter fa-3x ICON"></span>
  </a>
  </div>
  <div>
  <a href="https://www.instagram.com/" class="btn btn-block btn-social btn-facebook">
                        <span class="sr-only">LogoInsta</span>
                        <span class="fa fa-facebook fa-3x ICON"></span>
  </a>
  </div>

  

  </div>
  

  </div>

  <p class="copy offset-8 ml-2 mb-4">Small 2021 &copy;</p>

</div>

      </div>


     
  </footer>



  <script>
        $("a[href^='#']").click(function(e) {
            e.preventDefault();

            var position = $($(this).attr("href")).offset().top;

            $("body, html").animate({
                scrollTop: position
            }, 1000);
        });
    </script>







      
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>