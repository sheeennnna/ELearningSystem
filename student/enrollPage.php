<html>
<head>
	<link rel='stylesheet' href="css/mainCSS.css">
	<link rel='stylesheet' href="css/dashboardStudentCSS.css">
	<link rel='stylesheet' href="css/accountStudentCSS.css">
	<link rel='stylesheet' href="css/enrollPageCSS.css">
	<link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
	<link rel='stylesheet' href='../datatable_files/datatables.min.css'>
	<script src="../bootstrap/js/jquery.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>

	<title>Enrollment</title>
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
				<div class='col col-md-10'> 
					<h3>Enroll</h3>
					<p class='break_line'>
						____________________________________________________________________________________________________________________________________________________________
					</p> 
				</div>
			</div>

				<div class="row teachers_row">
					<div class="col col-md-3">
					    <div class="thumbnail">
					    <div class='image_div'>
					      <img src="images/teachers/dumbledore.png" alt="Albus Dumbledore">
					    </div>
					      <div class="caption">
					        <h4>Albus Dumbledore</h4>
					        <p><b>Time Schedule:</b><br>8:00AM - 9:00AM</p>
					        <p><b>Subject: </b> <br>Transfiguration</p>
					        <p class='text-right'>
					        	<a id="trigger_modal" class="btn btn-success" role="button">Enroll</a> 
					        </p>
					      </div>
					    </div>
					</div>

					<div class="col col-md-3">
					    <div class="thumbnail">
					    	<div class='image_div'>
					      		<img src="images/teachers/lupin.png" alt="Albus Dumbledore">
					    	</div>
					      <div class="caption">
					        <h4>Remus Lupin</h4>
					        <p><b>Time Schedule:</b><br>9:00AM - 10:00AM</p>
					        <p><b>Subject: </b> Defence <br>Against the Dark Arts</p>
					        <p class='text-right'>
					        	<a id="trigger_modal" class="btn btn-success" role="button">Enroll</a> 
					        </p>
					      </div>
					    </div>
					</div>

					<div class="col col-md-3">
					    <div class="thumbnail">
					    	<div class='image_div'>
					    		<img src="images/teachers/mcgonagall.png" alt="Albus Dumbledore">
					    	</div>
					      <div class="caption">
					        <h4>Minerva Mcgonagall</h4>
					        <p><b>Time Schedule:</b><br>1:00PM - 2:00PM</p>
					        <p><b>Subject: </b><br>Transifugration</p>
					        <p class='text-right'>
					        	<a id="trigger_modal" class="btn btn-success" role="button">Enroll</a> 
					        </p>
					      </div>
					    </div>
					</div>

					<div class="col col-md-3">
					    <div class="thumbnail">
					    	<div class='image_div'>
					    		<img src="images/teachers/snape.png" alt="Albus Dumbledore">
					    	</div>
					      <div class="caption">
					        <h4>Severus Snape</h4>
					        <p><b>Time Schedule:</b><br>2:00PM - 3:00PM</p>
					        <p><b>Subject: </b><br>Potions</p>
					        <p class='text-right'>
					        	<a id="trigger_modal" class="btn btn-success" role="button">Enroll</a> 
					        </p>
					      </div>
					    </div>
					</div>

					
				</div>

		</div>

		<!-- ENROLLMENT SUCCESSFUL MODAL -->
		<div id='successfullEnroll' class='modal'>
			<div class="modal-content">
			    <span class="close">&times;</span>
			    <p><center><b>Successfully enrolled!</b></center></p>
			  </div>
		</div>

	</div>
</body>
</html>

<script>
// Get the modal
var modal = document.getElementById('successfullEnroll');

// Get the button that opens the modal
var btn = document.getElementById("trigger_modal");

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