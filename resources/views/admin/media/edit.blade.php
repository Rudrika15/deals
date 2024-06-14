@extends('extra.master')
@section('title', 'Brand beans | Edit Category')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit Category</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('adminmedia.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('adminmedia.update') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf

                            <input type="hidden" name="mediaid" id="id" value="{{ request('id') }}">
                            <div style="margin-bottom: 10px;" class="mb-3">
                                <label for="mediaType" class="form-label">Media Type</label>
                                <select name="mediaType" id="mediaType" class="form-control" required>
                                    <option selected disabled>--Select your Media Type--</option>
                                    @if ($media->mediaType == 'Photo')
                                        <option value="Photo" selected>Photo</option>
                                        <option value="Video">Video</option>
                                    @else
                                        <option value="Video" selected>Video</option>
                                        <option value="Photo">Photo</option>
                                    @endif

                                </select>
                            </div>
                            <div style="margin-bottom: 10px;" class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select class="form-control" name="category" id="category" onchange="change_type()">
                                    <option selected disabled>--Select your Option--</option>
                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}" {{ old('category', $media->category) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <?php
                            
                            use Carbon\Carbon;
                            
                            $date = Carbon::now()->toDateString();
                            ?>

                            <div id="toshow" style="display: none;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">Starting Date</label>
                                        <input type="date" style="width: 100%;" value="{{ $date }}" id="startDate" class="form-control" aria-describedby="emailHelp" name="startDate">
                                        <script>
                                            $('#startDate').attr('min', new Date().toISOString().split('T')[0])
                                        </script>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="exampleInputEmail1" class="form-label">End Date</label>
                                        <input type="date" style="width: 100%;" value="{{ $date }}" class="form-control" id="endDate" aria-describedby="emailHelp" name="endDate">
                                        <script>
                                            $('#endDate').attr('min', new Date().toISOString().split('T')[0])
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div style="margin-bottom: 10px;" class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" value="{{ $media->title }}" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="sequence" class="form-label">sequence</label>
                                <input type="number" class="form-control" value="{{ $media->sequence }}" id="sequence" name="sequence">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div style="margin-bottom: 10px;" class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Preview Path</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input type="file" accept='image/*' onchange="readURL(this,'#img')" class="form-control" id="image" name="previewPath" require>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="image"></label>
                                                <img src="/mediapreviewimg/{{ $media->previewPath }}" alt="{{ __('main image') }}" id="img" style='min-height:100px;min-width:150px;max-height:100px;max-width:150px'>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div style="margin-bottom: 10px;" class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Source Path</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="sourcePath" require>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="image"></label>
                                                <img src="/mediasourceimg/{{ $media->sourcePath }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:150px;max-height:100px;max-width:150px'>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>



                            @if ($media->isPremium == 'yes')
                                <div style="margin-bottom: 10px;" class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" checked value="yes" id="isPremium" name="isPremium">
                                    <label class="form-check-label" for="isPremium">IS Premium</label>
                                </div>
                            @else
                                <div style="margin-bottom: 10px;" class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" value="yes" id="isPremium" name="isPremium">
                                    <label class="form-check-label" for="isPremium">IS Premium</label>
                                </div>
                            @endif
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>


                    </div>
                    <!-- /.card-content -->
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        var type = $("#category option:selected").text();
        if (type == "Festival" || type == "Today's Specials") {
            console.log("hi");
            $("#toshow").show();
        } else {
            $("#toshow").hide();
        }

        function change_type() {
            $("#toshow").hide(); //which element you want to hide or show
            var type = $("#category option:selected").text();
            if (type == "Festival" || type == "Today's Specials") {
                console.log("hi");
                $("#toshow").show();
            } else {
                $("#toshow").hide();
            }
        }
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
