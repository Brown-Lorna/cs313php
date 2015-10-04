 <?php
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf=8">
		<title>PHP Survey Form</title>
		<meta name="author" content="Lorna Brown">
		<link href="/css/screen.css" type="text/css" rel="stylesheet" media="screen">
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
	</head>
<body>
	<?php
// Set session variables
$_SESSION["name"] = "";
$_SESSION["malesorfemales"] = "";
$_SESSION["favnumber"] = "";
$_SESSION["transportation"] = "";
$_SESSION["surveys"] = "";
$_SESSION["nameErr"] = "";
?>


	
	<h1>Vote here!</h1>
	<p><span class="error">* required field.</span></p>
	<form method="post" action="<?php echo html specialchars($_SERVER["PHP_SELF"]);?>">
		
<?php
//define variables and set to empty values
$name = $malesorfemales = $favnumber = $transportation = $surveys = $nameErr = "";

// test inputs and test for empty name
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
	} else {
	$name = test_input($_POST["name"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  	$nameErr = "Only letters and white space allowed"; 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$malesorfemales = test_input($_POST["malesorfemales"]);
	$favnumber = test_input($_POST["favnumber"]);
	$transportation = test_input($_POST["transportation"]);
	$surveys = test_input($_POST["surveys"]);
}
	
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data _ htmlspecialchars($data);
	return $data;
}
?>
		
		Name: <input name="name" type="text">
		<span class="error">* <?php echo $nameErr;?></span><br>
	<p>
		Are there more males or females in your family?<br>
		<input type="radio" name="malesorfemales" value="more males">More males
		<input type="radio" name="malesorfemales" value="more females">More females
		<input type="radio" name="malesorfemales" value="an equal number of males and females">Equal number of each<br>
	</p>
	<p>
		What is your favorite number? <input name="favnumber" type="text"><br>
	</p>
	<p>
		Check your favorite modes of transportation:<br>
		<input type="checkbox" name="transportation[]" value="Plane">Plane
		<input type="checkbox" name="transportation[]" value="Racecar">Racecar		
		<input type="checkbox" name="transportation[]" value="Snowmobile">Snowmobile<br>
		<input type="checkbox" name="transportation[]" value="Walking">Walking		
		<input type="checkbox" name="transportation[]" value="Swimming">Swimming
		<input type="checkbox" name="transportation[]" value="Spaceship">Spaceship<br>		
		<input type="checkbox" name="transportation[]" value="Bicycle">Bicycle
		<input type="checkbox" name="transportation[]" value="Kayak">Kayak	
		<input type="checkbox" name="transportation[]" value="Tardis">Tardis<br>
		<input type="checkbox" name="transportation[]" value="Yacht">Yacht		
		<input type="checkbox" name="transportation[]" value="Train">Train
		<input type="checkbox" name="transportation[]" value="Truck">Truck<br>		
	</p>
	<p>
		On a scale of 1 to 5, rate how well you like completing surveys.<br>
		(1 means you dislike surveys, 5 means you enjoy surveys.)<br>
		<input type="radio" name="surveys" value="1 You would rather rather have the plague than complete a survey.">1
		<input type="radio" name="surveys" value="2 Completing surveys only rate slightly higher than taking a pop quiz.">2
		<input type="radio" name="surveys" value="3. Surveys are just part of life.">3
		<input type="radio" name="surveys" value="4. Survey results can be interesting sometimes.">4
		<input type="radio" name="surveys" value="5. Either you really like surveys or you are just glad you completed your PHP survey assignment.">5
	</p>
	
	
	<input type="submit" name="submit"><br>
	</form>
	<p>
 		<a href="lesson3survey_results.php">Click here to see the survey results without voting.</a>
	</p>
</body>
</html>
