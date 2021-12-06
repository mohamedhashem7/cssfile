<!-- the screen for the professor to add questions for the students -->
<?php include 'database.php';
if (isset($_POST['submit'])) {  //if the submit button is pressed there is a post action to update the db with the Question number
	//question text and the correct choice
	$question_number = $_POST['question_number'];
	$question_text = $_POST['question_text'];
	$correct_choice = $_POST['correct_choice'];
	// array of choices
	$choice = array();
	$choice[1] = $_POST['choice1'];
	$choice[2] = $_POST['choice2'];
	$choice[3] = $_POST['choice3'];
	$choice[4] = $_POST['choice4'];
	$choice[5] = $_POST['choice5'];

	$query = "INSERT INTO questions ("; //Inserted the query in the table questions
	$query .= "question_number, question_text )";
	$query .= "VALUES (";
	$query .= " '{$question_number}','{$question_text}' ";
	$query .= ")";

	$result = mysqli_query($connection, $query);

	//check the correct answer from the user and mark is correct as 1 or 0
	if ($result) {
		foreach ($choice as $option => $value) {
			if ($value != "") {
				if ($correct_choice == $option) {
					$is_correct = 1;
				} else {
					$is_correct = 0;
				}
				//insert the options in db available for the student to choose from
				$query = "INSERT INTO options (";
				$query .= "question_number,is_correct,caption)";
				$query .= " VALUES (";
				$query .=  "'{$question_number}','{$is_correct}','{$value}' ";
				$query .= ")";

				$insert_row = mysqli_query($connection, $query);
				// Validate Insertion of Choices

				if ($insert_row) {
					continue;
				} else {
					die("the Choices insertion could not be executed" . $query);
				}
			}
		}
		$message = "Your question has been added sucessfuly";
	}
}

$query = "SELECT * FROM questions";
$questions = mysqli_query($connection, $query);
$total = mysqli_num_rows($questions);
$next = $total + 1;


?>

<!-- Here is the structure and styling of addQuestion page -->
<html>

<head>
	<title>E-learning Quiz</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

	<header>
		<div class="head">
			<h1>E-learning Quiz</h1>
			<a href='http://localhost/E-Learning-master/php' class="login">Go to login</a>
		</div>
	</header>

	<main>
		<div class="container">
			<h2>Add A Question</h2>
			<?php if (isset($message)) {
				echo "<h4>" . $message . "</h4>";
			} ?>

			<form method="POST" action="addQuestion.php">
				<p>
					<label>Question Number:</label>
					<input type="number" name="question_number" value="<?php echo $next;  ?>">
				</p>
				<p>
					<label>Question Text:</label>
					<input type="text" name="question_text">
				</p>
				<p>
					<label>Choice 1:</label>
					<input type="text" name="choice1">
				</p>
				<p>
					<label>Choice 2:</label>
					<input type="text" name="choice2">
				</p>
				<p>
					<label>Choice 3:</label>
					<input type="text" name="choice3">
				</p>
				<p>
					<label>Choice 4:</label>
					<input type="text" name="choice4">
				</p>
				<p>
					<label>Choice 5:</label>
					<input type="text" name="choice5">
				</p>
				<p>
					<label>Correct Option Number</label>
					<input type="number" name="correct_choice">
				</p>
				<input class="submit" type="submit" name="submit" value="submit">


			</form>
		</div>

	</main>
	<footer>



	</footer>
	<div class="bottom-container">
		<a href="https://www.facebook.com">
			<img class="icons" src="../image/facebook.png" alt="facebook"></a>

		<a href="https://www.twitter.com">
			<img class="icons" src="../image/twitter.png" alt="twitter"></a>

		<a class="btn" href="mailto:name@email.com"> <img class="icons" src="../image/gmail.png" alt="gmail"> </a>


		<p class="copyrights">2021 © All rights reserved for <span class="fantasy">proEducation</span></p>
	</div>

</body>

</html>