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
<!--
	<form method="post" action="<?php // echo htmlspecialchars();?>">

		</form> >
	-->	

<p>Show available shoe categories<br />
	<?php
function dbConnect() {
	// Get the inventory
	$query = 'SELECT * FROM shoe_category
				ORDER BY category_ID';
	$categories = $db->query($query); 
	return $categories;
}
	
echo $categories; 
		print $categories; 
		?>
		</p>
	<!--	Show shoe sizes available
		
		Show shoe colors available
		
		Show shoe styles available
-->
		
	</body>
</html>
