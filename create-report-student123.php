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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
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
    background-color: black;
  
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
.bottom span{
        color: white;
        position: relative;
        top:40px;
        left: 50px;
        font-size: 20px;
}
.bottom .time{
    color: white;
    position: relative;
    top: 40px;
    left: 800px;
    font-size: 20px;
}
.bottom input{
    height: 40px;
    border-radius: 6px;
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
    position: absolute;
   
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
    background-color: rgb(94, 15, 15);
}
h3{
    color: white;
    position: absolute;
    left: 1340px;
}
.bottom .remaining-time{
    position: absolute;
    top: 170px;
    left: 1050px;
    
}
input{
    position:relative;
    float:right;
    padding:10px;
}
    </style>
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
                     <button><a href="student-attendance.php">Attendance</a> </button> 
                    <button><a href="create-report-students.php">Create Report</a></button> 
                    <button><a href="MyReport-students.php">My Report</a></button>
                      <button><a href="changepass-students.php">Change Password</a> </button> 
                    <button><a href="logout.php">Log out</a></button>
                </div>
                <?Php
                
                date_default_timezone_set("Asia/Manila");
                  $date = date("Y-m-d ") ."\n";
                  $time = date("g:i:s A") ."\n";
                ?>
                <form method="post">
                    Title:
                    <input type="text" name="title" placeholder="title" required/>
                    <input type="text" name="text" placeholder="submit link" required/>
                    <input type="submit" name="submit" value="Submit link"/>
                    <input type="date" name="da" id="date" placeholder="submit link" required/>
                </form>
                
                
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
  if(isset($_POST['submit']) && ($_POST['text']) == true && empty($_POST['text']) == false){
        $url = $_POST['text'];
        if(filter_var($url, FILTER_VALIDATE_URL) == true){
            $link = $_POST['text'];
          $title = $_POST['title'];
	      $da = $_POST['da'];
    	  $ojtname = $user_data['ojtname'];
    	  $code = $user_data['code'];
    	  $supervisorname = $user_data['supervisorname'];

          $query = "SELECT * FROM link WHERE date = '$da' and code='$code'";
          $result=mysqli_query($conn,$query);
          $count=mysqli_num_rows($result);
          if($count> 0){
              echo '<div style="color:red;">You already Submit!</div>';
          }else{
              $sql = "INSERT INTO link (date,code,ojtname,supervisorname, title, links,hours) VALUES ('$da', '$code', '$ojtname', '$supervisorname', '$title', '$link','$time')";
              if($conn->query($sql)){
                echo '<div style="color:green;">link submit</div>';
              }else{
                '<div style="color:red;">failed</div>';
              }
          }
        } else{
            echo '<div style="color:red;">Sorry, Invalid link</div>';
        }
         
     }


?>


    </div>
    
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

 