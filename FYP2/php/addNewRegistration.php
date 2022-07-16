<?php
session_start();

// $conn = mysqli_connect("localhost", "root", "", "inasis_management");
// $con = mysqli_connect('localhost', 'root');
// mysqli_select_db($con, 'inasis_management');

// if(isset($_POST['submitupload'])){
//     $prog_name = $_POST['prog_name'];
//     $prog_desc = $_POST['prog_desc'];
//     $prog_date = $_POST['prog_date'];
//     $prog_venue = $_POST['prog_venue'];
//     $prog_link = $_POST['prog_link'];
//     $files = $_FILES['file'];
//     if($_FILES["image"]["error"] === 4){
//         echo "<script> alert('Image Does Not Exist'); </script>";
//     }
//     else{
//         $fileName = $_FILES["file"]["name"];
//         $fileSize = $_FILES["file"]["name"];
//         $tmpName = $_FILES["file"]["tmp_name"];

//         $validImageExtension = ['jpg', 'png', 'jpeg'];
//         $imageExtension = explode('.', $fileName);
//         $imageExtension = strtolower(end($imageExtension));
//         if(!in_array($imageExtension, $validImageExtension)){
//             echo "<script> alert('Invalid Image Extension'); </script>";
//         }
//         else if($fileSize > 1000000000){
//             echo "<script> alert('Image Size is Too Large'); </script>";
//         }
//         else{
//             $newImageName = uniqid();
//             $newImageName .= '.' . $imageExtension;

//             move_uploaded_file($tmpName, 'upload_prog/' . $newImageName);
//             $query = "INSERT INTO tbl_prog(`prog_name`, `prog_desc`, `prog_date`, `prog_venue`, `prog_link`, `prog_poster`) 
//             VALUES ('$prog_name','$prog_desc','$prog_date ','$prog_venue','$prog_link','$newImageName')";
//             mysqli_query($con, $query);
            
//             if($query){
//                 $_SESSION['status'] = "New Programme Successfully Added!";
//                 header("Location: /Inasis-Management/new_programme.php");
//             }
//             else{
//                 echo "Ops, Something went wrong";
//             } 
//         }
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add New Registration</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Poppins", sans-serif
    }

    body, html {
        height: 100%;
        line-height: 1.8;
    }

    .w3-bar .w3-button {
        padding: 16px;
    }

    form{
        padding: 20px;
    }

    .form-group input{
        height: 38px;
    }

    .w3-button{
        width: 150px;
    }

    .alert {
        padding: 20px;
        background-color: green;
        color: white;
    }

    .closebtn {
        margin-left: 15px;
        color: white;
        font-weight: bold;
        float: right;
        font-size: 22px;
        line-height: 20px;
        cursor: pointer;
        transition: 0.3s;
    }

    .closebtn:hover {
        color: black;
    }
</style>
<body>
    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-indigo w3-card" id="myNavbar">
        <a href="../php/addNewRegistration.php" class="w3-bar-item w3-button" style="color: #faff00;"><i class="fa fa-angle-down"></i> + Add New Registration</a>
            <!-- <a href="../php/updateVisitor.php" class="w3-bar-item w3-button w3-bold"> Update Registration</a> -->
            <a href="../php/statusVisitor.php" class="w3-bar-item w3-button w3-bold"> Status Visitor Pass</a>
            <a href="../php/applyVisitor.php" class="w3-bar-item w3-button w3-bold"> Apply Visitor Pass</a>
            <!-- <a href="clubpage.php" class="w3-bar-item w3-button">Club Programme</a> -->
            
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="../php/loginVisitor.php" class="w3-bar-item w3-button">Logout</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
               onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!-- Form of adding new programme -->
    <div class="w3-container w3-white" style="padding:80px 100px" id="form">
        <div style="margin-top:40px">
            <form action="../server/addVisitor.php" method="POST" enctype="multipart/form-data">
                <?php
                if(isset($_SESSION['status'])){
                    ?>
                    <div class="alert">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                        <strong>Success.</strong> <?php echo $_SESSION['status']; ?>
                    </div>
                    <?php
                    unset($_SESSION['status']);
                }
                ?>
                <h3 class="w3-left" style="font-weight: bold;">Add New Visitor Registration</h3><br><br><br>
                <p>Please fill in all the details of the visitor</p>
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" value="" placeholder="Enter name" name="visitorname" required>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" value="" placeholder="Enter phone number" name="phonenumber" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <textarea type="text" class="form-control" value="" placeholder="Enter address" name="address" required></textarea>
                </div>
                <div class="form-group">
                    <label>Post Code</label>
                    <input type="text" class="form-control" value="" placeholder="Enter post code" name="postcode" required>
                </div>
                <div class="form-group">
                    <label>State</label>
                    <input type="text" class="form-control" value="" placeholder="Enter state" name="state" required>
                </div>
                <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" value="" placeholder="Enter city" name="city" required>
                </div>
                <div class="form-group">
                    <label>Inasis</label>
                    <input type="text" class="form-control" value="" placeholder="Enter inasis" name="inasis" required>
                </div>
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" class="form-control" value="" placeholder="Enter date" name="date" required>
                </div>
                <div class="form-group">
                    <label>Upload Visitor Picture</label>
                    <input type="file" class="form-control" value="" placeholder="Choose photo" name="file" accept=".jpg, .png, .jpeg" required>
                </div>
                <div>
                    <p>
                        <button class="w3-button w3-green w3-right" type="submit" name="submitupload" style="border-radius: 5px">SUBMIT</button>
                    </p>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <footer class="w3-center w3-indigo w3-padding-16">
        <p>Powered by</p>
        <p>
            Need Help? Call : +604-928 6666 or Email : itservices@uum.edu.my © Copyright 2021 - Universiti Utara Malaysia
        </p>
    </footer>
    <script>
        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");
        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }
        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }
    </script>
</body>
</html>