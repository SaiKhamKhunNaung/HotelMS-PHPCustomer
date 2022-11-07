<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Booking Management System | Hotel :: Gallery</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightbox.css">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
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
		<div class="content">
			<!-- gallery -->
	<div class="gallery-top">
			<!-- container -->
			<div class="container">
				<div class="gallery-info">
					<h2>gallery</h2>
				</div>
				<div class="gallery-grids-top">
					<div class="gallery-grids">
						<?php
$sql="SELECT * from tblroom";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
						<div class="col-md-3 gallery-grid">
							<br/>
							<a class="example-image-link" href="admin/images/<?php echo $row->Image;?>" data-lightbox="example-set" data-title=""><img class="example-image" src="admin/images/<?php echo $row->Image;?>" height="200" width="300" alt=""/></a>

						</div><?php $cnt=$cnt+1;}} ?>

						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/pool.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/pool.jpg"height="200" width="300" alt=""/></a>
						</div>	
						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/pool.webp" data-lightbox="example-set" data-title=""><img class="example-image" src="images/pool.webp"height="200" width="300" alt=""/></a>
						</div>	
						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/food.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/food.jpg"height="200" width="300" alt=""/></a>
						</div>	
						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/food2.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/food2.jpg"height="200" width="300" alt=""/></a>
						</div>	
						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/zz.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/zz.jpg"height="200" width="300" alt=""/></a>
						</div>	
						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/ve.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/ve.jpg"height="200" width="300" alt=""/></a>
						</div>	
							<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/vv.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/vv.jpg"height="200" width="300" alt=""/></a>
						</div>	
						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/last.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/last.jpg"height="200" width="300" alt=""/></a>
						</div>	
                        <div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/ss.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/ss.jpg"height="200" width="300" alt=""/></a>
						</div>	

						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/da.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/da.jpg"height="200" width="300" alt=""/></a>
						</div>	

						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/ccv.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/ccv.jpg"height="200" width="300" alt=""/></a>
						</div>	

						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/bbn.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/bbn.jpg"height="200" width="300" alt=""/></a>
						</div>	


						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/house.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/house.jpg"height="200" width="300" alt=""/></a>
						</div>	



						<div class="col-md-3 gallery-grid">
							<br />
						<a class="example-image-link" href="images/house2.jpg" data-lightbox="example-set" data-title=""><img class="example-image" src="images/house2.jpg"height="200" width="300" alt=""/></a>
						</div>	

						<div class="clearfix"> </div>
					</div>
		
					<script src="js/lightbox-plus-jquery.min.js"></script>
				</div>
			</div>
			<!-- //container -->
	</div>
	<!-- //gallery -->

				<?php include_once('includes/getintouch.php');?>
			</div>
			<!--footer-->
					<?php include_once('includes/footer.php');?>
</body>
</html>
