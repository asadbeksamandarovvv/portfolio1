@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Add Services</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Services</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('_message')

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Add Services</h3>
                            </div>
                            <form class="form-horizontal" method="POST" action="{{ url('admin/services/add') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label for="image" class="col-sm-2 col-form-label">Services Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control" id="image">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="title" class="col-sm-2 col-form-label">Services Title <span style="color: red"> *</span></label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" id="title" placeholder="Services Title">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="description" class="col-sm-2 col-form-label">Services Description <span style="color: red"> *</span></label>
                                        <div class="col-sm-10">
                                            <textarea name="description" class="form-control" id="description" cols="30" rows="10" placeholder="Description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Add Services</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection