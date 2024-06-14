@extends('extra.master')
@section('title', 'Brand beans | Create Brand Category')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Add Offer for {{ $user->name }}</h3>
                    </div>

                    <div>
                        <a href="{{ route('admin.brand.list') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('brand.offers.store') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    <label for="title" class="form-label">Title</label><span style="color: red">*</span>
                                    <input type="text" class="form-control" id="title" value="{{ old('title') }}" placeholder="Enter title" name="title">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="offerPrice" class="form-label">Offer Price</label><span style="color: red">*</span>
                                    <input type="text" value="{{ old('offerPrice') }}" placeholder="Enter offer price" class="form-control" id="offerPrice" name="offerPrice">
                                    @error('offerPrice')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-2">
                                <div class="col-md-6">
                                    {{-- suggestion: put location picker --}}
                                    <label for="location" class="form-label">Location</label><span style="color: red">*</span>
                                    <input type="text" value="{{ old('location') }}" placeholder="Enter location" class="form-control" id="location" name="location">
                                    @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="validity" class="form-label">Validity</label><span style="color: red">*</span>
                                    <input type="date" value="{{ old('validity') }}" class="form-control" id="validity" name="validity">
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
                                                <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:150px;max-height:100px;max-width:150px'>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label><span style="color: red">*</span>
                                <textarea name="description" placeholder="Enter description" id="description" class="form-control">{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="termsAndConditions" class="form-label">Terms & Conditions</label><span style="color: red">*</span>
                                <textarea name="termsAndConditions" placeholder="Enter termsAndConditions" id="termsAndConditions" class="form-control">{{ old('termsAndConditions') }}</textarea>
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
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">

                    <table id="" class="table table-bordered table-responsive">
                        <thead>
                            <tr>
                                <th> Title</th>
                                <th> Photo</th>
                                <th> Description</th>
                                <th> Price</th>
                                <th> Location</th>
                                <th> Validity</th>
                                <th> Terms & Conditions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($offers as $offer)
                                <tr>
                                    <td>{{ $offer->title }} </td>
                                    <td><img src="{{ asset('offerPhoto') }}/{{ $offer->offerPhoto }}" class="img-thumbnail w-50"> </td>
                                    <td>{{ $offer->description }} </td>
                                    <td>{{ $offer->offerPrice }} </td>
                                    <td>{{ $offer->location }} </td>
                                    <td>{{ $offer->validity }} </td>
                                    <td>{{ $offer->termsAndConditions }} </td>
                                    <td>
                                        <a href="{{ route('brand.offers.delete', $offer->id) }}" class="btn btn-danger btn-sm">Delete</a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>

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
