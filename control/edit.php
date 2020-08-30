<?php
include('connectdb.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>edit-info</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body style="color:red;">
<h2>EDIT</h2>
<hr>
<div class="cont">
	<div class="innercont">
	<div class="subcontainer">
<form action="" method="POST" id="f1">
  ID : <input type="number" name="id" required> <br><br>
  NAME  : <input type="text" name="name"> <br><br>
	USR NAME  : <input type="text" name="usrname"> <br><br>
	ROLE  : <input type="text" name="memrole"> <br><br>
  PASSWORD  : <input type="password" name="password"> <br><br>
  TIMING-1  : <input type="number" name="timing1"> <br><br>
  TIMING-2  : <input type="number" name="timing2"> <br><br>
	COMMENTS  : <input type="text" name="comments"> <br><br>
	<div class="subcenter">
  	<input type="submit" name="submitted" value="UPDATE">
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
	$input4 = $_POST['memrole'];
	$input5 = $_POST["password"]; 
	$input6 = $_POST["timing1"]; 
	$input7 = $_POST["timing2"]; 
	$input8 = $_POST["comments"]; 
	$sql="SELECT * FROM members WHERE id='$input1' ";
	$result=mysqli_query($conn,$sql);
  $rowcount=mysqli_num_rows($result);
	if($rowcount==0){
		echo '<script>alert("INVALID ID ENTERED  !!!")</script>';
	}
	else{			
			$newinput=array($input1,$input2,$input3,$input4,$input5,$input6,$input7,$input8);    /* to be updated  */

			$ins1="SELECT * FROM members WHERE id=$input1";
			$result = $conn->query($ins1);
			$row = $result->fetch_assoc();
			$pastinput=array($row['id'],$row['nam'],$row['username'],$row['role_mem'],$row['pswd'],$row['timing1'],$row['timing2'],$row['comments']);
			for($i=1;$i<count($newinput);$i++)
			{
				if($newinput[$i]=="")
				{
					$newinput[$i]=$pastinput[$i];
				}
				else{				}
			}

			$ins2="UPDATE members SET nam='$newinput[1]',username='$newinput[2]',role_mem='$newinput[3]',pswd='$newinput[4]',timing1='$newinput[5]',timing2='$newinput[6]',comments='$newinput[7]' WHERE id='$input1' ";
			if($conn->query($ins2)===TRUE)
			{
					echo '<script>alert("Updation successfull.")</script>';
			}
			else{
				/*echo "Error updating record: " . $conn->error;*/
				echo '<script>alert("some error occured.!!!")</script>';
			}					
	}
			

			


}
?>
</body>
</html>