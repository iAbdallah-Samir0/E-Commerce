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
        </div>


        <section class="section">

            <div class="container">
                <form action="{{ route('admin.admins.store') }}" method="post">
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

                    <div class="px-2 py-1">
                        <label for="password" class="form-label">Password</label>
                        <input id="password" type="password"
                               class="form-control" name="password"
                               value="{{ old('password') }}" required>
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
    function ClosePage()
    {
        window.location.href = "{{ route('admin.admins.index') }}";
    }
</script>

