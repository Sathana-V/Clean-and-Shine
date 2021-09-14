<?php
include('db.php');
if(isset($_POST['book_submit']))
{
    $name= $_POST['name'];
    $email= $_POST['email']; 
    $mobno= $_POST['mobno']; 
    $city= $_POST['city']; 
    $service= $_POST['service'];
    $addline1= $_POST['addline1'];
    $addline2= $_POST['addline2'];
    $state= $_POST['state']; 
    $city= $_POST['city'];
    
    $datereq= date('Y-m-d',strtotime($_POST['datereq']));
    $pincode= $_POST['pincode'];
    $labour= $_POST['labour'];
    $square= $_POST['square'];
    $description= $_POST['message'];
    $sql="INSERT INTO `orders`(`name`, `email`, `mobno`, `addline1`,`addline2`, `state`, `city`, `pincode`, `service`, `datereq`, `labour`, `square`,`description`) VALUES ('$name','$email','$mobno','$addline1','$addline2','$state','$city','$pincode','$service','$datereq','$labour','$square','$description')";

 // delete query

 if (!$conn -> query($sql)) {
    echo("Error description: " . $conn -> error);
  }
  else{
      header('location:index.html');
  }
  
  $conn -> close();

}

?>
