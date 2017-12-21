<?php
// On initialise un unique id pour notre article
$id = uniqid();
// On verfie si l'url de l'image est bonne, sinon on en initialise une de base
if (filter_var($_POST['productsImage'], FILTER_VALIDATE_URL)) {
    $image = $_POST['productsImage'];
} else {
    $image = "http://via.placeholder.com/700x500";
}
if(isset($_POST))
{
  $id = array(
    "id" => $id,
    "price" => $_POST['productsPrice'],
    "description" => $_POST['productsDescription'],
    "title" => $_POST['productsTitle'],
    "image" => $image,
    "rate" => 0
  );
  $inp = file_get_contents('products.json');
  $tempArray = json_decode($inp, true);
  array_push($tempArray, $id);
  $jsonData = json_encode($tempArray);
  file_put_contents('products.json', $jsonData);
}
header('Location: ../index.php');
