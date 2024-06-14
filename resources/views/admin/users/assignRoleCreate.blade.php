@extends('extra.master')
@section('title', 'Brand beans | AssignRole Create')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>User Edit</h3>
                    </div>
                    <div class="p-2">
                        <a href="{{ route('users.assignRole') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('users.assignRoleCreateCode') }}" method="post">

                            @csrf
                            {{-- {{ $user }} --}}
                            <input type="hidden" name="userId" value="{{ $user->id }}">
                            <label for="" class="form-label">Name</label>
                            <input type="text" class="form-control text-muted" value="{{ $user->name }}" readonly id="" />


                            <div class="mb-3">
                                <label for="" class="form-label">Roles</label>
                                {!! Form::select('roles[]', $roles, $userRole, ['class' => 'form-control', 'multiple']) !!}
                                <small id="helpId" class="form-text text-muted">Use CTRL+Click for select multiple roles</small>
                            </div>

                            <div class="mb-3 text-center">
                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>

    </div>


@endsection
