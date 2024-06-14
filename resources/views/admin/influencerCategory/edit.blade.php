@extends('extra.master')
@section('title', 'Brand beans | Edit Influencer Category')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit Influencer Category</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('influencer.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <form action="{{ route('influencer.update') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf
                            <input type="hidden" name="influencerCategoryId" value="{{ $category->id }}">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" value="{{ $category->name }}" name="name" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Category Icon</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input type="file" onchange="readURL(this,'#img1')" class="form-control" id="image" name="categoryIcon" require>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="image"></label>
                                                <img src="{{ asset('influencerCategory') }}/{{ $category->categoryIcon }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:150px;max-height:100px;max-width:150px'>
                                            </div>
                                        </div>
                                    </div>
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
