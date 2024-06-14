@extends('extra.master')
@section('title', 'Brand beans | Slogans')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Slogan</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="py-3">

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
                        </div>
                        <div class="text-end">
                            <a href="{{ route('adminslogan.adminslogan') }}?type=Approved" id="sp1" class="btn btn-sm btn-success" style="margin-right: 5px;">Approved</a>
                            <a href="{{ route('adminslogan.adminslogan') }}?type=Pending" id="sp2" class="btn btn-sm btn-primary" style="margin-right: 5px;">Pending</a>
                            <a href="{{ route('adminslogan.adminslogan') }}?type=Rejected" id="sp2" class="btn btn-sm btn-danger" style="margin-right: 5px;">Rejected</a>
                            <a href="{{ route('adminslogan.adminslogan') }}" id="sp2" class="btn btn-sm btn-secondary" style="margin-right: 5px;">Reset</a>
                        </div>


                        <div class="table-responsive">

                            <div class="table-responsive" style="margin-top: 15px;">

                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th> Title</th>
                                            <th> Category</th>
                                            <th> Write By</th>
                                            <th> End Date</th>
                                            <th> Status</th>
                                            <th> Option</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($writer as $data)
                                            <tr>
                                                <td>{!! $data->title !!}</td>
                                                <td>{{ $data->categoryName }}</td>
                                                <td>{{ $data->userName }}</td>
                                                <td>{{ $data->endDate }}</td>
                                                @if ($data->status == 'Pending')
                                                    <td class="text-primary"><b>{{ $data->status }}</b></td>
                                                @elseif($data->status == 'Rejected')
                                                    <td class="text-danger"><b>{{ $data->status }}</b></td>
                                                @else
                                                    <td class="text-success"><b>{{ $data->status }}</b></td>
                                                @endif

                                                @if ($data->status != 'Approved')
                                                    <td>
                                                        <form action="{{ route('adminslogan.approve') }}" method="post">
                                                            @csrf
                                                            <input type="hidden" name="slugId" value="{{ $data->id }}">
                                                            <button class="btn btn-success btn-sm" name="Approve" value="Approve" type="submit" onclick="return confirm('Do you really want to Approve?')">Approve</button>
                                                            <button class="btn btn-danger btn-sm" name="Reject" value="Reject" type="submit" onclick="return confirm('Do you really want to Reject?')">Reject</button>
                                                        </form>
                                                    </td>
                                                @else
                                                    {{-- <td><button data-remodal-target="remodal{{ $data->id }}" class="btn btn-sm btn-violet">Change Date</button></td> --}}
                                                @endif
                                            </tr>


                                            {{-- <div class="remodal" data-remodal-id="remodal{{ $data->id }}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                            <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                            <div class="remodal-content">
                                                <h2 id="modal1Title">Remodal</h2>
                                                <form action="{{ route('slogan.changeDate') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="sloganId" value="{{ $data->id }}">
                                                    <div class="input-group">
                                                        <input type="date" class="form-control" name="endDate" id="datepicker">
                                                        <span class="input-group-addon bg-primary text-white"><i class="fa fa-calendar"></i></span>
                                                    </div>
                                            </div>
                                            <button type="sumbit" class="remodal-confirm">OK</button>
                                            </form>
                                            <button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
                                        </div> --}}
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
