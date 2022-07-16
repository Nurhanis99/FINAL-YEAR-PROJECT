<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hhtp://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/1dd357b823.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css">

    <title>Homepage1</title>

</head>

<style>

@media screen and (min-width: 1920px) {
    body {
        max-width: 60%;
        margin: auto;
    }
}
/* Split the screen in half */
.split {
  height: 100%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Control the left side */
.left {
  left: 0;
  background-color: #3E42A3;
}

/* Control the right side */
.right {
  right: 0;
  background-color: #3E42A3;
}

/* If you want the content centered horizontally and vertically */
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  
}

/* Style the image inside the centered container, if needed */
.centered img {
  width: 770px;
height: 718px;
position: relative;
}

h1, h2{
    font-size: 30px; 
    color: rgba(255,255,255,1);
}

.button {
  font-size: 20px;
  background-color: #FFFFFF;
  border: none;
  color: black;
  padding: 15px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 16px;
  border-top-left-radius: 40px;
  border-top-right-radius: 40px;
  border-bottom-left-radius: 40px;
  border-bottom-right-radius: 40px;
}
</style>

<body>
<div class="split left">
  <div class="centered">
    <img src="../res/picuum.jpg" >

  </div>
</div>

<div class="split right">
  <div class="centered">
  <h1>WELCOME TO HEP INASIS MANAGEMENT SYSTEM</h1>
    <h2>Choose your role to login in our system</h2>
    <a href="newproduct.php"  class="button">VISITOR</a> <br>
    <br>
    <br>
    <br>
    <br>
    <button class="button">STAFF</button>
    
  <br>
  <br>
            <span class="help">Need Help? Call : +604-928 6666 or Email : itservices@uum.edu.my 
                Copyright 2021 - Universiti Utara Malaysia</span>
    
  </div>
</div>
</body>
</html>