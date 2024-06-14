@extends('extra.master')
@section('title', 'Brand beans | Create Category')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Category</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('admincategory.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admincategory.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('name') }}" name="name">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Icon Path</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="iconPath">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="image"></label>
                                        <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                    </div>
                                </div>
                                <!-- <div class="box-content" style="width: 200px;">
                                                        <input type="file" id="input-file-now-custom-1" class="dropify" name="iconPath" data-default-file="http://placehold.it/1000x667" />
                                                </div> -->
                            </div>


                            <div class="mb-3 form-check ">
                                <label class="mx-5">
                                    <input type="radio" class="form-check-input" value="isFestival" name="type" id="isFestival">
                                    IS Festival</label>
                                <label>
                                    <input type="radio" class="form-check-input" value="isBusiness" name="type" id="isBusiness">
                                    IS Business</label>
                            </div>


                            <div class="isFestival selectt" style="padding-left: 50px; display: none;">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Starting Date</label>
                                    <input type="date" style="width: 50%;" id="startDate" class="form-control" aria-describedby="emailHelp" name="startDate">
                                    <script>
                                        $('#startDate').attr('min', new Date().toISOString().split('T')[0])
                                    </script>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">End Date</label>
                                    <input type="date" style="width: 50%;" class="form-control" id="endDate" aria-describedby="emailHelp" name="endDate">
                                    <script>
                                        $('#endDate').attr('min', new Date().toISOString().split('T')[0])
                                    </script>
                                </div>
                            </div>




                            <br>
                            <div class="mb-3">
                                <label for="sequence" class="form-label">sequence</label>
                                <input type="number" class="form-control" id="sequence" value="{{ old('sequence') }}" name="sequence">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>




                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        // $(function() {
        //     $("#isFestival").click(function() {
        //         if ($(this).is(":checked")) {
        //             $("#festivaldiv").show();
        //         } else {
        //             $("#festivaldiv").hide();
        //             $("#isBusiness").show();
        //         }
        //     });
        // });

        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".selectt").not(targetBox).hide();
                $(targetBox).show();
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
