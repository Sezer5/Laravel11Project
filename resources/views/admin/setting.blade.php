@extends('layouts.adminbase')

@section('title', 'Settings')
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Settings</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active"><a href="{{route('admin.setting')}}">Settings</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                {{-- <div class="card-header">
                    <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div> --}}
                <div class="card-body">
                    <form action="{{route('admin.setting_update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$data->title}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Keywords</label>
                                <textarea name="keywords" id="keywords" cols="30" rows="10">{{$data->keywords}}</textarea>

                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#keywords' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10">{{$data->description}}</textarea>

                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#description' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Company</label>
                                <input type="text" class="form-control" name="company" value="{{$data->company}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" name="address" value="{{$data->address}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$data->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">E-mail</label>
                                <input type="text" class="form-control" name="email" value="{{$data->email}}">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contact</label>
                                <textarea name="contact" id="contact" cols="30" rows="10">{{$data->contact}}</textarea>

                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#contact' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">About Us</label>
                                <textarea name="aboutus" id="aboutus" cols="30" rows="10">{{$data->aboutus}}</textarea>

                                <script>
                                    ClassicEditor
                                        .create( document.querySelector( '#aboutus' ) )
                                        .then( editor => {
                                            console.log( editor );
                                        } )
                                        .catch( error => {
                                            console.error( error );
                                        } );
                                </script>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <select name="status" class="form-control">
                                    <option value="{{$data->status}}">{{$data->status}}</option>
                                    <option value="True">True</option>
                                    <option value="False">False</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Icon</label>
                                @if ($data->icon)
                                                <td><img src="{{ Storage::url($data->icon) }}" style="width:340px;"></td>
                                            @endif
                                <input type="file" name="icon" class="form-control">
                            </div>
                            
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    Footer
                </div>
                <!-- /.card-footer-->
            </div>
            <!-- /.card -->

        </section>
        <!-- /.content -->
    </div>
@endsection
