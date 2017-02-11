<?php
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'signUp_db'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 
$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
mysql_query("SET NAMES UTF8");
if (mysqli_connect_errno($con)) {

     echo "Failed to connect to MySQL: " . mysqli_connect_error(); 
    
     }
 else { 
       
     }

?>
