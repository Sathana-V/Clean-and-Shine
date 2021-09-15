<?php

include('db.php'); // Using database connection file here

$records = mysqli_query($conn,"SELECT * FROM completed ORDER BY orderid DESC"); // fetch data from database
$count=mysqli_num_rows($records);

?>
<!DOCTYPE html>  
 <html>  
      <head>  
      <title>Clean and Shine </title>

<!-- Favicon -->
<link rel="icon" href="img/core-img/favicon.ico">
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head> 
      <style>
          html,body
          {
              width:100%;
              height:100vh;
              max-width: 100%;
    overflow-x: hidden;
          }
          .breadcrumb-area {
  position: relative;
  z-index: 1;
  width: 100%;
  height: 255px; }
  @media only screen and (max-width: 767px) {
    .breadcrumb-area {
      height: 180px; } }
  .breadcrumb-area .breadcrumb-content h2 {
    color: #ffffff;
    font-size: 30px;
    text-transform: uppercase;
    display: block; }
    @media only screen and (max-width: 767px) {
      .breadcrumb-area .breadcrumb-content h2 {
        font-size: 24px; } }
  .breadcrumb-area .breadcrumb-content .breadcrumb {
    background-color: transparent;
    padding: 0;
    margin-bottom: 0; }
    .breadcrumb-area .breadcrumb-content .breadcrumb .breadcrumb-item::before {
      color: #ffffff; }
    .breadcrumb-area .breadcrumb-content .breadcrumb .breadcrumb-item.active {
      color: #ffbb38;
      font-size: 16px;
      font-weight: 600; }
    .breadcrumb-area .breadcrumb-content .breadcrumb .breadcrumb-item a {
      font-size: 16px;
      color: #ffffff;
      font-weight: 600; }
      .breadcrumb-area .breadcrumb-content .breadcrumb .breadcrumb-item a:hover {
        color: #ffbb38; }
        .bg-overlay {
  position: relative;
  z-index: 2;
  background-position: center center;
  background-size: cover; }
  .bg-overlay::after {
    background-color: rgba(0, 0, 0, 0.61);
    position: absolute;
    z-index: -1;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    content: ""; }
    @media only screen and (max-width: 767px) {
    .breadcrumb-area {
      height: 180px; } }
  .breadcrumb-area .breadcrumb-content h2 {
    color: #ffffff;
    font-size: 30px;
    text-transform: uppercase;
    display: block; }
    @media only screen and (max-width: 767px) {
      .breadcrumb-area .breadcrumb-content h2 {
        font-size: 24px; } }
  .breadcrumb-area .breadcrumb-content .breadcrumb {
    background-color: transparent;
    padding: 0;
    margin-bottom: 0; }
    .breadcrumb-area .breadcrumb-content .breadcrumb .breadcrumb-item::before {
      color: #ffffff; }
    .breadcrumb-area .breadcrumb-content .breadcrumb .breadcrumb-item.active {
      color: #ffbb38;
      font-size: 16px;
      font-weight: 600; }
    .breadcrumb-area .breadcrumb-content .breadcrumb .breadcrumb-item a {
      font-size: 16px;
      color: #ffffff;
      font-weight: 600; }
      .breadcrumb-area .breadcrumb-content .breadcrumb .breadcrumb-item a:hover {
        color: #ffbb38; }
.bg-fixed {
  background-attachment: fixed !important;
 }.card {
 margin-top:5%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  display:inline-block;
  margin-left:2%;
  
  border-radius: 5px;
  
  
}
@media screen and (max-width 768px)
{
  .card {
    display:block;
    background-color:blue;
  }
}

td{
   padding-left:10px;
}
.card-body
{
    padding:18px;
}
.completed
{
    text-align:center;
    color:white;
    margin-top:3%;
    margin-left:29%;
}
.completed a{
    color:white;
    padding-left:3px;
}
.completed a:hover
{
    text-decoration:none;
}
.card h2{
    margin-top:0px;
    text-align:center;
    height:40px;
    font-size:24px;
    padding-top:4px;
    text-transform:uppercase;
    background-color:skyblue;
    color:white;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 16px;
}

      </style> 
      <body>  
      <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('https://picklaptop.com/wp-content/uploads/2020/04/best-laptops-for-genealogy-in-2020-thumbnail-.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content" style="text-align:center;margin-top:4%;">
                        <h2>COMPLETED LIST</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                               
                                <li class="breadcrumb-item active" aria-current="page"><a href="list.php">Orders</a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page"><a href="Bending.php">Bending</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section> 

           <div class="container-fluid" style="margin:4%;">  
                <h1 align="center">ORDERS COMPLETED : <?php echo $count?></h1>  
               
            
 
                <div class="row" >
  
                          <?php

                              $c=0;
                                while($data = mysqli_fetch_array($records))
                                {
                                   
                                   
                                ?>
                                
                                 
                                    <div class="card">
                                    <h2><?php echo $data['service']; ?></h2>
                                       <div class="card-body">
                                                    <table style="background-color:rgb(240, 240, 240);width:400px;">
                                                    <tbody>
                                                    <tr>
                                                            <td> <h4><b>Order Id  </b></h4></td>
                                                            <td><h4><?php echo $data['orderid']; ?></h4></td>
                                                            
                                                        </tr>
                                                    <tr>
                                                            <td> <h4><b>Date  </b></h4></td>
                                                            <td><h4><?php echo $data['datereq']; ?></h4></td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td> <h4><b>Labour </b></h4></td>
                                                            <td><h4><?php echo $data['labour']; ?></h4></td>
                                                            
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td> <h4><b>Address  </b></h4></td>
                                                            <td><h4><?php echo $data['addline1']." ".$data['addline2'].",<br> ".$data['state'].",<br> ".$data['city'].",<br> ".$data['pincode']; ?></h4></td>
                                                            
                                                        </tr>
                                                       
                                                        
                                                        <tr>
                                                        <td> <h4><b>Mobile Number </b></h4></td>
                                                            <td><h4><?php echo $data['mobno']; ?></h4></td>
                                                        </tr>
                                                </tbody>
                                                    </table>
                                             
                                            
                                            
                                                  
                                                    
                                                   
                                            
                                             
                                             
                                          
                                         
                                      
                                            
                                           
                                        </div>
                                   
                                 </div>
                               	
                                <?php
                               
                                  
                                }
                                ?>
                         
                                
                         
                         
                   
              
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  
