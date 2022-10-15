<?php 

session_start();

	include("connection.php");
	include("functions.php");

    $Message =  "";

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$ojtname = $_POST['ojtname'];
		$code = $_POST['password'];

		if(!empty($ojtname) && !empty($code) && !is_numeric($ojtname))
		{

			//read from database
			$query = "select * from ojtstudent where ojtname = '$ojtname' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $code)
					{

						$_SESSION['password'] = $user_data['password'];
						header("Location: attendance.php");
						die;
					}
				}
			}
			
			  $Message =  "<style>
            h1{
                font-size:12px;
                heigth:auto;
                width:100%;
                background-color:#fde8ec;
                padding:10px 0;
                color:red;
            }
            </style>
        <h1>Login failed! Invalid Username or Password!</h1>
        ";
		}else
		{
		
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>OJT MONITORING</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="icon" href="logo.png" type="image/x-icon"/>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-6 form-container">
				<div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
					<div class="logo mt-5 mb-3">
						<img src="./logo.png" width="150px">
					</div>
					<div class="heading mb-3">
						<h4>OJT Monitoring</h4>
						<h4 style="font-size: 14px;">OJT STUDENTS</h4>
					</div>

                    <?php echo $Message;?>
					<form method="post">
						<div class="form-input">
							<span><i class="fa fa-user"></i></span>
							<input type="text" placeholder="Username" name="ojtname" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" placeholder="Password" name="password" required>
						</div>
						<div class="row mb-3">
							<div class="col-6 d-flex">
								
							</div>
							<div class="col-6 text-right">
								<a href="forgetPass.php" class="forget-link">Forget password</a>
							</div>
						</div>
					
						<div class="text-left mb-3">
							<button type="submit" class="btn">Login</button>
						</div>
						
						<div class="text-white">
							<a href="home1.php" class="register-link">Back to Home</a>
						</div>
					</form>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
		</div>
	</div>
</body>
</html>