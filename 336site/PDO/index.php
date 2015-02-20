<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$server = 'localhost';
$dbname= 'murphy_beds';
$username = 'bjhytrek';
$password = 'Drpepper91';
$dsn = 'mysql:host='.$server.';dbname='.$dbname;

// Now create the actual connection object and assign it to a variable
try {
$link = new PDO($dsn, $username, $password);
} catch(PDOException $e) {
   echo $e->getMessage;
   $message = "<p>Sorry, the server is having a nervous breakdown. We'll get back to you as soon as it's better.</p>";
   $_SESSION['message'] = $message;
   header('location: /errordocs/500.php');
}
//include => brings things
//header sends us somewhere else.

//only use this code below for testing, DO NOT leave on site (security reasons)
if(is_object($link)){
    echo 'Connection object successfully created';
}else{
    echo 'conncetion object was not created.';
}