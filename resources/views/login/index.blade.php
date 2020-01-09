
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<style>
body {font-family: Arial, Helvetica, sans-serif;}


.in{


      width: 500PX;
    padding: 8px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    align-content: center;

}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100PX;
}

button:hover {
    opacity: 0.4;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 30%;
    border-radius: 30%;
}

.container {
    padding: 10px;
}

span.psw {
    float: right;
    padding-top: 10px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
    span.psw {
       display: block;
       float: none;
    }
   
}
</style>
</head>
<body>



  <div class="container" align="center">
<h2 align="center">Login Form</h2>
<form action="" method="post">
  <div class="imgcontainer">
    <img src="images/1.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="in" align="left">

    <span for="uname"><b>Username</b></span>
    <input class="" type="text" placeholder="Enter Username" name="username" >
 
     <label style="color: red">{{$errors->first('username')}}</label>
      <br>
    <span for="psw"><b>Password</b></span>
    <input class="" type="password" placeholder="Enter Password" name="password" >
 
	<label style="color: red">{{$errors->first('password')}}</label>
         <br>
    <button type="submit">Login</button>
    <label>
      <span class="psw">Forgot <a href="#">password?</a>
    </label>
  


	@if($errors->any())
	<ul>
		@foreach($errors->all() as $err)
		<li>{{$err}}</li>
		@endforeach
	</ul>
	@endif

	@if(session('message'))
		{{session('message')}}
	@endif



  </div>

</form>




  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>  
</body>
</html>

