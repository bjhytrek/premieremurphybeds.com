<?php

error_reporting(E_ALL);

ini_set('display_errors', 1);

//Base URL of the server links
define('BASE_URL', 'http://'.$_SERVER['HTTP_HOST'].'/');

//Database connection details for the local website
define('DB_HOST', 'localhost');
define('DB_USER', 'bjhytrek');
define('DB_PASS', 'Drpepper91');

//Tutorial Database names

define('T4_DB_NAME', 'murphy_beds');

//Paypal shopping cart settings
define('TAX', '0');

//PayPal Submission URL
define('PPCART_URL', 'https://www.paypal.com/cgi-bin/webscr');

//PayPal Account (email you registered with PayPal!)
define('PPCART_ACCOUNT', 'sales@premiermurphybeds.com');

//Currency Code for PayPal Check here for codes if you need to change it: 
define('PPCART_CURRENCY', 'USD');

//Country Code for PayPal Check here for codes if you need to change it: 
define('PPCART_COUNTRY', 'US');

//Return PayPal URL (Page that the user will see when they complete a payment)
define('PPCART_RETURN_URL', 'http://localhost:8888/TheGuruCoder/tutorial-4/paymentSuccess.php');

?>