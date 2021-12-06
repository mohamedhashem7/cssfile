<!-- the first screen for the student whre it shows the no. of questions estimate time and button to start the quiz -->

<?php 
include 'database.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
<html>
<head>
	<title>E-Learning Quize</title>
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
				<h2>Test Your computer programming skills</h2>
				<p>
					This is a MCQ to test your computer programming skills.
				</p>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li>
					<li><strong>Type:</strong> MCQ</li>
					<li><strong>Estimated Time:</strong> <?php echo $total_questions*1.5; ?></li>

				</ul>
					
				<?php
				$t =$total_questions;

				if ($t < 1) {
				echo "No questions to take!";
				} else {
					echo '<a href="question.php?n=1" class="start-quiz">Start the Quiz</a>';
 				}		
			   ?>	
			</div>

	</main>


	
	<div class="bottom-container-prequiz">
            <a href="https://www.facebook.com">
            <img class="icons"  src="../image/facebook.png" alt="facebook"></a>

            <a href="https://www.twitter.com">
                <img class="icons"  src="../image/twitter.png" alt="twitter"></a>

            <a class="btn" href="mailto:name@email.com"> <img class="icons"  src="../image/gmail.png" alt="gmail">  </a>
            
           
            <p class="copyrights">2021 © All rights reserved for <span class="fantasy">proEducation</span></p>
          </div>



