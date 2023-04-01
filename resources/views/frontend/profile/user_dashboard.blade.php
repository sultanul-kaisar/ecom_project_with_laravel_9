@extends('frontend.main_master')
@section('title')
    Profile
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Ec breadcrumb start -->
 <!-- Start breadcrumb section -->
 <section class="breadcrumb__section breadcrumb__bg">
    <div class="container">
        <div class="row row-cols-1">
            <div class="col">
                <div class="breadcrumb__content text-center">
                    <h1 class="breadcrumb__content--title text-white mb-25">My Account</h1>
                    <ul class="breadcrumb__content--menu d-flex justify-content-center">
                        <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.html">Home</a></li>
                        <li class="breadcrumb__content--menu__items"><span class="text-white">My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End breadcrumb section -->

<!-- my account section start -->
<section class="my__account--section section--padding">
    <div class="container">
        <p class="account__welcome--text">Hello, {{ $userData->username }} welcome to your dashboard!</p>
        <div class="my__account--section__inner border-radius-10 d-flex">
            <div class="account__left--sidebar">
                <h2 class="account__content--title h3 mb-20">My Dashboard</h2>
                <ul class="account__menu">
                    <li class="account__menu--list active"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                    <li class="account__menu--list active"><a href="{{ route('user.profile') }}">Profile</a></li>
                    <li class="account__menu--list"><a href="my-account-2.html">Addresses</a></li>
                    <li class="account__menu--list"><a href="wishlist.html">Wishlist</a></li>
                    <li class="account__menu--list"><a href="{{ route('user.logout') }}">Log Out</a></li>
                </ul>
            </div>
            <div class="account__wrapper">
                <div class="account__content">
                    <h2 class="account__content--title h3 mb-20">Orders History</h2>
                    <div class="account__table--area">
                        <table class="account__table">
                            <thead class="account__table--header">
                                <tr class="account__table--header__child">
                                    <th class="account__table--header__child--items">Order</th>
                                    <th class="account__table--header__child--items">Date</th>
                                    <th class="account__table--header__child--items">Payment Status</th>
                                    <th class="account__table--header__child--items">Fulfillment Status</th>
                                    <th class="account__table--header__child--items">Total</th>
                                </tr>
                            </thead>
                            <tbody class="account__table--body mobile__none">
                                <tr class="account__table--body__child">
                                    <td class="account__table--body__child--items">#2014</td>
                                    <td class="account__table--body__child--items">November 24, 2022</td>
                                    <td class="account__table--body__child--items">Paid</td>
                                    <td class="account__table--body__child--items">Unfulfilled</td>
                                    <td class="account__table--body__child--items">$40.00 USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- my account section end -->

@endsection
