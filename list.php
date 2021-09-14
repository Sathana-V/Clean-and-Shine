
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
  background-attachment: fixed !important; }

      </style> 
      <body>  
      <section class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('https://picklaptop.com/wp-content/uploads/2020/04/best-laptops-for-genealogy-in-2020-thumbnail-.jpg');">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content" style="text-align:center;margin-top:4%;">
                        <h2>ORDER LIST</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="Bending.php">Bending</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="completedservices.php">completed</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section> 

           <div class="container-fluid">  
                <h3 align="center">Orders Received</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="employee_data" class="table table-striped table-bordered" width="100%">  
                          <thead>  
                               <tr>  
                                    <td>Id</td>
                                    <td>Name</td>  
                                    <td>Email</td>  
                                    <td>Mobile No</td>  
                                    <td>Address</td>  
                                    <td>service</td>  
                                    <td>Date</td>
                                    <td>Square feet</td>
                                    <td>Labour required</td>
                                    <td>Description</td>
                                    <td></td>
                               </tr>  
                          </thead>  
                          <?php

                                include('db.php'); // Using database connection file here

                                $records = mysqli_query($conn,"SELECT * FROM orders ORDER BY orderid DESC"); // fetch data from database

                                while($data = mysqli_fetch_array($records))
                                {
                                ?>
                                <tr>
                                    <td><?php echo $data['orderid']; ?></td>
                                    <td><?php echo $data['name']; ?></td>
                                    <td><?php echo $data['email']; ?></td> 
                                    <td><?php echo $data['mobno']; ?></td> 
                                    <td><?php echo $data['addline1'].'<br>'.$data['addline2'].'<br>'.$data['state'].'<br>'.$data['city'].'<br>'.$data['pincode']; ?></td> 
                                    <td><?php echo $data['service']; ?></td> 
                                    <td><?php echo $data['datereq']; ?></td> 
                                    <td><?php echo $data['square']; ?></td> 
                                    <td><?php echo $data['labour']; ?></td> 
                                    <td><?php echo $data['description']; ?></td>    
                                    <td style="text-align:center"><a href="accepted.php?id=<?php echo $data['orderid']; ?>"><i class="fa fa-user-plus fa-2x"></i></a>
                                    <a  style="margin-left:3%"href="delete.php?id=<?php echo $data['orderid']; ?>"><i class="fa fa-trash fa-2x"></i></a></td>
                                </tr>	
                                <?php
                                }
                                ?>
                         
                                
                         
                         
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#employee_data').DataTable();  
 });  
 </script>  