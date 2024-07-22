@extends('backend.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <br><br>
                @include('_message')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Page</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="post" action="{{ url('admin/resume/update') }}" 
                            enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $data['resumes']->id ?? '' }}">
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control"
                                             placeholder="Title" value="{{ old('title', $data['resumes']->title ?? '') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="sub_title" class="col-sm-2 col-form-label">Sub Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="sub_title" class="form-control" 
                                            id="sub_title" placeholder="Sub Title"
                                            value="{{ old('sub_title', $data['resumes']->sub_title ?? '') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="year" class="col-sm-2 col-form-label">Year</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="year" class="form-control" id="year" placeholder="Year" value="{{ old('year', $data['resumes']->year ?? '') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="about_me" class="col-sm-2 col-form-label">About Me</label>
                                        <div class="col-sm-10">
                                            <textarea name="about_me" class="form-control" id="about_me" rows="13" placeholder="About Me">{{ old('about_me', $data['resumes']->about_me ?? '') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="address" class="form-control" id="address" placeholder="Address" value="{{ old('address', $data['resumes']->address ?? '') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone" class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" value="{{ old('phone', $data['resumes']->phone ?? '') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email', $data['resumes']->email ?? '') }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="description" 
                                            rows="15" placeholder="Description">{{ old('description', $data['resumes']->description ?? '') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Edit</button>
                                    <a href="{{ url('admin/resume') }}" class="btn btn-default float-right">Cancel</a>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection