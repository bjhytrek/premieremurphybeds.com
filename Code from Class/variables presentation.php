<?php

//How to declare a variable

$count = 10;
$list_price = 34.34;
$first_name = 'Cpt.Steve';
$first_name = "Tony ";
$is_valid = false;

//Variables that store strings:
$first_name = 'Captain Steve Rogers';
$first_name = "Tony";

//Variables that store Doubles:

$list_price = 34.34;
$grade = 43.43;

//variables that store integers:
$number_of_craps_given = 0;
$count = 10;
$number_of_lamas = 999;


//Variables that store booleans:
$user_found = false;
$is_valid = false;
$presentations_suck = true;
$are_pandas_sad = TRUE;

//RULES::::::::::

//Case sensitive


//can have letters, numbers a,d underscores

//must start with "$" 


// NO SPECIAL CHARACTERS %#*@(*(@(*+)!(*

//Cannot begin with digits or two underscores


//CANNOT use PHP reserved names like " $this , or $isset

//getting data from an array and storing it in a variable:

$last_name = [
    "Jeffery" => "Holland",
    "Tony" => "Stark",
    "Tyrion" => "Lanister"
];
     $important_person = $last_name["Tony"];
     $cool_guy = $last_name["Jeffery"];
     $awesome_guy = $last_name["Tyrion"];
     
     
     //print out our variable
     echo ($important_person);
     echo "<br>";
     echo($cool_guy);
     echo "<br>";
     echo ($awesome_guy);
     
        
        