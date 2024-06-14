@extends('extra.master')
@section('title', 'Brand beans | Create City')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create City</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('city.index') }}" class="btn btn-primary btn-sm">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <form action="{{ route('city.store') }}" method="post" style="margin-top: 15px;">
                            @csrf
                            <div class="mb-3">
                                <label for="cityname" class="form-label">City Name</label>
                                <input type="text" class="form-control" id="cityname" name="cityname" required>
                            </div>
                            <div class="mb-3">
                                <label for="statename" class="form-label">State Name</label>
                                <select name="statename" class="form-control" id="statename">
                                    @foreach ($state as $state)
                                        <option value="{{ $state->id }}">{{ $state->sname }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <button type="submit" class="btn btn-success btn-sm">Submit</button>
                        </form>

                    </div>

                </div>
            </div>
        </div>
    </div>





@endsection
