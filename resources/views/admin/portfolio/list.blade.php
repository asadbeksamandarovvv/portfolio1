@extends('admin.layouts.app')

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Portfolio List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active">Portfolio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container-fluid">
                @include('_message')

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Portfolio List</h3>
                                <div class="card-tools">
                                    <a href="{{ route('admin.admin.portfolios.create') }}" class="btn btn-primary">Add New Portfolio</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($getrecord as $portfolio)
                                            <tr>
                                                <td>{{ $portfolio->id }}</td>
                                                <td>{{ $portfolio->title }}</td>
                                                <td>{{ $portfolio->description }}</td>
                                                <td>
                                                    @if($portfolio->image)
                                                        <img src="{{ asset('storage/img/' . $portfolio->image) }}" alt="Image" width="100">
                                                    @else
                                                        No image
                                                    @endif
                                                </td>
                                                <td>
                                                    {{-- <a href="{{ route('admin.portfolio.show', $portfolio->id) }}" class="btn btn-success">View</a> --}}
                                                    <a href="{{ route('admin.admin.portfolios.edit', $portfolio->id) }}" class="btn btn-warning">Edit</a>
                                                    <form action="{{ route('admin.admin.portfolios.destroy', $portfolio->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5" class="text-center">No portfolios found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection