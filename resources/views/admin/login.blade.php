<html>
    <head>
        <link href="{{url('public/style1.css')}}" rel="stylesheet">
        <style>
        	.center {
    			text-align: center;
    			margin-top: 12px;
    			font-size: 40px;
   		 		color: #660000;
   		    }

   		    .container{
   		    	text-align: center;
				margin-top: 50px;
   		    }
   		    #signup{
   		    	color:#b3b300;
    			font-size:30px;
    			text-decoration: none; 
   		    }
   		    .right-text{
   		    	text-align: right;
   		    }

          body{
            background-image: url(image/img.jpg);
          }
   		    

        </style>
    </head>
    <body>
            <div class="right-text">
                <a id = "signup" href="{{url('adminlogin/signup')}}">Sign up</a>
            </div>
            <h1 class="center">
                Welcome to admin login
                </h1>
            
            <div class="container">
		<form action="{{url('adminlogin/login')}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-input">
				Username:<input type="text" name="username" placeholder="enter your username">
			</div><br>
			<div class="form-input">
				Password:<input type="password" name="password" placeholder="enter your password">
			</div>
      <div>
        <input type="checkbox" name="remember_me" id="remember"> <label for="remember">Remember me</label>
      </div>
			<p style="margin-left:-100px"><input type="submit" name="login" value="login"></p>
      <p style="margin-left: 149px;margin-top: -45px"><input type="submit" name="forgot password" value="forgot password"></p>
      <a href="{{url('forgotpassword/forgotpassword')}}">Forgot Password</a>
		</form>
	</div>
</body>
</html>