

@extends('layout.layout')

@section('main')

   
<h2>Category List</h2>
	<a href="{{route('home')}}">Back to Home</a> | 
	<a href="{{route('category.create')}}">Create New</a>
	<br/><br/>


<table class="table table-hover" >
  <thead>
   <tr>
   	<th>ID</th>
			<th scope="col">NAME</th>
			<th scope="col">DESC</th>
			<th scope="col"></th>
			
		</tr>
  </thead>
  <tbody>
@foreach($catlist as $cat)
		<tr>
			<td>{{$cat->cat_id}}</td>
			<td><a href="{{route('category.show', ['id' => $cat->cat_id])}}">{{$cat->cat_name}}</a></td>
			<td>{{$cat->desc}}</td>
			<td><a href="{{route('category.edit', ['id'=> $cat->cat])}}">Edit</a> | <a href="{{route('category.delete', ['id'=> $cat->cat_id])}}">Delete</a></td>
		</tr>
		@endforeach
  </tbody>
</table>




@endsection

