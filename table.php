<?php 
session_start();

	include("connection.php");
	include("function-supervisor.php");

	$user_data = check_login($con);

?>

<div class="table-responsive">
                    <div class="tbodyDiv">
                   


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
            <h1>Successfull graded</h1>";
    
   
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