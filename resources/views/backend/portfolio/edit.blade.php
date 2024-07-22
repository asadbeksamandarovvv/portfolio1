
@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Portfolio Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Portfolio</a></li>
                            <li class="breadcrumb-item active">Edit Portfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('_message')
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Portfolio</h3>
                            </div>
                            <form class="form-horizontal" method="post" 
                                  action="{{ url('admin/portfolio/edit', $getrecord->id)}}" 
                                  enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Portfolio Title</label>
                                        <span style="color: red"> * </span>
                                        <div class="col-sm-8">
                                            <input  type="text" name="title" class="form-control" 
                                                    placeholder="Portfolio Title" required
                                                    value="{{$getrecord->title}}" >
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Portfolio Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control">
                                            @if (!empty($getrecord->image))
                                                <img src="{{asset('img/'. $getrecord->image)}}" 
                                                style="height: 80px; width: 80px ">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                        <a href="{{url('admin/portfolio')}}" class="btn btn-default float-right">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection       