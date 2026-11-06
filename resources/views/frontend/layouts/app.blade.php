<!DOCTYPE html>
@if(\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endif
<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">

    <title>OMEGA CAPITAL ADVISORS || Licensed Real Estate Brokerage
</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description') )" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords') )">
    
   

        <meta itemprop="image" content="{{ static_asset('assets/images/favicon.ico') }}">
                <meta name="twitter:image" content="{{ static_asset('assets/images/favicon.ico') }}">
                  <meta property="og:image" content="{{ static_asset('assets/images/favicon.ico') }}" />
        <meta property="og:image:secure_url" content="{{ static_asset('assets/images/favicon.ico') }}" />


    @yield('meta') 

    @if(!isset($detailedProduct) && !isset($customer_product) && !isset($shop) && !isset($page) && !isset($blog))
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ get_setting('meta_title') }}">
        <meta itemprop="description" content="{{ get_setting('meta_description') }}">
        <meta itemprop="image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ get_setting('meta_title') }}">
        <meta name="twitter:description" content="{{ get_setting('meta_description') }}">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="{{ uploaded_asset(get_setting('meta_image')) }}">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ get_setting('meta_title') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ route('home') }}" />
        <meta property="og:image" content="{{ uploaded_asset(get_setting('meta_image')) }}" />
        <meta property="og:description" content="{{ get_setting('meta_description') }}" />
        <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
        <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
    @endif

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{ static_asset('assets/images/favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ static_asset('assets/images/favicon.ico') }}">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/vendors.css') }}">
    @if(\App\Models\Language::where('code', Session::get('locale', Config::get('app.locale')))->first()->rtl == 1)
    <link rel="stylesheet" href="{{ static_asset('assets/css/bootstrap-rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css') }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/custom-style.css') }}">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">


    <link rel="stylesheet" href="{{ static_asset('assets/css/owl.carousel.min.css') }}"> 
    
    <link rel="stylesheet" href="{{ static_asset('assets/css/slick.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{{ translate('Nothing selected') }}',
            nothing_found: '{{ translate('Nothing found') }}',
            choose_file: '{{ translate('Choose file') }}',
            file_selected: '{{ translate('File selected') }}',
            files_selected: '{{ translate('Files selected') }}',
            add_more_files: '{{ translate('Add more files') }}',
            adding_more_files: '{{ translate('Adding more files') }}',
            drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
            browse: '{{ translate('Browse') }}',
            upload_complete: '{{ translate('Upload complete') }}',
            upload_paused: '{{ translate('Upload paused') }}',
            resume_upload: '{{ translate('Resume upload') }}',
            pause_upload: '{{ translate('Pause upload') }}',
            retry_upload: '{{ translate('Retry upload') }}',
            cancel_upload: '{{ translate('Cancel upload') }}',
            uploading: '{{ translate('Uploading') }}',
            processing: '{{ translate('Processing') }}',
            complete: '{{ translate('Complete') }}',
            file: '{{ translate('File') }}',
            files: '{{ translate('Files') }}',
        }
    </script>

    <style>
        body{
            font-family: 'Open Sans', sans-serif;
            font-weight: 400;
        }
    

        #map{
            width: 100%;
            height: 250px;
        }
        #edit_map{
            width: 100%;
            height: 250px;
        }

        .pac-container { z-index: 100000; }
    </style>

@if (get_setting('google_analytics') == 1)
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id={{ env('TRACKING_ID') }}"></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('TRACKING_ID') }}');
    </script>
@endif


@php
    echo get_setting('header_script');
@endphp

</head>
<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column">

        <!-- Header -->
        @include('frontend.inc.nav')

        @yield('content')

        @include('frontend.inc.footer')

    </div>


    @if (get_setting('show_cookies_agreement') == 'on')
        <div class="aiz-cookie-alert shadow-xl">
            <div class="p-3 bg-dark rounded">
                <div class="text-white mb-3">
                    @php
                        echo get_setting('cookies_agreement_text');
                    @endphp
                </div>
                <button class="btn btn-primary aiz-cookie-accept">
                    {{ translate('Ok. I Understood') }}
                </button>
            </div>
        </div>
    @endif

    @if (get_setting('show_website_popup') == 'on')
        <div class="modal website-popup removable-session d-none" data-key="website-popup" data-value="removed">
            <div class="absolute-full bg-black opacity-60"></div>
            <div class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-md">
                <div class="modal-content position-relative border-0 rounded-0">
                    <div class="aiz-editor-data">
                        {!! get_setting('website_popup_content') !!}
                    </div>
                    @if (get_setting('show_subscribe_form') == 'on')
                        <div class="pb-5 pt-4 px-5">
                            <form class="" method="POST" action="{{ route('subscribers.store') }}">
                                @csrf
                                <div class="form-group mb-0">
                                    <input type="email" class="form-control" placeholder="{{ translate('Your Email Address') }}" name="email" required>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block mt-3">
                                    {{ translate('Subscribe Now') }}
                                </button>
                            </form>
                        </div>
                    @endif
                    <button class="absolute-top-right bg-white shadow-lg btn btn-circle btn-icon mr-n3 mt-n3 set-session" data-key="website-popup" data-value="removed" data-toggle="remove-parent" data-parent=".website-popup">
                        <i class="la la-close fs-20"></i>
                    </button>
                </div>
            </div>
        </div>
    @endif

    @include('frontend.partials.modal')

    <div class="modal fade" id="addToCart">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="c-preloader text-center p-3">
                    <i class="las la-spinner la-spin la-3x"></i>
                </div>
                <button type="button" class="close absolute-top-right btn-icon close z-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la-2x">&times;</span>
                </button>
                <div id="addToCart-modal-body">

                </div>
            </div>
        </div>
    </div>

    @yield('modal')

    <!-- SCRIPTS -->
    <script src="{{ static_asset('assets/js/vendors.js') }}"></script>
    <script src="{{ static_asset('assets/js/slick.js') }}"></script>
    <script src="{{ static_asset('assets/js/main.js') }}"></script>
    <script src="{{ static_asset('assets/js/aiz-core.js') }}"></script>
       <script src="{{ static_asset('assets/js/owl.carousel.min.js') }}"></script>
       <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&currency={{ \App\Models\Currency::findOrFail(get_setting('system_default_currency'))->code }}&intent=capture&components=buttons"></script>



<script>
    const container = document.getElementById('paypal-button-container');
    const amount    = container.dataset.amount;
    const currency  = container.dataset.currency;
    const orderId   = container.dataset.orderId;
    const paymentType = container.dataset.paymentType;

    paypal.Buttons({

        createOrder: function(paypalData, actions) {
            return fetch("{{ route('create.order') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    amount: amount,
                    currency: currency
                })
            })
            .then(function(res) {
                return res.json();
            })
            .then(function(orderData) {  // renamed from 'data' to 'orderData'
                if (orderData.error) {
                    console.error('Create order error:', orderData.error);
                    alert('Error creating order: ' + orderData.error);
                    return; // returning undefined causes the "Expected an order id" error
                }
                console.log('PayPal Order ID:', orderData.id); // debug
                return orderData.id;
            });
        },

        onApprove: function(paypalData, actions) {
            return fetch("{{ route('capture.order') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    orderID: paypalData.orderID,
                    combined_order_id: orderId,
                    payment_type: paymentType
                })
            })
            .then(function(res) {
                return res.json();
            })
            .then(function(details) {
                if (details.status === 'success' && details.redirect_url) {
                    window.location.href = details.redirect_url;
                } else {
                    alert('Payment error: ' + (details.message || 'Unknown error'));
                }
            });
        },

        onError: function(err) {
            console.error('PayPal error:', err);
            alert('A PayPal error occurred. Please try again.');
        },

        onCancel: function() {
            window.location.href = "{{ route('payment.cancel') }}";
        }

    }).render('#paypal-button-container');
</script>
<script type="text/javascript">
        $( document ).ready(function() {
    $('[data-toggle=search-form]').click(function() {
        $('.search-form-wrapper').toggleClass('open');
        $('.search-form-wrapper .search').focus();
        $('html').toggleClass('search-form-open');
      });
      $('[data-toggle=search-form-close]').click(function() {
        $('.search-form-wrapper').removeClass('open');
        $('html').removeClass('search-form-open');
      });
    $('.search-form-wrapper .search').keypress(function( event ) {
      if($(this).val() == "Search") $(this).val("");
    });

    $('.search-close').click(function(event) {
      $('.search-form-wrapper').removeClass('open');
      $('html').removeClass('search-form-open');
    });
  });
    </script>
    
    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '997487922618985');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=997487922618985&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    new Splide('.fresh-products-splide', {
        type   : 'loop',
        perPage: 5,
        gap    : '20px',
        pagination: false,
        arrows: true,
        breakpoints: {
            1200: { perPage: 4 },
            992:  { perPage: 3 },
            768:  { perPage: 2 },
            576:  { perPage: 2 },
        }
    }).mount();
});
</script>

        <!-- Initialize Swiper -->
   <script>
      var swiper = new Swiper(".collabSwiper", {
        slidesPerView: 2,
        spaceBetween: 10,
        loop:true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,

        },
        breakpoints:{
            576:{
                slidesPerView:3,
            },
            768:{
                slidesPerView:4,
            },

            991:{
                slidesPerView:5,
            }
          },
        autoplay:
            {
            delay: 1200,
            },
      });
      $(".collabSwiper").hover(function() {
        (this).swiper.autoplay.stop();
    }, function() {
        (this).swiper.autoplay.start();
    });
    </script>

    <script>
        var swiper = new Swiper(".testSwiper", {
          slidesPerView: 1,
          spaceBetween: 10,
          loop:true,
          autoplay:
            {
            delay: 1800,
            },
            breakpoints:{

              576:{
                  slidesPerView:2,
              },
              991:{
                  slidesPerView:3,
                  spaceBetween:50,
              }
            },
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
        });
      </script>
      <script>
        var swiper = new Swiper(".index-about-Swiper", {
          slidesPerView: 2,
          spaceBetween: 30,
          loop:true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints:{
            768:{
                slidesPerView:3,

            },

            991:{
                slidesPerView:4,
            }
          }
        });
      </script>
      <script>
        var swiper = new Swiper(".index-product-Swiper", {
          slidesPerView: 2,
          spaceBetween: 10,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints:{
            991:{
                slidesPerView:3,
                spaceBetween: 30,
            },

            1200:{
                slidesPerView:4,
                spaceBetween: 30,
            }
          },
          autoplay:
          {
          delay: 1800,
          },
          autoplayDisableOnInteraction:true,
        });

        $(".index-product-Swiper").hover(function() {
            (this).swiper.autoplay.stop();
        }, function() {
            (this).swiper.autoplay.start();
        });
      </script>


    <script>
        var swiper = new Swiper(".index-testimonial-Swiper", {
          slidesPerView: 1,
          spaceBetween: 20,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints:{
            991:{
                slidesPerView:3,
                spaceBetween: 30,
            },
                640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },

          },
          loop: true,
          autoplay:
          {
          delay: 1800,
          },
          autoplayDisableOnInteraction:true,
        });

        $(".index-product-Swiper").hover(function() {
            (this).swiper.autoplay.stop();
        }, function() {
            (this).swiper.autoplay.start();
        });
    </script>





    <script>
        @foreach (session('flash_notification', collect())->toArray() as $message)
            AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
        @endforeach
    </script>

    <script type="text/javascript">
            $(".carousel .owl-carousel").owlCarousel({
        autoplay: true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        smartSpeed: 300,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ]
    });
    </script>

    <script>

        $(document).ready(function() {
            $('.category-nav-element').each(function(i, el) {
                $(el).on('mouseover', function(){
                    if(!$(el).find('.sub-cat-menu').hasClass('loaded')){
                        $.post('{{ route('category.elements') }}', {_token: AIZ.data.csrf, id:$(el).data('id')}, function(data){
                            $(el).find('.sub-cat-menu').addClass('loaded').html(data);
                        });
                    }
                });
            });
            if ($('#lang-change').length > 0) {
                $('#lang-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var locale = $this.data('flag');
                        $.post('{{ route('language.change') }}',{_token: AIZ.data.csrf, locale:locale}, function(data){
                            location.reload();
                        });

                    });
                });
            }

            if ($('#currency-change').length > 0) {
                $('#currency-change .dropdown-menu a').each(function() {
                    $(this).on('click', function(e){
                        e.preventDefault();
                        var $this = $(this);
                        var currency_code = $this.data('currency');
                        $.post('{{ route('currency.change') }}',{_token: AIZ.data.csrf, currency_code:currency_code}, function(data){
                            location.reload();
                        });

                    });
                });
            }
        });

        $('#search').on('keyup', function(){
            search();
        });

        $('#search').on('focus', function(){
            search();
        });

        function search(){
            var searchKey = $('#search').val();
            if(searchKey.length > 0){
                $('body').addClass("typed-search-box-shown");

                $('.typed-search-box').removeClass('d-none');
                $('.search-preloader').removeClass('d-none');
                $.post('{{ route('search.ajax') }}', { _token: AIZ.data.csrf, search:searchKey}, function(data){
                    if(data == '0'){
                        // $('.typed-search-box').addClass('d-none');
                        $('#search-content').html(null);
                        $('.typed-search-box .search-nothing').removeClass('d-none').html('Sorry, nothing found for <strong>"'+searchKey+'"</strong>');
                        $('.search-preloader').addClass('d-none');

                    }
                    else{
                        $('.typed-search-box .search-nothing').addClass('d-none').html(null);
                        $('#search-content').html(data);
                        $('.search-preloader').addClass('d-none');
                    }
                });
            }
            else {
                $('.typed-search-box').addClass('d-none');
                $('body').removeClass("typed-search-box-shown");
            }
        }

        function updateNavCart(view,count){
            $('.cart-count').html(count);
            $('#cart_items').html(view);
        }

        function removeFromCart(key){
            $.post('{{ route('cart.removeFromCart') }}', {
                _token  : AIZ.data.csrf,
                id      :  key
            }, function(data){
                updateNavCart(data.nav_cart_view,data.cart_count);
                $('#cart-summary').html(data.cart_view);
                AIZ.plugins.notify('success', "{{ translate('Item has been removed from cart') }}");
                $('#cart_items_sidenav').html(parseInt($('#cart_items_sidenav').html())-1);
            });
        }

        function addToCompare(id){
            $.post('{{ route('compare.addToCompare') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                $('#compare').html(data);
                AIZ.plugins.notify('success', "{{ translate('Item has been added to compare list') }}");
                $('#compare_items_sidenav').html(parseInt($('#compare_items_sidenav').html())+1);
            });
        }

        function addToWishList(id){
            @if (Auth::check() && (Auth::user()->user_type == 'customer' || Auth::user()->user_type == 'seller'))
                $.post('{{ route('wishlists.store') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                    if(data != 0){
                        $('#wishlist').html(data);
                        AIZ.plugins.notify('success', "{{ translate('Item has been added to wishlist') }}");
                    }
                    else{
                        AIZ.plugins.notify('warning', "{{ translate('Please login first') }}");
                    }
                });
            @else
                AIZ.plugins.notify('warning', "{{ translate('Please login first') }}");
            @endif
        }

        function showAddToCartModal(id){
            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }
            $('#addToCart-modal-body').html(null);
            $('#addToCart').modal();
            $('.c-preloader').show();
            $.post('{{ route('cart.showCartModal') }}', {_token: AIZ.data.csrf, id:id}, function(data){
                $('.c-preloader').hide();
                $('#addToCart-modal-body').html(data);
                AIZ.plugins.slickCarousel();
                AIZ.plugins.zoom();
                AIZ.extra.plusMinus();
                getVariantPrice();
            });
        }

        $('#option-choice-form input').on('change', function(){
            getVariantPrice();
        });

        function getVariantPrice(){
            if($('#option-choice-form input[name=quantity]').val() > 0 && checkAddToCartValidity()){
                $.ajax({
                   type:"POST",
                   url: '{{ route('products.variant_price') }}',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){

                        $('.product-gallery-thumb .carousel-box').each(function (i) {
                            if($(this).data('variation') && data.variation == $(this).data('variation')){
                                $('.product-gallery-thumb').slick('slickGoTo', i);
                            }
                        })

                       $('#option-choice-form #chosen_price_div').removeClass('d-none');
$('#option-choice-form #chosen_price_div #chosen_price')
    .html(data.price + ' <small class="text-muted fs-12">(with tax)</small>');
    $('#available-quantity').html(data.quantity);
                       $('.input-number').prop('max', data.max_limit);
                       if(parseInt(data.in_stock) == 0 && data.digital  == 0){
                           $('.buy-now').addClass('d-none');
                           $('.add-to-cart').addClass('d-none');
                           $('.out-of-stock').removeClass('d-none');
                       }
                       else{
                           $('.buy-now').removeClass('d-none');
                           $('.add-to-cart').removeClass('d-none');
                           $('.out-of-stock').addClass('d-none');
                       }
                   }
               });
            }
        }

        function checkAddToCartValidity(){
            var names = {};
            $('#option-choice-form input:radio').each(function() { // find unique names
                  names[$(this).attr('name')] = true;
            });
            var count = 0;
            $.each(names, function() { // then count them
                  count++;
            });

            if($('#option-choice-form input:radio:checked').length == count){
                return true;
            }

            return false;
        }

        function addToCart(){
            if(checkAddToCartValidity()) {
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                    type:"POST",
                    url: '{{ route('cart.addToCart') }}',
                    data: $('#option-choice-form').serializeArray(),
                    success: function(data){

                       $('#addToCart-modal-body').html(null);
                       $('.c-preloader').hide();
                       $('#modal-size').removeClass('modal-lg');
                       $('#addToCart-modal-body').html(data.modal_view);
                       AIZ.extra.plusMinus();
                       updateNavCart(data.nav_cart_view,data.cart_count);
                    }
                });
            }
            else{
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }
        
        function quickAddToCart(productId) {
    if (!productId) return;

    // Show loader if you have
    $('.c-preloader').show();

    $.ajax({
        type: "POST",
        url: '{{ route('cart.addToCart') }}',
        data: {
            id: productId,               // matches your controller: $request->id
            quantity: 1,                 // default 1
            caketext: null,              // optional, send if needed
            _token: '{{ csrf_token() }}' // CSRF token
        },
        success: function(data) {
            $('.c-preloader').hide();

            // Show success modal
            $('#addToCart-modal-body').html(data.modal_view);
            $('#addToCart').modal();

            // Update navbar cart
            updateNavCart(data.nav_cart_view, data.cart_count);

            // Optional toast
            AIZ.plugins.notify('success', "Product added to cart!");
        },
        error: function(xhr) {
            $('.c-preloader').hide();
            console.log(xhr.responseJSON);
            AIZ.plugins.notify('danger', "Something went wrong!");
        }
    });
}


        function buyNow(){
            if(checkAddToCartValidity()) {
                $('#addToCart-modal-body').html(null);
                $('#addToCart').modal();
                $('.c-preloader').show();
                $.ajax({
                   type:"POST",
                   url: '{{ route('cart.addToCart') }}',
                   data: $('#option-choice-form').serializeArray(),
                   success: function(data){
                       if(data.status == 1){

                            $('#addToCart-modal-body').html(data.modal_view);
                            updateNavCart(data.nav_cart_view,data.cart_count);

                            window.location.replace("{{ route('cart') }}");
                       }
                       else{
                            $('#addToCart-modal-body').html(null);
                            $('.c-preloader').hide();
                            $('#modal-size').removeClass('modal-lg');
                            $('#addToCart-modal-body').html(data.modal_view);
                       }
                   }
               });
            }
            else{
                AIZ.plugins.notify('warning', "{{ translate('Please choose all the options') }}");
            }
        }

        function show_purchase_history_details(order_id)
        {
            $('#order-details-modal-body').html(null);

            if(!$('#modal-size').hasClass('modal-lg')){
                $('#modal-size').addClass('modal-lg');
            }

            $.post('{{ route('purchase_history.details') }}', { _token : AIZ.data.csrf, order_id : order_id}, function(data){
                $('#order-details-modal-body').html(data);
                $('#order_details').modal();
                $('.c-preloader').hide();
            });
        }

    // Sticky header js
    // $(function() {
    //     var mainNav = $("nav");
    //     sticky = "sticky";
    //     headerHeight = $("header").height();

    //     $(window).scroll(function(){
    //         if($(this).scrollTop() > headerHeight){
    //             mainNav.addClass(sticky)
    //         }
    //         else{
    //             mainNav.removeClass(sticky);
    //         }
    //         if($(this).scrollTop() > ( headerHeight * 8)){
    //             mainNav.addClass("inView")
    //         }
    //         else{
    //             mainNav.removeClass("inView");
    //         }
    //     })

    // })

    </script>
    <script>
      var swiper = new Swiper(".navHotelSwiper", {
        slidesPerView: 3,
        spaceBetween: 10,
        breakpoints:{
            500:{
                slidesPerView:3,
                spaceBetween: 20,
            },
            768:{
                slidesPerView:4,
                spaceBetween: 20,
            },
            991:{
                slidesPerView:5,
                spaceBetween: 30,
            },

            1500:{
                slidesPerView:6,
                spaceBetween: 30,
            }
          },
          autoplay:
          {
          delay: 1800,
          },
          autoplayDisableOnInteraction:true,
          navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <script>
        $(function(){

            var mainNav = $(".header__top");
            sticky = "sticky";
            headerHeight = $(".top_header").height();

            $(window).scroll(function(){
                if($(this).scrollTop() > headerHeight){
                    mainNav.addClass(sticky);
                }
                else{
                    mainNav.removeClass(sticky);
                }
                if($(this).scrollTop() > ( headerHeight * 8)){
                    mainNav.addClass("inView");
                }
                else{
                    mainNav.removeClass("inview");
                }
            })
        });
    </script>

    <script>
        $(document).scroll(function() {
          var y = $(this).scrollTop();
          if (y > 500) {
            $('.mobile-search-button').fadeIn();
          } else {
            $('.mobile-search-button').fadeOut();
          }
        })
    </script>

    <script>
        function mobileBtn(){
            document.body.style.backgroundColor = "black";
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera

            //  var element = document.getElementById("mobile-nav-search");
            // element.classList.toggle("mobile-nav-search-styled");
        }
    </script>

<script>
    // var acc = document.getElementsByClassName("accordion");
    // var i;

    // for (i = 0; i < acc.length; i++) {
    //   acc[i].addEventListener("click", function() {
    //     this.classList.toggle("active");
    //     var panel = this.nextElementSibling;
    //     if (panel.style.maxHeight) {
    //       panel.style.maxHeight = null;
    //     } else {
    //       panel.style.maxHeight = panel.scrollHeight + "px";
    //     }
    //   });
    // }
    var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    var elems = document.getElementsByClassName("accordion");
    for(var it of elems) {
      it.classList.remove("active");
      it.nextElementSibling.style.maxHeight = null;
    }

    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });

}


</script>

   <script>
          $('.open-minimal-menu.resopen').on('click', function(){
        $('.menusec nav').toggleClass('slidein');
        $('.open-minimal-menu.resopen #hamburger-two').toggleClass('active');
        $(this).toggleClass('active');
              $(".mobile-nav__wrapper").toggleClass("expanded");

    });
    </script>
    
  
    
      <script>
          $('.mobile-nav__overlay').on('click', function(){
      
              $(".mobile-nav__wrapper").removeClass("expanded");
        $('.open-minimal-menu.resopen #hamburger-two').removeClass('active');
              $(".mobile-nav__wrapper").removeClass("show-user-menu");

    });
    </script>
          <script>
          $('.hidemenu').on('click', function(){
      
              $(".mobile-nav__wrapper").removeClass("expanded");
        $('.open-minimal-menu.resopen #hamburger-two').removeClass('active');
              $(".mobile-nav__wrapper").removeClass("show-user-menu");

    });
    </script>

<!-- Elfsight WhatsApp Chat | Untitled WhatsApp Chat -->
<!--<script src="https://elfsightcdn.com/platform.js" async></script>-->
<!--<div class="elfsight-app-d3874225-72b5-4d4b-a049-d9ff95bfe7ab" data-elfsight-app-lazy></div>-->
    
    <script>
$(window).on('scroll', function () {
    var scrollTop = $(this).scrollTop();
    var windowWidth = $(this).innerWidth();

    if (windowWidth < 600) {

        // Sticky header logic for mobile
        if (scrollTop > 200) {
            $('header').addClass('sticky');
        } else {
            $('header').removeClass('sticky');
        }

    

    } else {
        // 👉 For screens above 600px, remove sticky & hide button
        $('header').removeClass('sticky');
    }
});
</script>



    @yield('script')

    @php
        echo get_setting('footer_script');
    @endphp

</body>
</html>
