@extends('extra.master')
@section('title', 'Brand beans | Notification ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Notification Detail</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('typedetail.create') }}" class="btn btn-primary btn-sm">Add Notication Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th> Type</th>
                                        <th> Photo</th>
                                        <th> Photo Height</th>
                                        <th> Photo Width</th>
                                        <th> Message</th>
                                        <th> Message Top</th>
                                        <th> Message Bottom</th>
                                        <th> Message Color</th>
                                        <th> Message Font Family</th>
                                        <th> Message Font Size</th>
                                        <th> Poster</th>
                                        <th> Poster Height</th>
                                        <th> Poster Width</th>
                                        <th> Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($typedetail as $typedetail)
                                        <tr>
                                            <td>{{ $typedetail->title }}</td>
                                            <td><img src="{{ url('typedetailphoto') }}/{{ $typedetail->photo }}" class="img-thumbnail" style="width:50px;height:50px"></td>
                                            <td>{{ $typedetail->photoHeight }}</td>
                                            <td>{{ $typedetail->photoWidth }}</td>
                                            <td>{{ $typedetail->message }}</td>
                                            <td>{{ $typedetail->messageTop }}</td>
                                            <td>{{ $typedetail->messageBottom }}</td>
                                            <td>{{ $typedetail->messageColor }}</td>
                                            <td>{{ $typedetail->messageFontFamily }}</td>
                                            <td>{{ $typedetail->messageFontSize }}</td>
                                            <td><img src="{{ url('typedetailposter') }}/{{ $typedetail->poster }}" class="img-thumbnail" style="width:50px;height:50px"></td>
                                            <td>{{ $typedetail->posterHeight }}</td>
                                            <td>{{ $typedetail->posterWidth }}</td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="{{ route('typedetail.edit', $typedetail->id) }}">Edit</a>
                                                <a class="btn btn-danger btn-sm" href="{{ route('typedetail.delete', $typedetail->id) }}">Delete</a>
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
    </div>

@endsection
