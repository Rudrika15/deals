@extends('extra.master')
@section('title', 'Brand beans | Brand Packages Details ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Brand Packages Details</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('admin.brand.package.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.brand.package.detail.store') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf
                            <input type="hidden" name="brandPackageId" value="{{ request('id') }}">
                            <div class="mb-3">
                                <label for="points" class="form-label">Activity</label>
                                <select name="activityId" id="activityId" class="form-control">
                                    <option selected disabled>--Select Activity for package detail--</option>
                                    @foreach ($activity as $activity)
                                        <option value="{{ $activity->id }}">{{ $activity->title }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('activityId'))
                                    <span class="error text-danger fs-6">{{ $errors->first('activityId') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="points" class="form-label">points</label>
                                <input type="number" class="form-control" value="{{ old('points') }}" id="points" name="points" required>
                                @if ($errors->has('points'))
                                    <span class="error text-danger fs-6">{{ $errors->first('points') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="details" class="form-label">Details</label>
                                <textarea type="text" class="form-control" id="" name="details" required>{{ old('details') }}</textarea>
                                @if ($errors->has('details'))
                                    <span class="error text-danger fs-6">{{ $errors->first('details') }}</span>
                                @endif
                            </div>

                            <br>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>
                    </div>


                    <div class="table-responsive">

                        <div class="table-responsive" style="margin-top: 15px;">

                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th> Activity</th>
                                        <th> Points</th>
                                        <th> Details</th>
                                        <th> Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($packageDetail as $data)
                                        <tr>
                                            @foreach ($data->activity as $activityData)
                                                <td>{{ $activityData->title }}</td>
                                            @endforeach
                                            <td>{{ $data->points }}</td>
                                            <td>{!! $data->details !!}</td>
                                            <td>
                                                {{-- <a class="btn btn-primary btn-sm" href="{{ route('admin.brand.package.edit') }}/{{ $data->id }}">Edit</a> --}}
                                                <a class="btn btn-danger btn-sm" href="{{ route('admin.brand.package.detail.delete') }}/{{ $data->id }}">Delete</a>
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
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".showForm").click(function() {
                $(".formArea").toggle(500);
            });
        });
    </script>

@endsection
