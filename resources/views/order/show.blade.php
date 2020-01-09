<!doctype html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
 <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="../../css/reset1.css" > <!-- CSS reset -->
  <link rel="stylesheet" href="../../css/style1.css" > <!-- Resource style -->
  <script src="js/modernizr.js"></script> <!-- Modernizr -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
   

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
   </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 


</head>
<body>

  <main class="cd-main-content">
    
  
    

    <div class="content-wrapper" align="center">
      <a align='right' href="/menu">ADD More OR Go Back</a>
      <h2>Your Ordered Food Items</h2>
  

   <table class="table table-hover">
    <form method="post" action="">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col"> Name</th>
      <th scope="col"> Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      
      <th scope="col">Remove</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>

  @foreach($productlist as $product)
    <tr>
      <td >{{$product->id}}</td>
      <td >{{$product->name}}</td>
      <td  id ="price"> <span>{{$product->price}}</span></td>

      

      <td ><input stype="text" id="qty" name="qty" size="2"  value="{{$product->qty}}">

      <input type="hidden" name="id" id="id" value="{{$product->rowId}}">
      </td>

      <td id="total" ><span>{{$product->total}}</span></td>

       <td> <a href="{{route('cart.remove',['id'=> $product->rowId])}}" onclick="return confirm('Are you sure you want to delete this item?');"  >Remove</a>
       </td>
    <td>
     
      <input type="button"  id="xx" value="Update">
    </td>
     
    
    </tr>
    
    @endforeach
  

  </tbody>

</table><!-- .content-wrapper -->

<hr>
<hr>
<br>




<table>
  <h2>Place your Contact Innformation</h2>
  
  <tr>
    <td>
      <label>Customer Name  :</label>
    
    </td>
    <td>  <input type="text" id="name" name="cname"><label style="color: red">{{$errors->first('cname')}}</label>
      

</td>


  </tr>

  <tr>
    

      <td>
      <label>Mobile NO  :</label>
      
    </td>
    <td><input type="text" name="mob" id="mob"   maxlength="11" ><label style="color: red">{{$errors->first('mob')}}</label>
      
</td>
  </tr>
 <tr>
    
     <td>
      <label>Email  :</label>
      
    </td>
    <td><input type="text" name="email"  ><label style="color: red">{{$errors->first('email')}}</label>    

</td>
  </tr>


  <tr>
    

      <td>
      <label>Address  :</label>


    </td>
          <td>     <input type="text" name="add"  ><label style="color: red">{{$errors->first('add')}}</label>
              
      </td>
  </tr>
  <tr>
    

      <td>
    
    </td>
    <td><input type="submit" name="btn" value="Place Order"></td>
  </tr>

 </form>


</table>

    </div>

     
  </main> <!-- .cd-main-content -->




<script src="../../js/jquery-2.1.4.js"></script>
<script src="../../js/jquery.menu-aim.js"></script>
<script src="../../js/main.js"></script> <!-- Resource jQuery -->

<script type="text/javascript">



    $.ajaxSetup({

        headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });



    $("#xx").click(function(e){

        e.preventDefault();



        var qty = $("#qty").val();

        var id = $("#id").val();
        var price = $("#price").text();




        $.ajax({

           type:'POST',

           url:'/updateitem',

           data:{qty:qty, id:id, price:price},

           success:function(data){
            $('#total').text(data.success);

          alert(data.success);
           //jQuery('.alert').html(data.success);

           }

        });



  });

</script>
</body>



</html>