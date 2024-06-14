@extends('extra.master')
@section('title', 'Brand beans | Template')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Template</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('admintemplatemaster.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <form action="{{ route('admintemplatemaster.store') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf
                            <label for="exampleInputPassword1" class="form-label">Photo</label>
                            <div class="row margin-bottom-10">
                                <div class="col-md-6">
                                    <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="photo" require>
                                </div>
                                <div class="col-md-6">
                                    <label for="image"></label>
                                    <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                </div>
                            </div>




                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            </div>
                        </form>


                    </div>
                    <!-- /.card-content -->
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
