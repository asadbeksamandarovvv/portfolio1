@extends('admin.layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Home Page</h1>
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
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('_message')
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Home Page</h3>
                            </div>
                            <form class="form-horizontal" method="post" 
                            <form action="{{ route('admin.') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ @$getrecord[0]->id }}">
                                <div class="card-body">
                                    
                                    {{-- <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Profile Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="profile" class="form-control">
                                            @if(@$getrecord[0]->profile)
                                                <img src="{{ url('public/img/' . @$getrecord[0]->profile) }}" 
                                                width="150" height="150" class="mt-2" />
                                            @endif
                                        </div> --}}

                                    {{-- </div> --}}

                                    <div class="form-group row"> 
                                        <label class="col-sm-2 col-form-label">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" 
                                            class="form-control" placeholder="Title" 
                                            value="{{ @$getrecord[0]->title }}">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Work Experience</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="work_experience" 
                                            class="form-control" 
                                            placeholder="Work Experience" 
                                            value="{{ @$getrecord[0]->work_experience }}">
                                        </div>
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <button type="submit" name="add_to_update" id="add_to_update"
                                            @if(count($getrecord)>0) Edit @else Add @endif
                                            class="btn btn-info"> @if(count($getrecord)>0)
                                             Edit @else Add @endif</button>

                                    <a href="" class="btn btn-default float-right"> Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

