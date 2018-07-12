<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_yZMTGlZWW5Qn9Y4bvCPrOH7b",
  "publishable_key" => "pk_test_ZQ0t17oVXDQsLbXwM8K0xgJZ"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
