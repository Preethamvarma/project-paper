<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>TS Intelligence</title>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<!-- Styles -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
html, body {
background-color: lightgoldenrodyellow;
color: black;
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
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl {
    width: 100%;
    padding-right: 1px;
    padding-left: 1px;
    margin-right: auto;
    margin-left: auto;
}

</style>
</head>
<body>
<div class="container mt-5">
<div class="row">
<div class="card">
<div class="card-header">
<h2 class="text-success"><strong>TELANGANA STATE POLICE, INTELLIGENCE</strong></h2>
</div>
<div class="card-body">
<form action="downloadfiles.php" method="post" enctype="multipart/form-data">
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
    

<label for="img_name">Name of the Image</label><br>
  <input type="text" id="img_name" name="img_name"><br><br>

  <div class="container">
  <div class="row">
    <div class="col-sm">
    <label for="date">From Date</label><br>
  <input type="date" id="date" name="fdate"><br>
    </div>
    <div class="col-sm">
    <label for="date">To Date</label><br>
  <input type="date" id="date" name="tdate"> <br><br><br>
    </div>
    
  </div>
</div>

    <input class="btn btn-primary" type="submit" name="submit" value="Search Images"><br>
  
</form>

<br><br><br>
</div>     
  

</div>
</div>

</div>


<script>
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
}
});
});    
$('#leader-dropdown').on('change', function() {
var leader_id = this.value;
});
});
</script>

</body>
</html>
</body>
</html>