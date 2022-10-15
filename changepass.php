<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="" />
    <style>


h2 {
	text-align: center;
	background-color: #b1ffb1;
	color: #40754C;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 100%;
	padding: 10px;
	margin: 0 auto;
	border-radius: 5px;
}
label {
	color: #000;
	font-size: 15px;
	padding: 10px;
}


h1 {
	text-align: center;
	color:#af4242;
}


#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 10px;
  margin-top: 5px;
  border-radius: 6px;
  border: 2px solid #ccc;
}

#message p {
  padding: 0 35px;
  font-size: 12px;
}
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}


.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
.container .box{
	margin: auto;
	width: auto;
	height: auto;
	background-color:#232a2b;
	padding: 35px;
	
	border: 2px solid #ccc;
}
#message h3{
	font-size: 14px;
}
.sub{
	border: 1px solid black;
	background-color: #555;
	color: white;
	font-weight: bold;
	transition: 0.3s ease;
}
.sub:hover{
	background-color: #444;
}  
        :root {
  --main-bg-color: #f4f5f5;
  --main-text-color: #eceaf5;
  --second-text-color: #f8faf5;
  --second-bg-color: #f5eef3;
}


.rounded-full {
  border-radius: 100%;
}

#wrapper {
  overflow-x: hidden;
  background: #232a2b;
}

#sidebar-wrapper {
  min-height: 100vh;
  margin-left: -15rem;
  -webkit-transition: margin 0.25s ease-out;
  -moz-transition: margin 0.25s ease-out;
  -o-transition: margin 0.25s ease-out;
  transition: margin 0.25s ease-out;
}

#sidebar-wrapper .sidebar-heading {
  padding: 0.875rem 1.25rem;
  font-size: 1.2rem;
}

#sidebar-wrapper .list-group {
  width: 15rem;
}

#page-content-wrapper {
  min-width: 100vw;
}

#wrapper.toggled #sidebar-wrapper {
  margin-left: 0;
}

#menu-toggle {
  cursor: pointer;
}

.list-group-item {
  border: none;
  padding: 20px 30px;
}

.list-group-item.active {
  background-color: #6B9A9E;
  color: var(--main-text-color);
  font-weight: bold;
  border: none;
}
span{
  color: black;
}
tbody{
max-height: 10vh;
overflow: auto;
}


@media (min-width: 768px) {
  #sidebar-wrapper {
    margin-left: 0;
  }

  #page-content-wrapper {
    min-width: 0;
    width: 100%;
  }

  #wrapper.toggled #sidebar-wrapper {
    margin-left: -15rem;
  }
}

    </style>
    <title>OJT MONITORING</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-secondary" id="sidebar-wrapper">
            
                
            
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom" style="color: white;">OJT <span>MONITORING</span></div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="attendance.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Attendance</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Create Report</a>
                <a href="myReport.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>My Report</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle" style="color: white;"></i>
                    <img src="logo.png" width="100px" alt="">
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" style="background: white;">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white;">
                                <i class="fas fa-user me-2"></i> <?php echo $user_data['ojtname']; ?>
                               
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="#">Change Password</a></li>
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        
                    </div>

                    <div class="col-md-3">
                       
                    </div>

                    <div class="col-md-3">
                        
                    </div>

                    <div class="col-md-3">
                       
                    </div>
                </div>
                <div class="row my-5">
                    <h3 class="fs-4 mb-3" style="color: white; font-weight: bold; text-transform: uppercase; text-align: center;">Change Password</h3>
                    <div class="col">
                    <div class="container">
                    <div class="row">
                            <div class="col-md-6 offset-md-3" >
                            <?php
include("connection.php");

if(isset($_POST['submit'])){
    $old = $_POST['old'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];
    $code = $user_data['code'];

    if($new == $confirm){
        $query="SELECT * FROM ojtstudent WHERE password = '$old' and code = '$code'";
        $result=mysqli_query($con,$query);
        $count=mysqli_num_rows($result);
        if($count>0){
            $query="UPDATE ojtstudent SET password = '$new' WHERE code = '$code'";
            $result=mysqli_query($con,$query);
            echo "<style>
			h2{
				font-size:12px;
				heigth:auto;
				width:100%;
				padding:10px 0;	
			}
		</style>
		
		<h2>Password change successfully<br>Please refresh this page for login again</h2>
			</style>";
			
        }else{
			echo "<style>
				h1{
					font-size:12px;
					heigth:auto;
					width:100%;
					background-color:#fde8ec;
					padding:10px 0;
				}
			    </style>
			<h1>Old Password does not match</h1>
			";	
            }
        }else{
            echo "<style>
		    h1{
			font-size:12px;
			heigth:auto;
			width:100%;
			background-color:#fde8ec;
			padding:10px 0;	
		    }
	        </style>
	
	<h1>New Password & Confirm Password does not match</h1>
	";
    }
	
	
}
?>
		<div class="box">
        <form action="" class="mt-10 border p-4" style="border-radius: 10px; box-shadow: 5px 8px 5px black; " method="POST">
    <div class="col">
    <div class="mb-3 col-md-20">
    <label style="color: white; font-weight:bold;">Old Password</label>
     	<input type="password" name="old" placeholder="Old Password" class="form-control"  required><br>
    <label for="pass1" style="color: white; font-weight:bold;">New Password</label>
     	<input type="password" name="new" placeholder="New Password" class="form-control" id="psw"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
    <label for="pass2" style="color: white; font-weight:bold;">Confirm New Password</label>
     	<input type="password" name="confirm" placeholder="Confirm New Password" id="psw" class="form-control" required><br>

     	<input type="submit" name="submit" class="btn btn-primary "><br> 
    </form>
	<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
    </div>
	</div>
    </div>
	</div>
                    
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>

<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
	</script>
</body>

</html>