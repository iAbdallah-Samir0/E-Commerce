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
            <div class="col-md-4 d-flex justify-content-end">
                <a class="btn btn-primary text-center" href="{{ route('admin.products.create') }}">Add New
                    Product</a>
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
                        <th>short_description</th>
                        <th>Description</th>
                        <th>regular_price</th>
                        <th>sale_price</th>
                        <th>SKU</th>
                        <th>stock_status</th>
                        <th>featured</th>
                        <th>quantity</th>
                        <th>image</th>
                        <th>images</th>
                        <th>category_id</th>
                        <th>brand_id</th>
                        <th>created_at</th>
                        <th>updated_at</th>
                    </tr>
                    </thead>
                    <tbody>




                        @foreach($products as $product)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td> <a href="{{route('admin.products.index',$product->id)}}">{{$product->name}}</a> </td>
                                <td>{{ $product->slug }}</td>
                                <td>{{ \Str::limit($product->short_description, 50) }}</td>
                                <td>{{ \Str::limit($product->description, 50) }}</td>
                                <th>{{ $product->regular_price }}</th>
                                <td>{{ $product->sale_price }}</td>
                                <td>{{ $product->SKU }}</td>
                                <td>{{ $product->stock_status }}</td>
                                <td>{{ $product->featured }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->image }}</td>
                                <td>{{ $product->images }}</td>
                                <td>{{ $product->category_id }}</td>
                                <td>{{ $product->brand_id }}</td>
                                <td>{{ $product->created_at->diffForHumans() }}</td>
                                <td>{{ $product->updated_at->diffForHumans() }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>

    </main><!-- End #main -->
@endsection

@push('js')
    <!-- Internal Data tables -->
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/jszip.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
    <!--Internal  Datatable js -->
    <script src="{{URL::asset('Dashboard/js/table-data.js')}}"></script>

    <!--Internal  Notify js -->
    <script src="{{URL::asset('Dashboard/plugins/notify/js/notify.js')}}"></script>
    <script src="{{URL::asset('Dashboard/plugins/notify/js/notify-custom.js')}}"></script>

@endpush
