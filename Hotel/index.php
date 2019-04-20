<?php
 session_start();  
 if(isset($_SESSION["user"]))  
 {  
			echo("user is available");  
 }  
 
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SUNRISE HOTEL</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->
</head>
<body>
<!-- header -->
<div class="banner-top">
			<div class="clearfix"></div>
		</div>
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">SUN <span>RISE</span><p class="logo_w3l_agile_caption">Your Dreamy Resort</p></a></h1>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link scroll">About</a></li>
							<li class="menu__item"><a href="#team" class="menu__link scroll">Team</a></li>
							<li class="menu__item"><a href="#gallery" class="menu__link scroll">Gallery</a></li>
							<li class="menu__item"><a href="#rooms" class="menu__link scroll">Rooms</a></li>
							<li class="menu__item"><a href="#contact" class="menu__link scroll">Contact Us</a></li>
							<li class="menu__item"><a href="admin/index.php" class="menu__link	">Login</a></li>
						</ul>
					</nav>
				</div>
			</nav>

		</div>
	</div>
<!-- //header -->
		<!-- banner -->
	<div id="home" class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>SUN RISE</h4>
									<h3>We know what you love</h3>
										<p>Welcome to our hotels</p>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>SUN RISE</h4>
									<h3>Stay with friends & families</h3>
										<p>Come & enjoy precious moment with us</p>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top2">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>SUN RISE</h4>
								<h3>want luxurious vacation?</h3>
										<p>Get accommodation today</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		
<!--//Header-->
<div id="availability-agileits">
<div class="col-md-12 book-form-left-w3layouts">
	<a href="admin/reservation.php"><h2>ROOM RESERVATION</h2></a>
</div>
			<div class="clearfix"> </div>
</div>
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">	
			<div class="agileits_banner_bottom">
				<h3><span>Experience a good stay, enjoy fantastic offers</span> Find our friendly welcoming reception</h3>
			</div>
			<div class="w3ls_banner_bottom_grids">
				<ul class="cbp-ig-grid">
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_road"></span>
							<h4 class="cbp-ig-title">MASTER BEDROOMS</h4>
							<span class="cbp-ig-category">SUN RISE</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_cube"></span>
							<h4 class="cbp-ig-title">SEA VIEW BALCONY</h4>
							<span class="cbp-ig-category">SUN RISE</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_users"></span>
							<h4 class="cbp-ig-title">LARGE CAFE</h4>
							<span class="cbp-ig-category">SUN RISE</span>
						</div>
					</li>
					<li>
						<div class="w3_grid_effect">
							<span class="cbp-ig-icon w3_ticket"></span>
							<h4 class="cbp-ig-title">WIFI COVERAGE</h4>
							<span class="cbp-ig-category">SUN RISE</span>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- /about -->
 	<div class="about-wthree" id="about">
		  <div class="container">
				   <div class="ab-w3l-spa">
                            <h3 class="title-w3-agileits title-black-wthree">About Our SUN RISE</h3> 
						   <p class="about-para-w3ls">Lorem Ipsum is simply dummy text of the printing and typesetting industry.Sed tempus vestibulum lacus blandit faucibus. Nunc imperdiet, diam nec rhoncus ullamcorper, nisl nulla suscipit ligula, at imperdiet urna</p>
						   <img src="images/about.jpg" class="img-responsive" alt="Hair Salon">
										<div class="w3l-slider-img">
											<img src="images/a1.jpg" class="img-responsive" alt="Hair Salon">
										</div>
                                       <div class="w3ls-info-about">
										    <h4>You'll love all the amenities we offer!</h4>
											<p>Lorem ipsum dolor sit amet, ut magna aliqua. </p>
										</div>
		          </div>
		   	<div class="clearfix"> </div>
    </div>
</div>
 	<!-- //about -->
<!--sevices-->
<div class="advantages">
	<div class="container">
		<div class="advantages-main">
				<h3 class="title-w3-agileits">Our Services</h3>
		   <div class="advantage-bottom">
			 <div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
			 	<div class="advantage-block ">
					<i class="fa fa-credit-card" aria-hidden="true"></i>
			 		<h4>Stay First, Pay After! </h4>
			 		<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Decorated room, proper air conditioned</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>Private balcony</p>
			 		
			 	</div>
			 </div>
			 <div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
			 	<div class="advantage-block">
					<i class="fa fa-clock-o" aria-hidden="true"></i>
			 		<h4>24 Hour Restaurant</h4>
			 		<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates.</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24 hours room service</p>
					<p><i class="fa fa-check" aria-hidden="true"></i>24-hour Concierge service</p>
			 	</div>
			 </div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//sevices-->
<!-- team -->
<div class="team" id="team">
	<div class="container">
			<h3 class="title-w3-agileits title-black-wthree">Meet Our Team</h3>
			<div id="horizontalTab">
					<ul class="resp-tabs-list">
					<li>
						<img src="images/teams1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams2.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams3.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/teams4.jpg" alt=" " class="img-responsive" />
					</li>
					</ul>
					<div class="resp-tabs-container">
					<div class="tab1">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Lucas Jimenez</h4>
							<span>Manager</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab2">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Sarah Connor</h4>
							<span>Receptionist</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>	
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab3">
						<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Ivan Simpson</h4>
							<span>Manager</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="tab4">
					<div class="col-md-6 team-img-w3-agile">
						</div>
						<div class="col-md-6 team-Info-agileits">
							<h4>Marc Gutierrez</h4>
							<span>Receptionist</span>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.Lorem ipsum dolor .</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					</div>
			</div>
	</div>
</div>
<!-- //team -->
<!-- Gallery -->
<section class="portfolio-w3ls" id="gallery">
		 <h3 class="title-w3-agileits title-black-wthree">Our Gallery</h3>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g1.jpg" class="swipebox"><img src="images/g1.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g3.jpg" class="swipebox"><img src="images/g3.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
					</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g7.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
					   </div>
				   </a>
				</div>
					<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g9.jpg" class="swipebox"><img src="images/g9.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="col-md-3 gallery-grid gallery1">
					<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
						<div class="textbox">
						<h4>SUN RISE</h4>
							<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
						</div>
				</a>
				</div>
				<div class="clearfix"> </div>
</section>
<!-- //gallery -->
	 <!-- rooms & rates -->
      <div class="plans-section" id="rooms">
				 <div class="container">
				 <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
						<div class="priceing-table-main">
				 <div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r1.jpg" alt=" " class="img-responsive" />
							<h4>Deluxe Room</h4>
						</div>
						<div class="price-gd-bottom">
							   <div class="price-list">
									<ul>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star" aria-hidden="true"></i></li>
											<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									
								     </ul>
							</div>
							<div class="price-selet">	
								<h3><span>$</span>320</h3>						
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid ">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r2.jpg" alt=" " class="img-responsive" />
							<h4>Luxury Room</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
									<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span>220</h3>
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid lost">
					<div class="price-block agile">
						<div class="price-gd-top">
						<img src="images/r3.jpg" alt=" " class="img-responsive" />
							<h4>Guest House</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span>180</h3>
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree lost">
					<div class="price-block agile">
						<div class="price-gd-top ">
							<img src="images/r4.jpg" alt=" " class="img-responsive" />
							<h4>Single Room</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>
								</ul>
							</div>
							<div class="price-selet">
								<h3><span>$</span> 150</h3>
								<a href="admin/reservation.php" >Book Now</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div style="text-align: center;">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
			<p class="contact-agile1"><strong>Phone :</strong>+94 (65)222-44-55</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:name@example.com">INFO@SUNRISE.COM</a></p>
			<p class="contact-agile1"><strong>Address :</strong> New Kalmunai Road, Batticaloa, Sri Lanka</p>
			</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
			<div class="copy">
		        <p>© 2017 SUNRISE . All Rights Reserved | Design by <a href="index.php">SUNRISE</a> </p>
		    </div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- contact form -->
<script src="js/jqBootstrapValidation.js"></script>

<!-- /contact form -->	
<!-- Calendar -->
		<script src="js/jquery-ui.js"></script>
		<script>
				$(function() {
				$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
				});
		</script>
<!-- //Calendar -->
<!-- gallery popup -->
<link rel="stylesheet" href="css/swipebox.css">
				<script src="js/jquery.swipebox.min.js"></script> 
					<script type="text/javascript">
						jQuery(function($) {
							$(".swipebox").swipebox();
						});
					</script>
<!-- //gallery popup -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
<!--tabs-->
<script src="js/easy-responsive-tabs.js"></script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
});
</script>
<!--//tabs-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	
	<div class="arr-w3ls">
	<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>


