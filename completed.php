<?php
ob_start();
include "db.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$records = mysqli_query($conn,"select * from accepted where orderid = '$id'"); // delete query
$count=mysqli_num_rows($records);
if($count>0)
{
while($data = mysqli_fetch_array($records))
{
   $name= $data['name'];
   $email= $data['email']; 
   $mobno= $data['mobno']; 
   $city= $data['city']; 
   $service= $data['service'];
   $addline1= $data['addline1'];
   $addline2= $data['addline2'];
   $state= $data['state']; 
   $city= $data['city'];
   $datereq= $data['datereq'];
   $pincode= $data['pincode'];
   $labour= $data['labour'];
   $square= $data['square'];
   $description= $data['description'];
  
}
 
$sql="INSERT INTO `completed`(`name`, `email`, `mobno`, `addline1`,`addline2`, `state`, `city`, `pincode`, `service`, `datereq`, `labour`, `square`,`description`) VALUES ('$name','$email','$mobno','$addline1','$addline2','$state','$city','$pincode','$service','$datereq','$labour','$square','$description')";
echo $sql;
 // delete query
 $res = mysqli_query($conn,$sql);
if($res)
{
     // Close connection
    $del=mysqli_query($conn,"delete from accepted where orderid = '$id'");
    header("Location: Bending.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
}
else{
    header("Location: list.php");
}
?>