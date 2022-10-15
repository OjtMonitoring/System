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
  
    <link rel="stylesheet" href="">
    
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins',sans-serif;
}

.container{
    height: 100vh;
    width: 100%;
    background-color:black;
  
}
h2{
    color: #fff;
    font-size: 50px;
    text-align: center;
   position: relative;
   top: 25px;
   padding: 20px;
  padding-left: 20px;
   
}
.top{
    height: 20%;
    width: 100%;
}

.top .img-logo{
   position: absolute;
   
    top: 30px;
   left: 30px;
    
}

.top .logo2{
    position: absolute;
   
    top: 30px;
   right: 30px;

}
.bottom{
    height: 10%;
    width: 100%;
}


.bottom-end{
    height: 60%;
    width: 100%;
    margin: 0;
    padding: 0;
}
.bottom-end .button{
    display: flex;
    flex-direction: column;
    align-items: left;
    justify-content: left;
    width: 300px;
    padding: 30px;
    margin: 20px 0;
    
   
}
.bottom-end .button button{
    height: 50px;
    border-radius: 7px;
    font-size: 18px;
    transition: 0.5s ease;
   
}
.bottom-end .button button a{
    text-decoration: none;
   color: black;
}
.bottom-end .button button:hover{
    background-color: orange
}
.bottom-end .table-mid table{
    color: white;
    position: absolute;
    left: 350px;
    top: 305px;
    width: 900px; 
    
}
.bottom-end .table-mid table thead, tr, th ,td{
    width: 1000px;
    border: 1px solid white;
    text-align: center;
    padding: 10px;
}
.bottom-end .table-mid table th{
    background-color: orange;
    color: black;
} 
.top h3{
    color: white;
    position: absolute;
    right: 65px;
}
.bottom .remaining-time{
    position: absolute;
    top: 170px;
    left: 1050px;
    
}

.searchbar{
    margin: 0;
    position: absolute;
    right: 100px;
}
.searchbar .search{
    border-radius: 20px;
   padding: 0 10px;
}
.top .att{
   position: relative;
    top: 120px;
   right: 495px;
   
}


@media(max-width:952px){
    .top .img-logo{
        font-size: 30px;
        width: 150px;
        height: 100px;
        
       
    }
    .top .logo2 img{
       
        width: 100px;
        height: 50px;
        
    
    }
    h2{
        top: 100px;
       margin: 0;
       padding: 0;
       font-size: 18px;
       
    }
    select{
        position: relative;
        left: 210px;
        top: 330px;
        text-align: center;
    }
    label{
        position: absolute;
        left: 110px;
        top: 480px;
        font-size: 20px;
    }
    .container{
        height: 100vh;
        width: 100%;
    }
    body{
        height: 100px;
        width: 100%;
    }
    span{
        position: absolute;
        left: 60px;
        top: 570px;
        font-size: 15px;
        
    }
    .bottom .remaining-time{
        position: absolute;
        top: 155px;
        left: 400px;
    }
    .bottom .time{
        color: white;
        position: relative;
        top: 50px;
        left: 220px;
        font-size: 14px;
    }
    .bottom input{
        height: 40px;
        width: 60px;
        border-radius: 6px;
    }
    .bottom span{
        color: white;
        position: relative;
        top:50px;
        left: 50px;
        font-size: 14px;
    }
    h3{
        color: white;
        position: absolute;
        left: 180px;
        top: 40px;
        font-size: 16px;
    }
    .bottom-end .button{
       
        display: inline;
        position: relative;
        top: 50px;
        left: 25px;
        max-width: 200px;
        padding: 20px;
        margin: 20px 0;
    }
    .bottom-end .button button{
        height: 50px;
        border-radius: 7px;
        font-size: 16px;
        transition: 0.5s ease;
       padding: 10px;
       margin: 0 5px;
    }
    .bottom-end .table-mid table{
        color: white;
        position: absolute;
        left: 28px;
      top: 300px;
        width: 200px;
        padding: 0 15px;   
    }
    .bottom-end .table-mid table tr, th ,td{
        width: 1000px;
        border: 1px solid white;
        text-align: center;
        padding: 0 30px;
    }
}

	    #grade{
	        color:black;
	        width: 50px;
	        border:none;
	       
	    }
	    #sub{
	        color:black;
	       width: 70px;
	        border:none;
	        font-size:14px;
	        margin-top:3px;
	    }
	</style>
    
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
                    <button name="submit">search</button>
                    <input type="date" placeholder="Ex. 09/15/2022" name="date" class="search" id="date">
                          
                </div>
            </form>
           
        </div>
        
            <div class="bottom-end">
                <div class="button">
                <button><a href="supervisor-OjtStudents.php">Back</a></button> 
                    <button><a href="supervisor-all-report.php">All Report of Students</a></button>                 
                    <button><a href="supervisor-report.php">Daily Report</a></button>
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
    <body style="background-color:lightgray">
    
<table class="table " id="myTable">
  <tr>
    <td>code</td>
    <td>Name</td>
    <td>Date</td>
    <td>Title</td>
    <td>Link</td>
    <td>Grade</td>
    <td>Edit</td>
  </tr>

<?php

while($data = mysqli_fetch_array($res))
{
?>

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
         <button name="button">submit</button>
           </form>
       </td>
          

    
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
     echo '<div style="color:red;">Already graded</div>';
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
    
    
    echo '<div style="color:green;">Successfully</div>';
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
</body>
</center>



                </div>
            </div>
            
    </div>
        
   
</body>

</html>