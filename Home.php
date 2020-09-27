<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="https://drive.google.com/open?id=1WfOGS5wVKduu8J69U59i1YyTOEI66v92" type="image/x-icon" size="144x144" >
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="./Home.css">
	<link rel="stylesheet" type="text/css" href="./Login.css">
	<link rel="stylesheet" type="text/css" href="./Slideshow.css">
	<link rel="stylesheet" type="text/css" href="./admin_drop.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
	</head>
<body>
  <style>
.lin ul li{ 
  list-style-type:none;
  display:inline-block;
  padding:10px;
  }
.lin ul a{
  color:white;
  text-decoration:none;
}

.box{
  width:25%;
  color: white;
  padding: 20px 25px;
  text-align: center;
  border:4px solid white;
  font-size:40px;
  text-decoration: none;
  display: inline-block;
}
.box a{
  text-decoration:none;
  color:white;
}

.footer {
   position: relative;
   left: 10;
   padding: 0.5cm;
   bottom: 10;
   width: 100%;
   background-color: #444444;
   color: white;
   text-align: center;
}
</style>
	<div class="first">
		<h2 style="background-image:url('download.png'); background-repeat: no-repeat;
	background-position:8px 0px;
	background-size:90px 90px; padding-bottom: 20px; padding-top: 40px; font-size:30px;" ><i>भारतीय सूचना प्रौद्योगिकी संस्थान भागलपुर<br>Indian Institute Of Information Technology, Bhagalpur</i></h2>
		<h3 style="top-padding: -20px;"><dfn>Hostel Inventory Managment System</dfn></h3>
		
	</div>
	<div class="ul">
		<ul>
			<li><a class="active" href="Home.php"> &nbsp;Home</a></li>
      <li><a href="profile1.php">Profile</a></li>
      <li><a href="cont1.php">Contact Us</a></li>
      <li class="dropdown">
        <a class="dropbtn" href="about1.php">About</a>
      </li>
			<li class="dropdown" style="float:center;">
			 	<a class="active" href="#Login">Login</a>
			 	<div class="dropdown-content">
      		<a onclick="document.getElementById('id01').style.display='block'" style="width:auto; cursor:pointer;">Student</a>
					<a onclick="document.getElementById('id03').style.display='block'" style="width:auto; cursor:pointer;">Hostels</a>
     			<a onclick="document.getElementById('id02').style.display='block'" style="width:auto; cursor:pointer;">Super Admin</a>
   			 </div>
			</li>
			<div id="id01" class="modal">
  			<form class="modal-content animate" action="validate_student.php" method="post">
    			<div class="imgcontainer">
    			  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    			  <script>
				// Get the modal
				var modal = document.getElementById('id01');

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
    				if (event.target == modal) {
    				    modal.style.display = "none";
    					}
					}
			</script>
      				<img src="download.png" alt="Avatar" class="avatar">
    			</div>
    		 	<div class="container">
    		    	<label for="uname"><b>Username</b></label>
      				<input type="text" placeholder="Enter Username" name="uname" required>
      				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>
      				<button type="submit" name="login-submit" style="width: 100%; padding: 12px 20px; margin: 8px 0; color: black; display:inline-block; border: 1px solid #ccc; box-sizing: border-box; background-color: #F44336">Login</button>
      				<label>
        			<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
    				</div>
    			 <div class="container" style="background-color:#f1f1f1">
      			 	<button type="button" onclick="document.getElementById('id01').style.display='none'" class="	cancelbtn">Cancel</button>
    		 	</div>
  			</form>
			</div>
			<div id="id02" class="modal">
  			<form class="modal-content animate" action="validate_admin.php" method="post">
    			<div class="imgcontainer">
    			  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
    			  <script>
			// Get the modal
			var modal = document.getElementById('id02');
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
    			if (event.target == modal) {
    			    modal.style.display = "none";
    				}
				}
			</script>
      				<img src="download.png" alt="Avatar" class="avatar">
    			</div>
    		 	<div class="container">
    		    	<label for="uname"><b>Username</b></label>
      				<input type="text" placeholder="Enter Username" name="uname" required>
      				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>
      				<button type="submit" style="width: 100%; padding: 12px 20px; margin: 8px 0; color: black; display:inline-block; border: 1px solid #ccc; box-sizing: border-box; background-color: #F44336; object-position: 10cm;">Login</button>
      				<label>
        			<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
    				</div>
    			 <div class="container" style="background-color:#f1f1f1">
      			 	<button type="button" onclick="document.getElementById('id02').style.display='none'" class="	cancelbtn">Cancel</button>
    		 	</div>
  			</form>
			</div>
			<div id="id03" class="modal">
  			<form class="modal-content animate" action="validate_hostels.php" method="post">
    			<div class="imgcontainer">
    			  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
    			  <script>
				// Get the modal
				var modal = document.getElementById('id03');

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
    				if (event.target == modal) {
    				    modal.style.display = "none";
    					}
					}
			</script>
      				<img src="download.png" alt="Avatar" class="avatar">
    			</div>
    		 	<div class="container">
              <style>
               select {
                width: 100%; /* Full width */
                padding: 12px; /* Some padding */ 
                border: 1px solid #ccc; /* Gray border */
                border-radius: 4px; /* Rounded borders */
                box-sizing: border-box; /* Make sure that padding and width stays in place */
                margin-top: 6px; /* Add a top margin */
                margin-bottom: 16px; /* Bottom margin */
                resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
                  }
              </style>
              <label for="hostelno">Hostel No</label>
              <select id="hostel" name="hostel">
               <option value="Hostel 1">Hostel 1</option>
               <option value="Hostel 2">Hostel 2</option>
               <option value="Hostel 3">Hostel 3</option>
               <option value="Hostel 4">Hostel 4</option>
               <option value="Hostel 5">Hostel 5</option>
               <option value="Girls Hostel">Girls Hostel</option>
              </select>
    		    	<label for="uname"><b>Username</b></label>
      				<input type="text" placeholder="Enter Username" name="uname" required>
      				<label for="psw"><b>Password</b></label>
      				<input type="password" placeholder="Enter Password" name="psw" required>
      				<button type="submit" style="width: 100%; padding: 12px 20px; margin: 8px 0; color: black; display:inline-block; border: 1px solid #ccc; box-sizing: border-box; background-color: #F44336">Login</button>
      				<label>
        			<input type="checkbox" checked="checked" name="remember"> Remember me
      				</label>
    				</div>
    			 <div class="container" style="background-color:#f1f1f1">
      			 	<button type="button" onclick="document.getElementById('id03').style.display='none'" class="	cancelbtn">Cancel</button>
    		 	</div>
  			</form>
		
			</div>
		</ul>
		</div>
		<div class="content mid" >
      <div class="slideshow-container">

			<div class="mySlides fade">
			  <div class="numbertext">1 / 3</div>
			  <img src="hostel 1.png" style="width:100%">
			  <div class="text">Hostel 1</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 3</div>
			  <img src="hostels 2.png" style="width:100%;">
  			  <div class="text">Hostel 2</div>
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 3</div>
			  <img src="Host3&4.png" style="width:100%">
			  <div class="text">Hostel 3</div>
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

			</div>
			<br>

			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span> 
			  <span class="dot" onclick="currentSlide(2)"></span> 
			  <span class="dot" onclick="currentSlide(3)"></span> 
			</div>
			</div>
			<script>

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>	
	</div>
	<div>
		<hr>
	</div>
  <div class="footer">
  <div class="box"><a href="https://www.iiitbh.ac.in/index.html">IIIT BHAGALPUR</a></div>
  <div class="lin">
    <ul>
      <li><a href="Home.php"> &nbsp;Home</a></li>
      <li><a href="profile1.php">Profile</a></li>
      <li><a href="cont1.php">Contact Us</a></li>
      <li><a href="about1.php">About</a>
        </ul> 
  </div>       
  <p>Designed and Developed by Mukul Sharma,Vipul Kumar and Roushan Kumar.</p>
</div>
</body>
</html>

		
			
 
