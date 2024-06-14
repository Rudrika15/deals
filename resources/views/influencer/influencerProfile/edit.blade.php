@extends('layouts.app')
@section('header', 'Design')
@section('content')

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


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


    <div class="box-content card">
        <div class="" style="padding: 12px 10px 12px 10px; display: flex; justify-content: space-between; background-color: #03ACF0; color:white;">
            <div class="">
                <h4 class="">Edit Influencer Profile</h4>
            </div>
        </div>
        <div class="card-content">

            <form action="{{ route('influencer.profile.update') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                @csrf
                <input type="hidden" name="profileId" value="{{ $profile->id }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Contact Number</label>
                    <input type="text" class="form-control" id="name" value="{{ $profile->contactNo }}" name="contactNo" required>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Profile Photo</label>
                            <div class="row">
                                <div class="col-md-7">
                                    <input type="file" onchange="readURL(this,'#img1')" class="form-control" id="image" name="profilePhoto" require>
                                </div>
                                <div class="col-md-5">
                                    <label for="image"></label>
                                    <img src="{{ asset('profile') }}/{{ $user->profilePhoto }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Address</label>
                    <textarea name="address" class="form-control" id="address" cols="20" rows="5">{!! $profile->address !!}</textarea>
                </div>
                <br>

                <div class="mb-3">
                    <label for="name" class="form-label">Category</label>
                    <select name="categoryId" id="categoryId" class="form-control">
                        <option disabled selected>--Select Category--</option>
                        @foreach ($category as $category)
                            <option value="{{ $category->id }}" {{ old('category', $profile->categoryId) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <br>


                <button type="submit" class="btn btn-success btn-sm">Submit</button>
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
