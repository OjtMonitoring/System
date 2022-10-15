


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
    background-color:white;
  
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
input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}
form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%, -50%);
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
        <h2 style="color:white; font-size:28px; padding:0 20px; position:absolute; left:18px; top: 200px;"> <?php echo $data['ojtname'];  ?></h2>

            
        </div>
        
            <div class="bottom-end">
                
                
                
               
                <form action="" method="post">
    <label>Email Address</label>
     	<input type="email" name="mail" placeholder="Enter email" required><br>
    <label>Username</label>
     	<input type="text" name="user" placeholder="Enter username" required><br>
    

     	<input type="submit" name="submit"><br>

          
    </form>
            
<?php
$dbhost = "sql6.freesqldatabase.com:3306";
$dbuser = "sql6519008";
$dbpass = "XuMYHxSkS4";
$dbname = "sql6519008";
$conn = new mysqli ($dbhost,$dbuser,$dbpass,$dbname);
 $username = $_POST['user'];
		$email = $_POST['mail'];
        $subject = "Your Password";
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
		

  if(isset($_POST['submit'])){
           
           	$query = "select * from supervisor where username = '$username'and email = '$email' limit 1";
			$result = mysqli_query($conn, $query);
			$data = mysqli_fetch_assoc($result);
            $count=mysqli_num_rows($result);
            

		
		
			
		          



          if($count> 0){
           $name = $data['username'];
            $password = $data['password'];
            $body = "Hello $name" . PHP_EOL . "". PHP_EOL . "Your Password:$password" . PHP_EOL . "Username:$name";
             
             $url = "https://script.google.com/macros/s/AKfycbyjgNLKkv8YiaEcTuUy2V1Q0ChmZxigF_oyf9vzBOeyBeNvDlf5u77KGMLJshPs-Jc/exec";
            $ch = curl_init($url);
            curl_setopt_array($ch, [
               CURLOPT_RETURNTRANSFER => true,
               CURLOPT_FOLLOWLOCATION => true,
               CURLOPT_POSTFIELDS => http_build_query([
                  "recipient" => $_POST['mail'],
                  "subject"   => $subject,
                  "body"      => $body
               ])
            ]);
            $result = curl_exec($ch);
            
            
            echo '<div style="color:green;">Send Email</div>';
    }
    
           else{
            echo '<div style="color:red;">Not Found!</div>';
        }
        }
        
       
   
              
              
             
               
               
               
               
               
               
			
			
		
	
      
            
        
     
  
?>

    </div>
    
</body>
</html>

