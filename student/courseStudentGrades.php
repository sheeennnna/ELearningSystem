<html>
<head>
	<link rel='stylesheet' href="css/mainCSS.css">
	<link rel='stylesheet' href="css/dashboardStudentCSS.css">
	<link rel='stylesheet' href="css/accountStudentCSS.css">
	<link rel='stylesheet' href="css/sessionCourse.css">
	<link rel='stylesheet' href="css/courseStudentGrades.css">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='../datatable_files/datatables.min.css'>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

	<title>Account</title>
</head>
<body>
	<div class='row'>
		<div class='col col-md-1 text-center main_menu'>
			<br><img src="images/icon.png" alt="WebProf" width='auto' height='70'>
			<br><br><br>
			<ul class="nav nav-pills nav-stacked">
				<li><a href="accountStudent.php" class='active'>
					<span class='glyphicon glyphicon-user'></span>
					</br>Account
				</a></li>
				<li><a href="dashboardStudent.php">
					<span class='glyphicon glyphicon-th'></span>
					</br>Dashboard
				</a></li>
				<li><a href="coursesStudent.php">
					<span class='glyphicon glyphicon-book'></span>
					<br>Courses</br>
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
				<ul class='nav nav-pills nav-stacked'>
						<li role='presentation' class='active'>
							<a href="coursesStudent.php"> Home </a>
						</li>
						<li role='presentation'>
							<a href="announcementStudent.php"> Announcements </a>
						</li>
						<li role='presentation'>
							<a href="coursesStudent.php"> Assignment </a>
						</li>
						<li role='presentation'>
							<a href="courseStudentGrades.php"> Grades </a>
						</li>
						<li role='presentation'>
							<a href="filesStudent.php"> Files </a>
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
		<div class="col-md-offset-2">
			<div class="dropdown">
				<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Arrange by <span class="caret"></span></button>
				<ul class="dropdown-menu">
					<li><a href="#">Due date</a></li>
					<li><a href="#">Assignment Group</a></li>
					<li><a href="#">Title</a></li>
				</ul>
			</div>	
		</div>
		<div class='col col-md-9 score_list'> 
			<div class="container">
				<table class="table" id="tabl">
					<thead>
						<tr>
							<th>Name</th>
							<th>Due</th>
							<th>Score</th>
							<th>Out of</th>
						</tr>
					</thead>
					<tbody>
					      <tr>
					       	<td class="td1">Quiz 1: 11/15/2017</td>
					        <td>November 15, 2017 by 11:59pm</td>
					        <td>30</td>
					        <td>30</td>
					      </tr>
					      <tr>
					       	<td class="td1">Quiz 2: 11/27/2017</td>
					        <td>November 15, 2017 by 11:59pm</td>
					        <td>17.33</td>
					        <td>30</td>
					      </tr>
					      <tr>
					       	<td class="td1">Diagnostic Exam</td>
					        <td>December 15, 2017 by 12:00am</td>
					        <td>30</td>
					        <td>50</td>
					      </tr>
					      <tr>
					       	<td class="td1">Quiz 3: 1/4/2018</td>
					        <td>January 4, 2018 by 12:00am</td>
					        <td>89</td>
					        <td>100</td>
					      </tr>
					      <tr>
					       	<td class="td1">Quiz 4: 1/4/2018</td>
					        <td>January 6, 2018 by 11:50am</td>
					        <td>99</td>
					        <td>100</td>
					      </tr>
				    </tbody>
				</table>
			</div>
		</div>
	</div>

</body>

</html>

<script>

</script>