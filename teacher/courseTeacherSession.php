<html>
<head>
	<link rel='stylesheet' href="css/handledCourse.css">
	<link rel='stylesheet' href="css/announcCourse.css">
	<link rel='stylesheet' href="css/sessionCourse.css">
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
						<span class='add_announcement'>Session</span>

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
					<li><a href="courseTeacherGrades.php">
						Grades
					</a></li>
					<li><a href="courseTeacherSession.php" class='active'>
						Session
					</a></li>
				</ul>
				<br><br>
			</div>
		<div class="col-md-offset-3" style='padding-bottom:10px;'>
			<div class="col-md-7">
			    <div class="input-group">
				    <input type="text" class="form-control" placeholder="Search Student Name">
				    <span class="input-group-btn">
				        <button class="btn btn-default" type="button">Go!</button>
				    </span>
			    </div><!-- /input-group -->
			</div><!--/div col-md-9-->	
		</div>
		<div class='col col-md-9 session_students_list' style='padding-left:50px;height:80%; overflow-y: scroll;'> 
			<div class="col-sm-4" style='padding-top:15px'>
				<center class='session_student_icon' style='padding:20px;'>
					<img class='session_student_pic' src='../images/person_icon.png'>
					<p class='session_student_name'><a href='courseTeacherViewSession.php'>Marian Isabel Mozo</a></p>
					<p class='session_student_status'><span class='glyphicon glyphicon-fire' style='color:#d9534f'></span> 
						<b class='stud_status'>Offline</b>
					</p>
					<span>
						<a href='courseTeacherViewSession.php'>
							<button class="btn btn-default" type="button">View Details</button>
						</a>
					</span>
				</cnter>
			</div>
			<div class="col-sm-4" style='padding-top:15px'>
				<center class='session_student_icon' style='padding:20px;'>
					<img class='session_student_pic' src='../images/person_icon.png'>
					<p class='session_student_name'><a href='courseTeacherViewSession.php'>Sheena Alcantara</a></p>
					<p class='session_student_status'><span class='glyphicon glyphicon-facetime-video' style='color:#4CAF50'></span> 
						<b class='stud_status'>Active Now</b>
					</p>
					<span>
						<button class="btn btn-success" type="button"><span class='glyphicon glyphicon-facetime-video'></span> Go!</button> 
						<a href='courseTeacherViewSession.php'>
							<button class="btn btn-default" type="button">View Details</button>
						</a>
					</span>
				</cnter>
			</div>
			<div class="col-sm-4" style='padding-top:15px'>
				<center class='session_student_icon' style='padding:20px;'>
					<img class='session_student_pic' src='../images/person_icon.png'>
					<p class='session_student_name'><a href='courseTeacherViewSession.php'>June Jan Genelsa</a></p>
					<p class='session_student_status'><span class='glyphicon glyphicon-fire' style='color:#d9534f'></span> 
						<b class='stud_status'>Offline</b>
					</p>
					<span>
						<a href='courseTeacherViewSession.php'>
							<button class="btn btn-default" type="button">View Details</button>
						</a>
					</span>
				</cnter>
			</div>
			<div class="col-sm-4" style='padding-top:15px'>
				<center class='session_student_icon' style='padding:20px;'>
					<img class='session_student_pic' src='../images/person_icon.png'>
					<p class='session_student_name'><a href='courseTeacherViewSession.php'>Brandon Benedict Biano</a></p>
					<p class='session_student_status'><span class='glyphicon glyphicon-facetime-video' style='color:#4CAF50'></span> 
						<b class='stud_status'>Active Now</b>
					</p>
					<span>
						<button class="btn btn-success" type="button"><span class='glyphicon glyphicon-facetime-video'></span> Go!</button> 
						<a href='courseTeacherViewSession.php'>
							<button class="btn btn-default" type="button">View Details</button>
						</a>
					</span>
				</cnter>
			</div>
			<div class="col-sm-4" style='padding-top:15px'>
				<center class='session_student_icon' style='padding:20px;'>
					<img class='session_student_pic' src='../images/person_icon.png'>
					<p class='session_student_name'><a href='courseTeacherViewSession.php'>Devorah Quisido</a></p>
					<p class='session_student_status'><span class='glyphicon glyphicon-fire' style='color:#d9534f'></span> 
						<b class='stud_status'>Offline</b>
					</p>
					<span>
						<button class="btn btn-success" type="button"><span class='glyphicon glyphicon-facetime-video'></span> Go!</button> 
						<a href='courseTeacherViewSession.php'>
							<button class="btn btn-default" type="button">View Details</button>
						</a>
					</span>
				</cnter>
			</div>
			<div class="col-sm-4" style='padding-top:15px'>
				<center class='session_student_icon' style='padding:20px;'>
					<img class='session_student_pic' src='../images/person_icon.png'>
					<p class='session_student_name'><a href='courseTeacherViewSession.php'>Jazin Mendoza</a></p>
					<p class='session_student_status'><span class='glyphicon glyphicon-facetime-video' style='color:#4CAF50'></span> 
						<b class='stud_status'>Active Now</b>
					</p>
					<span>
						<button class="btn btn-success" type="button"><span class='glyphicon glyphicon-facetime-video'></span> Go!</button> 
						<a href='courseTeacherViewSession.php'>
							<button class="btn btn-default" type="button">View Details</button>
						</a>
					</span>
				</cnter>
			</div>
			<div class="col-sm-4" style='padding-top:15px'>
				<center class='session_student_icon' style='padding:20px;'>
					<img class='session_student_pic' src='../images/person_icon.png'>
					<p class='session_student_name'><a href='courseTeacherViewSession.php'>Fraulien Mercader</a></p>
					<p class='session_student_status'><span class='glyphicon glyphicon-fire' style='color:#d9534f'></span> 
						<b class='stud_status'>Offline</b>
					</p>
					<span>
						<a href='courseTeacherViewSession.php'>
							<button class="btn btn-default" type="button">View Details</button>
						</a>
					</span>
				</cnter>
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