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
                <h1>Products Page</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('admin.products.index') }}">Products</a>
                        </li>
                    </ol>
                </nav>
            </div><!-- End Page Title -->
        </div>


        <section class="section">

            <div class="container">
                <form action="{{ route('admin.products.store') }}" method="post">
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
                        <label for="short_description" class="form-label">Short Description</label>
                        <input id="short_description" type="text"
                               class="form-control" name="short_description"
                               value="{{ old('short_description') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="description" class="form-label">Description</label>
                        <input id="description" type="text"
                               class="form-control" name="description"
                               value="{{ old('description') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="regular_price" class="form-label">Regular Price</label>
                        <input id="regular_price" type="number"
                               class="form-control" name="regular_price"
                               value="{{ old('regular_price') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="sale_price" class="form-label">Sale Price</label>
                        <input id="sale_price" type="number"
                               class="form-control" name="sale_price"
                               value="{{ old('sale_price') }}" required>
                    </div>


                    <div class="px-2 py-1">
                        <label for="sku" class="form-label">SKU</label>
                        <input id="sku" type="text"
                               class="form-control" name="sku"
                               value="{{ old('sku') }}" required>
                    </div>


                    <div class="px-2 py-1">
                        <label for="stock_status" class="form-label">Stock_Status</label>
                        <input id="stock_status" type="number"
                               class="form-control" name="stock_status"
                               value="{{ old('stock_status') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="featured" class="form-label">Featured</label>
                        <input id="featured" type="text"
                               class="form-control" name="featured"
                               value="{{ old('featured') }}" required>
                    </div>

                    <div class="px-2 py-1">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input id="quantity" type="number"
                               class="form-control" name="quantity"
                               required autocomplete="quantity">
                    </div>


                    <div class="px-2 py-1">
                        <label for="image" class="form-label">Image</label>
                        <input id="image" type="file"
                               class="form-control" name="image"
                               required autocomplete="image">
                    </div>


                    <div class="px-2 py-1">
                        <label for="images" class="form-label">Images</label>
                        <input id="images" type="file"
                               class="form-control" name="images"
                               required autocomplete="images">
                    </div>


                    <div class="px-2 py-1">
                        <label for="category_id" class="form-label">Category_id</label>
                        <input id="category_id" type="number"
                               class="form-control" name="category_id"
                               required autocomplete="category_id">
                    </div>


                    <div class="px-2 py-1">
                        <label for="brand_id" class="form-label">Brand_id</label>
                        <input id="brand_id" type="number"
                               class="form-control" name="brand_id"
                               required autocomplete="brand_id">
                    </div>



                    <div class="modal-footer my-4 w-100">
                        <div class="col-md-6 px-3">
                            <button type="button" class="btn btn-secondary w-100" onclick="ClosePage()" data-bs-dismiss="modal">Close
                            </button>
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
        window.location.href = "{{ route('admin.products.index') }}";
    }
</script>

