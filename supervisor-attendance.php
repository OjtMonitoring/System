<?php 
session_start();

	include("connection.php");
	include("function-supervisor.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJT MONITORING</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="supervisor-attendance.css">
    
	
    
</head>
<body>
    <div class="container">

        <div class="top">
           
                <h2>OJT MONITORING SYSTEM</h2>
                <div class="att">
                    <h3>Attendance of OJT Students</h3>
                </div>
                <div class="img-logo">
                <img src="logo.png" height="50%" width="50%">
               
            </div>
            <div class="logo2">
                <img src="logo2.png" width="200" height="90" >
            </div>
                <h3>Supervisor</h3>
        </div>
        <div class="bottom">
          
        
            
              <form method="GET">
                <div class="search-bar">
                    <input type="text" placeholder="Search name" name="search" class="search" id="search">
                    <button name="submit" class="submit">Search</button>
                </div>
            </form>
           
        </div>
        
            <div class="bottom-end">
                <div class="button">
                <button><a href="supervisor-OjtStudents.php">Back</a></button> 
                    <button><a href="supervisor-all-report.php">All Report of Students</a></button>                 
                    <button><a href="daily1.php">Daily Report</a></button>
                    <button><a href="changepass-supervisor.php">Change Password</a></button>
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

$name = $_GET['search'];
$cd = $user_data['code'];
 $code = mysqli_real_escape_string($dbc, $_GET['code']);
$query = "SELECT * FROM attendance where code='$name' ";
$res = mysqli_query($dbc,"SELECT * FROM attendance where code='$name' ");
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
    <td>code</td>
    <td>NAME</td>
    <td>date</td>
    <td>TIMEIN</td>
  </tr>

<?php

while($data = mysqli_fetch_array($res))
{
?>

  <tr>
    <td><?php echo $data['code']; ?></td>
    <td><?php echo $data['ojtname']; ?></td>
    <td><?php echo $data['date']; ?></td>
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