<?php
    $dsn = 'mysql:host=localhost;dbname=guitar_1';
    $username = 'bjhytrek';
    $password = 'Drpepper1991';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>