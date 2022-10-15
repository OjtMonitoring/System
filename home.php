
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OJT MONITORING</title>
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
   top: 90px;
   padding: 20px;
  padding-left: 100px;
   
}

.top .img-logo{
   position: absolute;
   left: 100px;
    top: 100px;
   left: 150px;
    
}
select{
    position: absolute;
    left: 800px;
    top: 455px;
    text-align: center;
}
label{
    position: absolute;
    left: 620px;
    top: 443px;
    font-size: 30px;
    
}
#select{
    background-color: gray ;
}

span{
    position: absolute;
    left: 590px;
    top: 730px;
    font-size: 15px;
}


@media(max-width:952px){
    .top .img-logo{
        font-size: 30px;
        width: 70%;
        height: 50%;
        
       
    }
    h2{
        top: 300px;
       margin: 0;
       padding: 0;
       
       
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
        left: 80px;
        top: 600px;
        font-size: 15px;
        
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
        </div>
        
            
                <form method="post">
                    <label style="color: white;">LOGIN AS:</label>
                    <select name="supervisor" id="select" size="1" onchange="window.location.href=this.value;">
                        <option value="#" >Select</option>
                        <option value="supervisor-login.php" >Supervisor</option>
                        <option value="login.php"  >OJT Students </option>
                    </select>

                   <span style="color: lightblue;"><i> No account yet? Please contact your coordinator</i></span> 
            
    </div>
</body>
</html>