@extends('layout.layout')

@section('main')

   


				<h2>Product List</h2>

	<a class="btn btn-primary" href="{{route('home')}}">Back to Home</a> | 
	<a class="btn btn-primary" href="{{route('product.create')}}">Create New</a>
	<br/><br/>
				<div class="panel panel-info">
					<div class="panel-heading">List of Categories</div>
					<div class="panel-body">
						<table class="table table-striped">
							<tr>
								<th  >NAME</th>
								<th  >PRICE</th>
								<th >DESC</th>
								<th  >CATEGORY</th>
								
			<th>OPTIONS</th>
							</tr>
								@foreach($productlist as $product)
		<tr>
			
			<td >{{$product->p_name}}</td>
			<td  > {{$product->p_price}}</td>
			<td  >{{$product->details}}</td>
			
			<td >{{$product->cat_name}}</td>
			
			<td><a href="{{route('product.edit', ['id'=> $product->id])}}">Edit</a> | <a href="{{route('product.delete', ['id'=> $product->id])}}">Delete</a></td>
		</tr>
		@endforeach
						</table>
					</div>
				</div>
		




@endsection




