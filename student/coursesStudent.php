<html>
<head>
	<link rel='stylesheet' href="css/coursesStudentCSS.css">
	<link rel='stylesheet' href="css/mainCSS.css">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='../datatable_files/datatables.min.css'>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<title>Courses</title>
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
					<hr class="hr_line_header">
				</div>
			</div>

			<div class='row'>
				<!-- SIDE MENU -->
				<div class='col col-md-2 course_side_menu'>
					<ul class='nav nav-pills nav-stacked course_navSide'>
						<li role='presentation' class='active'>
							<a href="coursesStudent.php"> Home </a>
						</li>
						<li role='presentation'>
							<a href="announcementStudent.php"> Announcements </a>
						</li>
						<li role='presentation'>
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
				</div>
				<!-- END OF SIDE MENU -->
				<!-- BODY -->
				
				<div class='col col-md-7'>
					<p class='recent_activity'>Recent Activity in English 1</p>
						<ul class="nav nav-pills nav-stacked">
								<li>
									<a href="announcementStudent.php">
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
									<a href="assignmentsStudent.php">
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

				<div class='col col-md-3 side_info'> 
					<b>Recent Feedback</b>
					<hr class='hr_line_feedback'>
					<ul class="nav nav-pills nav-stacked">
						<li class='recent_feedback'>
							<div class="col-sm-2"><span class='glyphicon glyphicon-ok' style="color:#4CAF50"></span></div>
  							<div class="col-sm-9">
  								<a href=''>
  									<b class='detail_feedback_header'>Quiz #1: English Basic</b>
									<p class='detail_feedback_body'>
										1/2/2017
										<br>English 1
										<br><b>30 out of 30</b>
									</p>
								</a>
								<br>
							</div>
						</li>
						<li class='recent_feedback'>
							<div class="col-sm-2"><span class='glyphicon glyphicon-ok' style="color:#4CAF50"></span></div>
  							<div class="col-sm-9">
  								<a href=''>
  									<b class='detail_feedback_header'>Quiz #2: SV Agreement</b>
									<p class='detail_feedback_body'>
										1/2/2017
										<br>English 1
										<br><b>30 out of 30</b>
									</p>
								</a>
								<br>
							</div>
						</li>
					</ul>
			</div>

				<!-- END OF BODY -->
			</div>

		</div>
	</div>
</body>

</html>
