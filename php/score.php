<!-- The score screen that shows the student his score -->
<?php 

session_start();

?>
<?php 
include 'database.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>

<html>
<head>
	<title>PHP Quizer</title>
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
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?><p>out of  <?php echo $total_questions; ?> </p>
				<?php unset($_SESSION['score']); ?>
				
			</div>
			

	</main>
	
	<div class="bottom-container-score">
            <a href="https://www.facebook.com">
            <img class="icons"  src="../image/facebook.png" alt="facebook"></a>

            <a href="https://www.twitter.com">
                <img class="icons"  src="../image/twitter.png" alt="twitter"></a>

            <a class="btn" href="mailto:name@email.com"> <img class="icons"  src="../image/gmail.png" alt="gmail">  </a>
            
            <p class="copyrights">2021 © All rights reserved for <span class="fantasy">proEducation</span></p>
          </div>
	
</body>
</html>