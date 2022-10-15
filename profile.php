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
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active" ><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="attendance.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-project-diagram me-2"></i>Attendance</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold "><i
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
                                <li><a class="dropdown-item" href="#">Profile</a></li>
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
                    <h3 class="fs-4 mb-3" style="color: white; font-weight: bold; text-transform: uppercase; text-align: center;">Profile Information</h3>
                    <div class="col">
                    
                    <section class="vh-50" style="background-color: #232a2b; border:2px solid white; border-radius:10px; box-shadow:5px 5px 5px white;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4  text-center text-white " 
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem; background: grey;">
              <img src="logo.png"
                alt="Avatar" class="img-fluid my-5" style="width: 80px;" />
              <h5 style="color: black;"> <?php echo $user_data['ojtname']; ?></h5>
              <p style="color: black;">OJT STUDENT</p>
              
            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-2">
                  <div class="col-8 mb-2">
                    <h6>Email</h6>
                    <p class="text-muted"><?php echo $user_data['email']; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted"><?php echo $user_data['number']; ?></p>
                  </div>
                  <div class="col-6 mb-3">
                    <h6>School</h6>
                    <p class="text-muted"><?php echo $user_data['school']; ?></p>
                  </div>
                  <div class="col-6  mb-3">
                    <h6>Supervisor</h6>
                    <p class="text-muted"><?php echo $user_data['supervisorname']; ?></p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
                        
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


</body>

</html>