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
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="attendance.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Attendance</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i
                        class="fas fa-chart-line me-2"></i>Create Report</a>
                <a href="myReport.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-paperclip me-2"></i>My Report</a>
                
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
                                <li><a class="dropdown-item" href="changepass.php">Change Password</a></li>
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
                    <h3 class="fs-4 mb-3" style="color: white; font-weight: bold; text-transform: uppercase; text-align: center;">Create Report</h3>
                    <div class="col">
                    
                    <?php
                  date_default_timezone_set("Asia/Manila");
                
                  $time = date("g:i:s A") ."\n";
                    ?>

                    <div class="container" >
                        <div class="row">
                            <div class="col-md-6 offset-md-3" >
                                 <div class="signup-form" >
<?php
$dbhost = "sql6.freesqldatabase.com:3306";
$dbuser = "sql6519008";
$dbpass = "XuMYHxSkS4";
$dbname = "sql6519008";
$conn = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);

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
  if(isset($_POST['submit']) && ($_POST['link']) == true && empty($_POST['link']) == false){
        $url = $_POST['link'];
        if(filter_var($url, FILTER_VALIDATE_URL) == true){
          $link = $_POST['link'];
          $title = $_POST['title'];
	      $da = $_POST['date'];
    	  $ojtname = $user_data['ojtname'];
    	  $code = $user_data['code'];
    	  $supervisorname = $user_data['supervisorname'];

          $query = "SELECT * FROM link WHERE date = '$da' and code='$code'";
          $result=mysqli_query($conn,$query);
          $count=mysqli_num_rows($result);
          if($count> 0){
            echo "<style>
            h1{
                font-size:12px;
                heigth:auto;
                width:100%;
                background-color:#fde8ec;
                padding:10px 0;
                text-align: center;
            }
            </style>
        <h1>You already submit!</h1>
        ";
          }else{
              $sql = "INSERT INTO link (date,code,ojtname,supervisorname, title, links,hours) VALUES ('$da', '$code', '$ojtname', '$supervisorname', '$title', '$link','$time')";
              if($conn->query($sql)){
                echo "<style>
            h1{
                font-size:12px;
                heigth:auto;
                width:100%;
                background-color: #b1ffb1;
                padding:10px 0;
                text-align: center;
            }
            </style>
        <h1>Link Submitted</h1>
        ";
              }else{
                echo "<style>
                h1{
                    font-size:12px;
                    heigth:auto;
                    width:100%;
                    background-color:#fde8ec;
                    padding:10px 0;
                    text-align: center;
                }
                </style>
            <h1>Failed Submit</h1>
            ";
              }
          }
        } else{
            echo "<style>
            h1{
                font-size:12px;
                heigth:auto;
                width:100%;
                background-color:#fde8ec;
                padding:10px 0;
                text-align: center;
            }
            </style>
        <h1>Invalid Link</h1>
        ";
        }
         
     }
?>
                                    <form method="post" class="mt-10 border p-4" style="border-radius: 10px; box-shadow: 5px 8px 5px black; ">
                                        <h4 class="mb-5" style="color:white; font-weight:bold;">Create Your Activity and Report</h4>
                                         <p style="color:white; font-size:10px;  background:#777; padding:7px 5px"> Note: One link per day and make sure a link is accessable! <span style="color:red;">*</span></p>
                                    <div class="row">
                                        <div class="mb-3 col-md-6">
                                            <label style="color: white; font-weight:bold;">Title<span class="text-danger">*</span></label>
                                            <input type="text" name="title" class="form-control" placeholder="Title of report" required>
                                        </div>

                                        <div class="mb-3 col-md-6">
                                            <label style="color: white; font-weight:bold;">Link<span class="text-danger">*</span></label>
                                            <input type="text" name="link" class="form-control" placeholder="Enter your link" required>
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label style="color: white; font-weight:bold;">Date<span class="text-danger">*</span></label>
                                            <input type="date" name="date" id="date" class="form-control" style="cursor: pointer;" required>
                                        </div>

                                        
                        
                                        <div class="col-md-12">
                                            <button class="btn btn-primary float-end" name="submit">Submit</button>
                                        </div>
                                    </div>
                                    </form>
                                       
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
        $(document).ready(function(){
         
                var dtToday = new Date();

                var month = dtToday.getMonth() +1;
                var day = dtToday.getDate();
                var year = dtToday.getFullYear();
                if(month < 10)
                    month = '0' + month.toString();
                if(day < 10)
                    day ='0' + day.toString();
                    
                var maxDate = year + '-' + month + '-' + day;    

                $('#date').attr('min', maxDate);
         
        })
    </script>
</body>

</html>