<?php

	$servername = "localhost:3307";
	$username = "root";
	$password = "athsaw$19";
	$dbname = "sparks_bank";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>