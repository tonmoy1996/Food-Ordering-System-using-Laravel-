
<!DOCTYPE html>
<html>
<head>
<title>Food Corner a Hotels and Restaurants Category Flat Bootstrap responsive Website Template | Menu :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Food Corner Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
<link href="css/owl.theme.css" rel="stylesheet">
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/SmoothScroll.min.js"></script>


<style >
	

.alibaba {
    padding: 0;
   
    min-height: 280px;
    background-size: cover;
    text-align: center;
    position: relative;
    border: solid 1px #eaeaea;

   
}


</style>
</head>
<body>
	<!-- banner -->
	<div class="banner about-bg">
		<!--header-->
		<div class="header">
			<div class="logo">
				<h1><a href="/">Food Corner</a></h1>
			</div>
			<div class="top-nav">
				<span class="menu"><img src="images/menu.png" alt=""/></span>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="#">About</a></li>					
					<li><a class="active" href="/product">Menu</a></li>
					<li><a href="#">Codes</a></li>
					<li><a href="#">Blog</a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="/showorder" class="cd-logo"><img style="width: 40px " src="../../images/cart.png" alt="Logo"></a></li>
				</ul>
				<!-- script-for-menu -->
				<script>					
					$("span.menu").click(function(){
						$(".top-nav ul").slideToggle("slow" , function(){
						});
					});
				</script>
				<!-- script-for-menu -->
			</div>
				<div class="clearfix"> </div>
		</div>	
		<!--//header-->
		<div class="about-heading">
			<h2>Menu</h2>
		</div>
	</div>
	<!-- //banner -->
	
	<!-- menu -->
	<div class="menu">
		<div class="container">
			<div class="special-grids menu-grids">


			
				<div class="col-md-12 w3l-special-grid">


					@foreach($productlist as $cat)

					<div class="col-md-3" >
						
						<div class="alibaba"  style="background: no-repeat 0px 0px; ">

						<div class="wpf-demo-6">
            
								<img src="images/{{$cat->path}}"  class="img-responsive" >
							<div class="w3ls-special-text">
								<p><sub>$</sub>130</p>
							</div>
							<figcaption class="view-caption">

								<h4>{{$cat->p_name}}</h4> 

								<a href="{{route('product.details',['id'=> $cat->id])}}">Detail</a>
							</figcaption>
						</div>
					</div>
					</div>
						@endforeach
				</div>
				
				
			
				<div class="clearfix"> </div>

			</div>
				
		</div>
	</div>
	<!-- //menu -->
	
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-3 agile-footer-grid">
					<h4>About Food Corner</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pellentesque elit sit amet lorem fermentum.<span>Nullam turpis ipsum, dapibus eu congue sit amet.</span></p>
					<h5>Get In Touch<h5>
					<div class="agileinfo-social-grids">
						<ul>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-rss"></i></a></li>
							<li><a href="#"><i class="fa fa-vk"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 agile-footer-grid">
					<h4>Twitter Posts</h4>
					<ul class="w3agile_footer_grid_list">
						<li>Ut aut reiciendis voluptatibus maiores <a href="#">http://lkj.ewr.com</a> alias, ut aut reiciendis.
							<span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
						<li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://uiubajaj.com</a> ut aut
							voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
					</ul>
				</div>
				<div class="col-md-3 agile-footer-grid">
					<h4>Popular Items</h4>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="single.html"><img src="images/s1.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="single.html"><img src="images/s2.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="single.html"><img src="images/s3.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="single.html"><img src="images/s5.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="single.html"><img src="images/s6.jpg" alt="" /></a>
						</div>
						<div class="popular-grid">
							<a href="single.html"><img src="images/s7.jpg" alt="" /></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 agile-footer-grid">
					<h4>Newsletter</h4>
					<p>Sed pellentesque elit sit amet lorem fermentum, vitae maximus tortor accumsan.</p>
					<form action="#" method="post">
						<input type="email" name="Email" placeholder="Email" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="clearfix"> </div>s
			</div>
		</div>
	</div>
	<!-- //footer -->
	
	<!-- agileits-copyright -->
	<div class="agileits-copyright">
		<div class="container">
			<p>© 2016 Food Corner. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!-- //agileits-copyright -->
</body>	
</html>