<?php
session_start();
ob_start();
include_once  'config.php';

if (isset($_POST['search'])) {
$value=$_POST['search_title'];

$query="SELECT * FROM user_post WHERE book_title LIKE '%".$value."%'"  ;
$search_result=filterTable($query);
    
}

function filterTable($result) {
    $conn = new mysqli("127.0.0.1", "root", "", "uiu_book_shop");
    $filter_result = mysqli_query($conn, $result);
    return $filter_result;
}

?>
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
								<li Class="active"><a> </a></li>
								<li Class="active"><a> </a></li>
								<li Class="active"><a> </a></li>
								<li Class="active"><a> </a></li>
								<li Class="active"><a> </a></li>

									<li class="active"><a href="index.php" class="act">Home</a></li>	
									<li Class="active"><a> </a></li>
									<!-- Mega Menu -->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Post<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6><a href="all_post.php">All Post</a></h6>
														<li><a href="buy_post.php">Buy Post</a></li>
														<li><a href="sell_post.php">Sell Post</a></li>
														<li><a href="exchange_post.php"> Exchange Post</a></li>

													</ul>
												</div>	
												
											</div>
										</ul>
									</li>
									<li Class="active"><a> </a></li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<b class="caret"></b></a>
										<ul class="dropdown-menu multi-column columns-3">
											<div class="row">
												<div class="multi-gd-img">
													<ul class="multi-column-dropdown">
														<h6><a href="bookcate.php">category</a></h6>
														<li><a href="bookcate.php">All Books</a></li>
														<li><a href="household.html">Book Related Equipment</a></li>
													</ul>

												</div>
												
												
											</div>
										</ul>
									</li>
									<li Class="active"><a> </a></li>
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
									<li Class="active"><a> </a></li>
									
									
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
							</nav
			</div>
		</div>
        
	<div class="top-brands">
		<div class="container">
		<h2>Available Books</h2>
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="agile-tp" >
                            </div>
                             <?php 
                                                    while ($row = mysqli_fetch_assoc($search_result))
                                                    {
                                                        $p_id=$row['post_id'];
                                                        $u_id=$row['user_id'];
                                                        $b_title=$row['book_title'];
                                                        $o_price=$row['orginal_price'];
                                                        $u_price=$row['your_price'];
                                                  
                                                        $cipher = "aes-128-cbc";
                                                        $ivlen = openssl_cipher_iv_length($cipher);
                                                        $iv = openssl_random_pseudo_bytes($ivlen);
                                                        $key = openssl_random_pseudo_bytes(128);
                                                        $p= ($row['cover']);
                                                        $img = openssl_decrypt($p, $cipher, $key, $options=0, $iv);
                                                       
                            echo "<div class='agile_top_brands_grids' >";
                            echo    "<div class='col-md-3 top_brand_left-1'>";
                            echo        "<div class='hover14 column'>";
                            echo            "<div class='agile_top_brand_left_grid'>";
                            
                            echo                "<div class='agile_top_brand_left_grid1'>";
                            echo                    "<figure>";
                            echo                        "<div class='snipcart-item block' >";
                            echo                            "<div class='snipcart-thumb'>";
                            echo                                "<a href='post_detail.php'><img title=' ' alt=' ' src=' data:image/jpeg;base64,'.base64_encode($img).' '
                                                                 /></a>";   
                                                                 ?>
                                                                 <a href='post_detail.php'><img title=' ' alt=' ' src="<?php echo $row['cover']; ?>" /></a>
                                                                 <?php
//                          echo                                "<p >Stress Proof your Life</p>";
                                                        echo                                                                "<a href='post_details.php?post_id=".$row['post_id']."'>".$b_title."</a>";
                                               
                          
                            echo                                "<h4>".$u_price." <span>".$o_price."</span></h4>";
                            echo                            "</div>";
                            echo                            "<div class='snipcart-details top_brand_home_details'>";
                            echo                                "<form action='#' method='post'>";
                                                                echo "<fieldset>
                                                                    <input type='hidden' name='cmd' value='_cart' />
                                                                    <input type='hidden' name='add' value='1' />
                                                                    <input type='hidden' name='business' value=' ' />
                                                                    <input type='hidden' name='item_name' value='Fortune Sunflower Oil' />
                                                                    <input type='hidden' name='amount' value='20.99' />
                                                                    <input type='hidden' name='discount_amount' value='1.00' />
                                                                    <input type='hidden' name='currency_code' value='USD' />
                                                                    <input type='hidden' name='return' value='' />
                                                                    <input type='hidden' name='cancel_return' value=' ' />
                                                                    <input type='submit' name='submit' value='Request' class='button' />
                                                                </fieldset>
                                                            </form>
                                                        </div>";
                                                    echo "</div>";
                                                echo "</figure>";
                                            echo "</div>";
                                        echo "</div>";
                                    echo "</div>";
                                echo "</div>";
                                                    }
                                                                ?>
                                
                                
                                <div class="clearfix"> </div>
                            </div>
                            
                                
                                
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        
                                
                            
                                
                                
                                <div class="clearfix"> </div>
                            </div>
                            
                                <div class="clearfix"> </div>
                            </div>
                        </div>
<!--                                <div class="clearfix"> </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                <?php
             if(isset($_GET['selected_id']))
        {
            //$selected_location=$_GET['location'];
            session_start();
            $_SESSION['selected_id']=$_GET['selected_id'];
             header('location: post_details.php' );
            
        }
        ?>
                                                                
    
                        
                                
                            
                            
                            
                                
                                <div class="clearfix"> </div>
                            </div>
                        </div>
<!--                                <div class="clearfix"> </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


       
                              
<!-- //top-brands -->
 <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->	
<!--banner-bottom-->
<!--banner-bottom-->
<!--brands-->
<!--//brands-->
<!-- new -->
	
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
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':false,'showPlayButton':false,'autoSlide':false,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
</body>
</html>