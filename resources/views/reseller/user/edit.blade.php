@extends('extra.master')
@section('title', 'Brand beans | Edit User')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit User</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('reseller.user.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('reseller.user.update') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <input type="hidden" name="userId" id="id" value="{{ $user->id }}">

                            <div class="mb-3">
                                <label for="mobileno" class="form-label">Mobile No</label>
                                <input type="text" class="form-control" id="mobileno" aria-describedby="mobileno" value="{{ $user->mobileno }}" name="mobileno">
                                @error('mobileno')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="package" class="form-label">Package</label>
                                <select name="package" class="form-control" id="package">
                                    <option>select your package</option>
                                    @foreach ($package as $packageData)
                                        <option value="{{ $packageData->title }}" {{ old('package', $user->package) == $packageData->title ? 'selected' : '' }}>{{ $packageData->title }}</option>
                                    @endforeach
                                </select>
                                @error('package')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
