@extends('layouts.adminbase')

@section('title', 'Add Product')



@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Product</h1>
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
                        <div class="card-header">
                            <h3 class="card-title">Add Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{route('admin.product.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Parent Category</label>
                                    <select class="form-control" name="category_id">
                                        <option value="0">Main Category</option>
                                        @foreach($data as $rs)
                                            <option value="{{$rs->id}}">{{ \App\Http\Controllers\Admin\AdminProductController::getParentsTree($rs, $rs->title) }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Keywords</label>
                                    <input type="text" class="form-control" name="keywords"
                                        placeholder="Enter Keywords">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Description</label>
                                    <input type="text" class="form-control" name="description"
                                        placeholder="Enter Description">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Detail</label>
                                    <input type="text" class="form-control" name="detail"
                                        placeholder="Enter Detail">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" class="form-control" name="price"
                                        placeholder="Enter Price">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Quantity</label>
                                    <input type="text" class="form-control" name="quantity"
                                        placeholder="Enter Quantity">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Min.Quantity</label>
                                    <input type="text" class="form-control" name="minquantity"
                                        placeholder="Enter Min.Quantity">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tax</label>
                                    <input type="text" class="form-control" name="tax"
                                        placeholder="Enter Tax">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="True">True</option>
                                        <option value="False">False</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>
                                
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
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
