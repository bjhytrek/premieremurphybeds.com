<?php
session_start();


//This is basically just a traffic cop, it's going to check if Admin, then send back to the main controller with the right info.

if($_SESSION['customerType']== 'admin'){
    header('location: /');
    exit;
}