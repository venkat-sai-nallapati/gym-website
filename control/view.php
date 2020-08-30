<?php
include('connectdb.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>view-info</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h2>VIEW</h2>
<hr>
<?php
   $ins="SELECT id,nam,role_mem,timing1,timing2,comments FROM members";
   $result = $conn->query($ins);
   if ($result->num_rows > 0) 
   {
       echo "<table><tr><th>ID</th><th>NAME</th><th>Role</th><th>time1</th><th>time2</th><th>comments</th></tr>";
       while($row = $result->fetch_assoc()) 
       {
           echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nam"]. "</td><td>" . $row["role_mem"]. "</td><td>" . $row["timing1"]. "</td><td>" . $row["timing2"]. "</td><td>" . $row["comments"]. "</td></tr>";
       }
       echo "</table>";
     }
    else 
    {
      echo '<script>alert("No results found...!")</script>';
    }
?>


</body>
</html>