<!--banner-->

<div class="banner">
	<div class="container">	
		<div class="wmuSlider example1">
			<div class="wmuSliderWrapper">
			<article style="position: absolute; width: 100%; opacity: 0;"> 
				<div class="banner-wrap">
					<div class="banner-top">
						<img src="./public/assets/images/12.jpg" class="img-responsive" alt="">
					</div>
						<div class="banner-top banner-bottom">
						<img src="./public/assets/images/11.jpg" class="img-responsive" alt="">
					</div>
						<div class="clearfix"> </div>
					</div>
				
		</article>
			<article style="position: absolute; width: 100%; opacity: 0;"> 
					<div class="banner-wrap">
					
					<div class="banner-top">
						<img src="./public/assets/images/14.jpg" class="img-responsive" alt="">
					</div>
						<div class="banner-top banner-bottom">
						<img src="./public/assets/images/13.jpg" class="img-responsive" alt="">
					</div>
						<div class="clearfix"> </div>
					
					</div>
		</article>
			<article style="position: absolute; width: 100%; opacity: 0;"> 
					<div class="banner-wrap">
						<div class="banner-top">
						<img src="./public/assets/images/16.jpg" class="img-responsive" alt="">
					</div>
						<div class="banner-top banner-bottom">
						<img src="./public/assets/images/15.jpg" class="img-responsive" alt="">
					</div>
						<div class="clearfix"> </div>
					</div>
		</article>
		</div>
			<ul class="wmuSliderPagination">
				<li><a href="#" class="">0</a></li>
				<li><a href="#" class="">1</a></li>
				<li><a href="#" class="wmuActive">2</a></li>
			</ul>
	</div>
	<!---->
		<script src="./public/assets/js/jquery.wmuSlider.js"></script> 
			<script>
			$('.example1').wmuSlider({
					pagination : true,
					nav : false,
			});         
			</script> 	
	
	</div>   
</div>





  <div class="content">
	<div class="container">
			<div class="content-top">
				<h2 class="new">NEW GAMES</h2>
			
			<div class="wrap">	
				<div class="main">
					<ul id="og-grid"  class="og-grid">
						<?php while($row = mysqli_fetch_array($data)){ ?>
						<li style="margin-bottom: 40px;">
							<form action="">
								<a href="./index.php?controller=pages&action=single&id=<?php echo $row['id'];?>" data-largesrc="./public/assets/images/<?php echo $row['image']; ?>" class="link-sg" data-linksg="" data-title="<?php echo $row['name'];?>" data-description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada purus a convallis dictum. Phasellus sodales varius diam, non sagittis lectus. Morbi id magna ultricies ipsum condimentum scelerisque vel quis felis.. Donec et purus nec leo interdum sodales nec sit amet magna. Ut nec suscipit purus, quis viverra urna.">
								<div class="top">
								<img class="" src="<?php echo $row['image']; ?>" width="200px" height="200px" alt="img01"/>
								</div>
								<div class="bottom">
								<label style="font-size:20px"> <?php echo $row['name'];?></label>
								</div>
								</a>
								<div class="price">
									<label style="font-size:20px; color:red"><?php echo number_format($row['price']); ?> VND</label>
								</div>
								<div class="price">
									<button class="btn btn-primary" > Add to cart</button>
								</div>
							</form>
						</li>
						<?php } ?>
						<div class="clearfix"> </div>
					</ul>
				</div>
			</div>
		</div>
	</div>
  </div>
<script src="./public/assets/js/grid.js"></script>
		<script>
			$(function() {
				Grid.init();
			});
		</script>
	</div>
  </div>

  <!----->
<div class="col-mn">
		<div class="container">
				<div class="col-mn2">
					<h3>The Best Features</h3>
					<p>Contrary to popular belief
						, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
					<a class=" more-in" href="single.html">Read More</a>
			</div>
		</div>
	</div>
<!---->

  