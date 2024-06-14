@extends('extra.master')
@section('title', 'Brand beans | Writer/Designer Report ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Update Cost</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('writer.designer.report') }}" class="btn btn-sm btn-primary">Back</a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('designer-cost.store') }}" method="post">
                            @csrf
                            @if ($cost)
                                <input type="hidden" name="userId" value="{{ $cost->userId }}">
                                <div class="mb-3">
                                    <label for="">Amount:</label>
                                    <input type="text" placeholder="Add or Update Amount of the creator.." name="amount" class="form-control" value="{{ $cost->amount }}">
                                    @error('amount')
                                        <span class="text-danger">Amount Field is required </span>
                                    @enderror
                                </div>
                            @else
                                <input type="hidden" name="userId" value="{{ request('id') }}">
                                <div class="mb-3">
                                    <label for="">Amount:</label>
                                    <input type="text" class="form-control" placeholder="Add or Update Amount of the creator.." name="amount">
                                    @error('amount')
                                        <span class="text-danger">Amount Field is required</span>
                                    @enderror
                                </div>
                            @endif
                            <div class="margin-top-20">
                                <button type="submit" class="btn btn-sm ">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
