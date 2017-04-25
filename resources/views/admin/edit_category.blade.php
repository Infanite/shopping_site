<form action="{{url('category/edit')}}/{{$result->id}}" method="POST">
     <input type="hidden" name="_token" value="{{csrf_token()}}" >
    <p>Category name </p>
    <input type="text" name="category" value="{{$result->categoryName}}">
    Status:<select name="status">
    <option value="{{$result->status}}" selected="selected">
    <option value="0">0</option>
    <option value="1">1</option>
    </select>
    <p><input type="submit" value="Update" name="add"></p>
</form>