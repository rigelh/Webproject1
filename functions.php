<?php

function check_login($con)
{
	//check if SESSION exists
	if (isset($_SESSION['user_id'])) {
		//if it exists check if its real
		$id = $_SESSION['user_id'];
		$query = "select * from users where user_id = '$id' limit 1";

		$result = mysqli_query($con, $query);
		if ($result && mysqli_num_rows($result) > 0) {
			//if it is check the user data, if not go to redirect login
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: login.php");
	die;
}


function random_num($length)
{
	$text = "";
	if ($length < 5) {
		$length = 5;
	}

	$len = rand(4, $length);

	for ($i = 0; $i < $len; $i++) {
		$text .= rand(0, 9);
	}

	return $text;
}
