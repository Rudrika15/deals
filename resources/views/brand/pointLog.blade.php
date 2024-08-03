@extends('extra.master')
@section('title', 'Brand Beans | Point Logs')
@section('content')
<div class='container mt-4'>
    <div class='row'>
        <div class='col-md-12'>
            <div class="d-flex justify-content-between mb-3">
                <h4>{{ Auth::user()->name }}'s Point Logs</h4>
                <h4>Total Points: <b><i class="text-success">{{ $sum }}</i></b></h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-body">
                    <table id="pointsTable" class="table table-bordered table-striped table-hover table-responsive-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Remarks</th>
                                <th class="text-center">Points</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $index = 1; ?>
                            @foreach ($brandPoints as $points)
                            <tr>
                                <td class="text-center">{{ $index++ }}</td>
                                <td class="text-center">{{ $points->created_at->format('d-m-Y') }}</td>
                                <td class="text-center">{{ $points->remark }}</td>
                                <td class="text-center">
                                    <span class="{{ $points->points < 0 ? 'text-danger' : 'text-success' }}"
                                        style="font-weight: bold; color: {{ $points->points < 0 ? 'red' : 'green' }};">
                                        {{ $points->points }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if (!empty($brandPoints))
                    <div class="d-flex justify-content-center mt-3">
                        {{ $brandPoints->links() }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add FontAwesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- Add jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
@endsection