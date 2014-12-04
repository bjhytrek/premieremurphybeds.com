<?php

/* 
 * 2010-09-22 11:57:32
 */


       
       
  //someone else's example
       
       $userinfo = $_POST['born']; // get the date of birth
       $born = new DateTime($userinfo); //conver to date format
       $today = new DateTime('today'); //get todays date.
       $age = $born->diff($today)->y; //compate the difference based on years and saved on age.
       
       //echo $age, '<br>';
       
       if($age < 13) {
           echo 'you are younger than 13';
       }
       else if($age ==13){
           echo 'you are 13';
       }
       else {
           echo 'you are older than 13';
           
       }