<?php 
session_start();

	include("connection.php");
	include("function-supervisor.php");

	$user_data = check_login($con);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="jquery.dataTables.min.css">
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
                        class="fas fa-tachometer-alt me-2"></i>OJT Students</a>
                <a href="attendance1.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Attendance</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold active"><i
                        class="fas fa-chart-line me-2"></i>Report of Students</a>
                <a href="grade1.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Grade of Students</a>
                <a href="daily1.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
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
                                <i class="fas fa-user me-2"></i> <?php echo $user_data['ojtname']; ?>
                               
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="profile1.php">Profile</a></li>
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
                    <h3 class="fs-4 mb-3" style="color: white; font-weight: bold; text-transform: uppercase; text-align: center;">OJT Students Report and Activity</h3>
                    <div class="col">
                    <form  method="get">
    <div class="row">
   
    <div class="mb-3 col-md-20">
    <div class="col-6 ">
    <label style="color: white; font-weight:bold;">Code</label>
     	<input type="text" name="search" placeholder="Enter code" class="form-control"  required><br>
    </div>


    <div class="col-6 mb-4">
        <input type="submit" name="submit" class="btn btn-primary "><br> 
        </div>
    </form>
                    <div class="table-responsive">
                    <div class="tbodyDiv">
                        <table class="table bg-white rounded shadow-sm  table-hover table-striped mb-0" id="table">
                        <thead class="sticky-top bg-dark" style=" color:#fff;">
                            <tr>
                            <td style="text-align:center;">code</td>
    <td style="text-align:center;">Name</td>
    <td style="text-align:center;">Date</td>
    <td style="text-align:center;">Title</td>
    <td style="text-align:center;">Link</td>
                            </tr>
                        </thead>

                        <tbody style="text-align: center;">
                            <?php
			$dbhost = "sql6.freesqldatabase.com:3306";
$dbuser = "sql6519008";
$dbpass = "XuMYHxSkS4";
$dbname = "sql6519008";
			
			$connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
			
			if ($connection->connect_error) {
				die("Connection failed:" .$connection->connect_error);
			}
				
            $search = $_GET['search'];
            $code = $user_data['code'];
			$sql = "SELECT * FROM link where code = '$search'";
			$result = $connection->query($sql);

			if (!$result) {
				die("Invalid query:" . $connection->error);
			}

			while ($row = $result->fetch_assoc()) {
				echo "<tr>
				<td>". $row["code"] . "</td>
        <td>". $row["ojtname"] . "</td>
        <td>". $row["date"] . "</td>
				<td>". $row["title"] . "</td>
				<td>". $row["links"] . "</td>
				
			</tr>";
			}
			
			?>
		</tbody>
                        
                    </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>
    <script src="jquery-3.5.1.js"></script>
    <script src="jquery.dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script>
     $(document).ready(function () {
    $('#table').DataTable({
        pagingType: 'full_numbers',
    });
});
    </script>
</body>

</html>