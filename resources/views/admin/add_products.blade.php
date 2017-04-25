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

    input[type=radio]{
        width:50px;
        height:2    0px;
    }
    .option{
        width:400px;
         height:50px;
    }
       </style>
       @include('admin.header')
       @include('admin.sidebar')
<div id="content">
<form action="{{url('product/showproduct')}}" method="POST" enctype="multipart/form-data">

     <input type="hidden" name="_token" value="{{csrf_token()}}" >
     <table class="products">
    <tr><td>Name </td>
    <td><input type="text" name="name"></td>
    <td></td></tr>
    <tr><td>Category </td>
    <td><select name="category" class="option">
    <option value="">Select Category</option>
    @foreach($result as $row)
    
    <option value="{{$row->id}}">{{$row->categoryName}}</option>
    @endforeach
    
    </select></td>
    </tr>
    <tr><td>Gender</td>
    <td><input type="radio" name="gender" value="male">Male</td>
    <td><input type="radio" name="gender" value="female">Female</td>
    <td><input type="radio" name="gender" value="unisex">Unisex</td>
    </tr>
    <tr><td>Price</td>
    <td><input type="int" name="price"></td></tr>
    <tr><td>Image </td>
        <td><input type="file" name="image[]" multiple=""></td>
         <td></td></tr>
    <tr><td>Color</td>
    <td><select name="color[]" multiple class="option">
    <option value='blue'>Blue</option>
    <option value='black'>Black</option>
    <option value='purple'>Purple</option>
    <option value='skyblue'>Sky Blue</option>
    <option value='gray'>Gray</option>
    <option value='green'>Green</option>
    <option value='red'>Red</option>
    <option value='yellow'>Yelllow</option>
    <option value='white'>White</option>
    <option value='' selected>Select a Color </option>
    </select></td> 
    </tr>

    <tr><td>Size</td>
    <td><select name="size[]" multiple class="option">
    <option value='S'>S</option>
    <option value='M'>M</option>
    <option value='L'>L</option>
    <option value='XL'>XL</option>
    <option value='' selected>Select a Color </option>
    </select></td> 
    </tr>

    <tr><td>Description</td>
    <td><input type="text" name="description"> </td> 
    <td></td></tr>
   <tr><td style="margin-left: 50px"> <input type="submit" value="Add" name="add"></td>
   <td> <input type="reset" value="Reset" ></td></tr>
   </table>
</form>
</div>  
</body>
</html>