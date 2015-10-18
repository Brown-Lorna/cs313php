<?php

require 'connect.php';

$db = dbConnect();

	// Get the inventory
	$query = 'SELECT * FROM shoe_category
				ORDER BY category_ID';
	$categories = $db->query($query); 
 /*	$col_query = 'SELECT * FROM color
				ORDER BY color_ID';
 $categories = $db->query($col_query);
	$siz_query = 'SELECT * FROM size
				ORDER BY size_ID';
 $categories = $db->query($siz_query);
	$style_query = 'SELECT * FROM shoe_style
				ORDER BY style_ID';
 $categories = $db->query($style_query);
*/
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

<p>Show available shoe categories</p>
	<?php	echo $categories; 
		print $categories; 
		?>
		
	<!--	Show shoe sizes available
		
		Show shoe colors available
		
		Show shoe styles available
-->
		
	</body>
</html>
