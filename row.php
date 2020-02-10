<?php
$conn = mysqli_connect("localhost","root","","lms");

?>
<!DOCTYPE html>
<html>
  <head>
  <title>Student Form</title>
  <link rel="stylesheet"hrype="text/css" href="style.css">
  </head>  
<body>
<div id="menu" style="width:445px;">
<ul>
<li><a href="book.php">Book </a>

</li>
<li><a href="issue.php">Issue Book </a>

</li>
<li><a href="result.php">View All</a></li>


</ul>
 </div>
 
 <h1>Student Form</h1>



<form action="" style "margin-left:170px;" method="post">
<label for="sel1">Student ID:</label><br>
<select name="std_id" style="width:250px;height:30px;padding:5px 5px;">
<option selected="selected"><center>Student ID</center></option>
<?php
require_once('db.php');
$query = mysqli_query($conn,"SELECT * FROM student");
while($row = mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['std_id']; ?>"><?php echo $row['std_id'], $row['std_name']; ?></option>
<?php } ?>
 </select>

<br/>
<label for="sel1">Book ID:</label><br>

<select name="book_id" style="width:250px;height:30px;padding:5px 5px;">
<option selected="selected"><center>Book ID</center></option>
<?php
require_once('db.php');
$query = mysqli_query($conn,"SELECT * FROM book");
while($row = mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['book_id']; ?>"><?php echo $row['book_id']; ?></option>
<?php } ?>
 </select


<label for="sel1">Select Department Name:</label><br>
<select name="dept_name" style="width:250px;height:30px;padding:5px 5px;">
<option selected="selected"><center> Choose Department Name </center></option>
<?php
require_once('db.php');
$query = mysqli_query($conn,"SELECT * FROM dept");
while($row = mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row['dept_name']; ?>"><?php echo $row['dept_name']; ?></option>
<?php } ?>
 </select>

<input type= "submit" value="Add Student" name="send">
<form>

<?php

require_once('db.php');

if(isset($_POST['send'])){

$std_id = $_POST['std_id'];
$book_id = $_POST['book_id'];
$dept_name = $_POST['dept_name'];

$sql = "insert into issue_book(std_id,book_id,dept_name) values ('$std_id','$book_id','$dept_name')";
$res = mysqli_query($conn,$sql);
if ($res){
echo "Student Has Been Inserted...!!";



}


}

?>

</body>
</html>

