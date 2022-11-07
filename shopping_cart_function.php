<?php

	function Insert($FoodID,$NoOfRQty)
	{
		$dbh=mysqli_connect('localhost','root','','hbmsdb');
		$sql="SELECT *
            from tblfood
			where FoodID='$FoodID'";
			
		$query=mysqli_query($dbh,$sql);
		
		if (mysqli_num_rows($query)<1)
		{
			return false;
		}
		
		$row=mysqli_fetch_array($query);	
		$FoodID=$row['foodid'];	
		$FoodPhoto=$row['image'];
		$FoodName=$row['foodname'];
		$FoodPrice=$row['foodprice'];
		
		
		if(isset($_SESSION['Reservation']))
		{
			$index=IndexOf($FoodID);
			
			if ($index==-1)
			{
				$size=count($_SESSION['Reservation']);
              
				$_SESSION['Reservation'][$size]['foodid']=$FoodID;
				$_SESSION['Reservation'][$size]['image']=$FoodPhoto;
				$_SESSION['Reservation'][$size]['foodname']=$FoodName;
				$_SESSION['Reservation'][$size]['foodprice']=$FoodPrice;
                $_SESSION['Reservation'][$size]['NoOfQty']=$NoOfRQty;
			}
			else
			{
				$_SESSION['Reservation'][$index]['foodid']=$FoodID;
				$_SESSION['Reservation'][$index]['image']=$FoodPhoto;
				$_SESSION['Reservation'][$index]['foodname']=$FoodName;
				$_SESSION['Reservation'][$index]['foodprice']=$FoodPrice;
				$_SESSION['Reservation'][$index]['NoOfQty']=$NoOfRQty;
				$_SESSION['Reservation'][$index]['NoOfQty']=$_SESSION['Reservation'][$index]['NoOfQty']+$NoOfRQty;
			}
		}
		else
		{
			$_SESSION['Reservation']=array();
			
			$_SESSION['Reservation'][0]['foodid']=$FoodID;
			$_SESSION['Reservation'][0]['foodname']=$FoodName;
			$_SESSION['Reservation'][0]['image']=$FoodPhoto;
			$_SESSION['Reservation'][0]['foodprice']=$FoodPrice;				
			$_SESSION['Reservation'][0]['NoOfQty']=$NoOfRQty;
			
		}					
	}	
	
	function Remove($FoodID)
	{
		$index=IndexOf($FoodID);
		
		if ($index>-1)
		{
			unset($_SESSION['Reservation'][$index]);
		}
		
		$_SESSION['Reservation']=array_values($_SESSION['Reservation']);
	}
	
	function Clear()
	{
		unset($_SESSION['Reservation']);
	}
	
	function Get_TotalAmount()
	{
		if (!isset($_SESSION['Reservation']))
		{
			return 0;
		}
		
		$total=0;
		$size=count($_SESSION['Reservation']);
		
		for($i=0;$i<$size;$i++)
		{
			$noofqty=$_SESSION['Reservation'][$i]['NoOfQty'];
			$FoodPrice=$_SESSION['Reservation'][$i]['foodprice'];
			
			$total=$total+($noofqty*$FoodPrice);
		}
		
			return $total;
	}
	
	function IndexOf($FoodID)
	{
	if(isset($_SESSION['Reservation'])){			
		$size=count($_SESSION['Reservation']);
		if ($size==0)
			{
				return -1;
			}
			else{
						for ($i=0;$i<$size;$i++)
						{
							if ($FoodID==$_SESSION['Reservation'][$i]['foodid'])
							{
								return $i;
							}
						}
						return -1;
	}
}
else
{
		return -1;
}
}
?>