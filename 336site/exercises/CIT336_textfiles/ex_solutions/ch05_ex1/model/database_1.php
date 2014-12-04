<?php
    $dsn = 'mysql:host=localhost;dbname=guitar1b';
    $username = 'bjhytrek_admin';
    $password = 'Drpepper1991';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>