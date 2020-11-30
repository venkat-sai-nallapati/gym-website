<?php
session_start();
if(isset($_SESSION["user"])){

}
else{
  header("Location: index.php", true, 301);
}
?>
<!doctype html>
<html>
<head>
<title>dashboard1</title>
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
    <h1 style="color:white;">Welcome partial admin, <?php echo $_SESSION["user"]?></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">    
          <form action="" method="post">
            <input style="color:black;" type="submit" name="logout" value="logout">
          </form>
        </li>
      </ul>
</nav>

<div class="container">
    <p>*As you are partial admin, you can only view.</p>
    <div id="adj1">
      <a class="headbutton" href="control/view.php" target="myiframe">View</a>

    </div>
    <div id="adj2">
      <iframe name="myiframe" id="ifra"></iframe>
    </div>

</div>


<?php
if(isset($_POST['logout']))
{
  unset($_SESSION["isvalidated"]);
  unset($_SESSION["user"]);
  session_unset();
  session_destroy();
  echo '<script>alert("logged out !!!")</script>';
  header("Location: index.php", true, 301);
}
?>
</body>
</html>
