


@extends('layout.layout')

@section('main')

   


	<h2>All Products</h2>
	<a href="{{route('category.list')}}">Back to List</a>
	<br/><br/>


<table class="table table-hover" >
  <thead>
   <tr>
			<th scope="col">ID</th>
			<th scope="col">NAME</th>
			<th scope="col">PRICE</th>
			<th scope="col">DESC</th>
			<th scope="col">CATEGORY</th>
			<th scope="col">OPTIONS</th>
		
		</tr>
  </thead>
  <tbody>
		@foreach($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->p_name}}</td>
			<td>{{$product->p_price}}</td>
			<td>{{$product->details}}</td>
			<td>{{$product->category->cat_name}}</td>
			<td><a href="{{route('product.edit', ['id'=> $product->id])}}">Edit</a> | <a href="{{route('product.delete', ['id'=> $product->id])}}">Delete</a></td>
		</tr>
		@endforeach
  </tbody>
</table>




@endsection

