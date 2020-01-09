<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Welcome Home {{session('user')->username}}</h2>
	<a href="{{route('category.list')}}">Categories</a> | 
	<a href="{{route('product.list')}}">Products</a> | 
	<a href="#">Users</a> | 
	<a href="{{route('logout')}}">Logout</a>
	<br/><br/>
</body>
</html>