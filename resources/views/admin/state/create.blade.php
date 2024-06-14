@extends('extra.master')
@section('title', 'Brand beans | Create State')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create State</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('state.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <form action="{{ route('state.store') }}" method="post" style="margin-top: 15px;">
                            @csrf
                            <div class="mb-3">
                                <label for="statename" class="form-label">State Name</label>
                                <input type="text" class="form-control" id="statename" name="statename" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
