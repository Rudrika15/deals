@extends('extra.master')
@section('title', 'Brand beans | Designs')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Designs</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('adminslogan.adminslogan') }}" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <label for="">
                                        Category
                                        <select name="category" class="form-control input-sm" width="100%" id="dropdown">
                                            <option selected disabled>--Search By Category Name--</option>
                                            @foreach ($category as $category)
                                                <option>{{ $category->name }}</option>
                                            @endforeach
                                        </select>
                                    </label>

                                </div>
                                <div class="col-md-6">
                                    <label for="">
                                        Enter Name
                                        <input type="text" placeholder="Search By User Name" name="userName" class="form-control input-sm">
                                    </label>
                                </div>
                            </div>
                            <button class="btn btn-success mt-2" type="submit" value="filter" name="submit">Filter</button>
                        </form>
                        <div class="d-flex justify-content-end">

                            <a href="{{ route('admindesign.admindesign') }}?type=Approved" id="sp1" class="btn btn-sm btn-success" style="margin-right: 5px;">Approved</a>
                            <a href="{{ route('admindesign.admindesign') }}?type=Pending" id="sp2" class="btn btn-sm btn-primary" style="margin-right: 5px;">Pending</a>
                            <a href="{{ route('admindesign.admindesign') }}?type=Rejected" id="sp2" class="btn btn-sm btn-danger" style="margin-right: 5px;">Rejected</a>
                            <a href="{{ route('admindesign.admindesign') }}" id="sp2" class="btn btn-sm btn-secondary" style="margin-right: 5px;">Reset</a>

                        </div>
                        <div class="table-responsive">

                            <div class="table-responsive mt-3">

                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            {{-- <th> Media Type</th> --}}
                                            <th> Category</th>
                                            <th> Designed By</th>
                                            <th> Slogan</th>
                                            {{-- <th> Title</th> --}}
                                            <th> Sequence</th>
                                            <th> Source Path</th>
                                            <th> Preview Path</th>
                                            <th> Status</th>
                                            <th width="150px"> Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($design as $data)
                                            <tr>
                                                {{-- <td>{{ $data->mediaType }}</td> --}}
                                                <td>{{ $data->categoryName }}</td>
                                                <td>{{ $data->userName }}</td>
                                                <td class="text-primary">{!! $data->slugName !!}</td>
                                                {{-- <td>{{ $data->title }}</td> --}}
                                                <td>{{ $data->sequence }}</td>


                                                @if ($data->mediaType == 'Photo')
                                                    <td><a href="{{ url('designsourceimg') }}/{{ $data->sourcePath }}" target="_blank">
                                                            <img src="{{ url('designsourceimg') }}/{{ $data->sourcePath }}" class="img-thumbnail" style="width:50px;height:50px">
                                                        </a>
                                                    </td>
                                                @else
                                                    <td> <video width="300" class="img-thumbnail" height="300" controls>
                                                            <source src="{{ url('designsourceimg') }}/{{ $data->sourcePath }}" type="video/mp4">
                                                        </video></td>
                                                @endif
                                                <td>
                                                    <a href="{{ url('designpreviewpath') }}/{{ $data->previewPath }}" target="_blank">
                                                        <img src="{{ url('designpreviewpath') }}/{{ $data->previewPath }}" class="img-thumbnail" style="width:50px;height:50px">
                                                </td>
                                                @if ($data->status == 'Pending')
                                                    <td class="text-primary"><b>{{ $data->status }}</b></td>
                                                @elseif($data->status == 'Rejected')
                                                    <td class="text-danger"><b>{{ $data->status }}</b></td>
                                                @else
                                                    <td class="text-success"><b>{{ $data->status }}</b></td>
                                                @endif

                                                @if ($data->status != 'Approved')
                                                    <td>
                                                        <a href="{{ route('admindesign.approve') }}/{{ $data->id }}" class="btn btn-success btn-sm" name="Approve" value="Approve">Approve</a>
                                                        <form action="{{ route('admindesign.reject') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="designId" value="{{ $data->id }}">
                                                            <button class="btn btn-danger btn-sm" name="Reject" value="Reject" type="submit" onclick="return confirm('Do you really want to Reject?')">Reject</button>
                                                        </form>
                                                    </td>
                                                @endif
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
