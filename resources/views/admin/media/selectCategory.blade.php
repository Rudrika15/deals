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
                    {{-- <div class="p-2">
                        <a href="{{ route('admincategory.index') }}" class="btn btn-primary btn-sm">Add category</a>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="container">
                            <form action="{{ route('adminmedia.create') }}" method="get">
                                @csrf
                                <select name="category" class="form-control" id="dropdown">
                                    <option selected disabled>--select your category--</option>
                                    @foreach ($category as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                <br>
                                <div class="margin-top-10">
                                    <button class="btn btn-success">Add media</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
