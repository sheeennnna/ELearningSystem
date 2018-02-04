<html>
<head>
	<link rel='stylesheet' href="css/mainCSS.css">
	<link rel='stylesheet' href="css/dashboardStudentCSS.css">
	<link rel='stylesheet' href="css/accountStudentCSS.css">
	<link rel='stylesheet' href="css/inboxStudentCSS.css">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='../datatable_files/datatables.min.css'>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<title>Inbox</title>
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
				<li><a href="dashboardStudent.php">
					<span class='glyphicon glyphicon-th'></span>
					</br>Dashboard
				</a></li>
				<li><a href="coursesStudent.php">
					<span class='glyphicon glyphicon-book'></span>
					<br>Courses</br>
				</a></li>
				<li><a href="inboxStudent.php" class='active'>
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
							<a role='button' id="compose_modal">
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
								<img src="images/avatar.png">
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
								<img src="images/avatar.png">
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
								<img src="images/avatar.png">
							</div>
							<div class='col col-md-9'>
								<p class='sender_name'> June Jan Genelsa</p>
								<p class='message_preview'> June: I WAS WONDERING...</p>
							</div>
						</a>
					</div>


				</div>

				<div class='col col-md-8'>
					<div class='panel panel-danger inbox_panel'>
						<div class='panel-heading'> Kent Michael Talisaysay</div>
						<div class='panel-body'>
							<div class='row sender_message'>
								<div class='col col-md-2 message_avatar'>
									<img src="images/avatar.png">
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
									<img src="images/avatar.png">
								</div>
							</div>
						</div>
						<div class='panel-footer'>
							<div class='row'>
								<div class='col col-md-12'>
									<div class='input-group'>
										<input type='text' class='form-control' placeholder='Type your reply'>
										<span class='input-group-btn'>
											<button class='btn btn-danger' type='button'> Send </button>
										</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<!-- MODAL FOR COMPOSING MESSAGE -->
		<div id="composeMessage" class="modal">

		  <!-- Modal content -->
		  <div class="modal-content">
		    <span class="close">&times;</span>
		    <p class='compose_header'>Compose message</p>
		    <hr class='compose_hr'>
		    <div class='panel panel-default'>
		    	<div class='panel-heading'>
		    		<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Recepient</span>
					  <input type="text" class="form-control" placeholder="Name of receiver" aria-describedby="basic-addon1">
					</div>
		    	</div>
		    	<div class='panel-body'>
		    		<form>
					    <div class="form-group">
					      <label for="comment">Type your message below</label>
					      <textarea class="form-control" rows="5" id="comment"></textarea>
					    </div>
					</form>
		    	</div>
		    	<div class='panel-footer'>
		    		<div class='row'>
		    			<div class='col col-md-10'></div>
		    			<div class='col col-md-2'>
		    				<button type='button' class='btn pull-right btn-danger'>Send!</button>
		    			</div>
		    		</div>
		    	</div>
		    </div>
		  </div>

		</div>


	</div>

</body>

</html>
<script>
// Get the modal
var modal = document.getElementById('composeMessage');

// Get the button that opens the modal
var btn = document.getElementById("compose_modal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
