@extends('layout.layout')

@section('main')


        <h2>New Orders </h2>
				<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Order Id</th>
	      <th scope="col">Customer Name</th>
	      <th scope="col">Customer Mobile </th>
	      <th scope="col">Customer Email </th>
	      <th scope="col">Customer Address</th>
	      <th scope="col">Product Name</th>
	      <th scope="col">Price</th>
	      <th scope="col">Quantity</th>
	      <th scope="col">Total Price</th>
	      
  
     
    </tr>
  </thead>

  <tbody>
  
	<?php
    $ch = 0;

    $tkatoli = 0;

    ?>

   @for($i=0; $i < count($productlist); $i++)


     @if($ch==$productlist[$i]->p_id)



     
      <tr></tr>
		<tr>
			<td>--</td>
			<td>--</td>
			<td>--</td>
			<td>--</td>
			<td>--</td>
			<td> {{$productlist[$i]->p_name}}</td>
			<td>{{$productlist[$i]->p_price}}</td>
			<td>{{$productlist[$i]->quantity}}</td>
			<td>{{$productlist[$i]->total}}</td>
			
		</tr>


		@else
		

		@if($tkatoli != 0)
	
    
               <tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Final Total :</td>
			<td>{{$tkatoli}}</td>
			<td>TAKA</td>
            <td>	 
						 
				<button class="btn"> <a href="{{route('order.current',['id'=> $ch])}}" onclick="return confirm('Are you sure you want to send the delivery in current List?');" >Take Order</a>

				</button>
						
			</td>
			<td>
				
					 
				<button class="btn"> <a href="{{route('order.dd',['id'=> $ch])}}" onclick="return confirm('Are you sure you want to send the delivery ?');" >Cancel Order</a>

				</button>
				
				
			</td>
		</tr>
          @endif
 
	      <?php   $tkatoli=0; ?>

          <tr>

			<td> {{$productlist[$i]->p_id}}</td>
			<td> {{$productlist[$i]->c_name}}</td>
			<td> {{$productlist[$i]->c_mobile}}</td>
			<td> {{$productlist[$i]->c_email}}</td>
			<td> {{$productlist[$i]->c_address}}</td>
			<td> {{$productlist[$i]->p_name}} </td>
			<td> {{$productlist[$i]->p_price}}</td>
			<td> {{$productlist[$i]->quantity}}</td>
			<td> {{$productlist[$i]->total}}</td>
			
		</tr>

 
      

     @endif
   

     <?php


      $ch=$productlist[$i]->p_id;

     $tkatoli=$tkatoli + $productlist[$i]->total;
 

      ?>
    
    @endfor


   <tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>Final Total :</td>
			<td>{{$tkatoli}}</td>
			<td>TAKA</td>
            <td>	 
						 
				<button class="btn"> <a href="{{route('order.current',['id'=> $ch])}}" onclick="return confirm('Are you sure you want to send the delivery in pending ?');" >Take Order</a>

				</button>
						
			</td>
			<td>
					 
				<button class="btn"> <a href="{{route('order.dd',['id'=> $ch])}}" onclick="return confirm('Are you sure you want to send the delivery ?');" >Cancel Order</a>

				</button>
				
				
			</td>
		</tr>


  </tbody>

</table>
@endsection