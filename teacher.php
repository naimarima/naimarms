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
	  <li><a href="teaching.php">teaching</a></li>
	  <li><a href="offered.php">offered</a></li>
	  
	  <li><a href="evaluates.php">evaluates</a></li>
			</ul>
<?php
$conn = mysqli_connect("localhost","root","","razia_sultana");


?>
<html>
<head>
<style>
body{
	background-color:lightgreen;
}
</style>
</head>
<body>
<center>
<h1>Teacher Form </h1>
<form action="" style "margin-left:170px;" method="post">

teacher_name: </br>
<input type= "text" name="teacher_name" placeholder="enter your teacher_name"> </br>
<br>


<input type= "submit" value="insert data" name="send"><br><br><br><br><br>
</form>
</div>

</div>
</div>
<br>

<?php
$conn = mysqli_connect("localhost","root","","razia_sultana");


if(isset($_POST['send'])){
	
	
    $teacher_name = $_POST['teacher_name'];
	$sql = "insert into teacher(teacher_name) values ('$teacher_name')";
	$res = mysqli_query($conn,$sql);
	if ($res){
		echo "Massage Has Been Send...!!";
		
		
		
	}
	
	
}
	
	
?>
 <h2>Select Data</h2>
			 <table border="1" text-align="center">
			<tr>
				<th>SL</th>
			 <th>teacher_name</th>
				<th>Action</th>
			
				
			</tr>
<?php
$sql = "select * from teacher";
$result = mysqli_query($conn,$sql);
$count = 1;
foreach($result as $output){
?>
<tr>
	<td><?php echo $count; ?></td>
	
   <td><?php echo $output['teacher_name']; ?></td>

     <td><a href="teacher_edit.php?edit_teacher_name=<?php echo $output['teacher_id'];?>">Edit</a>
	
	<a href="delete_teacher.php?del_teacher_name=<?php echo $output['teacher_id'];?>"
	onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> </td>

	
	<!-- <td>
	<a href="buy_product.php?buyID=<?php echo $output['pro_id'];?>">View Product<a/>
	</td> -->
	
	
	
	
</tr>
<?php
$count++;
}
?>
</table>




</body>
</html> 