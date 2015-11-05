<?php

require 'connect.php';
$db = dbConnect();

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Shoe Categories</title>
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
	
	<h1>Shoe Inventory</h1>

	<form action="show_inventory.php" method="post" >
<h3>Select the inventory information to be shown</h3>
        <h4>Show available shoe categories</h4>
        <p>
	<?php 
	//		$stmt = $db->prepare('SELECT * FROM shoe_category'); 
            // WHERE id=:category_id AND name=:category_name');
          //  $stmt->execute();
            
            $stmtCategories = $db->prepare('SELECT category_id, category_name FROM shoe_category');
            
	$stmtCategories->execute();
			while ($rows = $stmt->fetch(PDO::FETCH_ASSOC))
            { 
			echo "<p>";
            echo $rows['category_name'];
            echo "</p><br />"; 
             
            }
            ?>
	
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
