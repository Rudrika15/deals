@extends('extra.master')
@section('title', 'Brand beans | Edit Influencer Package')
@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Add Package</h3>
                    </div>
                    <div class="">
                        <a href="{{ route('influencer.package.index') }}" class="btn btn-primary btn-sm">BACK</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('influencer.package.store') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>

                                <select name="title" id="title" class="form-control">
                                    <option selected disabled>--Select your option--</option>
                                    <option value="Basic" @if (old('title') == 'Basic') selected @endif>Basic</option>
                                    <option value="Standard" @if (old('title') == 'Standard') selected @endif>Standard</option>
                                    <option value="Premium" @if (old('title') == 'Premium') selected @endif>Premium</option>
                                </select>
                                @if ($errors->has('title'))
                                    <span class="error text-danger fs-6">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" value="{{ old('price') }}" id="price" name="price" required>
                                @if ($errors->has('price'))
                                    <span class="error text-danger fs-6">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="tinymce" name="description" required>{{ old('description') }}</textarea>
                                @if ($errors->has('description'))
                                    <span class="error text-danger fs-6">{{ $errors->first('description') }}</span>
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
