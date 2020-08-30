<?php
include('connectdb.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>new-info</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body style="color:red;">
<h2>ADD</h2>
<hr>
<div class="cont">
	<div class="innercont">
	<div class="subcontainer">
	<form action="" method="POST" id="f1">
		ID : <input type="number" name="id" required> <br><br>
		NAME  : <input type="text" name="name" required> <br><br>
		USR NAME  : <input type="text" name="usrname" required> <br><br>
		ROLE  : <input type="text" name="memrole" required> <br><br>
		PASSWORD  : <input type="password" name="password" required> <br><br>
		TIMING-1  : <input type="number" name="timing1" required> <br><br>
		TIMING-2  : <input type="number" name="timing2" required> <br><br>
		COMMENTS  : <input type="text" name="comments" required> <br><br>
		<div class="subcenter">
		<input type="submit" name="submitted" value="ADD">
</div>
	</form>
</div>
	</div>
</div>

<?php		
if(isset($_POST['submitted']))
{
	$input1 = $_POST["id"]; 
	$input2 = $_POST["name"];
	$input3 = $_POST["usrname"];  
	$input4 = $_POST["memrole"];
	$input5 = $_POST["password"]; 
	$input6 = $_POST["timing1"]; 
	$input7 = $_POST["timing2"]; 
	$input8 = $_POST["comments"]; 

	$sql="SELECT * FROM members WHERE id='$input1' ";
	$result=mysqli_query($conn,$sql);
  $rowcount=mysqli_num_rows($result);
	if($rowcount==0)
	{
		$ins="INSERT INTO members VALUES('$input1','$input2','$input3','$input4','$input5','$input6','$input7','$input8')";
		if($conn->query($ins)===TRUE)
		{
				echo '<script>alert("Data insertion successfull.")</script>';
		}
		else{
			/*echo "Error updating record: " . $conn->error;*/
			echo '<script>alert("some error occured.!!!")</script>';
		}	
	}
	else{
		echo '<script>alert("ID already exists !!!")</script>';
	}



}
?>
</body>
</html>