<?php

	$con = mysqli_connect("mysql9.000webhost.com", "a8191505_aalee", "10letterspw", "a8191505_ihdb");

	$foodDescrip = $_POST["foodDescrip"];
	$foodType = $_POST["foodType"];
	$foodAmount = $_POST["foodAmount"];

	$statement = mysqli_prepare($con, "INSERT INTO food (foodDescrip, foodType, foodAmount) VALUES (?, ?, ?)");
	mysqli_stmt_bind_param($statement, "ssd", $foodDescrip, $foodType, $foodAmount);
	mysqli_stmt_execute($statement);

	$response = array();
	$response["success"] = true;

	echo json_encode($response);
?>