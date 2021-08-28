<?php

use App\Discount;
use App\RedColor;
use App\Tshirt;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_error', 1);

$tshirt = new Tshirt();
$tshirt_price = $tshirt->getPrice();
var_dump($tshirt_price);

$tshirtRed = new RedColor($tshirt);
$tshirtRed_price = $tshirtRed->getPrice();
var_dump($tshirtRed_price);

$tshirtDiscount = new Discount($tshirt);
$tshirtDiscount_price = $tshirtDiscount->getPrice();
var_dump($tshirtDiscount_price);

$tshirtDiscount = new Discount($tshirtRed);
$tshirtDiscount_price = $tshirtDiscount->getPrice();
var_dump($tshirtDiscount_price);



