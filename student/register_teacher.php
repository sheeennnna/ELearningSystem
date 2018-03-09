<?php
	$notif = '';
	$error = '';

	if(isset($_POST['submit'])){
		if(empty($_POST['fName']) || empty($_POST['lName']) || empty($_POST['email']) || empty($_POST['address']) || empty($_POST['birthday']) || empty($_POST['password']) || empty($_POST['contactNumber']) || empty($_POST['gender'])){
			
			$notif = "<label class='text-danger'>Please fill the necessary information</label>";

		}else{
			if(file_exists('teachers.json')){  
	        	$data = file_get_contents('teachers.json');
	        	$dataArray = json_decode($data, true);

	        	$teacherArr = json_decode($data);
	        	$IDCounter = count($teacherArr);
	        	$teacher = array(
	        		'id' => ++$IDCounter,
	        		'first_name' => $_POST['fName'],
	        		'last_name' => $_POST['lName'],
	        		'email' => $_POST['email'],
	        		'address' => $_POST['address'],
	        		'gender' => $_POST['gender'],
	        		'birthday' => $_POST['birthday'],
	        		'password' => $_POST['password'],
	        		'contact_number' => $_POST['contactNumber']
	       		);

	        	$dataArray [] = $teacher;
	        	$passedData = json_encode($dataArray);

	        	if(file_put_contents('teachers.json', $passedData)){  
	            	$notif = "<label class='text-success'>Teacher Succesfully Registered</label>";  
	        	} 
	    	}else{  
	        	$error = 'JSON File not exits';  
	    	}
		}
	}
?>

<html>
	<head>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/loginStyle.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body id="reg">
		<div class="container">
			<div class="row">
				<div id="back1" class="col-md-5">
					<br><br>
					<a href="register_student.php"><button type="button" id="reg_student" class="btn btn">REGISTER AS STUDENT</button></a>
					<br><br><br>
					<div id="studentside">
						<h2 id="stud">TEACHER</h2>
						<br><br>
						<form action="" method="POST" autocomplete="off">

						<?php   
                     		if(isset($notif)){  
                          		echo $notif;  
                     		}  
                     	?>
							<div class="form-group row">			
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="First Name" name="fName"></input>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="Last Name" name="lName"></input>
									</div>
								</div>
							</div>
							<div class="form-group row">			
								<div class="col-md-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="Email" name="email"></input>
									</div>
								</div>
							</div>
							<div class="form-group row">			
								<div class="col-md-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="Address" name="address"></input>
									</div>
								</div>
							</div>
							<div class="form-group row">			
								<div class="col-md-4"> 
									<select id="inputs" class="form-control" name="gender">
											<option disabled="" selected>Gender</option>
											<option value="Male">Male</option>
											<option value="Male">Male</option>
									
									</select>
								</div> 
								<div class="col-md-8">
									<div class="input-group">
										<span class="input-group-addon">Birthday</span>
										<input type="date" required="required" class="form-control" id="teacherbday" name="birthday"></input>
									</div>
								</div>	
							</div>
							<div class="form-group row">			
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input type="password" required="required" class="form-control" id="inputs" placeholder="Password" name="password"></input>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="Contact Number" name="contactNumber"></input>
									</div>
								</div>	
							</div>
							<div class="form-group row">
								<div class="col-md-offset-4 col-md-4 col-md-offset-4">
									<button id="regbtn" type="submit" name="submit" class="btn btn-md">REGISTER</button>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div id="back2" class="col-md-6">
					<img id="img" class="mySlides w3-animate-fading" src="images/slideshow/01.png" style="width:100%">
  					<img id="img" class="mySlides w3-animate-fading" src="images/slideshow/02.png" style="width:100%">
  					<img id="img" class="mySlides w3-animate-fading" src="images/slideshow/03.png" style="width:100%">
  					<p id="lorem">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
				</div>
			</div>	
		</div>
		<script>
			var myIndex = 0;
			carousel();

			function carousel() {
			    var i;
			    var x = document.getElementsByClassName("mySlides");
			    for (i = 0; i < x.length; i++) {
			       x[i].style.display = "none";  
			    }
			    myIndex++;
			    if (myIndex > x.length) {myIndex = 1}    
			    x[myIndex-1].style.display = "block";  
			    setTimeout(carousel, 6000);    
			}
		</script>
	</body>
</html>
