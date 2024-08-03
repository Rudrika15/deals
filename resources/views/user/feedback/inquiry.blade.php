@extends('extra.master')
@section('title', 'Brand Beans | Inquiries')
@section('content')
<div class='container mt-4'>
    <div class='row mb-4'>
        <div class='col-md-12'>
            <div class="d-flex justify-content-between align-items-center">
                <h3>Inquiries</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($inq as $index => $inqItem)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $inqItem->name }}</td>
                                    <td class="text-center">{{ $inqItem->email }}</td>
                                    <td class="text-center">{{ $inqItem->phone }}</td>
                                    <td class="text-center">{{ $inqItem->message }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-3">
                            {{ $inq->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection