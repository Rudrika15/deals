@extends('extra.master')
@section('title', 'Brand beans | Create Brand Category')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Add Brand </h3>
                    </div>

                    <div>
                        <a href="{{ route('admin.brand.list') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('admin.brand.store') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label><span style="color: red">*</span>
                                    <input type="text" class="form-control" id="name" value="{{ old('name') }}" placeholder="Enter name" name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label><span style="color: red">*</span>
                                    <input type="email" value="{{ old('email') }}" placeholder="Enter offer price" class="form-control" id="email" name="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="mobileno" class="form-label">Mobile Number</label><span style="color: red">*</span>
                                    <input type="text" value="{{ old('mobileno') }}" placeholder="Enter offer price" class="form-control" id="mobileno" name="mobileno">
                                    @error('mobileno')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Password</label><span style="color: red">*</span>
                                    <input type="password" value="{{ old('password') }}" placeholder="Enter offer price" class="form-control" id="password" name="password">
                                    @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Brand Category</label><span style="color: red">*</span>
                                    <select name="brandCategoryId" class="form-control" id="">
                                        <option value="">Select Category</option>
                                        @foreach ($brandCategories as $category)
                                            <option value="{{ $category->id }}"> {{ $category->categoryName }}</option>
                                        @endforeach
                                    </select>
                                    @error('brandCategoryId')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="password" class="form-label">Bussiness Category</label><span style="color: red">*</span>
                                    <select name="categoryId" class="form-control" id="">
                                        <option value="">Select Bussiness Category</option>
                                        @foreach ($businessCategory as $bcategory)
                                            <option value="{{ $bcategory->id }}"> {{ $bcategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('categoryId')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

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
