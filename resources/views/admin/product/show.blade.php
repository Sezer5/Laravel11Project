<link rel="stylesheet" href="{{ asset('assets') }}/Admin/dist/css/adminlte.min.css">

<table class="table table-bordered">
    <tr>
        <td>Title</td>
        <td>{{ $data->title }}</td>
    </tr>
    <tr>
        <td>Keywords</td>
        <td>{{ $data->keywords }}</td>
    </tr>
    <tr>
        <td>Description</td>
        <td>{{ $data->description }}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>{{ $data->status }}</td>
    </tr>
    <tr>
        <td>Detail</td>
        <td>{{ $data->detail }}</td>
    </tr>
    <tr>
        <td>Price</td>
        <td>{{ $data->price }}</td>
    </tr>
    <tr>
        <td>Quantity</td>
        <td>{{ $data->quantity }}</td>
    </tr>
    <tr>
        <td>Min.Quantity</td>
        <td>{{ $data->minquantity }}</td>
    </tr>
    <tr>
        <td>Tax</td>
        <td>{{ $data->tax }}</td>
    </tr>
    <tr>
        <td>Image</td>
        <td>
            @if ($data->image)
                <img src="{{ Storage::url($data->image) }}" style="width:340px;">
            @endif
        </td>
    </tr>
</table>
