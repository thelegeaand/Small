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
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,200&family=Poppins:wght@800&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>img/LogoSmallSinFondo.png">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <script type="text/javascript" src="<?= base_url() ?>js/scripts.js"></script>
  <title>Pàgina Principal Client</title>
</head>

<style>
    .menu {
    list-style: none;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 120px;
    margin: auto;
    position: relative;
    background-color: #f5f5f5;
  
    z-index: 7;
  }
  .menu li {
    float: left;
    width: 25%;
    height: 100%;
    margin: 0;
    padding: 0;
  }
  .menu a {
    display: flex;
    width: 100%;
    height: 100%;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-decoration: none;
    position: relative;
    font-size: 18px;
    z-index: 9;
  }
  a.active {
    background-color: #e74c3c;
    pointer-events: none;
  }
  li.slider {
    width: 25%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    background-color: #FDB402;
    z-index: 8;
    transition: left 0.4s, background-color 0.4s;
  }
  .menu li:nth-child(1):hover ~ .slider,
  .menu li:nth-child(1):focus ~ .slider,
  .menu li:nth-child(1):active ~ .slider {
    left: 0;
    background-color: #FDB402;
  }
  .menu li:nth-child(2):hover ~ .slider,
  .menu li:nth-child(2):focus ~ .slider,
  .menu li:nth-child(2):active ~ .slider {
    left: 25%;
    background-color:#FF0910 ;
  }
  .menu li:nth-child(3):hover ~ .slider,
  .menu li:nth-child(3):focus ~ .slider,
  .menu li:nth-child(3):active ~ .slider {
    left: 50%;
    background-color:#01E4FF ;
  }
  .menu li:nth-child(4):hover ~ .slider,
  .menu li:nth-child(4):focus ~ .slider,
  .menu li:nth-child(4):active ~ .slider {
    left: 75%;
    background-color: #07FB7F;
  }


</style>

<body>

  <!--Header-->
  <header class="header">

    <nav class="navbar navbar-expand-md navbar-light bg-light mt-1  ">
      <a id="mq" class="navbar-brand ml-3"><img src="<?php echo base_url(); ?>img/LogoSmallSinFondo.png" id="logo2" alt="Imatge Corporativa Small"></a>
      <button type="button" style="border-radius: 74%;
  padding: 4%;
  border:none;" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="fa fa-bars" aria-hidden="true"></span>
      </button>

      <div class="collapse navbar-collapse text-center " id="navbarCollapse">
        <div class="navbar-nav">
          <a href="http://localhost/Small/index.php/SmallController/IniciClient" class="nav-item mt-md-0 mt-lg-0 mt-4 pr-md-5 pr-lg-5 pr-xl-5 pr-0  nav-linkes ">Botigues</a>
          <a href="http://localhost/Small/index.php/SmallController/HistorialComandes" class="nav-item mt-md-0 mt-lg-0 mt-4 pr-md-5 pr-lg-5 pr-xl-5 pr-0  nav-linkes ">Historial</a>
          <a href="http://localhost/Small/index.php/SmallController/ModDadesPersonaRed" class="nav-item mt-md-0 mt-lg-0 mt-4 pr-md-5 pr-lg-5 pr-xl-5 pr-0  nav-linkes ">Compte</a>

          <a href="#" data-toggle="modal" data-target="#Carrito" class="nav-item mt-md-0 mt-lg-0 mt-4 pr-md-5 pr-lg-5 pr-xl-5 pr-0  nav-linkes ">Cistella</a>
        </div>
        <div class="navbar-nav text-center  mt-lg-0 mt-md-0 mt-xl-0 mt-5 ml-auto">
        <a href="http://localhost/Small/index.php/SmallController/TancarSessio" id="bcolor" class="btn">Tancar Sessió</a>
        </div>
      </div>
    </nav>

  <!-- Modal Carrito -->
  <div class="modal fade" id="Carrito" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center " style="width: 100%;margin:auto;margin-top:10%;" role="document">
        <div class="modal-content">
          <div class="modal-header text-center ml-5" style="border-bottom:0px;">
            <h5 class="modal-title" id="titol1">Cistella de <span><img id="imgModal" src="<?php echo base_url(); ?>img/LogoSmallSinFondo.png"></span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body ">


            <div class="container">
              <table class="table">




                <?php

                if (empty($this->cart->contents())) {
                  echo "<p class='text-center'>No hi han productes encara!</p>";
                } else {



                  foreach ($this->cart->contents() as $items) {

                    $img = base64_encode($items['options']['img']);
                    $tipus = $items['options']['tipus'];

            


                    echo "<tr style='border:1px solid green;' class='b'>";
                    echo "<th id='quantitat' scope='row'> X" . $items["qty"] . "</th>";
                    echo '<td><img class="ml-5" src="data:' . $tipus . ';base64,' . $img . '" id="logo" alt="Imatge Producte Carrito" style="width:63px;height:70px;"></td>';
                    echo "<td id='descripcio'>" . $items["name"] . "</td>";

                    echo "</tr>";
                  }
                }


                ?>
              </table>

              <div class="container preu text-right">

                <p><strong>TOTAL: <?php echo $this->cart->format_number($this->cart->total()); ?> € </strong></p>

              </div>

            </div>

            <div class="offset-4 text-center boton">
            <a  href="http://localhost/Small/index.php/SmallController/BuidarCarrito"  id="bcolor" style="background-color:#FF0910 !important;color: white !important;"  class="btn mr-2 ">Buidar</a>
            <a href="http://localhost/Small/index.php/SmallController/TramitarCarrito" class="btn" id="bcolor">Tramitar</a>
          
            </div>
            </form>
          </div>

        </div>

      </div>
    </div>
    </div>


    <!-- Modal Iniciar Sessió -->
    <div class="modal fade" id="IniciSessio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center " style="width: 100%;margin:auto;margin-top:10%;" role="document">
        <div class="modal-content">
          <div class="modal-header text-center ml-5" style="border-bottom:0px;">
            <h5 class="modal-title" id="titol1">Entra a <span><img id="imgModal" src="<?php echo base_url(); ?>img/LogoSmallSinFondo.png"></span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
            <form>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationDefault01">NOM USUARI</label>
                  <input type="text" class="form-control" id="Usuari" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationDefault02">PASSWORD</label>
                  <input type="password" class="form-control" id="Password" required>
                </div>

                <div class="offset-4 text-center boton">
                  <button type="submit" id="bcolor" class="btn btn-outline-success">Iniciar Sessió</button>

                </div>
                <div class="offset-2 mt-2">
                  <p>No ets <strong>Client</strong> o no tens <strong>Botiga</strong>? <span id="registre">Registra't</span></p>

                </div>

            </form>
          </div>

        </div>

      </div>
    </div>
    </div>
    <!-- Modal per Registrar-se -->

    <div class="modal fade mb-5" id="Registre" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center " style="width: 100%;margin:auto;margin-top:10%;" role="document">
        <div class="modal-content">
          <div class="modal-header text-center ml-5 " style="border-bottom:0px;">
            <h5 class="modal-title" id="titol1">Registrat a <span><img id="imgModal" src="<?php echo base_url(); ?>img/LogoSmallSinFondo.png"></span></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
            <form>
              <div class="form-row">
                <div class="col-md-12 mb-3">
                  <label for="validationDefault01">NOM</label>
                  <input type="text" class="form-control" id="Usuari" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationDefault02">PRIMER COGNOM</label>
                  <input type="text" class="form-control" id="Cognom" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationDefault02">SEGON COGNOM</label>
                  <input type="text" class="form-control" id="Cognom2" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationDefault02">DNI</label>
                  <input type="text" class="form-control" id="Dni" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationDefault02">DATA DE NAIXEMENT</label>
                  <input type="date" class="form-control" id="dnaix" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationDefault02">CORREU ELECTRÒNIC</label>
                  <input type="mail" class="form-control" id="mail" required>
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-row">
                    <div class="col-md-4">
                      <label for="validationDefault02">CIUTAT</label>
                      <input type="text" class="form-control" id="ciutat" required>
                    </div>
                    <div class="col-md-4">
                      <label for="validationDefault02">PROVÍNCIA</label>
                      <input type="mail" class="form-control" id="mail" required>
                    </div>
                    <div class="col-md-4">
                      <label for="validationDefault02">C.POSTAL</label>
                      <input type="mail" class="form-control" id="mail" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationDefault02">PASSWORD</label>
                  <input type="password" class="form-control" id="mail" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationDefault02">REPETEIX PASSWORD</label>
                  <input type="password" class="form-control" id="mail" required>
                </div>

                <div class="offset-4 text-center boton">
                  <button type="submit" id="bcolor" class="btn btn-outline-success">Registra't</button>

                </div>
                <div class="offset-3 mt-2">
                  <p>Si ja tens un Compte, <span id="registre">Inicia Sessió<span></p>

                </div>

            </form>

          </div>
        </div>
      </div>
    </div>
    </div>

    <!-- Modal Termes i  Condicions -->

    <div class="modal fade mb-5" id="Condicions" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center " style="width: 100%;margin:auto;margin-top:10%;" role="document">
        <div class="modal-content">
          <div class="modal-header text-center ml-5" style="border-bottom:0px;">
            <h5 class="modal-title" id="titol1">T&C</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
            <p><strong>TERMES I CONDICIONS</strong><br>El contracte actual descriu els termes i condicions
              aplicables a l'ús del contingut, productes i/o serveis del lloc web Mil Formats del qual
              és titular L'Albert Parrado i Jesús Blanco. Per a fer ús del contingut, productes i/o
              serveis del lloc web l'usuari haurà de subjectar-se als presents termes i condicions.<br><br><strong>I. OBJECTE</strong><br>
              L'objecte és regular l'accés i utilització del contingut, productes i/o serveis a la disposició del públic en general en el
              domini https://www.small.tk.
              El titular es reserva el dret de realitzar qualsevol tipus de modificació en el lloc web en qualsevol
              moment i sense previ avís, l'usuari accepta aquestes modificacions.L'accés al lloc web per part de
              l'usuari és lliure i gratuït, la utilització del contingut, productes i/o serveis implica un cost
              de subscripció per a l'usuari.El lloc web només admet l'accés a persones majors d'edat i no es fa responsable
              per l'incompliment d'això.El lloc web està dirigit a usuaris residents a Espanya i compleix amb la
              legislació establerta en aquest país, si l'usuari resideix en un altre país i decideix accedir al
              lloc web el farà sota la seva responsabilitat.L'administració del lloc web pot exercir-se per tercers
              , és a dir, persones diferents al titular, sense afectar això els presents termes i condicions.<br><br><strong><br>II. USUARI </strong><br>
              L'activitat de l'usuari en el lloc web com a publicacions o comentaris estaran subjectes als presents termes i condicions.
              L'usuari es compromet a utilitzar el contingut, productes i/o serveis de manera lícita, sense faltar a la moral o a l'ordre públic,
              astenint-se de realitzar qualsevol acte que afecti els drets de tercers o el funcionament del lloc web.
              L'usuari es compromet a proporcionar informació verídica en els formularis del lloc web.
              L'accés al lloc web no suposa una relació entre l'usuari i el titular del lloc web.
              L'usuari manifesta ser major d'edat i comptar amb la capacitat jurídica d'acatar els presents termes i condicions.<br><br><strong>III. ACCÉS I NAVEGACIÓ EN EL LLOC WEB</strong><br>
              El titular no garanteix la continuïtat i disponibilitat del contingut, productes i/o serveis en el sitito web, realitzarà accions que fomentin
              el bon funcionament d'aquest lloc web sense cap responsabilitat.El titular no es
              responsabilitza que el programari estigui lliure d'errors que puguin causar un mal
              al programari i/o maquinari de l'equip del qual l'usuari accedeix al lloc web.
              D'igual forma, no es responsabilitza pels danys causats per l'accés i/o utilització del lloc web.<br><br><strong>IV. POLÍTICA D'ENLLAÇOS</strong><br>
              En el lloc web pot contenir enllaços a altres llocs d'internet pertanyents a tercers dels quals no es fa responsable.<br><br><strong>V. POLÍTICA DE PROPIETAT INTEL·LECTUAL I INDUSTRIAL</strong><br>
              El titular manifesta tenir els drets de propietat
              intel·lectual i industrial del lloc web incloent imatges, arxius d'àudio o vídeo, logotips, marques, colors,
              estructures, tipografies, dissenys i altres elements que ho distingeixen, protegits per la legislació espanyola
              i internacional en matèria de propietat intel·lectual i industrial.
              L'usuari es compromet a respectar els drets de propietat industrial i intel·lectual del titular
              podent visualitzar els elements del lloc web, emmagatzemar-los, copiar-los i imprimir-los exclusivament per a ús personal.<br><br><strong>VI. LEGISLACIÓ I JURISDICCIÓ APLICABLE</strong><br>La relació entre l'usuari i
              el titular es regirà per les legislacions aplicables a Espanya.

              <br><br>Small no es responsabilitza per la indeguda utilització del contingut, productes i/o serveis del lloc web i de l'incompliment dels presents termes i condicions.

            </p>

          </div>
          <div class="container text-right pb-2">

            <span><img id="imgModal" src="<?php echo base_url(); ?>img/Test-image-11.png"></span>


          </div>

        </div>
      </div>
    </div>

    <!-- Modal Privacitat-->

    <div class="modal fade mb-5" id="Privacitat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center " style="width: 100%;margin:auto;margin-top:10%;" role="document">
        <div class="modal-content">
          <div class="modal-header text-center ml-5" style="border-bottom:0px;">
            <h5 class="modal-title" id="titol1">Privacitat </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
            <p><strong>POLÍTICA DE PRIVACITAT</strong><br>El present Política de Privacitat estableix els termes en què Small usa i
              protegeix la informació que és proporcionada pels seus usuaris al moment d'utilitzar
              el seu lloc web. Aquesta companyia està compromesa amb la seguretat de les dades dels
              seus usuaris. Quan li demanem omplir els camps d'informació personal amb la qual vostè
              pugui ser identificat, ho fem assegurant que només s'emprarà d'acord amb els termes d'aquest
              document. No obstant això aquesta Política de Privacitat pot canviar amb el temps o ser
              actualitzada pel que li recomanem i emfatitzem revisar contínuament aquesta pàgina per a
              assegurar-se que està d'acord amb aquests canvis.<br><br><strong>INFORMACIÓ QUE ÉS RECOLLIDA</strong><br>El nostre lloc web podrà
              recollir informació personal per exemple: Nom, informació de contacte com la seva adreça de correu electrònica i
              informació demogràfica. Així mateix quan sigui necessari podrà ser requerida informació específica per a
              processar alguna comanda o realitzar un lliurament o facturació.<br><br><strong>ÚS DE LA INFORMACIÓ QUE ÉS RECOLLIDA</strong><br>
              El nostre lloc web empra la informació amb la finalitat de proporcionar el millor servei possible, particularment per a mantenir
              un registre d'usuaris, de comandes en cas que aplicació, i millorar els nostres productes i serveis. És possible que siguin enviats
              correus electrònics periòdicament a través del nostre lloc amb ofertes especials, nous productes i una altra informació publicitària que considerem rellevant per a vostè o que pugui
              brindar-li algun benefici, aquests correus electrònics seran enviats a l'adreça que vostè proporcioni i podran ser cancel·lats en qualsevol moment.
              Small està altament compromès per a complir amb el compromís de mantenir la seva informació segura.
              Usem els sistemes més avançats i els actualitzem constantment per a assegurar-nos que no existeixi cap accés no autoritzat.<br><br><strong>ENLLAÇOS A TERCERS</strong><br>
              Aquest lloc web pogués contenir en laces a altres llocs que poguessin ser del seu interès. Una vegada que vostè de clic en aquests enllaços i abandoni la nostra pàgina,
              ja no tenim control sobre al lloc al qual és redirigit i per tant no som responsables dels termes o privacitat
              ni de la protecció de les seves dades en aquests altres llocs tercers. Aquests llocs estan
              subjectes a les seves pròpies polítiques de privacitat per la qual cosa és recomanable
              que els consulti per a confirmar que vostè està d'acord amb aquestes.<br><br><strong>CONTROL DE LA SEVA INFORMACIÓ PERSONAL</strong><br>
              En qualsevol moment vostè pot restringir la recopilació o l'ús de la informació personal que és proporcionada al nostre lloc
              web. Cada vegada que se li sol·liciti emplenar un formulari, com el d'alta d'usuari, pot marcar o desmarcar l'opció de rebre informació per correu electrònic. En cas que hagi marcat
              l'opció de rebre el nostre butlletí o publicitat vostè pot cancel·lar-la en qualsevol moment.
              Aquesta companyia no vendrà, cedirà ni distribuirà la informació personal que és recopilada sense el seu consentiment, tret que sigui requerit per un jutge amb un ordre judicial.
              <br><br>Small Es reserva el dret de canviar els termes de la present Política de Privacitat en qualsevol moment.
            <p>
          </div>

          <div class="container text-right pb-2">

            <span><img id="imgModal" src="<?php echo base_url(); ?>img/privacy.png"></span>


          </div>

        </div>
      </div>
    </div>
    <!-- Modal ús Cookies -->
    <div class="modal fade mb-5" id="Cookies" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog d-flex justify-content-center " style="width: 100%;margin:auto;margin-top:10%;" role="document">
        <div class="modal-content">
          <div class="modal-header text-center ml-5" style="border-bottom:0px;">
            <h5 class="modal-title" id="titol1">Cookies </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ">
            <p> <strong>POLITICA DE COOKIES</strong><br><br>
              <strong>Que són?</strong><br> Les Cookies són petits arxius que els llocs web envien al
              navegador i que s'emmagatzemen en el terminal de l'usuari, que pot ser un ordinador personal,
              un telèfon mòbil, una tauleta o qualsevol altre dispositiu.<br><br><strong>Quina és la seva funció?</strong><br>
              Exerceixen un paper essencial en la prestació de nombrosos serveis de TU. Entre altres funcions, permeten que un lloc web emmagatzemi
              i recuperi informació sobre els hàbits de navegació d'un Usuari o el seu equip i, depenent de la informació obtinguda, pot usar-se per
              a reconèixer a l'usuari i millorar el servei ofert a través d'un lloc web i/o aplicació.<br><br><strong>Quin tipus de Cookies existeixen?</strong></br>
              Les Cookies es poden usar de manera conjunta o per separat i es poden classificar d'acord amb diferents criteris, com:
              El propòsit (cookies tècniques, anàlisis, cookies de personalització, com es defineix en la Secció 3 d'aquesta Política.)
              L'entitat de gestió (les Cookies pròpies establertes pel domini del lloc web visitat per l'usuari o les cookies de tercers són les establertes
              i administrades per diferents
              dominis en el lloc web visitat amb l'objectiu de poder enviar als usuaris publicitat personalitzada.)
              El temps d'activitat o retenció d'emmagatzematge ( cookies de session o cookies persistents), etc.<br><br><strong>TIPUS DE COOKIES QUE UTILITZEM</strong><br>
              Aquesta pàgina web utilitza cookies de tercers que són aquelles
              que s'envien al teu ordinador o terminal des d'un domini o una pàgina web que no és gestionada per nosaltres, sinó per
              una altra entitat que tracta les dades obtingudes a través de les cookies.
              En aquest cas les Cookies són utilitzades amb finalitats estadístics
              relacionats amb les visites que rep i les pàgines que es consulten, quedant acceptat el seu ús en navegar per ella.
              Si desitja més informació més sobre els tipus de cookies de seguiment i
              anàlisi de dades de Google faci<a href="https://policies.google.com/technologies/cookies?hl=ca"> clic aquí</a>.Per a informar-se sobre com eliminar les cookies del seu explorador:
              <br><br>

              <strong>Firefox</strong><br>
              <strong>Chrome</strong><br>
              <strong>Internet Explorer</strong><br>
              <strong>Safari</strong><br>
              <strong>Opera</strong><br>



            </p>

          </div>

          <div class="container text-right pb-2">

            <span><img id="imgModal" src="<?php echo base_url(); ?>img/Cookie.png"></span>


          </div>

        </div>
      </div>
    </div>

    <!--Header -->
    <div class="container mt-5 d-flex justify-content-left ">
      <div class="row ">
        <div class="NouTitol">
        <?php
          echo"<h2 class='titolbot'><strong>".$ciutat."</strong></h2>";
          echo"<p class='subtitol'>".$botiga."</p>";
        ?>
        </div>
      </div>
    </div>
    <!--Fletxa desplaçament al contingut-->
    <div class="text-center mt-4">
      <a href="#SEC">
        <span class="fa fa-angle-down flecha"></span>
        <span class="sr-only">Botigues</span>
      </a>
    </div>

  </header>
  <main>
    <!--<div class="container float-left ml-5 mt-3 mb-3 text-center  p-4 " style="width:250px;height:340px; border:1px solid #07FB7F;border-radius:7px;">

      <div class="row">
        <h4><strong>SECCIONS</strong></h4>

        <a href="#" id="bcolor2" class="ml-1 mt-2 text-center">Carnisseries</a>
        <a href="#" id="bcolor3" class="ml-1 mt-2 text-center">Aviram </a>
        <a href="#" id="bcolor4" class="ml-1 mt-2 text-center">Peixateries </a>
        <a href="#" id="bcolor1" class="ml-1 mt-2 text-center">Fruiteries </a>
      </div>
    </div>-->
    <div id="SEC">
      <ul class="menu">
        <li><a href="http://localhost/Small/index.php/SmallController/IniciClient2">Aviram </a></li>
        <li><a href="http://localhost/Small/index.php/SmallController/IniciClient">Carn/Xarc.</a></li>
        <li><a href="http://localhost/Small/index.php/SmallController/IniciClient3">Peixateries</a></li>
        <li><a href="http://localhost/Small/index.php/SmallController/IniciClient4">Fruiteries</a></li>
        <li class="slider"></li>
      </ul>
    </div>
    <!--Secció Botigues-Apartat amb  totes les botigues de la secció escollida -->
    <section id="Botigues">
      <div class="container d-flex justify-content-center mt-5 mb-5 bordeBot ">
        <div class="row justify-content-center mt-5 mb-5">
          <?php

          if (!empty($dades)) {
            foreach ($dades as $fila) {
              echo "<div class='col-md-4 mt-2'>";
              echo "<div class='card' style='max-width:95%';> ";
              $idbotiga = $fila['id_botiga'];
              $tipus = $fila["tipus_banner"];
              $banner = $fila["img_banner"];

              if (empty($tipus) || empty($banner)) {

                echo "<div><img style='height:199px;padding:0px;margin: 0px;width: 100%;'src='http://localhost/Small/img/r.jpg' class='card-img img-fluid' alt='Imatge Botiga'>
                </div>";
              } else {
                echo '<div><img style="height:199px;padding:0px;margin: 0px;width: 100%;"class="card-img img-fluid" alt="Imatge Botiga" src="data:' . $tipus . ';base64,' . base64_encode($banner) . '"></div>';
              }
              echo "<div class='card-body bg-light text-center' style='padding-bottom:10%;'>";
              echo "<h4>" . $fila['nom_botiga'] . "</h4>";
              echo "<a  type='button' class='btn' id='bcolor' href='" . base_url() . "index.php/SmallController/Botiga/" . $idbotiga . "'>Anar</a>";
              echo "</div>";
              echo "</div>";
              echo "</div>";
            }
          } else {
          ?>
            <div class="container mb-5">
              <div class='row'>
                <div class="alert-box" style="float: none; margin: 0 auto;">
                  <div class="alert alert-success">
                    <div class="alert-icon text-center">
                      <img src="<?php echo base_url(); ?>img/LogoSmallSinFondo.png" id="logoM2" alt="Imatge Corporativa Small">
                    </div>
                    <div class="alert-message text-center">
                      <p><strong>Disculpi les molèsties...<br>No hi han Botigues disponibles de la categoria seleccionada.</strong></p>
                    </div>

                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>
        </div>
      </div>

    </section>
  </main>
  <!--Footer Small -->
  <footer>

    <div class="container-fluid bgcontainer2">

      <div class="container">

        <div class="row pt-4 SmallScroll d-flex justify-content-center ">

          <div class="row rowc">
            <div class="col-sm-4 col-12 col-lg-4">
              <div class="card" style="background-color:#4B4B4B;color:white;margin-top: 3%;">
                <div class="card-body">
                  <h5 class="card-title t1">SMALL</h5>
                  <ul class="lista">
                    <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;cursor:pointer;" href="#logo">Home</a></li>
                    <li class="pt-3"><a class="card-text " style="text-decoration:none;color:white;cursor:pointer;" type="button" data-toggle="modal" data-target="#Registre">Registre Client</a></li>
                    <li class="pt-3"> <a class="card-text " style="text-decoration:none;color:white;cursor:pointer;" href="<?php echo base_url(); ?>index.php/SmallController/RegisterBotiga">RegistreBotiga</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-12 col-lg-4">
              <div class="card" style="background-color:#4B4B4B;color:white;margin-top: 3%;">
                <div class="card-body">
                  <h5 class="card-title t1">LEGAL</h5>
                  <ul class="lista">
                    <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;cursor:pointer;" type="button" data-toggle="modal" data-target="#Condicions">Termes i Condicions</a></li>
                    <li class="pt-3"><a class="card-text " style="text-decoration:none;color:white;cursor:pointer;" type="button" data-toggle="modal" data-target="#Privacitat">Privacitat</a></li>
                    <li class="pt-3"> <a class="card-text " style="text-decoration:none;color:white;cursor:pointer;" type="button" data-toggle="modal" data-target="#Cookies">Cookies</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-12 col-lg-4">
              <div class="card" style="background-color:#4B4B4B;color:white;margin-top: 3%;">
                <div class="card-body">
                  <h5 class="card-title t1">AJUDA</h5>
                  <ul class="lista">
                    <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;">Contacte</a></li>
                    <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;">Small-Inc@gmail.com</a></li>
                    <li class="pt-3"> <a class="card-text " style="text-decoration:none;color:white;">+34 678930323</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="container d-flex justify-content-center  mt-4 mb-4">

            <div class="row">
              <div>
                <a href="https://www.instagram.com/" class="btn btn-block btn-social btn-instagram">
                  <span class="sr-only">Logo Instagram</span>
                  <span class="fa fa-instagram fa-3x ICON"></span>
                </a>

              </div>

              <div>
                <a href="https://www.twitter.com/" class="btn btn-block btn-social btn-twitter">
                  <span class="sr-only">Logo Twitter</span>
                  <span class="fa fa-twitter fa-3x ICON"></span>
                </a>
              </div>
              <div>
                <a href="https://www.facebook.com/" class="btn btn-block btn-social btn-facebook">
                  <span class="sr-only">Logo Facebook</span>
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