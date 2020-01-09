
@extends('layout.layout')

@section('main')
		<h2>Create Caregory</h2>
	<a href="{{route('category.list')}}">Back to List</a>
	<br/><br/>
	<form method="post">
		<table>
			<tr>
				<td>NAME</td>
				<td><input type="text" name="catname"></td>
			</tr>
			<tr>
				<td>DESCRIPTION</td>
				<td><input type="text" name="desc"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Save"></td>
			</tr>
		</table>
	</form>

@endsection
