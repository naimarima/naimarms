<?php
require_once('db.php');
if(isset($_REQUEST['del_batch_no'])){
	
	$delete_batch_no = $_REQUEST['del_batch_no'];

	$data = "DELETE  FROM batch WHERE batch_id='$delete_batch_no'";
	mysqli_query($conn,$data);
	header("location: batch.php");

}