<?php
include 'db.php';
if(isset($_POST['submit']))
{
    $party_id = $_POST["party_id"];
    $name = $_POST["name"];
    $id = $_POST["id"];
    $status = $_POST["status"];
			//insert
			$insertqry="INSERT INTO leader ( id, party_id, name, status ) VALUES ('$id', '$party_id', '$name', 1)";
			mysqli_query($conn,$insertqry);

			header('Location: upload.php');
		}else
		{
			//display error
		}
	

?>