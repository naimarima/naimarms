<?php 

require_once('conn.php');
	
if (isset($_POST['add'])) {

		
		$total = 3;

		
   		$bangla = $_POST['bangla'];
    	$eng = $_POST['eng'];
   		$math = $_POST['math'];
    	//$isl = $_POST['isl'];

    	$bangla_res;
		$eng_res;
		$math_res;
		$grade_res;
    	

    	$marks = $bangla + $eng + $math;

		$bangla_marks = $marks  / $total ;
		$eng_marks = $marks * 100 / $total ;
		$math_marks = $marks * 100 / $total ;

		//$per2 = floor($mars / $total_mars) ;
    //$per = floor($mars / $total_mars * 100);
		$per = floor($marks / $total);
		echo "Total Mark : ".$marks;
		echo "<br/>";
		echo "grade:".$per;
    	echo "<br/>";
		echo "Bangla : ".$bangla;
		echo "<br/>";
		echo "English : ".$eng;
		echo "<br/>";
		echo "Math : ".$math;
		echo "<br/>";
		echo "Bangla Grade : ".$bangla_marks;
		echo "<br/>";
		echo "English Grade : ".$eng_marks;
		echo "<br/>";
		echo "Math Grade : ".$math_marks;
		echo "<br/>";
		


		//Grade 

 		 if ($per>=80 && $per<=100) {
			 $grade_res = "A+";
		}

		elseif ($per>=70 && $per<=79) {
			  $grade_res = "A"; 
		}

		elseif ($per>=60 && $per<=69) {
			 $grade_res = "A-";
		}
		elseif ($per>=50 && $per<=59) {
			 $grade_res = "B"; 
		}
		elseif ($per>=40 && $per<=49) {
			 $grade_res = "C"; 
		}
		elseif ($per>=33 && $per<=39) {
			 $grade_res = "D"; 
		}
		elseif ($per>=0 && $per<=32) {
			  $grade_res = "F";
		}

		//Bangla

		if ($bangla>=80 && $bangla<=100) {
			 $bangla_res = "A+";
		}

		elseif ($bangla>=70 && $bangla<=79) {
			  $bangla_res = "A"; 
		}

		elseif ($bangla>=60 && $bangla<=69) {
			 $bangla_res = "A-";
		}
		elseif ($bangla>=50 && $bangla<=59) {
			 $bangla_res = "B"; 
		}
		elseif ($bangla>=40 && $bangla<=49) {
			 $bangla_res = "C"; 
		}
		elseif ($bangla>=33 && $bangla<=39) {
			 $bangla_res = "D"; 
		}
		elseif ($bangla>=0 && $bangla<=32) {
			  $bangla_res = "F";
		}


		//English

		if ($eng>=80 && $eng<=100) {
			 $eng_res = "A+";
		}

		elseif ($eng>=70 && $eng<=79) {
			 $eng_res = "A"; 
		}

		elseif ($eng>=60 && $eng<=69) {
			 $eng_res = "A-";
		}
		elseif ($eng>=50 && $eng<=59) {
			 $eng_res = "B"; 
		}
		elseif ($eng>=40 && $eng<=49) {
			  $eng_res = "C"; 
		}
		elseif ($eng>=33 && $eng<=39) {
			  $eng_res = "D"; 
		}
		elseif ($eng>=0 && $eng<=32) {
			 $eng_res = "F";
		}

		//Math

		if ($math>=80 && $math<=100) {
			 $math_res = "A+";
		}

		elseif ($math>=70 && $math<=79) {
			 $math_res = "A"; 
		}

		elseif ($math>=60 && $math<=69) {
			 $math_res = "A-";
		}
		elseif ($math>=50 && $math<=59) {
			 $math_res = "B"; 
		}
		elseif ($math>=40 && $math<=49) {
			  $math_res = "C"; 
		}
		elseif ($math>=33 && $math<=39) {
			  $math_res = "D"; 
		}
		elseif ($math>=0 && $math<=32) {
			 $math_res = "F";
		}

 echo  "Bangla : ".$bangla_res;
 echo "<br/>";
 echo  "English : ".$eng_res;
 echo "<br/>";
 echo  "Math : ".$math_res;
 echo "<br/>";
 echo  "Grade is : ".$grade_res;

$ins = "INSERT INTO mark(bn,en,mt,total_mark,bangla_g,eng_g,math_g,grade) VALUES ('$bangla','$eng','$math','$marks','$bangla_res','$eng_res','$math_res','$grade_res')";
    	$run =mysqli_query($db,$ins);
 } 

?>

 <form action="" method="post">
   
    <div class="form-group col-sm-4">
      <label>Bangla:</label>
      <input type="number" class="form-control" placeholder="Enter Mark" name="bangla">
    </div> 
    <div class="form-group col-sm-4">
      <label>English:</label>
      <input type="number" class="form-control" placeholder="Enter Mark" name="eng">
    </div>
     <div class="form-group col-sm-4">
      <label>Math:</label>
      <input type="text" class="form-control" placeholder="Enter Mark" name="math">
    </div>
    <div class="form-group col-sm-2">
       <button type="submit" class="btn btn-info" name="add">Submit</button>
    </div>
   
   
  </form>

  <h2>All Result</h2>         
  <table class="table table-bordered" border="1" width="50%">
    <thead>
      <tr>
        <th>ID</th>
        <th>Bangla</th>
        <th>English</th>
        <th>Math</th>
        <th>Total Marks</th>
        <th>Bangla Grade</th>
        <th>English Grade</th>
       
        <th>GPA</th>
      </tr>
    </thead>
    <?php

    	$sel ="SELECT * FROM mark";
    	$run =mysqli_query($db,$sel);
    	$sl = 1;
    	while ($row = mysqli_fetch_assoc($run)) {
    	
    	

      ?>
    <tbody>
      <tr>
        <td><?php echo $sl; ?></td>
        <td><?php echo $row['bn'] ?></td>
        <td><?php echo $row['en'] ?></td>
        <td><?php echo $row['mt'] ?></td>
        <td><?php echo $row['total_mark'] ?></td>
        <td><?php echo $row['bangla_g'] ?></td>
        <td><?php echo $row['eng_g'] ?></td>
        <td><?php echo $row['math_g'] ?></td>
       
      </tr>
     
    </tbody>
    <?php 
$sl++;

}
 ?>
  </table>