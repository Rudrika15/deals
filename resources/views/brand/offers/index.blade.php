@extends('extra.master')
@section('title', 'Brand Beans | Brand Offers')
@section('content')
<div class='container mt-4'>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="font-weight-bold mb-0">Brand Offers</h4>
                    <a href="{{ route('brand.offers.create') }}" class="btn btn-primary btn-sm">Add Offers</a>
                </div>
                <div class="card-body">
                    <table id="offersTable" class="table table-bordered table-striped table-hover table-responsive-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Photo</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Location</th>
                                <th class="text-center">Validity</th>
                                <th class="text-center">Terms & Conditions</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($offers as $index => $offer)
                            {{-- @foreach ($offers as $offer) --}}
                            <tr>
                                <td class="text-center">{{ $index+1 }}</td>
                                <td>{{ $offer->title }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('offerPhoto/' . $offer->offerPhoto) }}" class="img-thumbnail w-50">
                                </td>
                                <td>{{ $offer->description }}</td>
                                <td>{{ $offer->offerPrice }}</td>
                                <td>{{ $offer->location }}</td>
                                <td>{{ $offer->validity }}</td>
                                <td>{{ $offer->termsAndConditions }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group" aria-label="Actions">
                                        <a href="{{ route('brand.offers.edit', $offer->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteModal{{ $offer->id }}" title="Delete">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <!-- Delete Modal -->
                            <div class="modal fade" id="deleteModal{{ $offer->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{ $offer->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $offer->id }}">Delete Confirmation</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this offer?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                            <a href="{{ route('brand.offers.delete', $offer->id) }}" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<!-- Add Tooltip functionality -->
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

@endsection
