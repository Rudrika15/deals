@extends('extra.master')
@section('title', 'Brand beans | Edit Offer')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit Offer</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('brand.offers') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('brand.offers.update') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf
                            <input type="hidden" name="offerId" value="{{ $offer->id }}">
                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title</label><span style="color: red">*</span>
                                    <input type="text" class="form-control" id="title" value="{{ old('title', $offer->title) }}" placeholder="Enter title" name="title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="offerPrice" class="form-label">Offer Price</label><span style="color: red">*</span>
                                    <input type="text" value="{{ old('offerPrice', $offer->offerPrice) }}" placeholder="Enter offer price" class="form-control" id="offerPrice" name="offerPrice">
                                    @error('offerPrice')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    {{-- suggestion: put location picker --}}
                                    <label for="location" class="form-label">Location</label><span style="color: red">*</span>
                                    <input type="text" value="{{ old('location', $offer->location) }}" placeholder="Enter location" class="form-control" id="location" name="location">
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="validity" class="form-label">Validity</label><span style="color: red">*</span>
                                    <input type="date" value="{{ old('validity', $offer->validity) }}" class="form-control" id="validity" name="validity">
                                    @error('validity')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="offerPhoto" class="form-label">Offer Photo</label><span style="color: red">*</span>
                                        <div class="row">
                                            <div class="col-md-7">
                                                <input type="file" accept="image/*" onchange="readURL(this,'#img1')" class="form-control" id="image" name="offerPhoto" require>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="image"></label>
                                                <img src="{{ asset('offerPhoto') }}/{{ $offer->offerPhoto }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:150px;max-height:100px;max-width:150px'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label><span style="color: red">*</span>
                                <textarea name="description" placeholder="Enter description" id="description" class="form-control">{{ old('description', $offer->description) }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="termsAndConditions" class="form-label">Terms & Conditions</label><span style="color: red">*</span>
                                <textarea name="termsAndConditions" placeholder="Enter termsAndConditions" id="termsAndConditions" class="form-control">{{ old('termsAndConditions', $offer->termsAndConditions) }}</textarea>
                                @error('termsAndConditions')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

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
