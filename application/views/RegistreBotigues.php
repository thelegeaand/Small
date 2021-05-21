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
  <header class="">
    <nav class="navbar navbar-light bgcust justify-content-between ">
      <a class="navbar-brand ml-3"><img src="<?php echo base_url(); ?>img/LogoSmallSinFondo.png" id="logo" alt="Imatge Corporativa Small"></a>
      <form class="form-inline d-flex justify-content-left">
        <a href="" class="nav-linkes">Home</a>
        <a href="" class="nav-linkes">Donar d'Alta Botiga</a>
        <a href="" class="nav-linkes">Botigues</a>
        <button id="bcolor" class="btn btn-outline-success my-2 my-sm-0 mr-3" type="button" data-toggle="modal" data-target="#IniciSessio">Iniciar Sessió</button>
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

            <br><br>Small  no es responsabilitza per la indeguda utilització del contingut, productes i/o serveis del lloc web i de l'incompliment dels presents termes i condicions.
              
            </p>
          
          </div>
          <div class="container text-right pb-2">

<span ><img id="imgModal" src="<?php echo base_url(); ?>img/Test-image-11.png"></span>


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
          <br><br>Small Es reserva el dret de canviar els termes de la present Política de Privacitat en qualsevol moment.<p>
          </div>

          <div class="container text-right pb-2">

          <span ><img id="imgModal" src="<?php echo base_url(); ?>img/privacy.png"></span>


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

          <span ><img id="imgModal" src="<?php echo base_url(); ?>img/Cookie.png"></span>


          </div>

        </div>
      </div>
    </div>
   


  </header>

   <body>
   <div class="text-botiga text-center">
            <h4 class="mt-5"><strong>AFEGEIX LA TEVA BOTIGA DE MANERA FÀCIL</strong></h4>
            <p class="mb-5 pb-5">Veus que les teves vendes han disminuit notablement?<br> Incentiva el teu negoci amb nosaltres!</p>
            </div>
    <div class="registre">
       <div class="container mb-5 pb-5">
            
  <div id="accordion mb-5 pb-5">
  <div class="card mb-5 pb-5">
    <div class="card-header text-center cardVerde" id="headingOne">
      <h5 class="mb-0 ">
        <button class="btn titolRegistre" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Segueix els Següents Passos
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="container  adv">
            <p class="ml-5 mt-4">*Qualsevol dada podrà modificar-se en un futur.</p>
            <div class="row mt-4 col-md-5 col-12">
                <h4 class="numerosRegistro mr-2">1</h4><h4>Introdueix les teves Dades</h4>
                </div>
            
            
              <div class="form-row mt-4">
                <div class="col-md-6 mb-3 text-center">
                  <input type="text" class="form-control mb-4" id="Usuari" placeholder="Nom Propietari">
                </div>
                <div class="col-md-6 mb-3">
                  <input type="password" class="form-control mb-4" id="Password" placeholder="DNI Propietari" required>
                </div>
                <div class="col-md-4">
                <input type="password" class="form-control mb-4" id="Password" placeholder="Nom Usuari" required>
                </div>
                <div class="col-md-4">
                <input type="password" class="form-control mb-4" id="Password" placeholder="Password" required>
                </div>
                <div class="col-md-4">
                <input type="password" class="form-control mb-4" id="Password" placeholder="Confirmar Password" required>
                </div>
              </div>

            <div class="row mt-4 col-md-5 col-12">
                <h4 class="numerosRegistro  mr-2">2</h4><h4>Introdueix les dades de la Botiga</h4>
                </div>
            


              <div class="form-row mt-4">
                <div class="col-md-6 mb-3 text-center">
                  <input type="text" class="form-control" id="Usuari" placeholder="Nom Botiga">
                </div>
                <div class="col-md-6 mb-3">
                  <input type="password" class="form-control mb-4" id="Password" placeholder="Nom Empresa" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="password" class="form-control mb-4" id="Password" placeholder="CIF" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="password" class="form-control mb-4" id="Password" placeholder="Correu Electrònic Empresa" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="password" class="form-control mb-4" id="Password" placeholder="Provincia" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="password" class="form-control mb-4" id="Password" placeholder="Ciutat" required>
                </div>
                <div class="col-md-4 mb-3">
                  <input type="password" class="form-control mb-4" id="Password" placeholder="Codi Postal" required>
                </div>
                <div class="col-md-4 mb-3">
                  <input type="password" class="form-control mb-4" id="Password" placeholder="Carrer" required>
                </div>
                <div class="col-md-4 mb-3">
                  <input type="password" class="form-control mb-4" id="Password" placeholder="Número" required>
                </div>
              </div>

              <div class="row mt-4 col-md-5 col-12">
                <h4 class="numerosRegistro mr-2">3</h4><h4>Dades Bancaries</h4>
                </div>
            
            
              <div class="form-row mt-4">
                <div class="col-md-3 mb-3 text-center">
                  <input type="text" class="form-control" id="Usuari" placeholder="ES 21" readonly>
                </div>
                <div class="col-md-9 mb-3">
                  <input type="password" class="form-control" id="Password" placeholder="IBAN*" required>
                </div>
              </div>

              <div class="offset-4 text-center boton">
                  <button type="submit" id="bcolor" class="btn btn-outline-success mt-5 mb-5">Afegir Botiga</button>

                </div>
            </form>
            </div>
      </div>
    </div>
  </div>
</div>
       </div>
       
       </div>
    <div class="registre2 mb-5">
       <div class="container">
            <div class="text-center mb-4">
                <h4><strong>COM FUNCIONA?</strong></h4>
            </div>
            <div id="accordion">

  <div class="card">
    <div class="card-header cardRed text-center">
      <a class="card-link tituloCard" data-toggle="collapse" href="#collapseFour">
        1.-Registre
      </a>
    </div>
    <div id="collapseOne" class="collapse show" data-parent="#accordion">
      <div class="">
        Lorem ipsum..
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header text-center cardAmarilla">
      <a class="collapsed card-link tituloCard" data-toggle="collapse" href="#collapseTwo">
       2.-Personalització
      </a>
    </div>
    <div id="collapseTwo" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum..
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header cardBlue text-center">
      <a class="collapsed card-link tituloCard" data-toggle="collapse" href="#collapseThree">
        3.-Afegir Productes
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum..
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-header cardGreen text-center">
      <a class="collapsed card-link tituloCard" data-toggle="collapse" href="#collapseThree">
        3.-Afegir Productes
      </a>
    </div>
    <div id="collapseThree" class="collapse" data-parent="#accordion">
      <div class="card-body">
        Lorem ipsum..
      </div>
    </div>
    </div>

    </div>
       </div>
   </div>

    <div class="cajasdiv mt-5 pt-5">
    <div class="registre3 mt-5 container ">
    <div class="perque text-center">
            <h4><strong>PERQUÈ NOSALTRES?</strong></h4>            
    </div>
    <div class="d-flex justify-content-center">
            <div class="cajasp text-center pl-5 pr-5 pt-5 mt-5 mb-5 col-md-6 pb-5">
              <h4><strong>Augmenta les teves vendes!</strong></h4>
              <img src="<?php echo base_url(); ?>img/pago-en-efectivo.png" class="imagenCajas" alt="">
              <p class="mt-4">Amb la nostra ajuda i mètode veuras com s'incrementen les vendes.</p>
            </div>
    </div>
    <div class="row">
    <div class="d-flex justify-content-center col-md-6">
            <div class="cajasp text-center pl-5 pr-5 pt-5 mt-5 mb-5 pb-5">
              <h4><strong>Abarca nous nínxols</strong></h4>
              <img src="<?php echo base_url(); ?>img/mujer.png" class="imagenCajas" alt="">
              <p class="mt-4">Arriba a més gent i consegueix clients nous.<br></p>
            </div>
    </div>
    <div class="d-flex justify-content-center col-md-6">
            <div class="cajasp text-center pl-5 pr-5 pt-5 mt-5 mb-5 pb-5">
              <h4><strong>Plana per la teva Botiga</strong></h4>
              <img src="<?php echo base_url(); ?>img/www.png" class="imagenCajas" alt="">
              <p class="mt-4">Plana única per mostrar-te i afegir els teus Productes.<br></p>
            </div>
    </div>
    </div>
</div>
    </div>



   </body>

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
                    <li class="pt-3"> <a class="card-text " style="text-decoration:none;color:white;cursor:pointer;" href="#">RegistreBotiga</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-12 col-lg-4">
              <div class="card" style="background-color:#4B4B4B;color:white;margin-top: 3%;">
                <div class="card-body">
                  <h5 class="card-title t1">LEGAL</h5>
                  <ul class="lista">
                    <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;cursor:pointer;"  type="button" data-toggle="modal" data-target="#Condicions">Termes i Condicions</a></li>
                    <li class="pt-3"><a class="card-text " style="text-decoration:none;color:white;cursor:pointer;"  type="button" data-toggle="modal" data-target="#Privacitat">Privacitat</a></li>
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
                    <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;" href="#">Contacte</a></li>
                    <li class="pt-3"><a class="card-text" style="text-decoration:none;color:white;" href="#">Small-Inc@gmail.com</a></li>
                    <li class="pt-3"> <a class="card-text " style="text-decoration:none;color:white;" href="#">+34 678930323</a></li>
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

</html>