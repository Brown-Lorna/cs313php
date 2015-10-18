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

	<header id="page-header">
		<nav id="page-nav">
			<ul id="mainmenu">
				<li><a href="/index.php">Home</a></li>
				<li><a href="/pages/assignments.php">Assignments</a></li>
			</ul>
		</nav>
	</header>
	
	<h1>Vote here!</h1>
	<form method="post" action="lesson3survey_results.php" >
		Name: <input name="name" type="text"><br>
	<p>
		Are there more males or females in your family?<br>
		<input type="radio" name="malesorfemales" value="more males than females.">More males
		<input type="radio" name="malesorfemales" value="more females than males.">More females
		<input type="radio" name="malesorfemales" value="an equal number of males and females.">Equal number of each<br>
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
		<input type="radio" name="surveys" value="3. Surveys are just a part of life.">3
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
