<html>
<head>
	<link rel='stylesheet' href="css/handledCourse.css">
	<link rel='stylesheet' href="css/announcCourse.css">
	<link rel='stylesheet' href="../css/assignCourse.css">
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
						<span class='add_announcement'>Assignments</span>

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
					<li><a href="courseTeacherAssignment.php" class='active'>
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
		<div class='col col-md-10' style='padding-left:50px'> 
			<div class="panel panel-primary">
			  <!-- Default panel contents -->
			  <div class="panel-heading assignment_heading">
			  	<span class='glyphicon glyphicon-file'></span> Assignments
			  </div>
			  <div class="panel-body">
			  			<a href="courseTeacherCreateAssignment.php">
			   				<button type="button" class="btn btn-primary"><span class='glyphicon glyphicon-pencil'></span> Create Assignment</button>
			   			</a>
			   <br><br>
			  	<div>
			  		<b><span class="glyphicon glyphicon-play"></span> Undated Assignments</b>
				    <ul class="list-group" style='height:20%; overflow-y: scroll;'>
					    <?php
					    	$data = file_get_contents('json/assignment.json');
							$assignmentArray = json_decode($data);

							if(count($assignmentArray) > 0){
								foreach ($assignmentArray as $ass) {
									if($ass->assignmentDate == "No Due Date"){
										echo '<li class="list-group-item">';
									    	echo '<div class="row">';
									    		echo '<div class="col-md-1">';
									    			echo '<h4><span class="glyphicon glyphicon-edit pull-right"></span></h4>';
									    		echo '</div>';
									    		echo '<div class="col-md-10">';
									    			echo "<a href='courseTeacherAssignmentSingle.php?assID=".$ass->assignmentID."'><h4>".$ass->assignmentTitle."</h4></a>";
													echo "<b>Status</b> ".$ass->assignmentStatus." | -/".$ass->assignmentPoints."pts";
									    		echo '</div>';
									    		echo '<div class="col-md-1">';
									    			echo '<div class="btn-group" role="group">';
				    									echo '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
				      									echo '<span class="glyphicon glyphicon-cog pull-right"></span></button>';
													    echo '<ul class="dropdown-menu">';
													      echo "<li><a href='courseTeacherEditAssignment.php?assID=".$ass->assignmentID."'>Edit</a></li>";
													      echo "<li><a href='courseTeacherDeleteAssignment.php?assID=".$ass->assignmentID."'> Delete</a></li>";
													      if($ass->assignmentStatus == "Opened"){
													      	echo "<li><a href='courseTeacherOpenCloseAssignment.php?assID=".$ass->assignmentID."&&assStatus=Close'>Close</a></li>";
													      }else{
													      	echo "<li><a href='courseTeacherOpenCloseAssignment.php?assID=".$ass->assignmentID."&&assStatus=Open'>Open</a></li>";
													      }
													    echo '</ul>';
				  									echo '</div>';
									    		echo '</div>';
									    	echo '</div>';
									    echo '</li>';

									}
						    	}
					    	}else{
					    		echo"<li class='list-group-item'>";
					    		echo "<i><p>No data to show</p><i>";
					    		echo "<li>";
					    	}
					    ?>
				  	</ul>
				  	<b><span class="glyphicon glyphicon-play"></span> Dated Assignments</b>
				  	<ul class="list-group" style='height:20%; overflow-y: scroll;'>
					    <?php
					    	$data = file_get_contents('json/assignment.json');
							$assignmentArray = json_decode($data);

							if(count($assignmentArray) > 0){
								foreach ($assignmentArray as $ass) {
									if($ass->assignmentDate != "No Due Date"){
								    echo "<li class='list-group-item'>";
								    	echo "<div class='row'>";
								    		echo "<div class='col-md-1'>";
								    			echo "<h4><span class='glyphicon glyphicon-tasks pull-right'></span></h4>";
								    		echo "</div>";
								    		echo "<div class='col-md-10'>";
								    			echo "<a href='courseTeacherAssignmentSingle.php?assID=".$ass->assignmentID."'><h4>".$ass->assignmentTitle."</h4></a>";
												echo "<b>Status</b> ".$ass->assignmentStatus." | <b>Due</b> ".$ass->assignmentDate." at ".$ass->assignmentTime." | -/".$ass->assignmentPoints." pts | Not Yet Graded";
								    		echo "</div>";
								    		echo '<div class="col-md-1">';
									    			echo '<div class="btn-group" role="group">';
				    									echo '<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
				      									echo '<span class="glyphicon glyphicon-cog pull-right"></span></button>';
													    echo '<ul class="dropdown-menu">';
													      echo "<li><a href='courseTeacherEditAssignment.php?assID=".$ass->assignmentID."'>Edit</a></li>";
													      echo "<li><a href='courseTeacherDeleteAssignment.php?assID=".$ass->assignmentID."'> Delete</a></li>";
													      if($ass->assignmentStatus == "Opened"){
													      	echo "<li><a href='courseTeacherOpenCloseAssignment.php?assID=".$ass->assignmentID."&&assStatus=Close'>Close</a></li>";
													      }else{
													      	echo "<li><a href='courseTeacherOpenCloseAssignment.php?assID=".$ass->assignmentID."&&assStatus=Open'>Open</a></li>";
													      }
													    echo '</ul>';
			  									echo "</div>";
								    		echo "</div>";
								    	echo "</div>";
								    echo "</li>";
								    }	
								}
							}else{
					    		echo"<li class='list-group-item'>";
					    		echo "<i><p>No data to show</p><i>";
					    		echo "<li>";
					    	}
					    ?>
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