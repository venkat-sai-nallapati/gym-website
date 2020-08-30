<?php
session_start();
include('control/connectdb.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>user</title>
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
    <h1 style="color:white;">Welcome <?php echo $_SESSION["user"]?></h1>
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

<div id="f1">
<?php
  $user=$_SESSION['user'];
   $ins="SELECT id,nam,timing1,timing2,comments FROM members WHERE username='$user' ";
   $result=mysqli_query($conn,$ins);
   $rowcount=mysqli_num_rows($result);
   if($rowcount==0)
   {
         echo '<script>alert("This account might be deleted.please consult admin.")</script>';
        header( "refresh:5;url=index.php" );
   }
   else{
    $result = $conn->query($ins);
    $row = $result->fetch_assoc();
    echo "<br> <h2 style='color:red'>  Hello ".$row['nam']."</h2><br>";
    echo 'My morning work out time : '.$row['timing1']." a.m <br>";
    echo 'My evening work out time : '.$row['timing2']." p.m <br> <br>";
    echo '<marquee width="100%" direction="left" height="40px" scrollamount="20" style="border: 1px solid white">'.'<b style="color:lightblue">'.$row['comments'].'</b>'.'. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis mollitia deserunt excepturi voluptate earum ab vitae minima nihil sapiente totam? Veniam eius dolor necessitatibus modi magni consequuntur ipsum dolorum explicabo?'.'</marquee>';
   }
?>
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