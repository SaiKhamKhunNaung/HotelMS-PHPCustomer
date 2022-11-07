<?php  
session_start();
$dbh=mysqli_connect('localhost','root','','hbmsdb');

include('shopping_cart_function.php');

if(isset($_POST['action']))
    {
        if($_POST['action']=="buy")
        {   
            $Name=$_POST['FoodName'];
            $FoodPrice=$_POST['FoodPrice'];
            $FoodID=$_POST['FoodID'];
             $NoOfQty = $_POST['txtbuyQty'];
            $cTotal=$FoodPrice*$NoOfQty;
            
            
            $sql="SELECT *
                  from tblfood
                  where foodid='$FoodID'";
            $query=mysqli_query($dbh,$sql);
            $row_item=mysqli_fetch_array($query); 
                 
                $statusOK=Insert($FoodID,$NoOfQty);
           
            
        }
    }
    if(isset($_GET['action']))
    {
        if ($_GET['action']=="remove")
        {
            $FoodID=$_GET['FoodID'];
            Remove($FoodID);
        }
        elseif ($_GET['action']=="ClearReservation")
        {
            Clear();
            echo '<script type="text/javascript">
                alert("You cleared all shopping cart.");
                window.location.href="category.php";
                </script>';
        }
    }
?>
<html>

	<head>
	</head>
	<body>
		
		
	<form action="shopping_cart.php" method="post">
  
  <?php   
        if (!isset($_SESSION['Reservation']))
        {
      echo '<script type="text/javascript">
        alert("You do not make any ShoppingCart!!");
        window.location.href="category.php";
          </script>';
      exit();
        }
  ?>

        <div class="container" >
		<h2 class="text-success my-5" style="align:center">ShoppingCart</h2>
	<table class="table table-success">
		<thead>
			<tr>
				<th scope="col">FoodID</th>
				<th scope="col">FoodPhoto</th>
				<th scope="col">FoodName</th>
				<th scope="col">FoodPrice</th>
				<th scope="col">FoodQty</th>
				<th scope="col">Subtotal</th>
				<th scope="col">Remove</th>
			</tr>
		</thead>
		<tbody id="list">
			
			<?php
            $size=count($_SESSION['Reservation']);

            
            for($i=0;$i<$size;$i++)
            {
                      
      ?>    <tr>
				<td><?php echo $_SESSION['Reservation'][$i]['foodid'] ?></td>
				<td><img src='<?php echo $_SESSION['Reservation'][$i]['image'] ?>' width='100' height='100' /></td>
				<td><?php echo $_SESSION['Reservation'][$i]['foodname'] ?></td>
              
				 <td>$ <?php echo $_SESSION['Reservation'][$i]['foodprice'] ?></td>
                
                <td><?php echo $_SESSION['Reservation'][$i]['NoOfQty'] ?></td>
               
                <td>
                    $ <?php echo $_SESSION['Reservation'][$i]['NoOfQty'] * $_SESSION['Reservation'][$i]['foodprice'] ?>
                </td>
                <td>
                    <a href="shopping_cart.php?action=remove&foodid=<?php 
                    echo $_SESSION['Reservation'][$i]['foodid'] ?>">Remove</a>
                </td>
            </tr>
      <?php             
              }
      ?>
		
		
		
		
					
					
		
		
	
		</tbody>
	</table>
		
		
		
     
      <br>
      Total Amount : $ <?php echo Get_TotalAmount() ?><br/>
      
      <br><br>
      <a href="category.php">Continue Shopping  |</a> 
      
      <a href="shopping_cart.php?action=ClearReservation">Clear All Orders  |</a>
      
         <?php
        
        if(isset($_SESSION['ID']))
        {
             echo "<a href=\"checkout.php\">Check Out</a>";
        }
        else
        {
           echo "<a href=\"signin.php\">Login</a>";
        }
        
    ?>
      
            
		</div>
  </form>
</body>
</html>
