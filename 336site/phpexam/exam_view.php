<?php
session_start();
// Create the navigation bar here meeting the requirements listed in step 2
$stuff = array('Europe', 'Africa', 'North America', 'Antarctica', 'Asia', 'South America', 'Oceania');
$_SESSION['stuff'] = $stuff;
 
//$_POST[$stuff];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>View | PHP Travel Site</title>
  </head>
  <body>
    <header>
      <h1>PHP Travel Site</h1>
    </header>
    <nav>
      <?php
        // The navigation bar (step 2) will display here in the browser
        // Do NOT alter this code block
      	echo $navbar;
      ?>
    </nav>
    <main>
      <?php
        // The content from the controller (step 3) will display here in the browser
        // Do NOT alter this code block
      	echo $content;
      ?>
    </main>
    <footer>

	</footer>
  </body>
</html>