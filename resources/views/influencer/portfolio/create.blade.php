@extends('extra.master')
@section('title', 'Brand beans | Create Portfolio')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Portfolio</h3>
                    </div>
                    <div class="">
                        <a href="{{ route('influencer.portfolio.index') }}" class="btn btn-primary btn-sm">BACK</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form class="form" id="imageform" method="post" action="{{ route('image.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">

                                <label for="formFile" class=" form-label">Type :</label>
                                <select class=" py-1 form-control " id="mediatype" name="type">
                                    <option selected disabled>--select Your Option--</option>
                                    <option value="Photo">Photo</option>
                                    <option value="Video">Video</option>
                                </select>
                                <div class="py-2" style='display:none;' id='Photo'>
                                    <label for="formFile" class=" form-label">Photo :</label>
                                    <input type="file" class=" py-1 form-control" accept="image/*" id="image" name="image1">
                                </div>
                                <div style='display:none;' id='Video'>
                                    <label for="formFile" class=" form-label">Upload Your Video Url :</label>
                                    <input type="text" class=" py-1 form-control" id="image" name="video">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success btn-sm my-2" id="submitimage" name="submitimage">Upload</button>
                            </div>
                        </form>

                    </div>
                    <!-- /.card-content -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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


    <script>
        $(document).ready(function() {
            $('#mediatype').on('change', function() {
                if (this.value == 'Photo') {
                    $("#Photo").show();
                } else {
                    $("#Photo").hide();
                }
                if (this.value == 'Video') {
                    $("#Video").show();
                } else {
                    $("#Video").hide();
                }
            });
        });
    </script>

@endsection
