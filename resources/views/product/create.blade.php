@extends('layout.layout')

@section('main')
	<h2>Create Product</h2>
	<a href="{{route('product.list')}}">Back to List</a>
	<br/><br/>
	<form method="post" enctype="multipart/form-data" >
		
		<table  >
		
			<tr>
				<td>NAME</td>
				<td><input type="text" name="p_name"> <label style="color: red">{{$errors->first('p_name')}}</label></td>
				
			</tr>
			<tr>
				<td>PRICE</td>
				<td><input type="text" name="price">
				<label style="color: red">{{$errors->first('price')}}</label></td>
					
			</tr>
		
			<tr>
				<td>DESCRIPTION</td>
				<td><input type="text" name="desc">

					
			</tr>
			<tr>
				<td>CATEGORY</td>
				<td>
					<select name="catid" style="width: 160px">

						@foreach($catlist as $cat)
							<option value="{{$cat->cat_id}}">{{$cat->cat_name}}</option>
						@endforeach
					</select>
				</td>
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
