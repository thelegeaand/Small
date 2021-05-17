<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>css/style.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url();?>js/scripts.js">
    
    <title>Pàgina Principal Small</title>
</head>
<body>

<header class="header">  
<nav class="navbar navbar-light bgcust justify-content-between">
      <a class="navbar-brand ml-3"><img src="<?php echo base_url();?>img/LogoSmallSinFondo.png" id="logo" alt=""></a>
  <form class="form-inline d-flex justify-content-left">
      <button id="bcolor"  class="btn btn-outline-success my-2 my-sm-0 mr-3" type="button" data-toggle="modal" data-target="#exampleModal">Iniciar Sessió</button>
      <button id="bcolor" class="btn btn-outline-success my-2 my-sm-0  mr-3" type="submit">Registrar-se</button>
  </form>
</nav>

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
      <h1 class="titol p-5">EL MERCAT ONLINE JA ESTÀ EN <br> LA TEVA CIUTAT</h1>
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
</div>
</form>
</header>
<main>









</main>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>