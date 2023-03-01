<?php
session_start();
require('db.php');


if(isset($_POST) && !empty($_POST['id'])){

	   // select image to delete    
	   $sql_select = "SELECT image FROM imp_clippings WHERE id = ".$_POST['id'];
	   $select_result = $conn->query($sql_select);
	    $row = $select_result->fetch_row();
		$image_name = $row[0];

		// code to unlink(delete)  image physically from folder 
		$unl = unlink("./important Clippings/".$image_name);

		$sql = "DELETE FROM imp_clippings WHERE id = ".$_POST['id'];
		$conn->query($sql);


		$_SESSION['success'] = 'Image Deleted successfully.';
		header("Location: ./imp_clippings.php");
}else{
	$_SESSION['error'] = 'Please Select Image or Write title';
	header("Location: ./imp_clippings.php");
}


?>