<?php
session_start();
error_reporting(0);

include('includes/dbconnection.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Hotel Booking Management System | Home :: Page</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="style.css" rel="stylesheet" type="text/css" media="all" />
 <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

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
<style type="text/css">



  #counter{
  background: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(images/xx.jpg);
  background-size: cover;
  background-position: center;
  background-attachment: fixed;
  height: 300px;
  padding: 90px;
}
.flip-box {
  background-color: transparent;
  width: 300px;
  height: 200px;
  border: 1px solid #f1f1f1;
  perspective: 1000px;
}

.flip-box-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-inner {
  transform: rotateY(180deg);
}

.flip-box-front, .flip-box-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  background-color: #bbb;
  color: black;
}

.flip-box-back {
  background-color: #555;
  color: white;
  transform: rotateY(180deg);
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.line{
   max-width:100px;
  border-width:0.1rem;
  border-color:#F7CA81;
}

.line1{
   max-width:100px;
  border-width:0.1rem;
  border-color:#F7CA81;

}


.circle {
    height: 25px;
    width: 25px;
    border-radius: 50%;
    
}</style>
</head>
<body>
	<div class="container">
   <?php include_once('includes/header.php');?>
   </div>
			<div class="header">
				<div class="container">
			
		<div class="slider" style="padding-top: 100px;">
			<div class="callbacks_container">
				  <ul class="rslides" id="slider">
						 <li>	          
							<h3 >great choice of  <span style="color:#F7CA81;">hotels</span> </h3>
						 </li>
						 <li>	          
							<h3 >best rates  <span style="color:#F7CA81;">guaranteed</span> </h3>  
						 </li>
						 <li>	          
							 <h3 >the best place to <span style="color:#F7CA81;">relax</span> </h3>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
<!--header-->

		<div class="content">
					<div class="container">
						
							<h3 align="center" style="font-size: 50px; padding-bottom: 40px;">Services</h3>
					
						
				
        
                     <div class="container" style="padding-top: 50px;">
                        <div class="row">
                            <div class="col-lg-6"> 
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                <div style="border-style: solid;border-radius:50%; width: 70px; height: 70px; color:#F7CA81 ">
                                <span class="fa-stack" style="padding-top: 16px; padding-left: 14px;">
                            <i class="fas fa-wifi fa-2x" style="color:#F7CA81;"></i>
                            </span>
                                </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <h3 style="text-align: center; font-size: 30px;"> Height Speed Wifi Service</h3>
                                    <hr class="line1">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt
                                </p>
                                </div>
                                </div>
                            </div>
                             <div class="col-lg-6">
                                   <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                <div style="border-style: solid;border-radius:50%; width: 70px; height: 70px; color:#F7CA81 ">
                                <span class="fa-stack" style="padding-top: 16px; padding-left: 16px;">
                            <i class="fas fa-phone fa-2x" style="color:#F7CA81;"></i>
                            </span>
                                </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <h3 style="text-align: center ; font-size: 30px;">Phone Service 24 hour</h3>
                                    <hr class="line1">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt
                                </p>
                                </div>
                                </div>
                            </div>
                        </div>
                         
                               <div class="row my-5">
                            <div class="col-lg-6"> 
                                <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                <div style="border-style: solid;border-radius:50%; width: 70px; height: 70px; color:#F7CA81 ">
                                <span class="fa-stack" style="padding-top: 17px; padding-left: 17px;">
                            <i class="fas fa-life-ring fa-2x" style="color:#F7CA81;"></i>
                            </span>
                                </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <h3 style="text-align: center; font-size: 30px;">Pool And Gym every day</h3>
                                    <hr class="line1">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt
                                </p>
                                </div>
                                </div>
                            </div>
                             <div class="col-lg-6">
                                   <div class="row">
                                    <div class="col-lg-2 col-md-2 col-sm-2">
                                <div style="border-style: solid; border-radius:50%;width: 70px; height: 70px; color:#F7CA81 ">
                                <span class="fa-stack" style="padding-top: 16px; padding-left: 18px;">
                            <i class="fas fa-plane fa-2x" style="color:#F7CA81;"></i>
                            </span>
                                </div>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <h3 style="text-align: center ; font-size: 30px;">Swimming Pool And Gym</h3>
                                    <hr class="line1">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt
                                </p>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
       
        
	
			
		
					</div>
 <div class="container" style="padding-top: 130px;"></div>
					<div id="counter">
            <div class="container p-5">
              <div class="row text-white text-center">
              <div class="col-lg-4 col-md-4 col-sm-4">
                <h1 style="color: white">40+</h1>
                <p style="color: white">Rooms</p>
                


              </div>
              <div class="col-lg-4 col-md-4 col-sm-4">
                <h1 style="color: white">30</h1>
                <p style="color: white">Award</p>
                


              </div>
              
              <div class="col-lg-4 col-md-4 col-sm-4">
                <h1 style="color: white">245</h1>
                <p style="color: white">Events</p>
              </div>
                         </div>
            </div>
          </div>
				






 <div class="container" style="padding-top: 130px;">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
               <div class="flip-box" style="width:450px; height: 300px;">
                      <div class="flip-box-inner">
                           <div class="flip-box-front">
                                <img src="images/food.jpg" alt="Paris" style="width:450px; height: 300px;">
                                <div class="centered">
                                <div class="text-block" style="position: absolute; bottom: 10px;left: 90px;background-color: #F7CA81;color: white;padding-left: 20px;padding-right: 20px;">
                                <h2 style="padding-top: 30px;">Open at</h2>
                             <p style="padding-top: 20px;">6Am to 10Pm</p>
                             </div> 
                             </div>
                             </div>
                           <div class="flip-box-back">
                            <img src="images/da.jpg" alt="Snow" style="width:450px; height: 300px; ">
                            <div class="centered">
                                <div class="text-block" style="position: absolute; bottom: 10px;right : 90px;background-color: #F7CA81;color: white;padding-left: 20px;padding-right: 20px;">
                                <h2 style="padding-top: 30px;">Open at</h2>
                             <p style="padding-top: 20px;">6Am to 10Pm</p>
                             </div> 
                             </div>
                             </div>
                      </div>
                      </div>
                        </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <h3 style="color:#F7CA81; font-size: 40px; ">Welcome To Our</h3> <h3 style="color:#F7CA81; font-size: 40px; text-align: center; padding-bottom: 8px;" >  Restaurant</h3><hr class="line">
                    <h4 align="center" style="padding-top: 8px; padding-bottom: 9px;">Please Enjoy Our Meal</h4>
                    <p align="center">Lorem ipsum dolor si amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    </p>
                </div>
            </div>


             <div class="row" style="padding-top: 100px;">

                 <div class="col-lg-6 col-md-12 col-sm-12">
                      <h3 style="color:#F7CA81; font-size: 40px; ">Welcome To Our</h3> <h3 style="color:#F7CA81; font-size: 40px; text-align: center; padding-bottom: 8px;" >Gym and Pool</h3><hr class="line">
                    <h4 align="center" style="padding-top: 8px; padding-bottom: 9px;">Join Member Now</h4>
                    <p align="center">Lorem ipsum dolor si amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    </p>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12">
               <div class="flip-box" style="width:450px; height: 300px;">
                      <div class="flip-box-inner">
                           <div class="flip-box-front">
                                <img src="images/pool.webp" alt="Paris" style="width:450px; height: 300px;">
                                <div class="centered">
                              <div class="text-block" style="position: absolute; bottom: 10px;right: 90px;background-color:#F7CA81;color: white;padding-left: 20px;padding-right: 20px;">
                                <h2 style="padding-top: 30px;">Open at</h2>
                             <p style="padding-top: 20px;">6Am to 10Pm</p>
                             </div> 
                             </div>
                             </div>
                           <div class="flip-box-back">
                               <img src="images/gym.jpg" alt="Snow" style="width:450px; height: 300px; ">
                            <div class="centered">
                              <div class="text-block" style="position: absolute; bottom: 10px;left: 90px;background-color:#F7CA81;color: white;padding-left: 20px;padding-right: 20px;">
                                <h2 style="padding-top: 30px;">Open at</h2>
                             <p style="padding-top: 20px;">6Am to 10Pm</p>
                             </div> 
                             </div>
                             </div>
                      </div>
                      </div>
                        </div>
               
            </div>


        </div>

 <section style="padding-top: 100px;"></section>




	<!-- slider -->
	<div class="slider1">
		<div class="arrival-grids">			 
			 <ul id="flexiselDemo1">
				 <li>
					 <a href="gallery.php"><img src="images/pool.jpg" alt="" style="height: 316px;"/>
					 </a>
				 </li>
				 <li>
					 <a href="gallery.php"><img src="images/eat.jpg" alt="" style="height: 316px;"/>
					 </a>
				 </li>
				 <li>
					 <a href="gallery.php"><img src="images/ss.webp" alt="" style="height: 316px;"/>
					 </a>
				 </li>
				 <li>
					 <a href="gallery.php"><img src="images/aa.jpg" alt="" style="height: 316px;"/>
					 </a>
				 </li>
				 <li>
					 <a href="gallery.php"><img src="images/ss.jpg" alt="" style="height: 316px;"/>
					 </a>
				 </li>
				 <li>
					 <a href="gallery.php"><img src="images/gg.jpg" alt="" style="height: 316px;" />
					 </a>
				 </li>
				</ul>
				<script type="text/javascript">
				 $(window).load(function() {			
				  $("#flexiselDemo1").flexisel({
					visibleItems: 4,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover:true,
					enableResponsiveBreakpoints: true,
					responsiveBreakpoints: { 
						portrait: { 
							changePoint:480,
							visibleItems: 1
						}, 
						landscape: { 
							changePoint:640,
							visibleItems: 2
						},
						tablet: { 
							changePoint:768,
							visibleItems: 3
						}
					}
				});
				});
				</script>
				<script type="text/javascript" src="js/jquery.flexisel.js"></script>			 
		</div>
	</div>
	<!-- //slider -->
		
				<!--GET IN TOUCH-->
					<?php include_once('includes/getintouch.php');?>
			</div>
			<!--footer-->
		<?php include_once('includes/footer.php');?>
</body>
</html>
