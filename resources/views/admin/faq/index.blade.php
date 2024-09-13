@extends('layouts.adminbase')

@section('title', 'Faq')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Faq</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                            <li class="breadcrumb-item active">Faq</li>
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
                    {{-- <h3 class="card-title">Title</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div> --}}
                </div>
                <div class="card-body">
                    @include('home.messages')
                    <div class="row">

                        <div class="col-md-12">
                            <div class="box">
                                
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <td colspan="7">
                                                <a href="{{route('admin.faq.create')}}">                                                
                                                    <button class="btn btn-success" style="float: right">
                                                        <i class="fas fa-plus"></i> Create Faq
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <th style="width: 10px">Id</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th>Status</th>
                                            <th>Show</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        @foreach ($data as $rs)
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->question }}</td>
                                                <td>{!! $rs->answer !!}</td>
                                                <td>{{ $rs->status }}</td>
                                                <td><a href="{{route('admin.faq.show',['id'=>$rs->id])}}"
                                                    onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"
                                                    >Show</a></td>
                                                <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}">Edit</a></td>
                                                <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"  onclick="return confirm('Deleting Are Yout Sure?')">Delete</a></td>



                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div><!-- /.box -->
                        </div>
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
