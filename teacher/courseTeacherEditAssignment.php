<?php
$notif = '';
$error = '';

if(isset($_POST["submit"])){
	
	if(file_exists('json/assignment.json')){ 

		if(empty($_POST['assignmentDate'])){
			$aDate = "No Due Date";
		}else{
			$aDate = $_POST['assignmentDate'];
			$aDate = date("F d Y", $aDate);
		}

		if(empty($_POST['assignmentTime'])){
			$aTime = "No Time";
		}else{
			$aTime = $_POST["assignmentTime"];
			$aTime = date('h:i a',strtotime($aTime));
		}

		if($_POST["assStatus"] == "Close"){
			$aStatus = "Closed";
		}else{
			$aStatus = "Opened";
		}

        // read file
		$data = file_get_contents('json/assignment.json');

		// decode json to array
		$assArray = json_decode($data, true);

		foreach ($assArray as $key => $value) {
		    if ($value['assignmentID'] == $_GET['assID']) {
		        $assArray[$key]['assignmentTitle'] = $_POST['assignmentTitle'];
		        $assArray[$key]['assignmentContent'] = $_POST['assignmentContent'];
		        $assArray[$key]['assignmentSubmissionType'] = $_POST['assignmentSubmissionType'];
		        $assArray[$key]['assignmentPoints'] = $_POST['assignmentPoints'];
		        $assArray[$key]['assignmentDate'] = $aDate;
		        $assArray[$key]['assignmentTime'] = $aTime;
		        $assArray[$key]['assignmentStatus'] = $aStatus;
		    }
		}

		// encode array to json and save to file
		file_put_contents('json/assignment.json', json_encode($assArray));

		

        // $quiz = array(
        // 	'assignmentID' => ++$IDcounter,
        // 	'assignmentTitle' => $_POST['assignmentTitle'],
        // 	'assignmentContent' => $_POST['assignmentContent'],
        // 	'assignmentSubmissionType' => $_POST['submissionType'],
        // 	'assignmentPoints' => $_POST['assignmentPoints'],
        // 	'assignmentDate' => $aDate,
        // 	'assignmentTime' => $aTime
        // );

        // $dataArray [] = $quiz;
        // $passedData = json_encode($dataArray);

        if(file_put_contents('json/assignment.json', json_encode($assArray))){  
            header("location:courseTeacherAssignmentSingle.php?assID=".$_GET['assID']);
        } 
    }else{  
        $error = 'JSON File not exits';  
    }
}
?>
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
	<style>
		#tof, #mc{
			display: none;
		} 
	</style>
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
			  	<span class='glyphicon glyphicon-file'></span> Edit Assignment
			  </div>
			  <form method = 'POST'>
			  <div class="panel-body" style='height:70%; overflow-y: scroll;'>
			  		<div class="col-md-11">
	  				<?php   
                 		if(isset($notif)){  
                      		echo $notif;  
                 		} 

						$data = file_get_contents('json/assignment.json');
						$assArray = json_decode($data);

						foreach ($assArray as $ass) {
							if($ass->assignmentID == $_GET['assID']){
							 
                 	?>
				  			<div class="input-group">

						  		<span class="input-group-addon">
							        <b>Assignment Title</b>
							      </span>
							      <input type="text" name="assignmentTitle" class="form-control" value =<?php echo $ass->assignmentTitle;?> placeholder="Assignment Title" required>
				    		</div>
			    		<br>
			    		<div class="form-group">
    						<label for="exampleFormControlTextarea1">Content</label>
	    					<textarea class="form-control" name="assignmentContent" id="exampleFormControlTextarea1" rows="10" placeholder="Assignment Content" required>
	    						<?php echo $ass->assignmentContent;?>
	    					</textarea>
  						</div>

  						<div class="row">
			    			<div class="col-md-3">
			    				<div class="input-group">
					  				<span class="input-group-addon">
						        		<b>Type</b>
						      		</span>
						      		<select class="form-control" name="assignmentSubmissionType">
								    	<option value="On Paper"><?php echo $ass->assignmentSubmissionType;?></option>
								  	</select>
			    				</div>
			    			</div>
			    			<div class="col-md-2">
			    				<div class="input-group">
					  				<span class="input-group-addon">
						        		<b>Points</b>
						      		</span>
						      		<input type="text" pattern="\d*" title="Number only" value =<?php echo $ass->assignmentPoints;?> name="assignmentPoints" class="form-control" required>
			    				</div>
			    			</div>
			    			<div class="form-group col-md-2">
	                			<div class='input-group date' id='datetimepicker1'>
	                				<span class="input-group-addon">
	                					<b>Due Date</b>
	                    			</span>
	                   				<input type='date' name="assignmentDate" value =<?php echo $ass->assignmentDate;?> class="form-control" />
	               			 	</div>
	           				</div>
	           				<div class="form-group col-md-2 col-md-offset-2">
	                			<div class='input-group time'>
	                				<span class="input-group-addon">
	                					<b>Until</b>
	                    			</span>
	                   				<input type='time' name="assignmentTime" value= <?php echo $ass->assignmentTime;?> class="form-control" />
	               			 	</div>
	           				</div>
			    		</div>
			    		<label>Status:</label>
			    		<?php
			    		if($ass->assignmentStatus == "Closed"){
			    			echo "<label class='checkbox-inline'><input type='checkbox' name='assStatus' value='Open'>Open</label>";
			    		}else{
			    			echo "<label class='checkbox-inline'><input type='checkbox' name='assStatus' value='Close'>Close</label>";
			    		}
			    		?>
			    		
			    		<br>
			    		<div class="col-md-offset-9">
			    			<input type="submit" name="submit" value="Edit" class="btn btn-primary" />
			    			<a href="courseTeacherAssignment.php">
			    				<button type="button" class="btn">Cancel</button>
			    			</a>
			    		</div>
			    	<?php
			    		}
					}
			    	?>
			  		</div>
			</div>
			</form>

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