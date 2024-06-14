@extends('extra.master')
@section('title', 'Brand beans | Create Media')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Media</h3>
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
                        <form action="{{ route('adminmedia.store') }}" enctype="multipart/form-data"method="post" style="margin-top: 15px;">
                            @csrf


                            <div class="mb-3">
                                <label for="mediaType" class="form-label">Category</label>
                                <input type="hidden" value="{{ $categoryId->id }}" id="category" name="category" class="form-control category">
                                <input type="text" readonly value="{{ $categoryId->name }}" id="category" name="" class="form-control category">
                            </div>
                            <div class="mb-3">
                                <label for="mediaType" class="form-label">Media Type</label>
                                <select name="mediaType" id="mediaType" class="form-control" required>
                                    <option selected disabled>--Select your Media Type--</option>
                                    <option value="Photo">Photo</option>
                                    <option value="Video">Video</option>
                                </select>
                            </div>

                            {{-- <div id="toshow" style="display: none;"> --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <?php
                                    
                                    use Carbon\Carbon;
                                    
                                    $date = Carbon::now()->toDateString();
                                    $date1 = Carbon::now();
                                    $date1 = $date1->addDays(1)->toDateString();
                                    ?>
                                    <label for="exampleInputEmail1" class="form-label">Starting Date</label>
                                    <input type="date" style="width: 100%;" value="{{ $date }}" id="startDate" class="form-control" aria-describedby="emailHelp" name="startDate">
                                    <script>
                                        $('#startDate').attr('min', new Date().toISOString().split('T')[0])
                                    </script>
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleInputEmail1" class="form-label">End Date</label>
                                    <input type="date" style="width: 100%;" class="form-control" value="{{ $date1 }}" id="endDate" aria-describedby="emailHelp" name="endDate">
                                    <script>
                                        $('#endDate').attr('min', new Date().toISOString().split('T')[0])
                                    </script>
                                </div>
                            </div>
                            {{-- </div> --}}
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="sequence" class="form-label">sequence</label>
                                <input type="number" class="form-control" id="sequence" name="sequence">
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

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" value="yes" id="isPremium" name="isPremium">
                                <label class="form-check-label" for="isPremium">IS Premium</label>
                            </div>

                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const type = document.getElementById('category').value;
        // console.log(type);
        $("#toshow").hide(); //which element you want to hide or show

        if (type == "Festival" || type == "Today's Specials") {
            $("#toshow").show();
        } else {
            $("#toshow").hide();
        }
    </script>

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
