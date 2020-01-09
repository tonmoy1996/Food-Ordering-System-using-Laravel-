
@extends('layout.layout')

@section('main')

		<h2>Delete User</h2>
	<a href="{{route('user.list')}}">Back to List</a>
	<br/><br/>
	
	<table>
		<tr>
			<td>USERNAME: </td>
			<td>{{$user->username}}</td>
		</tr>
		<tr>
			<td>PASSWORD: </td>
			<td>{{$user->password}}</td>
		</tr>
	</table>
	
	  <h4>This cannot be undone. Are you sure?</h4>

	<form method="post">
		<input type="submit" value="Confirm">
		<input type="hidden" name="uid" value="{{$user->id}}">
	</form>


@endsection

