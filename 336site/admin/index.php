<?php
session_start();

//Admin Controller

if(!$_SESSION['customerType']== 'admin'){
    header('location: /');
    exit;
}