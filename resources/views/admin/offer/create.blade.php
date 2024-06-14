@extends('extra.master')
@section('title', 'Brand beans | Offer ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Offer </h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('offer.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <form action="{{ route('offer.store') }}" enctype="multipart/form-data" method="post">
                            @csrf

                            <div class="mb-3" style="font-size: 20px">
                                <label for="title" class="form-label">Is Festival</label>
                                <input type="checkbox" id="is_festival" name="is_festival">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Photo</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="poster">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="image"></label>
                                        <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="fontSize" class="form-label">Font Size</label>
                                <input type="text" class="form-control" id="fontSize" name="fontSize">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="fontFamily" class="form-label">Font Family</label>
                                <input type="text" class="form-control" id="fontFamily" name="fontFamily">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="fontColor" class="form-label">Font Color</label>
                                <input type="text" class="form-control" id="fontColor" name="fontColor">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="noOfProduct" class="form-label">Number of Product</label>
                                <input type="text" class="form-control" id="noOfProduct" name="noOfProduct">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="posterHeight" class="form-label">Poster Height</label>
                                <input type="text" class="form-control" id="posterHeight" name="posterHeight">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="posterWidth" class="form-label">Poster Width</label>
                                <input type="text" class="form-control" id="posterWidth" name="posterWidth">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="titlePositionTop" class="form-label">Title Position Top</label>
                                <input type="text" class="form-control" id="titlePositionTop" name="titlePositionTop">
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="titlePositionLeft" class="form-label">Title Position Left</label>
                                <input type="text" class="form-control" id="titlePositionLeft" name="titlePositionLeft">
                            </div>
                            <br>

                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
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
