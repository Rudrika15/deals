@extends('extra.master')
@section('title', 'Brand beans | My Designs')
@section('content')
    <div class='container'>
        <!-- Add this to your Blade template -->

        <div class='row pt-5'>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>My designs</h3>
                    </div>
                    <div class="p-2">
                        {{-- <a href="{{ route('writer.slugs.create') }}" class="btn btn-primary">Add Slogans</a> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    {{-- <th> Media Type</th> --}}
                                    <th> Category</th>
                                    <th> Slogan</th>
                                    <th> Title</th>
                                    <th> Sequence</th>
                                    <th> Source Path</th>
                                    <th> Preview Path</th>
                                    <th> Status</th>
                                    <th width="15%"> Option</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($design as $data)
                                    <tr>
                                        {{-- <td>{{ $data->mediaType }}</td> --}}
                                        <td>{{ $data->categoryName }}</td>
                                        <td>{!! $data->slugName !!}</td>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->sequence }}</td>

                                        @if ($data->mediaType == 'Photo')
                                            <td><img src="{{ url('designsourceimg') }}/{{ $data->sourcePath }}" class="img-thumbnail" style="width:50px;height:50px"></td>
                                        @else
                                            <td> <video width="300" class="img-thumbnail" height="300" controls>
                                                    <source src="{{ url('designsourceimg') }}/{{ $data->sourcePath }}" type="video/mp4">
                                                </video></td>
                                        @endif
                                        <td><img src="{{ url('designpreviewpath') }}/{{ $data->previewPath }}" class="img-thumbnail" style="width:50px;height:50px"></td>
                                        @if ($data->status == 'Pending')
                                            <td class="text-primary"><b>{{ $data->status }}</b></td>
                                        @elseif($data->status == 'Rejected')
                                            <td class="text-danger"><b>{{ $data->status }}</b></td>
                                        @else
                                            <td class="text-success"><b>{{ $data->status }}</b></td>
                                        @endif

                                        <td>
                                            @if ($data->status != 'Approved')
                                                <a class="btn btn-primary btn-sm" href="{{ route('designer.edit') }}/{{ $data->id }}">Edit</a>
                                                <a class="btn btn-danger btn-sm" href="{{ route('designer.delete') }}/{{ $data->id }}">Delete</a>
                                            @endif
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
