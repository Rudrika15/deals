@extends('extra.master')
@section('title', 'Brand beans | Brands')
@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col-md-12'>
                <div class="d-flex justify-content-between mb-3">
                    <div class="p-2">
                        <h3>Steps</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table">

                            <thead>
                                <tr>
                                    <th>Steps</th>
                                    <th>Details</th>
                                    <!-- <th>Status</th> -->
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($campaignStep as $data)
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->detail }}</td>
                                        <td>
                                            <?php
                                            $counter = 0;
                                            foreach ($content as $contentData) {
                                                if ($contentData->stepId === $data->id) {
                                                    $counter++;
                                                }
                                            }
                                            ?>
                                            @if ($counter < 1)
                                                <button class="btn btn-sm btn-success" data-remodal-target="remodal-{{ $data->id }}" href="#">Upload Step</button>
                                                form in new page pending
                                            @endif

                                            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Upload your content Proof</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('influencer.campaign.step.store') }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" value="{{ $data->id }}" name="stepId">
                                                                <input type="hidden" value="{{ request('campaignId') }} " name="campaignId">
                                                                <label for="uploadActivityPhoto">Upload Screenshot</label>
                                                                <input type="file" class="form-control" name="uploadActivityPhoto" id="uploadActivityPhoto">
                                                                <span><b>OR</b></span>
                                                                <br>
                                                                <label for="uploadActivityPhoto">Upload URL</label>
                                                                <input type="text" class="form-control" name="uploadActivityLink" id="uploadActivityLink" placeholder="Put your URL here..">
                                                                <br>
                                                                <button type="submit" class="btn btn-success btn-sm">Submit</button>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Understood</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="remodal" data-remodal-id="remodal-{{ $data->id }}" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
                                                <button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>
                                                <div class="remodal-content">
                                                    <h2 id="modal1Title"></h2>
                                                    <p id="modal1Desc">

                                                    </p>
                                                </div>
                                            </div>
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


@endsection
