@extends('app')

@section('content')       

<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="left-sidebar">

            </div>
        </div>

        <div>
            <div class="features_items"><!--features_items-->
                <h2 class="title text-center">Features Items</h2>
                @foreach ($products as $product)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="assets/product{{$product->id}}.jpg"  alt="" style="width:128px;height:128px;" />
                                <h2>${{$product->price}}</h2>
                                <p>{{$product->name}}</p>

                                <button type="submit" class="btn btn-default buy">
                                    Buy
                                </button>
                                
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><!--features_items-->
        </div>
    </div>
</div>
@endsection