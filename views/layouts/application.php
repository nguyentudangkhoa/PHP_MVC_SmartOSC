<html>
<head>
<title>Gaming Creators a Games Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
<link href="public/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="./public/assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="public/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gaming Creators Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Montserrat+Alternates:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="./public/assets/js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="public/assets/css/component.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body> 
<!--header-->	
<div class="header" >
	<div class="top-header" >		
		<div class="container">
		<div class="top-head" >	
			<ul class="header-in">
				<li ><a href="#" >  Help</a></li>
				<li><a href="contact.html">   Contact Us</a></li>
				<li ><a href="#" >   How To Use</a></li>
			</ul>
				<div class="search">
					<form>
						<input type="text" value="search about something ?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'search about something ?';}" >
						<input type="submit" value="" >
					</form>
				</div>
			
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
		<!---->
	
		<div class="header-top">
		<div class="container">
		<div class="head-top">
			<div class="logo">
			
				<h1><a href="./index.php?controller=pages&action=home"><span> S</span>mart <span>O</span>sc</a></h1>
				
			</div>
		<div class="top-nav">		
			  <span class="menu"><img src="./public/assets/images/menu.png" alt=""> </span>
				
					<ul>
						<li class="active"><a class="color1" href="./index.php?controller=pages&action=home"  >Home</a></li>
						<li><a class="color2" href="games.html"  >Games</a></li>
						<li><a class="color3" href="reviews.html"  >Reviews</a></li>
						<li><a class="color4" href="404.html" >404</a></li>
						<?php if(!isset($_SESSION['login'])){ ?>
						<li><a class="color5" href="./index.php?controller=signup&action=showsignup"  >SignUp</a></li>
						<li><a class="color6" href="./index.php?controller=login&action=showlogin" >Login</a></li>
						<?php }else {?>
							
							<?php if($_SESSION['login']['role']==1){?>
							<li><a class="color6" href="./index.php?controller=admin&action=showAddProDuct" ><?php echo $_SESSION['login']['user_name']?></a></li>
							<?php }else {?>
								<li><a class="color6" href="" ><?php echo $_SESSION['login']['user_name']?></a></li>
							<?php }?>
							<li><a class="color5" href="./index.php?controller=login&action=logout">Logout</a></li>
						<?php }?>
						<div class="clearfix"> </div>
					</ul>
					<!--script-->
				<script>
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle(500, function(){
						});
					});
			</script>

				</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>
</div>
	<?= @$content ?>
	
	<div class="footer">
	<div class="footer-middle">
				<div class="container">
					<div class="footer-middle-in">
						<h6>About us</h6>
						<p>Suspendisse sed accumsan risus. Curabitur rhoncus, elit vel tincidunt elementum, nunc urna tristique nisi, in interdum libero magna tristique ante. adipiscing varius. Vestibulum dolor lorem.</p>
					</div>
					<div class="footer-middle-in">
						<h6>Information</h6>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Delivery Information</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Customer Service</h6>
						<ul>
							<li><a href="contact.html">Contact Us</a></li>
							<li><a href="#">Returns</a></li>
							<li><a href="contact.html">Site Map</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>My Account</h6>
						<ul>
							<li><a href="#">Order History</a></li>
							<li><a href="#">Wish List</a></li>
							<li><a href="#">Newsletter</a></li>
						</ul>
					</div>
					<div class="footer-middle-in">
						<h6>Extras</h6>
						<ul>
							<li><a href="#">Affiliates</a></li>
							<li><a href="#">Specials</a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<p class="footer-class">&copy; 2020 Gaming Creators. All Rights reserved.  Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
			
		</div>

<script src="./public/assets/js/form/login.js"></script>
<script src="./public/assets/js/form/signup.js"></script>
<script src="./public/assets/js/form/fileUpload.js"></script>
  </body>
</html>