<?php
require_once __DIR__ . '/classes/User.php';
require_once __DIR__ . '/classes/CreditCard.php';

$user = new User('Mario', 'Rossi', 'mariorossi@outlook.it');

$creditCard = new CreditCard();
$creditCard -> setNumberCard('3333444455557777');
$creditCard->setExpirationMonth('01');
$creditCard->setExpirationYear('22');
$creditCard->setCvv('777');
var_dump($user);
?>