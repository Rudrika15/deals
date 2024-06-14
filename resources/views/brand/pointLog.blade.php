@extends('extra.master')
@section('title', 'Brand beans | Create Campaign Step')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="">
                        <h4 class="">{{ Auth::user()->name }}'s Point Logs</h4>
                    </div>
                    <div class="">
                        <h4> Total Points : <i>{{ $sum }}</i></h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <table id="" class="table table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th> Date</th>
                                    {{-- <th> Time</th> --}}
                                    <th> Remarks</th>
                                    <th> Points</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($brandPoints as $points)
                                    <tr>
                                        <td>{{ $points->created_at->format('d-m-Y') }} </td>
                                        {{-- <td>{{ $points->updated_at->format('H:i') }} </td> --}}
                                        <td>{{ $points->remark }} </td>
                                        <td>
                                            @if ($points->points < 0)
                                                <span class="text-danger">{{ $points->points }}</span>
                                            @else
                                                <span class="text-success">{{ $points->points }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        @if (!empty($brandPoints))
                            {{ $brandPoints->links() }}
                        @endif
                    </div>
                </div>
            </div>


        </div>

    </div>

@endsection
