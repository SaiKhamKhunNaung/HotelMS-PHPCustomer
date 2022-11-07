<?php
include('includes/dbconnection.php');
session_start();
error_reporting(0);
if (strlen($_SESSION['hbmsuid']==0)) {
  header('location:logout.php');
  } else{
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Booking Management System | Hotel :: My Booking</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="style.css" rel="stylesheet" type="text/css" media="all" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>

</head>
<body>
	<div class="container">
	 <?php include_once('includes/header.php');?>
   </div>
			<div class="header head-top">
				<div class="container">
	
		</div>
</div>
<!--header-->
		<!-- typography -->
	<div class="typography">
			<!-- container-wrap -->
			<div class="container">
				<div class="typography-info">
					<h2 class="type">My Hotel Booking Detail</h2>
				</div>
				
				<div class="bs-docs-example">
					<table border="1" class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination">
						 <thead>
							<tr class="warning">
								<th>#</th>
								<th>Booking Number</th>
								<th>Name</th>
								<th>Mobile Number</th>
								<th>Email</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
                                            $uid= $_SESSION['hbmsuid'];
$sql="SELECT tbluser.*,tblbooking.BookingNumber,tblbooking.Status,tblbooking.ID as bid from tblbooking join tbluser on tblbooking.UserID=tbluser.ID where UserID=:uid";

$query = $dbh -> prepare($sql);
$query-> bindParam(':uid', $uid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
							<tr>
								<td><?php echo htmlentities($cnt);?></td>
								<td><?php  echo htmlentities($row->BookingNumber);?></td>
								<td><?php  echo htmlentities($row->FullName);?></td>
								<td><?php  echo htmlentities($row->MobileNumber);?></td>
								<td><?php  echo htmlentities($row->Email);?></td>
								<?php if($row->Status==""){ ?>

                     <td><?php echo "Still Pending"; ?></td>
<?php } else { ?>                  <td><?php  echo htmlentities($row->Status);?>
                  </td>
                  <?php } ?>
							 <td><a href="view-application-detail.php?viewid=<?php echo htmlentities ($row->bid);?>" class="button" style="padding:1rem 3.25rem; font-size: 2rem;font-weight: 300;border:white;border-radius:3rem;background-color:#F7CA81 ;color:white;" input type="submit" value="Change" name="submit">View</a>


                                                    </td>
							</tr>
							<?php $cnt=$cnt+1;}} ?>
							
						</tbody>
					</table>
				</div>
			
			</div>
			<!-- //container-wrap -->
	</div>
	<!-- //typography -->

			<?php include_once('includes/getintouch.php');?>
			</div>
			<!--footer-->
				<?php include_once('includes/footer.php');?>
</body>
</html><?php }  ?>
