<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> @yield('title') </title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend') }}/assets/images/favicon.png">

    <!-- CSS
	============================================ -->

    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/font-awesome.min.css">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/animate.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/odometer.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/plugins/ion.rangeSlider.min.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">

    {{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> --}}


    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/vendor/plugins.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.min.css">
     -->
</head>

<body>
    @include('frontend.body.header')



    <div class="menu-overlay"></div>

    @yield('content')


    <!-- Footer Section Start -->
    @include('frontend.body.footer')
    <!-- Footer Section End -->

    <!--Back To Start-->
    <a href="#" class="back-to-top">
        <i class="pe-7s-angle-up"></i>
    </a>
    <!--Back To End-->


    <!-- Quick View Start -->
    <div class="modal fade" id="quickView">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">

                            <!-- Quick View Images Start -->
                            <div class="quick-view-images">

                                <!-- Quick Gallery Images Start -->
                                <div class="quick-gallery-images">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src=" " alt="..." id="pthumbnail">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-2.jpg" alt="Product Image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-3.jpg" alt="Product Image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-4.jpg" alt="Product Image">
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-img">
                                                    <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-5.jpg" alt="Product Image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Quick Gallery Images End -->

                                <!-- Quick Gallery Thumbs Start -->
                                <div class="quick-gallery-thumbs">
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-1.jpg" alt="Product Thumbnail">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-2.jpg" alt="Product Thumbnail">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-3.jpg" alt="Product Thumbnail">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-4.jpg" alt="Product Thumbnail">
                                            </div>
                                            <div class="swiper-slide">
                                                <img src="{{ asset('frontend') }}/assets/images/product-details/product-details-5.jpg" alt="Product Thumbnail">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Arrows -->
                                    <div class="swiper-button-prev"><i class="pe-7s-angle-left"></i></div>
                                    <div class="swiper-button-next"><i class="pe-7s-angle-right"></i></div>
                                </div>
                                <!-- Quick Gallery Thumbs End -->

                            </div>
                            <!-- Quick View Images End -->

                        </div>
                        <div class="col-lg-6">

                            <!-- Quick View Description Start -->
                            <div class="quick-view-description">
                                <h4 class="product-name"><span id="pname"></span></h4>
                                <div class="price">
                                    <span class="sale-price">$240.00</span>
                                    <span class="old-price">$290.00</span>
                                </div>
                                <div class="review-wrapper">
                                    <div class="review-star">
                                        <div class="star" style="width: 80%;"></div>
                                    </div>
                                    <p>( 1 Customer Review )</p>
                                </div>
                                <div class="product-color">
                                    <span class="lable">Color:</span>
                                    <ul>
                                        <li>
                                            <input type="radio" name="colors" id="color1">
                                            <label for="color1"><span class="color-blue"></span></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" id="color2">
                                            <label for="color2"><span class="color-gray"></span></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" id="color3">
                                            <label for="color3"><span class="color-dark-blue"></span></label>
                                        </li>
                                        <li>
                                            <input type="radio" name="colors" id="color4">
                                            <label for="color4"><span class="color-gray-dark"></span></label>
                                        </li>
                                    </ul>
                                </div>

                                <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod temporf incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis tyu nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>

                                <div class="product-meta">
                                    <div class="product-quantity d-inline-flex">
                                        <button type="button" class="sub">-</i></button>
                                        <input type="text" value="1" />
                                        <button type="button" class="add">+</button>
                                    </div>
                                    <div class="meta-action">
                                        <button class="btn btn-dark btn-hover-primary">Add To Cart</button>
                                    </div>
                                    <div class="meta-action">
                                        <a class="action" href="#"><i class="pe-7s-like"></i></a>
                                    </div>
                                    <div class="meta-action">
                                        <a class="action" href="#"><i class="pe-7s-shuffle"></i></a>
                                    </div>
                                </div>

                                <div class="product-info">
                                    <div class="single-info">
                                        <span class="lable">Product Code:  <strong id="pcode"></strong></span>
                                    </div>
                                    <div class="single-info">
                                        <span class="lable">Categories: <strong id="pcategory"></strong></span>
                                    </div>
                                    <div class="single-info">
                                        <span class="lable">Brand: <strong id="pbrand"></strong></span>
                                    </div>
                                    <div class="single-info">
                                        <span class="lable">Share:</span>
                                        <ul class="social">
                                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- Quick View Description End -->

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Quick View End -->





    <!-- JS
    ============================================ -->

    <!-- Modernizer & jQuery JS -->
    <script src="{{ asset('frontend') }}/assets/js/vendor/modernizr-3.11.2.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/vendor/jquery-3.5.1.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="{{ asset('frontend') }}/assets/js/plugins/popper.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/bootstrap.min.js"></script>

    <!-- Plugins JS -->
    <script src="{{ asset('frontend') }}/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/ajax-contact.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/appear.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/odometer.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/select2.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/plugins/jquery.zoom.min.js"></script>

    <!--====== Use the minified version files listed below for better performance and remove the files listed above ======-->
    <!-- <script src="{{ asset('frontend') }}/assets/js/plugins.min.js"></script> -->


    <!-- Main JS -->
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js"></script>

    <script>
        @if(Session::has('message')){
            var type = "{{ Session::get('alert-type','info') }}"
            switch(type){
                case 'info':
                    toastr.info(" {{ Session::get('message') }} ");
                    break;

                case 'success':
                    toastr.success(" {{ Session::get('message') }} ");
                    break;

                case 'warning':
                    toastr.warning(" {{ Session::get('message') }} ");
                    break;

                case 'error':
                    toastr.error(" {{ Session::get('message') }} ");
                    break;
            }
        }
        @endif
    </script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })
        // Start Product View with Modal
        function productView(id){
            // alert(id)
            $.ajax({
                type: 'GET',
                url: '/product/view/modal/'+id,
                dataType:'json',
                success:function(data){
                    $('#pname').text(data.product.product_name);
                    $('#pthumbnail').attr('src', '/'+data.product.product_thumbnail);
                    $('#short_desc').text(data.product.short_desc);
                    $('#pcode').text(data.product.product_code);
                    $('#price').text(data.product.selling_price);
                    $('#pcategory').text(data.product.category.category_title);
                    $('#pbrand').text(data.product.brand.brand_name);
                    $('#multi_image').attr('src', '/'+data.product.multiimg.photo_name)
                }
            })

        }
    </script>

</body>

</html>
