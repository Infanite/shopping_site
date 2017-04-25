<form action="{{url('forgotpassword/code')}}" method="post">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
	Code:<input type="text" name="reset_token" placeholder="please enter your reset code">
	<input type="submit" name="submit" value="sendcode">
</form>