<?php
require_once('db.php');
if(isset($_REQUEST['del_teacher_name'])){
	
	$delete_teacher_name = $_REQUEST['del_teacher_name'];

	$data = "DELETE  FROM teacher WHERE teacher_id='$delete_teacher_name'";
	mysqli_query($conn,$data);
	header("location: teacher.php");

}