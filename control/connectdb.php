<?php

	$conn= new mysqli("localhost","root","","gym");
	if($conn->connect_error)
	{
	  	echo 'Cant connect to database';
	}			
?>