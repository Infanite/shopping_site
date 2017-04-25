@include('admin.header')
@include('admin.sidebar')
<div id="content">
<a style="margin-right: 1000px;font-size: 40px;width:30%; text-decoration: none;background-color: #6699ff;" href="{{url('product/addproducts')}}" > Add Products </a>
<table border="1">
<tr>
<th >Id</th>
<th >Name</th>
<th >Category</th>
<th >Gender</th>
<th >Price</th>
<th >Color</th>
<th >Size</th>
<th >Image</th>
<th >Description</th>
<th >Date/Time</th>
<th >Action</th>
</tr>

@foreach($result as $row)
	<tr>
<td>{{$row->id}}</td>
<td>{{$row->name}}</td>
<td>{{$row->categoryName}}</td>
<td>{{$row->gender}}</td>
<td>{{$row->price}}</td>

<td>

    <?php $colors = json_decode($row->color); ?>
    @if(!empty($colors))
    @foreach($colors as $color)
    {{$color}}
    @endforeach
    @endif

</td>


<td>
    
    <?php $sizes = json_decode($row->size); ?>
    @if(!empty($sizes))
    @foreach($sizes as $size)
    {{$size}}
    @endforeach
    @endif

</td>

<td>
	<?php $images = json_decode($row->image); ?>
	@foreach($images as $image)
	<img src="{{url($image)}}" width="70px" height="80px">
	@endforeach		
</td>
<td>{{$row->description}}</td>
<td>{{$row->created_at}}</td>
<td style="width:200px"><a href="{{url('product/edit')}}/{{$row->id}}" style="text-decoration: none;">Edit</a>
    |
    <a href="{{url('product/delete')}}/{{$row->id}}" style="text-decoration: none;">Delete</a>
    |

    </td>
    </tr>
    @endforeach
</table>
</div>  
</body>
</html>