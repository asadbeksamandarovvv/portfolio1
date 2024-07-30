@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Services Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item">
                                <a href="#">Services</a>
                            </li>
                            <li class="breadcrumb-item active">Edit</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('_message')
                <!-- Form for editing a service -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Service</h3>
                            </div>

                            <form class="form-horizontal" method="post" 
                            action="{{ route('admin.admin.services.update', $service->id) }}" 
                            enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Service Title</label>
                                        <span style="color: red"> * </span>
                                        <div class="col-sm-8">
                                            <input type="text" name="title" class="form-control" 
                                            placeholder="Service Title" value="{{ old('title', $service->title) }}" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Service Description</label>
                                        <span style="color: red"> * </span>
                                        <div class="col-sm-8">
                                            <textarea name="description" class="form-control" 
                                            placeholder="Description" rows="5" required>{{ old('description', $service->description) }}</textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Service Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image" class="form-control">

                                            @if ($service->image)
                                                <img src="{{ asset('storage/img/' . $service->image) }}" 
                                                alt="Current Image" style="height: 80px; width: 80px;">
                                            @endif
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{ route('admin.admin.services.index') }}" class="btn btn-default float-right">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection