<?php
// session_start();
?>
<!DOCTYPE html>
<html>
	<body>
	
	<h1>Welcome <?php echo $_POST["name"]; ?></h1>
		<h2>Your Survey Results</h2>
	<p>
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