<?php
$notif = '';
$error = '';

if(isset($_POST["submit"])){
	if (empty($_POST['assignmentTitle']) || empty($_POST['assignmentContent']) || empty($_POST['assignmentPoints']) || empty($_POST['submissionType'])) {
		$notif = "<div class='alert alert-danger' role='alert'> Please fill out all necessary inputs</div>";
		// echo "<div class='alert alert-danger' role='alert'>".$_POST['typeResult']."</div>";
	}else{
		if(file_exists('json/assignment.json')){  
	        $data = file_get_contents('json/assignment.json');
	        $dataArray = json_decode($data, true);//for insertion

			$assignmentArr = json_decode($data);//for counter checking
			$assID = uniqid();

			if(empty($_POST['assignmentDate'])){
				$aDate = "No Due Date";
			}else{
				$aDate = $_POST['assignmentDate'];
				$aDate = date("F d Y", $aDate);
			}

			if(empty($_POST['assignmentTime'])){
				$aTime = "No Time";
			}else{
				$aTime = $_POST["assignmentTime"];
				$aTime = date('h:i a',strtotime($aTime));
			}

			if($_POST["assStatus"] == "Open"){
				$aStatus = "Opened";
			}else{
				$aStatus = "Closed";
			}
			

	        $quiz = array(
	        	'assignmentID' => $assID,
	        	'assignmentTitle' => $_POST['assignmentTitle'],
	        	'assignmentContent' => $_POST['assignmentContent'],
	        	'assignmentSubmissionType' => $_POST['submissionType'],
	        	'assignmentPoints' => $_POST['assignmentPoints'],
	        	'assignmentDate' => $aDate,
	        	'assignmentTime' => $aTime,
	        	'assignmentStatus' => $aStatus
	        );

	        $dataArray [] = $quiz;
	        $passedData = json_encode($dataArray);

	        if(file_put_contents('json/assignment.json', $passedData)){  
	            header("location:courseTeacherAssignment.php");
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
					<li><a href="courseTeacherAssignment.php" class='active'>
						Assignments
					</a></li>
					<li><a href="courseTeacherQuizzes.php">
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
			  	<span class='glyphicon glyphicon-file'></span> Create Assignment
			  </div>
			  <div class="panel-body">
			  	<form method="POST">
			  		<div class="col-md-11">
			  			<?php   
                     		if(isset($notif)){  
                          		echo $notif;  
                     		}  
                     	?> 
			  			<div class="input-group">
					  		<span class="input-group-addon">
						        <b>Assignment Title</b>
						      </span>
						      <input type="text" class="form-control" placeholder="" required="required" name="assignmentTitle">
			    		</div>
			    		<br>
			    		
			    		<div class="form-group">
    						<label for="exampleFormControlTextarea1">Content</label>
	    					<textarea class="form-control" name="assignmentContent" id="exampleFormControlTextarea1" placeholder="Assignment Content" rows="10" required="required"></textarea>
  						</div>

			    		<br>
			    		<div class="row">
			    			<div class="col-md-3">
			    				<div class="input-group">
					  				<span class="input-group-addon">
						        		<b>Type</b>
						      		</span>
						      		<select class="form-control" name="submissionType">
								    	<option value="On Paper">On Paper</option>
								  	</select>
			    				</div>
			    			</div>
			    			<div class="col-md-2">
			    				<div class="input-group">
					  				<span class="input-group-addon">
						        		<b>Points</b>
						      		</span>
						      		<input type="text" pattern="\d*" title="Number only" name="assignmentPoints" class="form-control" required="required">
			    				</div>
			    			</div>
			    			<div class="form-group col-md-2">
	                			<div class='input-group date' id='datetimepicker1'>
	                				<span class="input-group-addon">
	                					<b>Due Date</b>
	                    			</span>
	                   				<input type='date' name="assignmentDate" class="form-control" />
	               			 	</div>
	           				</div>
	           				<div class="form-group col-md-2 col-md-offset-2">
	                			<div class='input-group time'>
	                				<span class="input-group-addon">
	                					<b>Until</b>
	                    			</span>
	                   				<input type='time' name="assignmentTime" class="form-control" />
	               			 	</div>
	           				</div>
			    		</div>
			    		<label>Status:</label>
			    		<label class="checkbox-inline"><input type="checkbox" name="assStatus" value="Open">Open</label>
			    		<br>

			    		<!-- CREATION?CANCELATION BUTTON -->
  						<div class="col-md-offset-9">
			    			<input type="submit" name="submit" value="Create" class="btn btn-primary" />
			    			<a href="courseTeacherAssignment.php">
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