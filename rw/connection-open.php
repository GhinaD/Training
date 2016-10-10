<?php ini_set("error_reporting", E_ALL & ~E_NOTICE);?>
<?php 
ini_set('display_errors',0);
ini_set('log_errors',1);

define('DB_SERVER', "213.171.200.86");
define('DB_USER', "databaseuser");
define('DB_PASSWORD', "User@123");
define('DB_NAME', "rolavincent");

/* define('DB_SERVER', "localhost");
define('DB_USER', "root");
define('DB_PASSWORD', "");
define('DB_NAME', "rola"); */


$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if ($conn->connect_error) {
      trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
}

?>
