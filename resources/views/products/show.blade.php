@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">            
            <img src="{{ $product->image }}" alt="" class="img-lg">            
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6" style="padding:10px;">
            <div class="card">
                <div class="card-header">
                    <div style="display:flex; flex-direction: row; justify-content: space-between; align-items: center;">
                        
                            {{ $product->name }}
                        
                        
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"> Edit</a>
                        
                    </div>
                </div>
                <div class="card-body" style="padding:10px;">
                    <div class="form-group">
                        <strong>Name:</strong>
                        {{ $product->name }}
                    </div>
                    <div class="form-group">
                        <strong>Details:</strong>
                        {{ $product->detail }}
                    </div>
                    <div class="form-group">
                        <strong>Price:</strong>
                        {{ $product->price }}
                    </div>
                    <div class="form-group">
                        <strong>Quantity:</strong>
                        {{ $product->quantity }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection