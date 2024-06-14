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
                        <a href="{{ route('offer.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('offer.offerdetailstore') }}" enctype="multipart/form-data" method="post">
                            @csrf

                            <input type="hidden" name="offerId" value="{{ $offerId }}">
                            <div class="mb-3">
                                <label for="positionLeft" class="form-label">Position Left</label>
                                <input type="text" class="form-control" id="positionLeft" name="positionLeft">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="positionBottom" class="form-label">Position Bottom</label>
                                <input type="text" class="form-control" id="positionBottom" name="positionBottom">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="imageHeight" class="form-label">Image Height</label>
                                <input type="text" class="form-control" id="imageHeight" name="imageHeight">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="imageWidth" class="form-label">Image Width</label>
                                <input type="text" class="form-control" id="imageWidth" name="imageWidth">
                            </div>
                            <br>

                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>

                    </div>
                    <div class="container">
                        <div class="d-flex justify-content-center">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Position Left</th>
                                        <th>Position Bottom</th>
                                        <th>Image Height</th>
                                        <th>Image Width</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($offerData as $offerData)
                                        <tr>
                                            <td>{{ $offerData->positionLeft }}</td>
                                            <td>{{ $offerData->positionBottom }}</td>
                                            <td>{{ $offerData->imageHeight }}</td>
                                            <td>{{ $offerData->imageWidth }}</td>
                                            <td>
                                                <a href="{{ route('offer.offerdetailedit') }}/{{ $offerData->id }}" class="btn btn-sm btn-primary">Edit</a>
                                                <a href="{{ route('offer.offerdetaildelete') }}/{{ $offerData->id }}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
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
