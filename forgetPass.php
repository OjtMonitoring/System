<!DOCTYPE html>
<html>
<head>
	<title>OJT MONITORING</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="logo.png" type="image/x-icon"/>
    <style>
        .image-container{
    background: url('./img.jpg') center no-repeat;
    background-size: cover;
    height: 100vh;
}

.form-container{
    background-color: #272222;
    display: flex;
    justify-content: center;
}

.form-box{
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 100vh;
}

.form-box h4{
    font-weight: bold;
    color: #fff;
}

.form-box .form-input {
    position: relative;
}

.form-box .form-input input{
    width: 100%;
    height: 40px;
    margin-bottom: 20px;
    border: none;
    border-radius: 5px;
    outline: none;
    background: white;
    padding-left: 45px;
}

.form-box .form-input span{
    position: absolute;
    top: 8px;
    padding-left: 20px;
    color: #777;
}

.form-box .form-input input::placeholder{
    padding-left: 0px;
}

.form-box .form-input input:focus,
.form-box .form-input input:valid{
    border-bottom: 2px solid #dc3545;
}

.form-box input[type="checkbox"]:not(:checked) + label:before{
    background: transparent;
    border: 2px solid #fff;
    width: 15px;
    height: 15px;
}

.form-box .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before{
    background-color: #dc3545;
    border: 0px;
}

.form-box button[type="submit"]{
    border: none;
    cursor: pointer;
    width: 150px;
    height: 40px;
    border-radius: 5px;
    background-color: rgb(19, 18, 18);
    color: rgb(255, 254, 254);
    font-weight: bold;
    transition: 0.5s;
}

.form-box button[type="submit"]:hover{
    -webkit-box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
    -moz-box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
    box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
}

.forget-link, .register-link, .login-link{
    color: #fff;
    font-weight: bold;
    
}

.forget-link:hover, .register-link:hover, .login-link:hover{
    color: #d1bdbd;
    
}




    </style>
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
						<h4>OJT MONITORING SYSTEM</h4>
					</div>
          <label style="font-size: 20px; color: white; font-weight:bold;">Forget Password</label>
          
          <div class="box">
<?php
$dbhost = "sql6.freesqldatabase.com:3306";
$dbuser = "sql6519008";
$dbpass = "XuMYHxSkS4";
$dbname = "sql6519008";
$conn = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);
 $username = $_POST['user'];
		$email = $_POST['mail'];
        $subject = "Your Password";
if(!$conn) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($conn));
exit();
}
$db = "sql6519008";
$dbs = mysqli_select_db($conn, $db);
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($conn));
exit();
}
	


  if(isset($_POST['submit'])){

           	$query = "select * from ojtstudent where ojtname = '$username'and email = '$email' limit 1";
			$result = mysqli_query($conn, $query);
			$data = mysqli_fetch_assoc($result);
            $count=mysqli_num_rows($result);
            
          if($count> 0){
           $name = $data['ojtname'];
            $password = $data['password'];
            $body = "Hello $name" . PHP_EOL . "". PHP_EOL . "Your Password:$password" . PHP_EOL . "Username:$name";
             
             $url = "https://script.google.com/macros/s/AKfycbyjgNLKkv8YiaEcTuUy2V1Q0ChmZxigF_oyf9vzBOeyBeNvDlf5u77KGMLJshPs-Jc/exec";
            $ch = curl_init($url);
            curl_setopt_array($ch, [
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_POSTFIELDS => http_build_query([
                  "recipient" => $_POST['mail'],
                  "subject"   => $subject,
                  "body"      => $body
               ])
            ]);
            $result = curl_exec($ch);
           
            
            echo "<style>
			h1{
				font-size:12px;
				heigth:auto;
				width:100%;
				padding:10px 0;
				color:green;
				background-color: #b1ffb1;
			}
		</style>
		
		<h1>Send email successfully</h1>
			</style>";
    }
    
           else{
            echo "<style>
            h1{
                font-size:12px;
                heigth:auto;
                width:100%;
                background-color:#fde8ec;
                padding:10px 0;
                color:red;
            }
            </style>
        <h1>Invalid Email and Username!</h1>
        ";
        }
        }
?>
          <form action="" class="mt-10 border p-4" style="border-radius: 10px; box-shadow: 5px 8px 5px black; " method="POST">
              <div class="text-left mb-1">
          <p style="color:white; font-size:10px;  background:#777; padding:7px 5px"> If you forget your password please fill up this form <span style="color:red;">*</span></p>
          </div>
          <div class="text-left mb-1">
   <label style="color: white; font-weight:bold; ">Email Address</label>
   </div>
        <input type="email" name="mail" placeholder="Email Address" class="form-control"  required><br>
        <div class="text-left mb-1">
   <label style="color: white; font-weight:bold; ">Username</label>
   </div>
        <input type="text" name="user" placeholder="Username" class="form-control" required><br>

        <input type="submit" name="submit" class="btn btn-primary form-control mb-3"><br> 

        <div class="text-left mb-3">
      
							<a href="login.php" class="register-link">Back to Login</a>
						
   </form>
    </div>
				</div>
                </div>
			
			</div>

			<div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
		</div>
	</div>

</body>
</html>