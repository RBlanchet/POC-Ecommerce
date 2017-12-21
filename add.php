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
  <form method="POST" action="products/add.php">Ajouter un article</p>

      <div class="md-form">
          <i class="fa fa-user prefix grey-text"></i>
          <input type="text" id="form3" class="form-control" name="productsTitle">
          <label for="form3">Nom de l'article</label>
      </div>

      <div class="md-form">
          <i class="fa fa-envelope prefix grey-text"></i>
          <input type="text" id="form2" class="form-control" name="productsPrice">
          <label for="form2">Prix</label>
      </div>

      <div class="md-form">
          <i class="fa fa-tag prefix grey-text"></i>
          <input type="text" id="form32" class="form-control" name="productsImage">
          <label for="form34">Image (Lien)</label>
      </div>

      <div class="md-form">
          <i class="fa fa-pencil prefix grey-text"></i>
          <textarea name="productsDescription" type="text" id="form8" class="md-textarea" style="height: 100px"></textarea>
          <label for="form8">Description</label>
      </div>

      <div class="text-center">
          <button class="btn btn-primary">Ajouter</i></button>
      </div>
  </form>
</div>
<?php
include('template/footer.php');
