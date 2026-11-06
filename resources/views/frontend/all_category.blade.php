@extends('frontend.layouts.app')

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                <h1 class="fw-600 h4">{{ translate('All Categories') }}</h1>
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item opacity-50">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home')}}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        <a class="text-reset" href="{{ route('categories.all') }}">"{{ translate('All Categories') }}"</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="mb-4">
    <div class="container">
        
        @php
    $withChildren = [];
    $withoutChildren = [];

    foreach ($categories as $category) {
        $children = \App\Utility\CategoryUtility::get_immediate_children_ids($category->id);

        if (!empty($children)) {
            $withChildren[] = $category;
        } else {
            $withoutChildren[] = $category;
        }
    }

    $sortedCategories = array_merge($withChildren, $withoutChildren);
@endphp
        
     @foreach ($sortedCategories as $category)
    <div class="mb-3 bg-white shadow-sm rounded">
        <div class="p-3 border-bottom fs-16 fw-600">
            <a href="{{ route('products.category', $category->slug) }}" class="text-reset text-uppercase">
                <i class="fa fa-chevron-right fs-12"></i>
                {{ $category->getTranslation('name') }}
            </a>
        </div>

@php
    $childrenIds = \App\Utility\CategoryUtility::get_immediate_children_ids($category->id);
    $children = \App\Models\Category::whereIn('id', $childrenIds)->get();
@endphp

@if($children->count() > 0)
    <div class="p-3 p-lg-4">
        <div class="row">
            @foreach ($children as $child)
                <div class="col-lg-4 col-4 text-left">
                    <img
                        class="cat-image lazyload d-flex mx-auto"
                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                        data-src="{{ uploaded_asset($child->icon) }}"
                        width="100"
                        alt="{{ $child->getTranslation('name') }}"
                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';"
                    >

                    <h6 class="mb-1 text-center">
                        <a class="text-reset fw-400 fs-14"
                           href="{{ route('products.category', $child->slug) }}">
                            {{ $child->getTranslation('name') }}
                        </a>
                    </h6>
                </div>
            @endforeach
        </div>
    </div>
@endif    </div>
@endforeach
    </div>
</section>

@endsection
