<?php

/**PHP functions file
Created by: André Figueira
Created date: 05/08/2011
**/



//Classes
require_once('classes/connection.class.php');

function submitForm()
{

	if(isset($_POST['submit']))
	{
	
		notify('Hello I am '.$_POST['name'], 'positive');
	
	}

}
function filterString($string){
//    $string = filter_var(trim($string), FILTER_SANITIZE_STRING); // Encodes special chars
  $string = filter_var(trim($string), FILTER_SANITIZE_SPECIAL_CHARS); // Removes a small list of special chars
 // $string = filter_var(trim($string), FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Removes all special chars
    return $string;
}
function logged_in(){
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;
	}else{
		return false;
	}
}
function hashPassword($password) {
    $salt = '$6$rounds=9000$' . substr(md5(uniqid(rand(), true)), 0, 16); // SHA-512   
    return crypt($password, $salt); // Result is ~120 character password including salt
}
// Use with login, remember that the password must be queried out of the database first
function comparePassword($password, $hashedPassword) {
    return crypt($password, $hashedPassword) == $hashedPassword;
}



function getUsers()
{

	$db = new Connection(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	$result = $db->query('SELECT name FROM users');
	
	while($row = mysql_fetch_assoc($result))
	{
	
		echo $row['name'].'<br>';
	
	}

}

?>