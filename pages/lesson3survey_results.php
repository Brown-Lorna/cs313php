<?php
// session_start();
?>
<!DOCTYPE html>
<html>
	<body>
	
	<h1>Welcome <?php echo $_POST["name"]; ?></h1>
		<h2>Your Survey Results</h2>
	<p>
		Your family has <?php echo $_POST["malesorfemales"]; ?>
	</p>
	<p>
		Your favorite modes of transportation are: 
		<?php
		$arr = $_POST["transportation"];
		echo implode(", ", $arr) . "<br>";
		?>      
	</p>
		
	<p>I rated surveys as a <?php echo $_POST["survey"]; ?></p>
		
<--!	<?php echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
	 echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
?>
-->	
	
	</body>



</html>