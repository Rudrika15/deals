<table class="table table-bordered table-responsive">
    <thead>
        <tr>
            <th> Campaign</th>
            <th> Title</th>
            <th> Detail</th>
            <th> Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($step as $data)
            <tr>
                @foreach ($data->campaign as $campaign)
                    <td>{{ $campaign->title }}</td>
                @endforeach
                <td>{{ $data->title }}</td>
                <td>{{ $data->detail }}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="{{ route('brand.campaign.step.edit') }}/{{ $data->id }}">Edit</a>
                    <a class="btn btn-danger btn-sm" href="{{ route('brand.campaign.step.delete') }}/{{ $data->id }}">Delete</a>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
