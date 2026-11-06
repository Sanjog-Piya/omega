@extends('frontend.layouts.app')

<style>
    .dropdown-toggle {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    /* color: white !important; */
    background: white;
    padding: 10px 20px;
    border-radius: 999px;
}

/* ---------- LISTING NOTICE ---------- */

.listing-notice{
    padding:70px 0;
    background:var(--paper-2);
}


.notice-box{

    border: 1px solid #000;
    background: var(--paper);
    padding: 38px 45px;
    display: flex;
    align-items: center;
    gap: 35px;
    background: #182140;
    color: white;
}


.notice-icon svg{

    width:75px;
    height:75px;

    fill:none;
    stroke:var(--brass);

    stroke-width:2;

}


.notice-content h3{

    font-family:'Fraunces', serif;

    font-size:28px;

    margin:12px 0;

    color:var(--ink);

}


.notice-content p:not(.eyebrow){

    color:var(--slate);

    max-width:75ch;

    font-size:15.5px;

    margin:0;

}



@media(max-width:700px){

    .notice-box{

        flex-direction:column;

        align-items:flex-start;

        padding:30px;

    }


}

.badge {
    width: fit-content !important;
    padding: 5px 10px;
    font-size: 13px;
    color: #fff;
    border-radius: 5px;
    font-weight: 600;
}

.badge.residential { background: #1e88e5; }   /* blue */
.badge.commercial { background: #f9a825; }    /* amber */
.badge.land { background: #43a047; }          /* green */

.verified {
    position: absolute;
    top: 10px;
    right: 10px;
    background: gold;
    color: #000;
    padding: 4px 8px;
    font-size: 12px;
    border-radius: 20px;
    display: flex;
    gap: 5px;
    align-items: center;
}

.bootstrap-select .dropdown-toggle {
    color: #000 !important;
    background-color: transparent !important;
    border-color: #e2e5ec;
    font-weight: 500 !important;
    font-size: 15px !important;
}

div.bootstrap-select {
    height: 47px !important;
    border-radius: 999px!important;
    display: flex!important;
    /* align-items: center; */
    /* justify-content: center; */
    padding-top: 5px!important;
    padding: 6px 20px!important;
    color: #000!important;
}
.property-card{
    background:#fff;
    border:1px solid #7fd6f5;
    border-radius:12px;
    display:flex;
    overflow:hidden;
    box-shadow:0 2px 6px rgba(0,0,0,.08);
}

/* Left */

.left-section{
    width:320px;
    padding:20px;
}

.image-box{
    position:relative;
}

.image-box img{
    width:100%;
    height:190px;
    object-fit:cover;
    border-radius:12px;
}

.updated{
    position:absolute;
    left:0;
    right:0;
    bottom:0;
    background:rgba(0,0,0,.55);
    color:#fff;
    padding:8px 12px;
    font-size:14px;
    border-radius:0 0 12px 12px;
}

.owner{
    margin-top:15px;
}

.owner p{
    font-size:16px;
    margin-bottom:12px;
}

.premium{
    display:flex;
    align-items:center;
    gap:10px;
    font-size:17px;
}

.premium i{
    color:#666;
}

/* Middle */

.middle-section{
    flex:1;
    padding:20px;
}

.title-row{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
}

.title-row h2{
    margin-bottom:10px;
    font-weight:500;
        font-size: 20px;
}

.title-row a{
    color:#555;
    font-size:14px;
}

.bootstrap-select{
        height: 44px;
    border-radius: 999px;
    display: flex;
    /* align-items: center; */
    /* justify-content: center; */
    padding-top: 5px;
    padding: 6px 20px;
    color: #000;
}

.share{
    font-size:20px;
    color:#666;
    cursor:pointer;
}

.details{
    display:flex;
    align-items:center;
    background:#f5f5f5;
    border-radius:12px;
    margin:20px 0;
}

.detail-box{
    flex:1;
    display:flex;
    align-items:center;
    gap:15px;
    padding:18px 25px;
    border-right:1px solid #ddd;
}

.detail-box:last-child{
    border:none;
}

.detail-box i{
    font-size:20px;
    color:#444;
}

.detail-box span{
    font-size:14px;
    color:#777;
}

.detail-box h4{
    margin-top:5px;
    font-size:15px;
    font-weight:500;
}

.arrow{
    width:70px;
    text-align:center;
    font-size:20px;
    color:#666;
}

.description{
    font-size:20px;
    color:#555;
}

/* Right */

.right-section{
    width:290px;
    background:#dff6ff;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.right-section h1{
    font-size:42px;
    color:#222;
}

.right-section p{
    margin:10px 0 30px;
    color:#444;
    font-size:22px;
}

.btn-red{
    width:220px;
    padding:16px;
    border:none;
    background:#182140;
    color:#fff;
    border-radius:30px;
    font-size:17px;
    cursor:pointer;
    margin-bottom:20px;
}

.btn-white{
    width:220px;
    padding:16px;
    border:2px solid #ef3d3d;
    background:#fff;
    color:#ef3d3d;
    border-radius:30px;
    font-size:24px;
    cursor:pointer;
    margin-bottom:25px;
}

.right-section a{
     color: #fff;
    font-size: 14px;
    text-align: center;
}

/* Responsive */

@media(max-width:1100px){

.property-card{
    flex-direction:column;
}

.left-section,
.middle-section,
.right-section{
    width:100%;
}

.details{
    flex-wrap:wrap;
}

.detail-box{
    width:50%;
    border-bottom:1px solid #ddd;
}

.arrow{
    width:100%;
    padding:15px;
}
}
</style>

@if (isset($category_id))
    @php
        $meta_title = \App\Models\Category::find($category_id)->meta_title;
        $meta_description = \App\Models\Category::find($category_id)->meta_description;
    @endphp
@elseif (isset($brand_id))
    @php
        $meta_title = \App\Models\Brand::find($brand_id)->meta_title;
        $meta_description = \App\Models\Brand::find($brand_id)->meta_description;
    @endphp
@else
    @php
        $meta_title         = get_setting('meta_title');
        $meta_description   = get_setting('meta_description');
    @endphp
@endif

@section('meta_title'){{ $meta_title }}@stop
@section('meta_description'){{ $meta_description }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $meta_title }}">
    <meta itemprop="description" content="{{ $meta_description }}">

    <!-- Twitter Card data -->
    <meta name="twitter:title" content="{{ $meta_title }}">
    <meta name="twitter:description" content="{{ $meta_description }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $meta_title }}" />
    <meta property="og:description" content="{{ $meta_description }}" />
@endsection

@section('content')

    <section class="mb-0 pt-2 breadcrumb-option">
        <div class="sm-px-0">
            <form class="" id="search-form" action="" method="GET">
                <div class="row">
                    <div class="col-xl-12" style="        background: #182140;
    color: white;
    padding: 20px;">
                        <div class="container aiz-filter-sidebar collapse-sidebar-wrap sidebar-xl sidebar-right z-1035">
                            <div class="overlay overlay-fixed dark c-pointer" data-toggle="class-toggle" data-target=".aiz-filter-sidebar" data-same=".filter-sidebar-thumb"></div>
                            <div style="    display: flex;
    align-items: center;" class="collapse-sidebar c-scrollbar-light text-left">
                                <h3 style="
    color: white;
    font-size: 18px;
    margin-bottom: 0;
    padding-right: 20px;
">Filter By:</h3>
                                                                 <div class="aiz-topbar-item ml-2">
                <div class="align-items-stretch d-flex dropdown">
                    <a class="dropdown-toggle no-arrow text-dark" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="d-flex align-items-center">
                           
                            <span class="d-none d-md-block">
                                Location
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">
                                                          <div class="p-3">
asd                                    </div>

                    </div>
                </div>
            </div>
            
                   <div class="aiz-topbar-item ml-2">
                <div class="align-items-stretch d-flex dropdown">
                    <a class="dropdown-toggle no-arrow text-dark" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="d-flex align-items-center">
                           
                            <span class="d-none d-md-block">
                                Property Type
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">
                                                          <div class="p-3">
asd                                    </div>

                    </div>
                </div>
            </div>

                                
                                 <div class="aiz-topbar-item ml-2">
                <div class="align-items-stretch d-flex dropdown">
                    <a class="dropdown-toggle no-arrow text-dark" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="d-flex align-items-center">
                           
                            <span class="d-none d-md-block">
                                Price Range
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">
                                                          <div class="p-3">
                                        <div class="aiz-range-slider">
                                            <div
                                                id="input-slider-range"
                                                data-range-value-min="@if(\App\Models\Product::count() < 1) 0 @else {{ \App\Models\Product::min('unit_price') }} @endif"
                                                data-range-value-max="@if(\App\Models\Product::count() < 1) 0 @else {{ \App\Models\Product::max('unit_price') }} @endif"
                                            ></div>

                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                        @if (isset($min_price))
                                                            data-range-value-low="{{ $min_price }}"
                                                        @elseif($products->min('unit_price') > 0)
                                                            data-range-value-low="{{ $products->min('unit_price') }}"
                                                        @else
                                                            data-range-value-low="0"
                                                        @endif
                                                        id="input-slider-range-value-low"
                                                    ></span>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <span class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                                        @if (isset($max_price))
                                                            data-range-value-high="{{ $max_price }}"
                                                        @elseif($products->max('unit_price') > 0)
                                                            data-range-value-high="{{ $products->max('unit_price') }}"
                                                        @else
                                                            data-range-value-high="0"
                                                        @endif
                                                        id="input-slider-range-value-high"
                                                    ></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                    </div>
                </div>
            </div>
                              
                                                             <div class="aiz-topbar-item ml-2">
                <div class="align-items-stretch d-flex dropdown">
                    <a class="dropdown-toggle no-arrow text-dark" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
                        <span class="d-flex align-items-center">
                           
                            <span class="d-none d-md-block">
                                Land Area
                            </span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-menu-md">
                                                          <div class="p-3">
                                        <div class="aiz-range-slider">
                                            <div
                                                id="input-slider-range"
                                                data-range-value-min="@if(\App\Models\Product::count() < 1) 0 @else {{ \App\Models\Product::min('unit_price') }} @endif"
                                                data-range-value-max="@if(\App\Models\Product::count() < 1) 0 @else {{ \App\Models\Product::max('unit_price') }} @endif"
                                            ></div>

                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    <span class="range-slider-value value-low fs-14 fw-600 opacity-70"
                                                        @if (isset($min_price))
                                                            data-range-value-low="{{ $min_price }}"
                                                        @elseif($products->min('unit_price') > 0)
                                                            data-range-value-low="{{ $products->min('unit_price') }}"
                                                        @else
                                                            data-range-value-low="0"
                                                        @endif
                                                        id="input-slider-range-value-low"
                                                    ></span>
                                                </div>
                                                <div class="col-6 text-right">
                                                    <span class="range-slider-value value-high fs-14 fw-600 opacity-70"
                                                        @if (isset($max_price))
                                                            data-range-value-high="{{ $max_price }}"
                                                        @elseif($products->max('unit_price') > 0)
                                                            data-range-value-high="{{ $products->max('unit_price') }}"
                                                        @else
                                                            data-range-value-high="0"
                                                        @endif
                                                        id="input-slider-range-value-high"
                                                    ></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                    </div>
                </div>
            </div>


                   <div class="aiz-topbar-item ml-2">
                <div class="align-items-stretch d-flex dropdown">
                   
                   <select class="form-control form-control-sm aiz-selectpicker" name="sort_by" onchange="filter()">
                                        <option value="newest" @isset($sort_by) @if ($sort_by == 'newest') selected @endif @endisset>{{ translate('Newest')}}</option>
                                        <option value="oldest" @isset($sort_by) @if ($sort_by == 'oldest') selected @endif @endisset>{{ translate('Oldest')}}</option>
                                        <option value="price-asc" @isset($sort_by) @if ($sort_by == 'price-asc') selected @endif @endisset>{{ translate('Price low to high')}}</option>
                                        <option value="price-desc" @isset($sort_by) @if ($sort_by == 'price-desc') selected @endif @endisset>{{ translate('Price high to low')}}</option>
                                    </select>
                </div>
            </div>


            
<div class="form-group row mb-0" style="
        margin-left: auto;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;

">
                        <label class="col-from-label mb-0" style="
    padding-right: 20px;
    margin-left: auto;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    text-align: right;
">Show Verified Property Only</label>
                        <div class="c-6">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="radio" name="shipping_type" value="free" checked="">
                                <span></span>
                            </label>
                        </div>
                    </div>
                          

                                {{-- <button type="submit" class="btn btn-styled btn-block btn-base-4">Apply filter</button> --}}
                            </div>
                        </div>
                    </div>  
                    <div style="    width: 100%;
    background-image: url(https://templates.g5plus.net/homeid/images/BG7.png), url(https://templates.g5plus.net/homeid/images/BG7.png);
    background-position: left, right bottom;
    background-repeat: no-repeat, no-repeat;
    background-size: auto, auto;">
                                         <div class="container searchpadding" style="    padding: 30px 0;
    "> 
    <h4>Search Verified Properties Across Nepal.
</h4>
<p>Every listing on the Omega Capital Advisors platform is verified by a licensed advisor. Accurate pricing, confirmed land area, and clear ownership documentation — before you ever visit.</p>
</div>
                    </div>
   

                    <div class="container">

                   

                        <input type="hidden" name="min_price" value="">
                        <input type="hidden" name="max_price" value="">
                        <div class="row gutters-5 row-cols-xxl-4 row-cols-xl-3 row-cols-lg-4 row-cols-md-3 row-cols-2 mt-0 listingproducts" style="    display: flex;
    flex-direction: column;">
                            @foreach ($products as $key => $product)
                                <div class="" style="    width: 100%;
    max-width: 100%;">
                                    <!--@include('frontend.partials.product_box_1',['product' => $product])-->
<div class="property-card mb-4">

    <!-- Left Image -->
    <div class="left-section">

        <div class="image-box">
            
            <!-- Primary Photo (Verified) -->
            <a href="https://omegaadvisors.com.np/product/zeera-cookies-10-12-pcs">
            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?w=800" alt="Property Photo">
            </a>

            <!-- Property Type Badge -->

            <span class="verified">
                <i class="fa-solid fa-circle-check"></i>
                Verified
            </span>

            <span class="updated">Updated today</span>
        </div>

        <div class="owner">
            <p>Advisor: Rajan</p>
            <div class="premium">
                  <img src="https://cdn-icons-png.flaticon.com/128/12484/12484055.png" width="20" height="20"/>
                <strong>Advisor Verified</strong>
            </div>
        </div>

    </div>

    <!-- Middle -->
    <div class="middle-section">

        <div class="title-row">
            <div>
                <div>
                <h2>6 Aana Residential Land — Budhanilkantha, Kathmandu</h2>            <span class="badge residential">Residential</span>
</div>
                <a href="#">Near Ring Road</a>
                
            </div>

            <i class="fa-solid fa-share-nodes share"></i>
        </div>

        <div class="details">

            <!-- Land Area -->
            <div class="detail-box">
                <i class="fa fa-square"></i>
                <div>
                    <span>LAND AREA</span>
                    <h4>6 Aana</h4>
                </div>
            </div>

            <!-- Road Access -->
            <div class="detail-box">
                <i class="fa fa-road"></i>
                <div>
                    <span>ROAD ACCESS</span>
                    <h4>13 ft</h4>
                </div>
            </div>

            <!-- Distance -->
            <div class="detail-box">
                <i class="fa fa-map-marker-alt"></i>
                <div>
                    <span>DISTANCE</span>
                    <h4>500m from Ring Road</h4>
                </div>
            </div>

         

      
        </div>

    </div>

    <!-- Right -->
    <div class="right-section">

        <h1>₹3.60 Cr</h1>
        <p>₹13,683 per sqft</p>


            <a class="btn-red" href="https://omegaadvisors.com.np/product/zeera-cookies-10-12-pcs">
            View Details
        </a>

    

    </div>

</div>                                </div>
                            @endforeach
                        </div>
                        <div class="aiz-pagination aiz-pagination-center mt-4">
                            {{ $products->appends(request()->input())->links() }} 
                        </div>
                    </div>
                </div>
            </form>
        </div> 
        
        <!-- LISTINGS FOOTER NOTICE -->

<section class="listing-notice pb-0">

    <div class="wrap">

        <div class="notice-box">

            <div class="notice-icon">
                <svg viewBox="0 0 80 80">
                    <circle cx="40" cy="40" r="34"></circle>
                    <path d="M25 40 L35 50 L56 28"></path>
                </svg>
            </div>


            <div class="notice-content">

                <p class="eyebrow" style="    background: #f0cc76;
    width: fit-content;
    padding: 0 20px;
    border-radius: 999px;
    color: #000;
    font-size: 14px;">
                    Verified Listings
                </p>


                <h3>
                    Trusted property advisory, built on diligence.
                </h3>


                <p>
                    Omega Capital Advisors Pvt. Ltd. is a government-licensed real estate firm.
                    Listings are advisor-verified and transactions are handled to institutional
                    standards of diligence and documentation.
                </p>


            </div>


        </div>

    </div>

</section>
        
    </section>

@endsection

@section('script')
    <script type="text/javascript">
        function filter(){
            $('#search-form').submit();
        }
        function rangefilter(arg){
            $('input[name=min_price]').val(arg[0]);
            $('input[name=max_price]').val(arg[1]);
            filter();
        }
    </script>
@endsection
