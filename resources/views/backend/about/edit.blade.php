@extends('backend.layouts.app')
@section('content')
<form method="POST" action="{{route('aboutus.update',$about->id)}}" enctype="multipart/form-data">
   {{csrf_field()}}

   </div>
   <div class="card">
      <div class="card-header">
         <h4 class="mb-3">Dynamic Products</h4>
      </div>
      <div class="card-body">
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Select Products</label>
    <div class="col-sm-10">
                                        @php
    $selectedProducts = is_array(json_decode($about->product_ids)) 
        ? json_decode($about->product_ids) 
        : [];
@endphp

<input type="hidden" name="product_ids_final" id="product_ids_final">
<select class="form-control aiz-selectpicker" multiple data-live-search="true" id="product_select">
    @foreach($products as $product)
        <option value="{{ $product->id }}"
            {{ in_array($product->id, $selectedProducts) ? 'selected' : '' }}>
            {{ $product->name }}
        </option>
    @endforeach
</select>
    </div>
</div>       
     
         
         
      
      
      </div>
   </div>

   
   
   
   
   
   
   
   


   </div>


   <div class="form-group row">
      <div class="col-sm-10">
         <button type="submit" class="btn btn-primary">Update</button>
      </div>
   </div>
</form>
@endsection

@section('script')
<script>
    $('form').on('submit', function () {
        let values = $('#product_select').val(); // get selected

        if (!values) values = [];

        // store in hidden input as JSON
        $('#product_ids_final').val(JSON.stringify(values));
    });
</script>
@endsection