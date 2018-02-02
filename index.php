<?php
	if(isset($_POST['uname'])){
		if ($_POST['uname'] == 'student') {
			header('Location: student/dashboardStudent.php');
		}else{
			header('Location: teacher/dashboardTeacher.php');
		}
	}
?>
<html>
	<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/loginStyle.css">
	</head>
	<body id="con1">
		<div class="container">
				<form method="POST" autocomplete="off">
					<div id="log">
						<div class="row">
							<div class="col-md-offset-5 col-md-2">
								<img src="images/icon.png" id="icon" alt="WebProf" width='70' height='80'><center>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-1 col-md-5">
								<p id="welcome">Welcome!</p>
								<p id="today">Today will be great.</p>
							</div>
						</div>
						<form action="login.php" method='POST'>
						<div class="form-group row">
							<div class="col-md-offset-1 col-md-10 col-md-offset-1">
						  		<div class="input-group">
						  			<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

						  			<input type="text" class="form-control" required="required" id="email" placeholder="Email" name='uname'>
						  		</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-offset-1 col-md-10 col-md-offset-1">
						  		<div class="input-group">
						  			<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						  			<input type="password" class="form-control" required="required" id="pass" placeholder="Password">
						  		</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-4 col-md-4 col-md-offset-4">
								<center><button type='submit' class="btn btn-md" id="logbtn">LOGIN</button></center>
							</div>
						</div>
						</form>
						<div class="row">
							<div class="col-md-offset-4 col-md-4 col-md-offset-4">
								<a href="register_student.php"><p id="new_account">NEW ACCOUNT</p></a>
							</div>
						</div>
					</div>
				</form>
		</div>
	</body>
</html>