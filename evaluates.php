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
<h1>Evaluates Form </h1>
<form action="" style "margin-left:170px;" method="post">

<label for="sel1">Select teacher_id:</label><br>
					<select name="teacher_id" style="width:250px;height:30px;padding:5px 5px;">
									<option selected="selected"><center> Choose teacher_id </center></option>
									<?php
									require_once('db.php');
									$query = mysqli_query($conn,"SELECT * FROM teacher");
									while($row = mysqli_fetch_array($query))
														{
														?>
									<option value="<?php echo $row['teacher_id']; ?>"><?php echo $row['teacher_id']; ?></option>
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



attendence: </br>
<input type= "text" name="attendence" placeholder="enter your attendence"> </br>
<br>
assignment: </br>
<input type= "text" name="assignment" placeholder="enter your assignment"> </br>
<br>
ct: </br>
<input type= "text" name="ct" placeholder="enter your ct"> </br>
<br>
midterm: </br>
<input type= "text" name="midterm" placeholder="enter your midterm"> </br>
<br>
final: </br>
<input type= "text" name="final" placeholder="enter your final"> </br>
<br>
total_mark: </br>
<input type= "text" name="total_mark" placeholder="enter your total_mark"> </br>
<br>
grade: </br>
<input type= "text" name="grade" placeholder="enter your grade"> </br>
<br>
grade_point: </br>
<input type= "text" name="grade_point" placeholder="enter your grade_point"> </br>
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
	
	$teacher_id = $_POST['teacher_id'];
	$crs_id = $_POST['crs_id'];
	$attendence = $_POST['attendence'];
	$assignment = $_POST['assignment'];
	$ct = $_POST['ct'];
	$midterm = $_POST['midterm'];
	$total_mark = $_POST['total_mark '];
	$grade = $_POST['grade'];
	$grade_point = $_POST['grade_point'];
	
	
	
	$sql = "insert into evaluates(teacher_id,crs_id,attendence,assignment,ct,midterm,final,total_mark,grade,grade_point) values ('$teacher_id','$crs_id','$attendence','$assignment','$ct','$midterm','$final','$total_mark','$grade','$grade_point')";
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
				<th>teacher_id</th>
               <th>crs_id</th>
              <th>attendence</th>
			  <th>assignment</th>
				<th>ct</th>
               <th>midterm</th>
              <th>final</th>
            <th>total mark</th> 
			<th>grade</th>
            <th>grade point</th> 			
			
			
				
			</tr>
<?php
$sql = "select * from evaluates";
$result = mysqli_query($conn,$sql);
$count = 1;
foreach($result as $output){
?>
<tr>
	<td><?php echo $count; ?></td>
	
	<td><?php echo $output['teacher_id']; ?></td>
   <td><?php echo $output['crs_id']; ?></td>
   <td><?php echo $output['attendence']; ?></td>
   <td><?php echo $output['assignment']; ?></td>
   <td><?php echo $output['ct']; ?></td>
   <td><?php echo $output['midterm']; ?></td>
   <td><?php echo $output['final']; ?></td>
   <td><?php echo $output['total_mark']; ?></td>
    <td><?php echo $output['grade']; ?></td>
	 <td><?php echo $output['grade_point']; ?></td>
	 
	 
   
<!-- <td><a href="student_edit.php?edit_name=<?php echo $output['std_name'];?>">Edit</a>
	
	<a href="delete_student.php?del_name=<?php echo $output['std_name'];?>"
	onclick="return confirm('Are you sure you want to delete this item?');">Delete</a> </td> -->

	
	 <!--<td>
	<a href="view_result.php?buyID=<?php echo $output['pro_id'];?>">View result <a/>
	</td> -->

	
	
	
</tr>
<?php
$count++;
}
?>
</table>




</body>
</html> 