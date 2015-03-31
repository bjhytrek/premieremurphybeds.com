<?php

session_start();
/*
 * Account Controller
 */
require '/_php/config.php';
require '/_php/functions.php';
require '/_php/paypal.functions.php';



//Get a trigger key-value, regardless of how sent
if (isset($_POST['action'])) {
 $actionsent = filterString($_POST['action']);
} elseif (isset($_GET['action'])) {
 $actionsent = filterString($_GET['action']);
}

//********* Control Statment to run Application   ************
if (isset($actionsent)) {
	# code...

switch ($actionsent) {

case 'home':
	#for when User is navigating to the Home Page
	
	include 'home.php'; //sent back to the home page

	break;
case 'queen_standard':
	#For when user is navigating to the custom_builds page
	$product = 'Standard Queen';
	include 'queen_beds.php'; //sent custom_builds page
	break;

case 'queen_premium':
	#For when user is navigating to the custom_builds page
	$product = 'Premium Queen';
	include 'queen_beds.php'; //sent custom_builds page
	break;

case 'queen_premier':
	//when user selections premier level queen bed.
	$product = 'Premier Queen';
	include 'queen_beds.php';
	break;

case 'full':
	#for when the user is navigating to the repairs page
	include 'full_beds.php';
	break;

case 'contact':
	#for when the customer is navigating to the contact page
$active_page
                = 5;
        $_SESSION['page']
                = 'Contact';
       
        
	include 'contact.php';
	break;

case 'twin':
	#for when customer is navigating to the twin page

	include 'twin_beds.php'; //sent to twin.php
	break;

	case 'hutch':
	#for when customer is navigating to the hutch page

	include 'hutch.php'; //sent to hutch.php
	break;

	case 'cart':
	#for when customer is navigating to the cart page

	include 'cart.php'; //sent to cart.php
	break;

case 'admin':
	#for when Ray clicks "Admin Login"
	
	if ($logged_in) {
		# code...
		include 'admin.php';
	}
	else
	{
		include 'admin_login.php';
		
	}
	
	break;

case 'login':
	# Log the User in.
		$username = filterString($_POST['username']);
		$password = filterString($_POST['password']);
		
		//check the data
	if (empty($username) || empty($password)) {
		include 'admin_login.php';
		$message = "please enter a valid username or password.";
	} 
	// If errors, return for repair
	if (isset($message)) {
		include 'login.php';
		exit;
	}
		// Proceed with login attempt, if no errors
	  // Get the data from the database based on the email address
	  $loginData = loginCustomer($username, $password); 
	  $hashedPassword = $loginData['password'];
	  // Compare the passwords for a match
	  $passwordMatch = comparePassword($password, $hashedPassword);

	  // IF there is a match, do the login
	  if ($passwordMatch) {
	  	// Use the session for login data
	  	$_session['logged_in'] = TRUE;
	  	$_session['username'] = $loginData['username'];
	  	// Indicate that the login was a success

	  	$message = $loginData['username']. ', you have logged in.';
	  	$products = getProducts();
	  	$title = 'Products';
	  	include 'admin.php';
	  	exit;
	  } else {
	  	// There was not a match, tell the user
	  	$message = 'Login Failed';
	  	$title = 'Admin Login';
	  	include 'admin_login.php';
	  	exit;
	  }

		
break;

default: 
	#for when no action is set send to home page

	include 'home.php' ;
	break;

}
	}
else{
	include 'home.php';


}









?>