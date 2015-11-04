<?php
$category_id = $_POST['category_id'];
$category_name = $_POST['category_name'];
echo "category_id=$category_id\n";
echo "category_name=$category_name\n";
include 'connect.php';
include 'shoe_inventory_main.php';
include 'shoe_categories.php';
$db = dbConnect();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf=8">
		<title>Inventory Results</title>
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
		
		
 <!--      php
if (isset($_POST['category'])) {
	echo '<p>The categories of shoes are: ' . $_POST['category'] . '<br>';
	foreach ($db->query('SELECT shoe_category FROM shoe_inventory WHERE shoe_category = "' . $_POST['shoe_category'] . '"') as $results){
		echo '$_results['shoe_category'] . '<br>'';
		}
		}
	?>
-->
<!-- Get the inventory
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
-->
		<h1>Inventory Results</h1>
		<h3>We have the following Shoe Categories</h3>
	<p>
<?php echo $_POST["categories"]; ?>
	</p>
	<!--	php 
			$stmt = $db->prepare('SELECT * FROM shoe_category WHERE id=:category_id AND name=:shoe_category');
	$stmt->execute(array(':shoe_category' => $category, ':category_id' => $cat_id));
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			echo "$rows"; ?>
	</p> -->
	<!--	php 
foreach($db->query)('SELECT * FROM shoe_category WHERE id=category_id AND name=shoe_category') as $row) {
	echo $row['category_id']. $row['category_name'];
}
	
	?>
	<!--	
		php
		$arr = $_POST["inventory"];
		echo implode(", ", $arr) . ".<br>";
		?>
php echo $_POST["categories"];
-->
		<p>Did it work yet?</p>
		</body>
	</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               