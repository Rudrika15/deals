@extends('extra.master')
@section('title', 'Brand beans | Design Create')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Design Create</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('designer.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('designer.store') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf
                            <div class="mb-3">
                                <input type="hidden" value="{{ $slugId }}" name="slugId">
                                <input type="hidden" value="{{ $category }}" name="category">
                                <label for="mediaType" class="form-label">Media Type</label>
                                <select name="mediaType" id="mediaType" class="form-control">
                                    <option selected disabled>--Select your Media Type--</option>
                                    <option value="Photo">Photo</option>
                                    <option value="Video">Video</option>
                                </select>
                                @error('mediaType')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Source Path</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input type="file" onchange="readURL(this,'#img1')" class="form-control" id="image" name="sourcePath" require>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="image"></label>
                                                <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:150px;max-height:100px;max-width:150px'>
                                            </div>
                                        </div>
                                        <div id="warn" style="display: none;">
                                            <span class="text-danger h5">Please select video only</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Preview Path</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input type="file" accept='image/*' onchange="readURL(this,'#img')" class="form-control" id="image" name="previewPath" require>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="image"></label>
                                                <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img" style='min-height:100px;min-width:150px;max-height:100px;max-width:150px'>
                                            </div>
                                        </div>
                                        <div id="warn2" style="display: none;">
                                            <span class="text-danger h5">Please select video thumbnail</span>
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



    <script type="text/javascript">
        $(function() {
            $("#mediaType").change(function() {
                if ($(this).val() == "Video") {
                    $("#warn").show();
                    $("#warn2").show();
                } else {
                    $("#warn").hide();
                    $("#warn2").hide();
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
