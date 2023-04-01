@php
    $category = \App\Models\Category::orderBy('category_title', 'ASC')->get();
    $products = \App\Models\Product::where('status', 1)->orderBy('id', 'DESC')->limit(6)->get();
@endphp

<section class="product__section product__section--style3 section--padding pt-0">
    <div class="container">
        <div class="section__heading text-center mb-25">
            <span class="section__heading--subtitle">Recently added our store</span>
            <h2 class="section__heading--maintitle">Trending Products</h2>
        </div>
        <ul class="product__tab--one product__tab--btn d-flex justify-content-center mb-35">
            <li class="product__tab--btn__list active" data-toggle="tab" data-target="#product_all">All</li>
            @foreach($category as $cat)
                <li class="product__tab--btn__list" data-toggle="tab" data-target="#cat{{$cat->id}}">{{ $cat->category_title }}</li>
            @endforeach
        </ul>
        <div class="tab_content">
            <div id="product_all" class="tab_pane active show">
                <div class="product__section--inner product__section--style3__inner">
                    <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                        @foreach($products as $product)
                            @php
                                $amount = $product->selling_price - $product->discount_price;
                                $discount = ($amount/$product->selling_price) * 100;
                            @endphp
                            <div class="col md-28">
                                <div class="product__items product__items2">
                                    <div class="product__items--thumbnail">
                                        <a class="product__items--link" href="{{ route('product.details', [$product->id, $product->product_slug]) }}">
                                            <img class="product__items--img product__primary--img" src="{{ $product->product_thumbnail }}" alt="product-img">
                                            <img class="product__items--img product__secondary--img" src="{{ $product->product_thumbnail }}" alt="product-img">
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
                                                {{-- <a class="product__items--action__btn" data-open="modal1" href="javascript:void(0)">
                                                    <svg class="product__items--action__btn--svg" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"/></svg>
                                                    <span class="visually-hidden">Quick View</span>
                                                </a> --}}
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

                                        <a class="add__to--cart__btn minicart__open--btn" type="button" data-open="modal1" data-target="#modal1" id="{{ $product->id }}" onclick="productView(this.id)">+ Add to cart</a>
                                        <h3 class="product__items--content__title h4"><a href="{{ route('product.details', [$product->id, $product->product_slug]) }}">{{ $product->product_name }}</a></h3>
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
                        @endforeach

                    </div>
                </div>
            </div>

            @foreach($category as $cat)
                @php
                    $catByProduct = \App\Models\Product::where('category_id',$cat->id)->where('status', 1)->orderBy('id','DESC')->limit(6)->get();
                @endphp
                <div id="cat{{$cat->id}}" class="tab_pane">
                    <div class="product__section--inner product__section--style3__inner">
                        <div class="row row-cols-lg-4 row-cols-md-3 row-cols-2 mb--n28">
                            @forelse($catByProduct as $product)
                                @php
                                    $amount = $product->selling_price - $product->discount_price;
                                    $discount = ($amount/$product->selling_price) * 100;
                                @endphp
                                <div class="col md-28">
                                    <div class="product__items product__items2">
                                        <div class="product__items--thumbnail">
                                            <a class="product__items--link" href="{{ route('product.details', [$product->id, $product->product_slug]) }}">
                                                <img class="product__items--img product__primary--img" src="{{ $product->product_thumbnail }}" alt="product-img">
                                                <img class="product__items--img product__secondary--img" src="{{ $product->product_thumbnail }}" alt="product-img">
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
                                                    <a class="product__items--action__btn" href="javascript:void(0)">
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
                                            <a class="add__to--cart__btn minicart__open--btn" data-open="modal1" data-target="#modal1" id="{{ $product->id }}" onclick="productView(this.id)">+ Add to cart</a>
                                            <h3 class="product__items--content__title h4"><a href="{{ route('product.details', [$product->id, $product->product_slug]) }}">{{ $product->product_name }}</a></h3>
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
                                <h4 style="color: red; margin-left: 600px; margin-top: 20px">No Products Found!</h4>
                            @endforelse
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
