@extends('extra.master')
@section('title', 'Brand beans | User Custom Template')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>User Custom Template</h3>
                    </div>
                    <div class="">
                        <a href="{{ route('userTemplate.create') }}" class="btn btn-primary btn-sm">Add template</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table class="table table-bordered" style="margin-top: 15px;">
                            <thead>
                                <tr>
                                    <th> Photo</th>
                                    <th> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userTemplateMaster as $template)
                                    <tr>
                                        <td><img src="{{ asset('templateimages') }}/{{ $template->photo }}" class="img-thumbnail" style="width:50px;height:50px"></td>

                                        <td><a class="btn btn-primary btn-sm" href="{{ route('userTemplate.edit', $template->id) }}">Edit</a>
                                            <a class="btn btn-danger btn-sm" href="{{ route('userTemplate.delete', $template->id) }}">Delete</a>
                                            {{-- <a href="{{ route('userTemplate.index') }}/{{ $template->id }}" class="btn btn-info btn-sm">Template Detail</a> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card-content -->
            </div>

        </div>
    </div>


@endsection
