@extends('layouts.base')
@section('content')
    <section class="breadcrumb-section section-b-space" style="padding-top:20px;padding-bottom:20px;">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>Wishlist</h3>
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{route('app.index')}}">
                                    <i class="fas fa-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Cart Section Start -->
    <section class="cart-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <table class="table cart-table">
                        <thead>
                        <tr class="table-head">
                            <th scope="col">image</th>
                            <th scope="col">product name</th>
                            <th scope="col">price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">total</th>
                            <th scope="col">action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>
                                <a href="../product/details.html">
                                    <img src="../assets/images/fashion/product/front/24.jpg" class="blur-up lazyloaded"
                                         alt="">
                                </a>
                            </td>
                            <td>
                                <a href="../product/details.html">A Porro
                                    Voluptatibus Dolores</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <div class="qty-box">
                                            <div class="input-group">
{{--                                                <input type="number" name="quantity" data-rowId="{{$Item->rowId}}" onchange="UpdateQuantity(this)" class="form-control input-number" value="{{$Item->qty}}">--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h2>$18</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$18</h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control input-number"
                                               value="1">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2 class="td-color">$18.00</h2>
                            </td>
                            <td>
                                <a href="javascript:void(0)">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="../product/details.html">
                                    <img src="../assets/images/fashion/product/front/7.jpg" class="blur-up lazyloaded"
                                         alt="">
                                </a>
                            </td>
                            <td>
                                <a href="../product/details.html">Et
                                    Voluptatem Repellendus Pariatur</a>
                                <div class="mobile-cart-content row">
                                    <div class="col">
                                        <div class="qty-box">
                                            <div class="input-group">
                                                <input type="text" name="quantity" class="form-control input-number"
                                                       value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <h2>$8</h2>
                                    </div>
                                    <div class="col">
                                        <h2 class="td-color">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-times"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>$8</h2>
                            </td>
                            <td>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <input type="number" name="quantity" class="form-control input-number"
                                               value="1">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2 class="td-color">$8.00</h2>
                            </td>
                            <td>
                                <a href="javascript:void(0)">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-12 mt-md-5 mt-4">
                    <div class="row">
                        <div class="col-sm-7 col-5 order-1">
                            <div class="left-side-button text-end d-flex d-block justify-content-end">
                                <a href="javascript:void(0)"
                                   class="text-decoration-underline theme-color d-block text-capitalize">clear
                                    all items</a>
                            </div>
                        </div>
                        <div class="col-sm-5 col-7">
                            <div class="left-side-button float-start">
                                <a href="{{ route('shop.index') }}" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                                    <i class="fas fa-arrow-left"></i> Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-checkout-section">
                    <div class="row g-4">
                        <div class="col-lg-4 col-sm-6">
                            <div class="promo-section">
                                <form class="row g-3">
                                    <div class="col-7">
                                        <input type="text" class="form-control" id="number" placeholder="Coupon Code">
                                    </div>
                                    <div class="col-5">
                                        <button class="btn btn-solid-default rounded btn">Apply Coupon</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6 ">
                            <div class="checkout-button">
                                <a href="checkout" class="btn btn-solid-default btn fw-bold">
                                    Check Out <i class="fas fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="cart-box">
                                <div class="cart-box-details">
                                    <div class="total-details">
                                        <div class="top-details">
                                            <h3>Cart Totals</h3>
                                            <h6>Sub Total <span>$26.00</span></h6>
                                            <h6>Tax <span>$5.46</span></h6>

                                            <h6>Total <span>$31.46</span></h6>
                                        </div>
                                        <div class="bottom-details">
                                            <a href="checkout">Process Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

{{--@push('scripts')--}}
{{--    <script>--}}
{{--        function UpdateQuantity(element)--}}
{{--        {--}}
{{--            var rowId = element.getAttribute('data-rowId');--}}
{{--            var quantity = element.value;--}}
{{--            document.getElementById('rowId').value = rowId;--}}
{{--            document.getElementById('quantity').value = quantity;--}}
{{--            document.getElementById('UpdateCartQty').submit();--}}
{{--        }--}}
{{--    </script>--}}
{{--@endpush--}}
