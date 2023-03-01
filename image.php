<?php require_once("db.php");?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
	<title>Telangana State Police, Intelligence</title>
</head>
<body>

<div class="container_display">
<div class="row">
    <div class="col-sm">
    <a href="search.php"><button class="btn btn-success">Click here to Search Images</button></a><br>
    </div>
    <div class="col-sm">
	<form action="download1.php" method="post" enctype="multipart/form-data">
    <input type="submit" name="createzip" class="btn btn-primary"  value="Download as ZIP" />
    </form>
	<br><br><br>
    </div>
    
  </div>

	<table cellpadding="10">
		<tr>
			<th> Image</th>
			<th>Title</th>
			<th>Image Name</th>
		</tr>
		<?php 
		
		if(isset($_POST['submit']))
{

$party_id = @$_POST['party_id'];
$leader_id = @$_POST['leader_id'];
$img_name = @$_POST['img_name'];
$fdate = @$_POST['fdate'];
$tdate = @$_POST['tdate'];

		
		$condition = '';

				if ($party_id)
					$condition = $condition . " party_id = $party_id ";

				if ($leader_id) {
					if ($condition) $condition = $condition . " AND leader_id = $leader_id ";
					else $condition = $condition . " leader_id = $leader_id ";
				}
				if ($img_name) {
					if ($condition) $condition = $condition . " AND img_name = '$img_name' ";
					else $condition = $condition . " img_name = '$img_name' ";
				}
				if ($fdate && $tdate) {
					if ($condition) $condition = $condition . " AND date BETWEEN '$fdate' AND '$tdate' ";
					else $condition = $condition . " date BETWEEN '$fdate' AND '$tdate' ";
				}
				

				

				// echo "CONDITION: " . $condition;

				// $res = mysqli_query($conn, "SELECT * FROM image WHERE ( party_id = $party_id OR leader_id = $leader_id ) OR ( date BETWEEN '$fdate' AND '$tdate' ) OR img_name = '$img_name'   ");
				$str = "SELECT * FROM image WHERE " . $condition;

				// echo '<br />' . $str;

				$res = mysqli_query($conn, $str);
			} else {
				echo 'error loading file';
			}

		
		while($row=mysqli_fetch_array($res)) 

			{
				echo '<tr> 
                  <td><img src="upload/'.$row['image'].'" height="200" width="200"></td> 
                  <td>'.$row['image'].'</td> 
				  <td><strong>'.$row['img_name'].'</strong></td>
                  <td><a href="download.php?id='.$row['id'].'"><button class="btn-primary download_btn">Download</button></a>
               
                  </td> 


				</tr>';
			}
		

 ?>
		
	</table>
	
</div>

</body>
</html>