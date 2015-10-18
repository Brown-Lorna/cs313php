<?php

require 'connect.php';

$db = dbConnect();

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf=8">
		<title>PHP Survey Form Results</title>
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
 /*	// Get the inventory
	$query = 'SELECT * FROM shoe_category
				ORDER BY category_ID';
	$categories = $db->query($query); 
echo $categories;
	$col_query = 'SELECT * FROM color
				ORDER BY color_ID';
 $categories = $db->query($col_query);
	$siz_query = 'SELECT * FROM size
				ORDER BY size_ID';
 $categories = $db->query($siz_query);
	$style_query = 'SELECT * FROM shoe_style
				ORDER BY style_ID';
 $categories = $db->query($style_query);
*/
		<h1>Inventory Results</h1>
		<h3>We have the following Shoe Categories</h3>
	<p>
		<?php 
			$stmt = $db->prepare('SELECT * FROM shoe_category WHERE category_id=category_id AND shoe_category=shoe_category');
			$categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "$categories"; ?>
	</p>
		<?php 
foreach($db->query)('SELECT * FROM shoe_category WHERE category_id=category_id AND shoe_category=shoe_category') as $row) {
	echo $row['category_id']. $row['category_name'];
}
	
	?>
	<!--	Your favorite modes of transportation are: 
		php
		$arr = $_POST["transportation"];
		echo implode(", ", $arr) . ".<br>";
		?>
php echo $_POST["malesorfemales"];
-->
		</body>
	</html>
