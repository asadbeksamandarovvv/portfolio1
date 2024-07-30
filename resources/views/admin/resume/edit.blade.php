@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Edit Resume</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.admin.resumes.index') }}">Resumes</a></li>
                            <li class="breadcrumb-item active">Edit Resume</li>
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
                @include('_message') <!-- Ensure this partial handles messages -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Edit Resume</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form class="form-horizontal" method="post" action="{{ route('admin.admin.resumes.update', $resumes['resumes']->id) }}" enctype="multipart/form-data">

                                @csrf
                                @method('PUT') <!-- Use PUT method for updates -->
                                
                                <div class="card-body">
                                    @foreach (['title', 'sub_title', 'year', 'about_me', 'address', 'phone', 'email', 'description'] as $field)
                                        <div class="form-group row">
                                            <label for="{{ $field }}" class="col-sm-2 col-form-label">{{ ucfirst(str_replace('_', ' ', $field)) }}</label>
                                            <div class="col-sm-10">
                                                @if ($field == 'about_me' || $field == 'description')
                                                    <textarea name="{{ $field }}" class="form-control" id="{{ $field }}" rows="5" placeholder="{{ ucfirst(str_replace('_', ' ', $field)) }}">{{ old($field, $data['resumes']->$field ?? '') }}</textarea>
                                                @else
                                                    <input type="{{ $field == 'email' ? 'email' : 'text' }}" name="{{ $field }}" class="form-control" id="{{ $field }}" placeholder="{{ ucfirst(str_replace('_', ' ', $field)) }}" value="{{ old($field, $data['resumes']->$field ?? '') }}">
                                                @endif
                                                @error($field)
                                                    <div class="text-danger">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Update</button>
                                    <a href="{{ route('admin.admin.resumes.index') }}" class="btn btn-default float-right">Cancel</a>
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