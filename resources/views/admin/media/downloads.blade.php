@extends('extra.master')
@section('title', 'Brand beans | Create Media')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Downloads </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admindownload.index') }}">
                            <div class="row">
                                <div class="col-md-6 ">
                                    <b> Start Date</b>
                                    <input type="date" class="form-control input-sm" name="startDate">
                                </div>
                                <div class="col-md-6">
                                    <b> End Date</b>
                                    <input type="date" class="form-control input-sm" name="endDate">
                                </div>
                                <div class="col-md-6">
                                    <b> Category</b>
                                    <select name="category" class="form-control input-sm" width="100%" id="dropdown">
                                        <option selected disabled>--Search By Category Name--</option>
                                        @foreach ($category as $category)
                                            <option>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <b> User Name</b>
                                    <input type="text" name="name" class="form-control input-sm" placeholder="Search by User Name">
                                </div>

                                <div class="col-md-6 pt-2">
                                    <button class="btn btn-success" type="submit" value="filter" name="submit">Filter</button>
                                    <a href="{{ route('admindownload.index') }}" class="btn btn-danger">Reset</a>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
            <div class="table-responsive mt-3">
                <table id="" class="table table-bordered">
                    <thead>
                        <tr>
                            <th> Category</th>
                            <th> User Name</th>
                            <th> Date </th>
                            <th> Package </th>
                            <th> Media </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mymedia as $mymediaData)
                            <tr>
                                <td>{{ $mymediaData->categoryname }}</td>
                                <td>{{ $mymediaData->username }}</td>
                                <td>{{ $mymediaData->date }}</td>
                                <td>{{ $mymediaData->package }}</td>
                                <td> <a href="{{ url('mymedia') }}/{{ $mymediaData->media }}" target="_blank"> <img src="{{ url('mymedia') }}/{{ $mymediaData->media }}" class="img-thumbnail" style="width:50px;height:50px"></a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <!-- /.card-content -->
    </div>

@endsection
