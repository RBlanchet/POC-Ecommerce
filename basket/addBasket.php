<?php
session_start();
// Si on voit qu'on a ajouter quelque chose dans le panier
if(isset($_GET['panier']) && $_GET['price'] && $_GET['title'])
{
  // On initialise un array avec le produit ajouter
  $product = array(
    $_GET['panier'] => array(
      'title' => $_GET['title'],
      'price' => $_GET['price'],
      'id' => $_GET['panier']
    )
  );
  // Puis on l'ajoute a la session
  array_push($_SESSION['basket'], $product);
}
header('Location: ../index.php?add=true');
