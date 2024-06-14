<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Option</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($writers as $writer)
            <tr>
                <td>{!! $writer->title !!}</td>
                <td>{{ $writer->category->name }}</td>
                <td>

                    <?php
                    $counter = 0;
                    foreach ($slugCount as $slugCountData) {
                        if ($slugCountData->slugId === $writer->id) {
                            $counter++;
                        }
                    }
                    ?>
                    @if ($counter < 10)
                        <a class="btn btn-primary btn-sm" href="{{ route('designer.create') }}/{{ $writer->id }}/{{ $writer->categoryId }}">Add
                            Design</a>
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
