@extends('extra.master')
@section('title', 'Brand beans | Offer Detail ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit Offer Detail</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ url('offer/offerdetail') }}/{{ $offerdetails->offerId }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('offer.offerdetailupdate') }}" enctype="multipart/form-data" method="post">
                            @csrf

                            <input type="hidden" name="offerdetailId" value="{{ $offerdetails->id }}">
                            <div class="mb-3">
                                <label for="positionLeft" class="form-label">Position Left</label>
                                <input type="text" class="form-control" value="{{ $offerdetails->positionLeft }}" id="positionLeft" name="positionLeft">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="positionBottom" class="form-label">Position Bottom</label>
                                <input type="text" class="form-control" id="positionBottom" value="{{ $offerdetails->positionBottom }}" name="positionBottom">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="imageHeight" class="form-label">Image Height</label>
                                <input type="text" class="form-control" id="imageHeight" value="{{ $offerdetails->imageHeight }}" name="imageHeight">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="imageWidth" class="form-label">Image Width</label>
                                <input type="text" class="form-control" id="imageWidth" value="{{ $offerdetails->imageWidth }}" name="imageWidth">
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
