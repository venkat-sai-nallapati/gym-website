<?php
include('connectdb.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>delete-info</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body style="color:red;">
<h2>DELETE</h2>
<hr>
<div class="cont">
	<div class="innercont">
	<div class="subcontainer">
	<form action="" method="POST" id="f1">
		ID : <input type="number" name="id" required> <br><br>
		<div class="subcenter">
		<input type="submit" name="submitted" value="DELETE">
</div>
	</form>
</div>
	</div>
</div>


<?php		
if(isset($_POST['submitted']))
{
	$input1 = $_POST["id"]; 
	$sql="SELECT * FROM members WHERE id='$input1' ";
	$result=mysqli_query($conn,$sql);
  $rowcount=mysqli_num_rows($result);
	if($rowcount==0)
	{
		echo '<script>alert("INVALID ID ENTERED  !!!")</script>';
	}
	else
	{	
		$ins="DELETE from members WHERE id=$input1";
		if($conn->query($ins)===TRUE)
		{
				echo '<script>alert("Deletion successfull.")</script>';
		}
		else{
			echo '<script>alert("some error occured.!!!")</script>';
		}	
	}
}
?>
</body>
</html>