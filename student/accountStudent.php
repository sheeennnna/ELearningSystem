<html>
<head>
	<link rel='stylesheet' href="css/mainCSS.css">
	<link rel='stylesheet' href="css/dashboardStudentCSS.css">
	<link rel='stylesheet' href="css/accountStudentCSS.css">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='../datatable_files/datatables.min.css'>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

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
				<li><a href="inoxStudent.php">
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
							<h3>Account</h3>
						</div>
						<div class='col col-md-4'></div>
						<div class='col col-md-4 username'>
							<p>Marian Mozo's Profile</p>
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
				<div class='col col-md-3'>
					<img src="images/_thumbnail.png" class='profile_picture'>
				</div>
				<div class='col col-md-7'>
					<p class='info_name'> Marian Isabel Mozo </p>
					
					<div class="panel panel-default info_panel">
					  <div class="panel-heading">
					  	<p class='title_name'>Contact Details</p>
					  </div>
					  <div class="panel-body user_details">
					    <p class='info_title'> E-mail Address: 
							<span class='info_email'>yaneemozo@gmail.com</span>
						</p><br>
						<p class='info_title'> Mobile Number: 
							<span class='info_mobile'>09357811455</span>
						</p><br>
						<p class='info_title'> Facebook Link: 
							<span class='info_fb'>facebook.com/marianisabelmozo</span>
						</p>
					  </div>
					</div>
					
					<div class="panel panel-default info_panel">
					  <div class="panel-heading">
					  	<p class='title_name'>Biography Details</p>
					  </div>
					  <div class="panel-body user_details">
					    <p class='info_title'>Nickname:
							<span>Gwaps</span>
						</p><br>
						<p class='info_title'>Age:
							<span>18</span>
						</p><br>
						<p class='info_title'>Bio:
							<span>Kill them with kindness. CHAROT</span>
						</p>
					  </div>
					</div>	
				</div>
				<div class= 'col col-md-2'>
					<button type='button' class='btn btn-default edit_button' id='editAccount'>
						<span class='glyphicon glyphicon-edit'></span> Edit Account
					</button>
				</div>
			</div>	
		</div>
	</div>
	<!-- MODAL -->
	<div id='edit_modal' class='modal'>
		<div class='modal-content'>
			<span class='close'>&times;</span>
			<h3 class='editAcc_header'>Edit Account</h3>
			<p class='editAcc_breakline'>___________________________________________________________________________________</p>

			<div class='row'>
				<div class='col col-md-6'>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">@</span>
					  <input type="text" class="form-control" placeholder="Email Address" aria-describedby="basic-addon1">
					</div> </br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">#</span>
					  <input type="text" class="form-control" placeholder="Mobile Number" aria-describedby="basic-addon1">
					</div> </br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">FB</span>
					  <input type="text" class="form-control" placeholder="Facebook Link" aria-describedby="basic-addon1">
					</div>
				</div>
				<div class='col col-md-6'>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Nickname</span>
					  <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
					</div><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Age</span>
					  <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
					</div><br>
					<div class="input-group">
					  <span class="input-group-addon" id="basic-addon1">Bio</span>
					  <input type="text" class="form-control" placeholder="" aria-describedby="basic-addon1">
					</div>
				</div>
			</div>
			<br><br>
			<div class='row'>
				<div class='col col-md-4'></div>
				<div class='col col-md-4 text-center'>
					<button type='button' class='btn btn-success'>
						Save Changes
					</button>
				</div>
				<div class='col col-md-4'></div>
			</div>

		</div>
	</div>

</body>

</html>

<script>
// Get the modal
var modal = document.getElementById('edit_modal');

// Get the button that opens the modal
var btn = document.getElementById("editAccount");

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