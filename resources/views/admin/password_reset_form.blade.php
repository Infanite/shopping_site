<form action="{{url('forgotpassword/newpassword')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	<input type="hidden" name="email" value="{{$result->email}}"><br>
	New Password:<input type="password" required name="password" >{{$errors->first('password')}}<br>
	Confirm Password:<input type="password" required name="confirm_password">{{$errors->first('confirm_password')}}<br>
	<input type="submit" name="submit" value="submit">
	
</form>