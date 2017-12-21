<?php
// On demarre la session
session_start();
// Si la sessions basket n'a pas été créee, on l'initialise
if(!isset($_SESSION['basket']))
{
  $_SESSION['basket'] = array();
}
// On initialise le prix total
$totalPrice = 0;
// On boucle sur la session du panier
foreach ($_SESSION['basket'] as $key => $value) {
  foreach ($value as $keys => $values) {
    $totalPrice += intval($values['price']);
  }
}
// On require le fichier qui detectera si l'utilisateur est conecté
require('login/checkMdp.php');
include('template/headerPayement.php');
include('template/payement.php');
include('template/footer.php');
