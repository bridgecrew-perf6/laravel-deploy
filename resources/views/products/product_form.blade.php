{{-- if there is no $product set it to null --}}
@if(!isset($product))
    {{$product = null}}
@endif

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="form-group">
            <strong>Image:</strong>
            <input value="{{ ( $product !== null ) ? $product->image :'' }}" type="text" name="image" class="form-control" placeholder="Image">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-6">
        <div class="form-group">
            <strong>Name:</strong>
            <input value="{{ ( $product !== null ) ? $product->name :'' }}" type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <strong>Detail:</strong>
            <textarea  class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ ( $product !== null ) ? $product->detail :'' }}</textarea>
        </div>
        <div class="form-group">
            <strong>Price:</strong>
            <input value="{{ ( $product !== null ) ? $product->price :'' }}" type="munber" name="price" class="form-control" placeholder="Price">
        </div>
        <div class="form-group">
            <strong>Quantity:</strong>
            <input value="{{ ( $product !== null ) ? $product->quantity :'' }}" type="number" name="quantity" class="form-control" placeholder="Quantity">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>