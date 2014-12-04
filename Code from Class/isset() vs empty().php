<?php


$countryName = NULL;

// Evaluates to true becasue $var is empty
if(empty($countryName)) {
    $error[] = "Provide the country name.";
}

if(!isset($countryName)){
    $errors[] = "Provide the country name2.";
}
// Evaluates as true because $var is set
foreach ($error as $value) {
    echo $value.'<br>';
}