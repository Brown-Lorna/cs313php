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
		</nav><br>
        	<nav id="shoe-nav">
			<ul id="shoemenu">
                <li><a href="/pages/show_inventory.php">Show Shoes</a></li>
				<li><a href="/pages/add_shoe.php">Add Shoe</a></li>
				<li><a href="/pages/remove_shoe.php">Remove Shoe</a></li>
				<li><a href="/pages/shoe_categories.php">Shoe Categories</a></li>
			</ul>
		</nav>
	</header>
        
<!--	$category_id = $shoe_category['category_id'];
	$category = $shoe_category['category_name'];
	-->
			
	<h1>Shoe Categories</h1>
	
		

	<form id="shoe_form" method="post" action="show_inventory.php">
<h3>Select the inventory information to be shown</h3>
	
		<?php
try {
		$statement = $db->prepare('SELECT category_id, category_name FROM shoe_category');
		$statement->execute();
		
	while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
		echo '<input type="checkbox" name="shoe_category[]" value="' . $row["category_id"] . '">';
		echo $row['category_name'];
		echo '</input><br />';
		echo "\n";
	}
}
		catch (PDOEXception $ex) {
		echo "Database connection error.";
		die();
		
?>
		<br />

	
<!-- ?php
			$stmt = $db->prepare('SELECT * FROM shoe_category WHERE category_id=:category_id AND category_name=:shoe_category');
	$stmt->execute(array(':shoe_category' => $category, ':category_id' => $cat_id));
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "$rows"; ?>
			?php 
 

foreach ($shoe_category as $category) : ?>
		<li>
		<ul>?php echo $category['category_id']; ?></ul>
			<ul></ul>php echo $category['category_name']; ?></ul>
		</li>
?php endforeach; ?>
<!--	<input type="checkbox" name="inventory[]" value="categories"><br>
	Show available shoe styles <input type="checkbox" name="inventory[]" value="styles"><br>
	Show available shoe colors <input type="checkbox" name="inventory[]" value="colors"><br>
	Show available shoe sizes <input type="checkbox" name="inventory[]" value="sizes"><br>
-->		

		
	<input type="submit" name="categories">Check the Categories<br>
	</form>	


	</body>
</html>
