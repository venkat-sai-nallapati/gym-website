<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>gym</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>contactus</title>
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
            <a class="nav-link" id="sai" href="#">Dummy1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="sai" href="#">Dummy2</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" id="sai" href="#">Dummy3</a>
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
        <h2 style="text-align: center;">Contact US</h2>
				<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima inventore doloribus dolorum maiores? Iure exercitationem cumque a facere laboriosam nisi nam sint repudiandae? Voluptatum impedit sit esse minus. Ullam, nam!
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et veritatis nulla obcaecati delectus! Voluptas iure repudiandae asperiores! Quis, quos! Numquam excepturi accusamus assumenda illum quis dolor. Doloribus nam laudantium laboriosam?
				</p>
				<p style="text-align: justify;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis mollitia deserunt excepturi voluptate earum ab vitae minima nihil sapiente totam? Veniam eius dolor necessitatibus modi magni consequuntur ipsum dolorum explicabo?</p>
				<p style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos error, maiores autem veritatis, nobis quas natus id esse soluta voluptatem fuga delectus est deserunt similique sunt non. Porro, quidem voluptatibus.</p>
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