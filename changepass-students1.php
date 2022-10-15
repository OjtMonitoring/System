<?php
include("db.php");

if(isset($_POST['submit'])){
    $old = $_POST['old'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];

    if($new == $confirm){
        $query="SELECT * FROM ojtstudent WHERE password = '$old'";
        $result=mysqli_query($con,$query);
        $count=mysqli_num_rows($result);
        if($count>0){
            $query="UPDATE ojtstudent SET password = '$new'";
            $result=mysqli_query($con,$query);
            echo "<style>
			h2{
				font-size:12px;
				
				heigth:auto;
				width:38%;
				
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
					width:38%;
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
			width:38%;
			background-color:#fde8ec;
			padding:10px 0;
			
			
		}
	</style>
	
	<h1>New Password & Confirm Password does not match</h1>
	";
    }
	
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body {
	background: #1690A7;
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	
}

h2 {
	text-align: center;
	background-color: #b1ffb1;
	color: #40754C;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
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
	background-color: #D4EDDA;
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
    </style>
</head>
<body>
    <div class="container">
		<div class="box">
    <form action="" method="post">
    <label>Old Password</label>
     	<input type="password" name="old" placeholder="Old Password"  required><br>
    <label for="pass1">New Password</label>
     	<input type="password" name="new" placeholder="New Password" id="psw"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br>
    <label for="pass2">Confirm New Password</label>
     	<input type="password" name="confirm" placeholder="Confirm New Password" id="psw" required><br>

     	<input type="submit" name="submit" class="sub"><br> 
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
