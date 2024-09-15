<link rel="stylesheet" href="{{ asset('assets') }}/Admin/dist/css/adminlte.min.css">
<table class="table table-bordered">
    <form action="{{route('admin.image.store',['id'=>$product_id])}}" method="POST" enctype="multipart/form-data">
        @csrf
        <tr>
            <td>Title:</td>
            <td><input type="text" name="title" class="form-control"></td>
        </tr>
        <tr>
            <td>Image:</td>
            <td><input type="file" name="image" class="form-control"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button class="btn btn-success" type="submit" style="float: right"> + Add</button>
            </td>
        </tr>
    </form>
</table>
<table class="table table-bordered">
    <tr>
        <td>Id</td>
        <td>Title</td>
        <td>Image</td>
        <td>Delete</td>
        
    </tr>
    @foreach ($images as $rs)
    <tr>
        <td>{{$rs->id}}</td>
        <td>{{$rs->title}}</td>
        <td>
            @if ($rs->image)
                <img src="{{ Storage::url($rs->image) }}" style="width:340px;">
            @endif
        </td>
        <td><a href="{{route('admin.image.destroy',['id'=>$rs->id])}}"  onclick="return confirm('Deleting Are Yout Sure?')">Delete</a></td>
    </tr>
    @endforeach
    
    
</table>
