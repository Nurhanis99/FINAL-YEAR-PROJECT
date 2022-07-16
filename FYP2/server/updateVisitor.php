<?php
include_once '../server/dbconnect.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE tbl_applypass set visitorname='" . $_POST['visitorname'] . "', phonenumber='" . $_POST['phonenumber'] . "', inasis='" . $_POST['inasis'] . "', reason='" . $_POST['reason'] . "' ,date='" . $_POST['date'] . "' ,time='" . $_POST['time'] . "' WHERE visitorname='" . $_POST['visitorname'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM tbl_applypass WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>

<br>
visitor Name: <br>
<input type="text" name="visitorname" class="form-control" value="<?php echo $row ['visitorname']; ?>" >

<br>
phone number Name :<br>
<input type="text" name="phonenumber" class="form-control" value="<?php echo $row ['phonenumber']; ?>" >

<br>
inasis:<br>
<input type="text" name="inasis" class="form-control" value="<?php echo $row ['inasis']; ?>" >

<br>
reason :<br>
<input type="text" name="reason" class="form-control" value="<?php echo $row ['reason']; ?>" >

<br>
date:<br>
<input type="text" name="date" class="form-control" value="<?php echo $row ['date']; ?>" >

<br>
time:<br>
<input type="text" name="time" class="form-control" value="<?php echo $row ['time']; ?>" >



<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>

