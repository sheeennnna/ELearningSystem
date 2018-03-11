<?php
// read json file
if(file_exists('json/assignment.json')){
	$data = file_get_contents('json/assignment.json');

	// decode json to associative array
	$assArray = json_decode($data, true);

	// get array index to delete
	$arr_index = array();
	foreach ($assArray as $key => $value)
	{
	    if ($value['assignmentID'] == $_GET['assID'])
	    {
	        $arr_index[] = $key;
	    }
	}

	// delete data
	foreach ($arr_index as $i)
	{
	    unset($assArray[$i]);
	}

	// rebase array
	$assArray = array_values($assArray);

	// encode array to json and save to file
	file_put_contents('json/assignment.json', json_encode($assArray));
	if(file_put_contents('json/assignment.json', json_encode($assArray))){  
	    header("location:courseTeacherAssignment.php");
	} 
}
//echo "here";
?>