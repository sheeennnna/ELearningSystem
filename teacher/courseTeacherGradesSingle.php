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
		<div class='col col-md-8' style='padding-left:50px'> 
			<h2>Students Grades</h2><hr>
			<h4><span class="glyphicon glyphicon-edit"></span> Assignment/Quiz Title</h4>
			<div class='col-md-offset-10'>
			<button class="btn btn-default"><span class="glyphicon glyphicon-print"></span> Print</button>
			</div>

			<table class="table table_announcement">
				<thead>
					<th>Name</th>
					<th>Score</th>
					<th>Out of</th>
				</thead>
				<tbody>
				   	<tr>
				   		<td>June Jan Genelsa</td>
						<td>27</td>
						<td>30</td>
					</tr>
					<tr>
						<td>Kent Michael Talisaysay</td>
						<td>27</td>
						<td>30</td>
					</tr>
					<tr>
						<td>Marian Isabel Mozo</td>
						<td>27</td>
						<td>30</td>
					</tr>
				</tbody>
			</table>	
		</div>
</body>

</html>

<!-- <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script>
	$('.recent_activity_nav').click(function() {
    	$('.home_announcements').slideToggle("slow");
	}); 
</script> -->