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
  <title>Pàgina Contacte Small</title>
</head>

<body class="trianguloContacto">

  <!--Header-->
  <header class="">

    <nav class="navbar navbar-expand-md navbar-light bg-light mt-1  ">
      <a id="mq" class="navbar-brand ml-3"><img src="<?php echo base_url(); ?>img/LogoSmallSinFondo.png" id="logo2" alt="Imatge Corporativa Small"></a>
      <div class="navbar-nav text-center  mt-lg-0 mt-md-0 mt-xl-0 mt-0 ml-auto">
        <a href="javascript: history.go(-1)" class="btn" id="bcolor">Tornar</a>
      </div>

    </nav>

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
                  <label for="Nom">NOM<span style='color:red;' class="ml-2" id="nomInc"></span></label>
                  <input type="text" class="form-control" id="Nom" >
                </div>
                <div class="col-md-12 mb-3">
                  <label for="Cognom">PRIMER COGNOM<span style='color:red;' class="ml-2" id="cognomInc"></span></label>
                  <input type="text" class="form-control" id="Cognom" >
                </div>
                <div class="col-md-12 mb-3">
                  <label for="Cognom2">SEGON COGNOM<span style='color:red;' class="ml-2" id="cognom2Inc"></span></label>
                  <input type="text" class="form-control" id="Cognom2">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="Dni">DNI<span style='color:red;' class="ml-2" id="dniInc"></span></label>
                  <input type="text" class="form-control" id="Dni">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="Datanaixement">DATA DE NAIXEMENT<span style='color:red;' class="ml-2" id="dataInc"></span></label>
                  <input type="date" class="form-control" id="Datanaixement" >
                </div>
                <div class="col-md-12 mb-3">
                  <label for="Correu">CORREU ELECTRÒNIC<span style='color:red;' class="ml-2" id="correuInc"></span></label>
                  <input type="email" class="form-control" id="Correu" >
                </div>
                <div class="col-md-12 mb-3">
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="Ciutat">CIUTAT</label>
                      <span style='color:red;' class="ml-2" id="ciutatInc"></span>
                      <input type="text" class="form-control" id="Ciutat" >
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="Provincia">PROVÍNCIA</label>
                      <span style='color:red;' class="ml-2" id="provinciaInc"></span>
                      <input type="text" class="form-control" id="Provincia">
                    </div>
                    <div class="col-md-4 ">
                      <label for="CPostal">C.POSTAL</label>
                      <span style='color:red;' class="ml-2" id="postalInc"></span>
                      <input type="text" class="form-control" id="Cpostal">
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="Password">PASSWORD<span style='color:red;' class="ml-2" id="passwordInc"></span></label>
                  <input type="password" class="form-control" id="Password">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="Password2">REPETEIX PASSWORD</label>
                  <input type="password"  class="form-control" id="Password2" >
                </div>

                <div class="offset-4 text-center boton">
                  <button type="button" onclick="registreClient()" id="bcolor" class="btn">Registra't</button>

                </div>
                <div class="offset-3 mt-2">
                  <p>Si ja tens un Compte, <span id="registre">Inicia Sessió<span></p>

                </div>
              </div>
            </form>
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
  </header>

  <main class="">
    <div class="text-botiga text-center ">
      <h4 class="mt-5">Tens cap dubte o has tingut alguna incidència amb la teva comanda?</h4>
      <h4 class="verde mb-5"> Contacta amb nosaltres!</h4>

    </div>
    <div class="">
      <div class="container mb-5 pb-5">
        <div class="card mb-5 pb-5">
          <div class="card-header text-center cardVerde" id="headingOne">
            <h5 style="color:white;" class="mb-0 ">
              <strong>Formulari de Contacte</strong>
            </h5>
          </div>
 <?php
          echo form_open('SmallController/RebreIncidencia');

 ?>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="container  adv">

              <div class="form-row ">
                <div class="col-md-6">
                  <?php
                  echo form_input(array(
                      'name' => 'comanda',
                      'type' => 'text',
                      'class'=>'form-control mt-4',
                      'placeholder'=>'NºComanda',
                      'value' => set_value('comanda')
                      ));
                  ?>
                </div>
                <div class="col-md-6">
                <?php echo form_error('correu'); ?>
                  <?php
                  echo form_input(array(
                      'name' => 'correu',
                      'type' => 'text',
                      'class'=>'form-control mt-4',
                      'placeholder'=>'Correu',
                      'value' => set_value('correu')
                      ));
                  ?>
                </div>
              </div>

              <div class="form-row ">
                <div class="col-md-6">
                <?php echo form_error('nom'); ?>
                <?php
                  echo form_input(array(
                      'name' => 'nom',
                      'type' => 'text',
                      'class'=>'form-control mt-4',
                      'placeholder'=>'Nom',
                      'value' => set_value('nom')
                      ));
                  ?>
                  
                </div>
                <div class="col-md-6">
                <?php echo form_error('cognom'); ?>
                  <?php
                  echo form_input(array(
                      'name' => 'cognom',
                      'type' => 'text',
                      'class'=>'form-control mt-4',
                      'placeholder'=>'Cognom',
                      'value' => set_value('cognom')
                      ));
                  ?>
                </div>
              </div>

              <div class="form-row ">
                <div class="col-md-12">
              
               <?php echo form_error('motiu'); ?>
                  <?php
                   $txt = array(
                    'name'        => 'motiu',
                    'value'       => set_value('motiu'),
                    'rows'        => '10',
                    'cols'        => '30',
                    'placeholder'=>'Incidència',
                    'class'       => 'form-control mt-4'
                );
            
                echo form_textarea($txt);
                  ?>
                </div>
              </div>

              <div class="offset-4 text-center boton">
                <?php
             
                 echo form_submit(array(
                  'name' => 'enviar',
                  'class' => 'btn mt-5 mb-5',
                  'value' =>'Enviar',
                  'id'=>'bcolor'
                  
                  ));

                  echo form_close();

                ?>
               
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

    </div>

  </main>

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
                    <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;cursor:pointer;" href="http://localhost/Small/index.php/SmallController/index">Home</a></li>
                    <li class="pt-3"><a class="card-text " style="text-decoration:none;color:white;cursor:pointer;" type="button" data-toggle="modal" data-target="#Registre">Registre Client</a></li>
                    <li class="pt-3"> <a class="card-text " style="text-decoration:none;color:white;cursor:pointer;" href="http://localhost/Small/index.php/SmallController/RegistreBotiga">Registre Botiga</a></li>
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
                    <li class="pt-3"><span class="card-text" style="text-decoration:none;color:white;">Contacte</span></li>
                    <li class="pt-3"><span class="card-text" style="text-decoration:none;color:white;">Small-Inc@gmail.com</span></li>
                    <li class="pt-3"> <span class="card-text " style="text-decoration:none;color:white;">+34 678930323</span></li>
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