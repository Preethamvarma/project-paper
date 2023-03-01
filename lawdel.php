<?php
session_start();
require('db.php');


if(isset($_POST) && !empty($_POST['id'])){

	   // select image to delete    
	   $sql_select = "SELECT image FROM law_order WHERE id = ".$_POST['id'];
	   $select_result = $conn->query($sql_select);
	    $row = $select_result->fetch_row();
		$image_name = $row[0];

		// code to unlink(delete)  image physically from folder 
		$unl = unlink("./law/".$image_name);

		$sql = "DELETE FROM law_order WHERE id = ".$_POST['id'];
		$conn->query($sql);


		$_SESSION['success'] = 'Image Deleted successfully.';
		header("Location: ./law.php");
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: ./law.php");
}


?>