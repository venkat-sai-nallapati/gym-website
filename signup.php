<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>signup</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <!-- js scripts-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
      <a class="navbar-brand" href="#">ABC gym</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" id="sai" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sai" href="about.php">ABOUT US</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" id="sai" href="signup.php">SIGN UP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sai" href="#" onclick="document.getElementById('id01').style.display='block'">LOGIN</a>
          </li> 
        </ul>
      </div>  
    </nav>
		<div id="id01" class="modal">
				<form name="form1" class="modal-content animate" action="control/validate.php" method="POST">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id01').style.display='none'" class="close">&times;</span>
							<img src="images/gym1.png" alt="UserAvatar" class="avatar">
						</div>

						<?php
							if(isset($_SESSION["isvalidated"])){
								echo '<script>alert("incorrect details")</script>';
								/*echo $_SESSION["isvalidated"];*/
								unset($_SESSION["isvalidated"]);
								session_unset();
								session_destroy();
							}
						?>

						<div class="subcontainer">
							<b>Username</b>
							<input type="text" placeholder="Enter Username" name="usrname" required>

							<b>Password</b>
							<input type="password" placeholder="Enter Password" name="pass" required>
							<div id="cent">
								<button type="submit">Login</button>				
								<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
							
							</div>
						</div>
				</form>
			</div>

    <div class="jumbotron">
      <div id="forcolor">
        <h2 style="text-align: center;">Sign up to become a member</h2>
        <br>
        <hr style="background-color:white;">
        <br>
        <div id="cent">
        <form action="#" method="POST">
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
          </div>
          <div class="form-group">
            <label for="uname">Username</label>
            <input type="text" name="uname" class="form-control" id="uname" required>
          </div>
          <div class="form-group">
            <label for="pswd">Password</label>
            <input type="password" name="pswd" class="form-control" id="pswd" required>
          </div>
          <div class="form-group">
            <label for="timing1">Morning Timing</label>
            <input type="number" name="time1" class="form-control" id="timing1" required>
          </div>
          <div class="form-group">
            <label for="timing2">Evening Timing</label>
            <input type="number" name="time2" class="form-control" id="timing2" required>
          </div>
          <div class="form-group">
            <label for="comments">Any suggestions...?</label>
            <textarea name="suggest" class="form-control" id="comments" placeholder="Please leave your suggestion here" required></textarea>
          </div>
          <div style="text-align: center;padding: 20px;">
            <button type="submit" class="btn btn-primary" name="Submit1">Submit</button>
          </div>
        </form>

              <?php
                if(isset($_POST["Submit1"]))
                {
                  $input1='default';
                  $input2=$_POST["name"];
                  $input3=$_POST["uname"];
                  $input4='member';
                  $input5=$_POST["pswd"];
                  $input6=$_POST["time1"];
                  $input7=$_POST["time2"];
                  $input8=$_POST["suggest"];

                  $conn= new mysqli("localhost","root","","gym");
                  $sql="SELECT * FROM members WHERE username='$input3' ";
                  $result=mysqli_query($conn,$sql);
                  $rowcount=mysqli_num_rows($result);
                  if($rowcount!=0)
                  {
                    echo '<script>alert("Username alredy exists !!!")</script>';
                  }
                  else
                  {	
                    $ins="INSERT INTO members VALUES('$input1','$input2','$input3','$input4','$input5','$input6','$input7','$input8');";
                    if($conn->query($ins)===TRUE)
                    {
                        echo '<script>alert("Account created...")</script>';
                    }
                    else{
                      echo '<script>alert("Error occured !!!")</script>';
                    }	
                  }

                }
              ?>

        </div>
      </div>
    </div>
 
  <div class="extra">
    <p>&copy; ABC gym 2000-2020</p>
  </div>




<script>
			var modal = document.getElementById('id01');
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
			    if (event.target == modal) {
			        modal.style.display = "none";
			    }
			}
			</script>

</body>
</html>
<?php
    
?>