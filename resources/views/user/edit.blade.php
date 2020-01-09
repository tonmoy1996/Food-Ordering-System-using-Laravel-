

@extends('layout.layout')

@section('main')

	<h2>Edit User Information</h2>
	<a href="{{route('user.list')}}">Back to List</a>
	<br/><br/>

	<form method="post">
		<input type="hidden" name="uid" value="{{$user->id}}">
		<table>
			<tr>
				<td>USERNAME</td>
				<td><input type="text" name="username" value="{{$user->username}}"></td>
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="text" name="password" value="{{$user->password}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
		
	</form>


@endsection

