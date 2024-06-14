@extends('extra.master')
@section('title', 'Brand beans | Writer/Designer Report ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Writer Report</h3>
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

                        <strong>
                            Name = {{ $data->name }}
                            <br>
                            Email = {{ $data->email }}
                            <br>
                            Contact Number = {{ $data->mobileno }}
                            <br>
                            total Slogans = {{ $totalSlogans }}
                            <br>
                            Approved Slogans = {{ $approvedSlogans }}
                            <br>
                            Rejected Slogans = {{ $rejectedSlogans }}
                            <br>
                            Pending Slogans = {{ $pendingSlogans }}
                        </strong>


                    </div>
                    <!-- /.card-content -->
                </div>
            </div>
        </div>
    </div>

@endsection
