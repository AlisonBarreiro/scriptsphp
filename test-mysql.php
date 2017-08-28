<?php
# Fill in the values corresponding to your project
$dbname = 'name';
$dbuser = 'user';
$dbpass = 'pass';
$dbhost = 'host';

$conn = mysql_connect($dbhost,$dbuser,$dbpass); mysql_select_db($dbname) or die( "Could not connect to MySQL databaseL");
if (!$conn) {
  echo "Could not connect to MySQL database."; 
             exit;}
else {
  echo "Congratulations!! The connection to the database occurred normally!.";
}
mysql_close(); 

?>
