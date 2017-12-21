<?php
// On initialise un unique id pour notre article
$id = uniqid();
// Si on vient d'un formulaire
if(isset($_POST))
{
  var_dump($_POST);
  $id = array(
    "username" => $_POST['registerUsername'],
    "password" => $_POST['registerPassword'],
  );
  $inp = file_get_contents('../user.json');
  $tempArray = json_decode($inp, true);
  array_push($tempArray, $id);
  $jsonData = json_encode($tempArray);
  file_put_contents('../user.json', $jsonData);
  
  header('Location: ../index.php');
}
