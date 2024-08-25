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
                <h1>Admins Page</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.admins.index') }}">Admins</a>
                        </li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <div class="col-md-4 d-flex justify-content-end">
                <a class="btn btn-primary text-center" href="{{ route('admin.admins.create') }}">Add New Admin</a>
            </div>

{{--            <div class="col-md-4 d-flex justify-content-end">--}}
{{--                <a class="btn btn-primary text-center" href="{{ route('admin.admins.update',$admin->id) }}">Update Admin</a>--}}
{{--            </div>--}}
        </div>


        <section class="section">
            <div class="table-responsive">
            <div class="row">
                <table id="datatable" class="display">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>email</th>
                        <th>password</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> <a href="{{route('admin.admins.index',$admin->id)}}">{{$admin->name}}</a> </td>
                            <td>{{ $admin->email }}</td>
                            <td>{{ $admin->password }}</td>
                            <td>{{ $admin->created_at->diffForHumans() }}</td>
                            <td>{{ $admin->updated_at->diffForHumans() }}</td>
                        </tr>
{{--                        @include('admin.pages.admins.edit')--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
