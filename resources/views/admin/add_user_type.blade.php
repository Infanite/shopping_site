
<div id="content">
<form action="{{url('user/usertype')}}" method="POST">
     <input type="hidden" name="_token" value="{{csrf_token()}}" >
    <p>User Type</p>
    <input type="text" name="usertype">
    <p><input type="submit" value="Add" name="add"></p>
</form>
</div>  
</body>
</html>