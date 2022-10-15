<?php 
session_start();

	include("connection.php");
	include("function-supervisor.php");

	$user_data = check_login($con);

?>
<?php
  
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="<?php echo $sec;?>" URL="<?php echo $page;?>">
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="icon" href="logo.png" type="image/x-icon"/>
    
    <style>
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
.tbodyDiv{
max-height: clamp(2em,100vh,550px);
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
                <a href="ojtstudent.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>OJT Students</a>
                <a href="attendance1.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Attendance</a>
                <a href="report1.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Report of Students</a>
                <a href="grade1.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Grade of Students</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i
                        class="fas fa-paperclip me-2"></i>Daily Report</a>
                
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
                                <i class="fas fa-user me-2"></i> <?php echo $user_data['username']; ?>
                               
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="changepass1.php">Change Password</a></li>
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
                    <h3 class="fs-4 mb-3" style="color: white; font-weight: bold; text-transform: uppercase; text-align: center;">STUDENT REPORT</h3>
                    <div class="col">
                    <form  method="GET">
    <div class="row">
   
    <div class="mb-3 col-md-20">
    <div class="col-6 mb-2">
    <label style="color: white; font-weight:bold;">Code</label>
     	<input type="text" name="search" placeholder="Enter code" class="form-control"  required><br>
    </div>

    <div class="col-6 mb-2">
        <label  style="color: white; font-weight:bold;">Date</label>
        <input type="date" name="date"  class="form-control"  required><br>
    </div>

    <div class="col-6 mb-2">
        <input type="submit" name="submit" class="btn btn-primary " value="Search"><br> 
        
        </div>
    </form>
    
   
                    </div>
                    
                    <div class="table-responsive">
                    <div class="tbodyDiv">
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

$date = $_GET['date'];
$name = $_GET['search'];

$code = mysqli_real_escape_string($dbc, $_GET['date']);
$query = "SELECT * FROM link where code='$name' and date='$date'";
$res = mysqli_query($dbc,"SELECT * FROM link where code='$name' and date='$date'");
$row = mysqli_fetch_array($res, $dbc);



if(mysqli_query($dbc, $query)){



} 
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($dbc);
}
?>


<center>
    <br><br><br><br>
    <body style="background-color:white">
    
<table class="table bg-white rounded shadow-sm  table-hover table-striped " id="myTable">
    <thead class="bg-dark" style="color:#fff; text-align:center;">
  <tr>
    <td>code</td>
    <td>Name</td>
    <td>Date</td>
    <td>Title</td>
    <td>Link</td>
    <td>Grade</td>
    <td>Edit</td>
  </tr>
    </thead>
<?php

while($data = mysqli_fetch_array($res))
{
?>
<tbody style="text-align:center;">
  <tr>
    <td><?php echo $data['code']; ?></td>
    <td><?php echo $data['ojtname']; ?></td>
    <td><?php echo $data['date']; ?></td>
    <td><?php echo $data['title']; ?></td>
    <td><?php echo $data['links']; ?></td>
    <td><?php echo $data['grade']; ?></td>
    <td>
            <form method="POST">
            <input type="text" name="grade" id="grade" maxlength="3" required>
         <button name="button" class="btn btn-primary ">submit</button>
         
           </form>
       </td>
</tbody>          

    
  <?php


$dbc = mysqli_connect("sql6.freesqldatabase.com:3306", "sql6519008", "XuMYHxSkS4", "sql6519008");
if(!$dbc) {
die("DATABASE CONNECTION FAILED:" .mysqli_error($dbc));
exit();
}
$db = "sql6519008";
$dbs = mysqli_select_db($dbc,$db );
if(!$dbs) {
die("DATABASE SELECTION FAILED:" .mysqli_error($dbc));
exit();
}
if(isset($_POST['button'])){



$code =$data['code'];
$date = $data['date'];

           	$query = "select * from link where code = '$code'and date = '$date' limit 1";
			$result = mysqli_query($dbc, $query);
			$userdata = mysqli_fetch_assoc($result);
            $count=mysqli_num_rows($result);
            

          if($count> 0){

 $grade=$userdata['grade'];

if(!empty($grade)){
    echo "<style>
                h1{
                    font-size:12px;
                    heigth:auto;
                    width:100%;
                    background-color:#fde8ec;
                    padding:10px 0;
                    text-align: center;
                    color:red;
                }
                </style>
            <h1>Already graded</h1>";
   
}
else{
  $id = $data['id'];
$link = $data['links'];
$grade = $_POST['grade'];
$code =$data['code'];
$date = $data['date'];
$query = "Update link SET grade='$grade' where code='$code' and date='$date' ";
if(mysqli_query($dbc, $query)){


           $code =$data['code'];


           	$query = "select * from ojtstudent where code = '$code' limit 1";
			$result = mysqli_query($dbc, $query);
			$userdata = mysqli_fetch_assoc($result);
            $count=mysqli_num_rows($result);
            

          if($count> 0){


            $tg = $userdata['totalgrade'];
            $ti = $userdata['totalitem'];
            $item ="1";
            $grade = $_POST['grade'];
            
            $ftg =$tg+$grade;
            $fti = $ti+$item;
            
            $ave = $ftg / $fti;
             $code =$data['code'];
            $query = "Update ojtstudent SET totalgrade='$ftg', totalitem ='$fti', ave ='$ave' where code='$code' ";
          if(mysqli_query($dbc, $query)){
                
                echo "<style>
                h1{
                    font-size:12px;
                    heigth:auto;
                    width:100%;
                   background-color: #b1ffb1;
                    padding:10px 0;
                    text-align: center;
                    color:green;
                }
                </style>
            <h1>Successfull graded Please refresh this page for display the grade</h1>";
    $url="https://";
  
}
            
            
            
            
            
 
          }
 
 
} 
else{
echo "ERROR: Could not able to execute". $query." ". mysqli_error($dbc);
}
mysqli_close($dbc);
} 
          }
  



}

?>
 <?php
}
?>       

</table>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>