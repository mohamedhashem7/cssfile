<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 
	//score will not be provided if in first question
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
 if($_POST){
	//We get the total number of questions
 	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
	
	//We need to capture the question number from where form was submitted
 	$number = $_POST['number'];
	
	//Here we are storing the selected option by user
 	$selected_choice = $_POST['choice'];
	
	//What will be the next question number
 	$next = $number+1;
	
	// we determine the correct choice
 	$query = "SELECT * FROM options WHERE question_number = $number AND is_correct = 1";
 	 $result = mysqli_query($connection,$query);
 	 $row = mysqli_fetch_assoc($result);

 	 $correct_choice = $row['id'];
	
	//if choice is correct increment the score variable
 	 if($selected_choice == $correct_choice){
 	 	$_SESSION['score']++;
 	 }
		//we route either to the final page if questions are provided
 	 if($number == $total_questions){
 	 	header("LOCATION: score.php");
 	 }else{
 	 	header("LOCATION: question.php?n=". $next);
 	 }

 }



?>