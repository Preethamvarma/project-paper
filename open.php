
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
<link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">

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

.top_navbar{
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




:root {
  --shadow-color: #FF9E9E;
  --shadow-color-light: white;
}

p {
  margin: calc(50vh - 40px) auto 0 auto;
  font-size: 50px;
  text-transform: uppercase;
  font-family: "Archivo Black", "Archivo", sans-serif;
  font-weight: normal;
  display: block;
  height: auto;
  text-align: center;
}

.logo-1 {
  color: wheat;
  animation: neon 3s infinite;
}

@keyframes neon {
  0% {
    text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
    0 0 3px var(--shadow-color-light), 0 0 10px var(--shadow-color-light), 0 0 20px var(--shadow-color-light),
    0 0 30px var(--shadow-color), 0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 70px var(--shadow-color), 0 0 100px var(--shadow-color), 0 0 200px var(--shadow-color);
  }
  50% {
    text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
    0 0 5px var(--shadow-color-light), 0 0 15px var(--shadow-color-light), 0 0 25px var(--shadow-color-light),
    0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 60px var(--shadow-color), 0 0 80px var(--shadow-color), 0 0 110px var(--shadow-color), 0 0 210px var(--shadow-color);
  }
  100% {
    text-shadow: -1px -1px 1px var(--shadow-color-light), -1px 1px 1px var(--shadow-color-light), 1px -1px 1px var(--shadow-color-light), 1px 1px 1px var(--shadow-color-light),
    0 0 3px var(--shadow-color-light), 0 0 10px var(--shadow-color-light), 0 0 20px var(--shadow-color-light),
    0 0 30px var(--shadow-color), 0 0 40px var(--shadow-color), 0 0 50px var(--shadow-color), 0 0 70px var(--shadow-color), 0 0 100px var(--shadow-color), 0 0 200px var(--shadow-color);
  }
}

@import url("https://fonts.googleapis.com/css?family=Sacramento&display=swap");

h1 {
  font-size: calc(5px + 5h);
  line-height: calc(5px + 5vh);
/*   text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
    0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092;
  color: #fccaff; */
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  font-family: "Sacramento", cursive;
  text-align: center;
  animation: blink 5s infinite;
  -webkit-animation: blink 5s infinite;
}

body {
  
  display: flex;
  justify-content: center;
  align-items: center;

  background: #222;
  background-image: repeating-linear-gradient(
    to bottom,
    transparent 7px,
    rgba(0, 0, 0, 0.8) 9px,
    rgba(0, 0, 0, 0.8) 13px,
    transparent 13px
  );
}

@-webkit-keyframes blink {
  20%,
  24%,
  55% {
    color: #111;
    text-shadow: none;
  }

  0%,
  19%,
  21%,
  23%,
  25%,
  54%,
  56%,
  100% {
/*     color: #fccaff;
    text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
      0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092; */
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  }
}

@keyframes blink {
  20%,
  24%,
  55% {
    color: #111;
    text-shadow: none;
  }

  0%,
  19%,
  21%,
  23%,
  25%,
  54%,
  56%,
  100% {
/*     color: #fccaff;
    text-shadow: 0 0 5px #f562ff, 0 0 15px #f562ff, 0 0 25px #f562ff,
      0 0 20px #f562ff, 0 0 30px #890092, 0 0 80px #890092, 0 0 80px #890092; */
  text-shadow: 0 0 5px #ffa500, 0 0 15px #ffa500, 0 0 20px #ffa500, 0 0 40px #ffa500, 0 0 60px #ff0000, 0 0 10px #ff8d00, 0 0 98px #ff0000;
    color: #fff6a9;
  }
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
				<a href="upload.php">
					<span class="icon"><i class="fa-sharp fa-solid fa-upload"></i></span>
					<span class="text">Upload Images</span>
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
				<a href="logout.php">
					<span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
					<span class="text">Log Out</span>
				</a>
			</li>
			<li>
				<a href="open.php">
					<span class="icon"><i class="fa-sharp fa-solid fa-user"></i></span>
					<span class="text">Daily Clippings</span>
				</a>
			</li>
      

		</ul>
		</div>
	</div>
</div>

<div class = "container">
<p class="logo-1">
      WELCOME TO TS INTELLIGENCE<br>
    </p>
	<h1>PAPER SCRUTINY CELL</h1>
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

</script>
</body>
</html>
