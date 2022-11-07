<?php  

$dbh=mysqli_connect('localhost','root','','hbmsdb');

?>

<html>

	<body>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 my-12">
		  <div class="container my-5">
    <h1 align="center">Foodtype</h1>
<form action="fppd-detail.php" method="get">
<fieldset>
<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					
					
				</div>
			</div>
	</div>
	</div>

<table align="center">
    <tr>
	<td align="center" colspan="3">
		<div class="row form-group">
							<div class="col-md-12">
								<input type="text" id="email" class="form-control" placeholder="Enter Search Keywords"name="txtData"><br>
							    <input type="submit" value="Search" name="btnSearch"class="btn btn-primary">
		
		</div>
		</div>
	    </td>
        </tr>
        </table>
			
	
		
<?php
if(isset($_GET['btnSearch'])) 
{
	$txtData=$_GET['txtData'];

	$query1="SELECT * FROM tblfoodtype
			 WHERE foodtypename LIKE '%$txtData%'
			 ORDER BY foodtypeid DESC";
	$result1=mysqli_query($dbh,$query1);
	$count1=mysqli_num_rows($result1);
	
	for($i=0;$i<$count1;$i+=3) 
	{ 
		$query2="SELECT * FROM tblfoodtype
				 WHERE foodtypename LIKE '%$txtData%'
				 ORDER BY foodtypeid DESC
				 LIMIT $i,3";
		$result2=mysqli_query($dbh,$query2);
		$count2=mysqli_num_rows($result2);
		echo "<table>";
		echo "<tr>";
		for($j=0;$j<$count2;$j++) 
		{ 
			$row=mysqli_fetch_array($result1);

				$CategoryID=$row['foodtypeid'];
			$CategoryName=$row['foodtypename'];
		

			?>
			<div class="row">
      
      <div class="col-lg-3 col-md-6 col-sm-12 my-3">
        <div class="card">
          <img src="image/koko.webp" class="card-img-top">
          <div class="card-body">
            <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
    <i class="fas fa-star"></i>
            <h5 class="card-title"><?php echo $CategoryName; ?></h5>
    
         </div>

          <div class="card-footer bg-transparent">
            
                      
                     <a href="food_display.php?CategoryID=<?php echo $CategoryID ?>">More</a>
          </div>
      </div>
      </div>
					
		</div>
		
		</div>	</div>	
			<?php
		}
		echo "</tr>";
		echo "</table>";
	}
}
else
{
	$query1="SELECT * FROM tblfoodtype
			ORDER BY foodtypeid DESC";
	$result1=mysqli_query($dbh,$query1);
	$count1=mysqli_num_rows($result1);

	for($i=0;$i<$count1;$i+=4) 
	{ echo "<table>";
		echo "<tr>";
	    echo "<td>";
	 /*
		$query2="SELECT * FROM category
				 ORDER BY CategoryID DESC
				 LIMIT $i,4";
		$result2=mysqli_query($connection,$query2);
		$count2=mysqli_num_rows($result2);
        
		for($j=0;$j<$count2;$j+=2) 
		{ */
			$row=mysqli_fetch_array($result1);

			$CategoryID=$row['foodtypeid'];
			$CategoryName=$row['foodtypename'];
		

			?>
			 
  

    <div class="row">
      
		<div class="col-lg-3 col-md-6 col-sm-12 my-3">
		<div class="card">
         <a href="food_display.php?CategoryID=<?php echo $CategoryID ?>"> <img src="images/koko.webp" class="card-img-top"></a>
          <div class="card-body">
           
            <h5 class="card-title"><?php echo $CategoryName; ?></h5>
    
         </div>

      </div>
		</div>
	
		
		<?php 
	     if($i==$count1-1 ) {
			 echo"<div class='col-lg-3 col-md-6 col-sm-12 my-3'> ";
			 echo"<img src='white.jpg' width='250px' height='230px' alt='None' >"; echo"</div>";	
		 }
		 else { 
			 $row=mysqli_fetch_array($result1);

			$CategoryID=$row['foodtypeid'];
			$CategoryName=$row['foodtypename']; 
		?>
		<div class="col-lg-3 col-md-6 col-sm-12 my-3">
        <div class="card">
          <a href="food_display.php?CategoryID=<?php echo $CategoryID ?>"><img src="images/koko.webp" class="card-img-top"></a>
          <div class="card-body">
            
            <h5 class="card-title"><?php echo $CategoryName; ?></h5>
    
         </div>

         
      </div>
      </div> <?php } ?>
		
		<?php 
			if($i==$count1-1  || $i==$count1-2)
				{
			 echo"<div class='col-lg-3 col-md-6 col-sm-12 my-3'> ";
			 echo"<img src='white.jpg' width='250px' height='230px' alt='None'>"; echo"</div>";	
		 }
	 else {
			$row=mysqli_fetch_array($result1);

			$CategoryID=$row['foodtypeid'];
			$CategoryName=$row['foodtypename']; 
		?>
		<div class="col-lg-3 col-md-6 col-sm-12 my-3">
        <div class="card">
          <a href="food_display.php?CategoryID=<?php echo $CategoryID ?>"><img src="images/koko.webp"class="card-img-top"></a>
          <div class="card-body">
          
            <h5 class="card-title"><?php echo $CategoryName; ?></h5>
    
         </div>

       
      </div>
      </div> <?php } ?>
		
		
		<?php 
			if($i==$count1-1  || $i==$count1-2 || $i==$count1-3)
				{
			 echo"<div class='col-lg-3 col-md-6 col-sm-12 my-3'> ";
			 echo"<img src='white.jpg' width='250px' height='230px' alt='None'>"; echo"</div>";	
		 }
	 else {
			$row=mysqli_fetch_array($result1);

			$CategoryID=$row['foodtypeid'];
			$CategoryName=$row['foodtypename']; 
		?>
		<div class="col-lg-3 col-md-6 col-sm-12 my-3">
        <div class="card">
           <a href="food_display.php?CategoryID=<?php echo $CategoryID ?>"><img src="images/koko.webp" class="card-img-top" ></a>
          <div class="card-body">
           
            <h5 class="card-title"><?php echo $CategoryName; ?></h5>
    
         </div>


      </div>
      </div> <?php } ?>
		
		
		
		
					
		</div>
		
		</div>	</div>
			<?php
		//}
			echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
}
			
?>

					
</table>
			
</fieldset>
	</div> </div>
	
<div class="row">
      
		<div class="col-lg-12 col-md-12 col-sm-12 my-12">

	</div></div>
</body>
</html>
