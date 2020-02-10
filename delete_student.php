<?php
require_once('db.php');
if(isset($_REQUEST['del_std_name'])){
	
	$delete_std_name = $_REQUEST['del_std_name'];

	$data = "DELETE  FROM student WHERE std_id='$delete_std_name'";
	mysqli_query($conn,$data);
	header("location: student.php");

}