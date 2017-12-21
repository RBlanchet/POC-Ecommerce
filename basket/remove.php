<?php

session_start();
foreach ($_SESSION['basket'] as $key => $value) {
  foreach ($value as $keys => $values) {
    if($keys === $_GET['id'])
    {
      unset($_SESSION['basket'][$key]);
    }
  }
}
header('Location: ../index.php');
