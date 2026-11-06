@extends('frontend.layouts.app')


<style>
    .product_detail_top .container{
    display: flex;
    justify-content: space-between;
}

.summary-table-wrapper{
    overflow-x:auto;
}

.summary-table{
    width:100%;
    border-collapse:collapse;
    background:#fff;
    border:1px solid #edf1f7;
}

.summary-table tr{
    border-bottom:1px solid #edf1f7;
}

.summary-table tr:last-child{
    border-bottom:none;
}

.summary-table th{
    width:35%;
    background:#f8fafc;
    color:#1f2937;
    font-size:15px;
    font-weight:600;
    text-align:left;
    padding:16px 20px;
}

.summary-table td{
    padding:16px 20px;
    color:#555;
    font-size:15px;
    font-weight:500;
}

.compliance-box{

        margin-top: 30px;
    border-left: 5px solid #121930;
    padding-left: 20px;
    padding-bottom: 20px;
}

.compliance-content{
    display:flex;
    align-items:flex-start;
    gap:20px;
}

.compliance-icon{
    width:60px;
    height:60px;
    border-radius:50%;
    background:#eef5ff;
    display:flex;
    justify-content:center;
    align-items:center;
    flex-shrink:0;
}

.compliance-icon i{
    color:#0d6efd;
    font-size:26px;
}

.compliance-text p{
    margin:0;
    font-size:15px;
    line-height:1.8;
    color:#555;
}

@media(max-width:768px){

    .summary-table th,
    .summary-table td{
        padding:14px;
        font-size:14px;
    }

    .summary-table th{
        width:42%;
    }

    .compliance-content{
        flex-direction:column;
        gap:15px;
    }
}

.property-sidebar{
    display:flex;
    flex-direction:column;
    gap:25px;
}

/* Card */

.agency-card,
.enquiry-card{
    background:#fff;
    border-radius:18px;
    padding:28px;
    box-shadow:0 5px 25px rgba(0,0,0,.05);
}

/* Agency */

.agency-header{
    display:flex;
    align-items:center;
    gap:18px;
    margin-bottom:25px;
}

.agency-header img{
    width:70px;
    height:70px;
    border-radius:50%;
object-fit: contain;
border:1px solid #ddd;
}

.agency-info h3{
    font-size:20px;
    font-weight:700;
    margin:0;
    color:#111;
}

.agency-info a{
    font-size:18px;
    color:#182140;
    text-decoration:none;
}

.agency-actions{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:12px;
    margin-bottom:12px;
}

.btn-outline{
    border:2px solid #182140;
    border-radius:8px;
    height:52px;
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    text-decoration:none;
    color:#182140;
    font-size:17px;
    font-weight:600;
    transition:.3s;
}

.btn-outline:hover{
    background:#182140;
    color:#fff;
}

.btn-visit{
    display:flex;
    justify-content:center;
    align-items:center;
    text-decoration:none;
    border:2px solid #d7d7d7;
    height:54px;
    border-radius:8px;
    color:#555;
    font-size:18px;
    font-weight:600;
    transition:.3s;
}

.btn-visit:hover{
    background:#f5f5f5;
}

/* Form */

.enquiry-card h3{
    font-size:20px;
    margin-bottom:30px;
    font-weight:700;
    color:#111;
}

.enquiry-card legend{
        font-size: 14px;
}

fieldset input {
    height: 46px;
    font-size: 14px;
}

fieldset{
    border:1px solid #d8d8d8;
    border-radius:6px;
    padding:0 15px 12px;
    margin-bottom:18px;
}

legend{
    padding:0 8px;
    font-size:15px;
    color:#666;
}

fieldset input,
fieldset textarea{
    width:100%;
    border:none;
    outline:none;
    resize:none;
    font-size:18px;
    color:#222;
    background:transparent;
    font-family:inherit;
}

fieldset input{
        height: 46px;
    font-size: 12px;
    border: 1px solid lightgray;
    padding-left: 10px;
    border-radius: 6px;
}


.containerized{
     box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    margin-top: 30px;
    border-radius: 20px;
}

fieldset textarea{
    min-height:90px;
}

.radio-title{
    font-size:24px;
    margin:25px 0 18px;
    color:#222;
}

.radio-group{
    display:flex;
    gap:35px;
    flex-wrap:wrap;
    margin-bottom:28px;
}

.radio-group label{
    display:flex;
    align-items:center;
    gap:8px;
    font-size:18px;
    color:#666;
    cursor:pointer;
}

.radio-group input[type=radio]{
    width:18px;
    height:18px;
    accent-color:#182140;
}

.btn-login{
    width:100%;
    height:58px;
    border-radius:6px;
    border:2px solid #182140;
background: #182140;
    color: #fff;
    font-size:14px;
    font-weight:700;
    cursor:pointer;
    transition:.3s;
    
    
}

.btn-login:hover{
    background:#182140;
    color:#fff;
}

/* Responsive */

@media(max-width:768px){

    .agency-actions{
        grid-template-columns:1fr;
    }

    .agency-info h3{
        font-size:24px;
    }

    .enquiry-card h3{
        font-size:30px;
    }

    .radio-group{
        flex-direction:column;
        gap:15px;
    }

}

.property-header{
    margin-bottom:35px;
}

.property-top{
    display:flex;
    justify-content:space-between;
    align-items:flex-start;
    gap:30px;
    flex-wrap:wrap;
}

.property-left{
    flex:1;
}

.property-right{
    text-align:right;
}

.property-badges{
    display:flex;
    align-items:center;
    flex-wrap:wrap;
    gap:12px;
    margin-bottom:18px;
}

.badge{
    padding:8px 15px;
    border-radius:6px;
    font-size:13px;
    font-weight:700;
    color:#fff;
    letter-spacing:.8px;
}

.featured{
    background:#ff6a3d;
}

.sale{
    background:#13c5c9;
}

.property-meta{
    color:#666;
    font-size:15px;
    display:flex;
    align-items:center;
    gap:6px;
}

.property-meta i{
    color:#777;
}

.property-title{
    font-size:28px;
    font-weight:700;
    color:#222;
    margin:0 0 12px;
    line-height:1.2;
}

.property-location{
    color:#666;
    font-size:18px;
    margin:0;
    display:flex;
    align-items:center;
    gap:10px;
}

.property-location i{
    color:#0bb6d3;
}

.badge{
        width: fit-content;
}

.property-price{
    font-size:22px;
    color:#222;
    font-weight:700;
    margin:0;
}

.price-per{
    color:#777;
    font-size:18px;
}

.property-gallery{
    margin-top:30px;
}

.propertySwiper{
    height:600px;
    border-radius:16px;
    overflow:hidden;
    position:relative;
}

.propertySwiper img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.thumbSwiper{
    margin-top:18px;
}

.swiper-wrapper, .propertySwiper {
        height: fit-content !important;
}

.thumbSwiper .swiper-slide{
    height:110px;
    border-radius:10px;
    overflow:hidden;
    cursor:pointer;
    opacity:.55;
    transition:.3s;
}

.thumbSwiper .swiper-slide img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.thumbSwiper .swiper-slide-thumb-active{
    opacity:1;
    border:3px solid #0bb6d3;
}

.gallery-actions{
    position:absolute;
    top:25px;
    right:25px;
    display:flex;
    gap:12px;
    z-index:100;
}

.gallery-actions button{
    width:54px;
    height:54px;
    border:none;
    border-radius:50%;
    background:#fff;
    box-shadow:0 8px 20px rgba(0,0,0,.15);
    cursor:pointer;
    transition:.3s;
}

.gallery-actions button:hover{
    background:#0bb6d3;
    color:#fff;
}

.swiper-button-next,
.swiper-button-prev{
    width:55px !important;
    height:55px !important;
    background:#fff;
    border-radius:50%;
    box-shadow:0 10px 20px rgba(0,0,0,.15);
}

.swiper-button-next:after,
.swiper-button-prev:after{
    font-size:20px !important;
    color:#333;
    font-weight:bold;
}

.product_detail_topleft{
    margin-bottom: 30px;
}

.product_detail_top .order-1{
    display: grid;
    grid-template-columns: 740px 1fr;
    grid-template-rows: 300px 260px;
    grid-column-gap: 7px;
    grid-row-gap: 7px;
    padding: 0;
    height: 600px;
}

.product_detail_top .order-1 .carousel-box:nth-child(1){
        grid-row: 1/3;
}

.product_detail_top .order-1 .carousel-box img{
    width: 100%;
    height: 100%;
        object-fit: cover;
}

.product_detail_top .order-1 .carousel-box{
    display: none;
}

.product_detail_top .order-1 .carousel-box:nth-child(1), .product_detail_top .order-1 .carousel-box:nth-child(2), .product_detail_top .order-1 .carousel-box:nth-child(3){
    display: block;
}

.details_properties{
        background: #f4f4f4;
    padding-top: 30px;
    padding-bottom: 50px;
}

.property_detailbox{
        background-color: #fff;
    box-shadow: -2px 2px 32px 0 rgb(0 0 0 / 4%);
}

.details_properties .containerized:not(:last-child){
    margin-bottom: 20px;
}

.details_properties .col-lg-4{
    position: sticky;
    top: 10%;
    height: 100%;
}

.product_detail_top{
padding: 30px 0 0;
}

.detail_list p{
    margin: 0;
}

.detail_title{
    color: #999;
    font-size: 15px;
}

.detail_answer{
    font-weight: 600;
}

.detail_list{
    display: grid;
    grid-template-columns: repeat(3,1fr);
    grid-gap: 30px;
    padding: 20px;
}

.property_detailbox h3{
        padding: 20px;
    border-bottom: 1px solid lightgray;
    font-weight: 600;
    font-size: 20px;
}

.sticktop{
       position: fixed !important;
    top: 0;
    width: 100%;
    background: white;
    z-index: 99;
        padding: 20px;
    border-top: 1px solid #e9e9e9;
    box-shadow: 0 4px 6px 0 rgb(0 0 0 / 20%);
}

.details_properties_scrollspy{
     padding: 20px;
         border-top: 1px solid #e9e9e9;
    box-shadow: 0 4px 6px 0 rgb(0 0 0 / 20%);
    background: white !important;
        height: 60px;

}

.details_properties_scrollspy ul{
    margin: 0;
}

.nav li{
    float:left; 
}

.details_properties_scrollspy .nav-link {
    color: #000 !important;
    opacity: 0.7;
}

.details_properties_scrollspy .active{
    position: relative;
    color:  var(--main-green) !important;
    opacity: 1;
}

.details_properties_scrollspy .active::after{
    position: absolute;
    content: '';
    background-color: var(--main-green);
    bottom: -19%;
    left: -12px;
    width: 120%;
    height: 4px;
}

.details_properties_scrollspy .navbar-nav {
    margin: 0;
    opacity: 1 !important; 
    visibility: visible !important;
}

.details_properties_scrollspy .nav-link {
    color: #fff !important;
     opacity: 1 !important;
}

.contactseller{
        padding: 0 14px;
    border: 1px solid var(--main-green);
    font-size: 14px;
    line-height: 28px;
    color: #fff;
    background-color: var(--main-green);
    border-radius: 2px;
    cursor: pointer;
    margin-top: 8px;
    padding: unset;
    font-size: 14px;
    font-weight: 500;
     background-color: var(--main-green);
    border-radius: 4px;
    height: 48px;
    width: 177px;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-align-items: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    border: unset;
    line-height: unset;
        margin-top: 60px;
    width: 100%;
}

.navbar-area{
        box-shadow: 0 0 14px rgba(0, 0, 0, .14);
    margin-top: 0 !important;
    
}

.contactseller img{
        width: 20px;
    height: 20px;
    margin-right: 10px;
}

#description .detail_list{
    display: initial;
}

.product_detail_topleft span{
    color: var(--main-green);
}

.product_detail_topright p{
    color: #333;
    opacity: 0.7;
}

.w-fit{
    width:fit-content !important;
}

</style>
@section('meta_title'){{ $detailedProduct->meta_title }}@stop

@section('meta_description'){{ $detailedProduct->meta_description }}@stop

@section('meta_keywords'){{ $detailedProduct->tags }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $detailedProduct->meta_title }}">
    <meta itemprop="description" content="{{ $detailedProduct->meta_description }}">
    <meta itemprop="image" content="{{ uploaded_asset($detailedProduct->meta_img) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $detailedProduct->meta_title }}">
    <meta name="twitter:description" content="{{ $detailedProduct->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset($detailedProduct->meta_img) }}">
    <meta name="twitter:data1" content="{{ single_price($detailedProduct->unit_price) }}">
    <meta name="twitter:label1" content="Price">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $detailedProduct->meta_title }}" />
    <meta property="og:type" content="og:product" />
    <meta property="og:url" content="{{ route('product', $detailedProduct->slug) }}" />
    <meta property="og:image" content="{{ uploaded_asset($detailedProduct->meta_img) }}" />
    <meta property="og:description" content="{{ $detailedProduct->meta_description }}" />
    <meta property="og:site_name" content="{{ get_setting('meta_title') }}" />
    <meta property="og:price:amount" content="{{ single_price($detailedProduct->unit_price) }}" />
    <meta property="product:price:currency" content="{{ \App\Models\Currency::findOrFail(get_setting('system_default_currency'))->code }}" />
    <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
@endsection

@section('content')

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-8">
            <div style="    box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
    padding: 20px;
    background: white;
    border-radius: 20px;">
            <section class="property-header">

    <div class="property-top">

        <div class="property-left">

            <div class="property-badges">
                <span class="badge featured w-fit">FEATURED</span>
                <span class="badge sale w-fit">Commercial</span>

                <span class="property-meta">
                    <i class="far fa-clock"></i> 2 months ago
                </span>

                <span class="property-meta">
                    <i class="far fa-eye"></i> 1039 Views
                </span>

            </div>

<div class="d-lg-block d-none">
            <h1 class="property-title">
                6 Aana Residential Land — Budhanilkantha, Kathmandu
            </h1>

            <p class="property-location">
                <i class="fas fa-map-marker-alt"></i>
Near Ring Road            </p>
</div>



        </div>

        <div class="property-right">

            <h2 class="property-price">
                ₹3.60 Cr
            </h2>
 
            <span class="price-per">
                9350 / SqFt
            </span>

        </div>

    </div>
<div class="d-lg-none d-block">
            <h1 class="property-title">
                6 Aana Residential Land — Budhanilkantha, Kathmandu
            </h1>

            <p class="property-location">
                <i class="fas fa-map-marker-alt"></i>
Near Ring Road            </p>
</div>
</section>
<div class="property-gallery">

    <div class="swiper propertySwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="https://templates.g5plus.net/homeid/images/single-property-sm-2.jpg">
            </div>

            <div class="swiper-slide">
                <img src="https://templates.g5plus.net/homeid/images/single-property-sm-3.jpg">
            </div>

            <div class="swiper-slide">
                <img src="https://templates.g5plus.net/homeid/images/single-property-sm-4.jpg">
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

        <div class="gallery-actions">
            <button><i class="far fa-heart"></i></button>
         
        </div>

    </div>

    <div class="swiper thumbSwiper">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <img src="https://templates.g5plus.net/homeid/images/single-property-sm-2.jpg">
            </div>

            <div class="swiper-slide">
                <img src="https://templates.g5plus.net/homeid/images/single-property-sm-3.jpg">
            </div>

            <div class="swiper-slide">
                <img src="https://templates.g5plus.net/homeid/images/single-property-sm-4.jpg">
            </div>

        </div>
    </div>

</div>
</div>
<nav class="navbar mt-5 navbar-expand-sm bg-dark details_properties_scrollspy ">  
    <div class="container p-0">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#section1">Overview</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section2">Description</a>
    </li>
       <li class="nav-item">
      <a class="nav-link" href="#section6">Property Summary</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#section3">Amenities</a>
    </li>

       <li class="nav-item">
      <a class="nav-link" href="#section4">Property Video</a>
    </li>

       <li class="nav-item">
      <a class="nav-link" href="#section5">Map</a>
    </li>

    


  </ul>
</div>
</nav>
 <div id="section1" class="containerized">
      <div class="property_detailbox" id="overview">
                <h3>Overview</h3>
                <div class="detail_list">

                                          <div class="d-flex align-items-center">
                      
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_title">Ownership Type</p>
                        <p class="detail_answer">individual</p>
                        </div>
                     
                       
                    </div>
                       

                                              
                                                   
                                                     <div class="d-flex align-items-center">
                    
                       <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_title">Road Access</p>
                        <p class="detail_answer">3</p>
                        </div>           
                    </div>
                        

                                                    <div class="d-flex align-items-center">
                     
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_title">kitchen</p>
                        <p class="detail_answer">1</p>
                        </div>
                   
                       
                    </div>
                         
                                                   <div class="d-flex align-items-center">
                      
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_title">Dining Room</p>
                        <p class="detail_answer">1</p>
                        </div>
                    
                       
                    </div>
                        

                                                     <div class="d-flex align-items-center">
                    
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_title">BedRoom</p>
                        <p class="detail_answer">2</p>
                        </div>
                    
                       
                    </div>
                        
                                                     <div class="d-flex align-items-center">
                    
                       <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_title">BathRoom</p>
                        <p class="detail_answer">1</p>
                        </div>
                    
                    </div>
                                               
                                                   <div class="d-flex align-items-center">
                     
                          <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_title">Hall</p>
                        <p class="detail_answer">1</p>
                        </div>
                    
                    </div>
                                               

                                                      <div class="d-flex align-items-center">
                   
                       <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_title">Floors</p>
                        <p class="detail_answer">3</p>
                        </div>
                    
                    </div>
                                               

                                                     <div class="d-flex align-items-center">
                   
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_title">Parking</p>
                        <p class="detail_answer">1</p>
                        </div>
                  
                    </div>
                                                  
                                                                                        
                                                                                        
                                                                                    
                </div>
            </div>
</div>
<div id="section2" class="containerized">
     <div class="property_detailbox" id="description">
                   <h3>Description</h3>
                    <div class="detail_list">
                        <p></p><ul class="list-arrows" style="font-family: &quot;Red Hat Display&quot;, sans-serif; font-size: medium;"><li style="position: relative; padding-left: 30px; list-style-type: none; font-size: 14px; margin-bottom: 16px;">2 BHK flat having 14 feet road access is available for rent at Baneshor</li><li style="position: relative; padding-left: 30px; list-style-type: none; font-size: 14px; margin-bottom: 16px;">Monthly rental price of this furnished residential flat is 25 thousand</li></ul><p></p>
                    </div>
                </div>
</div>
<div id="section6" class="containerized">
    <div class="property_detailbox" id="property-summary">
        <h3>Property Summary</h3>

        <div class="summary-table-wrapper">
            <table class="summary-table">
                <tbody>
                    <tr>
                        <th>Property Type</th>
                        <td>Residential House</td>
                    </tr>

                    <tr>
                        <th>Area</th>
                        <td>2,850 Sq.ft</td>
                    </tr>

                    <tr>
                        <th>Location</th>
                        <td>Budhanilkantha, Kathmandu</td>
                    </tr>

                    <tr>
                        <th>Price</th>
                        <td>NPR 3,25,00,000</td>
                    </tr>

                    <tr>
                        <th>Road Access</th>
                        <td>20 Ft Blacktopped Road</td>
                    </tr>

                    <tr>
                        <th>Facing</th>
                        <td>East</td>
                    </tr>

                    <tr>
                        <th>Land Shape</th>
                        <td>Rectangular</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="section3" class="containerized">
  <div class="property_detailbox" id="amenities">
                    <h3>Amenities</h3>
                    <div class="detail_list">
                       <div class="d-flex align-items-center">
                                                <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_answer">EARTHQUAKE RESISTANT</p>
                        </div>
                                               
                    </div>
                                              <div class="d-flex align-items-center">
                     
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_answer">MARBEL</p>
                        </div>
                    </div>
                      
                                                                      
                                                                      
                                                                      
                                                                      
                                                                     <div class="d-flex align-items-center">
                     
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_answer">CC CAMERA</p>
                        </div>
                    </div>
                      
                                                                      
                                                                     <div class="d-flex align-items-center">
                     
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_answer">                                    DINING TABLE</p>
                        </div>
                    </div>
                      
                                                                      
                                                                      
                                                                      
                                                                      
                                                                      
                                                                     <div class="d-flex align-items-center">
                     
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_answer">GARDEN</p>
                        </div>
                    </div>
                      
                                                                      
                                                                      
                                                                      
                                                                     <div class="d-flex align-items-center">
                     
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_answer">PARKING</p>
                        </div>
                    </div>
                      
                                                                      
                                                                      
                                                                      
                                                                      
                                                                     <div class="d-flex align-items-center">
                     
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_answer">BATHROOM</p>
                        </div>
                    </div>
                      
                                                                      
                                                                     <div class="d-flex align-items-center">
                     
                        <img src="data:image/svg+xml,%3C?xml%20version=%271.0%27%20encoding=%27UTF-8%27?%3E%20%3Csvg%20width=%2727px%27%20height=%2727px%27%20viewBox=%270%200%2027%2027%27%20version=%271.1%27%20xmlns=%27http://www.w3.org/2000/svg%27%20xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%20%3C!--%20Generator:%20Sketch%2050.2%20(55047)%20-%20http://www.bohemiancoding.com/sketch%20--%3E%20%3Ctitle%3Ecompass-blue%3C/title%3E%20%3Cdesc%3ECreated%20with%20Sketch.%3C/desc%3E%20%3Cdefs%3E%3C/defs%3E%20%3Cg%20id=%27Page-1%27%20stroke=%27none%27%20stroke-width=%271%27%20fill=%27none%27%20fill-rule=%27evenodd%27%3E%20%3Cg%20id=%27compass-blue%27%20transform=%27translate(1.000000,%201.000000)%27%20fill=%27%2300A4E4%27%20fill-rule=%27nonzero%27%3E%20%3Cpath%20d=%27M12.5,0%20C5.59651693,0%200,5.59651693%200,12.5%20C0,19.4034831%205.59651693,25%2012.5,25%20C19.4034831,25%2025,19.4034831%2025,12.5%20C24.9922689,5.59977214%2019.4002279,0.00773114583%2012.5,0%20Z%20M12.5,24.1666667%20C6.05672198,24.1666667%200.833333333,18.943278%200.833333333,12.5%20C0.833333333,6.05672198%206.05672198,0.833333333%2012.5,0.833333333%20C18.943278,0.833333333%2024.1666667,6.05672198%2024.1666667,12.5%20C24.1593424,18.9402263%2018.9402263,24.1593424%2012.5,24.1666667%20Z%27%20id=%27Shape%27%20stroke=%27%2300A4E4%27%20stroke-width=%270.5%27%3E%3C/path%3E%20%3Cpath%20d=%27M19.8630326,6.13599719%20C19.7146742,5.98808351%2019.4859928,5.95736295%2019.3037303,6.06090256%20L10.9840526,10.8093878%20C10.9790466,10.8128012%2010.9767712,10.8182626%2010.9715377,10.8212209%20C10.9182924,10.8669604%2010.8684604,10.9167959%2010.8224966,10.9702724%20C10.8195385,10.9752787%2010.8140775,10.9777818%2010.8108918,10.9827882%20L6.06114611,19.3030482%20C5.95715862,19.485551%205.98810456,19.714931%206.13646306,19.8635274%20C6.28504904,20.0118963%206.51441302,20.0428444%206.69690298,19.9388496%20L15.0152155,15.1903643%20C15.0202215,15.186951%2015.0224969,15.1814896%2015.0277304,15.1785313%20C15.0809757,15.1327918%2015.1308077,15.0829562%2015.1767715,15.0294798%20C15.1797296,15.0244734%2015.1851906,15.0219703%2015.1883762,15.016964%20L19.938122,6.69806932%20C20.0430196,6.51533898%2020.0123012,6.28482117%2019.8630326,6.13599719%20Z%20M8,18%20L11.4246447,12%20L14,14.5739959%20L8,18%20Z%20M14.5718307,14%20L12,11.4271172%20L18,8%20L14.5718307,14%20Z%27%20id=%27Shape%27%3E%3C/path%3E%20%3C/g%3E%20%3C/g%3E%20%3C/svg%3E" class="mr-4">
                        <div>
                        <p class="detail_answer">DRAINAGE</p>
                        </div>
                    </div>
                      
                                                  
                       


</div>


                    </div>
</div>

<div id="section4" class="containerized">
    <div class="property_detailbox" id="video">
        <h3>Property Video</h3>
     <div class=" nodetail_list">
             <video playsinline="" autoplay="" muted="" loop="" src="https://static.vecteezy.com/system/resources/previews/002/015/314/watermarked/drone-flies-above-land-in-countryside-free-video.mp4" style="width: 100%;"></video>
        </div>
    </div>
</div>

<div id="section5" class="containerized">
    <div class="property_detailbox" id="video">
        <h3>Property Map</h3>
        <div class=" property-list-map">
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112971.52564224572!2d85.27862606187121!3d27.76787422564285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1c257b30a06f%3A0x9819a88de0ee753!2sBudhanilkantha%2C%20Nepal!5e0!3m2!1sen!2sau!4v1783498909481!5m2!1sen!2sau" width="95%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
         
           
        </div>
    </div>
</div>


<!-- Property Summary -->

<!-- Compliance Notice -->
<div  class="containerized mb-5">
    <div class="property_detailbox compliance-box">
        <h3>Compliance Notice</h3>

        <div class="compliance-content">
            <div class="compliance-icon">
                <i class="fas fa-shield-alt"></i>
            </div>

            <div class="compliance-text">
                <p>
                    This listing is managed by a <strong>DOLMA-licensed brokerage.</strong>
                    All transactions include full <strong>KYC verification</strong> and
                    <strong>AML compliance</strong>, ensuring a transparent, secure,
                    and legally compliant property transaction for both buyers and sellers.
                </p>
            </div>
        </div>
    </div>
</div>


        </div>
        
        <div class="col-lg-4" id="contactseller">

<div class="property-sidebar">

    <!-- Agency Card -->
    <div class="agency-card">

        <div class="agency-header">
            <img src="https://www.nepalhomes.com/_next/image?url=https%3A%2F%2Fwww.nepalhomes.com%2Fpublic%2Fagency%2F254BA2D87EB26DF-call%20for%20home.png&w=64&q=75" alt="Agency">

            <div class="agency-info">
                <h3>Call For Home</h3>
                <a href="#">190 Properties</a>
            </div>
        </div>

        <div class="agency-actions">
            <a href="tel:+9779800000000" class="btn-outline">
                <i class="fa fa-phone"></i>
                Call Agency
            </a>

            <a href="#" class="btn-outline">
                <i class="fa fa-envelope"></i>
                Message Us
            </a>
        </div>

        <a href="#" class="btn-visit">
            Book Site Visit
        </a>

    </div>


    <!-- Enquiry Form -->
    <div class="enquiry-card">

        <h3>Enquiry Form</h3>

        <form>

            <fieldset>
                <legend>Email</legend>
                <input type="email" placeholder="Example: email@email.com">
            </fieldset>

            <fieldset>
                <legend>Name</legend>
                <input type="text" placeholder="Full name">
            </fieldset>

            <fieldset>
                <legend>Phone</legend>
                <input type="text" placeholder="+977 XXXXXXXXXX">
            </fieldset>

       

     
            <button type="submit" class="btn-login mt-3">
                LOGIN TO ENQUIRE
            </button>

        </form>

    </div>

</div>
                  
                </div>

    </div>
</div>



@endsection

@section('modal')
    <div class="modal fade" id="chat_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-zoom product-modal" id="modal-size" role="document">
            <div class="modal-content position-relative">
                <div class="modal-header">
                    <h5 class="modal-title fw-600 h5">{{ translate('Any query about this product')}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="" action="{{ route('conversations.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $detailedProduct->id }}">
                    <div class="modal-body gry-bg px-3 pt-3">
                        <div class="form-group">
                            <input type="text" class="form-control mb-3" name="title" value="{{ $detailedProduct->name }}" placeholder="{{ translate('Product Name') }}" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="8" name="message" required placeholder="{{ translate('Your Question') }}">{{ route('product', $detailedProduct->slug) }}</textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-primary fw-600" data-dismiss="modal">{{ translate('Cancel')}}</button>
                        <button type="submit" class="btn btn-primary fw-600">{{ translate('Send')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="login_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-zoom" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title fw-600">{{ translate('Login')}}</h6>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="p-3">
                        <form class="form-default" role="form" action="{{ route('cart.login.submit') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                @if (addon_is_activated('otp_system'))
                                    <input type="text" class="form-control h-auto form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{ translate('Email Or Phone')}}" name="email" id="email">
                                @else
                                    <input type="email" class="form-control h-auto form-control-lg {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" placeholder="{{  translate('Email') }}" name="email">
                                @endif
                                @if (addon_is_activated('otp_system'))
                                    <span class="opacity-60">{{  translate('Use country code before number') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" class="form-control h-auto form-control-lg" placeholder="{{ translate('Password')}}">
                            </div>

                            <div class="row mb-2">
                                <div class="col-6">
                                    <label class="aiz-checkbox">
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <span class=opacity-60>{{  translate('Remember Me') }}</span>
                                        <span class="aiz-square-check"></span>
                                    </label>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('password.request') }}" class="text-reset opacity-60 fs-14">{{ translate('Forgot password?')}}</a>
                                </div>
                            </div>

                            <div class="mb-5">
                                <button type="submit" class="btn btn-primary btn-block fw-600">{{  translate('Login') }}</button>
                            </div>
                        </form>

                        <div class="text-center mb-3">
                            <p class="text-muted mb-0">{{ translate('Dont have an account?')}}</p>
                            <a href="{{ route('user.registration') }}">{{ translate('Register Now')}}</a>
                        </div>
                        @if(get_setting('google_login') == 1 ||
                            get_setting('facebook_login') == 1 ||
                            get_setting('twitter_login') == 1)
                            <div class="separator mb-3">
                                <span class="bg-white px-3 opacity-60">{{ translate('Or Login With')}}</span>
                            </div>
                            <ul class="list-inline social colored text-center mb-5">
                                @if (get_setting('facebook_login') == 1)
                                    <li class="list-inline-item">
                                        <a href="{{ route('social.login', ['provider' => 'facebook']) }}" class="facebook">
                                            <i class="lab la-facebook-f"></i>
                                        </a>
                                    </li>
                                @endif
                                @if(get_setting('google_login') == 1)
                                    <li class="list-inline-item">
                                        <a href="{{ route('social.login', ['provider' => 'google']) }}" class="google">
                                            <i class="lab la-google"></i>
                                        </a>
                                    </li>
                                @endif
                                @if (get_setting('twitter_login') == 1)
                                    <li class="list-inline-item">
                                        <a href="{{ route('social.login', ['provider' => 'twitter']) }}" class="twitter">
                                            <i class="lab la-twitter"></i>
                                        </a>
                                    </li>
                                @endif
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            getVariantPrice();
        });

        function CopyToClipboard(e) {
            var url = $(e).data('url');
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(url).select();
            try {
                document.execCommand("copy");
                AIZ.plugins.notify('success', '{{ translate('Link copied to clipboard') }}');
            } catch (err) {
                AIZ.plugins.notify('danger', '{{ translate('Oops, unable to copy') }}');
            }
            $temp.remove();
            // if (document.selection) {
            //     var range = document.body.createTextRange();
            //     range.moveToElementText(document.getElementById(containerid));
            //     range.select().createTextRange();
            //     document.execCommand("Copy");

            // } else if (window.getSelection) {
            //     var range = document.createRange();
            //     document.getElementById(containerid).style.display = "block";
            //     range.selectNode(document.getElementById(containerid));
            //     window.getSelection().addRange(range);
            //     document.execCommand("Copy");
            //     document.getElementById(containerid).style.display = "none";

            // }
            // AIZ.plugins.notify('success', 'Copied');
        }
        function show_chat_modal(){
            @if (Auth::check())
                $('#chat_modal').modal('show');
            @else
                $('#login_modal').modal('show');
            @endif
        }

            function valueChanged()
    {
        if($('#flexCheckChecked').is(":checked"))   
            $(".caketext").show();
        else
            $(".caketext").hide();
    }



    </script>
    
    
<script type="text/javascript">
    $(document).ready(function () {
        $('body').scrollspy({
            target: '#mainNavbar',
            offset: 10
        });
    });
</script>

    <script type="text/javascript">
        $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();
    if (scroll < 750) {
        $(".details_properties_scrollspy").removeClass("sticktop");
        
    } else {
        $(".details_properties_scrollspy").addClass("sticktop");
     


        
    }
});
    </script>
    <script>
        const thumbs = new Swiper(".thumbSwiper", {
    spaceBetween:15,
    slidesPerView:5,
    watchSlidesProgress:true,
    breakpoints:{
        0:{slidesPerView:3},
        768:{slidesPerView:4},
        1200:{slidesPerView:5}
    }
});

const gallery = new Swiper(".propertySwiper",{
    loop:true,
    spaceBetween:10,
    navigation:{
        nextEl:".swiper-button-next",
        prevEl:".swiper-button-prev"
    },
    thumbs:{
        swiper:thumbs
    }
});
    </script>

    
    <script type="application/ld+json">
{!! $schema !!}
</script>
@endsection
