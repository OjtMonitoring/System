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
    <link rel="stylesheet" href="">
</head>
<body>
    <input type="text" name="text"/>
                   
                <input type="submit" name="submit" value="submit link"/>
   <a href="create-report-students.php">&#8592</a>
   <?Php
        $sql = "SELECT * FROM report WHERE id = 'text'";
        $res = mysqli_query($con, $sql);
        
        if(mysqli_num_rows($res) > 0){
            while($images = mysqli_fetch_assoc()){ ?>
                <div class="alb">
                    <img src="uploads/<?=$images['data']?>">
                </div>
           <?Php }
        }
   ?>
</body>
</html>