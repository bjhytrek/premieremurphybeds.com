<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //Radio buttons
        $locations = array(
            array('East', 'ET'),
            array('Central', 'CT'),
            array('South', 'ST'),
            array('West', 'WT'),
            array('Pacific', 'PC')
           
       );
        echo '<p>Does this work?</p>';
        
        ?>
        <form action="problem1_controler.php" method="post">
            First Name: <input type="text" name="firstName"><br>
            Last Name: <input type="text" name="lastName"><br>
           <?php for ($i = 0; $i <= sizeof($locations); $i++) {
               $state = $locations[$i][0];
               $abbrev = $locations[$i][1];
               echo '<option type="radio" name="' . $state . '" value="$abbrev">' . $state .'<br>';
               echo 'is this working?';
           }
            ?>
        
        
        </form>
    </body>
</html>
