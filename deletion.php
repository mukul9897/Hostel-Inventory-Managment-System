<?php 
  session_start();
  if(!isset($_SESSION['uname']))
    header('location:http://localhost/hostel_inventory_system/Home.php');
?>
<?php
$size=sizeof($_POST);
$j=0;
for($i=0;$i<$size;$i++,$j++)
{
	$index="b".$j;
	if(isset($_POST[$index]))
		$bid[$i]=$_POST[$index];
}
$con=mysqli_connect('localhost','root');
	mysqli_select_db($con,'hism');

for($k=0;$k<=$size;$k++)
{
	$q="delete from inventory where sno=".$bid[$k];
	mysqli_query($con,$q);
}
mysqli_close($con); 
//header('location:http://localhost/hostel_inventory_system/deleteform.php');
?>
<!DOCTYPE html>
  <head>
    <title>Deletion form</title>
   </head>
   <body>
    <h1>Book Reord Management</h1>
    <P><?php  
             echo $size." record deleted";   
        ?>
    </p>
    <p>Do you want to insert more record?</p>
    <a href="xyz">GO BACK TO HOME PAGE</a>
    </body>
    </html>