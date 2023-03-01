<?php
include 'db.php';
if(isset($_POST['submit']))
{

    $name = $_POST["name"];
    $id = $_GET["id"];
    $status = $_GET["status"];
			//insert
			$insertqry="INSERT INTO party ( id, name, status ) VALUES ('$id', '$name', 1)";
			mysqli_query($conn,$insertqry);

			header('Location: upload.php');
		}else
		{
			//display error
		}
	

?>