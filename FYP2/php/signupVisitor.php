<?php
if (isset($_POST["submit"])) {
    include '../dbconnect.php';
    $email = $_POST["email"];
    $pass = ($_POST["pass"]);
    $sqlsignup = "INSERT INTO `tbl_loginvisitor`(`email`, `pass`) VALUES('$email', '$pass')";
     try {
        $conn->exec($sqlsignup);
        //if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
        //uploadImage($idno);
        //}
        echo "<script>alert('Sign Up Successful')</script>";
        echo "<script>window.location.replace('loginvisitor.php')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Sign Up Failed')</script>";
        //echo "<script> window.location.replace('newcustomer.php')</script>";

    //}
}
}

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap" >
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        <title>Visitor Registration</title>
    
</head>
<body>

<div class="v23_4"><div class="v23_5"></div>
<span class="v23_14">WELCOME TO HEP INASIS MANAGEMENT SYSTEM</span>
<span class="v23_15">Sign Up for Visitor</span>

<form name="loginForm" class="w3-container" action="signupVisitor.php" method="post">
<span class="v23_16">Email</span>
<div class="v23_18">
<input type="text" placeholder="Enter Email" name="email" id="email" required>
</div>

<span class="v23_17">Password</span>
<div class="v23_19">
<input type="password" placeholder="Enter Password" name="pass" id="password" required>
</div>

<div class="v23_28" >
<div class="row"> 
                <input class="w3-input w3-border w3-round" type="submit" name="submit" value="Sign Up">
            </div>
            </div>
            
<div class="v23_20"></form></div>
<span class="v23_21">Need Help? Call : +604-928 6666 or Email : itservices@uum.edu.my

Copyright 2021 - Universiti Utara Malaysia</span><a href="loginVisitor.php"><span class="v57_2">Already have an account ? Login</span></div>


</body></html> 
<br/><br/> 

<style>
* {
  box-sizing: border-box;
}
body {
  font-size: 14px;
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

.v23_4 {
  width: 100%;
  height: 982px;
  background: rgba(62,66,163,1);
  opacity: 1;
  position: relative;
  top: 0px;
  left: 0px;
  overflow: hidden;
}
.v23_5 {
  width: 723px;
  height: 72%;
  background: url("../res/picuum.jpg");
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
  opacity: 1;
  position: relative;
  top: 0px;
  left: 789px;
  border: 1px solid rgba(0,0,0,1);
  overflow: hidden;
}
.v23_14 {
  width: 732px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 40px;
  left: 38px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 35px;
  opacity: 1;
  text-align: center;
}
.v23_15 {
  width: 352px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 175px;
  left: 228px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 28px;
  opacity: 1;
  text-align: center;
}
.v23_16 {
  width: 75px;
  color: rgba(255,252,252,1);
  position: absolute;
  top: 250px;
  left: 97px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 24px;
  opacity: 1;
  text-align: center;
}
.v23_17 {
  width: 133px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 344px;
  left: 96px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 25px;
  opacity: 1;
  text-align: center;
}
.v23_18 {
  width: 559px;
  height: 44px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: absolute;
  top: 286px;
  left: 97px;
  border: 1px solid rgba(0,0,0,1);
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  overflow: hidden;
}
.v23_19 {
  width: 559px;
  height: 44px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: absolute;
  top: 380px;
  left: 96px;
  border: 1px solid rgba(0,0,0,1);
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  overflow: hidden;
}
/* 23_28*/
.w3-round {
  width: 200px;
  height: 44px;
  background: rgba(255,255,255,1);
  opacity: 1;
  position: absolute;
  top: 501px;
  left: 300px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 25px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
  overflow: hidden;
}
.v23_29 {
  width: 88px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 503px;
  left: 357px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 26px;
  opacity: 1;
  text-align: center;
}
.v23_20 {
  width: 789px;
  height: 92px;
  background: rgba(255,250,250,1);
  opacity: 1;
  position: absolute;
  top: 616px;
  left: 0px;
  border: 1px solid rgba(0,0,0,1);
  overflow: hidden;
}
.v23_21 {
  width: 653px;
  color: rgba(0,0,0,1);
  position: absolute;
  top: 617px;
  left: 68px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 20px;
  opacity: 1;
  text-align: center;
}
.v57_2 {
  width: 391px;
  color: rgba(255,255,255,1);
  position: absolute;
  top: 422px;
  left: 300px;
  font-family: Poppins;
  font-weight: Regular;
  font-size: 18px;
  opacity: 1;
  text-align: center;
}
</style>