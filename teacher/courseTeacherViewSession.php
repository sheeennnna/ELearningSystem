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
			<div class='col col-md-9' style='padding-left:50px'> 
			<div class="panel panel-primary">
			  <!-- Default panel contents -->
			  <div class="panel-heading" style='padding-bottom:30px'>
			  	
			  </div>
			  <div class="panel-body">
			  	<center style='padding-top:25px'>
			  		<table>
			  			<tbody>
			  				<tr>
			  					<td>
			  						<img class='session_student_pic' src='../images/person_icon.png'>
			  					</td>
			  					<td>
			  						<p class='session_view_student' style='padding-left:15px; font-size:30px'>Marian Isabel Mozo</p>
			  						<p class='text-center' style='padding-left:15px; font-size:15px'>
			  							<span class='glyphicon glyphicon-fire' style='color:#d9534f'></span> 
										<b>Offline</b>
									</p>
									<p class='text-center' style='padding-left:15px;'>
										<button class="btn btn-danger" type="button" disabled><span class='glyphicon glyphicon-facetime-video'></span> Go!</button>
									</p>
			  					</td>
			  				</tr>
			  			</tbody>
			  		</table>
				</center>
				        	
			  	<br>
			  	<div>
				    <ul class="list-group">
					    <li class="list-group-item">
					    	<b><span class="glyphicon glyphicon-user"></span> Student Details</b>
					    </li>
					    <li class="list-group-item">
					    	<table>
					    		<tbody>
					    			<tr>
					    				<td><b>Grade Level</b></td>
					    				<td class='col-md-5'><b>6</b></td>
					    			</tr>
					    			<tr>
					    				<td><b>Gender</b></td>
					    				<td class='col-md-5'>Female</td>
					    			</tr>
					    			<tr>
					    				<td><b>Date of Birth</b></td>
					    				<td class='col-md-5'>October 27, 1998</td>
					    			</tr>
					    			<tr>
					    				<td><b>Email</b></td>
					    				<td class='col-md-5'>yaneemozo@gmail.com</td>
					    			</tr>
					    			<tr>
					    				<td><b>Phone</b></td>
					    				<td class='col-md-5'>520-2073</td>
					    				<td><b>Mobile</b></td>
					    				<td class='col-md-5'>09325823453</td>
					    			</tr>
					    			<tr>
					    				<td><b>Address</b></td>
					    				<td class='col-md-5'>Minglanilla, Cebu City</td>
					    			</tr>
					    			<tr>
					    				<td><b>Nationality</b></td>
					    				<td class='col-md-5'>Australian</td>
					    			</tr>
					    		</tbody>
					    	</table>
					    </li>
				  	</ul>
				  	<ul class="list-group">
					    <li class="list-group-item">
					    	<b><span class="glyphicon glyphicon-book"></span> Classes</b>
					    </li>
					    <li class="list-group-item">
						   	<button type="button" class="btn btn-danger">
						   		<span class='glyphicon glyphicon-pencil'></span> English 1
						   	</button>
						   	<button type="button" class="btn btn-primary">
						   		<span class='glyphicon glyphicon-pencil'></span> Math 1
						   	</button>
						   	<button type="button" class="btn btn-success">
						   		<span class='glyphicon glyphicon-pencil'></span> Science 2
						   	</button>
					   	</li>
				  	</ul>
			  	</div>
			  </div>	

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