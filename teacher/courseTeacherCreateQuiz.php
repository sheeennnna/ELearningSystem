<?php
$notif = '';
$error = '';

if(isset($_POST["submit"])){
	if (empty($_POST['quizTitle']) || empty($_POST['quizInstructions'])|| empty($_POST['quizTimeLimit'])) {
		$notif = "<div class='alert alert-danger' role='alert'> Please fill out all necessary inputs</div>";
		// echo "<div class='alert alert-danger' role='alert'>".$_POST['typeResult']."</div>";
	}else{
		if(file_exists('json/quiz.json')){  
	        $data = file_get_contents('json/quiz.json');
	        $dataArray = json_decode($data, true);//for insertion

			$quizArr = json_decode($data);//for counter checking
			$IDcounter = count($quizArr);//counts how many objects/arrays are in the json file

	        $quiz = array(
	        	'QuizID' => ++$IDcounter,
	        	'QuizTitle' => $_POST['quizTitle'],
	        	'QuizInsTructions' => $_POST['quizInstructions'],
	        	'QuizTimeLimit' => $_POST['quizTimeLimit'],
	        	'QuizDueDate' => $_POST['quizDueDate']
	        );

	        $dataArray [] = $quiz;
	        $passedData = json_encode($dataArray);

	        if(file_put_contents('json/quiz.json', $passedData)){  
	            // $notif = "<div class='alert alert-success' role='alert'> Quiz Succesfully Created</div>";
	            header("location:courseTeacherCreateQuizQuestions.php?pid=".$IDcounter."");
	            // echo $IDcounter;
	        } 
	    }else{  
	        $error = 'JSON File not exits';  
	    }
	}
}
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

	<style>
		#tof, #mc{
			display: none;
		} 
	</style>
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
		<div class='col col-md-10' style='padding-left:50px; overflow-y: scroll; height:560px;'> 
			<div class="panel panel-primary">
			  <!-- Default panel contents -->
			  <div class="panel-heading assignment_heading">
			  	<span class='glyphicon glyphicon-file'></span> Create Quiz
			  </div>
			  <div class="panel-body">
			  	<form method="POST">
			  		<div class="col-md-11">
			  			<h4>Details</h4><hr>
			  			<?php   
                     		if(isset($notif)){  
                          		echo $notif;  
                     		}  
                     	?> 
			  			<div class="input-group">
					  		<span class="input-group-addon">
						        <b>Title</b>
						      </span>
						      <input type="text" class="form-control" placeholder="" required="required" name="quizTitle">
			    		</div>
			    		<br>
			    		<b>Quiz Instructions</b>
			    		<textarea class="form-control" required="required" name="quizInstructions"></textarea>
			    		<br>
			    		<div class="row">
			    			<div class="col-md-6">
			    				<div class="input-group">
						  			<span class="input-group-addon">
							        	<b>Time Limit</b>
							     	</span>
						      		<input type="text" class="form-control" placeholder="Minutes" name="quizTimeLimit" pattern="(0?[1-5][5-9])" title="From 15-59 minutes only">
			    				</div>
			    			</div>
				    		<div class="form-group">
	                			<div class='input-group date' id='datetimepicker1'>
	                				<span class="input-group-addon">
	                					<b>Due Date</b>
	                    			</span>
	                   				<input type='date' class="form-control" name="quizDueDate" />
	               			 	</div>
	               			 	<br>
	           				</div>
			    		</div>

			    		<!-- CREATION?CANCELATION BUTTON -->
  						<div class="col-md-11">
			    			<input type="submit" name="submit" value="Proceed to Questions" class="btn btn-primary" />
			    			<a href="courseTeacherQuizzes.php">
			    				<button type="button" class="btn">Cancel</button>
			    			</a>
			    		</div>
			  		</div>
			  	</form>
			  	<!-- <a href="courseTeacherCreateQuizQuestions.php">
			  		<button class="btn btn-primary">Proceed to Questions</button>
			  	</a> -->
			</div>
		</div>
	</div>
	</div>
</body>

</html>
<script>
// var types = document.getElementById('qType').value;
// var val;

// function type1(){
//     val = document.getElementById('t1').value;
//     document.getElementById('result').value = val;
//     document.getElementById('mc').style.display = 'block';
//     document.getElementById('tof').style.display = 'none';
// }

// function type2(){
//     val = document.getElementById('t2').value;
//     document.getElementById('result').value = val;
//     document.getElementById('tof').style.display = 'block';
//     document.getElementById('mc').style.display = 'none';
// }

// function type3(){
//     val = document.getElementById('t3').value;
//     document.getElementById('result').value = val;
//     document.getElementById('tof').style.display = 'block';
//     document.getElementById('mc').style.display = 'none';
// }

// function addDiv(){
// 	// Your existing code unmodified...
// var iDiv = document.createElement('div');
// iDiv.id = 'qs';
// iDiv.className = 'block';
// document.getElementsByTagName('body')[0].appendChild(iDiv);

// // Now create and append to iDiv
// var innerDiv = document.createElement('div');
// innerDiv.className = 'block-2';

// // The variable iDiv is still good... Just append to it.
// iDiv.appendChild(innerDiv);
//}
</script>