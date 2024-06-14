@extends('extra.master')
@section('title', 'Brand beans | Create Packages ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Packages </h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('admin.brand.package.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('admin.brand.package.store') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" value="{{ old('title') }}" id="title" name="title" required>
                                @if ($errors->has('title'))
                                    <span class="error text-danger fs-6">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">price</label>
                                <input type="text" class="form-control" value="{{ old('price') }}" id="price" name="price" required>
                                @if ($errors->has('price'))
                                    <span class="error text-danger fs-6">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="points" class="form-label">points</label>
                                <input type="text" class="form-control" value="{{ old('points') }}" id="points" name="points" required>
                                @if ($errors->has('points'))
                                    <span class="error text-danger fs-6">{{ $errors->first('points') }}</span>
                                @endif
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
