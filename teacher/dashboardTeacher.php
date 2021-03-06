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
					<div class="col col-sm-3 ">
					    <div class="thumbnail">
					      <img src="../images/english.jpg" alt="English 1">
					      <div class="caption">
					        <h4>ENGLISH 1</h4>
					        <p>Time Schedule: 8:00AM - 9:00AM</p>
					        <p>
					        	<a href="courseTeacher.php" class="btn btn-primary" role="button">Open Course</a> 
					        	<a href="#" class="btn btn-default" role="button">Unteach</a>
					        </p>
					      </div>
					    </div>
					</div>

					<div class="col col-sm-3">
					    <div class="thumbnail">
					      <img src="../images/plus.png" alt="Add Course">
					      <div class="caption">
					        <h5 class='text-center'> Interested in teaching another course?</h5>
					        <p class='text-center'>
					        	<a href="dashboardTeacherStartNewCourse.php" class="btn btn-default" role="button">Start New Course</a>
					        </p>
					      </div>
					    </div>
					</div>
				</div>

		</div>
	</div>
</body>

</html>