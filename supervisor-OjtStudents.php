<?php 
session_start();

	include("connection-supervisor.php");
	include("function-supervisor.php");

	$user_data = check_login($connection);

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
    background-color: black     ;
  
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
   
    width: 1500px;
    padding: 30px;
    margin: 20px 0;
    
    
   
}
.bottom-end .button button{
    height: 60px;
    border-radius: 7px;
    font-size: 18px;
    transition: 0.5s ease;
    max-width: 100%;
    margin: 0 10px;
    padding: 0 100px;
}
.bottom-end .button button a{
    text-decoration: none;
   color: black;
}
.bottom-end .button button:hover{
    background-color: rgb(94, 15, 15);
}
 table{
    margin: 0;
    position: absolute;
    
    top: 400px;
    
    
}
.bottom-end table .table{
   
    position: absolute;
    
}
.bottom-end .table-mid table .table thead, tr, th ,td{
    margin: 0;
    border: 1px solid white;
    text-align: center;
    padding: 10px;
    color: white;
}
.bottom-end .table-mid table thead, th{
    background-color: orange;
   color: black;
} 
.top h3{
    color: white;
    position: absolute;
    right: 65px;
}


.bottom .search-bar{
    margin: 0;
    position: absolute;
    right: 90px;
    top: 180px;
    
}
.search-bar .search{
   
   padding: 0 10px;
   height: 30px;
}
.search-bar .submit{
    position: absolute;
    height: 30px;
    padding: 5px;
    font-size: 12px;
    background-color: rgba(100, 100, 100, 0.2);
    color:wheat;
    
}
a{
    text-decoration: none;
    color: white;
}


@media(max-width:752px){
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
                <h3>Supervisor</h3>
        </div>
        <div class="bottom">
            <h2 style="color:white; font-size:28px; padding:0 30px; position:absolute; left:18px; top: 200px;"> <?php echo $user_data['username']; ?></h2>
        

            <form method="GET">
                <div class="search-bar">
                    <input type="text" placeholder="Search name" name="search" class="search" id="search">
                    <button name="submit" class="submit">Search</button>
                </div>
            </form>              
        </div>
        
            <div class="bottom-end">
                <div class="button">
                    <button type="button" class="btn btn-primary btn-lg" ><a href="supervisor-attendance.php">Attendance</a></button> 
                    <button type="button" class="btn btn-primary btn-sm" ><a href="supervisor-all-report.php">All Report of Students</a></button> 
                    <button type="button" class="btn btn-primary btn-sm" ><a href="supervisor-all-grade.php">All Grade of students</a></button> 
                    
                    <button type="button" class="btn btn-primary btn-lg" ><a href="daily1.php">Daily Report</a></button>
                    <button type="button" class="btn btn-primary btn-lg" ><a href="changepass-supervisor.php">Change Password</a></button>
                    <button type="button" class="btn btn-primary btn-lg" ><a href="supervisor-logout.php">Log out</a></button>
                </div>
                <div class="table-mid">
                
                </div>
            </div>        
    </div>
    <?Php
    include 'connection.php';
    $result = mysqli_query($con,"SELECT * FROM d");
    ?>
   
    
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
$cd = $user_data['username'];
 $code = mysqli_real_escape_string($dbc, $_GET['username']);
$query = "SELECT * FROM ojtstudent where supervisorname='$cd' ";
$res = mysqli_query($dbc,"SELECT * FROM ojtstudent where supervisorname='$cd' ");
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
    
    <td>NAME</td>
    <td>code</td>
    
  </tr>

<?php

while($data = mysqli_fetch_array($res))
{
?>

  <tr>
    
    <td><?php echo $data['ojtname']; ?></td>
    <td id="code"><?php echo $data['code']; ?> </td>
    <td>
         <button id="copy-btn">copy text</button>
    </td>
    
    
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

                                

    <script type="text/javascript">
    $(document).ready(function(){
        $('#search').keyup(function(){
            search_table($(this).val());
        });
        function search_table(value){
            $('#myTable tr').each(function(){
                var found = 'false';
                $(this).each(function(){
                    if($(this).text().toLowerCase().indexOf(value.toLowerCase())>=0)
                    {
                        found='true';
                    }
                });
                if(found=='true'){
                    $(this).show();
                }
                else{
                    $(this).hide();
                }
            });
        }
    });
</script>

<script>
        function copyText(htmlElement){
    if(!htmlElement){
        return;
    }
    let elementText = htmlElement.innerText;
    let inputElement = document.createElement('input');
    inputElement.setAttribute('value', elementText);
    document.body.appendChild(inputElement);

    inputElement.select();
    document.execCommand('copy');
    inputElement.parentNode.removeChild(inputElement);
}
document.querySelector('#copy-btn').onclick = function(){
    copyText(document.querySelector('#code'));
}
    </script>
</body>
</html>