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
					<a href="register_teacher.php"><button type="button" id="reg_teacher" class="btn btn">REGISTER AS TEACHER</button></a>
					<br><br><br>
					<div id="studentside">
						<h2 id="stud">STUDENT</h2>
						<br><br>
						<form action="" method="POST" autocomplete="off">
							<div class="form-group row">			
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="First Name"></input>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="Last Name"></input>
									</div>
								</div>
							</div>
							<div class="form-group row">			
								<div class="col-md-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="Email"></input>
									</div>
								</div>
							</div>
							<div class="form-group row">			
								<div class="col-md-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="Address"></input>
									</div>
								</div>
							</div>
							<div class="form-group row">			
								<div class="col-md-3"> 
									<div class="dropdown">
										<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Gender <span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li><a href="#">Male</a></li>
											<li><a href="#">Female</a></li>
											<li><a href="#">Other</a></li>
											<li><a href="#">Rather not say</a></li>
										</ul>
									</div>
								</div> 
								<div class="col-md-6">
									<div id="bday" class="input-group">
										<span class="input-group-addon">Birthday</span>
										<input type="date" required="required" class="form-control" id="birthday"></input>
									</div>
								</div>		
								<div id="grade" class="col-md-3"> 
									<div class="dropdown">
										<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Grade Level <span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
										</ul>
									</div>
								</div> 
							</div>
							<div class="form-group row">			
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input type="password" required="required" class="form-control" id="inputs" placeholder="Password"></input>
									</div>
								</div>
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
										<input type="text" required="required" class="form-control" id="inputs" placeholder="Contact Number"></input>
									</div>
								</div>	
							</div>
							<div class="form-group row">
								<div class="col-md-offset-4 col-md-4 col-md-offset-4">
									<button id="regbtn" type="submit" class="btn btn-md">REGISTER</button>
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
