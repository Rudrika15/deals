@extends('extra.master')
@section('title', 'Brand beans | Brand Campaign')
@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Add Media</h3>
                    </div>

                    <div class="p-2">
                        <a href="{{ route('influencer.campaignApplyList') }}" class="btn btn-primary">Back</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('brand.campaign.appliersCreateStore') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf
                            <input type="hidden" name="campaignId" value="{{ $appliers->campaignId }}">
                            <input type="hidden" name="userId" value="{{ Auth::user()->id }}">

                            <label for="exampleInputPassword1" class="form-label">Media Type</label>
                            <select name="fileType" class="form-control" id="fileType">
                                <option disabled selected>--Select your option--</option>
                                <option>Photo</option>
                                <option>Video</option>
                            </select>
                            @if ($errors->has('fileType'))
                                <span class="text-danger">{{ $errors->first('fileType') }}</span>
                            @endif
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Media</label>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input type="file" onchange="readURL(this,'#img1')" class="form-control" id="image" name="photo" require>
                                            </div>
                                            <br>
                                            <div class="col-md-5">
                                                <label for="image"></label>
                                                <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:150px;max-height:100px;max-width:150px'>
                                            </div>
                                        </div>
                                        @if ($errors->has('photo'))
                                            <span class="text-danger">{{ $errors->first('photo') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <br>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>


                        <h3>Media </h3>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($checkApplyData as $image)
                                    <tr>
                                        <td>
                                            @if ($image->fileType == 'Photo')
                                                <img class="mt-3" src="{{ asset('checkApplyFile/' . $image->file) }}" alt="" style="height: 150px; width: 150px; border:8px solid white; box-shadow: 2px 2px 2px 2px lightblue; margin-left: 50px;">
                                            @else
                                                <video width="200" height="150" controls>
                                                    <source src="{{ asset('checkApplyFile/' . $image->file) }}" type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            @endif
                                        </td>
                                        <td>{{ $image->fileType }}</td>
                                        @if ($image->status == 'Approved')
                                            <td class="text-success">{{ $image->status }}</td>
                                        @endif
                                        @if ($image->status == 'Rejected')
                                            <td class="text-danger">{{ $image->status }}</td>
                                        @endif
                                        @if ($image->status == 'Pending')
                                            <td class="text-primary">{{ $image->status }}</td>
                                        @endif

                                        <td>
                                            <a class="fs-5 btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" href="{{ Route('appliedPhotoDelete') }}/{{ $image->id }}">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
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
