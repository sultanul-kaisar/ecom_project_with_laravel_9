@extends('frontend.main_master')
@section('title')
    Sign In
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
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="login__section--inner">
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="col" style="margin-left: 350px" >
                            <div class="account__login">
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title h3 mb-10">Login</h2>
                                    <p class="account__login--header__desc">Login if you area a returning customer.</p>
                                </div>
                                <div class="account__login--inner">
                                    <label>
                                        <input class="account__login--input" name="email" placeholder="Email Address" type="email">
                                    </label>
                                    <label>
                                        <input class="account__login--input" name="password" placeholder="Password" type="password">
                                    </label>
                                    <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="check1" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="check1">
                                                Remember me</label>
                                        </div>
                                        <button class="account__login--forgot"  type="submit">Forgot Your Password?</button>
                                    </div>
                                    <button class="account__login--btn btn" type="submit">Login</button>
                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">OR</span>
                                    </div>
                                    <div class="account__social d-flex justify-content-center mb-15">
                                        <a class="account__social--link facebook" target="_blank" href="https://www.facebook.com">Facebook</a>
                                        <a class="account__social--link google" target="_blank" href="https://www.google.com">Google</a>
                                        <a class="account__social--link twitter" target="_blank" href="https://twitter.com">Twitter</a>
                                    </div>
                                    <p class="account__login--signup__text">Don,t Have an Account? <a href="{{ route('register') }}" style="color: orangered">Sign up now</a></p>
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
