 <?php
//session_start();
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
<!--	<?php
// Set session variables
$_SESSION[""] = "";
?>
-->
	
	<h1>Vote here!</h1>
	<form action="lesson3survey_results.php" method="post">
		Name: <input name="name" type="text"><br>
	<p>
		Are there more males or females in your family?<br>
		<input type="radio" name="malesorfemales" value="more males">More males
		<input type="radio" name="malesorfemales" value="more females">More females
		<input type="radio" name="malesorfemales" value="an equal number of males and females">Equal number of each<br>
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
		<input type="radio" name="surveys" value="1 I would rather do anything else in the whole world">1
		<input type="radio" name="surveys" value="2 I would rather complete a survey than have the plague">2
		<input type="radio" name="surveys" value="3 Surveys are no big deal">3
		<input type="radio" name="surveys" value="4 I am curious to see how this goes">4
		<input type="radio" name="surveys" value="5 Either I really like surveys or I am glad I completed my PHP survey assignment">5
	</p>
	
	
	<input type="submit" name="submit"><br>
	</form>

 <a href="lesson3survey_results.php">Click here to see the survey results without voting.</a>
</body>
</html>

<!--
OVERVIEW
Create a simple PHP form that allows users to cast votes for certain questions and see the results.

GUIDELINES
The following guidelines are the minimum standard for this assignment (to earn 93%). To earn 100%, you should find a way to go beyond this standard to show your creativity and personality. Have fun and make it your own!

Your survey/results should look professional.
There should be at least four questions.
Provide a link on the question page to go directly to the results (without voting).
When the user casts their vote, they should then see the results.

Store the results to a file on the filesystem so they can be retrieved/added to later.

If the user returns to the question page after they have voted, they should be automatically directed to the results. (Think sessions)
Create a link to your survey from your assignments page.
Submit the link to your survey to this assignment in I-Learn.

-->