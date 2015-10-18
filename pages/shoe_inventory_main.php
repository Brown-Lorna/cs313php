<?php

require 'connect.php';

$db = dbConnect();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Shoe Inventory</title>
		<meta name="author" content="Lorna Brown">
		<link href="/css/screen.css" type="text/css" rel="stylesheet" media="screen">

	</head>
	<body>
	<header id="page-header">
		<nav id="page-nav">
			<ul id="mainmenu">
				<li><a href="/index.php">Home</a></li>
				<li><a href="/pages/assignments.php">Assignments</a></li>
				<li><a href="/pages/shoe_inventory_main.php">Shoe Inventory</a></li>
			</ul>
		</nav>

	</header>
	
	<h1>Shoe Inventory</h1>

	<form method="post" action="show_inventory.php">

<p>Show available shoe categories</p>
	<?php
try {
	// Get the inventory
	$categories = $db->prepare('SELECT category_name FROM shoe_category');
	$categories->execute(); 
	
while ($row = $categories->fetch(PDO::FETCH_ASSOC)) {
	echo '<p>';
	echo $row['category_name']
		echo '</p>';
}
	catch(PDOException $ex) {
		echo "Error showing categories: $ex";
		die();
	}
// echo $categories; 
	//	print $categories; 
		?>
		
	<!--	Show shoe sizes available
		
		Show shoe colors available
		
		Show shoe styles available
-->
</form> >		
	</body>
</html>
