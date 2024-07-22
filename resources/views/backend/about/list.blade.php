@extends('backend.layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">About Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard </li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

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
                           
                            <form class="form-horizontal" method="post" action="{{url('admin/about/post')}}" enctype="multipart/form-data">
                                
                                @csrf
                            <div class="card-body">
                                <input type="hidden" name="id" value="{{@$getrecord[0]->id}}">

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">About Image</label>
                                    <div class="col-sm-10">
                                        <input type="file" name="image" class="form-control">
                                        @if(@$getrecord[0]->about_image)
                                            <img src="{{ url('img/'.@$getrecord[0]->about_image) }}" width="150" height="150" class="mt-2" />
                                        @endif
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{@$getrecord[0]->title}}" 
                                        name="title"
                                               class="form-control" placeholder="Title">
                                    </div>
                                </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Full Name</label>
                                        <div class="col-sm-10">
                                            <input type="text"  name="full_name"
                                                   class="form-control" 
                                                   placeholder="Full Name" 
                                                   value="{{@$getrecord[0]->full_name}}">
                                        </div>
                                    </div>

                                   
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Birthday</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->birthday}}"
                                             name="birthday"
                                                   class="form-control" placeholder="Birthday">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Phone</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->phone}}" name="phone"
                                                   class="form-control" placeholder="Phone">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Age</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->age}}" name="age"
                                                   class="form-control" placeholder="Age">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Website</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->website}}" name="website"
                                                   class="form-control" placeholder="Website">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">City</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->city}}" name="city"
                                                   class="form-control" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Degree</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->degree}}" name="degree"
                                                   class="form-control" placeholder="Degree">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" value="{{@$getrecord[0]->email}}" name="email"
                                                   class="form-control" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Freelance</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->freelance}}" name="freelance"
                                                   class="form-control" placeholder="Freelance">
                                        </div>
                                    </div>

                                   

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Skils Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="skils_title"
                                                    class="form-control" placeholder="Skils Title"
                                                    value="{{@$getrecord[0]->skils_title}}">
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Happy Clients</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->happy_clients}}" name="happy_clients"
                                                   class="form-control" placeholder="Happy Clients">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Projects</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->projects}}" name="projects"
                                                   class="form-control" placeholder="Projects">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Hours Of Support</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->hours_of_support}}" name="hours_of_support"
                                                   class="form-control" placeholder="Hours Of Support">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Awards</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->awards}}" name="awards"
                                                   class="form-control" placeholder="Awards">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Sub Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->sub_title}}"
                                             name="sub_title"
                                                   class="form-control" placeholder="Sub title">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Html</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->html}}" name="html"
                                                   class="form-control" placeholder="HTML">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">CSS</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->css}}" name="css"
                                                   class="form-control" placeholder="Css">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">JavaScript</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->javascript}}" name="javascript"
                                                   class="form-control" placeholder="JavaScript">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Laravel</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->laravel}}" 
                                            name="laravel"
                                                   class="form-control" placeholder="Laravel">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Php</label>
                                        <div class="col-sm-10">
                                            <input type="text" value="{{@$getrecord[0]->php}}" 
                                            name="php"
                                                class="form-control" placeholder="php">
                                        </div>
                                    </div>
                                  
                                    <div class="card-footer">
                                          <button type="submit" name="add_to_update" id="add_to_update"
                                                  value="@if(count($getrecord)>0) Edit @else Add @endif"
                                                  class="btn btn-info">
                                              @if(count($getrecord)>0) Edit @else Add @endif
                                          </button>
                                        <a href="" class="btn btn-default float-"> Cancel</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

<!-- Control Sidebar -->
<!-- ./wrapper -->
