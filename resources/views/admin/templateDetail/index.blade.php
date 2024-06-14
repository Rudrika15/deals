@extends('extra.master')
@section('title', 'Brand beans | Template Details')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Template Details</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('adminTemplateDetail.store') }}" enctype="multipart/form-data" method="post" style="margin-top: 15px;">
                            @csrf

                            <input type="hidden" name="templateId" value="{{ request('id') }}">

                            <div class="mb-3">
                                <label for="" class="form-label">Title</label>
                                <select name="title" id="title" class="form-control">
                                    <option selected disabled>Select title</option>
                                    <option value="email">Email</option>
                                    <option value="location">Location</option>
                                    <option value="contact">Contact</option>
                                    <option value="website">Website</option>
                                </select>
                            </div>

                            <div class="row margin-top-10">
                                <div class="col-md-6">
                                    <label for="" class="form-label">Icon</label>
                                    <input type="file" accept='image/*' onchange="readURL(this,'#img1')" class="form-control" id="icon" name="icon" require>
                                </div>
                                <div class="col-md-6">
                                    <label for="image"></label>
                                    <img src="{{ url('images/default.jpg') }}" alt="{{ __('main image') }}" id="img1" style='min-height:100px;min-width:100px;max-height:100px;max-width:100px'>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Bottom</label>
                                <input type="text" class="form-control" id="bottom" name="bottom" require>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Left</label>
                                <input type="text" class="form-control" id="left" name="left" require>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Height</label>
                                <input type="text" class="form-control" id="height" name="height" require>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Width</label>
                                <input type="text" class="form-control" id="width" name="width" require>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Font Size</label>
                                <input type="text" class="form-control" id="fontSize" name="fontSize" require>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="" class="form-label">Text Width</label>
                                <input type="text" class="form-control" id="textWidth" name="textWidth" require>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="" class="form-label">Text Lenght</label>
                                <input type="text" class="form-control" id="textLength" name="textLength" require>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="" class="form-label">Frame Height</label>
                                <input type="text" class="form-control" id="frameHeight" name="frameHeight" require>
                            </div>
                            <br>
                            <div class="mb-3">
                                <label for="" class="form-label">Text Color</label>
                                <input type="color" class="form-control-color" id="textColor" name="textColor" require>
                            </div>
                            <br>

                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            </div>
                        </form>



                        <div class="table-responsive">
                            <table class="table table-bordered" style="margin-top: 15px;">
                                <thead>
                                    <tr>
                                        <th> Title</th>
                                        <th> Icon</th>
                                        <th> Bottom</th>
                                        <th> Left</th>
                                        <th> Height</th>
                                        <th> Width</th>
                                        <th> Font Size</th>
                                        <th> Text Width</th>
                                        <th> Text Color</th>
                                        <th> Text Length</th>
                                        <th> Frame Height</th>
                                        <th> Option</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tempDetail as $template)
                                        <tr>

                                            <td>{{ $template->title }}</td>
                                            <td>{{ $template->icon }}</td>
                                            <td>{{ $template->bottom }}</td>
                                            <td>{{ $template->left }}</td>
                                            <td>{{ $template->height }}</td>
                                            <td>{{ $template->width }}</td>
                                            <td>{{ $template->fontSize }}</td>
                                            <td>{{ $template->textWidth }}</td>
                                            <td>{{ $template->textColor }}</td>
                                            <td>{{ $template->textLength }}</td>
                                            <td>{{ $template->frameHeight }}</td>
                                            <td><a class="btn btn-primary btn-sm" href="{{ route('adminTemplateDetail.edit', $template->id) }}">Edit</a>
                                                <a class="btn btn-danger btn-sm" href="{{ route('adminTemplateDetail.delete', $template->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-content -->
                </div>
            @endsection
