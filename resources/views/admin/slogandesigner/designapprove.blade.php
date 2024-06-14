@extends('extra.master')
@section('title', 'Brand beans | Approval')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Approval</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('admindesign.designapproveCode') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf
                            <input type="hidden" name="designId" value="{{ $data->id }}">
                            <div class="mb-3 text-center">
                                <label>Slogan</label><br>
                                <span class="h3">{!! $data->Slogan !!}</span>

                            </div>
                            <div class="row ">
                                <div class="col-md-4">
                                    Source Path <br>
                                    <a href="{{ url('designsourceimg') }}/{{ $data->sourcePath }}" target="_blank">
                                        <img src="{{ url('designsourceimg') }}/{{ $data->sourcePath }}" style="height: 200px; width: 300px;" alt="image">
                                    </a>
                                </div>

                                <div class="col-md-4">
                                    Preview Path <br>
                                    <a href="{{ url('designpreviewpath') }}/{{ $data->previewPath }}" target="_blank">
                                        <img src="{{ url('designpreviewpath') }}/{{ $data->previewPath }}" style="height: 200px; width: 300px;" alt="image">
                                    </a>
                                </div>
                            </div>
                            <br>

                            <div class="mb-3">
                                <label for="title" class=" fw-bold">Designer Name</label> &nbsp;
                                <span>{{ $data->UserName }}</span>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="fw-bold">Category Name</label> &nbsp;
                                <span>{{ $data->CategoryName }}</span>
                            </div>


                            <div class="mb-3 form-check ">
                                <label class="mx-5">
                                    <input type="radio" class="form-check-input" value="isFestival" name="type" id="isFestival">
                                    IS Festival</label>

                                <label>
                                    <input type="radio" class="form-check-input" value="today" name="type" id="today">
                                    Today's Spacial</label>
                            </div>

                            <?php
                            
                            use Carbon\Carbon;
                            
                            $date = Carbon::now()->toDateString();
                            $date1 = Carbon::now();
                            $date1 = $date1->addDays(1)->toDateString();
                            ?>

                            <div class="isFestival selectt" style="padding-left: 50px; display: none;">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Starting Date</label>
                                    <input type="date" style="width: 50%;" id="startDate" value="{{ $date }}" class="form-control" aria-describedby="emailHelp" name="startDate">
                                    <script>
                                        $('#startDate').attr('min', new Date().toISOString().split('T')[0])
                                    </script>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">End Date</label>
                                    <input type="date" style="width: 50%;" class="form-control" id="endDate1" aria-describedby="emailHelp" name="endDate">
                                    <script>
                                        $('#endDate').attr('min', new Date().toISOString().split('T')[0])
                                    </script>
                                </div>
                            </div>

                            <div class="today selectt" style="padding-left: 50px; display: none;">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Starting Date</label>
                                    <input type="date" style="width: 50%;" id="startDate1" value="{{ $date }}" class="form-control" aria-describedby="emailHelp" name="startDate1">
                                    <script>
                                        $('#startDate1').attr('min', new Date().toISOString().split('T')[0])
                                    </script>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">End Date</label>
                                    <input type="date" style="width: 50%;" class="form-control" value="{{ $date1 }}" id="endDate" aria-describedby="emailHelp" name="endDate1">
                                    <script>
                                        $('#endDate1').attr('min', new Date().toISOString().split('T')[0])
                                    </script>
                                </div>
                            </div>


                            <br>
                            <div style="display: flex; justify-content: end;">

                                <button type="submit" class="btn btn-success btn-sm">Approved</button>
                            </div>
                        </form>



                    </div>
                </div>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                var inputValue = $(this).attr("value");
                var targetBox = $("." + inputValue);
                $(".selectt").not(targetBox).hide();
                $(targetBox).show();
            });
        });
    </script>
@endsection
