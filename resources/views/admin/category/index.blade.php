@extends('extra.master')
@section('title', 'Brand beans | Create Category')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Create Category</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('admincategory.create') }}" class="btn btn-primary btn-sm">Add category</a>
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
                                    <?php
                                    $i = 1;
                                    ?>
                                    <th> Sr No</th>
                                    <th> Category</th>
                                    <th> Icon Path</th>
                                    <th> Starting Date</th>
                                    <th> End Date</th>
                                    <th> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category as $data)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td> <a href="{{ url('categoryimg') }}/{{ $data->iconPath }}" target="_blank"> <img src="{{ url('categoryimg') }}/{{ $data->iconPath }}" class="img-thumbnail" style="width:50px;height:50px"></a></td>
                                        <td>{{ $data->startDate }}</td>
                                        <td>{{ $data->endDate }}</td>
                                        <td><a class="btn btn-primary btn-sm" href="{{ route('admincategory.edit', $data->id) }}">Edit</a> <a class="btn btn-danger btn-sm" href="{{ route('admincategory.delete', $data->id) }}">Delete</a>
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

@endsection
