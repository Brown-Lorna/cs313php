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
<h3>Select the inventory information to be shown</h3>
<p>Show available shoe categories 
	
	
<!--	<input type="checkbox" name="inventory[]" value="categories"><br>
	Show available shoe styles <input type="checkbox" name="inventory[]" value="styles"><br>
	Show available shoe colors <input type="checkbox" name="inventory[]" value="colors"><br>
	Show available shoe sizes <input type="checkbox" name="inventory[]" value="sizes"><br>
-->		
</p>
		
	<input type="submit" name="categories">Check the Categories<br>
	</form>	
		
	</body>
</html>
