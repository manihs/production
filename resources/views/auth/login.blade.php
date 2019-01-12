p<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#ff9800">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <style>    
*{
      font-family: 'Raleway', sans-serif;
  }  
.__login{
  height: 88vh;
  position: relative;
}

.pro, .login_container{
  position: absolute;
  top: 0;
  width: 100%;
  height: 100%;
  min-height:500px;
  background: linear-gradient(#f19f3f,#f9cb4a,#f9e34a,#ffba6a);
  border-radius: 5px;
}
.pro:after{
  content: ' ';
  position: absolute;
  top: -5px;
  bottom: -5px;
  right: -5px;
  left: -5px;
  border: 2px solid #FFC107;
  border-radius: 5px;
}

.login_button{
  position: relative;
  width: 100px;
  padding: 8px;
  border-radius:7px;
  background: #ec9f45;
  margin: 10px auto;
  color: white;
  text-align: center;
  margin-top: 40px;
}
.login_button:after{
  content: ' ';
  position: absolute;
  top: -4px;
  bottom: -4px;
  right: -4px;
  left: -4px;
  border: 1px solid #ef965d;
  border-radius: 10px;
}
.container_logo {
    margin-top: 17%;
   text-align: center;
}
.input_group{
  width: 100%;
  text-align: center;
  margin-bottom:20px;
}
.input_group input{
  padding:10px; 
  border-radius: 5px;
  border:none; 
  width: 100%;
  box-sizing: border-box;
}
.label_input{
  color: #5d5252;
  margin-bottom:4px;
  font-size: 14px;
}
.group{
  margin: 10px auto;
  width: 80%;
}

      
  </style>
</head>
<body>  
<div class="__login">
    <div class="pro">
    </div>
    <div class="login_container">
        <div class="container_logo">
            <img src="http://theflyr.com/logo.png">
        </div>


        <form method="POST" action="{{ route('login') }}" id="login_form">
                            @csrf
                            <!--  -->
        <div class="group">
            <div class="label_input">Username</div>
            <div class="input_group">
                <input type="text" name="email" id="" placeholder="username">
            </div>
        </div>  
                            <!--  -->
        <div class="group">
            <div class="label_input">Password</div>
            <div class="input_group">
                <input type="text" name="password" id="" placeholder="**********">
            </div>
        </div>

        </form> 
        <div class="login_button" id="login">Login</div>
    </div>
</div> 
<script>
$( "#login" ).click(function() {
  $( "#login_form" ).submit();
});
</script>  
</body>
</html>