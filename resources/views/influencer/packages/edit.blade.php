@extends('extra.master')
@section('title', 'Brand beans | Edit Influencer Package')
@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit Influencer Package</h3>
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

                        <form action="{{ route('influencer.package.update') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf
                            <input type="hidden" name="influencerPackageId" value="{{ $packages->id }}">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" value="{{ $packages->title }}" id="title" name="title" required>
                                @if ($errors->has('title'))
                                    <span class="error text-danger fs-6">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" class="form-control" value="{{ $packages->price }}" id="price" name="price" required>
                                @if ($errors->has('price'))
                                    <span class="error text-danger fs-6">{{ $errors->first('price') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea type="text" class="form-control" id="tinymce" name="description" required>{{ $packages->description }}</textarea>
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
