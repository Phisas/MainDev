<?php 
	include "config.php";

	$sql = "SELECT * FROM login WHERE username = '".$username."' AND password = '".$password."'";

	$result = mysqli_query($db,$sql);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo json_encode("Login Success");
	}else{
		echo json_encode("There was an Error" .mysqli_error($result));
	}

?>