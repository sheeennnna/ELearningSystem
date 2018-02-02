<html>
<head>
	<link rel='stylesheet' href="css/handledCourse.css">
	<link rel='stylesheet' href="css/announcCourse.css">
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
					<span class='glyphicon glyphicon-cog'></span>
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
						<span class='add_announcement'>Announcements</span>

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
					<li><a href='courseTeacherAnnouncement.php' class='active'>
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
					<li><a href="courseTeacherSession.php">
						Session
					</a></li>
				</ul>
				<br><br>
			</div>
		<div class='col col-md-9 announcement_teacher'> 
			<div class="col-lg-6" style='padding-bottom:30px'>
				<div class="col-md-9">
			    	<div class="input-group">
				      	<input type="text" class="form-control" placeholder="Search body, title, author">
				      	<span class="input-group-btn">
				        	<button class="btn btn-default" type="button">Go!</button>
				      	</span>
			    	</div><!-- /input-group -->
			    </div><!--/div col-md-9-->	
			    <div class="col-md-3">
			    	<div class='float-right'>
			    		<a href="courseTeacherCreateAnnouncement.php">
			    			<button type="button" class="btn btn-primary col-md-offset-5"><span class='glyphicon glyphicon-pencil'></span> Create Announcement</button>
			    		</a>
			    	</div>
			    </div><!--/div col-md-3-->	
		  	</div>
			<div class='col col-md-offset-1'>
				<table class="table table-striped table_announcement">
				    <tbody>
				      <a href='#'>
					      <tr>
					      	<td class='col-md-1'>
					      		<img class='announcement_icon' src='../images/person_icon.png'>
					      	</td>
					        <td class='col-md-9'>
					        	<p class='announcement_header'><a href='courseTeacherAnnouncementSingle.php'>No Session</a></p>
					        	<p class='announcer'><a href=''>Marian Isabel Mozo</a></p>
					        	<p class='announcement_message'>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation...</p>
					        </td>
					        <td>January 1, 2018</td>
					        <td><div class="btn-group" role="group">
    									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      									<span class="glyphicon glyphicon-cog pull-right"></span></button>
									    <ul class="dropdown-menu">
									      <li><a href="courseTeacherEditAnnouncement.php">Edit</a></li>
									      <li><a href="#" data-toggle="modal" data-target="#modalDelete"> Delete</a></li>
									    </ul>
  								</div>
  							</td>
					      </tr>
				  	  </a>
				      <tr>
				      	<td class='col-md-1'>
				      		<img class='announcement_icon' src='../images/person_icon.png'>
				      	</td>
				        <td class='col-md-9'>
				        	<p class='announcement_header'><a href='courseTeacherAnnouncementSingle.php'>Session Resume</a></p>
				        	<p class='announcer'><a href=''>Marian Isabel Mozo</a></p>
				        	<p class='announcement_message'>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arc...</p>
				        </td>
				        <td>September 15, 2017</td>
				        <td><div class="btn-group" role="group">
    									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      									<span class="glyphicon glyphicon-cog pull-right"></span></button>
									    <ul class="dropdown-menu">
									      <li><a href="courseTeacherEditAnnouncement.php">Edit</a></li>
									      <li><a href="#" data-toggle="modal" data-target="#modalDelete"> Delete</a></li>
									    </ul>
  									</div>
  						</td>
				      </tr>
				      <tr>
				      	<td class='col-md-1'>
				      		<img class='announcement_icon' src='../images/person_icon.png'>
				      	</td>
				        <td class='col-md-9'>
				        	<p class='announcement_header'><a href='courseTeacherAnnouncementSingle.php'>Laban Lang Always!</a></p>
				        	<p class='announcer'><a href=''>Marian Isabel Mozo</a></p>
				        	<p class='announcement_message'>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi arc...</p>
				        </td>
				        <td>November 1, 2017</td>
				        <td><div class="btn-group" role="group">
    									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      									<span class="glyphicon glyphicon-cog pull-right"></span></button>
									    <ul class="dropdown-menu">
									      <li><a href="courseTeacherEditAnnouncement.php">Edit</a></li>
									      <li><a href="#" data-toggle="modal" data-target="#modalDelete"> Delete</a></li>
									    </ul>
  									</div>
  						</td>
				      </tr>
				    </tbody>
			  	</table>
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
	                <h4 class="modal-title">Are you sure you want to delete this announcement?</h4>
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