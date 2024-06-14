@extends('extra.master')
@section('title', 'Brand beans | Passbook')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Passbook</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('reseller.passbook.code') }}" method="get">
                            @csrf
                            <div style="display: flex; justify-content: space-between;">
                                <div class="">
                                    <button class="btn btn-success btn-sm">Pay</button>
                                </div>
                                <div class="">
                                    <a href="{{ route('reseller.passbook') }}?type=Pending" class="btn btn-sm btn-info">Pending</a>
                                    <a href="{{ route('reseller.passbook') }}?type=Paid" class="btn btn-sm btn-success">Paid</a>
                                    <a href="{{ route('reseller.passbook') }}" class="btn btn-sm ">Reset</a>


                                </div>
                            </div>
                            <br>
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="selectAll"></th>
                                        <th> Mobile No</th>
                                        <th> Amount</th>
                                        <th> Package</th>
                                        <th> Status</th>
                                        <th> Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($passbook as $passbook)
                                        <tr>
                                            <td><input type="checkbox" class="userCheckbox" name="selectedUsers[]" value="{{ $passbook->id }}"></td>
                                            <td>{{ $passbook->mobileNumber }}</td>
                                            <td>{{ $passbook->amount }}</td>
                                            <td>{{ $passbook->package }}</td>
                                            <td>{{ $passbook->status }}</td>
                                            <td>{{ $passbook->date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </form>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // "Select All" checkbox functionality
            $('#selectAll').change(function() {
                $('.userCheckbox').prop('checked', $(this).prop('checked'));
            });

            // Update "Select All" checkbox status based on the individual checkboxes
            $('.userCheckbox').change(function() {
                $('#selectAll').prop('checked', $('.userCheckbox:checked').length === $('.userCheckbox').length);
            });
        });
    </script>
@endsection
