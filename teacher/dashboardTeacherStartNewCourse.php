<?php
	$notif = '';
	$error = '';

	if(isset($_POST['createCourseBtn'])){
		if(empty($_POST['courseName']) || empty($_POST['sched'])){
			
			$notif = "<label class='text-danger'>Please fill the necessary information</label>";

		}else{
			if(file_exists('json/courses.json')){  
	        	$data = file_get_contents('json/courses.json');
	        	$dataArray = json_decode($data, true);

	        	$courseArr = json_decode($data);
	        	$IDCounter = count($courseArr);
	        	$course = array(
	        		'id' => ++$IDCounter,
	        		'course_name' => $_POST['courseName'],
	        		'schedule' => $_POST['sched']
	       		);

	        	$dataArray [] = $course;
	        	$passedData = json_encode($dataArray);

	        	if(file_put_contents('json/courses.json', $passedData)){  
	            	$notif = "<label class='text-success'>Course Succesfully Added</label>";  
	        	} 
	    	}else{  
	        	$error = 'JSON File not exits';  
	    	}
		}
	}
?>
<html>
<head>
	<link rel='stylesheet' href="css/dashboardCSSTeacher.css">
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
				<li><a href="dashboardTeacher.php" class='active'>
					<span class='glyphicon glyphicon-th'></span>
					</br>Dashboard
					</a>
				</li>
				<li><a href="">
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
					<h3>Dashboard</h3>
					<p class='break_line'>
						___________________________________________________________________________________________________________________________________
					</p> 
				</div>
				<div>
				</div>
				<!-- <div class='col col-md-2 enrol_btn'> 
					<button type="button" class='btn btn-default btn-md view_sched'>
						View Schedule
					</button>
					<a href='dashboardTeacherViewStudents.php'>
						<button type="button" class='btn btn-default btn-md view_stud'>
							View Students
						</button>
					</a>
				</div> -->
			</div>

				<div class="row">
					<div class="col col-sm-5 ">
					    <div class="panel panel-default">
			  			<!-- Default panel contents -->
			  				<div class="panel-heading assignment_heading">
			  					<!-- <span class='glyphicon glyphicon-'></span> -->
			  					Start New Course
						  	</div>
				  			<div class="panel-body">
				  			<?php   
                     			if(isset($notif)){  
                          			echo $notif;  
                     			}  
                     		?>
                     		<form method="POST">
				  				<div class="input-group">
					  				<span class="input-group-addon">
						        		<b>Course Name</b>
						      		</span>
						      		<input type="text" class="form-control" placeholder="" name="courseName">
			    				</div>
			    				<br>
			    				<div class="input-group">
					  				<span class="input-group-addon">
						        		<b>Schedule</b>
						      		</span>
						      		<input type="text" class="form-control" placeholder="" name="sched">
			    				</div>
							</div>
							<div class="panel-footer">
								<!-- <a href="#" class="btn btn-primary" role="button">Create Course</a>  -->
								
									<input type="submit" value="Create Course" name="createCourseBtn" class="btn btn-primary">
									<a href="dashboardTeacher.php" class="btn btn-default" role="button">Cancel</a> 
							</form>
							</div>
						</div>
					</div>
				</div>

		</div>
	</div>
</body>

</html>