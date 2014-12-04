<?php

// Valid constant names
define("FOO",     "something");
define("FOO2",    "something else");
define("FOO_BAR", "something more");

// Invalid constant names
define("2FOO",    "something");

/*
 * Control structures.
if
else
elseif/else if
Alternative syntax for control structures
while
do-while
for
foreach
break
continue
switch
declare
return
require
include
require_once
include_once
goto
 */
//If loop:
if ($a > $b)
  echo "a is bigger than b";

//if else and else if

if ($a > $b) {
    echo "a is bigger than b";
} elseif ($a == $b) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}

// Throwing an exception 
function inverse($x) {
    if (!$x) {
        throw new Exception('Division by zero.');
    }
    return 1/$x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}

//PHP $_REQUEST super global

/*<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>
 
 */
    $name = $_REQUEST['fname']; 
echo $name; 

// set the default timezone to use. Available since PHP 5.1
date_default_timezone_set('UTC');

//DATES and TIME
// Prints something like: Monday
echo date("l");
// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');
//More ways to use Date or time.
$tomorrow  = mktime(0, 0, 0, date("m")  , date("d")+1, date("Y"));
$lastmonth = mktime(0, 0, 0, date("m")-1, date("d"),   date("Y"));
$nextyear  = mktime(0, 0, 0, date("m"),   date("d"),   date("Y")+1);