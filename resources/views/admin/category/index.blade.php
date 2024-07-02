@extends('layouts.adminbase')

@section('title', 'Category List')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Categories</h1>
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
                    <div class="row">

                        <div class="col-md-12">
                            <div class="box">
                                <table class="table table-striped table-bordered">
                                    <tbody>
                                        <tr>
                                            <th style="width: 10px">Id</th>
                                            <th>Parent Category</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Keywords</th>
                                            <th>Status</th>
                                            <th>Image</th>
                                            <th>Show</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        @foreach ($data as $rs)
                                            <tr>
                                                <td>{{ $rs->id }}</td>
                                                <td>{{ $rs->parent_Id }}
                                                </td>
                                                <td>{{ $rs->title }}</td>
                                                <td>{!! $rs->description !!}</td>
                                                <td>{{ $rs->keywords }}</td>
                                                <td>{{ $rs->status }}</td>


                                                @if ($rs->image)
                                                    <td><img src="{{ Storage::url($rs->image) }}" style="width:140px;"></td>
                                                @endif


                                                <td><a href="/admin/category/show/{{ $rs->id }}"
                                                    onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"
                                                    >Show</a></td>
                                                <td><a href="/admin/category/edit/{{ $rs->id }}">Edit</a></td>
                                                <td><a href="/admin/category/destroy/{{ $rs->id }}">Delete</a></td>



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
