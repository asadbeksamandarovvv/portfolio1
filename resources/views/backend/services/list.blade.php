
@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Services Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    
        <section class="content">
            <div class="container-fluid">
                @include('_message')
                
                <a href="{{url('admin/services/add')}}" 
                    class="btn btn-primary"> Add Services </a>
                <br><br>
                <div class="row">
                    <section class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <td>Id</td>
                                            <td>Title</td>
                                            <td>Image</td>
                                            <td>Description</td>
                                            <td>Action</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($getrecord as $value)
                                        <tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->title }}</td>
                                            <td>
                                                @if(!empty($value->image))
                                                    @if(file_exists(public_path('img/'.$value->image)))
                                                        <img src="{{ asset('img/'.$value->image) }}" style="height: 80px; width: 80px;">
                                                    @endif
                                                @endif
                                            </td>
                                            <td>{{ $value->description }}</td>

                                            <td>
                                                <a href="{{ url('admin/services/edit/'.$value->id) }}" class="btn btn-primary">Edit</a>
                                                <a onclick="return confirm('Are you sure you want to delete?')" href="{{ url('admin/services/delete/'.$value->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </div>
@endsection
