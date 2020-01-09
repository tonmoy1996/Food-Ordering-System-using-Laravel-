<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="../../css/reset1.css" > <!-- CSS reset -->
	<link rel="stylesheet" href="../../css/style1.css" > <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<header class="cd-main-header">
		<a href="/admin" class="cd-logo"><img src="../../img/asd.png" class="Responsive" alt="Logo"></a>
		
		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search...">
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="/admin">Home</a></li>
				<li><a href="/order">Orders</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="../../img/cd-avatar.png" alt="avatar">
						Account
					</a>

					<ul>

						<li><a href="/login/profile">My Account</a></li>
						<li><a href="/login/edit">Edit Account</a></li>
						<li><a href="/login/logout">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>

				<li class="cd-label">Main</li>
				<li class="has-children notifications active">
					<a href="../notification">Notifications<span class="count">3</span></a>
					
					
				</li>
				 
				<li class="has-children overview">
					<a href="#0">Dashbord</a>
					
					<ul>
						<li><a href="../current">Curent Order</a></li>
						<li><a href="../pending">Pending Order</a></li>
						<li><a href="../completed">Completed Order</a></li>
					</ul>
				</li>
				

				<li class="has-children bookmarks">
					<a href="#0">Product</a>
					
					<ul>
						<li><a class="btn btn-primary" href="{{route('product.list')}}">Products List</a></li>
						<li><a class="btn btn-primary" href="{{route('product.create')}}">Add Product</a></li>
						
					</ul>
				</li>
			</ul>

			<ul>
				<li class="cd-label">Secondary</li>
				<li class="has-children comments">
					<a href="#0">Reviews</a>
					
					<ul>
						<li><a href="review">All Reviews</a></li>
						<li><a href="review/5">5 * Comments</a></li>
						<li><a href="review/1">1 * Comments</a></li>
					</ul>
				</li>
				<li class="has-children images">
					<a href="#0">Reports</a>
					
					<ul>
						<li><a href="#0">Todays Orders</a></li>
						<li><a href="#0">Monthly Total sold Products</a></li>
					</ul>
				</li>

				<li class="has-children users">
					<a href="#0">Users</a>
					
					<ul>
						<li><a href="/user">All Users</a></li>
						
						<li><a href="/user/create">Add User</a></li>
					</ul>
				</li>
			</ul>

			
		</nav>

		<div class="content-wrapper"  align="center">

        @yield('main')
		</div> <!-- .content-wrapper -->
	</main> <!-- .cd-main-content -->




  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 


<script src="../../js/jquery-2.1.4.js"></script>
<script src="../../js/jquery.menu-aim.js"></script>
<script src="../../js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>