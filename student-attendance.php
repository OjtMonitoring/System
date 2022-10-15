<?php 
session_start();

	include("connection.php");
	include("functions.php");
	

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJT MONITORING</title>
    <link rel="stylesheet" href="student-attendance.css">
    
	
    
</head>
<body>
    <div class="container">

        <div class="top">
           
                <h2>OJT MONITORING SYSTEM</h2>
                <div class="img-logo">
                <img src="logo.png" height="50%" width="50%">
               
            </div>
            <div class="logo2">
                <img src="logo2.png" width="200" height="90" >
            </div>
                <h3>OJT STUDENTS</h3>
        </div>
        <div class="bottom">
        <h2 style="color:white; font-size:28px; padding:0 20px; position:absolute; left:18px; top: 200px;"> <?php echo $user_data['ojtname'];  ?></h2>

           
        </div>
        
            <div class="bottom-end">
                <div class="button">
                    <button><a href="student-attendance.php">Attendance</a></button> 
                    <button><a href="create-report-students.php">Create Report</a> </button> 
                    <button><a href="MyReport-students.php">My Report</a></button>
                     <button><a href="changepass-students.php">Change Password</a> </button> 
                    <button><a href="logout.php">Log out</a></button>
                </div>
                <div class="table-mid">
                   <?php


$cd = $user_data['code'];

$query = "SELECT * FROM attendance where code='$cd' ";
$res = mysqli_query($con,"SELECT * FROM attendance where code='$cd' ");
$row = mysqli_fetch_array($res, $con);



if(mysqli_query($con, $query)){










} 
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($con);
}
?>


<center>
    <br><br><br><br>
    <body style="background-color:lightgray">
    
<table border="2">
  <tr>
    <td>DATE</td>
    <td>NAME</td>
    <td>CODE</td>
    <td>TIMEIN</td>
  </tr>

<?php

while($data = mysqli_fetch_array($res))
{
?>

  <tr>
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['ojtname']; ?></td>
    <td><?php echo $data['code']; ?></td>
    <td><?php echo $data['timein']; ?></td>
  </tr>
  
<?php
}
?>
</table>
</body>
</center>


<php
mysqli_close($dbc);
?>
                </div>
            </div>
            
    </div>
</body>
</html>