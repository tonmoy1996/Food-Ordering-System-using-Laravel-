<!DOCTYPE html>
<html>
<head>
	<title>Send Mail</title>
</head>
<body>
<h3>Your Order Has Benn Taken And You will Get The Food In 30 Minutes.. </h3>
<br>
<br>
   <table class="table table-hover" border="1px">
  <thead>
   <tr>
			<th scope="col" >Customer Name</th>
			<th scope="col" >Customer Mobile</th>
			<th scope="col">Customer Address</th>
			<th scope="col" >Product Name</th>
			<th scope="col" >Product Price</th>
			<th scope="col" >Quantity</th>
			<th scope="col" >Total</th>
			
			
		</tr>
  </thead>
  <tbody>
	@foreach($productlist as $product)
		<tr>
			
			<td >{{$product->c_name}}</td>
			<td  > {{$product->c_mobile}}</td>
			<td  >{{$product->c_address}}</td>
			
			<td >{{$product->p_name}}</td>
			<td >{{$product->p_price}}</td>
			
			<td >{{$product->quantity}}</td>
			<td >{{$product->total}}</td>


			
		
		</tr>
		@endforeach
  </tbody>
</table>


</body>
</html>