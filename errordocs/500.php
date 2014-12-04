<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>500 Error Page</title>
    </head>
    <body>
        <h1>500 Error</h1>
        <?php
        // put your code here
        $message = $_SESSION['message'];
        echo $message;
        ?>
    </body>
</html>
