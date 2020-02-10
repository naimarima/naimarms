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
<h1>Retakes Form </h1>
<form action="" style "margin-left:170px;" method="post">

<label for="sel1">Select std_id :</label><br>
					<select name="std_id" style="width:250px;height:30px;padding:5px 5px;">
									<option selected="selected"><center> Choose std_id </center></option>
									<?php
									require_once('db.php');
									$query = mysqli_query($conn,"SELECT * FROM student");
									while($row = mysqli_fetch_array($query))
														{
														?>
									<option value="<?php echo $row['std_id']; ?>"><?php echo $row['std_id']; ?></option>
									<?php } ?>
							  </select><br><br>
							  
<label for="sel1">Select crs_id :</label><br>
					<select name="crs_id" style="width:250px;height:30px;padding:5px 5px;">
									<option selected="selected"><center> Choose crs_id </center></option>
									<?php
									require_once('db.php');
									$query = mysqli_query($conn,"SELECT * FROM course");
									while($row = mysqli_fetch_array($query))
														{
														?>
									<option value="<?php echo $row['crs_id']; ?>"><?php echo $row['crs_id']; ?></option>
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
	
	$std_id = $_POST['std_id'];
	$crs_id = $_POST['crs_id'];
  $sql = "insert into retakes(std_id,crs_id) values ('$std_id','$crs_id')";
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
				<th>std_id</th>
			  <th>crs_id</th>
			   
              <!-- <th>Action</th> -->
			
				
			</tr>
<?php
$sql = "select * from retakes";
$result = mysqli_query($conn,$sql);
$count = 1;
foreach($result as $output){
?>
<tr>
	<td><?php echo $count; ?></td>
	
	<td><?php echo $output['std_id']; ?></td>
    <td><?php echo $output['crs_id']; ?></td>
 
   
<!-- <td><a href="student_edit.php?edit_name=<?php echo $output['std_name'];?>">Edit</a>
	
	<a href="delete_student.php?del_name=<?php echo $output['std_name'];?>"
	onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> </td> -->

	
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