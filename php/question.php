<?php
include 'database.php';
session_start();
//Get the question number
$number = $_GET['n'];

//Query the question with specific number
$query = "SELECT * FROM questions WHERE question_number = $number";

// Get the question
$result = mysqli_query($connection, $query);
$question = mysqli_fetch_assoc($result);

//Retrieve the options of choices available
$query = "SELECT * FROM options WHERE question_number = $number";
$choices = mysqli_query($connection, $query);
// Retrieve the total questions
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection, $query));


?>
<html>

<head>
	<title>Elearning Quiz</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

<header>
	<div class="head">
			<h1>E-learning Quiz</h1>
		</div>
	</header>

	<main>
		<div class="container-questions">
			<div class="current">Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
			<p class="question"><?php echo $question['question_text']; ?> </p>
			<form method="POST" action="functions.php">
				<ul class="choicess">
					<?php while ($row = mysqli_fetch_assoc($choices)) { ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['caption']; ?></li>
					<?php } ?>
				</ul>
				<input type="hidden" name="number" value="<?php echo $number; ?>">
				<input class="submit" type="submit" name="submit" value="Submit">


			</form>


		</div>

	</main>


	<div class="bottom-container-quiz">
		<a href="https://www.facebook.com">
			<img class="icons" src="../image/facebook.png" alt="facebook"></a>

		<a href="https://www.twitter.com">
			<img class="icons" src="../image/twitter.png" alt="twitter"></a>

		<a class="btn" href="mailto:name@email.com"> <img class="icons" src="../image/gmail.png" alt="gmail"> </a>


		<p class="copyrights">2021 © All rights reserved for <span class="fantasy">proEducation</span></p>
	</div>












</body>

</html>