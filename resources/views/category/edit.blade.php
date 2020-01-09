<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2>Edit Caregory</h2>
	<a href="{{route('category.list')}}">Back to List</a>
	<br/><br/>
	<form method="post">
		<input type="hidden" name="cid" value="{{$category->category_id}}">
		<table>
			<tr>
				<td>NAME</td>
				<td><input type="text" name="catname" value="{{$category->category_name}}"></td>
			</tr>
			<tr>
				<td>DESCRIPTION</td>
				<td><input type="text" name="desc" value="{{$category->description}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>