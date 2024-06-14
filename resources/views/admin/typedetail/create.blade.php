@extends('extra.master')
@section('title', 'Brand beans | Notification ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Notification Detail</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('typedetail.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('typedetail.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Type</label>
                                <select name="typeId" class="form-control" id="typeId">
                                    <option disabled selected>-- select type --</option>
                                    @foreach ($type as $type)
                                        <option value="{{ $type->id }}">{{ $type->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Photo</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="photo">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="image"></label>
                                        <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="photoHeight" class="form-label">Photo Height</label>
                                <input type="text" class="form-control" id="photoHeight" name="photoHeight">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="photoWidth" class="form-label">Photo Width</label>
                                <input type="text" class="form-control" id="photoWidth" name="photoWidth">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <input type="text" class="form-control" id="message" name="message">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="messageTop" class="form-label">Message Top</label>
                                <input type="text" class="form-control" id="messageTop" name="messageTop">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="messageBottom" class="form-label">Message Bottom</label>
                                <input type="text" class="form-control" id="messageBottom" name="messageBottom">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="messageColor" class="form-label">Message Color</label>
                                <input type="text" class="form-control" id="messageColor" name="messageColor">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="messageFontFamily" class="form-label">Message FontFamily</label>
                                <input type="text" class="form-control" id="messageFontFamily" name="messageFontFamily">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="messageFontSize" class="form-label">Message Font Size</label>
                                <input type="text" class="form-control" id="messageFontSize" name="messageFontSize">
                            </div>
                            <br>


                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Poster</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" accept='image/*' onchange="readURL(this,'#img2')" class="form-control" id="image" name="poster">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="image"></label>
                                        <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img2" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="posterHeight" class="form-label">Poster Height</label>
                                <input type="text" class="form-control" id="posterHeight" name="posterHeight">
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="posterWidth" class="form-label">Poster Width</label>
                                <input type="text" class="form-control" id="posterWidth" name="posterWidth">
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
