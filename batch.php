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
<h1>Batch Form </h1>
<form action="" style "margin-left:170px;" method="post">

batch_no: </br>
<input type= "text" name="batch_no" placeholder="enter your batch_no"> </br>
<br>


<input type= "submit" value="insert data" name="send"><br>
</form>
</div>

</div>
</div>
<br>

<?php
$conn = mysqli_connect("localhost","root","","razia_sultana");


if(isset($_POST['send'])){
	
	
    $batch_no = $_POST['batch_no'];
	$sql = "insert into batch(batch_no) values ('$batch_no')";
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
			 <th>batch_no</th>
				 <th>Action</th> 
			
				
			</tr>
<?php
$sql = "select * from batch";
$result = mysqli_query($conn,$sql);
$count = 1;
foreach($result as $output){
?>
<tr>
	<td><?php echo $count; ?></td>
	
   <td><?php echo $output['batch_no']; ?></td>
 <td><a href="batch_edit.php?edit_batch_no=<?php echo $output['batch_id'];?>">Edit</a>
	
	<a href="delete_batch.php?del_batch_no=<?php echo $output['batch_id'];?>"
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