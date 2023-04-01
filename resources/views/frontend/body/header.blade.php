    <!-- Header Start  -->
    <div class="header-area header-white header-sticky d-none d-lg-block">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <!-- Header Logo Start -->
                    <div class="header-logo">
                        <a href="{{ route('index') }}"><img src="{{ asset('frontend') }}/assets/images/logo.png" alt="Logo"></a>
                    </div>
                    <!-- Header Logo End -->
                </div>
                <div class="col-lg-6">
                    <div class="header-menu">
                        <ul class="nav-menu">
                            <li>
                                <a href="{{ route('index') }}">Home</a>
                            </li>
                            <li><a href="about.html">About</a></li>
                            @php
                                $categories = \App\Models\Category::orderBy('category_title', 'ASC')->get();
                            @endphp

                            @foreach($categories as $cat)
                                <li>
                                    <a href="#">{{ $cat->category_title }}</a>
                                    <ul class="mega-sub-menu">
                                        @php
                                            $subcategoris = \App\Models\SubCategory::where('category_id', $cat->id)->orderBy('subcategory_title', 'ASC')->get();
                                        @endphp

                                        @foreach($subcategoris as $subcat)
                                            <li>
                                                <a href="#" class="menu-title">{{ $subcat->subcategory_title }}</a>

                                                <ul class="menu-item">
                                                    @php
                                                        $subsubcats = \App\Models\SubSubCategory::where('subcategory_id', $subcat->id)->orderBy('subsub_title', 'ASC')->get();
                                                    @endphp

                                                    @foreach($subsubcats as $subsubcat)
                                                        <li><a href="{{ route('productBySubSubcat', $subsubcat->id)}}">{{ $subsubcat->subsub_title }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @endforeach
                            <li>
                                <a href="{{ route('blogs') }}">Blogs</a>
                            </li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>

                    </div>
                </div>
                <div class="col-lg-3">
                    <!-- Header Meta Start -->
                    <div class="header-meta">

                        <div class="dropdown">
                            <a class="action" href="#" role="button" data-bs-toggle="dropdown"> <i class="pe-7s-search"></i> </a>

                            <div class="dropdown-menu dropdown-search">
                                <!-- Header Search Start -->
                                <div class="header-search">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your search key ... ">
                                        <button><i class="pe-7s-search"></i></button>
                                    </form>
                                </div>
                                <!-- Header Search End -->
                            </div>
                        </div>

                        <div class="dropdown">
                            <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                            @auth
                                <ul class="dropdown-menu dropdown-profile">
                                    <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                    {{-- <li><a href="checkout.html">Checkout</a></li> --}}
                                    <li><a href="{{ route('user.logout') }}">↩ Sign Out</a></li>
                                </ul>
                            @else
                                <ul class="dropdown-menu dropdown-profile">
                                    {{-- <li><a href="checkout.html">Checkout</a></li> --}}
                                    <li><a href="{{ route('login') }}">Sign In</a></li>
                                    <li><a href="{{ route('register') }}">Sign Up</a></li>
                                </ul>
                            @endauth
                        </div>
                        <a class="action" href="wishlist.html"><i class="pe-7s-like"></i></a>

                        <div class="dropdown">
                            <a class="action" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="pe-7s-shopbag"></i>
                                <span class="number">3</span>
                            </a>

                            <div class="dropdown-menu dropdown-cart">
                                <div class="cart-content" id="cart-content">
                                    <ul>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/cart/cart-1.jpg" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name">High quality vase bottle</h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/cart/cart-2.jpg" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name">Living & Bedroom Chair</h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                        <li>
                                            <!-- Single Cart Item Start -->
                                            <div class="single-cart-item">
                                                <div class="cart-thumb">
                                                    <img src="{{ asset('frontend') }}/assets/images/cart/cart-3.jpg" alt="Cart">
                                                    <span class="product-quantity">1x</span>
                                                </div>
                                                <div class="cart-item-content">
                                                    <h6 class="product-name">Herman Arm Grey Chair</h6>
                                                    <span class="product-price">$19.12</span>
                                                    <div class="attributes-content">
                                                        <span><strong>Color:</strong> White </span>
                                                    </div>
                                                    <a class="cart-remove" href="#"><i class="las la-times"></i></a>
                                                </div>
                                            </div>
                                            <!-- Single Cart Item End -->
                                        </li>
                                    </ul>
                                </div>

                                <div class="cart-price">
                                    <div class="cart-subtotals">
                                        <div class="price-inline">
                                            <span class="label">Subtotal</span>
                                            <span class="value">$42.70</span>
                                        </div>
                                        <div class="price-inline">
                                            <span class="label">Shipping</span>
                                            <span class="value">$7.00</span>
                                        </div>
                                        <div class="price-inline">
                                            <span class="label">Taxes</span>
                                            <span class="value">$0.00</span>
                                        </div>
                                    </div>
                                    <div class="cart-total">
                                        <div class="price-inline">
                                            <span class="label">Total</span>
                                            <span class="value">$49.70</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-btn">
                                    <a href="checkout.html" class="btn btn-dark btn-hover-primary d-block">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Header Meta End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Header Mobile Start -->
    <div class="header-mobile section d-lg-none">

        <!-- Header Mobile top Start -->
        <div class="header-mobile-top header-sticky">
            <div class="container">
                <div class="row row-cols-3 gx-2 align-items-center">
                    <div class="col">

                        <!-- Header Toggle Start -->
                        <div class="header-toggle">
                            <button class="mobile-menu-open">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <!-- Header Toggle End -->

                    </div>
                    <div class="col">

                        <!-- Header Logo Start -->
                        <div class="header-logo text-center">
                            <a href="{{ route('index') }}"><img src="{{ asset('frontend') }}/assets/images/logo.png" alt="Logo"></a>
                        </div>
                        <!-- Header Logo End -->

                    </div>
                    <div class="col">

                        <!-- Header Action Start -->
                        <div class="header-meta">
                            <div class="dropdown">
                                <a class="action" href="#" role="button" data-bs-toggle="dropdown"><i class="pe-7s-user"></i></a>

                                @auth
                                    <ul class="dropdown-menu dropdown-profile">
                                        <li><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                                        {{-- <li><a href="checkout.html">Checkout</a></li> --}}
                                        <li><a href="{{ route('user.logout') }}">↩ Sign Out</a></li>
                                    </ul>
                                @else
                                    <ul class="dropdown-menu dropdown-profile">
                                        {{-- <li><a href="checkout.html">Checkout</a></li> --}}
                                        <li><a href="{{ route('login') }}">Sign In</a></li>
                                        <li><a href="{{ route('register') }}">Sign Up</a></li>
                                    </ul>
                                @endauth
                            </div>
                            <a class="action" href="cart.html">
                                <i class="pe-7s-shopbag"></i>
                                <span class="number">3</span>
                            </a>
                        </div>
                        <!-- Header Action End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Mobile top End -->

        <!-- Header Mobile Bottom End -->
        <div class="header-mobile-bottom">
            <div class="container">

                <!-- Header Search Start -->
                <div class="header-search">
                    <form action="#">
                        <input type="text" placeholder="Enter your search key ... ">
                        <button><i class="pe-7s-search"></i></button>
                    </form>
                </div>
                <!-- Header Search End -->

            </div>
        </div>
        <!-- Header Mobile Bottom End -->

    </div>
    <!-- Header Mobile End -->

     <!-- off Canvas Start -->
     <div class="off-canvas-box">

        <!-- Canvas Action Start -->
        <div class="canvas-action">
            <a class="action" href="compare.html"><i class="icon-sliders"></i> Compare <span class="action-num">(3)</span></a>
            <a class="action" href="wishlist.html"><i class="icon-heart"></i> Wishlist <span class="action-num">(3)</span></a>
        </div>
        <!-- Canvas Action end -->

        <!-- Canvas Close bar Start -->
        <div class="canvas-close-bar">
            <span>Menu</span>
            <a class="menu-close" href="javascript:;"><i class="pe-7s-angle-left"></i></a>
        </div>
        <!-- Canvas Close bar End -->

        <!-- Canvas Menu Start -->
        <div class="canvas-menu">
            <nav>
                <ul class="nav-menu">
                    <li>
                        <a href="{{ route('index') }}">Home</a>
                    </li>
                    <li><a href="about.html">About</a></li>

                    @foreach($categories as $cat)
                        <li>
                            <a href="#">{{ $cat->category_title }}</a>
                            <ul class="mega-sub-menu">
                                @php
                                    $subcategoris = \App\Models\SubCategory::where('category_id', $cat->id)->orderBy('subcategory_title', 'ASC')->get();
                                @endphp

                                @foreach($subcategoris as $subcat)
                                    <li>
                                        <a href="#" class="menu-title">{{ $subcat->subcategory_title }}</a>

                                        <ul class="menu-item">
                                            @php
                                                $subsubcats = \App\Models\SubSubCategory::where('subcategory_id', $subcat->id)->orderBy('subsub_title', 'ASC')->get();
                                            @endphp

                                            @foreach($subsubcats as $subsubcat)
                                                <li><a href="{{ route('productBySubSubcat', $subsubcat->id)}}">{{ $subsubcat->subsub_title }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endforeach
                    <li>
                        <a href="{{ route('blogs') }}">Blogs</a>
                    </li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

            </nav>
        </div>
        <!-- Canvas Menu End -->

    </div>
    <!-- off Canvas End -->
