<?php

	$conn = mysqli_connect('localhost','Xmen143','!ya)BL9tSvK-!Kch','bank');

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>