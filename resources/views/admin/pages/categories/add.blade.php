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
        </div>


        <section class="section">

            <div class="container">
                <form action="{{ route('admin.categories.store') }}" method="post">
                    @csrf

                    <div class="px-2 py-1">
                        <label class="form-label" for="name">Name</label>
                        <input id="name" type="text" name="name" class="form-control">
                    </div>


                    <div class="px-2 py-1">
                        <label for="slug" class="form-label">Slug</label>
                        <input id="slug" type="text"
                               class="form-control" name="slug"
                               value="{{ old('slug') }}" required autocomplete="slug">
                    </div>

                    <div class="px-2 py-1">
                        <label for="image" class="form-label">image</label>
                        <input id="image" type="file"
                               class="form-control" name="image"
                               value="{{ old('image') }}" required>
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
        window.location.href = "{{ route('admin.categories.index') }}";
    }
</script>
