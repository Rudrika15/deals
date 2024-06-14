@extends('extra.master')
@section('title', 'Brand beans | Edit State')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Edit State</h3>
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


                        <form action="{{ route('state.update') }}" method="post" style="margin-top: 15px;">
                            @csrf
                            <input type="hidden" name="stateid" id="stateid" value="{{ $state->id }}">
                            <div class="mb-3">
                                <label for="statename" class="form-label">State Name</label>
                                <input type="text" class="form-control" value="{{ $state->sname }}" id="statename" name="statename" required>
                            </div>
                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>



                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
