<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta name="_token" content="{{csrf_token()}}" />
        <title>Grocery Store</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
    </head>
    <body>
      <div class="container">
         <div class="alert alert-success" style="display:none"></div>
         <form id="myForm">

     @foreach($productlist as $product)
    <tr>
      <td >{{$product->id}}</td>
      <td >{{$product->name}}</td>
      <td > {{$product->price}}</td>

      

      <td ><input size="2" type="text" id="qty" name="nqty" value="{{$product->qty}}">

      <input type="hidden" name="id" id="id" value="{{$product->rowId}}">
      </td>

      <td >{{$product->total}}</td>

       <td> <a href="{{route('cart.remove', ['id'=> $product->rowId])}}" onclick="return confirm('Are you sure you want to delete this item?');"  >Remove</a>
       </td>
    <td>
     <button class="btn btn-primary" id="ajaxSubmit">Submit</button>
    </td>
     
      
    </tr>
    @endforeach
            
          </form>
      </div>




      <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
               jQuery.ajax({
                  url: "{{ url('/ajax') }}",
                  method: 'post',
                  data: {
                     name: jQuery('#qty').val(),
                     type: jQuery('#id').val(),
                     
                  },
                  success: function(result){
                     jQuery('.alert').show();
                     jQuery('.alert').html(result.success);
                  }});
               });
            });
      </script>
    </body>
</html>