@extends('extra.master')
@section('title', 'Brand beans | Admin dashboard')
@section('content')


    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <h1>Admin Dashboard</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">

                        <h2>Total user</h2>
                        <h3>{{ $user }}</h3>
                    </div>
                </div>
            </div>

        </div>


    </div>


@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    // A $( document ).ready() block.
    $(document).ready(function() {
        var countValue = localStorage.getItem('count');
        if (countValue == 1) {

            localStorage.setItem('count', "0");
        }
    });
</script>
