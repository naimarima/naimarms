<?php 
			 
require_once('db.php');
if(isset($_REQUEST['edit_teacher_name'])){
	
	$edit_id = $_REQUEST['edit_teacher_name'];

$selectInfo = "SELECT * FROM teacher WHERE teacher_id=$edit_id";
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
			
			<h2>Update Teacher Information</h2>
			
			<form action="" style "margin-left:170px;" method="post">
			<input type="hidden" name="edit_id" value="<?php echo $edit_id;?>">
				Teacher Name: </br>
				<input type= "text" name="teacher_name" placeholder="Enter Your teacher Name" value="<?php echo $getData['teacher_name'];?>"> </br>
				<br>
				
				<input type= "submit" value="Update Teacher Name " name="edit_Data">
			 <form>
			 
	<?php
	}}
	?>
	
<?php

//require_once('dbconn.php');

	if(isset($_REQUEST['edit_Data'])){
	
	$edid_ID 		= $_REQUEST['edit_id'];
	$teacher_name 		= $_REQUEST['teacher_name'];
	
$update_user = "UPDATE teacher SET teacher_name='$teacher_name'WHERE teacher_id='$edit_id'";
	
	$run_user = mysqli_query($conn,$update_user);
		
		
	
	if ($run_user==true){
		
		echo "<script>
    window.alert('Succesfully Updated');
    window.location.href='teacher.php';
    </script>";
		
		
	}
	
	
}

?>			 			 
</body>
</html>
		
		
		
		