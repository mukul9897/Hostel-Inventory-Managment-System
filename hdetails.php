<?php 
  session_start();
  if(!isset($_SESSION['uname']))
    header('location:http://localhost/hostel_inventory_system/Home.php');
?>
<?php
//  $servername = "root"; //change this  accordingly
//  $dBUsername = "root";
//  $dBPassword = "root";
	$hostel_name = $_POST['hostel'];
  $dBName = "hism";
  $conn=mysqli_connect('localhost','root');
  mysqli_select_db($conn,$dBName);
  $tot_singleRoom=0;
  $tot_doubleRoom=0;
  $tot_tripleRoom=0;
  $s="select count(*) from room_inventory Where hostel_no='$hostel_name' and room_type='single'";
  $d="select count(*) from room_inventory Where hostel_no='$hostel_name' and room_type='Double'";
  $t="select count(*) from room_inventory Where hostel_no='$hostel_name' and room_type='triple'";
  $single=mysqli_query($conn,$s);
  $double=mysqli_query($conn,$d);
  $triple=mysqli_query($conn,$t);
   if($hostel_name=='Hostel 1'){
      $tot_singleRoom=0;
      $tot_doubleRoom=2;
      $tot_tripleRoom=27;
    }
    if($hostel_name=='Hostel 2'){
      $tot_singleRoom=0;
      $tot_doubleRoom=33;
      $tot_tripleRoom=0;
    }
    if($hostel_name=='Hostel 3'){
      $tot_singleRoom=6;
      $tot_doubleRoom=12;
      $tot_tripleRoom=3;
    }
   if($hostel_name=='Hostel 4'){
      $tot_singleRoom=21;
      $tot_doubleRoom=14;
      $tot_tripleRoom=3;
    }
    if($hostel_name=='Hostel 5'){
      $tot_singleRoom=2;
      $tot_doubleRoom=8;
      $tot_tripleRoom=0;
    }
     if($hostel_name=='Girls Hostel'){
      $tot_singleRoom=2;
      $tot_doubleRoom=8;
      $tot_tripleRoom=0;
    }
   $s_vacant=$tot_singleRoom-$single->num_rows;
   $d_vacant=$tot_doubleRoom-$double->num_rows;
   $t_vacant=$tot_tripleRoom-$triple->num_rows;
  if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error());
  }
	$query = "select * from room_inventory where hostel_no='$hostel_name'";
    $result = mysqli_query($conn,$query);
    $num=mysqli_num_rows($result);
  mysqli_close($conn);
?>	
<!DOCTYPE html>
<html>
	<head>
	<link rel="icon" href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.iiitbh.ac.in%2Fimg%2F150dpi.png&imgrefurl=https%3A%2F%2Fwww.iiitbh.ac.in%2F&docid=uUqcA62Sq0oikM&tbnid=Pt32zSLz3Es3qM%3A&vet=10ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA..i&w=1447&h=1604&bih=597&biw=1242&q=IIIT%20BHAGALPUR%20LOGO&ved=0ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA&iact=mrc&uact=8" type="image/x-icon" size="144x144" >
	<title>HOME PAGE</title>
	<link rel="stylesheet" type="text/css" href="./Home.css">
	<link rel="stylesheet" type="text/css" href="./Slideshow.css">
	<link rel="stylesheet" type="text/css" href="./req_from.css">
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
	background-size:90px 90px; padding-bottom: 20px; padding-top: 40px; font-size:30px;" ><i>Indian Institute Of Information Technology, Bhagalpur</i></h2>
		<h3 style="top-padding: -20px;"><dfn>Hostel Inventory Managment System</dfn></h3>
		
	</div>
	<div class="ul">
		<ul>
			<li><a class="active" href="student_login.php"> &nbsp;Home</a></li>
		<li><a href="profile.php">Profile</a></li>
      <li><a href="cont.php">Contact Us</a></li>
      <li class="dropdown">
        <a class="dropbtn" href="about.php">About</a>
      </li>
		</ul>
		</div>
		<div class="column">
			<div class="content side">
			<ul>
				<li><a href="student_login.php">Request Form</a></li>
				<li><a href="password.php">Change password</a></li>
				<li><a href="hostel_details.php" class="active">Hostel Details</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
			</div>
		<div class="content middle" >
			<div class="container">
  <form action="hdetails.php" method="post">
    <label for="hostel">Hostel No</label>
    <select id="hostel" name="hostel">
      <option value="Hostel 1">Hostel 1</option>
      <option value="Hostel 2">Hostel 2</option>
      <option value="Hostel 3">Hostel 3</option>
      <option value="Hostel 4">Hostel 4</option>
      <option value="Hostel 5">Hostel 5</option>
      <option value="Girls Hostle">Girls Hostel</option>
    </select>
    <input type="submit" name="submit" value="Submit">
  </form>
  </div>
   <style>
      table {
         border-collapse: collapse;
           border-spacing: 0;
         width: 100%;
         border: 1px solid #ddd;
        }

        th, td {
          text-align: left;
          padding: 15px;
        }

        tr:nth-child(even) {
          background-color: #f2f2f2;
        }
    </style>
     <table id="view_table" style="border-color:black; border-style:solid; background-color: #4CAF50; text-align:center; width:100%; border-radius:18px; box-sizing:border-box; margin:0 0 0 100px;"> 
  <tr>
    <th>Hostel</th>
    <th>Room No</th>
    <th>Room Type</th>
    <th>Occupied Status</th>
    <th>Occupant Rollno</th>
    <th>Chair</th>
    <th>Tables</th>
    <th>Fans</th>
   </tr>
   <?php
   for($i=0;$i<$num;$i++){
      $row=mysqli_fetch_array($result);
   ?>
   <tr>
     <td><?php echo $row['hostel_no']; ?></td> 
    <td><?php echo $row['room_no']; ?></td>
    <td><?php echo $row['room_type']; ?></td>
    <td><?php echo $row['occupied_status']; ?></td>
    <td><?php echo $row['occupant_rollno']; ?></td>
    <td><?php echo $row['chair']; ?></td>
    <td><?php echo $row['tables']; ?></td>
    <td><?php echo $row['fans']; ?></td>
   </tr>
   <p style="text-indent: 50px; writing-mode: horizontal-tb;">
   <?php
   }
   echo "Total number of Vacant single Room is:".$s_vacant;
   echo "Total number of Vacant double Room is:".$d_vacant;
   echo "Total number of Vacant triple Room is:".$t_vacant;
    ?>
  </p>
   </table>
</div>
	</div>
	<div>
		<hr>
	</div>
    <div class="footer">
  <div class="box"><a href="https://www.iiitbh.ac.in/index.html">IIIT BHAGALPUR</a></div>
  <div class="lin">
    <ul>
      <li><a href="Home.php"> &nbsp;Home</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="cont.php">Contact Us</a></li>
      <li><a href="about.php">About</a>
        </ul> 
  </div>       
  <p>Designed and Developed by Mukul Sharma,Vipul Kumar and Roushan Kumar.</p>  
</div>   
</body>
</html>

 
