@extends('frontend.layouts.app')

@section('content')

<section class="categories pt_50 xs_pt_50">
    <div class="container">

        <div class="section_heading mb_25">
            <h4>{{ $category->name }}</h4>
            <h2>Select a Subcategory</h2>
        </div>

        <div class="row" style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px;">
            @foreach ($subcategories as $sub)
                <div class="">
                        <a href="{{route('products.category', $sub->slug)}}"
                           class="wow fadeInUp">

                            <div class="icon" style="    border: 1px solid lightgray;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 10px;">
                                <img src="{{ uploaded_asset($sub->icon) }}"
                                     alt="category"
                                     class="img-fluid w-100">
                            </div>

                            <h4 class="text-center" style="font-size:14px">{{ $sub->name }}</h4>
                        </a>
                    </div>
            @endforeach
        </div>

    </div>
</section>

@endsection