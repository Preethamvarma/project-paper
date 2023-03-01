<html>
<title>TS Intelligence</title>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
<style>
  h5 {
  color: hsl(0, 0%, 28%);
  font-size: 20px;
  font-weight: bold;
  font-family: Arial Black;
  cursor: pointer;
  transition: 0.5s ease-out;
}
h5:hover {
  color: #fff;
  text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 40px #fff;
}
.glow {
  font-size: 40px;
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
</style>
<body>
<header>
  <!-- Intro settings -->
  <style>

    /* Default height for small devices */
    #header {
      background-image: url('bg1.png');
      background-repeat: no-repeat;
      background-attachment: fixed; 
      background-size: 100% 100%;
      height: 100vh;
      
    }
    

    button {
  margin: 20px;
}
.custom-btn {
  color: #fff;
  width: 130px;
  height: 40px;
  padding: 10px 25px;
  font-family: 'Lato', sans-serif;
  font-weight: 500;
  background: transparent;
  cursor: pointer;
  transition: all 0.3s ease;
  position: relative;
  display: inline-block;
}
/* 6 */
.btn-6 {
  background: #8ce436;
  line-height: 40px;
  padding: 0;
  border: none;
  box-shadow: 0 0 5px #8ce436;
}
.btn-6 span {
  position: relative;
  display: block;
  width: 100%;
  height: 100%;
}
.btn-6:hover{
  background: transparent;
}
.btn-6:before,
.btn-6:after {
  position: absolute;
  content: "";
  height: 0%;
  width: 2px;
  background: #8ce436;
 box-shadow: 0 0 5px #8ce436;
}
.btn-6:before {
  right: 0;
  top: 0;
  transition: all 500ms ease;
}
.btn-6:after {
  left: 0;
  bottom: 0;
  transition: all 500ms ease;
}
.btn-6:hover:before {
  transition: all 500ms ease;
  height: 100%;
}
.btn-6:hover:after {
  transition: all 500ms ease;
  height: 100%;
}
.btn-6 span:before,
.btn-6 span:after {
  position: absolute;
  content: "";
  background: #8ce436;
  box-shadow: 0 0 5px #8ce436;
}
.btn-6 span:before {
  left: 0;
  top: 0;
  width: 0%;
  height: 2px;
  transition: all 500ms ease;
}
.btn-6 span:after {
  right: 0;
  bottom: 0;
  width: 0%;
  height: 2px;
  transition: all 500ms ease;
}
.btn-6 span:hover:before {
  width: 100%;
}
.btn-6 span:hover:after {
  width: 100%;
}


    /* Height for devices larger than 992px */
    @media (min-width: 1000px) {
      #header {
        height: 100%;
      }
    }
  </style>


  <!-- Background image -->
  <div
    id="header"
    class="p-5 text-center bg-image">
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="glow">Telangana State Police</h1><br>
          <h5 class="md-1">We the Team of Paper Scrutiny Cell of TS Intelligence Department</h5><br>
          <div class="frame">
          <a
            class="custom-btn btn-6 btn-lg m-2"
            href="login.php"
            role="button"
            rel="nofollow"
           
          >Admin Login</a
          >
          
  </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
  

</header>
</body>
</html>