@extends('backend.inc.layouts')
@section('title','Show Product')

@section('content')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product Details </h4>
                    <div class="py-3"><a href="{{route('product.index')}}" class="btn btn-info">Products Page</a></div>
                    <div class="overflow-x-auto overflow-y-hidden">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Product Creator</th>
                                <th>Category</th>
                                <th>Brand</th>
                                <th>Product Name</th>
                                <th>Product Title</th>
                            </tr>
                            <tr>
                                <td>{{ ucwords($product->user->name) }}</td>
                                <td>{{ ucwords($product->subcategory->subcategory_name) }}</td>
                                <td>{{ ucwords($product->brand->brand_name) }}</td>
                                <td>{{ ucwords($product->product_name) }}</td>
                                <td>{{ ucwords($product->product_title) }}</td>
                            </tr>
                        </table>
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Product Price</th>
                                <th>Product Discount</th>
                                <th>Quantity</th>
                                <th>Product Photo</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>{{ ucwords($product->product_price) }}</td>
                                <td>{{ ucwords($product->product_discount) }}</td>
                                <td>{{ ucwords($product->product_quantity) }}</td>
                                <td>
                                    <img src="/uploads/product/{{ $product->product_photo }}" alt="..." style="width: 60px;">
                                </td>
                                <td>{{ ucwords($product->status) }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script>

    </script>
@endsection
