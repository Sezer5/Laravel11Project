<link rel="stylesheet" href="{{ asset('assets') }}/Admin/dist/css/adminlte.min.css">

<table class="table table-bordered">
    <tr>
        <td>Name</td>
        <td>{{ $data->name }}</td>
    </tr>
    <tr>
        <td>E-mail</td>
        <td>{{ $data->email }}</td>
    </tr>
    <tr>
        <td>Phone</td>
        <td>{{ $data->phone }}</td>
    </tr>
    <tr>
        <td>Subject</td>
        <td>{{ $data->subject }}</td>
    </tr>
    <tr>
        <td>Message</td>
        <td>{{ $data->message }}</td>
    </tr>

    <tr>
        <td>Ip</td>
        <td>{{ $data->Ip }}</td>
    </tr>
    <tr>
        <td colspan="2">
            <h4>Write a note:</h4>
        </td>
    </tr>
    <tr>
        <td>Note</td>
        @include('home.messages')
        <td>
            <form action="{{ route('admin.messages.update', ['id' => $data->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <table>
                    <tr>
                        <td>
                            <textarea name="note" cols="50" rows="5">{{ $data->note }}</textarea>
                        </td>
                        <td>
                            <button>Send</button>
                        </td>
                    </tr>
                </table>
            </form>    

        </td>
    </tr>

</table>
