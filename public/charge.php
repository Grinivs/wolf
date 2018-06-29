<?php
  require_once('C:\xampp\htdocs\buycoins\public\config.php');

  $token  = $_POST['stripeToken'];
  $email  = $_POST['stripeEmail'];
  $price  = $_POST['price'];
  $price1 = 00;
  $price4 = 00;
  $cost = 0.10;
  $price2 = $price.$price1.$price4;
  $total = $price2 * $cost;
  $ergebnis = $price2 + $total;

  $customer = \Stripe\Customer::create(array(
      'email' => $email,
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $ergebnis,
      'currency' => 'chf',
      'receipt_email' => $email
  ));

  echo '<h1>Successfully charged ';
  echo $ergebnis; 
  echo '!</h1>';

?>