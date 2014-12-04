<?php

// Looking for an item in a string can be helpful.

// strpos() finds the fist occurrence of a character.
// strrpos() finds the last occurrence of a character.

$firstName = "Charles";
$lastName = "Krauthammer";

$empEmail = $lastName.substr($firstName, 0, 1)."@byui.edu";

echo "<br><br>";
echo $empEmail;


$email = "name@email.com";

$i = strpos($email, "@");
$username = substr($email, "@");
$domain = strrpos($email,"@");
$domain = substr($email, $domain, -4);
