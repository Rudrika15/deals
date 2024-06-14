@extends('extra.master')
@section('title', 'Brand beans | Slogan Create')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Slogans Create</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('writer.slugs.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('writer.slugs.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="slugId" value="{{ $writer->id }}">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" value="{{ $writer->title }}" placeholder="Enter title" id="title" name="title">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select name="category" class="form-control">
                                    <option disabled selected>--select category--</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category', $writer->categoryId) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
