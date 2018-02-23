<html>
<head>
	<link rel='stylesheet' href="css/mainCSS.css">
	<link rel='stylesheet' href="css/dashboardStudentCSS.css">
	<link rel='stylesheet' href="css/accountStudentCSS.css">
	<link rel='stylesheet' href="css/coursesStudentCSS.css">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='../datatable_files/datatables.min.css'>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<title>Announcement</title>
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
					<center><hr class="hr_line"></center>
				</div>
			</div>

			<div class='row'>
				<!-- SIDE MENU -->
				<div class='col col-md-2 course_side_menu'>
					<ul class='nav nav-pills nav-stacked'>
						<li role='presentation'>
							<a href="coursesStudent.php"> Home </a>
						</li>
						<li role='presentation' class='active'>
							<a href="announcementStudent.php"> Announcements </a>
						</li>
						<li role='presentation'>
							<a href="coursesStudent.php"> Assignment </a>
						</li>
						<li role='presentation'>
							<a href="gradesStudent.php"> Grades </a>
						</li>
						<li role='presentation'>
							<a href="filesStudent.php"> Files </a>
						</li>
						<li role='presentation'>
							<a href="coursesStudent.php"> Syllabus </a>
						</li>
						<li role='presentation'>
							<a href="coursesStudent.php"> Session </a>
						</li>
					</ul>
				</div>
				<!-- END OF SIDE MENU -->
				<!-- BODY -->
				<div class='col col-md-9'>
					<div class="panel panel-info">
						<div class='panel-heading announcement_header'> 
							<span class='glyphicon glyphicon-bullhorn'></span> Announcement 
						</div>
						<div class='panel-body'> 
							<div class='row'>
								<div class='col col-md-2'>
									<img src="images/avatar.png" class='announcement_avatar'>
								</div>
								<div class='col col-md-10'>
									<h3 class='announcement_title'>No Class</h3>
									<p class='announcement_maker'>Sheena Alcantara</p>
									<p class='announcement_body'>Lorem ipsum dolor sit amet,
									 <br>consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
								</div>
							</div>
						</div>
						<div class='panel-footer'>
							<div class='row'>
								<div class='col col-md-12'>
									<div class='input-group'>
										<input type='text' class='form-control' placeholder='Type your reply'>
										<span class='input-group-btn'>
											<button class='btn btn-success' type='button'> Send </button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
				<!-- END OF BODY -->
			</div>

		</div>
	</div>
</body>

</html>