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
	background-color:lightgreen;
}
</style>
</head>
<body>
<center>
<h1> Offered Form </h1>
<form action="" style "margin-left:170px;" method="post">

<label for="sel1">Select batch_id:</label><br>
					<select name="batch_id" style="width:250px;height:30px;padding:5px 5px;">
									<option selected="selected"><center> Choose batch_id</center></option>
									<?php
									require_once('db.php');
									$query = mysqli_query($conn,"SELECT * FROM batch");
									while($row = mysqli_fetch_array($query))
														{
														?>
									<option value="<?php echo $row['batch_id']; ?>"><?php echo $row['batch_id'], $row['batch_no']; ?></option>
									<?php } ?>
							  </select><br><br>
						
<label for="sel1">Select Course ID:</label><br>
					<select name="crs_id" style="width:250px;height:30px;padding:5px 5px;">
									<option selected="selected"><center> Choose Course ID </center></option>
									<?php
									require_once('db.php');
									$query = mysqli_query($conn,"SELECT * FROM course");
									while($row = mysqli_fetch_array($query))
														{
														?>
									<option value="<?php echo $row['crs_id']; ?>"><?php echo $row['crs_id'], $row['crs_code'], $row['crs_title']; ?></option>
									<?php } ?>
							  </select><br><br>		
							  
<input type= "submit" value="insert data" name="send"><br><br>
</form>
</div>

</div>
</div>
<br>

<?php
$conn = mysqli_connect("localhost","root","","razia_sultana");


if(isset($_POST['send'])){
	
	
	$batch_id = $_POST['batch_id'];
	$crs_id = $_POST['crs_id'];
	$sql = "insert into offered(batch_id,crs_id) values ('$batch_id','$crs_id')";
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
				<th>Batch ID</th>
				<th>Batch No</th>
			    <th>Course ID</th>
				 <th>Course Code</th>
				  <th>Course Title</th>
				
			  
			
				
			</tr>
<?php
$sql = "select * from offered";
$result = mysqli_query($conn,$sql);
$count = 1;
foreach($result as $output){
?>
<tr>
	<td><?php echo $count; ?></td>
	
	
	<td><?php echo $output['batch_id']; ?></td>
	<td><?php echo $output['batch_no']; ?></td>
	
   <td><?php echo $output['crs_id']; ?></td>
   <td><?php echo $output['crs_code']; ?></td>
   <td><?php echo $output['crs_title']; ?></td>
	
	
</tr>
<?php
$count++;
}
?>
</table>




</body>
</html> 