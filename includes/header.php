
    <div class="header-top">

                        <nav class="navbar navbar-default">
                            <div class="container">
   
                                <div class="navbar-header">
                                    <img src="images/logo.png" width="150px;">
                                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                      </button>
                                    
                                        
                                        
                                  
                                </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="padding-top: 40px;">
                              <ul class="nav navbar-nav">
                                    <li class="active"><a href="index.php" style="color:#F7CA81">Home <span class="sr-only">(current)</span></a></li>
                                    <li><a href="about.php" style="color: #F7CA81">About</a></li>
                                    <li><a href="food-detail.php" style="color: #F7CA81">Our Foods</a></li>
                                    <li><a href="services.php" style="color: #F7CA81">Facilities</a></li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #F7CA81">Rooms <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <?php
$ret="SELECT * from tblcategory";
$query1 = $dbh -> prepare($ret);
$query1->execute();
$resultss=$query1->fetchAll(PDO::FETCH_OBJ);
foreach($resultss as $rows)
{               ?>
                                   <li><a href="category-details.php?catid=<?php echo htmlentities($rows->ID)?>"><?php echo htmlentities($rows->CategoryName)?></a></li>
                                    <?php } ?> 
                                </ul>
                               
                                    </li>
                        
                                    <li><a href="gallery.php" style="color: #F7CA81">Gallery</a></li>
                                    <li><a href="contact.php" style="color: #F7CA81">Contact</a></li>
                                     <?php if (strlen($_SESSION['hbmsuid']==0)) {?>
                                    <li><a href="admin/login.php" style="color: #F7CA81">Admin</a></li>

                                    <li><a href="signup.php" style="color: #F7CA81">Sign Up</a></li>
                                    <li><a href="signin.php" style="color: #F7CA81">Login</a></li><?php } ?>
                                    <?php if (strlen($_SESSION['hbmsuid']!=0)) {?>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: #F7CA81">My Account <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="profile.php" >Profile</a></li>
                                    <li><a href="my-booking.php" >My Booking</a></li>
                                    <li><a href="change-password.php" >Change Password</a></li>
                                    <li><a href="logout.php" >Logout</a></li>
                                    
                                </ul>
                                    </li><?php } ?>
                                </ul>
                              
                            </div>
  </div>
                        </nav>
</div>


                  