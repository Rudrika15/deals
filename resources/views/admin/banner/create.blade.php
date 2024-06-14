@extends('extra.master')
@section('title', 'Brand beans | Create Banner ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Banner </h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('banner.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('banner.store') }}" enctype="multipart/form-data" method="post">
                            @csrf

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Photo</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="photo">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="image"></label>
                                        <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>

                                    </div>
                                </div>
                            </div>


                            <div class="mb-3">
                                <label for="sequence" class="form-label">sequence</label>
                                <input type="number" class="form-control" id="sequence" name="sequence">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>


                    </div>
                    <!-- /.card-content -->
                </div>

                <script>
                    $(function() {
                        $("#isFestival").click(function() {
                            if ($(this).is(":checked")) {
                                $("#festivaldiv").show();
                                $("#isBusiness").hide();
                            } else {
                                $("#festivaldiv").hide();
                                $("#isBusiness").show();
                            }
                        });
                    });
                </script>
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
