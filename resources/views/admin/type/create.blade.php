@extends('extra.master')
@section('title', 'Brand beans | Notification ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Notification</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('type.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('type.store') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
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
