<?php
session_start();

include_once ("dbconnect.php");

if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $sql = "DELETE FROM tbl_applypass WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        $_SESSION['status'] = "Applying Visitor Pass Deleted.";
        header("Location: /FYP2/php/viewVisitor.php");
    }
    else{
        echo "Error deleting visitor pass" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>