@extends('extra.master')
@section('title', 'Brand beans | Edit Template Details')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit Template Details</h3>
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
                        <form action="{{ route('adminTemplateDetail.update') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf
                            <input type="hidden" name="templateDetailId" id="id" value="{{ $template->id }}">
                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <select name="title" id="title" class="form-control">
                                    <option selected disabled>Select title</option>
                                    <option value="email" {{ old('title', $template->title) === 'email' ? 'selected' : '' }}>Email</option>
                                    <option value="location" {{ old('title', $template->title) === 'location' ? 'selected' : '' }}>Location</option>
                                    <option value="contact" {{ old('title', $template->title) === 'contact' ? 'selected' : '' }}>Contact</option>
                                    <option value="website" {{ old('title', $template->title) === 'website' ? 'selected' : '' }}>Website</option>
                                </select>
                            </div>

                            <div class="row margin-top-10">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Icon</label>
                                    <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="icon" require>
                                </div>
                                <div class="col-md-6">
                                    <label for="image"></label>
                                    <img src="{{ asset('templateIcon') }}/{{ $template->icon }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                </div>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="" class="form-label">Bottom</label>
                                <input type="text" class="form-control" value="{{ $template->bottom }}" id="bottom" name="bottom" require>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="" class="form-label">Left</label>
                                <input type="text" class="form-control" id="left" value="{{ $template->left }}" name="left" require>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="" class="form-label">Height</label>
                                <input type="text" class="form-control" id="height" value="{{ $template->height }}" name="height" require>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="" class="form-label">Width</label>
                                <input type="text" class="form-control" id="width" value="{{ $template->width }}" name="width" require>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="" class="form-label">Font Size</label>
                                <input type="text" class="form-control" id="fontSize" value="{{ $template->fontSize }}" name="fontSize" require>
                            </div>
                            <br>
                            <div>
                                <label for="textColor" class="form-label">Text Width</label>
                                <input type="text" class="form-control" id="textWidth" value="{{ $template->textWidth }}" name="textWidth" require>
                            </div>
                            <br>
                            <div>
                                <label for="textColor" class="form-label">Text Lenght</label>
                                <input type="text" class="form-control" id="textLength" value="{{ $template->textLength }}" name="textLength" require>
                            </div>
                            <br>
                            <div>
                                <label for="textColor" class="form-label">Frame Height</label>
                                <input type="text" class="form-control" id="frameHeight" value="{{ $template->frameHeight }}" name="frameHeight" require>
                            </div>
                            <br>
                            <div>
                                <label for="textColor" class="form-label">Text Color</label>
                                <input type="color" class="form-control-color" id="textColor" value="{{ $template->textColor }}" name="textColor" require>
                            </div>
                            <br>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            </div>

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
