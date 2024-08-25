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
        </div>


        <section class="section">

            <div class="container">
                <form action="{{ route('admin.users.store') }}" method="post">
                    @csrf

                    <div class="px-2 py-1">
                        <label class="form-label" for="name">Name</label>
                        <input id="name" type="text" name="name" class="form-control">
                    </div>


                    <div class="px-2 py-1">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email"
                               class="form-control" name="email"
                               value="{{ old('email') }}" required autocomplete="email">
                    </div>

{{--                    <div class="px-2 py-1">--}}
{{--                        <label for="email_Verified_at" class="form-label">Email_Verified_at</label>--}}
{{--                        <input id="email_Verified_at" type="date"--}}
{{--                               class="form-control" name="slug"--}}
{{--                               value="{{ old('email_Verified_at') }}" required autocomplete="email_Verified_at">--}}
{{--                    </div>--}}


                    <div class="px-2 py-1">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password"
                               class="form-control" name="password"
                               value="{{ old('password') }}" required>
                    </div>


                    <div class="px-2 py-1">
                        <label for="utype" class="form-label">Utype</label>
                        <input id="utype" type="text"
                               class="form-control" name="utype"
                               value="{{ old('utype') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="remember_token" class="form-label">Remember_token</label>
                        <input id="remember_token" type="text"
                               class="form-control" name="remember_token"
                               value="{{ old('remember_token') }}" required>
                    </div>

                    <div class="modal-footer my-4 w-100">
                        <div class="col-md-6 px-3">
                            <button type="button" class="btn btn-secondary w-100" onclick="ClosePage()" data-bs-dismiss="modal">Close</button>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success w-100">Add</button>
                        </div>
                    </div>
                </form>
            </div>

        </section>

    </main>
@endsection

<script>
    function ClosePage() {
        window.location.href = "{{ route('admin.users.index') }}";
    }
</script>
