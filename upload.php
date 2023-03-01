<?php

include 'db.php';
if(isset($_POST['submit']))
{
	$extension=array('jpeg','jpg','png','gif');
	foreach ($_FILES['image']['tmp_name'] as $key => $value) {
		$filename=$_FILES['image']['name'][$key];
		$filename_tmp=$_FILES['image']['tmp_name'][$key];
		echo '<br>';
		$ext=pathinfo($filename,PATHINFO_EXTENSION);

		$finalimg='';
		if(in_array($ext,$extension))
		{
			if(!file_exists('upload/'.$filename))
			{
			move_uploaded_file($filename_tmp, 'upload/'.$filename);
			$finalimg=$filename;
			}else
			{
				 $filename=str_replace('.','-',basename($filename,$ext));
				 $newfilename=$filename.time().".".$ext;
				 move_uploaded_file($filename_tmp, 'upload/'.$newfilename);
				 $finalimg=$newfilename;
			}
			
			$party_id = $_POST['party_id'];
			$leader_id = $_POST['leader_id'];
            $district_id = $_POST['district_id'];
			$img_name = $_POST['img_name'];
			$date = $_POST['date'];
			//insert
			$insertqry="INSERT INTO image (party_id, leader_id, district_id, img_name, date, image) VALUES ('$party_id','$leader_id', '$district_id', '$img_name','$date','$finalimg')";
			mysqli_query($conn,$insertqry);

			header('Location: upload.php');
		}else
		{
			//display error
		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TS Intelligence</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


  <script src="https://kit.fontawesome.com/727dd170d4.js" crossorigin="anonymous"></script>

  <style media="screen">
    @import url('https://fonts.googleapis.com/css2?family=Baloo+Paaji+2:wght@400;600&display=swap');

*{
	font-family: 'Baloo Paaji 2', cursive;
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	list-style: none;
	text-decoration: none;
}

body{
	background: #f5f5f5;
}

.top_navbar{
	overflow: hidden;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 60px;
	background: #323233;
	box-shadow: 1px 0 2px rgba(0,0,0,0.125);
	display: flex;
	align-items: center;
}

.top_navbar .logo{
	width: 250px;
	font-size: 20px;
	font-weight: 700;
	padding: 0 25px;
	color: goldenrod;
	letter-spacing: 2px;
	text-transform: uppercase;

}



.top_navbar .menu{
	width: calc(50% - 250px);
	padding: 0 25px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.top_navbar .hamburger{
	font-size: 25px;
	cursor: pointer;
	color: white;
}

.top_navbar .hamburger:hover{
	color: #007dc3;
}

/* Now I have determined what the sidebar will look like for a responsive device */
.hover_collapse .sidebar{
	width: 70px;
}

.hover_collapse .sidebar ul li a .text{
	display: none;
}

.sidebar{
	position: fixed;
	top: 60px;
	left: 0;
	width: 250px;
	height: 100%;
	background: #042331;
}

.sidebar ul li a{
	display: block;
	padding: 16px 25px;
	border-bottom: 1px solid #03374e;
	color: #0e94d4;


}

.sidebar ul li a .icon{
	font-size: 18px;
  color: white;
	vertical-align: middle;

}

.sidebar ul li a .text{
	margin-left: 19px;
	color: #fff;
  font-family: sans-serif;
  font-size: 18px;
	letter-spacing: 2px;
}

.sidebar ul li a:hover{
	background: #0e94d4;
	color: #fff;
}

.click_collapse .sidebar{

}
html, body {
background-color: darkslategray;
font-family: 'Nunito', sans-serif;
font-weight: 200;
height: 150vh;
margin: 0;
}
.full-height {
height: 100vh;
}
.flex-center {
align-items: center;
display: flex;
justify-content: center;
}
.position-ref {
position: relative;
}
.top-right {
position: absolute;
right: 10px;
top: 18px;
}
.content {
text-align: center;
}
.title {
font-size: 84px;
}
.links > a {
color: #636b6f;
padding: 0 25px;
font-size: 13px;
font-weight: 600;
letter-spacing: .1rem;
text-decoration: none;
text-transform: uppercase;
}
.m-b-md {
margin-bottom: 30px;
}
*, ::after, ::before {
    box-sizing: border-box;
    font-size: inherit;
    font-weight: 600;
}


.files input {
    outline: 2px dashed #92b0b3;
    outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear;
    padding: 50px 0px 100px 40%;
    text-align: center !important;
    margin: 0;
    width: 100% !important;
}
.files input:focus{     outline: 2px dashed #92b0b3;  outline-offset: -10px;
    -webkit-transition: outline-offset .15s ease-in-out, background-color .15s linear;
    transition: outline-offset .15s ease-in-out, background-color .15s linear; border:1px solid #92b0b3;
 }
.files{ position:relative}
.files:after {  pointer-events: none;
    position: absolute;
    top: 60px;
    left: 0;
    width: 50px;
    right: 0;
    height: 56px;
    content: "";
    background-image: url(https://image.flaticon.com/icons/png/128/109/109612.png);
    display: block;
    margin: 0 auto;
    background-size: 100%;
    background-repeat: no-repeat;
}
.color input{ background-color:#f1f1f1;}
.files:before {
    position: absolute;
    bottom: 10px;
    left: 0;  pointer-events: none;
    width: 100%;
    right: 0;
    height: 57px;
    content: " Drag and Drop Files Here ";
    display: block;
    margin: 0 auto;
    color: #2ea591;
    font-weight: 600;
    text-transform: capitalize;
    text-align: center;
}

.row {
    
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: 220px;
    padding-top: 30px;
    padding-right: 30px;
    position: fixed;
    width: 100%;
}
.card{
    background-color: darkgray;
background-repeat: no-repeat;
background-attachment: fixed; 
background-size: 100% 100%;
width: 450px;
}

.glow {
  font-size: 18px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}

button {
  margin: 20px;
}
.custom-btn {
  color: white;
  width: 130px;
  height: 40px;
  padding: 10px 25px;
  font-family: arial black;
  font-weight: 500;
  background: lightgreen;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
}

/* 1 */
.btn-1 {
  border: none;
  background-color: green;
  box-shadow: 0 0 5px #ef97e8;
}
.btn-1:hover {
   box-shadow: 0 0 10px #ef97e8, 0 0 20px #ef97e8, 0 0 20px #fff inset;
}


  </style>
</head>
<body>


<div class="wrapper hover_collapse">
	<div class="top_navbar">
		
		<div class="menu">
			<div class="hamburger">
				<i class="fas fa-bars"></i>
			</div>

		</div>
		<div class="logo">TS Intelligence</div>
	</div>

	<div class="sidebar">
		<div class="sidebar_inner">
		<ul>
			<li>
				<a href="dashboard.php">
					<span class="icon"><i class="fa-sharp fa-solid fa-house"></i></span>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="search.php">
					<span class="icon"><i class="fa fa-search"></i></span>
					<span class="text">Search Images</span>
				</a>
			</li>
			<li>
				<a href="party.php">
					<span class="icon"><i class="fa-sharp fa-solid fa-plus"></i></span>
					<span class="text">Add Party</span>
				</a>
			</li>
			<li>
				<a href="leader.php">
					<span class="icon"><i class="fa-sharp fa-solid fa-plus"></i></span>
					<span class="text">Add Leader</span>
				</a>
			</li>
			<li>
				<a href="district.php">
					<span class="icon"><i class="fa-sharp fa-solid fa-plus"></i></span>
					<span class="text">District tag</span>
				</a>
			</li>
			<li>
				<a href="logout.php">
					<span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
					<span class="text">Log Out</span>
				</a>
			</li>
      

		</ul>
		</div>
	</div>
</div>

<div class="container mt-5">
<div class="row">
<div class="card">
<div class="card-header">
<h2 class="glow"><strong>TELANGANA STATE POLICE, INTELLIGENCE</strong></h2>
</div>
<div class="card-body">
<form action="upload.php" method="post" enctype="multipart/form-data">
<div class="form-group">
<label for="party">Name of the Party</label>
<select class="form-control" id="party-dropdown" name="party_id">
<option value="">Select party</option>
<?php
require_once "db.php";
$result = mysqli_query($conn,"SELECT * FROM party");
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['id'];?>"><?php echo $row["name"];?></option>
<?php
}
?>
</select>
</div>


<div class="form-group">
<label for="leader">Name of the Leader</label>
<select class="form-control" id="leader-dropdown" name="leader_id">
</select>
</div> 

<div class="form-group">
<label for="district">Tag for Districts</label>
<select class="form-control" id="district-dropdown" name="district_id">
</select>
</div> 
 


<div class="form-group">
<label for="img_name">Name of the Image</label><br>
  <input type="text" id="img_name" name="img_name"><br><br>
  <label for="date">Please select your Date</label><br>
  <input type="date" id="date" name="date"><br><br>
    <div class="form-group files color">
                <label for="file">Upload Your File </label>
                <input type="file" id="image" name="image[]" class="form-control" multiple="">
     </div>
    <br>


    
    <input class="custom-btn btn-1" type="submit" name="submit" value="Upload">

  
</form>

</div>     

</div>
</div>
</div>

<script type="text/javascript">
//I have determined the constant of some class function
 var li_items = document.querySelectorAll(".sidebar ul li");
var hamburger = document.querySelector(".hamburger");
var wrapper = document.querySelector(".wrapper");

//What will change if you move the mouse over the sidebar

li_items.forEach((li_item)=>{
	li_item.addEventListener("mouseenter", ()=>{


			li_item.closest(".wrapper").classList.remove("hover_collapse");
      //I have already added style information about hover_collapse

	})
  //In general, hover_collapse will be applied on the sidebar.

//Hover_collapse will be removed from the sidebar when the mouse is moved
})

li_items.forEach((li_item)=>{
	li_item.addEventListener("mouseleave", ()=>{

			li_item.closest(".wrapper").classList.add("hover_collapse");
      //Hover Collapse will be applied again when the mouse is removed

	})
})


//Now I will execute the menu button

//I have instructed here that hover_collapse will be applied and removed when the menu button is clicked.

//This means that the first click will be applied and the second click will be removed
hamburger.addEventListener("click", () => {

	hamburger.closest(".wrapper").classList.toggle("hover_collapse");
})

$(document).ready(function() {
$('#party-dropdown').on('change', function() {
var party_id = this.value;
$.ajax({
url: "leader-by-party.php",
type: "POST",
data: {
party_id: party_id
},
cache: false,
success: function(result){
$("#leader-dropdown").html(result); 
$('#district-dropdown').html('<option value="">Select leader First</option>');
}
});
});    
$('#leader-dropdown').on('change', function() {
var leader_id = this.value;
$.ajax({
url: "leader-by-district.php",
type: "POST",
data: {
leader_id: leader_id
},
cache: false,
success: function(result){
$("#district-dropdown").html(result);
}
});
});
});
</script>
</body>
</html>
