@extends('extra.master')
@section('title', 'Brand Beans | Feedbacks')
@section('content')
<div class='container mt-4'>
    <div class='row mb-4'>
        <div class='col-md-12'>
            <div class="d-flex justify-content-between align-items-center">
                <h3>Feedbacks</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-lg rounded">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($feeds as $index => $feed)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td class="text-center">{{ $feed->name }}</td>
                                    <td class="text-center">{{ $feed->email }}</td>
                                    <td class="text-center">{{ $feed->message }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end mt-3">
                            {{ $feeds->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection