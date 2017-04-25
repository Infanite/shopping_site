@include('admin.header')
@include('admin.sidebar')
<div id="content">
<a href="{{url('category/addcategory')}}" style="margin-right: 1000px;text-decoration: none;font-size: 40px; hover:'color:green'" > Add Category </a>
<table border="1">
    <tr>
        <th style="color:#ff99cc;width:40px;font-size: 40px;">Id</th>
        <th style="color:#ff99cc;width:300px;font-size: 40px;">Category Name</th>
        <th style="color:#ff99cc;width:100px;font-size: 40px;">Status</th>
        <th style="color:#ff99cc;width:100px;font-size: 40px;">Action</th>
    </tr>
@foreach($result as $row)
    <tr>
        <td>{{$row->id}}</td>
         <td>{{$row->categoryName}}</td>
          <td>{{$row->status}}</td>
           <td style="width:200px"><a href="{{url('category/edit')}}/{{$row->id}}" style="text-decoration: none;">Edit</a>
           |
           <a href="{{url('category/delete')}}/{{$row->id}}" style="text-decoration: none;">Delete</a>
           |
           @if($row->status==1)
           <a href="{{url('category/disable')}}/{{$row->id}}">Disable</a>
           @else
            <a href="{{url('category/enable')}}/{{$row->id}}">Enable</a>
           @endif
           </td></tr>

        @endforeach 
    </table>
 </div>  
</body>
</html>



