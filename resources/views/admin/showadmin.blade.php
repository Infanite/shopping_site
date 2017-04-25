@include('admin.header')
@include('admin.sidebar')
<div id="content">
<table border="1">
    <tr>
        <th style="color:#ff99cc;width:40px;font-size: 40px;">Id</th>
        <th style="color:#ff99cc;width:40px;font-size: 40px;">Image</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">Admin Name</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">Username</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">email</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">phone</th>
        <th style="color:#ff99cc;width:100px;font-size: 40px;">Status</th>
        <th style="color:#ff99cc;width:100px;font-size: 40px;">Date/Time</th>
    </tr>
@foreach($result as $row)
    <tr>
        <td>{{$row->id}}</td>
        <td><img src="{{url($row->photo)}}" width="70px" height="80px"></td>
         <td>{{$row->name}}</td>
         <td>{{$row->username}}</td>
          <td>{{$row->email}}</td>
          <td>{{$row->phone}}</td>
          <td>{{$row->status}}
          @if($row->status==1)
           <a href="{{url('admin/disable')}}/{{$row->id}}">Disable</a>
           @else
            <a href="{{url('admin/enable')}}/{{$row->id}}">Enable</a>
           @endif
           </td>
		  <td>{{$row->created_at}}</td>
          </tr>

        @endforeach 
    </table>
 </div>  
</body>
</html>



