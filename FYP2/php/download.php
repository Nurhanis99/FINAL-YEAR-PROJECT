
<?php
session_start();
  
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con, 'fyp2');

$id = 0;
$update = false;
$visitorname = '';
    $phonenumber = '';
    $inasis ='';
    $reason = '';
    $date = '';
    $time = '';
    $files = '';
    $upload_pic ='';

// $prog_name = '';
// $prog_desc = '';
// $prog_date = '';
// $prog_venue = '';
// $prog_venue = '';
// $prog_poster = '';

//view visitor details
if(isset($_GET['view'])){
    $id = $_GET['view'];
    $update = true;
    $sql = "SELECT * FROM tbl_applypass WHERE id=$id";
    
    $querydisplay = mysqli_query($con, $sql);
    $result = mysqli_fetch_assoc($querydisplay);

    $visitorname = $result['visitorname'];
    $phonenumber = $result['phonenumber'];
    $inasis = $result['inasis'];
    $reason = $result['reason'];
    $date = $result['date'];
    $time = $result['time'];
    // $files = $result['file'];
    $upload_pic = $result['upload_pic'];

    // $prog_name = $result['prog_name'];
    // $prog_desc = $result['prog_desc'];
    // $prog_date = $result['prog_date'];
    // $prog_venue = $result['prog_venue'];
    // $prog_link = $result['prog_link'];
    // $prog_poster = $result['prog_poster'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Status Of Visitor Pass</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../style/download.css" media="download">
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
        padding: 10px;
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

  
   <h1 class="text-center pt-2" style="color: green; font-weight:bolder">STATUS APPROVED</h1>
    <div class="w3-container" style="padding:20px 100px">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <!-- <img class="w3-image w3-round-large" src="<?php echo $upload_pic; ?>" alt="Photo" width="500" height="400"> -->
            </div>
            <div class="w3-col m6">
                <div class="w3-card" style="padding: 20px">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" value="<?php echo $visitorname; ?>" placeholder="Enter visitor name" name="visitorname" readonly>
                        </div>
                        <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" value="<?php echo $phonenumber; ?>" placeholder="Enter phone number" name="phonenumber" readonly>
                        </div>
                        <div class="form-group">
                            <label>Inasis</label>
                            <input type="text" class="form-control" value="<?php echo $inasis; ?>" placeholder="Enter inasis" name="inasis" readonly>
                        </div>
                        <div class="form-group">
                            <label>Reason</label>
                            <textarea type="text" class="form-control" value="" placeholder="Enter visitor reason" name="reason" readonly> <?php echo $result['reason']; ?> </textarea>
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="date" class="form-control" value="<?php echo $date; ?>" placeholder="Enter date" name="date" readonly>
                        </div>
                        <div class="form-group">
                            <label>Time</label>
                            <input type="time" class="form-control" value="<?php echo $time; ?>" placeholder="Enter time" name="time" readonly>
                        </div>
                        <a class='btn btn-primary btn-sm' href="../php/statusVisitor.php" style="font-size:15px">< &nbsp Back</a>
                    </form>
                </div>
            </div>
        </div>
        
        <br>

        <div class="text-center">
        <button onclick="window.print();" class="btn btn-primary btn-sm" style="font-size:15px" id="print-btn">Print</button>
      </div>
    </div>

  

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