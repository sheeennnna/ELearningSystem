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
						<span class='add_announcement'>Quizzes</span>

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
					<li><a href="courseTeacherQuizzes.php" class='active'>
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
		<div class='col col-md-10' style='padding-left:50px'> 
			<div class="panel panel-primary">
			  <!-- Default panel contents -->
			  <div class="panel-heading assignment_heading">
			  	<span class='glyphicon glyphicon-file'></span> Quizzes
			  </div>
			  <div class="panel-body">
			  			<a href="courseTeacherCreateQuiz.php">
			   				<button type="button" class="btn btn-primary"><span class='glyphicon glyphicon-pencil'></span> Create Quiz</button>
			   			</a>
			   <br><br>
			  	<div>
				    <ul class="list-group" style='height:25%; overflow-y: scroll;'>
					    <li class="list-group-item">
					    	<b><span class="glyphicon glyphicon-play"></span> Undated Quizzes</b>
					    </li>

					    <?php
					    	$data = file_get_contents('json/quiz.json');
							$quizArr = json_decode($data);

							if(count($quizArr) > 0){
								foreach ($quizArr as $qz) {
						    		echo"<li class='list-group-item'>";
									echo "<div class='row'>";
									echo "<div class='col-md-1'>
											<h4><span class='glyphicon glyphicon-edit pull-right'></span></h4>
										  </div>";
									echo "<div class='col-md-10'>
								    			<a href='courseTeacherQuizSingle.php?pid=".$qz->QuizID."' name='quizSingle'><h4>".$qz->QuizTitle."</h4></a>
												-/100pts
								    		</div>";
								    echo "<div class='col-md-1'>
								    			<div class='btn-group' role='group'>
			    									<button type='button' class='btn btn-default dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
			      									<span class='glyphicon glyphicon-cog pull-right'></span></button>
												    <ul class='dropdown-menu'>
												      <li><a href='courseTeacherEditQuiz.php'>Edit</a></li>
												      <li><a href='#' data-toggle='modal' data-target='#modalDelete'> Delete</a></li>
												      <li><a href='#'>Close</a></li>
												    </ul>
			  									</div>
								    		</div>";
									echo "</div>";
						   			echo" </li>";
						    	}
					    	}else{
					    		echo"<li class='list-group-item'>";
					    		echo "<i><p>No data to show</p><i>";
					    		echo "<li>";
					    	}
					    ?>
				  	</ul>
				  	<ul class="list-group" style='height:30%; overflow-y: scroll;'>
					    <li class="list-group-item">
					    	<b><span class="glyphicon glyphicon-play"></span> Dated Quizzes</b>
					    </li>
					    <li class="list-group-item">
					    	<div class="row">
					    		<div class="col-md-1">
					    			<h4><span class="glyphicon glyphicon-tasks pull-right"></span></h4>
					    		</div>
					    		<div class="col-md-10">
					    			<a href='courseTeacherQuizSingle.php'><h4>Midterm Exam</h4></a>
									<b>Closed | Due</b> Jan 18, 2018 at 4:30pm | -/100pts
					    		</div>
					    		<div class="col-md-1">
					    			<div class="btn-group" role="group">
    									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      									<span class="glyphicon glyphicon-cog pull-right"></span></button>
									    <ul class="dropdown-menu">
									      <li><a href="#" data-toggle="modal" data-target="#modalDelete"> Delete</a></li>
									    </ul>
  									</div>
					    		</div>
					    	</div>
					    </li>
				  	</ul>
			  	</div>
			  </div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div id="modalDelete" class="modal fade" role="dialog">
	    <div class="modal-dialog modal-sm">
	        <!-- Modal content-->
	        <div class="modal-content panel-danger">
	            <div class="modal-body">
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	                <h4 class="modal-title">Are you sure you want to delete this assignment?</h4>
	            </div>
	            <div class="modal-footer">
	            	<button type="button" class="btn btn-danger">Yes</button>
	                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
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