<?php
session_start();
ob_start();
include_once  'config.php';
 if(isset($_GET['post_id'])){
	$post_id= $_GET['post_id'];
	$query="SELECT * FROM user_post WHERE post_id=$post_id";
	$search_result=filterTable($query);
}
function filterTable($query)
{
	 $conn = new mysqli("127.0.0.1", "root", "", "uiu_book_shop");
    $filter_result = mysqli_query($conn, $query);
    return $filter_result;
}
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>UIU Book Shop</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Super Market Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="container">
			<div class="w3l_offers">
			<!--	<p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>-->
			</div>
			<div class="agile-login">
				<ul>
                                    <?php if (isset($_SESSION['usr_id'])) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <span class="glyphicon glyphicon-user"></span> 
                                    <strong><?php
                                        $usrname = $_SESSION['usr_first_name'];
                                        echo $usrname;
                                        ?></strong>
                                    <span class="glyphicon glyphicon-chevron-down"></span>
                                </a>
                                <ul style="background-color:white;" class="dropdown-menu">
                                    <li>
                                        <div class="navbar-login">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <p class="text-center">
                                                        <span class="glyphicon glyphicon-user icon-size"></span>
                                                    </p>
                                                </div>
                                                <div class="col-lg-8">
                                                    <p class="text-left"><strong><?php echo $usrname; ?></strong></p>

                                                    <p class="text-left">
                                                        <a href="user_profile.php" class="btn btn-primary btn-block btn-sm">Profile</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <div class="navbar-login navbar-login-session">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <p>
                                                        <a href="logout.php" class="btn btn-danger btn-block">Logout</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                                        <!--<li><a class="navbar-text" href="user_profile.php">Signed in as <?php //echo $_session['name'];       ?></a></li>
                                            <li><a href="logout.php">Log Out</a></li>-->
                        <?php } else { ?>
                            <li><a href="registration.php"> Create Account </a></li>
                            <li><a href="login.php">Login</a></li>-->
                        <?php } ?>
                                    
                                    
					
					
				</ul>
			</div>
			<div class="product_list_header">  
					<ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                                <form action="#" method="post" class="last"> 
                        <input type="hidden" name="cmd" value="_cart">
                        <input type="hidden" name="display" value="1">
                        <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                        
                    </form>
                                
                            </li>
                            
                            
                            
                        </ul>  
			</div>
			<div class="product_list_header">
                        <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        
                        
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                            
                        </ul>
                        
                    </div>

                     <div class="product_list_header">  
                            
                            <ul class="nav navbar-top-links navbar-right">
                                
                    <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Tanima Yousuf</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>hello, i m interested about your calculas book</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Moumita Mahfuz</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>hello, i want to exchange ur Databse books with my java books</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Maruf Ahamed </strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>i have the algorithm books what u requested.. </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                
                            </ul>
            </div>
			<div class="clearfix"> </div>
		</div>
	</div>

	<div class="logo_products">
		<div class="container">
		<!--<div class="w3ls_logo_products_left1">
				<ul class="phone_email">
					<li><i class="fa fa-phone" aria-hidden="true"></i>Order online or call us : (+0123) 234 567</li>
					
				</ul>
			</div>-->
			<div class="w3ls_logo_products_left">
				<h1><a href="index.php">UIU Book Shop</a></h1>
			</div>
		<div class="w3l_search">
                    <form action="search.php" method="post">
				<input type="search" name="search_title" placeholder="Search for a Product..." required="">
                                <button type="submit" class="btn btn-default search" aria-label="Left Align" name="search">
					<i class="fa fa-search" aria-hidden="true"> </i>
				</button>
				<div class="clearfix"></div>
			</form>
		</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- navigation -->
	<div class="navigation-agileits">
		<div class="container">
			<nav class="navbar navbar-default">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header nav_2">
								<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div> 
							<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
								<ul class="nav navbar-nav">
                                                                    <li class="active"><a href="index.php" class="act">Home</a></li>	
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Post<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Post</h6>
														<li><a href="groceries.html">Admin Post</a></li>
														<li><a href="groceries.html">User Post</a></li>
														<li><a href="groceries.html">Buy Post</a></li>
														<li><a href="groceries.html">Sell Post</a></li>
														<li><a href="groceries.html"> Exchange Post</a></li>
													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All Shop</h6>
														<li><a href="household.html">Category</a></li>
														<li><a href="household.html">All Books</a></li>
														<li><a href="household.html">Book Related Equipment</a></li>
													</ul>
												</div>
												
												
											</div>
										</ul>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">News<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6>All News</h6>
														<li><a href="personalcare.html">Latest News</a></li>
														<li><a href="personalcare.html">Book Launch</a></li>
														<li><a href="personalcare.html">Upcoming Books</a></li>
														<li><a href="personalcare.html">Offer News</a></li>
													</ul>
												</div>
												
											</div>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
								</ul>
							</div>
							</nav>
			</div>
		</div>
		
<!-- //navigation -->
<!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Posts</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
		<?php
	
		while($row=mysqli_fetch_array($search_result))
		{ 
			if($row['post_type']=='Sell'){
	echo '<div class="products">';
	echo	'<div class="container">';
	echo		'<div class="agileinfo_single">';
				
	echo			'<div class="col-md-4 agileinfo_single_left">';
	echo				  "<img src='".$row['cover']."' height=300 width=300>";
	echo			"</div>";
	echo			'<div class="col-md-8 agileinfo_single_right">';

			   
echo			  " <h2>Book Title:". $row['book_title']."</h2>";
echo               "<b>Post Type:".$row['post_type']."</b>";
echo                "<br><br>";
echo               "<b>Category:".$row['category']." </b>";
echo                                "<br><br>";
echo               "<b>Author Name:".$row['author']." </b>";
echo                              "<br><br>";
echo               "<b>Edition:".$row['edition']."</b>";
echo                                "<br><br>";
echo              "<b>ISBN:".$row['isbn']."</b>";

	   echo		       '<div class="w3agile_description">';
	   echo                 "<h4>Description :</h4>";
	   echo                "<p>".$row['description']."</p>";
	    echo  			"</div>";
echo "<b>Original Price:".$row['orginal_price']."</b>";
echo "<br><br>";
echo "<b>My Price: ".$row['your_price']." </b>";
echo "<br><br>";
echo "<b>Contact Email:".$row['contact_email']."</b>";
echo "<br><br>";
echo "<b>Post Date:".$row['post_date_time']."</b>";
echo "<br><br>";
}
echo "<br><br>";
 if($row['post_type']=='Buy')
	{
	echo '<div class="products">';
	echo	'<div class="container">';
	echo		'<div class="agileinfo_single">';
				
	echo			'<div class="col-md-4 agileinfo_single_left">';
	echo				  "<img src='".$row['cover']."' height=300 width=300>";
	echo			"</div>";
	echo			'<div class="col-md-8 agileinfo_single_right">';

			   
echo			  " <h2>Book Title:".$row['book_title']."</h2>";
echo               "<b>Post Type:".$row['post_type']."</b>";
echo                "<br><br>";
echo               "<b>Category:".$row['category']." </b>";
echo                                "<br><br>";
echo               "<b>Author Name:".$row['author']." </b>";
echo                              "<br><br>";
echo               "<b>Edition:".$row['edition']."</b>";
echo                                "<br><br>";
echo              "<b>ISBN:".$row['isbn']."</b>";

	   echo		       '<div class="w3agile_description">';
	   echo                 "<h4>Description :</h4>";
	   echo                "<p>".$row['description']."</p>";
	    echo  			"</div>";

echo "<b>My Price: ".$row['your_price']." </b>";
echo "<br><br>";
echo "<b>Contact Email:".$row['contact_email']."</b>";
echo "<br><br>";
echo "<b>Post Date:".$row['post_date_time']."</b>";
echo "<br><br>";
}
 if ($row['post_type']=='Exchange')
{	echo '<div class="products">';
	echo	'<div class="container">';
	echo		'<div class="agileinfo_single">';
				
	echo			'<div class="col-md-4 agileinfo_single_left">';
	echo				  "<img src='".$row['cover']."' height=300 width=300>";
	echo			"</div>";
	echo			'<div class="col-md-8 agileinfo_single_right">';

			   
echo			  " <h2>Book Title:".$row['book_title']."</h2>";
echo               "<b>Post Type:".$row['post_type']."</b>";
echo                "<br><br>";
echo               "<b>Category:".$row['category']." </b>";
echo                                "<br><br>";
echo               "<b>Author Name:".$row['author']." </b>";
echo                              "<br><br>";
echo               "<b>Edition:".$row['edition']."</b>";
echo                                "<br><br>";
echo              "<b>ISBN:".$row['isbn']."</b>";

	   echo		       '<div class="w3agile_description">';
	   echo                 "<h4>Description :</h4>";
	   echo                "<p>".$row['description']."</p>";
	    echo  			"</div>";

echo "<b>Contact Email:".$row['contact_email']."</b>";
echo "<br><br>";
echo "<b>Post Date:".$row['post_date_time']."</b>";
echo "<br><br>";
}
}
echo "<br><br>";
?>
					<div class="snipcart-item block">
<!--						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4 class="m-sing">$21.00 <span>$25.00</span></h4>
						</div>-->
						<div class="snipcart-details agileinfo_single_right_details">
							<form action="#" method="post">
								<fieldset>
<!--									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="add" value="1">
									<input type="hidden" name="business" value=" ">
									<input type="hidden" name="item_name" value="pulao basmati rice">
									<input type="hidden" name="amount" value="21.00">
									<input type="hidden" name="discount_amount" value="1.00">
									<input type="hidden" name="currency_code" value="USD">
									<input type="hidden" name="return" value=" ">
									<input type="hidden" name="cancel_return" value=" ">-->
									<input type="submit" name="submit" value="Add to cart" class="button">
								</fieldset>
							</form>
						</div>
					</div>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //register -->
<!-- //footer -->
<div class="footer">
		<div class="container">
			<div class="w3_footer_grids">
				<div class="col-md-3 w3_footer_grid">
					<h3>Contact</h3>
					
					<ul class="address">
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>abc <span>abc.</span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 </li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Information</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="faq.html">FAQ's</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3>Category</h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="groceries.html">Post</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="household.html">Shop</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="personalcare.html">News</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3_footer_grid">
					<h3> <a href="user_profile.php">Profile</a></h3>
					<ul class="info"> 
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="products.html">Store</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="checkout.html">My Cart</a></li>
						<li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="login.php">Login</a></li>
                                                <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="registration.php">Create Account</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		
		<div class="footer-copy">
			
			<div class="container">
				
			</div>
		</div>
		
	</div>
<!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<!-- top-header and slider -->
<!-- here stars scrolling icon -->
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
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 

</body>
</html>