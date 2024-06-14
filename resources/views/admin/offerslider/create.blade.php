@extends('extra.master')
@section('title', 'Brand beans | Offer Slider')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Offer Slider</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('offerSlider.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <form action="{{ route('offerSlider.store') }}" enctype="multipart/form-data" method="post">
                            @csrf


                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Poster</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="image">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="image"></label>
                                        <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                    </div>
                                </div>
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
