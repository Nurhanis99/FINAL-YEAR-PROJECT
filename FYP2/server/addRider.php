<?php
session_start();

$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'fyp2');

if(isset($_POST['submitupload'])){
    $ridername = $_POST['ridername'];
    $phonenumber = $_POST['phonenumber'];
    $inasis = $_POST['inasis'];
    $message = $_POST['message'];
    $files = $_FILES['file'];

    print_r($ridername);
    echo "<br>";

    $filename = $files['name'];
    $fileerror = $files['error'];
    $filetmp = $files['tmp_name'];

    $fileext = explode('.', $filename);
    $filecheck = strtolower(end($fileext));

    $fileextstored = array('png', 'jpg', 'jpeg');

    if(in_array($filecheck, $fileextstored)){
        $destinationfile = 'upload_pic/'.$filename;
        move_uploaded_file($filetmp, $destinationfile);

        $q = "INSERT INTO `tbl_newriders`(`ridername`, `phonenumber`, `inasis`,`message`, `upload_pic`) 
        VALUES ('$ridername','$phonenumber','$inasis','$message','$destinationfile')";

        $query = mysqli_query($con, $q);

        if($query){
            $_SESSION['status'] = "New Rider Information Successfully Added!";
            header("Location: /FYP2/php/addRider.php");
        }
        else{
            echo "Ops, Something went wrong";
        } 
    }
}

/*if (isset($_POST["submit"])) {
    include_once ("../dbconnect.php");
    $name = $_POST["name"];
    $phonenumber = $_POST["phonenumber"];
    $address = $_POST["address"];
    $postcode = $_POST["postcode"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $inasis = $_POST["inasis"];
    $date = $_POST["date"];
    $sqlinsert = "INSERT INTO tbl_newvisitors (`name`, `phonenumber`, `address`, `postcode`, `city`, `state`, `inasis`, `date`) 
    VALUES('$name', '$phonenumber', '$address', '$postcode', '$city', '$state', '$inasis', '$date')";

     try {
        $conn->exec($sqlinsert);
        if (file_exists($_FILES["fileToUpload"]["tmp_name"]) || is_uploaded_file($_FILES["fileToUpload"]["tmp_name"])) {
        uploadImage($name);
        }
        echo "<script>alert('Registration Successful')</script>";
        echo "<script>window.location.replace('addNewVisitor.php')</script>";
    } catch (PDOException $e) {
        echo "<script>alert('Registration Failed')</script>";
        echo "<script> window.location.replace('loginvisitor.php')</script>";

    }
}
function uploadImage($name) {
    $target_dir = "../res/images/";
    $target_file = $target_dir . $name . ".png";
    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
}*/

?>