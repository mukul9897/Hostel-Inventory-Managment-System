<!DOCTYPE html>
<html>
<head>
<title>CONTACT PAGE</title>
<link rel="icon" href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.iiitbh.ac.in%2Fimg%2F150dpi.png&imgrefurl=https%3A%2F%2Fwww.iiitbh.ac.in%2F&docid=uUqcA62Sq0oikM&tbnid=Pt32zSLz3Es3qM%3A&vet=10ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA..i&w=1447&h=1604&bih=597&biw=1242&q=IIIT%20BHAGALPUR%20LOGO&ved=0ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA&iact=mrc&uact=8" type="image/x-icon" size="144x144" >
	<link rel="stylesheet" type="text/css" href="./Home.css">
	<link rel="stylesheet" type="text/css" href="./Login.css">
	<link rel="stylesheet" type="text/css" href="./Slideshow.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #f44336;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #77ff00;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #e2e2e2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 100%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="first">
		<h2 style="background-image:url('download.png'); background-repeat: no-repeat;
	background-position:8px 0px;
	background-size:90px 90px; padding-bottom: 20px; padding-top: 40px; font-size:30px;" ><i>Indian Institute Of Information Technology, Bhagalpur</i></h2>
		<h3 style="top-padding: -20px;"><dfn>Hostel Inventory Managment System</dfn></h3>
		
	</div>
	<div class="ul">
		<ul>
			<li><a  href="#"> &nbsp;Home</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="cont.php" class="active">Contact Us</a></li>
			<li class="dropdown"><a class="dropbtn" href="about.php">About</a></li>
		</ul>
	</div>

<div class="container">
  <div style="margin:20px;">
    <h2>Contact Us</h2>
    <p>Leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Hostel</label>
        <select id="country" name="hostel">
          <option value="Hostel 1">Hostel 1</option>
          <option value="Hostel 2">Hostel 2</option>
          <option value="Hostel 3">Hostel 3</option>
          <option value="Hostel 4">Hostel 4</option>
          <option value="Hostel 5">Hostel 5</option>
          <option value="Girls Hostel">Girls Hostel</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
</div>
	<div>
		<hr>
	</div>
	<div class="footer">
	<div class="box"><a href="https://www.iiitbh.ac.in/index.html">IIIT BHAGALPUR</a></div>
	<div class="lin">
		<ul>
			<li><a href="#"> &nbsp;Home</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="cont.php">Contact Us</a></li>
			<li><a href="about.php">About</a>
        </ul>	
	</div>		   
  <p>Designed and Developed by Mukul Sharma,Vipul Kumar and Roushan Kumar.</p>
</div>
</body>
</html>
