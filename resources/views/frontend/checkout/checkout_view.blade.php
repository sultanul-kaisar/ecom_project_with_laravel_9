@extends('frontend.main_master')
@section('title')
    Checkout
@endsection
@section('content')
<!-- Page Banner Section Start -->
<div class="section" style="margin-bottom: -70px">
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Checkout</h2>

            <ul class="breadcrumb">
                <li><a href="{{ route('index') }}">Home</a></li>
                <li style="color: black" class="active">Checkout</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Checkout Section Start -->
<div class="section section-padding">
    <div class="container">

        <div class="checkout-info mt-30">
            <p class="info-header error"><i class="fa fa-exclamation-circle"></i> <strong>Error:</strong> Username is required.</p>
        </div>

        <div class="checkout-info mt-30">
            <p class="info-header"> <i class="fa fa-exclamation-circle"></i> Returning customer? <a data-bs-toggle="collapse" href="#login">Click here to login</a></p>

            <div class="collapse" id="login">
                <div class="card-body">
                    <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing & Shipping section.</p>
                    <form action="#">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-form">
                                    <input type="email" placeholder="Username or email *">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-form">
                                    <input type="password" placeholder="Password">
                                </div>
                            </div>
                        </div>

                        <div class="single-form d-flex align-items-center">
                            <button class="btn btn-primary btn-hover-dark">Login</button>
                            <div class="form-checkbox">
                                <input type="checkbox" id="remember">
                                <label for="remember"><span></span> Remember Me</label>
                            </div>
                        </div>
                        <div class="forget">
                            <a href="#">Lost Your Password</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="checkout-info mt-30">
            <p class="info-header"> <i class="fa fa-exclamation-circle"></i> Have a coupon? <a data-bs-toggle="collapse" href="#coupon">Click here to enter your code</a></p>

            <div class="collapse" id="coupon">
                <div class="card-body">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-form">
                                    <input type="email" placeholder="Coupon code">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-form">
                                    <button class="btn btn-primary btn-hover-dark">Coupon</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <form action="#">
            <div class="row">
                <div class="col-lg-7">
                    <!-- Checkout Form Start -->
                    <div class="checkout-form">
                        <div class="checkout-title">
                            <h4 class="title">Billing details</h4>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <input type="text" placeholder="First name *">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <input type="text" placeholder="Last name *">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-form">
                                    <input type="text" placeholder="Company name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-select2">
                                    <div class="form-select2">
                                        <select class="select2">
                                            <option value="0">Select a country *</option>
                                            <option value="1">Bangladesh</option>
                                            <option value="2">Canada</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-form">
                                    <label class="form-label">Street address *</label>
                                    <input type="text" placeholder="House number and street name">
                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-form">
                                    <input type="text" placeholder="Town / City *">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-select2">
                                    <div class="form-select2">
                                        <select class="select2">
                                            <option value="">Select an District *</option>
                                            <option value="BAG">Bagerhat</option>
                                            <option value="BAN">Bandarban</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="single-form">
                                    <input type="text" placeholder="Postcode / ZIP">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <input type="text" placeholder="Phone *">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="single-form">
                                    <input type="text" placeholder="Email address *">
                                </div>
                            </div>
                        </div>

                        <div class="single-form checkbox-checkbox">
                            <input type="checkbox" id="account">
                            <label for="account"> <span></span> Create an account?</label>
                        </div>

                        <div class="checkout-account">
                            <div class="single-form">
                                <input type="password" placeholder="Create account Password *" class="form-control">
                            </div>
                        </div>

                        <div class="single-form checkbox-checkbox">
                            <input type="checkbox" id="shipping">
                            <label for="shipping"> <span></span> Ship to a different address?</label>
                        </div>

                        <div class="checkout-shipping">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" placeholder="First name *">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" placeholder="Last name *">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <input type="text" placeholder="Company name">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-select2">
                                        <div class="form-select2">
                                            <select class="select2">
                                                <option value="0">Select a Country *</option>
                                                <option value="1">Bangladesh</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <label class="form-label">Street address *</label>
                                        <input type="text" placeholder="House number and street name">
                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <input type="text" placeholder="Town / City *">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-select2">
                                        <div class="form-select2">
                                            <select class="select2">
                                                <option value="">Select an District *</option>
                                                <option value="BAG">Bagerhat</option>
                                                <option value="BAN">Bandarban</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="single-form">
                                        <input type="text" placeholder="Postcode / ZIP">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" placeholder="Phone *">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="single-form">
                                        <input type="text" placeholder="Email address *">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-form checkout-note">
                            <label class="form-label">Order notes</label>
                            <textarea placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                        </div>
                    </div>
                    <!-- Checkout Form End -->
                </div>
                <div class="col-lg-5">
                    <div class="checkout-order">
                        <div class="checkout-title">
                            <h4 class="title">Your Order</h4>
                        </div>

                        <div class="checkout-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="Product-name">Product</th>
                                        <th class="Product-price">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $carts as $item)
                                    <tr>
                                        <td class="Product-name">
                                            <p>{{ $item->name }} × {{ $item->qty }}</p>
                                        </td>
                                        <td class="Product-price">
                                            <p>${{ $item->subtotal }}</p>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="Product-name">
                                            <p>Subtotal</p>
                                        </td>
                                        <td class="Product-price">
                                            <p>${{ $cartTotal}}</p>
                                        </td>
                                    </tr>
                                    @if(Session::has('coupon'))
                                        <tr>
                                            <td class="Product-name">
                                                <p>Coupon: {{ session()->get('coupon')['coupon_name'] }} ( {{ session()->get('coupon')['coupon_discount'] }}% )</p>
                                            </td>
                                            <td class="Product-price">
                                                <p>-${{ session()->get('coupon')['discount_amount'] }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Shipping</p>
                                            </td>
                                            <td class="Product-price">
                                                <ul class="shipping-list">
                                                    <li class="radio">
                                                        <input type="radio" name="shipping" id="radio1" checked>
                                                        <label for="radio1"><span></span> Flat Rate</label>
                                                    </li>
                                                    <li class="radio">
                                                        <input type="radio" name="shipping" id="radio2">
                                                        <label for="radio2"><span></span> Free Shipping</label>
                                                    </li>
                                                    <li class="radio">
                                                        <input type="radio" name="shipping" id="radio3">
                                                        <label for="radio3"><span></span> Local Pickup</label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Total</p>
                                            </td>
                                            <td class="total-price">
                                                <p>${{ session()->get('coupon')['total_amount'] }}</p>
                                            </td>
                                        </tr>
                                    @else
                                        <tr>
                                            <td class="Product-name">
                                                <p>Shipping</p>
                                            </td>
                                            <td class="Product-price">
                                                <ul class="shipping-list">
                                                    <li class="radio">
                                                        <input type="radio" name="shipping" id="radio1" checked>
                                                        <label for="radio1"><span></span> Flat Rate</label>
                                                    </li>
                                                    <li class="radio">
                                                        <input type="radio" name="shipping" id="radio2">
                                                        <label for="radio2"><span></span> Free Shipping</label>
                                                    </li>
                                                    <li class="radio">
                                                        <input type="radio" name="shipping" id="radio3">
                                                        <label for="radio3"><span></span> Local Pickup</label>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="Product-name">
                                                <p>Total</p>
                                            </td>
                                            <td class="total-price">
                                                <p>${{ $cartTotal }}</p>
                                            </td>
                                        </tr>
                                    @endif
                                </tfoot>
                            </table>
                        </div>

                        <div class="checkout-payment">
                            <ul>
                                <li>
                                    <div class="single-payment">
                                        <div class="payment-radio radio">
                                            <input type="radio" name="radio" id="bank">
                                            <label for="bank"><span></span> Direct bank transfer </label>

                                            <div class="payment-details">
                                                <p>Please send a Check to Store name with Store Street, Store Town, Store State, Store Postcode, Store Country.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-payment">
                                        <div class="payment-radio radio">
                                            <input type="radio" name="radio" id="check">
                                            <label for="check"><span></span> Check payments </label>

                                            <div class="payment-details">
                                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-payment">
                                        <div class="payment-radio radio">
                                            <input type="radio" name="radio" id="cash" checked="checked">
                                            <label for="cash"><span></span> Cash on Delivery</label>

                                            <div class="payment-details">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-payment">
                                        <div class="payment-radio radio">
                                            <input type="radio" name="radio" id="paypal">
                                            <label for="paypal"><span></span> Paypal <img class="payment" src="assets/images/payment-2.png" alt=""> <a href="#">What is PayPal?</a></label>

                                            <div class="payment-details">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="single-form">
                                <a class="btn btn-primary btn-hover-dark d-block" href="#">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<!-- Checkout Section End -->

@endsection
