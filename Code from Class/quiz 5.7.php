<?php
$arrayList .='</ul>';


$indexArray = array("Brendan","Hytrek","Aww, yeah!");
$arrayList = '<h2>For Loop Example<h2>';
$arrayList .='<ul)';
    for($i = 0; $i<count($indexArray); $i++){
        $arrayList .="<li>$arrayList[i]</li>";
        
    }
$arrayList .='</ul>';


$associativeArray = array(
        "Name" => "Brendan",
        "Number" => "2082303789",
        "looks" => "fantastic.",
      
);

var_dump($associativeArray);


$multiArray = array (
        array("Volvo",22,18),
        array("BMW",15,13),
        array("Saab",5,2),
        );
        \var_dump($multiArray);

        //For - Counter, fastest, conditional statement, needs incrememnting statment.
        //while - Conditional statement (beginning), incrementing statement (end)
        //foreach = arrays, temporary variable, slowest, easiest.
        //Do While - conditional statement (end,, always run at least once, 