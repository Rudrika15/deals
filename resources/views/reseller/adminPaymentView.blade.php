@extends('extra.master')
@section('title', 'Brand beans | Reseller Payment Managment')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Reseller Payment Managment</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table id="example" class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th> Mobile No</th>
                                    {{-- <th> Status</th> --}}
                                    <th> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($passbook as $passbook)
                                    <tr>
                                        <td>{{ $passbook->mobileNumber }}</td>
                                        {{-- <td>{{ $passbook->status }}</td> --}}
                                        <td>
                                            <form action="{{ route('reseller.payment.updateStatus', ['id' => $passbook->id]) }}" method="POST">
                                                @csrf
                                                @method('PUT')

                                                @if ($passbook->status == 'Paid')
                                                    <button class="update-status btn btn-xs btn-rounded btn-bordered btn-success" data-user-id="{{ $passbook->id }}">Paid</button>
                                                @else
                                                    <button class="update-status btn btn-xs btn-rounded btn-bordered btn-danger" data-user-id="{{ $passbook->id }}">Pending</button>
                                                @endif

                                            </form>
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
@endsection
