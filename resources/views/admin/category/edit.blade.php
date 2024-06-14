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
                        <a href="{{ route('admincategory.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('admincategory.update') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <input type="hidden" value="{{ $category->id }}" name="id">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="{{ $category->name }}" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Icon Path</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="image" name="iconPath" require>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="image"></label>
                                        {{-- "/storage/images/{{ $profile->images }}" --}}
                                        <img src="/categoryimg/{{ $category->iconPath }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                    </div>
                                </div>

                            </div>

                            @if ($category->isFestival == 'yes')
                                <div class="mb-3 form-check">
                                    <label>
                                        <input type="radio" class="form-check-input" checked value="yes" name="type" id="isFestival">
                                        IsFestival</label>
                                </div>
                                <div id="festivaldiv ps-3">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Starting Date</label>
                                        <input type="date" id="startDate" class="form-control" aria-describedby="emailHelp" name="startDate" required>
                                        <script>
                                            $('#startDate').attr('min', new Date().toISOString().split('T')[0])
                                        </script>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="endDate" aria-describedby="emailHelp" name="endDate" required>
                                        <script>
                                            $('#endDate').attr('min', new Date().toISOString().split('T')[0])
                                        </script>
                                    </div>
                                </div>
                            @else
                                <div class="mb-3 form-check">
                                    <label>
                                        <input type="radio" class="form-check-input" value="yes" name="type" id="isFestival">
                                        IS Festival</label>
                                </div>

                                <div class="festivaldiv  ps-3">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Starting Date</label>
                                        <input type="date" id="startDate" class="form-control" aria-describedby="emailHelp" name="startDate" required>
                                        <script>
                                            $('#startDate').attr('min', new Date().toISOString().split('T')[0])
                                        </script>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">End Date</label>
                                        <input type="date" class="form-control" id="endDate" aria-describedby="emailHelp" name="endDate" required>
                                        <script>
                                            $('#endDate').attr('min', new Date().toISOString().split('T')[0])
                                        </script>
                                    </div>
                                </div>
                            @endif


                            <br>
                            @if ($category->isBusiness == 'yes')
                                <div class="mb-3 form-check" id="isBusiness">
                                    <label>
                                        <input type="radio" class="form-check-input" checked value="yes" name="type" id="exampleCheck1">
                                        IS Business</label>
                                </div>
                            @else
                                <div class="mb-3 form-check" id="isBusiness">
                                    <label>
                                        <input type="radio" class="form-check-input" value="yes" name="type" id="exampleCheck1">
                                        IS Business</label>
                                </div>
                            @endif


                            <div class="mb-3">
                                <label for="sequence" class="form-label">sequence</label>
                                <input type="number" class="form-control" value="{{ $category->sequence }}" id="sequence" name="sequence">
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

    <script>
        $(function() {
            $("#isFestival").click(function() {
                if ($(this).is(":checked")) {
                    $("#festivaldiv").show();
                } else {
                    $("#festivaldiv").hide();
                    $("#isBusiness").show();
                }
            });
        });
    </script>



@endsection
