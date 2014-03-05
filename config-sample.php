<?php
// main constants configuration file
 
// Database configuration
define('DB_NAME', '');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_HOST', '');
 


define('ABSPATH', dirname(__FILE__).DIRECTORY_SEPARATOR);

// Find web root of app
$host = 'http://'.$_SERVER['HTTP_HOST']; // example: http://localhost or http://lebaneseblogs.com
$self = explode('/', $_SERVER['PHP_SELF']);
array_pop($self); // removes last item from the array, which is config.php in this case

// allow for a second level in directory hierarchy
// We're making use of the fact that ABSPATH is related to the root 
// folder and not to the folder of the file that includes it

$abs_path = explode(DIRECTORY_SEPARATOR, ABSPATH);
array_pop($abs_path);
if (end($abs_path) !== end($self)) {
	array_pop($self); 
}
$root_directory = implode('/', $self); 
$url = $host . $root_directory ;

define('BASE_URL', $url); 

require_once(ABSPATH.'/classes/DB.php');
?>