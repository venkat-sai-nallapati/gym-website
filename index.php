<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>home</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Branch release -->
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
        <h2 style="text-align: center">ABC gym</h2>
				<br>
				<p style="text-align: justify;">A gymnasium, also known as a gym, is a covered location for athletics. The word is derived from the ancient Greek gymnasium. They are commonly found in athletic and fitness centers, and as activity and learning spaces in educational institutions. "Gym" is also slang for "fitness center", which is often an area for indoor recreation. A gym may be open air as well. A gym is a place with a number of equipments and machines used by the people to do exercises.</p>
				<br>
				<p><b style="color:blue;">For USER login : username - jaisu, password - 123</b></p>
				<br>
				<p><b style="color:gold;">For ADMIN login : username - admin2, password - 12345</b></p>
				<br>
				<p style="text-align: justify;">Gymnasia apparatuses such as barbells, jumping board, running path, tennis-balls, cricket field, and fencing area are used as exercises. In safe weather, outdoor locations are the most conducive to health. Gyms were popular in ancient Greece. Their curricula included self-defense, gymnastica medica, or physical therapy to help the sick and injured, and for physical fitness and sports, from boxing to dancing to skipping rope.</p>
				
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