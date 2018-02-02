<html>
<head>
	<link rel='stylesheet' href="css/mainCSS.css">
	<link rel='stylesheet' href="css/dashboardStudentCSS.css">
	<link rel='stylesheet' href="css/accountStudentCSS.css">
	<link rel='stylesheet' href="css/viewSchedStudentCSS.css">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='../datatable_files/datatables.min.css'>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<title>Schedule</title>
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
				<li><a href="dashboardStudent.php" class='active'>
					<span class='glyphicon glyphicon-th'></span>
					</br>Dashboard
				</a></li>
				<li><a href="coursesStudent.php">
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
				<div class='col col-md-12'> 
					<h3>Schedule</h3>
					<p class='break_line'>
						____________________________________________________________________________________________________________________________________________________________
					</p> 
				</div>
			</div>

			<div class='row'>
				<div class='col col-md-2'></div>
				<div class='col col-md-8 sched_div'>
					<p class='sched_header'><b> Subjects and Time Schedule </b></p>
					<button type='button' class='btn btn-default print_sched_btn'>
						<span class='glyphicon glyphicon-print'></span> Print Schedule
					</button>
					<br><br>
					<table class='table table-hover table-bordered'>
						<tr>
							<th>Subject</th>
							<th>Time</th>
							<th>Teacher</th>
						</tr>
						<tr>
							<td>English 1</td>
							<td>8:00AM - 9:00AM</td>
							<td>Ms. Sheena Alcantara</td>
						</tr>
					</table>
				</div>
				<div class='col col-md-2'></div>
			</div>

		</div>

	</div>
</body>
</html>
