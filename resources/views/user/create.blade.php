@extends('layout.layout')

@section('main')
	<h2>Create User</h2>
	<a href="{{route('user.list')}}">Back to List</a>
	<br/><br/>
	<form method="post" enctype="multipart/form-data" >
		
		<table  >
		
			<tr>
				<td>USERNAME</td>
				<td><input type="text" name="username"> <label style="color: red">{{$errors->first('username')}}</label></td>
				
			</tr>
			<tr>
				<td>PASSWORD</td>
				<td><input type="text" name="password">
				<label style="color: red">{{$errors->first('password')}}</label></td>
					
			</tr>
		

			<tr>
			<td>Select Image</td>
				<td><input type="file" name="image">

				<label style="color: red">{{$errors->first('image')}}</label></td>
			</tr>

			<tr>
				<td></td>
				<td><input type="submit" value="Save"></td>
			</tr>
			
		</table>
	</form>

@endsection
