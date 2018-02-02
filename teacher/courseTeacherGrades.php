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
						<span class='add_announcement'>Grades</span>

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
					<li><a href="courseTeacherQuizzes.php">
						Quizzes
					</a></li>
					<li><a href="courseTeacherGrades.php"  class='active'>
						Grades
					</a></li>
					<li><a href="courseTeacherSession.php" >
						Session
					</a></li>
				</ul>
				<br><br>
			</div>
		<div class='col col-md-9' style='padding-left:50px'> 
			
			<h2>Grades for English 1</h2><hr>
			<div class="col-md-6" style='padding-left:50px;height:60%; overflow-y: scroll;'>
				<h4><span class="glyphicon glyphicon-triangle-right"></span> Assignments</h4>	
				<table class="table table_announcement">
					<thead>
						<th>Title</th>
						<th>Due</th>
						<th></th>
					</thead>
					<tbody>
						<tr>
							<td><a href="courseTeacherAssignmentSingle.php">Pre-Test</a></td>
							<td>No due date</td>
							<td>
								<a href="courseTeacherGradesSingle.php">
									<button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> View</button>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="courseTeacherAssignmentSingle.php">Exercise 1: Grammar Check</a></td>
							<td>No due date</td>
							<td>
								<a href="courseTeacherGradesSingle.php">
									<button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> View</button>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="courseTeacherAssignmentSingle.php">Informal Theme 1: About Me</a></td>
							<td>Jan 11, 2018 at 5:30pm</td>
							<td>
								<a href="courseTeacherGradesSingle.php">
									<button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> View</button>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="courseTeacherAssignmentSingle.php">Homework: Adjectives</a></td>
							<td>Jan 4, 2018 at 4:30pm</td>
							<td>
								<a href="courseTeacherGradesSingle.php">
									<button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> View</button>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>

			<div class="col-md-6" style='padding-left:50px;height:60%; overflow-y: scroll;'>
				<h4><span class="glyphicon glyphicon-triangle-right"></span> Quizzes</h4>		
				<table class="table table_announcement">
					<thead>
						<th>Title</th>
						<th>Due</th>
						<th></th>
					</thead>
					<tbody>
						<tr>
							<td><a href="courseTeacherAssignmentSingle.php">Before Discussion Quiz</a></td>
							<td>No due date</td>
							<td>
								<a href="courseTeacherGradesSingle.php">
									<button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> View</button>
								</a>
							</td>
						</tr>
						<tr>
							<td><a href="courseTeacherAssignmentSingle.php">Midterm Exam</a></td>
							<td>Jan 18, 2018 at 4:30pm</td>
							<td>
								<a href="courseTeacherGradesSingle.php">
									<button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> View</button>
								</a>
							</td>
						</tr>
					</tbody>
				</table>
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