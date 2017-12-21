<?php
// On get le contenu de notre fichier json
$string = file_get_contents("products/products.json");
$json = json_decode($string, true);
// On intialise un array vide qui stockera les produits
$produtcs =  array();
// On instaure le début de la mise en page
require('products/productsHeader.php');
echo $strHeader;
// On boucle sur le json
foreach($json as $key => $value)
{
  require('products/productsTemplate.php');
  echo $strBody;
  $i++;
}
require('products/productsFooter.php');
echo $strFooter;
