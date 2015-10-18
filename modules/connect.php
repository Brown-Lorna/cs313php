<?php

$dbHost = ''; 
$dbPort = ''; 
$dbUser = ''; 
$dbPassword = '';
$dbName = 'shoe_inventory';

$dbHost = getenv('OPENSHIFT_MYSQL_DB_HOST'); 
$dbPort = getenv('OPENSHIFT_MYSQL_DB_PORT'); 
$dbUser = getenv('OPENSHIFT_MYSQL_DB_USERNAME'); 
$dbPassword = getenv('OPENSHIFT_MYSQL_DB_PASSWORD');

// echo to check the connection
		echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser";

$db = new PDO("mysql:host=$dbHost:$dbPort;dbname=$dbName", $dbUser, $dbPassword);
?>

<?php // echo to check the connection
		echo "host:$dbHost:$dbPort dbName:$dbName user:$dbUser password:$dbPassword<br/>\n";

?>