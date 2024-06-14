@extends('extra.master')
@section('title', 'Brand beans | Media')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Media</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('adminmedia.selectCategory') }}" class="btn btn-primary btn-sm">Add Media</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('adminmedia.index') }}" method="get">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="category" class="form-control " width="100%" id="dropdown">
                                        <option selected disabled>--Search By Category Name--</option>
                                        @foreach ($category as $category)
                                            <option>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" name="title" placeholder="Search by Title" class="form-control input-sm">
                                </div>
                                <div class="col-md-12" style="display: flex; justify-content: end; padding-right: 200px; padding-top:10px">
                                    <button class="btn btn-sm btn-success" style="margin-right: 5px" value="filter" name="submit">Filter</button>
                                    <a href="{{ route('adminmedia.index') }}" class="btn btn-sm btn-danger">Reset</a>
                                </div>
                            </div>

                        </form>

                        <table id="" class="table table-bordered">
                            <thead>
                                <tr>
                                    <?php
                                    $i = 1;
                                    ?>
                                    <th> Sr No</th>
                                    <th> Media Type</th>
                                    <th> Category</th>
                                    <th> Source Path</th>
                                    <th> Is Premium </th>
                                    <th> Title</th>
                                    <th> Preview Path</th>
                                    <th> Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($media as $data)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->mediaType }}</td>
                                        <td>{{ $data->name }}</td>
                                        @if ($data->mediaType != 'Video')
                                            <td> <a href="{{ url('mediasourceimg') }}/{{ $data->sourcePath }}" target="_blank"> <img src="{{ url('mediasourceimg') }}/{{ $data->sourcePath }}" class="img-thumbnail" style="width:50px;height:50px"></a></td>
                                        @else
                                            <td><video height="100px" controls>
                                                    <source src="{{ url('mediasourceimg') }}/{{ $data->sourcePath }}" type="video/mp4">
                                                </video></td>
                                        @endif
                                        <td>{{ $data->isPremium }}</td>
                                        <td>{{ $data->title }}</td>
                                        <td> <a href="{{ url('mediapreviewimg') }}/{{ $data->previewPath }}" target="_blank"> <img src="{{ url('mediapreviewimg') }}/{{ $data->previewPath }}" class="img-thumbnail" style="width:50px;height:50px"></a></td>
                                        <td><a class="btn btn-primary btn-sm" data-id="$date->id" href="{{ route('adminmedia.edit', $data->id) }}">Edit</a> <a class="btn btn-danger btn-sm" href="{{ route('adminmedia.delete', $data->id) }}">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- {!! $media->withQueryString()->links('pagination::bootstrap-5') !!} -->
                        {!! $media->links() !!}


                    </div>
                </div>
                <!-- /.card-content -->
            </div>
        </div>
    </div>



@endsection
