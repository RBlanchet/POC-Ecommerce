<?php

// On demarre la session
session_start();
// Si la sessions basket n'a pas été créee, on l'initialise
if(!isset($_SESSION['basket']))
{
  $_SESSION['basket'] = array();
}

// On require le fichier qui detectera si l'utilisateur est conecté
require('login/checkMdp.php');
include('template/header.php');
include('template/navbar.php');
?>
<div class="container" style="padding-top: 50px">
  <form method="POST" action="user/add.php">S'inscrire</p>

      <div class="md-form">
          <i class="fa fa-user prefix grey-text"></i>
          <input type="text" id="form3" class="form-control" name="registerUsername">
          <label for="form3">Nom d'utilisteur</label>
      </div>

      <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="password" id="form2" class="form-control" name="registerPassword">
          <label for="form2">Mot de passe</label>
      </div>
      <div class="text-center">
          <button class="btn btn-primary">S'inscrire</i></button>
      </div>
  </form>
</div>
<?php
include('template/footer.php');
