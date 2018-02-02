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
			  	<span class='glyphicon glyphicon-file'></span> Create Quiz
			  </div>
			  <div class="panel-body">
			  		<div class="col-md-11">
			  			<div class="input-group">
					  		<span class="input-group-addon">
						        <b>Title</b>
						      </span>
						      <input type="text" class="form-control" placeholder="">
			    		</div>
			    		<br>
			    		<div class="input-group">
					  		<span class="input-group-addon">
						        <b>Subtitle</b>
						      </span>
						      <input type="text" class="form-control" placeholder="">
			    		</div>
			    		<br>
			    		<div class="row">
			    			<div class="col-md-6">
			    				<div class="input-group">
					  				<span class="input-group-addon">
						        		<b>Submission Type</b>
						      		</span>
						      		<input type="text" class="form-control" placeholder="">
			    				</div>
			    			</div>
			    			<div class="col-md-6">
			    				<div class="input-group">
					  				<span class="input-group-addon">
						        		<b>Points</b>
						      		</span>
						      		<input type="text" class="form-control" placeholder="">
			    				</div>
			    			</div>
			    		</div>
			    		<br>
			    		<div class="form-group">
                			<div class='input-group date' id='datetimepicker1'>
                				<span class="input-group-addon">
                					<b>Due Date</b>
                    			</span>
                   				<input type='text' class="form-control" />
                   				<span class="input-group-addon">
                        			<span class="glyphicon glyphicon-calendar"></span>
                    			</span>
               			 	</div>
           				</div>
           				<!-- <script type="text/javascript">
   							$(function () {
         						$('#datetimepicker1').datetimepicker();
   							});
						</script> 
						WILL WORK ON THIS PA
						-->

			    		<!--*Insert here kadtong textarea with the formating options nga very laysho but for now text area lang sa:*</p>-->
			    		<div class="form-group">
    						<p> *insert how to create quiz refer to canvas* </p>
  						</div>

			    		<div class="col-md-offset-9">
			    			<div class="col-md-6">
			    				<button type="button" class="btn btn-primary"><span class='glyphicon glyphicon-ok'></span> Create</button>
			    			</div>
			    			
			    			<div class="col-md-6">
			    				<a href="courseTeacherQuizzes.php">
			    					<button type="button" class="btn"><span class='glyphicon glyphicon-remove'></span> Cancel</button>
			    				</a>
			    			</div>	
			    		</div>
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