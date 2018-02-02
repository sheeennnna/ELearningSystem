<html>
<head>
	<link rel='stylesheet' href="../css/mainCSS.css">
	<link rel='stylesheet' href="../css/dashboardCSSTeacher.css">
	<link rel='stylesheet' href="../css/inboxTeacherCSS.css">
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
				<li><a href="dashboardTeacher.php" >
					<span class='glyphicon glyphicon-th'></span>
					</br>Dashboard
					</a>
				</li>
				<li><a href="">
					<span class='glyphicon glyphicon-book'></span>
					<br>Handled Courses</br>
				</a></li>
				<li><a href="" class='active'>
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
				<div class='col col-md-12'> 
					<div class='row'>
						<div class='col col-md-4'>
							<h3>Inbox</h3>
						</div>
						<div class='col col-md-4'></div>
						<div class='col col-md-4 username'>
							<p>Marian Mozo's Inbox</p>
						</div>
					</div>
					<div class='row'>
						<p class='account_break_line'>
						______________________________________________________________________________________________________________________________________________________________
						</p>
					</div>
					 
				</div>
			</div>

			<div class='row'>
				<div class='col col-md-3 recents'>
					<div class='row'>
						<div class='col col-md-4'>
							<p class='recent_messages_header'>Messages</p>
						</div>
						<div class='col col-md-8 compose_message'>
							<a role='button'>
								<span class='glyphicon glyphicon-edit'></span>
							</a>
						</div>
					</div>
					<hr class='recent_messages_hr'>
					<div class="input-group">
				      <input type="text" class="form-control" placeholder="Search messages">
				      <span class="input-group-btn">
				        <button class="btn btn-default" type="button"> 
				        	<span class='glyphicon glyphicon-search'></span> Go
				        </button>
				      </span>
				    </div>
				    <br>

				    <!-- MESSAGES -->
				    <a role="button" class='message_prev'>
				    	<div class='row open_message message_thumb'>
							<div class='col col-md-3'>
								<img class="student_icon" src="../images/person_icon.png">
							</div>
							<div class='col col-md-9'>
								<p class='sender_name'> Kent Michael Talisaysay</p>
								<p class='message_preview'> Kent: HELOOOOOOO .... </p>
							</div>
						</div>
				    </a>
					

					<div class='row message_thumb'>
						<a role="button" class='message_prev'>
							<div class='col col-md-3'>
								<img class="student_icon" src="../images/person_icon.png">
							</div>
							<div class='col col-md-9'>
								<p class='sender_name'> Sheena Alcantara</p>
								<p class='message_preview'> Sheena: IT'S ME</p>
							</div>
						</a>
					</div>

					<div class='row message_thumb'>
						<a role='button' class='message_prev'>
							<div class='col col-md-3'>
								<img class="student_icon" src="../images/person_icon.png">
							</div>
							<div class='col col-md-9'>
								<p class='sender_name'> June Jan Genelsa</p>
								<p class='message_preview'> June: I WAS WONDERING...</p>
							</div>
						</a>
					</div>


				</div>

				<div class='col col-md-8'>
					<div class='panel panel-primary inbox_panel'>
						<div class='panel-heading'> Kent Michael Talisaysay</div>
						<div class='panel-body'>
							<div class='row sender_message'>
								<div class='col col-md-2 message_avatar'>
									<img class="student_icon" src="../images/person_icon.png">
								</div>
								<div class='col col-md-8'>
									<p class='message_content'>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
										sed do eiusmod tempor incididunt ut labore et dolore magna 
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
										ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
										<br>Duis aute irure dolor in reprehenderit in voluptate velit 
										esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
										occaecat cupidatat non proident, sunt in culpa qui officia 
										deserunt mollit anim id est laborum.
									</p>
								</div>
							</div>
							<div class='row receiver_reply'>
								<div class='col col-md-2'></div>
								<div class='col col-md-8'>
									<p class='message_content'>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
										sed do eiusmod tempor incididunt ut labore et dolore magna 
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
										ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>
										<br>Duis aute irure dolor in reprehenderit in voluptate velit 
										esse cillum dolore eu fugiat nulla pariatur. Excepteur sint 
										occaecat cupidatat non proident, sunt in culpa qui officia 
										deserunt mollit anim id est laborum.
									</p>
								</div>
								<div class='col col-md-2'>
									<img class="student_icon" src="../images/person_icon.png">
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
			</div>	

		</div>
	</div>
</body>

</html>