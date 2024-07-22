@extends('backend.layouts.app')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Resume Page</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('_message')

                <div class="card-tools">
                    <a href="{{ url('admin/resume/add/') }}" class="btn btn-primary">Add Resume</a>
                </div>
                <br>
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Resume List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Title</th>
                                            <th>Sub Title</th>
                                            <th>Year</th>
                                            <th>About Me</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($getrecord as $resume)
                                            <tr>
                                                <td>{{ $resume->id }}</td>
                                                <td>{{ $resume->title }}</td>
                                                <td>{{ $resume->sub_title }}</td>
                                                <td>{{ $resume->year }}</td>
                                                <td>{{ $resume->about_me }}</td>
                                                <td>{{ $resume->address }}</td>
                                                <td>{{ $resume->phone }}</td>
                                                <td>{{ $resume->email }}</td>
                                                <td>{{ $resume->description }}</td>
                                                <td>
                                                    <a href="{{ url('admin/resume/edit/'.$resume->id) }}" class="btn btn-info">Edit</a>
                                                    <form action="{{ url('admin/resume/delete/'.$resume->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection