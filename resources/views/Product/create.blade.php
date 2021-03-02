@extends('layouts.backend.app')

@section('content')

        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h1 class="m-0">Product</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Master</li>
                        <li class="breadcrumb-item active">Create Product</li>
                    </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- Horizontal Form -->
                <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Create Product</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{route('product.store')}}">
                    @csrf
                    <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="nama" class="col-sm-6 col-form-label">Nama</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="harga" class="col-sm-6 col-form-label">Price</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="eletronika_id" class="col-sm-6 col-form-label">Id Elektronika</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="elektronika_id" name="eletronika_id" placeholder="Elektronika Id">
                            </div>
                        </div>
                        
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="jenis" class="col-sm-6 col-form-label">Jenis</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="jenis" name="jenis" placeholder="Jenis">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="berat" class="col-sm-6 col-form-label">Berat</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="berat" name="berat" placeholder="Berat">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="gambar" class="col-sm-6 col-form-label">Gambar</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="gambar" name="gambar" placeholder="Gambar">
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-4">
                            <label for="status" class="col-sm-4 col-form-label">Status</label>
                            <div class="col-sm-8">
                                <select class="form-control" name="status" id="status">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </select>
                            </div>
                        </div>  
                    </div>

                  
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-default float-right">Submit</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
                </div>
                <!-- /.card -->

            </div>
            <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->

@endsection