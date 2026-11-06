                <div class="single_product">
                        @if($product->id == 1562)
        <span class="student-badge" style="    position: absolute;
    top: 0px;
    right: 10px;
    background: #28a745;
    color: #fff;
    font-size: 12px;
    font-weight: 600;
    padding: 6px 12px;
    border-radius: 20px;
    z-index: 2;
    box-shadow: 0 2px 8px rgba(0, 0, 0, .2);">
            🎓 Best for Students
        </span>
    @endif
                    <div class="single_product_img">
                        <a class="d-flex mx-auto" href="{{ route('product', $product->slug) }}">

                        <img src="{{ uploaded_asset($product->thumbnail_img) }}"
                             alt="Product" class="img_fluid w-100">
</a>
                      
                    </div>

                    <div class="single_product_text">
                        <a class="title" href="{{ route('product', $product->slug) }}">
                            {{ $product->name }}
                        </a>
@php 
    $stockQty = $product->stocks->sum('qty');
@endphp
                        <p>
                          {{ home_discounted_base_price($product) }} <span style="    color: gray;
    font-size: 14px;">(With Tax)</span>
                           @if(home_base_price($product) != home_discounted_base_price($product))
                <del class="fw-600 opacity-50 mr-1">{{ home_base_price($product) }}</del>
            @endif
                        </p>
@if($stockQty > 0)
    <a href="javascript:void(0);" 
       class="cart_btn"
       onclick="quickAddToCart({{ $product->id }})">
        Add to Cart
    </a>
@else
    <a href="javascript:void(0);" 
       class="cart_btn disabled"
       style="background:#999; pointer-events:none; color:white">
        Out of Stock
    </a>
@endif
                    </div>
                </div>
