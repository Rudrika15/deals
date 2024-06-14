@extends('extra.master')
@section('title', 'Brand beans | Payment Report ')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Payment Report</h3>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive" style="margin-top: 15px;">

                            <table class="table table-bordered table-responsive">
                                <thead>
                                    <tr>
                                        <th> Screenshot</th>
                                        <th> User Name</th>
                                        <th> Action</th>
                                        <th> Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($report as $reports)
                                        <tr>
                                            <td><img src="{{ asset('paymentScreenshot') }}/{{ $reports->screenshot }}" alt="image" style="height: 300px; width: 300px;"></td>
                                            <td>{{ $reports->user->name }}</td>
                                            <td>
                                                @if ($reports->status == 'Pending')
                                                    <span class="badge bg-primary">{{ $reports->status }}</span>
                                                @elseif ($reports->status == 'Approved')
                                                    <span class="badge bg-success">{{ $reports->status }}</span>
                                                @elseif ($reports->status == 'Rejected')
                                                    <span class="badge bg-danger">{{ $reports->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <input type="hidden" name="userId" class="userId" value="{{ $reports->userId }}">
                                                <select name="status" id="" class="form-control statusDropdown" data-id="{{ $reports->id }}" style="width: 160px;">
                                                    <option selected disabled>--select status--</option>
                                                    <option value="Approved" @if ($reports->status == 'Approved') selected @endif>Approved</option>
                                                    <option value="Rejected" @if ($reports->status == 'Rejected') selected @endif>Rejected</option>
                                                </select>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    <script>
        $(document).ready(function() {
            $('.statusDropdown').change(function() {
                var selectedStatus = $(this).val();

                var url = "{{ route('paymentReport.changeStatus') }}";
                var selectedId = $(this).data('id');
                var userId = $(this).prev('.userId').val();
                var csrfToken = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    url: url,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    data: {
                        status: selectedStatus,
                        id: selectedId,
                        userId: userId,
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Status Updated',
                            text: 'Status updated to ' + selectedStatus,
                            showCancelButton: true,
                            confirmButtonText: 'Yes',
                            cancelButtonText: 'No',
                        }).then((result) => {
                            // Reload the page after the user confirms
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        }).then(() => {
                            // Update user table package field if status is approved
                            if (selectedStatus === 'Approved') {
                                // Make another AJAX request to update the user table
                                $.ajax({
                                    url: "{{ route('updateUserPackage') }}",
                                    method: 'POST',
                                    headers: {
                                        'X-CSRF-TOKEN': csrfToken
                                    },
                                    data: {
                                        id: selectedId,
                                        userId: userId,
                                    },
                                    success: function(response) {
                                        console.log('User package updated');
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(error);
                                    }
                                });
                            }
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle any errors that occur during the AJAX request
                        console.error(error);
                    }
                });
            });
        });
    </script>

@endsection
