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
    <title>View Rider Information</title>
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
        <a href="../php/viewRider.php" class="w3-bar-item w3-button" style="color: #faff00;"><i class="fa fa-angle-down"></i> &nbsp View Rider Information</a>
            <!-- <a href="../php/updateVisitor.php" class="w3-bar-item w3-button w3-bold"> Update Registration</a> -->
            <!-- <a href="" class="w3-bar-item w3-button w3-bold" style="color: #faff00;"> Status Visitor Pass</a> -->
            <!-- <a href="../php/applyVisitor.php" class="w3-bar-item w3-button w3-bold"> Apply Visitor Pass</a> -->
            <!-- <a href="clubpage.php" class="w3-bar-item w3-button">Club Programme</a> -->
            
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="../php/loginStudent.php" class="w3-bar-item w3-button">Logout</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->
            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium"
               onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>

    <!-- table of the status visitor pass -->
    <div class="w3-container w3-white" style="padding:350px 0px">
        <div class="w3-display-middle w3-card" style="width:70%">
            <!-- Tabs Apply Visitor-->
            <div id="Activities" class="w3-container w3-white w3-padding-16 myLink">
                <h3 class="w3-left w3-bold">List of Rider Information </h3><br>
                <div class="w3-display-bottom w3-white" style="size: 5px 5px">
                    <!-- <a href="confirmation_committee_1.php" class="w3-bar-item w3-btn w3-indigo w3-right" style="border-radius: 5px"><i class="fa fa-plus w3-margin-right"></i>New Programme</a><br> -->
                </div><br>
                <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white w3-center" id="table">
                <thead>
                    <!-- <th>Poster</th> -->
                    <th style="text-align:center">Name</th>
                    <th style="text-align:center">Phone Number</th>
                    <th style="text-align:center">Inasis</th>
                    <th style="text-align:center">Message</th>
                    <th style="text-align:center">Action</th>
                </thead>
                    <tbody>
                        <?php
                            $con = mysqli_connect('localhost', 'root');
                            mysqli_select_db($con, 'fyp2');

                            $displayquery = "SELECT * FROM tbl_newriders";
                            $querydisplay = mysqli_query($con, $displayquery);
                                    
                            while($result = mysqli_fetch_array($querydisplay)){
                                ?>
                                <tr>
                                    <!-- <td> <img src=" <?php echo $result['upload_pic']; ?> " height="100px" width="100px"> </td> -->
                                    <td style="text-align:center"> <?php echo $result['ridername']; ?> </td>
                                    <td style="text-align:center"> <?php echo $result['phonenumber']; ?> </td>
                                    <td style="text-align:center"> <?php echo $result['inasis']; ?> </td>
                                    <td style="text-align:center"> <?php echo $result['message']; ?> </td>
                                    <!-- <td style="color: green; text-align:center;"><b>Approved</b></td> -->
                                    <td style="text-align:center">
                                        <a class='btn btn-success btn-sm viewbtn' href="../php/viewDetailRider.php? view=<?php echo $result['id']; ?>">View Details</a>
                                    </td>
                                </tr>                            
                                <?php
                            }
                        ?> 
                    </tbody>
                </table>
            </div>
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
         // Tabs
         function openLink(evt, linkName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("myLink");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
            }
            document.getElementById(linkName).style.display = "block";
            evt.currentTarget.className += " w3-red";
        }
        // Click on the first tablink on load
        document.getElementsByClassName("tablink")[0].click();

        // $(document).ready(function() {
        //     $('.viewbtn').on('click', function(){
        //         $().modal('show');
        //     });
        // });
    </script>
</body>
</html>