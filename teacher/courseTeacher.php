<html>
<head>
	<link rel='stylesheet' href="css/handledCourse.css">
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
				<li><a href="inboxTeacher.php">
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
					<h3><a href=""><span class="glyphicon glyphicon-menu-hamburger hide_menu"></span></a> ENGLISH 1</h3>
				</div>
				<div class='col col-md-11'> 
					<center><hr class="hr_line"></center>
				</div>
			</div>
			<div class='col col-md-1 text-center main_menu_teacher'>
				<ul class="nav nav-pills nav-stacked">
					<li><a href='courseTeacher.php' class='active'>
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
					<li><a href="courseTeacherGrades.php">
						Grades
					</a></li>
					<li><a href="courseTeacherSession.php">
						Session
					</a></li>
				</ul>
				<br><br>
			</div>
			<div class='col col-md-7 home_course_teacher'> 
			<p class='recent_activity'>Recent Activity in English 1</p>
				<ul class="nav nav-pills nav-stacked">
						<li>
							<a href="courseTeacherAnnouncement.php">
								<p class='recent_activity_nav'>
								<span class='glyphicon glyphicon-bullhorn' style='color:#999; padding-right:15px'></span>
									Announcements
								<span class='glyphicon glyphicon-chevron-down' style='font-size:10px; padding-right:15px'></span>
								</p>
							</a>
							<div class='col col-md-offset-1 home_announcements' hidden>
								hi
							</div>
						</li>
						<li>
							<a href="courseTeacherAssignment.php">
								<p class='recent_activity_nav'>
								<span class='glyphicon glyphicon-list-alt' style='color:#999; padding-right:15px'></span>
									Assignment Notifications
								<span class='glyphicon glyphicon-chevron-down' style='font-size:10px; padding-right:15px'></span>
								</p>
							</a>
							<div class='col col-md-offset-1 home_assignment' hidden>
								hi
							</div>
						</li>
				</ul>
				
			</div>
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