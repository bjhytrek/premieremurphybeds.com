<?php

$firstName = "Charles";
$lastName = "Krauthammer";

$email = strtolower($lastName.substr($firstName, 0,1)."@byui.edu");

echo $email;