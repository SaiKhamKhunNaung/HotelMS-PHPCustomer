<?php
session_start();

//$connection=mysqli_connect('localhost','root','','food');
$dbh=mysqli_connect('localhost','root','','hbmsdb');
require_once("AutoID_Function.php");

require_once("shopping_cart_function.php");
if(isset($_SESSION['ID']))
{
  echo $cusID = $_SESSION["ID"];
  $select = "select * from tbluser where ID = '$cusID'";
  $sret= mysqli_query($dbh,$select);
  $row= mysqli_num_rows($sret);
}
else
{
  echo "<script>window.location.assign('login.php')</script>";
}
 if(isset($_POST['btnCheckOut']))
{
   $cardType=$_POST['rdoPaymentOption'];
   $cardNo=$_POST['txtCardInfo'];
   
	 $saleID = AutoID("tblorder","OrderID","Or-",6);
	 $paymentID = AutoID("payment","PaymentID","Pay-",6);
	  $saleDate = Date("Y-m-d",strtotime($_POST["txtdate"]));
	  $saleTime=  $_POST["txttime"];
//  $cusID = $_SESSION["CustomerID"];
	$cusID = $_POST["txtcustomerid"];
	  $deliveryAdd = $_POST["txtaddress"];
	  $contactPerson = $_POST["txtcontactperson"];
	  $contactPh = $_POST["txtContactPhone"];
	  $totalAmount = Get_TotalAmount();
	  $type=$_POST['rdoPaymentOption'];
	  $acc=$_POST['txtCardInfo'];
	 
	  echo $saleInsert=mysqli_query($dbh,"INSERT INTO
     tblorder (OrderID,TotalPrice,OrderDate,OrderTime,CustomerID,CusName,CusAddress,CusPhNo,OrderStatus)
     VALUES ('$saleID','$totalAmount','$saleDate','$saleTime','$cusID','$contactPerson','$deliveryAdd','$contactPh','Ordered')");
	
	 echo  mysqli_query($dbh,"INSERT INTO payment
      VALUES ('$paymentID','$type','$acc','$saleID')");
     
      $_SESSION['OrderID']=$saleID;
      $ReservationSize = count($_SESSION['Reservation']);
      for($i=0; $i<$ReservationSize; $i++)
      {
        $productid=$_SESSION['Reservation'][$i]['foodid'];
        $price =$_SESSION['Reservation'][$i]['foodprice'];
        $qty =$_SESSION['Reservation'][$i]['NoOfQty'];
        $amount = $_SESSION['Reservation'][$i]['foodprice'] * $_SESSION['Reservation'][$i]['NoOfQty'];
        
    
        mysqli_query($dbh,"insert into tblfooddetail
		values('$saleID','$productid','$qty','$amount')");
     
        
      }
      clear();
	 if($saleInsert)
		{
			echo "<script>
			  alert('Thanks You for Your Order. Check your email for payment options. Thank you!!! :D');
			  window.location='category.php';

			</script>";
		}
}


function saveOrder()
{
  echo $saleID = AutoID("tblorders","OrderID","Or-",6);
  $saleDate = Date("Y-m-d",strtotime($_POST["txtdate"]));
  $saleTime=  $_POST["txttime"];
//  $cusID = $_SESSION["CustomerID"];
	$cusID = $_POST["txtcustomerid"];
  $deliveryAdd = $_POST["txtaddress"];
  $contactPerson = $_POST["txtcontactperson"];
  $contactPh = $_POST["txtContactPhone"];
  $totalAmount = Get_TotalAmount();
  $type=$_POST['rdoPaymentOption'];
  $acc=$_POST['txtCardInfo'];
  
  $Status = "Pending";

// echo $saleInsert=mysqli_query($connection,"INSERT INTO
//     tblorder (OrderID,TotalPrice,OrderDate,OrderTime,CustomerID,CusName,CusAddress,CusPhNo,OrderStatus)
//     VALUES ('$saleID','$totalAmount','$saleDate','$saleTime','$cusID','$contactPerson','$deliveryAdd','$contactPh','Ordered')");
 
	echo $saleInsert=mysqli_query($dbh,"INSERT INTO
	 tblorders (OrderID,OrderDate)
	 VALUES ('$saleID','$saleDate')");
	
//	$insert="INSERT INTO tblorder (OrderID ,OrderDate)
//         VALUE('$saleID','$saleDate')";	
//$ret=mysqli_query($connection,$insert) or die(mysqli_error($connection));


//  echo  mysqli_query($connection,"INSERT INTO payment
//      VALUES ('$type','$acc','$saleID')");
     
      //$_SESSION['OrderID']=$saleID;
      $ReservationSize = count($_SESSION['Reservation']);
      for($i=0; $i<$ReservationSize; $i++)
      {
        $productid=$_SESSION['Reservation'][$i]['foodid'];
        $price =$_SESSION['Reservation'][$i]['foodprice'];
        $qty =$_SESSION['Reservation'][$i]['NoOfQty'];
        $amount = $_SESSION['Reservation'][$i]['FoodPrice'] * $_SESSION['Reservation'][$i]['NoOfQty'];
        
    
//        mysqli_query($connection,"insert into fooddetail
//		values('$saleID','$productid','$qty','$amount')");
//     
        
      }
     // clear();
	if($saleInsert)
	{
		echo "<script>
          alert('Thanks You for Your Order. Check your email for payment options. Thank you!!! :D');
          window.location='category.php';

        </script>";
	}
      
 

}

 if(isset($_GET['action']))
    {
        if ($_GET['action']=="remove")
        {
            $ProductID=$_GET['foodid'];
            Remove($ProductID);
        }
        
    }

    //  if(isset($_POST['btnContinue']))
    // {
    //     echo "<a href=''></a>";
        
    // }
?>

<html>
<head>
	<title> Hotel</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
	<link rel="icon" type="jpg" href="image/f3.png" size="16*16">

	 <script type="text/javascript">
      function CalculatePayment() 
      {
        var TotalAmount=0;
        TotalAmount=document.getElementById('txtTotalAmount').value;
        TotalAmount=TotalAmount / 2;
        document.getElementById('txtNetAmount').value=TotalAmount;
        document.getElementById('txtPendingAmount').value=TotalAmount;
      }

      function CalculatePaymentDefault() 
      {
        var TotalAmount=0;
        TotalAmount=document.getElementById('txtTotalAmount').value;
        document.getElementById('txtNetAmount').value=TotalAmount;
        document.getElementById('txtPendingAmount').value=0;
      }
      function DisplayCard() 
      {
        document.getElementById('txtCardInfo').style.display='block';
      }

      function HideCard() 
      {
        document.getElementById('txtCardInfo').style.display='none';
      }

      </script>
	
	<style type="text/css">
body{
  overflow-x: hidden;
}
.hidden-thing
{
  position: absolute;
  left: 100%;
  width: 50px;
  height: 50px;
  opacity: 0;
}
div#cool1 a {
color:white;
}

div#cool2 a {
color:white;
}

div#carouselExampleIndicators img
    {
     width:100%;
     margin: 0 auto;
     height:500px;
     object-fit:cover;
   }
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" >
		<a class="navbar-brand" href="#"><img src="image/f3.png" style="width:100px; height:70px">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active ">
					<a class="nav-link text-success" href="category.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item active ">
					<a class="nav-link text-success" href="about.html">About</a>
				</li>
			
				
					<li class="nav-item active">
						<a class="nav-link text-success" href="contact.php"  >Contact</a>
					</li>
				<li class="nav-item active">
						<a class="nav-link text-success" href="customer_update.php"  >Profile</a> 
					</li>
								<li class="nav-item active">
						<a class="nav-link text-success" href="fav_list.php"  >FavoriteList</a>
					</li>
								<li class="nav-item active">
						<a class="nav-link text-success" href="food_display_rating.php"  >Ratings</a>
					</li>
					<li class="nav-item active px-3">
						<a class="nav-link text-success" href="customer_logout.php">LogOut <span class="sr-only">(current)</span></a>
					</li>
				</ul>
				
			</div>
		</nav>

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active" class="col-lg-12 col-md-12 col-sm-12 my-3">
					<img src="i.jpg" class="d-block w-100" alt="..." >
				</div>
				<div class="carousel-item" class="col-lg-12 col-md-12 col-sm-12 my-3">
					<img src="l.jpg" class="d-block w-100" alt="...">
				</div>
				<div class="carousel-item" class="col-lg-12 col-md-12 col-sm-12 my-3">
					<img src="o.jpg" class="d-block w-100" alt="...">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<br><br>
		<div class="container">
			<div class="row">

<!-- 	<div class="container" style="padding:20px;">
-->		<div class="col-lg-6 col-md-6 col-sm-12">
	<h3 style="text-align: center; color:green;">Create Order</h3>
	
	 <form action="checkout.php" method="post">

		<div class="form-group">
			OrderID<input type="text" readonly name="txtorderid" class="form-control my-3" value="<?php echo AutoID("tblorder","OrderID","Or-",6); ?>">
			Total Amount<input type="text" readonly name="txttotalamount" class="form-control my-3" id="username" value="<?php echo Get_TotalAmount();  ?>MMK">
			
			<?php
				$query="SELECT * FROM tbluser
				where ID='$cusID'";

				$ret=mysqli_query($connection,$query);
				$arr=mysqli_fetch_array($ret);

				$CustomerName=$arr['FullName'];
				$CustomerPhNo=$arr['MobileNumber'];
			?>
			<input type="text" name="txtcustomerid" class="form-control my-3" value="<?php echo $cusID;	?>" id="username">
			Contact Person<input type="text" name="txtcontactperson" class="form-control my-3" value="<?php echo $CustomerName;	?>" id="username">

			Contact No<input type="text" name="txtContactPhone" class="form-control my-3" id="phone" value="<?php echo $CustomerPhNo;	?>" >
			
			<label >Select Date & Time 
				<input type="date" name="txtdate" class="form-control " id="date" required >
				<input type="time" name="txttime" class="form-control " id="time" required>

			</label>
			
<!--
			<select name="cboCard" class="form-control my-3">
			  <option>SELECT PAYMENT TYPE</option>
				<option>Master</option>
		  		<option>Visa Card</option>
				<option>Paypal</option>
				<option>Cash On Delivery</option>
			</select>

	<input type="text" name="txtCardNo" class="form-control my-3" placeholder="Type Card Number Here"/>
--><br>
			Select Payment Type <br>
			<input onClick="HideCard()" type="radio" name="rdoPaymentOption" value="COD" checked/> Cash Down</abbr>
			 <input onClick="DisplayCard()" type="radio" name="rdoPaymentOption" value="UCB"/> <img src="image/ucb.png" width="30px" height="25px"/>
			 <input onClick="DisplayCard()" type="radio" name="rdoPaymentOption" value="Visa"/> <img src="image/visa.png" width="40px" height="30px"/>
			 <input onClick="DisplayCard()" type="radio" name="rdoPaymentOption" value="Master"/> <img src="image/mc.png" width="40px" height="30px"/>
			 <input onClick="DisplayCard()" type="radio" name="rdoPaymentOption" value="Paypal"/> <img src="image/Paypal.png" width="40px" height="30px"/>
			 <br/><br/>
			 <input type="text" id="txtCardInfo" name="txtCardInfo" size="25" placeholder="Card Number" style="display:none;"/>
			<textarea class="form-control my-3" type="text" name="txtaddress" class="form-control my-3" placeholder="Enter your full Address" id="address" required></textarea>
		</div>

		<button type="submit" name="btnCheckOut"  data-toggle="modal" data-target="#cardtwoModal" class=" btn btn-success btn-block">Order</a>

	

<!--  <input type="submit" class="btn-success" value="Create">
-->  
<button type="reset" class="btn btn-success btn-block">
			Reset
		</button>


</form>
</div>


	

</div>
</div>

</div>

		</body></html>

