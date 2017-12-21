<?php
$strBody = "<div class='col-md-6' style='padding-top: 50px'>
          <div class='box-wrapper'>
            <img src='" . $value['image'] ."' alt='rhcp' />
            <div class='box-content'>
              <a class='buy' href='basket/addBasket.php?title=" . $value['title'] . "&price=" . $value['price'] . "&panier=" . $value['id'] . "'><span><i class='fa fa-cart-plus'></i></span></a>
              <div class='title'>" . $value['title'] . "</div>
              <div class='desc'>" . $value['description'] . "</div>
              <span class='price'>" . $value['price'] . " €</span>
              <div class='footer'>
                <ul>";

for ($i=0; $i < 5; $i++) {
  if($i >= $value['rate'])
  {
    $strBody .= "<li class='fa fa-star-o'></li>";
  } else {
    $strBody .= "<li class='fa fa-star'></li>";
  }
}

$strBody .= " </ul>
              </div>
            </div>
          </div>
        </div>";
