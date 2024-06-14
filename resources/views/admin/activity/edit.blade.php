@extends('extra.master')
@section('title', 'Brand beans | Brand Activity')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit Brand Activity</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('admin.brand.activity.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('admin.brand.activity.update') }}" method="post" style="margin-top:15px;">
                            @csrf
                            <input type="hidden" name="activityId" value="{{ $activity->id }}">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" value="{{ $activity->title }}" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
