@extends('admin.layouts.app')


@section('content')

    <main id="main" class="main">
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif



        <div class="row">
            <div class="pagetitle  col-md-8">
                <h1>Categories Page</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.categories.index') }}">Categories</a>
                        </li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <div class="col-md-4 d-flex justify-content-end">
                <a class="btn btn-primary text-center" href="{{ route('admin.categories.create') }}">Add New
                    Category</a>
            </div>
        </div>


        <section class="section">
            <div class="table-responsive">
            <div class="row">
                <table id="datatable" class="display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>image</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td> <a href="{{route('admin.categories.index',$category->id)}}">{{$category->name}}</a> </td>
                                <td>{{ $category->slug }}</td>
                                <td>{{ $category->image }}</td>
                                <td>{{ $category->created_at->diffForHumans() }}</td>
                                <td>{{ $category->updated_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
