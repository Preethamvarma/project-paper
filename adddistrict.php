<?php
include 'db.php';
if(isset($_POST['submit']))
{
    
    $leader_id = $_POST["leader_id"];
    $name = $_POST["name"];
    $id = $_POST["id"];
    $status = $_POST["status"];
			//insert
			$insertqry="INSERT INTO district ( id, leader_id, name, status ) VALUES ('$id', '$leader_id', '$name', 1)";
			mysqli_query($conn,$insertqry);

			header('Location: upload.php');
		}else
		{
			//display error
		}
	

?>