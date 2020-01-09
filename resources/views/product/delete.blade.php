
@extends('layout.layout')

@section('main')

		<h2>Delete Product</h2>
	<a href="{{route('product.list')}}">Back to List</a>
	<br/><br/>
	
	<table>
			<tr>
				<td>NAME:</td>
				<td>{{$product->p_name}}</td>
			</tr>
			<tr>
				<td>PRICE:</td>
				<td>{{$product->p_price}}</td>
			</tr>
			<tr>
				<td>DESCRIPTION:</td>
				<td>{{$product->details}}</td>
			</tr>

		</table>
	
	 <h4>This cannot be undone. Are you sure?</h4>

	<form method="post">
		<input type="submit" value="Confirm">
		<input type="hidden" name="pid" value="{{$product->id}}">
	</form>


@endsection

