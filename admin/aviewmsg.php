<?php
session_start();// Starting Session
require('../sql.php'); // Includes Login Script

// Storing Session
$user = $_SESSION['admin_login_user'];

if(!isset($_SESSION['admin_login_user'])){
header("location: ../index.php");} // Redirecting To Home Page
$query4 = "SELECT * from admin where admin_name ='$user'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['admin_id'];
              $para2 = $row4['admin_name'];
			  $para3 = $row4['admin_password'];
			  
?>

<!DOCTYPE html>
<html>
	<head>
		<style>
			th p{
				font-size: small !important;
				font-weight: bolder !important;
				color: black !important;
			}
			.text-center{
				background-color: #41ac8c00 !important;
				color: black !important;
			}
		</style>
        <link rel="stylesheet" href="../assets/css/card.css">
	</head>
<?php require ('aheader.php');  ?>

  <body class="bg-white" id="top">
    <div class="shape ">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<?php require ('anav.php');  ?>
 	
  <section class="section section-shaped section-lg">

<!-- ======================================================================================================================================== -->



<div class="container ">
    
    	 
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class=" text-white  mb-3">
				  <div class="f-login">
                        <p>Contact Queries</p>

                    </div>
				  
				  <div class="card-body text-white">
				<table class="table table-striped table-hover table-bordered text-center display" id="myTable">
				
				<thead>
						<tr class="font-weight-bolder text-default text-center">
						
								<th class=" text-center"><p>ID</p> </th>
								 <th class=" text-center"> <p>Name</p> </th>
								 <th class=" text-center"> <p>Mobile No.</p> </th>
								 <th class=" text-center"> <p>Email</p> </th>
								 <th class=" text-center"> <p>Address</p> </th>
								 <th class=" text-center"> <p>Message</p> </th>
								 <th class=" text-center"> <p>Delete</p> </th>
						</tr>
				</thead>		
	
							  
				<tbody>			  
						<?php 
					$q = "select * from contactus";

								$query = mysqli_query($conn,$q);

								while($res = mysqli_fetch_array($query)){	
				 ?>		  
						  
		 <tr class="text-center">
							 <td> <?php echo $res['c_id'];  ?> </td>
							 <td> <?php echo $res['c_name'];  ?> </td>
							 <td> <?php echo $res['c_mobile'];  ?> </td>
							 <td> <?php echo $res['c_email'];  ?> </td>
							 <td> <?php echo $res['c_address'];  ?> </td>
							 <td> <?php echo $res['c_message'];  ?> </td>
						<td > <button class="btn btn-sm button" > <a href="amsgdelete.php?id=<?php echo $res['c_id']; ?>"  class=" nav-link text-white">Delete</a> </button> </td>

</tr>

							 <?php 
							 }
							  ?>
				</tbody>
				  </table>			
				  </div>
				</div>
				
					 		  
            </div>
          </div>
        </div>
		 
</section>

    <?php require("footer.php");?>
	   <script>
				$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</body>

</html>