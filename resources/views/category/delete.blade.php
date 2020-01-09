<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Delete Caregory</h2>
	<a href="{{route('category.list')}}">Back to List</a>
	<br/><br/>
	
	<table>
		<tr>
			<td>NAME</td>
			<td>{{$category->category_name}}</td>
		</tr>
		<tr>
			<td>DESCRIPTION</td>
			<td>{{$category->description}}</td>
		</tr>
	</table>
	
	<h4>This cannot be undone. Are you sure?</h4>

	<form method="post">
		<input type="submit" value="Confirm">
		<input type="hidden" name="cid" value="{{$category->category_id}}">
	</form>
</body>
</html>