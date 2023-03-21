@extends('backend.inc.layouts')
@section('title','Create Product')

@section('content')
    <div class="row pt-4">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Product Create form</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <h3 class="card-title">Product Info</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="cat_id">Category Name</label>
                                        <select name="cat_id" class="form-control" id="cat_id">
                                            <option value="">-- Select Category --</option>
                                        </select>
                                        @error('cat_id') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="brand_id">Brand Name</label>
                                        <select name="brand_id" class="form-control" id="brand_id">
                                            <option value="" >-- Select Brand --</option>
                                        </select>
                                        @error('brand_id') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="product_name">Product Name</label>
                                        <input type="text" id="product_name" name="product_name" class="form-control" placeholder="Name">
                                        @error('product_name') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="product_title">Product Title</label>
                                        <input type="text" id="product_title" name="product_title" class="form-control" placeholder="Title">
                                        @error('product_title') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="product_price">Product Price</label>
                                        <input type="number" id="product_price" name="product_price" class="form-control" placeholder="Price">
                                        @error('product_price') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="product_discount">Product Discount</label>
                                        <input type="number" id="product_discount" name="product_discount" class="form-control" placeholder="Discount">
                                        @error('product_discount') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="product_quantity">Product Quantity</label>
                                        <input type="number" id="product_quantity" name="product_quantity" class="form-control" placeholder="Quantity">
                                        @error('product_quantity') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label" for="product_photo">Product Photo</label>
                                        <input type="file" id="product_photo" name="product_photo" class="form-control">
                                        @error('product_photo') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label" for="description">Product Description</label>
                                        <textarea name="description" id="description" cols="25" rows="8" class="form-control"></textarea>
                                        @error('description') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Status</label>
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input id="active" name="status" value="active" type="radio" checked="" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Active</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="inactive" name="status" value="inactive" type="radio" class="custom-control-input">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Inactive</span>
                                            </label>
                                        </div>
                                        @error('status') <span class="text-danger font-italic">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"><i class="fa fa-check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('script')
    <script>

    </script>
@endsection
