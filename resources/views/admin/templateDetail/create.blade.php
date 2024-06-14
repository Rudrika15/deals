@extends('layouts.app')
@section('header', 'Template Master')
@section('content')


    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    @if ($message = Session::get('warning'))
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong><i class="fa fa-warning ico"></i> {{ $message }}</strong>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Oh snap!</strong> {{ __('There were some problems with your input') }}.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <div class="box-content card danger">
        <!-- /.box-title -->
        <div class="" style="padding: 12px 10px 12px 10px; display: flex; justify-content: space-between; background-color: #03ACF0; color:white;">
            <div class="">
                <h4 class="">Create Template</h4>
            </div>
            <div class="">
                <a href="{{ route('admintemplatemaster.index') }}" class="btn btn-success btn-sm">BACK</a>
                <!-- /.sub-menu -->
            </div>
        </div>
        <!-- /.dropdown js__dropdown -->
        <div class="card-content">


            <form action="{{ route('adminTemplateDetail.store') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
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

                <div class="col-md-12">
                    <input type="text" class="form-control" id="title" name="title" require>
                </div>




                <div class="text-center">
                    <button type="submit" class="btn btn-success btn-sm">Submit</button>
                </div>
            </form>


        </div>
        <!-- /.card-content -->
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
