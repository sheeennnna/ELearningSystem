<?php
	// echo $_GET['pid'];
?>
<html>
<head>
	<link rel='stylesheet' href="css/handledCourse.css">
	<link rel='stylesheet' href="css/announcCourse.css">
	<link rel='stylesheet' href="css/assignCourse.css">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='../datatable_files/datatables.min.css'>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<title>Dashboard</title>
</head>
<body>
	<div class='row'>
		<div class='col col-md-1 text-center main_menu'>
			<br><img src="../images/icon.png" alt="WebProf" width='auto' height='70'>
			<br><br><br>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="">
					<span class='glyphicon glyphicon-user'></span>
					</br>Account
				</a></li>
				<li><a href="dashboardTeacher.php">
					<span class='glyphicon glyphicon-th'></span>
					</br>Dashboard
				</a></li>
				<li><a href="" class='active'>
					<span class='glyphicon glyphicon-book'></span>
					<br>Handled Courses</br>
				</a></li>
				<li><a href="">
					<span class='glyphicon glyphicon-inbox'></span>
					<br>Inbox</br>
				</a></li>
				<li><a href="">
					<span class='glyphicon glyphicon-question-sign'></span>
					<br>Help</br>
				</a></li>
				<br><br><br>
				<li><a href="">
					<span class='glyphicon glyphicon-log-out'></span>
				</a></li>
			</ul>
			<br><br>
		</div>

		<div class='col col-md-11 body_section'>
			<div class='row'>
				<div class='col col-md-10'> 
					<h3>
						<h3><a href=""><span class="glyphicon glyphicon-menu-hamburger hide_menu"></span></a> ENGLISH 1
						<span class='glyphicon glyphicon-menu-right' style='font-size:20px'></span> 
						<span class='add_announcement'>Quizzes</span>

					</h3>
				</div>
				<div class='col col-md-11'> 
					<center><hr class="hr_line"></center>
				</div>
			</div>
			<div class='col col-md-1 text-center main_menu_teacher'>
				<ul class="nav nav-pills nav-stacked">
					<li><a href='courseTeacher.php'>
						Home
					</a></li>
					<li><a href='courseTeacherAnnouncement.php'>
						Announcements
					</a></li>
					<li><a href="courseTeacherAssignment.php">
						Assignments
					</a></li>
					<li><a href="courseTeacherQuizzes.php" class='active'>
						Quizzes
					</a></li>
					<li><a href="courseTeacherGrades.php">
						Grades
					</a></li>
					<li><a href="courseTeacherSession.php">
						Session
					</a></li>
				</ul>
				<br><br>
			</div>
		<div class='col col-md-9 announcement_teacher' style='padding-left:50px'> 
			<div class='col-md-10'>
			<?php
				$data = file_get_contents('json/quiz.json');
				$quizArr = json_decode($data);

				foreach ($quizArr as $qz) {
					if($qz->QuizID == $_GET['pid']){
						
						echo "<h2>".$qz->QuizTitle."</h2>
							  <a href='courseTeacherEditQuiz.php'>
							 	<button type='button' class='btn btn-primary col-md-offset-8'> Edit Quiz</button>
							  </a><hr>";
						echo "<b>Due </b>";
						if($qz->QuizDueDate == ""){
							echo "No Due Date";
						}
						echo "<hr>";						
					}
				}
				echo "<b>Questions</b><br><br>";
				echo "<ol type='1'>";
				$qdata = file_get_contents('json/quizQuestions.json');
				$qsArr = json_decode($qdata);

				foreach ($qsArr as $questions) {
					if($questions->QuizID == $_GET['pid']){
						echo "<li>";
						echo $questions->Question;
						echo "</li>";

					}
				}
				echo "</div>";
			?>

			<!-- <div class="col-md-10"> -->
				<!-- <h2>Quiz Title</h2>
				<a href='courseTeacherEditQuiz.php'>
					<button type='button' class='btn btn-primary col-md-offset-8'> Edit Quiz</button>
				</a>
				<hr> -->
				<!-- <b>Due</b> No Due Date <b>Points</b> 50  <b>Submitting</b> a file upload
				<hr> -->
				<!-- <b>Quiz Subtitle</b><br><br> -->
				<!-- <ol type='1'>
				<li>Lorem Ipsum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo? </li>
				<li>Lorem Ipsum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore verita? Why?</li>
				<li>Lorem Ipsum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritaLorem Ipsum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo? </li> -->
			<!-- </div> -->
			<!-- <div class="col-md-2">
				<h4>Submission</h4>
				<h5><span class='glyphicon glyphicon-ok'></span> Tuned In!</h5>
				Dec 12, 2017 at 3:38pm
			</div> -->
		</div>
	</div>
</body>

</html>

<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script>
	$('.recent_activity_nav').click(function() {
    	$('.home_announcements').slideToggle("slow");
	}); 
</script> -->