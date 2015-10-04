<?php
//session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf=8">
		<title>PHP Survey Form Results</title>
		<meta name="author" content="Lorna Brown">
		<link href="/css/screen.css" type="text/css" rel="stylesheet" media="screen">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
	</head>
	<body>
	
	<h1>Welcome <?php echo $_POST["name"]; ?></h1>
		<h2>Your Survey Results</h2>
	<p>
	<?php echo "Your family has " . $_SESSION[malesorfemales] . ".<br>";
?>
		
		Your family has <?php echo $_POST["malesorfemales"]; ?><br>
	
		Your favorite number is <?php echo $_POST["favnumber"]; ?>
	</p>
	<p>
		Your favorite modes of transportation are: 
		<?php
		$arr = $_POST["transportation"];
		echo implode(", ", $arr) . "<br>";
		?>      
	</p>
		
	<p>You rated completing surveys as a <?php echo $_POST["surveys"]; ?></p>
		
	
	
	</body>



</html>