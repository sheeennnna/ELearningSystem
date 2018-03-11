<?php
if(file_exists('json/assignment.json')){ 

	if($_GET["assStatus"] == "Close"){
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
	        $assArray[$key]['assignmentStatus'] = $aStatus;
	    }
	}

	// encode array to json and save to file
	file_put_contents('json/assignment.json', json_encode($assArray));


    if(file_put_contents('json/assignment.json', json_encode($assArray))){  
        header("location:courseTeacherAssignment.php");
    } 
}

?>