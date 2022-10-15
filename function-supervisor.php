<?php

function check_login($con)
{

	if(isset($_SESSION['password']))
	{

		$password = $_SESSION['password'];
		$query = "select * from supervisor where password = '$password' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("Location: supervisor-login.php");
	die;

}
