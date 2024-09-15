@extends('layouts.adminbase')

@section('title', 'Comments List')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Comments</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                            <li class="breadcrumb-item active">Comments</li>
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

                            </div><!-- /.box -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12">
                            <div class="card card-primary card-tabs">
                                <div class="card-header p-0 pt-1">
                                    <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                                href="#custom-tabs-one-home" role="tab"
                                                aria-controls="custom-tabs-one-home" aria-selected="true">New</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-one-profile" role="tab"
                                                aria-controls="custom-tabs-one-profile" aria-selected="false">Old</a>
                                        </li>

                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-one-tabContent">
                                        <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-home-tab">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 10px">Id</th>
                                                        <th>Name</th>
                                                        <th>Product</th>
                                                        <th>Subject</th>
                                                        
                                                        <th>Show</th>
                                                        
                                                    </tr>
                                                    @foreach ($new as $rs)
                                                        <tr>
                                                            <td>{{ $rs->id }}</td>
                                                            <td>
                                                                @if ($rs->user_id==NULL)
                                                                    <i class="fa fa-user"></i> Guest
                                                                @else
                                                                    <i class="fa fa-user"></i> {{$rs->user->name}}
                                                                @endif
                                                            </td>
                                                            <td>{{ $rs->product->title }}</td>
                                                            <td>{{ $rs->subject }}</td>
                                                            
                                                            <td><a href="{{ route('admin.comments.show', ['id' => $rs->id]) }}"
                                                                    onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a>
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>


                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                            aria-labelledby="custom-tabs-one-profile-tab">
                                            <table class="table table-striped table-bordered">
                                                <tbody>
                                                    <tr>
                                                        <th style="width: 10px">Id</th>
                                                        <th>Name</th>
                                                        <th>Product</th>
                                                        <th>Subject</th>
                                                        
                                                        <th>Show</th>
                                                        
                                                    </tr>
                                                    @foreach ($old as $rs)
                                                        <tr>
                                                            <td>{{ $rs->id }}</td>
                                                            <td>
                                                                @if ($rs->user_id==NULL)
                                                                    <i class="fa fa-user"></i> Guest
                                                                @else
                                                                    <i class="fa fa-user"></i> {{$rs->user->name}}
                                                                @endif
                                                            </td>
                                                            <td>{{ $rs->product->title }}</td>
                                                            <td>{{ $rs->subject }}</td>
                                                            
                                                            <td><a href="{{ route('admin.comments.show', ['id' => $rs->id]) }}"
                                                                    onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">Show</a>
                                                            </td>
                                                            
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card -->
                            </div>
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
