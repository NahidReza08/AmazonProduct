@extends('navbar')

@section('content')

@include('toastr')

<script>
  document.getElementById("add-product").className = "nav-link active";
  document.getElementById("home").className = "nav-link";
</script>

<br><br>
<center> <h1 class="title">Add new product</h1> </center>
<br><br>


<div class="container">
  <form id="add_product" class="col-lg-8 offset-lg-2" action="{{route('/store-product')}}" method="post" enctype="multipart/form-data">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    @csrf

    <div class="mb-3 row">
      <label for="productName" class="col-sm-3 col-form-label">Product's Name</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="productName" name="productName" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="productCategory" class="col-sm-3 col-form-label">Product's Category</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="productCategory" name="productCategory" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="companyName" class="col-sm-3 col-form-label">Company Name</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="companyName" name="companyName" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="rating" class="col-sm-3 col-form-label">Rating</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="rating" name="rating" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="totalVote" class="col-sm-3 col-form-label">Total Vote</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="totalVote" name="totalVote" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="productPrice" class="col-sm-3 col-form-label">Product Price</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="productPrice" name="productPrice" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="shippingCost" class="col-sm-3 col-form-label">Shipping Cost</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="shippingCost" name="shippingCost" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="productDescription" class="col-sm-3 col-form-label">Description</label>
      <div class="col-sm-8">
      <textarea class="form-control" id="productDescription" name="productDescription" rows="5"></textarea>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="imageId" class="col-sm-3 col-form-label">Image ID</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="imageId" name="imageId" required>
      </div>
    </div>
    <div class="mb-3 row">
      <label for="productURL" class="col-sm-3 col-form-label">Product Link</label>
      <div class="col-sm-8">
        <input type="text" class="form-control" id="productURL" name="productURL" required>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>
</div>


@endsection