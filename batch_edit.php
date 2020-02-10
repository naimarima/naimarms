<?php 
			 
require_once('db.php');
if(isset($_REQUEST['edit_id'])){
	
	$edit_id = $_REQUEST['edit_id'];

$selectInfo = "SELECT * FROM batch WHERE batch_id=$edit_id";
$runInfo = mysqli_query($conn,$selectInfo);

while($getData = mysqli_fetch_array($runInfo)){
	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>website</title>
		<link rel="stylesheet" href="style.css">
		
	</head>
	<body>
			<ul>
	   <li><a href="index.php">home</a></li>
      <li><a href="course.php">course</a></li>
      <li><a href="teacher.php">teacher</a></li>
      <li><a href="batch.php">batch</a></li>
      <li><a href="student.php">student</a></li>
      <li><a href="register.php">register</a></li>
			</ul>
			
			<h2>Update Batch Information</h2>
			
			<form action="" style "margin-left:170px;" method="post">
			<input type="hidden" name="edit_id" value="<?php echo $edit_id;?>">
				Batch No: </br>
				<input type= "text" name="batch_no" placeholder="Enter Your teacher Name" value="<?php echo $getData['batch_no'];?>"> </br>
				<br>
				
				<input type= "submit" value="Update Batch no " name="edit_Data">
			 <form>
			 
	<?php
	}}
	?>
	
<?php

//require_once('dbconn.php');

	if(isset($_REQUEST['edit_Data'])){
	
	$edid_ID		= $_REQUEST['edit_id'];
	$batch_no 		= $_REQUEST['batch_no'];
	
$update_user = "UPDATE batch SET batch_no='$batch_no'WHERE batch_id='$edid_ID'";
	
	$run_user = mysqli_query($conn,$update_user);
		
		
	
	if ($run_user==true){
		
		echo "<script>
    window.alert('Succesfully Updated');
    window.location.href='batch.php';
    </script>";
		
		
	}
	
	
}

?>			 			 
</body>
</html>
		
		
		
		