<html>
<head>
	<link rel='stylesheet' href="css/mainCSS.css">
	<link rel='stylesheet' href="css/assignmentStudentCSS.css">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='../datatable_files/datatables.min.css'>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<title>Dashboard</title>
</head>
<body>
	<div class='row'>
		<div class='col col-md-1 text-center main_menu'>
			<br><img src="images/icon.png" alt="WebProf" width='auto' height='70'>
			<br><br><br>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="accountStudent.php">
					<span class='glyphicon glyphicon-user'></span>
					</br>Account
				</a></li>
				<li><a href="dashboardStudent.php">
					<span class='glyphicon glyphicon-th'></span>
					</br>Dashboard
				</a></li>
				<li><a href="coursesStudent.php" class='active'>
					<span class='glyphicon glyphicon-book'></span>
					<br>Courses</br>
				</a></li>
				<li><a href="inboxStudent.php">
					<span class='glyphicon glyphicon-inbox'></span>
					<br>Inbox</br>
				</a></li>
				<li><a href="">
					<span class='glyphicon glyphicon-question-sign'></span>
					<br>Help</br>
				</a></li>
				<br><br><br>
				<li><a href="../index.php">
					<span class='glyphicon glyphicon-log-out'></span>
				</a></li>
			</ul>
			<br><br>
		</div>


		<div class='col col-md-11 body_section'>
			<div class='row'>
				<div class='col col-md-10'> 
					<h3 class='course_header'><a href=""><span class="glyphicon glyphicon-menu-hamburger hide_menu"></span></a> ENGLISH 1</h3>
				</div>
				<div class='col col-md-11'> 
					<center><hr class="hr_line_header"></center>
				</div>
			</div>

			<div class='col col-md-2 text-center '>
				<ul class='nav nav-pills nav-stacked student_sideMenu'>
						<li role='presentation'>
							<a href="coursesStudent.php"> Home </a>
						</li>
						<li role='presentation'>
							<a href="announcementStudent.php"> Announcements </a>
						</li>
						<li role='presentation' class='active'>
							<a href="assignmentStudent.php"> Assignment </a>
						</li>
						<li role='presentation'>
							<a href="courseStudentGrades.php"> Grades </a>
						</li>
						<li role='presentation'>
							<a href="coursesStudent.php"> Syllabus </a>
						</li>
						<li role='presentation'>
							<a href="courseStudentSession.php"> Session </a>
						</li>
					</ul>
				<br><br>
			</div>
		<div class='col col-md-10' style='padding-left:50px'> 
			<div class="panel panel-danger">
			  <!-- Default panel contents -->
			  <div class="panel-heading assignment_heading">
			  	<span class='glyphicon glyphicon-file'></span> Assignments
			  </div>
			  <div class="panel-body">
			  	<div>
				    <ul class="list-group" style='height:30%; overflow-y: scroll;'>
					    <li class="list-group-item">
					    	<b><span class="glyphicon glyphicon-play"></span> Undated Assignments</b>
					    </li>
					    <li class="list-group-item">
					    	<div class="row">
					    		<div class="col-md-1">
					    			<h4><span class="glyphicon glyphicon-edit pull-right"></span></h4>
					    		</div>
					    		<div class="col-md-10">
					    			<a href='assignmentStudentSingle.php'><h4 class='assignment_name'>Pre-Test</h4></a>
									-/100pts
					    		</div>
					    	</div>
					    </li>
					    <li class="list-group-item">
					    	<div class="row">
					    		<div class="col-md-1">
					    			<h4><span class="glyphicon glyphicon-edit pull-right"></span></h4>
					    		</div>
					    		<div class="col-md-10">
					    			<a href='assignmentStudentSingle.php'><h4 class='assignment_name'>Exercise 1: Grammar Check</h4></a>
									-/50pts
					    		</div>
					    	</div>
					    </li>
					    <li class="list-group-item">
					    	<div class="row">
					    		<div class="col-md-1">
					    			<h4><span class="glyphicon glyphicon-edit pull-right"></span></h4>
					    		</div>
					    		<div class="col-md-10">
					    			<a href='assignmentStudentSingle.php'><h4 class='assignment_name'>Exercise 2: Vocabulary Check</h4></a>
									-/30pts
					    		</div>
					    	</div>
					    </li>
				  	</ul>
				  	<ul class="list-group" style='height:30%; overflow-y: scroll;'>
					    <li class="list-group-item">
					    	<b><span class="glyphicon glyphicon-play"></span> Dated Assignments</b>
					    </li>
					    <li class="list-group-item">
					    	<div class="row">
					    		<div class="col-md-1">
					    			<h4><span class="glyphicon glyphicon-tasks pull-right"></span></h4>
					    		</div>
					    		<div class="col-md-10">
					    			<a href='assignmentStudentSingle.php'><h4 class='assignment_name'>Informal Theme 1: About Me</h4></a>
									<b>Due</b> Jan 11, 2018 at 5:30pm | -/60 pts | Not Yet Graded
					    		</div>
					    	</div>
					    </li>
					    <li class="list-group-item">
					    	<div class="row">
					    		<div class="col-md-1">
					    			<h4><span class="glyphicon glyphicon-tasks pull-right"></span></h4>
					    		</div>
					    		<div class="col-md-10">
					    			<a href='assignmentStudentSingle.php'><h4 class='assignment_name'>Homework: Adjectives</h4></a>
									<b>Closed | Due</b> Jan 4, 2018 at 4:30pm | <b>27</b>/30 pts
					    		</div>
					    	</div>
					    </li>
				  	</ul>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
</body>

</html>
