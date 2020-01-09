<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Create</h2>
	<a href="/home">Back</a>
	<br/><br/>
	<form method="post">
		NAME: <input type="text" name="myname" value="{{old('myname')}}">
		{{$errors->first('myname')}}
		<br/>
		EMAIL: <input type="text" name="myemail" value="{{old('myemail')}}">
		{{$errors->first('myemail')}}
		<br/>
		<input type="submit" value="Submit"><br/>
	</form>
	
	@if($errors->any())
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
	@endif
</body>
</html>