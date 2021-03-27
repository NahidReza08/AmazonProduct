@extends('navbar')

@section('content')



<div class="album py-5 bg-light">
    <div class="container">

        <button type="button" class="btn btn-outline-secondary dropdown-toggle dropdown-toggle-split"
            data-bs-toggle="dropdown" aria-expanded="false">
            Sort by
            <span class="visually-hidden">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end">
            <li><a class="dropdown-item" href="{{URL::to('/sort-products/key='.'product_name')}}">Product Name</a></li>
            <li><a class="dropdown-item" href="{{URL::to('/sort-products/key='.'company_name')}}">Company Name</a></li>
            <li><a class="dropdown-item" href="{{URL::to('/sort-products/key='.'price')}}">Price</a></li>
            <li><a class="dropdown-item" href="{{URL::to('/sort-products/key='.'shipping_cost')}}">Shipping Cost</a></li>
            <li><a class="dropdown-item" href="{{URL::to('/sort-products/key='.'rating')}}">Rating</a></li>
            <li><a class="dropdown-item" href="{{URL::to('/sort-products/key='.'total_vote')}}">Total Vote</a></li>
            <li><a class="dropdown-item" href="{{URL::to('/sort-products/key='.'created_at')}}">Added Time</a></li>
        </ul>

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <br><br><br>
            @foreach($products as $row)
            <div class="col">
                <div class="card h-100" style="width: 23rem;">
                    <img class="card-img-top" src="{{$row->image}}" alt="Card image cap" height="190px" width="290px">
                    <div class="card-body" style="background-color:rgb(202, 187, 187)" height="1000px">
                        <h6 class="card-title">{{$row->product_name}}</h6>

                        <p class="card-text"><b>Rating</b>:{{$row->rating}}({{$row->total_vote}} votes)<br>
                            <b>Company</b>: <small>{{$row->company_name}}<br>
                                <b>Price</b>: &#2547 {{$row->price}} (+ &#2547 {{$row->shipping_cost}} shipping
                                cost)</small>
                        </p>
                        <div class="btn-group position-absolute bottom-0 start-0">
                            <a href="{{URL::to('/single-product/product-id='.$row->id)}}"><button type="button"
                                    class="btn btn-sm btn-info">Details</button></a>
                            <button type="button" class="btn btn-sm btn-outline-success">Edit</button>
                            <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                        </div>
                        <small class="text-muted position-absolute bottom-0 end-0">Added at:
                            {{$row->created_at}}</small>
                        <br>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>

@endsection