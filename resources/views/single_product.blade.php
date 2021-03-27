@extends('navbar')

@section('content')


<br>

<div class="container px-4">
    <div class="row gx-5">
        <div class="col-8">

            <div data-bs-spy="scroll" style="height:700px; overflow-y:scroll" data-bs-target="#list-example"
                data-bs-offset="0" class="scrollspy-example" tabindex="0">

                <img src="{{$product->image}}"
                    class="rounded img-fluid" alt="No image available" style="width:850px;height:300px;">
                <br><br>

                <div class="card" id="product-details">
                    <h5 class="card-header">Product Name</h5>

                    <div class="card-body">
                        <h5 class="card-title">{{$product->product_name}}</h5>
                        <h6><b>Company Name: </b>{{$product->company_name}}</h6>
                        <p class="card-text"><b> Product Type: </b> {{$product->product_category}} <br></p>
                    </div>

                    <div class="card-footer">
                        <b>Added At:</b> <small>{{$product->created_at}} </small><br>
                        <b>Last updated:</b> <small>{{$product->updated_at}} </small>
                    </div>
                </div>

                <br>

                <div class="card" id="product-ratiing">
                    <h5 class="card-header">Rating</h5>

                    <div class="card-body">

                        <b>Average Rating: </b>{{$product->rating}}<br>
                        <b>Total Vote: </b>{{$product->total_vote}}

                    </div>
                </div>

                <br>

                <div class="card" id="product-pricing">
                    <h5 class="card-header">Pricing</h5>

                    <div class="card-body">

                        <b>Product Price: </b>&#2547 {{$product->price}}<br>
                        <b>Shipping Cost: </b>&#2547 {{$product->shipping_cost}}

                    </div>
                </div>

                <br>


                <div class="card" id="product-description">
                    <h5 class="card-header">Description</h5>

                    <div class="card-body">
                        {!! nl2br($product->description) !!}
                        
                    </div>
                </div>

               <br>
               <div class="btn-group">
                <a href="{{$product->url}}"<button type="button" class="btn btn-sm btn-info">Buy</button></a>
                <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
              </div>
        </diV>
    </div>



</div>
</div>


@endsection