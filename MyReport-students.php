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
    <link rel="stylesheet" href="MyReport-students.css">
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
        <h2 style="color:white; font-size:28px; padding:0 20px; position:absolute; left:18px; top: 200px;"> <?php echo $user_data['ojtname']; ?></h2>

           
        </div>
        
            <div class="bottom-end">
                <div class="button">
                     <button><a href="student-attendance.php">Attendance</a> </button> 
                    <button><a href="create-report-students.php">Create Report</a></button> 
                    <button><a href="MyReport-students.php">My Report</a></button>
                      <button><a href="changepass-student.php">Change Password</a> </button>
                    <button><a href="logout.php">Log out</a></button>
                </div>
                <div class="table-mid">
                <?php

$dbc = mysqli_connect("sql6.freesqldatabase.com:3306", "sql6519008", "XuMYHxSkS4", "sql6519008");
if(!$dbc) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
exit();
}
$db = "sql6519008";
$dbs = mysqli_select_db($dbc, $db);
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($dbc));
exit();
}
$cd = $user_data['code'];
 $code = mysqli_real_escape_string($dbc, $_GET['code']);
$query = "SELECT * FROM link where code='$cd' ";
$res = mysqli_query($dbc,"SELECT * FROM link where code='$cd' ");
$row = mysqli_fetch_array($res, $dbc);



if(mysqli_query($dbc, $query)){










} 
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($dbc);
}
?>


<center>
    <br><br><br><br>
    <body style="background-color:lightgray">
    
<table class="table " id="myTable">
  <tr>
    <td>Date</td>
    <td>Title</td>
    <td>File</td>
    <td>Grade</td>
    
  </tr>

<?php

while($data = mysqli_fetch_array($res))
{
?>

  <tr>
    
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['title']; ?></td>
    <td><?php echo $data['links']; ?></td>
    <td><?php echo $data['grade']; ?></td>
    
    
  </tr>
  
<?php
}
?>
</table>
                </div>
            </div>
            
    </div>
</body>
</html>