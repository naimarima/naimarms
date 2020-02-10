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
	  <li><a href="retakes.php">retakes</a></li>
	  <li><a href="evaluates.php">evaluates</a></li>
			</ul>
<?php
$conn = mysqli_connect("localhost","root","","razia_sultana");


?>
<html>
<head>
<style>
body{
	background-color: lightgreen;
}
</style>
</head>
<body>
<center>
<h1>Student Form </h1>
<form action="" style "margin-left:170px;" method="post">
std_name: </br>
<input type= "text" name="std_name" placeholder="enter your std_name"> </br>
<br>
std_roll: </br>
<input type= "text" name="std_roll" placeholder="enter your std_roll"> </br>
<br>
<label for="sel1">Select batch_no :</label><br>
					<select name="batch_no" style="width:250px;height:30px;padding:5px 5px;">
									<option selected="selected"><center> Choose batch_no </center></option>
									<?php
									require_once('db.php');
									$query = mysqli_query($conn,"SELECT * FROM batch");
									while($row = mysqli_fetch_array($query))
														{
														?>
									<option value="<?php echo $row['batch_no']; ?>"><?php echo $row['batch_no']; ?></option>
									<?php } ?>
							  </select><br><br>


						
<input type= "submit" value="insert data" name="send"><br>
</form>
</div>

</div>
</div>
<br>

<?php
$conn = mysqli_connect("localhost","root","","razia_sultana");


if(isset($_POST['send'])){
	
	$std_name = $_POST['std_name'];
	$std_roll = $_POST['std_roll'];
	$batch_no = $_POST['batch_no'];
	$sql = "insert into student(std_name,std_roll,batch_no) values ('$std_name','$std_roll','$batch_no')";
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
				<th>std_name</th>
               <th>std_roll</th>
              <th>batch</th>
             <th>Action</th>
			
				
			</tr>
<?php
$sql = "select * from student";
$result = mysqli_query($conn,$sql);
$count = 1;
foreach($result as $output){
?>
<tr>
	<td><?php echo $count; ?></td>
	
	<td><?php echo $output['std_name']; ?></td>
   <td><?php echo $output['std_roll']; ?></td>
   <td><?php echo $output['batch_no']; ?></td>
   <td><a href="student_edit.php?edit_name=<?php echo $output['std_name'];?>">Edit</a>
	
	<a href="delete_student.php?del_name=<?php echo $output['std_name'];?>"
	onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> </td>

	
	
	
	
	
</tr>
<?php
$count++;
}
?>
</table>




</body>
</html> 