<?php

$list = "";

$continents = $_SESSION['stuff'];
        
        
    $continents['Europe'] = "<a href=\"index.php?action=europe\"title=\"Europe\">Europe</a>";
    $continents['Africa'] = "<a href=\"index.php?action=africa\"title=\"Go to the Africa Page\">Africa</a>";
    $continents['North America']="<a href=\"index.php?action=north_america\"title=\"North America\">North America</a>";
    $continents['Antarctica']= "<a href=\"index.php?action=antarctica\"title=\"North America\">Antarctica</a>";
    $continents['Asia'] = "<a href=\"index.php?action=asia\"title=\"Asia\">Asia </a>";
    $continents['South america'] ="<a href=\"index.php?action=south_america\"title=\"South America\">South America</a>";
    $continents['Oceania']= "<a href=\"index.php?action=oceania \"title=\"Oceania\">Oceania</a>";
    

$home =  "<a href=\"index.php?action=home\"title=\"home\">Home</a>";
$sorted = sort($continents);
array_unshift($continents, $home);
 
$navbar.= "<ul>";
foreach($continents as $p) {
    $navbar.= "<li>$p.</li>";
}
$navbar.= "</ul>";

//capture value sent from Navbar links:
$action = $_GET['action'];

if(isset($action)){
    

    switch($action){
        case home:
            $content="<h1>PHP Travel Site</h1><br>this site is dedicated to places to visit in a variety of countries around the world!";
            break;
        case europe:
            $content= "<h1>Europe</h1><br>Europe is a very bad place. It's the home of Communism, and high taxes!";
            break;
        case africa:
            $content= "<h1>Africa</h1><br>Africa is a land of great beuty, and splender. But it has been riddled with war, and suffering";
            break;
        case north_america:
            $content="<h1>North America</h1><br>Thinking of Travling to North America? Make sure to stay away form New York! My inlaws are from there, and trust me, you don't want to go there! ";
            break;
        case antarctica:
            $content="<h1>Antaritica</h1><br>You don't want to go to Antartica, it's far to cold!";
            break;
        case south_america:
            $content="<h1>South America</h1><br>The home of drug cartels, and spicy food!";
            break;
        case oceania:
            $content="<h1>Oceania</h1><br>Oceania is made of of many islands of either very happy people, or really angry people. Regardless of their mood, they all have great food!";
            break;
        case asia:
            $content="<h1>Asia</h1><br>Asia is home to the best food in the world. It also has a big wall.";
            break;
    }
}  else {
$content="<h1>PHP Travel Site</h1><br>this site is dedicated to places to visit in a variety of countries around the world!";
}
include 'exam_view.php';

