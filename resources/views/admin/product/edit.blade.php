@extends('extra.master')
@section('title', 'Brand beans | Edit Product')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit Product</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('product.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">



                        <form action="{{ route('product.update') }}" enctype="multipart/form-data" method="POST">
                            @csrf

                            <input type="hidden" name="productId" value="{{ $product->id }}">
                            <div class="mb-3">
                                <label for="loginName" class="form-label">name</label>
                                <input type="text" name="name" id="name" value="{{ $product->name }}" class=" form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="loginName" class="form-label">points</label>
                                <input type="text" name="points" id="points" value="{{ $product->points }}" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">photo</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="photo" name="photo">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="image"></label>
                                        <img src="{{ url('$product->photo') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                    </div>
                                </div>
                                <!-- <div class="box-content" style="width: 200px;">
                                            <input type="file" id="input-file-now-custom-1" class="dropify" name="iconPath" data-default-file="http://placehold.it/1000x667" />
                                        </div> -->
                            </div>

                            <div class="text-center my-3">
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script>
        function readURL(input, tgt) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.querySelector(tgt).setAttribute("src", e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection
