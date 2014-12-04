
<?php

$asia = array(
   array('Tokyo', 127000000, 84.4, 'Parliamentary'),
   array('capital'=>'Beijing', 'population'=>1300000000, 'lifespan'=>75.15, 'government'=>'Communist state'),
   array('capital'=>'New Delhi', 1236300000, 67.8, 'govt'=>'Federal Republic'));

$japan=['Tokyo', 127000000,84,'Parliamentary'];
$india=['capital'=>'New Delhi', 1236300000, 67.8, 'govt'=>'Federal REpublic'];



echo $asia[0][2],'<br>';
echo $asia[1]['population'].'<br>';
echo $asia[2]['captial'].'<br>';
echo $asia[2][0].'<br>';

$continents = ['North America','South America','Africa', 'Europe', 'Asia', 'Antarctica', 'Oceania'];

 $sorted = sort($continents);
 
 echo $sorted.'<br>'; //retuns "Array"
 echo $sorted.'<br>';//retrns "1"
 
 // For troubleshooting
 \var_dump($continents).'<br>'; //dumps the value of the variable defined. It shows all of the information about the variable.
 
 foreach ($continents as $continent) {
    echo $continent.'<br>';
}


