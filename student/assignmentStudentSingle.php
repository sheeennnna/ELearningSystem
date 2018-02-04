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
					<h3 class='course_header'><a href=""><span class="glyphicon glyphicon-menu-hamburger hide_menu"></span></a> Assignment </h3>
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
			
			<div class='col col-md-10 assignment_student' style='padding-left:50px'> 
				<div class="col-md-9">
					<h2 class='assignment_title'>Assignment Title</h2>
					<hr>
					<b class='specs'>Due</b> No Due Date <b class='specs'>Points</b> 50  <b class='specs'>Submitting</b> a file upload
					<hr>
					<b class='assignment_sub'>Assignment Subtitle</b><br><br>
					<p>Lorem Ipsum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia</p>
					<p>Lorem Ipsum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore verita</p>
					<p>Lorem Ipsum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritaLorem Ipsum Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptat</p>
				</div>
				<div class="col-md-3">
					<h4 class='specs'>Submission</h4>
					<h5><span class='glyphicon glyphicon-ok'></span> Tuned In!</h5>
					Dec 12, 2017 at 3:38pm
				</div>
			</div>

		</div>
	</div>
</body>

</html>
