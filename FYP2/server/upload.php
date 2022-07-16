<?php 

if (isset($_POST['submitupload']) && isset($_FILES['file'])) {
	include "../server/dbconnect.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['file']['name'];
	$img_size = $_FILES['file']['size'];
	$tmp_name = $_FILES['file']['tmp_name'];
	$error = $_FILES['file']['error'];

	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: /FYP2/php/applyVisitor.php?error=$em");
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'upload_pic/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO images(image_url) 
				        VALUES('$new_img_name')";
				mysqli_query($conn, $sql);
				header("Location: /FYP2/php/statusVisitor.php");
			}else {
				$em = "You can't upload files of this type";
		        header("Location: /FYP2/php/applyVisitord.php?error=$em");
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: /FYP2/php/applyVisitor.php?error=$em");
	}

}else {
	header("Location: /FYP2/php/applyVisitor.php");
}