@extends('frontend.layouts.app')

<style type="text/css">
	.aiz-main-wrapper{
		min-height: initial !important;
	}
	@media(max-width:600px){
	    .comboimage{
        margin-bottom: 30px;	    }
	}
	.combosec h2{
	        font-size: 20px;
	}
		.combosec h4{
	    font-size: 18px;
	}
</style>

@section('content')

     <div class="container mt-5 combosec">
         <div class="row">
             <div class="col-lg-6 comboimage">
                   <img class="w-100" src="https://fridayintl.com/public/assets/images/combo.png"/>
             </div>
             <div class="col-lg-6 d-flex align-items-center">
    <div class="combo-content ps-lg-5">

<span class="badge bg-success px-3 py-2 mb-3 text-white rounded" style="
    color: #fff!important;
    border-radius: 999px !important;
    margin-left: 0;
    width: fit-content;
    height: fit-content;
    background: #05a845 !important;
    font-size: 13px;
">
            Student Special Offer <img src="https://cdn-icons-png.flaticon.com/128/7334/7334113.png" style="
    width: 20px;
    /* height: 40px; */
    margin-left: 10px;
">
        </span>

        <h2 class="fw-bold mb-3">
            Student Combo Package
        </h2>

        <h4 class="text-success fw-bold mb-4">
            Only ¥15,000
        </h4>

        <p class="lead mb-4 fs-14 text-dark">
            Moving to Japan? We've packed the essentials into one affordable bundle.
            Save time, save money, and start your student life with everything you need.
        </p>



      <ul class="list-unstyled mb-4" style="
    border: 2px dashed #05a845;
    padding: 10px;
">
            <li class="mb-2">✓ Perfect for new international students</li>
            <li class="mb-2">✓ Save over buying items individually</li>
            <li class="mb-2">✓ Essential groceries for everyday cooking</li>
<li class="mb-2">✓ Free delivery all over Japan <small class="text-muted">(excluding Okinawa)</small></li>        </ul>
        <a style="    width: 50%;
    background: #05a845;
    color: white;" href="https://fridayintl.com/product/student-combo-package" class="btn btn-soft-primary mr-2 add-to-cart fw-600">
            View Full Details
        </a>

    </div>
</div>
         </div>
       
     </div>


@endsection

