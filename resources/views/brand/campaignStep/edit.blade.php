@extends('extra.master')
@section('title', 'Brand beans | Edit Campaign Step')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit Campaign Step</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('brand.campaign.step.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('brand.campaign.step.update') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf

                            <input type="hidden" name="campaignStepId" value="{{ $step->id }}">

                            <div class="mb-3">
                                <label for="campaignId" class="form-label">Campaign</label>
                                <select name="campaignId" class="form-control" id="campaignId">
                                    <option disabled selected>--Select your Option</option>
                                    @foreach ($campaign as $campaign)
                                        <option value="{{ $campaign->id }}" {{ old('campaignId', $step->campaignId) == $campaign->id ? 'selected' : '' }}>{{ $campaign->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" value="{{ $step->title }}" id="title" name="title" required>
                            </div>

                            <div class="mb-3">
                                <label for="detail" class="form-label">Detail</label>
                                <textarea name="detail" id="detail" class="form-control" required>{{ $step->detail }}</textarea>
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
