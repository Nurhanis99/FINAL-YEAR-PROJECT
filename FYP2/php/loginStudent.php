<?php

if (isset($_POST["submit"])){
    include '../dbconnect.php';
    $email = $_POST["email"];
    $pass =  $_POST["pass"];
    $stmt = $conn->prepare("SELECT * FROM loginstudent WHERE email = '$email' AND pass = '$pass'");
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();
    if ($number_of_rows > 0) {
        session_start();
        $_SESSION["sessionid"] = session_id();
        echo "<script>alert('Login Success');</script>";
        echo "<script> window.location.replace('viewRider.php')</script>";
    } else {
        echo "<script>alert('Login Failed');</script>";
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Login Student</title>
        <script src="../javascript/script.js"></script>
    
    


</head>
<body>
        <div class="v78_147">
            <div class="v78_148"></div>
            <span class="v78_149">WELCOME TO HEP INASIS MANAGEMENT SYSTEM</span>
            <span class="v78_150">Login for Student</span>

            <form name="loginForm" class="w3-container" action="loginStudent.php" method="post">
            
            <span class="v20_17">Email</span>
            <div class="v20_19">
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
          </div>
          
            <span class="v20_18">Password</span>
            <div class="v22_22">
            <input type="password" placeholder="Enter Password" name="pass" id="password" required>
            </div>
           
            <div class="v23_22">
            <div class="row"> 
                            <input class="w3-input w3-border w3-round2" type="submit" name="submit" value="Log In">
                  </div>
                  </div>

            <div class="v78_152"></form></div>
            <span class="v78_153">Need Help? Call : +604-928 6666 or Email : itservices@uum.edu.my 
Copyright 2021 - Universiti Utara Malaysia</span><a href="signupVisitor.php"><span class="v23_25">Dont have an account ? Sign up</span></div>
         
               
                
 </body>
</html>




<style>


* {
  box-sizing: border-box;
}
.w3-round2 {
  width: 200px;
  height: 44px;
  background: rgba(255,255,255,1);
  opacity: 1;
  top: 101px;
  left: 500px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 20px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;
  border: 4px solid #000000;
box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}

.v78_147 {
  width: 100%;
  height: 982px;
  background: rgba(62,66,163,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v78_148 {
  width: 723px;
  height: 72%;
  background: url("../res/picuum.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  border: 1px solid rgba(0,0,0,1);
  overflow: hidden;
}
.v78_149 {
  width: 732px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 40px;
  left: 745px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 35px;
  opacity: 1;
  text-align: center;
}
/*text login for visitor */
.v78_150 {
  width: 732px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 159px;
  left: 752px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 28px;
  opacity: 1;
  text-align: center;
}

.v78_152 {
  width: 789px;
  height: 92px;
  background: rgba(255,250,250,1);
  opacity: 1;
  position: absolute;
  top: 616px;
  left: 723px;
  border: 1px solid rgba(0,0,0,1);
  overflow: hidden;
}
.v78_153 {
  width: 653px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 617px;
  left: 791px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 20px;
  opacity: 1;
  text-align: center;
}


.v78_156 {
  width: 200px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 308px;
  left: 990px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v20_17 {
  width: 75px;
  color: rgba(255,252,252,1);
  position: absolute;
  top: 250px;
  left: 831px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 24px;
  opacity: 1;
  text-align: center;
}
.v20_18 {
  width: 75px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 344px;
  left: 831px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 24px;
  opacity: 1;
  text-align: center;
}
.v23_25 {
  width: 391px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 422px;
  left: 1038px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 18px;
  opacity: 1;
  text-align: center;
}
.v20_19 {
  width: 559px;
  height: 44px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: absolute;
  top: 286px;
  left: 831px;
  border: 1px solid rgba(0,0,0,1);
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  overflow: hidden;
}
.v22_22 {
  width: 559px;
  height: 44px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: absolute;
  top: 380px;
  left: 831px;
  border: 1px solid rgba(0,0,0,1);
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  overflow: hidden;
}
.v23_22 {
  width: 200px;
  height: 44px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: absolute;
  top: 501px;
  left: 1014px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;
}
.v23_24 {
  width: 88px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 503px;
  left: 1064px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 26px;
  opacity: 1;
  text-align: center;
}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 0px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


</style>