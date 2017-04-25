<style type="text/css">
    .products{
        border:2px solid black;
    }
    tr{
        cell-spacing:50px;
    }
    td{
        font-size: 40px;
    }
    input[type=text]{
        width:400px;
        height:50px;
    }
    input[type=file]{
        width:400px;
        height:50px;
    }
    input[type=submit]{
        width:200px;
        height:40px;
       
    }
    input[type=reset]{
        width:200px;
        height:40px;
    }
    .option{
        width:400px;
         height:50px;
    }
       </style>
       @include('admin.header')
       @include('admin.sidebar')
<div id="content">
@foreach($result2 as $result)
<form action="{{url('product/edit')}}/{{$result->id}}" method="POST" enctype="multipart/form-data">

     <input type="hidden" name="_token" value="{{csrf_token()}}" >
     <table class="product">
    <tr><td>Name </td>
    <td><input type="text" name="name" value="{{$result->name}}"></td>
    <td>{!!$errors->first('name')!!}</td></tr>
    <tr><td>Category </td>
    <td><select name="category" class="option">
     <option value="{{$result->category}}">{{$result->categoryName}}</option>
    <?php foreach($result1 as $row1) {
    ?>
    <option value="{{$row1->id}}">{{$row1->categoryName}}</option>
    <?php
}
?>
    
    </select>
    </td>
    <td>{!!$errors->first('categoryName')!!}</td>
    </tr>
    <tr><td>Gender</td>
    <td><input type="radio" name="gender" value="male" <?php if($result->gender=='male') echo 'checked' ; ?>>Male</td>
    <td><input type="radio" name="gender" value="female" <?php if($result->gender=='female') echo 'checked' ; ?>>Female</td>
    <td><input type="radio" name="gender" value="unisex" <?php if($result->gender=='unisex') echo 'checked' ?>>Unisex</td>
    </tr>
    <tr><td>Price</td>
    <td><input type="price" name="price" value="{{$result->price}}"></td>
    
    <tr><td>Image </td>
    <?php session()->put('image',$result->image); ?>
    <td><input type="file" name="image"></td>
    <?php  ?>
    <td><img src="{{url($result->image)}}" alt="" height="70" width="120" style="margin-left:-130px;"></td>
    <td>{!!$errors->first('image')!!}</td></tr>

    <tr><td>Color</td>
    <td><option value='blue' name='color' <?php if($result->color=='blue') echo 'checked' ; ?>>Blue</option></td>
    <td><option value='black' name='color' <?php if($result->color=='black') echo 'checked' ; ?>>Black</option></td>
    <td><option value='purple' name='color' <?php if($result->color=='purple') echo 'checked' ; ?>>Purple</option></td>
    <td><option value='skyblue' name='color' <?php if($result->color=='skyblue') echo 'checked' ; ?>>Sky Blue</option></td>
    <td><option value='gray' name= 'color'  <?php if($result->color=='gray') echo 'checked' ; ?>>Gray</option></td>
    <td><option value='green' name='color' <?php if($result->color=='green') echo 'checked' ; ?>>Green</option></td>
    <td><option value='red' name='color' <?php if($result->color=='red') echo 'checked' ; ?>>Red</option></td>
    <td><option value='yellow' name='color' <?php if($result->color=='yellow') echo 'checked' ; ?>>Yelllow</option></td>
    <td><option value='white' name='color' <?php if($result->color=='white') echo 'checked' ; ?>>White</option></td>
    
    <tr><td>Description</td>
    <td><input type="text" name="description" value="{{$result->description}}"> </td> 
    <td>{!!$errors->first('description')!!}</td></tr> 
    @endforeach
   <tr><td style="margin-left: 50px"><input type="submit" value="update" name="update"></td></tr>
   </table>
</form>
</div>  
</body>
</html>