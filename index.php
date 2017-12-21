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
require('template/modal.php');
require('products/listProducts.php');
include('template/footer.php');
if(isset($_GET['add']))
{
  if($_GET['add'] == true)
  {
    echo "<script type='text/javascript'>
            modal();
          </script>";
  }
}
