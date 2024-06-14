@extends('extra.master')
@section('title', 'Brand beans | Writer/Designer Report ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Writer/Designer Report</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">


                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="writer-tab" data-bs-toggle="tab" data-bs-target="#writer" type="button" role="tab" aria-controls="writer" aria-selected="true">Writer</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="designer-tab" data-bs-toggle="tab" data-bs-target="#designer" type="button" role="tab" aria-controls="designer" aria-selected="false">Designer</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="writer" role="tabpanel" aria-labelledby="writer-tab">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th> Name</th>
                                            <th> Email</th>
                                            <th> Contact Number</th>
                                            <th> Status</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($writer as $writerData)
                                            <tr>
                                                <td>{{ $writerData->name }}</td>
                                                <td>{{ $writerData->email }}</td>
                                                <td>{{ $writerData->mobileno }}</td>
                                                @if ($writerData->status == 'Active')
                                                    <td class="text-success">{{ $writerData->status }}</td>
                                                @else
                                                    <td class="text-danger">{{ $writerData->status }}</td>
                                                @endif
                                                <td><a href="{{ route('writer.report') }}/{{ $writerData->id }}" class="btn btn-sm btn-primary">View Report</a></td>

                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade" id="designer" role="tabpanel" aria-labelledby="designer-tab">
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th> Name</th>
                                            <th> Email</th>
                                            <th> Contact Number</th>
                                            <th> Status</th>
                                            <th> Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($designer as $designerData)
                                            <tr>
                                                <td>{{ $designerData->name }}</td>
                                                <td>{{ $designerData->email }}</td>
                                                <td>{{ $designerData->mobileno }}</td>
                                                @if ($designerData->status == 'Active')
                                                    <td class="text-success">{{ $designerData->status }}</td>
                                                @else
                                                    <td class="text-danger">{{ $designerData->status }}</td>
                                                @endif
                                                <td>
                                                    <a href="{{ route('designer.report') }}/{{ $designerData->id }}" class="btn btn-sm btn-primary">View Report</a>
                                                    <a href="{{ route('designer.cost') }}/{{ $designerData->id }}" class="btn btn-info btn-sm">Update Cost</a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>

                            </div>

                        </div>

                    </div>
                    <!-- /.card-content -->
                </div>
            </div>
        </div>
    </div>

@endsection
