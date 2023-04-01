@extends('frontend.main_master')
@section('title')
    Sign Up
@endsection
@section('content')


<!-- Start breadcrumb section -->
<section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">Account Page</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">Account Page</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

    <!-- Start login section  -->
    <div class="login__section section--padding mb-80">
        <div class="container">
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="login__section--inner">
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="col" style="margin-left: 350px" >
                            <div class="account__login register">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Create an Account</h2>
                                    <p class="account__login--header__desc">Register here if you are a new customer</p>
                                </div>
                                <div class="account__login--inner">
                                    <label>
                                        <input class="account__login--input" name="first_name" placeholder="First Name" type="text">
                                    </label>

                                    <label>
                                        <input class="account__login--input" name="last_name" placeholder="Last Name" type="text">
                                    </label>

                                    <label>
                                        <input class="account__login--input" name="username" placeholder="Username" type="text">
                                    </label>

                                    <label>
                                        <input class="account__login--input" name="email" placeholder="Email Address" type="email">
                                    </label>

                                    <label>
                                        <input class="account__login--input" name="password" placeholder="Password" type="password">
                                    </label>

                                    <label>
                                        <input class="account__login--input" name="password_confirmation" placeholder="Confirm Password" type="password">
                                    </label>

                                    <button class="account__login--btn btn mb-10" type="submit">Submit & Register</button>
                                    <div class="account__login--remember position__relative mb-3">
                                        <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label login__remember--label" for="check2">
                                            I have read and agree to the terms & conditions</label>
                                    </div>
                                    <p class="account__login--signup__text">Already Have an Account? <a href="{{ route('login') }}" style="color: orangered">Sign In now</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- End login section  -->



@endsection
