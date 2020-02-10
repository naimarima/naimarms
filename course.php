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
<h1>Course Form </h1>
<form action="" style "margin-left:170px;" method="post">
crs_code: </br>
<input type= "text" name="crs_code" placeholder="enter your crs_code"> </br>
<br>
crs_title: </br>
<input type= "text" name="crs_title" placeholder="enter your crs_title"> </br>
<br>

						
<input type= "submit" value="insert data" name="send"><br><br>
</form>
</div>

</div>
</div>
<br>

<?php
$conn = mysqli_connect("localhost","root","","razia_sultana");


if(isset($_POST['send'])){
	
	$crs_code = $_POST['crs_code'];
	$crs_title = $_POST['crs_title'];
	$sql = "insert into course(crs_code,crs_title) values ('$crs_code','$crs_title')";
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
				<th>crs_code</th>
               <th>crs_title</th>
            
			
				
			</tr>
<?php
$sql = "select * from course";
$result = mysqli_query($conn,$sql);
$count = 1;
foreach($result as $output){
?>
<tr>
	<td><?php echo $count; ?></td>
	
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