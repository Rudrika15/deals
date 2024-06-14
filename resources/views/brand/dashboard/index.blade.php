@extends('extra.master')
@section('title', 'Brand beans | Brand Dashboard')
@section('content')


    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <h1>Brand Dashboard</h1>
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
