@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Resume</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Resume</a></li>
                            <li class="breadcrumb-item active">Add Resume</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('_message')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Add New Resume</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="post" action="{{ route('admin.resume.add.post') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title *</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="services_title" class="col-sm-2 col-form-label">Services Title *</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="services_title" class="form-control" id="services_title" placeholder="Services Title" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="sub_title" class="col-sm-2 col-form-label">Sub Title *</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="sub_title" class="form-control" id="sub_title" placeholder="Sub Title" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="year" class="col-sm-2 col-form-label">Year *</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="year" class="form-control" id="year" placeholder="Year" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="about_me" class="col-sm-2 col-form-label">About me *</label>
                                        <div class="col-sm-10">
                                            <textarea name="about_me" class="form-control" id="about_me" placeholder="About me" rows="5" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-sm-2 col-form-label">Address *</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-2 col-form-label">Phone *</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email *</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Description *</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="description" placeholder="Description" rows="5" required></textarea>
                                        </div>
                                    </div>
                                    <!-- Resume Image -->
                                  
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Add Resume</button>
                                    <a href="{{ route('admin.resume') }}" class="btn btn-default float-right">Cancel</a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection