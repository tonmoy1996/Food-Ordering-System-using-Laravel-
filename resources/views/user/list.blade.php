

@extends('layout.layout')

@section('main')

   
<h2>Product List</h2>

	<a href="{{route('home')}}">Back to Home</a> | 
	<a href="{{route('user.list')}}">Back</a>
	<br/><br/>


<table class="table table-hover" >
  <thead>
   <tr>
			<th scope="col" >ID</th>
			<th scope="col" >USERNAME</th>
			<th scope="col">PASSWORD</th>
			<th scope="col">OPTIONS</th>
		</tr>
  </thead>
  <tbody>
	@foreach($productlist as $user)
		<tr>
			
			<td >{{$user->id}}</td>
			<td  > {{$user->username}}</td>
			<td  >{{$user->password}}</td>
			
			<td><a href="{{route('user.edit', ['id'=> $user->id])}}">Edit</a> | <a href="{{route('user.delete', ['id'=> $user->id])}}">Delete</a></td>
		</tr>
		@endforeach
  </tbody>
</table>




@endsection

