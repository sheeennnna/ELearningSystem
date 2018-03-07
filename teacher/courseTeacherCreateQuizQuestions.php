<?php
$notif = '';
$error = '';

if(isset($_POST["submit"])){
	if (empty($_POST['quizNumber'])) {
		$notif = "<div class='alert alert-danger' role='alert'> Please fill out all necessary inputs</div>";
		// echo "<div class='alert alert-danger' role='alert'>".$_POST['typeResult']."</div>";
	}else{
		if(file_exists('json/quizQuestions.json')){  
	        $data = file_get_contents('json/quizQuestions.json');
	        $dataArray = json_decode($data, true);
	        $quiz;

	        $quizID = $_GET['pid'];

	        if($_POST['typeResult'] == "Multiple Choice"){
		        $quiz = array(
		        	'QuizID' => $quizID,
		        	'QsNum' => $_POST['quizNumber'],
		        	'TypeResult' => $_POST['typeResult'],
		        	'QsPts' => $_POST['quizPts'],
		        	'Question' => $_POST['mcQ'],
		        	'a' => $_POST['choiceA'],
		        	'b' => $_POST['choiceB'],
		        	'c' => $_POST['choiceC'],
		        	'd' => $_POST['choiceD'],
		        	'Correct' => $_POST['quizCorrect']
		        );	
	        }else if($_POST['typeResult'] == "True/False" || $_POST['typeResult'] == "Fill in the Blank") {
	        	$quiz = array(
	        		'QuizID' => $quizID,
		        	'QsNum' => $_POST['quizNumber'],
		        	'TypeResult' => $_POST['typeResult'],
		        	'QsPts' => $_POST['quizPts'],
		        	'Question' => $_POST['tofQ'],
		        	'Correct' => $_POST['quizCorrectTof'],
		        	'Possible' => $_POST['quizPossibleTof']
		        );	
	        }
	        

	        $dataArray [] = $quiz;
	        $passedData = json_encode($dataArray);

	        if(file_put_contents('json/quizQuestions.json', $passedData)){  
	            // $notif = "<div class='alert alert-success' role='alert'> Quiz Succesfully Created</div>";
	            header("location:courseTeacherCreateQuizQuestions.php?pid=".$quizID."");  
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
			  	<span class='glyphicon glyphicon-file'></span>Create Quiz
			  </div>
			  <div class="panel-body">
			  	<form method="POST">
			  		<div class="col-md-11">
			    		<div id="qs">
			    		<?php echo $notif; ?>
				    		<h4>Questions</h4><hr>
				    		<div class="form-group">
		    						<div class="row"> 
		    							<div class="col-sm-3">
		    								<div class='input-group date' id='datetimepicker1'>
				                				<span class="input-group-addon">
				                					<b>Question No</b>
				                    			</span>
		                   						<input type='text' class="form-control" name="quizNumber"/>
		                   					</div>
		    							</div>
		    							<div class="col-sm-7">
		    								<div id="qtype">
	                							<input type="radio" name="type" id="t1" value="Multiple Choice" onClick="type1();"> Multiple Choice 
	                							<input type="radio" name="type" id="t2" value="True/False" onClick="type2();"> True/False 
	            								<input type="radio" name="type" id="t3" value="Fill in the Blank" onClick="type3();"> Fill in the Blank 

	            							  <input type="text" name="typeResult" id="result" hidden>

											</div>
		    							</div>
		    							<div class="col-sm-2">
		    								<div class='input-group date' id='datetimepicker1'>
				                				<span class="input-group-addon">
				                					<b>Pts</b>
				                    			</span>
		                   						<input type='text' class="form-control" name="quizPts" />
		                   					</div>
		    							</div>
		    						</div>
		    						<br>

		    						<!-- Question Type -->
		    						<!-- Multiple Choice -->
		    						<div id="mc">
			    						<b>Question:</b>
					    					<textarea class="form-control" name="mcQ"></textarea>
			    						<br>
			    						<b>Choices:</b>
			    						<div class="row">
			    							<div class="col-sm-3">
					    						<div class='input-group'>
							                		<span class="input-group-addon">
							                			<b>A</b>
							               			</span>
					               					<input type='text' class="form-control" name="choiceA" />
					                   			</div> 
					                   		</div>
					                   		<div class="col-sm-3">
					    						<div class='input-group'>
							                		<span class="input-group-addon">
							                			<b>B</b>
							               			</span>
					               					<input type='text' class="form-control" name="choiceB" />
					                   			</div> 
					                   		</div>
					                   		<div class="col-sm-3">
					    						<div class='input-group'>
							                		<span class="input-group-addon">
							                			<b>C</b>
							               			</span>
					               					<input type='text' class="form-control" name="choiceC" />
					                   			</div> 
					                   		</div>
					                   		<div class="col-sm-3">
					    						<div class='input-group'>
							                		<span class="input-group-addon">
							                			<b>D</b>
							               			</span>
					               					<input type='text' class="form-control" name="choiceD" />
					                   			</div> 
					                   		</div>
				                   		</div> 	
				                   	<b>Answer:</b>
			    					<div class='input-group date''>
					               		<span class="input-group-addon">
					               			<b>Correct Answer</b>
					           			</span>
			               				<input type='text' class="form-control" name="quizCorrect" />
			              			</div> <br>                 
			                   		</div>
			                   		<br>

		    						<!-- True of False and fill in the blank-->
		    						<div id="tof">
			    						<b>Question:</b>
					    					<textarea class="form-control" name="tofQ"></textarea>
			    						<br>
			    						<b>Answer:</b>
			    						<div class='input-group date''>
					                		<span class="input-group-addon">
					                			<b>Correct Answer</b>
					               			</span>
			               					<input type='text' class="form-control" name="quizCorrectTof" />
			                   			</div> <br>
			                   			<div class='input-group date' id='datetimepicker1'>
					                		<span class="input-group-addon">
					                			<b>Possible Answer</b>
					               			</span>
			               					<input type='text' class="form-control" name="quizPossibleTof" />
			                   			</div><br>
			                   		</div>
			                   	
	  						</div>
	  					</div>	

	  					<div id="block" class="block">
						   <div class="block-2"></div>
						</div>
			  		</div>
			  		<div class="col-md-11">
						<input type="submit" name="submit" value="Add Questions" class="btn btn-primary" />	
				  	</form>
				  	<a href="courseTeacherCreateQuiz.php">
						<button class="btn btn-default pull-rright">Done</button>
					</a>
					</div>
		</div>
	</div>
	</div>
</body>

</html>
<script>
// var types = document.getElementById('qType').value;
var val;

function type1(){
    val = document.getElementById('t1').value;
    document.getElementById('result').value = val;
    document.getElementById('mc').style.display = 'block';
    document.getElementById('tof').style.display = 'none';
}

function type2(){
    val = document.getElementById('t2').value;
    document.getElementById('result').value = val;
    document.getElementById('tof').style.display = 'block';
    document.getElementById('mc').style.display = 'none';
}

function type3(){
    val = document.getElementById('t3').value;
    document.getElementById('result').value = val;
    document.getElementById('tof').style.display = 'block';
    document.getElementById('mc').style.display = 'none';
}

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
// }
</script>