@extends('frontend.main_master')
@section('title')
Product Lists
@endsection

@section('content')


<!-- Page Banner Section Start -->
<div class="section page-banner-section" style="background-image: url(assets/images/page-banner.jpg);">
    <div class="container">

        <!-- Page Banner Content End -->
        <div class="page-banner-content">
            <h2 class="title">Shop Page</h2>

            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Shop Page</li>
            </ul>
        </div>
        <!-- Page Banner Content End -->

    </div>
</div>
<!-- Page Banner Section End -->

<!-- Shop Section Start -->
<div class="section section-padding mt-n10">
    <div class="container">

        <!-- Shop top Bar Start -->
        <div class="shop-top-bar">
            <div class="shop-text">
                <p><span>12</span> Product Found of <span>30</span></p>
            </div>
            <div class="shop-tabs">
                <ul class="nav">
                    <li><button class="active" data-bs-toggle="tab" data-bs-target="#grid"><i class="fa fa-th"></i></button></li>
                    <li><button data-bs-toggle="tab" data-bs-target="#list"><i class="fa fa-list"></i></button></li>
                </ul>
            </div>
            <div class="shop-sort">
                <span class="title">Sort By :</span>
                <select class="nice_select">
                    <option value="1">Default</option>
                    <option value="2">Default</option>
                    <option value="3">Default</option>
                    <option value="4">Default</option>
                </select>
            </div>
        </div>
        <!-- Shop top Bar End -->

        <div class="tab-content">
            <div class="tab-pane fade show active" id="grid">

                <!-- Shop Product Wrapper Start -->
                <div class="shop-product-wrapper">
                    <div class="row">
                        @forelse ($products as $product)

                        @php
                            $amount = $product->selling_price - $product->discount_price;
                            $discount = ($amount/$product->selling_price) * 100;
                        @endphp
                        <div class="col-lg-4 col-sm-6">
                            <!-- Single Product Start -->
                            <div class="single-product">
                                <a href="{{ route('product.details', [$product->id, $product->product_slug]) }}"><img src="{{ url($product->product_thumbnail) }}" alt="product"></a>
                                <div class="product-content">
                                    <h4 class="title"><a href="{{ route('product.details', [$product->id, $product->product_slug]) }}">{{ $product->product_name }}</a></h4>
                                    <div class="price">
                                        @if ($product->discount_price == NULL)
                                            <span class="sale-price">${{ $product->selling_price }}</span>
                                        @else
                                            <span class="sale-price">${{ $product->discount_price }}</span>
                                            <span class="old-price">${{ $product->selling_price }}</span>
                                        @endif
                                    </div>
                                </div>
                                <ul class="product-meta">
                                    <li><a class="action" href="#"><i class="pe-7s-search"></i></a></li>

                                    <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" title="Add To Cart" id="{{ $product->id }}" value="{{ $product->id }}" onclick="productView(this.id)"><i class="pe-7s-shopbag"></i></a></li>

                                    <li><button class="action" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="pe-7s-like"></i></button></li>
                                </ul>
                            </div>
                            <!-- Single Product End -->
                        </div>
                        @empty
                            <span style="color:brown; text-align:right">Product is comming soon... </span>
                        @endforelse
                    </div>
                </div>
                <!-- Shop Product Wrapper End -->

            </div>
            <div class="tab-pane fade" id="list">

                <!-- Shop Product Wrapper Start -->
                <div class="shop-product-wrapper">

                    @forelse ( $products as $product )
                    <!-- Single Product Start -->
                    <div class="single-product-02 product-list">
                        <div class="product-images">
                            <a href="{{ route('product.details', [$product->id, $product->product_slug]) }}"><img src="{{ url($product->product_thumbnail) }}" alt="product"></a>

                            <ul class="product-meta">
                                <li><a class="action" href="#"><i class="pe-7s-search"></i></a></li>

                                <li><a class="action" data-bs-toggle="modal" data-bs-target="#quickView" title="Add To Cart" id="{{ $product->id }}" value="{{ $product->id }}" onclick="productView(this.id)"><i class="pe-7s-shopbag"></i></a></li>

                                <li><button class="action" title="Wishlist" id="{{ $product->id }}" onclick="addToWishList(this.id)"><i class="pe-7s-like"></i></button></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <h4 class="title"><a href="{{ route('product.details', [$product->id, $product->product_slug]) }}">{{ $product->product_name}}</a></h4>
                            <div class="price">
                                @if ($product->discount_price == NULL)
                                        <span class="sale-price">${{ $product->selling_price }}</span>
                                    @else
                                        <span class="sale-price">${{ $product->discount_price }}</span>
                                        <span class="old-price">${{ $product->selling_price }}</span>
                                    @endif
                            </div>
                            <p>{{ $product->short_desc}}</p>
                        </div>
                    </div>
                    <!-- Single Product End -->
                    @empty
                        <span style="color:brown; text-align:center">Product is comming soon... </span>
                    @endforelse





                </div>
                <!-- Shop Product Wrapper End -->

            </div>
        </div>

        <!-- Page pagination Start -->
        <div class="page-pagination">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link active" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
        </div>
        <!-- Page pagination End -->

    </div>
</div>
<!-- Shop Section End -->



<!-- Start shop section -->
<section class="shop__section section--padding">
    <div class="container">
        <div class="shop__header bg__gray--color d-flex align-items-center justify-content-between mb-30">
            <button class="widget__filter--btn d-flex align-items-center" data-offcanvas>
                <svg  class="widget__filter--btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28" d="M368 128h80M64 128h240M368 384h80M64 384h240M208 256h240M64 256h80"/><circle cx="336" cy="128" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="176" cy="256" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/><circle cx="336" cy="384" r="28" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="28"/></svg>
                <span class="widget__filter--btn__text">Filter</span>
            </button>
            <div class="product__view--mode d-flex align-items-center">
                <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                    <label class="product__view--label">Prev Page :</label>
                    <div class="select shop__header--select">
                        <select class="product__view--select">
                            <option selected value="1">65</option>
                            <option value="2">40</option>
                            <option value="3">42</option>
                            <option value="4">57 </option>
                            <option value="5">60 </option>
                        </select>
                    </div>
                </div>
                <div class="product__view--mode__list product__short--by align-items-center d-none d-lg-flex">
                    <label class="product__view--label">Sort By :</label>
                    <div class="select shop__header--select">
                        <select class="product__view--select">
                            <option selected value="1">Sort by latest</option>
                            <option value="2">Sort by popularity</option>
                            <option value="3">Sort by newness</option>
                            <option value="4">Sort by  rating </option>
                        </select>
                    </div>
                </div>
                <div class="product__view--mode__list">
                    <div class="product__tab--one product__grid--column__buttons d-flex justify-content-center">
                        <button class="product__grid--column__buttons--icons active" aria-label="grid btn" data-toggle="tab" data-target="#product_grid">
                            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 9 9">
                                <g  transform="translate(-1360 -479)">
                                  <rect id="Rectangle_5725" data-name="Rectangle 5725" width="4" height="4" transform="translate(1360 479)" fill="currentColor"/>
                                  <rect id="Rectangle_5727" data-name="Rectangle 5727" width="4" height="4" transform="translate(1360 484)" fill="currentColor"/>
                                  <rect id="Rectangle_5726" data-name="Rectangle 5726" width="4" height="4" transform="translate(1365 479)" fill="currentColor"/>
                                  <rect id="Rectangle_5728" data-name="Rectangle 5728" width="4" height="4" transform="translate(1365 484)" fill="currentColor"/>
                                </g>
                            </svg>
                        </button>
                        <button class="product__grid--column__buttons--icons" aria-label="list btn" data-toggle="tab" data-target="#product_list">
                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 13 8">
                                <g id="Group_14700" data-name="Group 14700" transform="translate(-1376 -478)">
                                  <g  transform="translate(12 -2)">
                                    <g id="Group_1326" data-name="Group 1326">
                                      <rect id="Rectangle_5729" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                      <rect id="Rectangle_5730" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                    </g>
                                    <g id="Group_1328" data-name="Group 1328" transform="translate(0 -3)">
                                      <rect id="Rectangle_5729-2" data-name="Rectangle 5729" width="3" height="2" transform="translate(1364 483)" fill="currentColor"/>
                                      <rect id="Rectangle_5730-2" data-name="Rectangle 5730" width="9" height="2" transform="translate(1368 483)" fill="currentColor"/>
                                    </g>
                                    <g id="Group_1327" data-name="Group 1327" transform="translate(0 -1)">
                                      <rect id="Rectangle_5731" data-name="Rectangle 5731" width="3" height="2" transform="translate(1364 487)" fill="currentColor"/>
                                      <rect id="Rectangle_5732" data-name="Rectangle 5732" width="9" height="2" transform="translate(1368 487)" fill="currentColor"/>
                                    </g>
                                  </g>
                                </g>
                              </svg>
                        </button>
                    </div>
                </div>
            </div>
            {{-- <p class="product__showing--count">Showing 1–9 of 21 results</p> --}}
        </div>
        <div class="row">
            <div class="col-12">
                <div class="shop__product--wrapper">
                    <div class="tab_content">
                        <div id="product_grid" class="tab_pane active show">
                            <div class="product__section--inner product__section--style3__inner">
                                <div class="row row-cols-lg-4 row-cols-md-3 row-cols-sm-2 row-cols-2 mb--n30">
                                    @forelse ($products as $product)

                                    @php
                                        $amount = $product->selling_price - $product->discount_price;
                                        $discount = ($amount/$product->selling_price) * 100;
                                    @endphp
                                    <div class="col mb-30">
                                        <div class="product__items product__items2">
                                            <div class="product__items--thumbnail">
                                                <a class="product__items--link" href="{{ route('product.details', [$product->id, $product->product_slug]) }}">
                                                    <img class="product__items--img product__primary--img" src="{{ url($product->product_thumbnail) }}" alt="product-img">
                                                    <img class="product__items--img product__secondary--img" src="{{ url($product->product_thumbnail) }}" alt="product-img">
                                                </a>
                                                <div class="product__badge">
                                                    @if ($product->discount_price == NULL)
                                                        <span class="product__badge--items sale">New</span>
                                                    @else
                                                        <span class="product__badge--items sale">-{{ round($discount) }}%</span>
                                                    @endif
                                                </div>
                                                <ul class="product__items--action">
                                                    <li class="product__items--action__list">
                                                        <a class="product__items--action__btn" href="wishlist.html">
                                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M352.92 80C288 80 256 144 256 144s-32-64-96.92-64c-52.76 0-94.54 44.14-95.08 96.81-1.1 109.33 86.73 187.08 183 252.42a16 16 0 0018 0c96.26-65.34 184.09-143.09 183-252.42-.54-52.67-42.32-96.81-95.08-96.81z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                            <span class="visually-hidden">Wishlist</span>
                                                        </a>
                                                    </li>
                                                    <li class="product__items--action__list">
                                                        <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                            <span class="visually-hidden">Quick View</span>
                                                        </a>
                                                    </li>
                                                    <li class="product__items--action__list">
                                                        <a class="product__items--action__btn" href="compare.html">
                                                            <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M400 304l48 48-48 48M400 112l48 48-48 48M64 352h85.19a80 80 0 0066.56-35.62L256 256"/><path d="M64 160h85.19a80 80 0 0166.56 35.62l80.5 120.76A80 80 0 00362.81 352H416M416 160h-53.19a80 80 0 00-66.56 35.62L288 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"/></svg>
                                                            <span class="visually-hidden">Compare</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product__items--content product__items2--content text-center">
                                                <a class="add__to--cart__btn minicart__open--btn" href="javascript:void(0)" data-offcanvas>+ Add to cart</a>
                                                <h3 class="product__items--content__title h4"><a href="{{ route('product.details', [$product->id, $product->product_slug]) }}">{{ $product->product_name}}</a></h3>
                                                <div class="product__items--price">
                                                    @if ($product->discount_price == NULL)
                                                        <span class="current__price">${{ $product->selling_price }}</span>
                                                    @else
                                                        <span class="current__price">${{ $product->discount_price }}</span>
                                                        <span class="old__price">${{ $product->selling_price }}</span>
                                                    @endif
                                                </div>
                                                <div class="product__items--rating d-flex justify-content-center align-items-center">
                                                    <ul class="d-flex">
                                                        <li class="product__items--rating__list">
                                                            <span class="product__items--rating__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="product__items--rating__list">
                                                            <span class="product__items--rating__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="product__items--rating__list">
                                                            <span class="product__items--rating__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="product__items--rating__list">
                                                            <span class="product__items--rating__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"/>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                        <li class="product__items--rating__list">
                                                            <span class="product__items--rating__icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="10.105" height="9.732" viewBox="0 0 10.105 9.732">
                                                                    <path  data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="#c7c5c2"/>
                                                                </svg>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                    <span class="product__items--rating__count--number">(24)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                     <span style="color:brown; text-align:right">Product is comming soon... </span>
                                    @endforelse

                                </div>
                            </div>
                        </div>
                        <div id="product_list" class="tab_pane">
                            <div class="product__section--inner product__section--style3__inner">
                                <div class="row row-cols-1 mb--n30">


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination__area bg__gray--color">
                        <nav class="pagination justify-content-center">
                            <ul class="pagination__wrapper d-flex align-items-center justify-content-center">
                                <li class="pagination__list">
                                    <a href="shop.html" class="pagination__item--arrow  link ">
                                        <svg xmlns="http://www.w3.org/2000/svg"  width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M244 400L100 256l144-144M120 256h292"/></svg>
                                        <span class="visually-hidden">page left arrow</span>
                                    </a>
                                <li>
                                <li class="pagination__list"><span class="pagination__item pagination__item--current">1</span></li>
                                <li class="pagination__list"><a href="shop.html" class="pagination__item link">2</a></li>
                                <li class="pagination__list"><a href="shop.html" class="pagination__item link">3</a></li>
                                <li class="pagination__list"><a href="shop.html" class="pagination__item link">4</a></li>
                                <li class="pagination__list">
                                    <a href="shop.html" class="pagination__item--arrow  link ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22.51" height="20.443" viewBox="0 0 512 512"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="48" d="M268 112l144 144-144 144M392 256H100"/></svg>
                                        <span class="visually-hidden">page right arrow</span>
                                    </a>
                                <li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End shop section -->
@endsection
