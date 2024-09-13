@extends('layouts.adminbase')

@section('title', 'Edit Faq')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Faq</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    {{-- <h3 class="card-title">Title</h3> --}}

                    {{-- <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div> --}}
                </div>
                <div class="card-body">
                    <div class="card card-primary">
                        <!-- /.card-header -->
                        <!-- form start -->
                        @include('home.messages')
                        <form action="{{route('admin.faq.update',['id'=>$data->id])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Question</td>
                                        <td>Answer</td>
                                        <td>Status</td>
                                        <td>*</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <textarea name="question" class="form-control" cols="10" rows="5">{{$data->question}}</textarea>
                                        </td>
                                        <td>
                                            <textarea name="answer" class="form-control" cols="10" rows="5">{{$data->answer}}</textarea>
                                        </td>
                                        <td>
                                            <select name="status" class="form-control" >
                                                <option value="{{$data->status}}">{{$data->status}}</option>
                                                <option value="True">True</option>
                                                <option value="False">False</option>
                                            </select>
                                        </td>
                                        <td>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </td>
                                    </tr>
                                </table>
                                
                            </div>
                            <!-- /.card-body -->                            
                        </form>
                    </div>
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
