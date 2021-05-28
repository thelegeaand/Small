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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>img/LogoSmallSinFondo.png">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
  <script type="text/javascript" src="<?= base_url() ?>js/scripts.js"></script>
  <title>Pàgina Principal Small</title>
</head>




<body>

  <!--Header-->
  <header class="header">
    <nav class="navbar navbar-light bgcust justify-content-between ">
      <a class="navbar-brand ml-3"><img src="<?php echo base_url(); ?>img/LogoSmallSinFondo.png" id="logo" alt="Imatge Corporativa Small"></a>
      <form class="form-inline d-flex justify-content-left">
        <button id="bcolor" class="btn btn-outline-success my-2 my-sm-0 mr-3" data-backdrop="static" data-keyboard="false" type="button" data-toggle="modal" data-target="#IniciSessio">Iniciar Sessió</button>
        <button id="bcolor" class="btn btn-outline-success my-2 my-sm-0  mr-3" data-backdrop="static" data-keyboard="false" type="button" data-toggle="modal" data-target="#Registre">Registrar-se</button>
      </form>
    </nav>



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
                  <label for="NomUsuariIS">NOM USUARI<span style='color:red;' class="ml-2" id="nomUsuariInc"></span></label>
                  <input type="text" class="form-control" id="NomUsuariIS" required>
                </div>
                <div class="col-md-12 mb-3">
                  <label for="PasswordIS">PASSWORD<span style='color:red;' class="ml-2" id="PassInc"></span></label>
                  <input type="password" class="form-control" id="PasswordIS" required>
                </div>

                <div class="offset-4 text-center boton">
                  <button type="button" onclick="iniciarsessio()" id="bcolor" class="btn btn-outline-success">Iniciar Sessió</button>

                </div>
                <div class="offset-2 mt-2">
                  <p>No ets <strong>Client</strong> o no tens <strong>Botiga</strong>? <span id="registre">Registra't</span></p>

                </div>


              </div>
            </form>
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
                  <button type="button" onclick="registreClient()" id="bcolor" class="btn btn-outline-success">Registra't</button>

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

    <!--Header amb Formulari Botigues per Secció -->
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

            <a id="bcolor" class="btn btn-outline-success my-2 my-sm-0" href="http://localhost/Small/index.php/SmallController/MainBotiguesPer" type="submit">Buscar Botigues</a>

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

    <!--Secció A-Apartat amb Seccions -->
    <section id="A">

      <div class="container mt-5">
        <div class="text-center">
          <h2 id="dSeccions">DIFERENTS SECCIONS!</h2>
        </div>
        <div class="row text-center">
          <div class="col-md-12 col-12">
            <div class="row mt-5">
              <div class="col-md-6 col-lg-3 col-6 col-xs-6 mt-2 text-center">
                <div class="mb-2">
                  <img id="fotosSeccions" src="<?php echo base_url(); ?>img/pescado.jpg" alt="Imatge Fruiteria">
                </div>
                <div class="text-center">
                  <p id="seccio">PEIXATERIA</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-3 col-6 col-xs-6 mt-2 text-center">
                <div class="mb-2">
                  <img id="fotosSeccions2" src="<?php echo base_url(); ?>img/fruta_verdura.jpg" alt="Imatge Fruiteria">
                </div>
                <div>
                  <p id="seccio" class="text-center">FRUITERIA</p>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 col-6 col-xs-6 mt-2 text-center">
                <div class="mb-2">
                  <img id="fotosSeccions3" src="<?php echo base_url(); ?>img/Carne.jpg" alt="Imatge Fruiteria">
                </div>
                <div>
                  <p id="seccio" class="text-center">CARNISSERIA<br>XARCUTERIA</p>
                </div>

              </div>
              <div class="col-md-6 col-lg-3 col-xs-6 col-6 mt-2 text-center">
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
    <!--Secció B-Apartat Info -->
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

    <!--Secció C-Apartat Cards -->
    <section id="C d-flex justify-content-center">

      <div class="container mb-5 mt-5 justify-content-center d-flex">
        <div class="row">
          <div class="col-md-4 col-12 col-sm-12 col-lg-4 mb-4">
            <div class="card1" style="width: 18rem;">
              <div class="spacer-card">

              </div>
              <div class="card-body card1-cuerpo">
                <h5 class="card-title margin-div">BOTIGUES</h5>
                <p class="card-text">Vols afegir la teva botiga i treballar amb nosaltres?<br> <strong>UNEIX-TE</strong> a nosaltres per aconseguir arribar a més clients!</p>
                <a href="<?php echo base_url(); ?>index.php/SmallController/RegisterBotiga" class="btn" id="bcolor">BOTIGUES</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 col-sm-12 col-lg-4 mb-4">
            <div class="card2" style="width: 18rem;">
              <div class="card-body ">
                <h5 class="card-title">CLIENTS</h5>
                <p class="card-text">Els clients podran fer <br>encàrregs només a la seva <br>ciutat o zones de la seva població. T'animes a provar?</p>
                <a href="#" class="btn" id="bcolor" data-toggle="modal" data-target="#Registre">REGISTRA'T</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-12 col-sm-12 col-lg-4">
            <div class="card3" style="width: 18rem;">
              <div class="spacer-card">

              </div>
              <div class="card-body card1-cuerpo">
                <h5 class="card-title margin-div">REPARTIDORS</h5>
                <p class="card-text">Vols repartir amb nosaltres? Contacte'ns!</p>
                <a href="<?php echo base_url(); ?>index.php/SmallController/PantallaContacte" class="btn" id="bcolor">CONTACTE</a>
              </div>
            </div>
          </div>
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
                    <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;" href="<?php echo base_url(); ?>index.php/SmallController/PantallaContacte">Contacte</a></li>
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