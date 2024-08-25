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
                <h1>Users Page</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.users.index') }}">Users</a>
                        </li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
            <div class="col-md-4 d-flex justify-content-end">
                <a class="btn btn-primary text-center" href="{{ route('admin.users.create') }}">Add New
                    user</a>
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
                        <th>email</th>
                        <th>email_verified_at</th>
                        <th>password</th>
                        <th>utype</th>
                        <th>remember_token</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td> <a href="{{route('admin.users.index',$user->id)}}">{{$user->name}}</a> </td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->email_verified_at }}</td>
                            <td>{{ $user->password }}</td>
                            <td>{{ $user->utype }}</td>
                            <td>{{ $user->remember_token }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>{{ $user->updated_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->
@endsection
