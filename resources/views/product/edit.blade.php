

@extends('layout.layout')

@section('main')

	<h2>Edit Product Information</h2>
	<a href="{{route('product.list')}}">Back to List</a>
	<br/><br/>

	<form method="post">
		<input type="hidden" name="pid" value="{{$product->id}}">
		<table>
			<tr>
				<td>NAME:</td>
				<td><input type="text" name="pname" value="{{$product->p_name}}"></td>
			</tr>
			<tr>
				<td>PRICE</td>
				<td><input type="text" name="price" value="{{$product->p_price}}"></td>
			</tr>
			<tr>
				<td>DESCRIPTION</td>
				<td><input type="text" name="desc" value="{{$product->details}}"></td>
			</tr>

		    <tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
		
	</form>


@endsection

