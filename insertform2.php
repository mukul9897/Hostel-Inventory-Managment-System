<?php 
  session_start();
  if(!isset($_SESSION['uname']))
    header('location:http://localhost/hostel_inventory_system/Home.php');
?>
<?php
$con=mysqli_connect('localhost','root');
  mysqli_select_db($con,'hism');
  $q="select * from inventory";
  $result=mysqli_query($con,$q);
  $num=mysqli_num_rows($result);
  mysqli_close($con);
  ?>
<!DOCTYPE html>
<html>
  <head>
  <link rel="icon" href="https://www.google.com/imgres?imgurl=https%3A%2F%2Fwww.iiitbh.ac.in%2Fimg%2F150dpi.png&imgrefurl=https%3A%2F%2Fwww.iiitbh.ac.in%2F&docid=uUqcA62Sq0oikM&tbnid=Pt32zSLz3Es3qM%3A&vet=10ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA..i&w=1447&h=1604&bih=597&biw=1242&q=IIIT%20BHAGALPUR%20LOGO&ved=0ahUKEwiTu8iF7oLlAhWPSH0KHfg-CoQQMwhiKAAwAA&iact=mrc&uact=8" type="image/x-icon" size="144x144" >
  <title>HOME PAGE</title>
  <link rel="stylesheet" type="text/css" href="./Home.css">
  <link rel="stylesheet" type="text/css" href="./Slideshow.css">
  <link rel="stylesheet" type="text/css" href="./input_output.css">
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
      <li><a class="active" href="admin_login.php"> &nbsp;Home</a></li>
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
        <li><a href="admin_login.php"
          >Change password</a></li>
        <li><a href="insertform.php">Item Details</a></li>
        <li><a href="insertform2.php" class="active">Room Inventory</a></li>
        <li><a href="updateform.php">Update Items</a></li>
        <li><a href="update_inventory.php" >Update Inventory</a></li>
        <li><a href="deleteform.php">Delete Items</a></li>
        <li><a href="view.php">View Items</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
      </div>
    <div class="content middle" >
      <style>
      table {
         border-collapse: collapse;
           border-spacing: 0;
         width: 100%;
         border: 1px solid #ddd;
        }

        th, td {
          text-align: left;
          padding: 4px;
        }

        tr:nth-child(even) {
          background-color: #f2f2f2;
        }
    </style>
      <form align='center' action="insertion2.php" method="post">
        <table>
        <tr>
          <th>Room No</th>
          <td><input type="text" name="room_no" placeholder="E211,E212...etc" required>
          </td>
        </tr>
        <tr>
          <th>Room Type</th>
          <td><input type="text" name="room_type" placeholder="single,double,triple...etc" required>
          </td>
        </tr>
        <tr>
          <th>Occupied Status</th>
          <td><input type="text" name="occupied_status" placeholder="Full,1/2,3/4...etc" required>
          </td>
        </tr>
        <tr>
          <th>Occupied Roll No</th>
          <td><input type="text" name="occupant_rollno" placeholder="1728&1745&1754,...etc" required>
          </td>
        </tr>
        <tr>
          <th>Chair</th>
          <td><input type="text" name="chair" placeholder="1,2...etc" required>
          </td>
        </tr>
        <tr>
          <th>Tables</th>
          <td><input type="text" name="tables" placeholder="1,2...etc." required>
          </td>
        </tr>
        <tr>
          <th>Fans</th>
          <td><input type="text" name="fans" placeholder="1,2...etc" required>
          </td>
        </tr> 
        <tr>
          <label for="hostelno">Hostel No</label>
             <select id="hostel" name="hostel">
             <option value="Hostel 1">Hostel 1</option>
             <option value="Hostel 2">Hostel 2</option>
             <option value="Hostel 3">Hostel 3</option>
             <option value="Hostel 4">Hostel 4</option>
             <option value="Hostel 5">Hostel 5</option>
              <option value="Girls Hostel">Girls Hostel</option>
             </select>
        </tr> 
        <tr>
          <th></th>
          <td><input type="submit" value="INSERT"></td>
        </tr>
      </table>
 </form> 
    </div>
  </div>
  <div>
    <hr>
  </div>
  <div class="footer">
  <div class="box"><a href="https://www.iiitbh.ac.in/index.html">IIIT BHAGALPUR</a></div>
   <div class="lin">
    <ul>
      <li><a href="admin_login.php"> &nbsp;Home</a></li>
      <li><a href="profile.php">Profile</a></li>
      <li><a href="cont.php">Contact Us</a></li>
      <li><a href="about.php">About</a>
        </ul> 
  </div>       
  <p>Designed and Developed by Mukul Sharma,Vipul Kumar and Roushan Kumar.</p>
</div>
</body>
</html>