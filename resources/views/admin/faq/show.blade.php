<link rel="stylesheet" href="{{ asset('assets') }}/Admin/dist/css/adminlte.min.css">

<table class="table table-bordered">
    <tr>
        <td>Answer</td>
        <td>{{ $data->answer }}</td>
    </tr>
    <tr>
        <td>Question</td>
        <td>{{ $data->question }}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>{{ $data->status }}</td>
    </tr>
</table>
