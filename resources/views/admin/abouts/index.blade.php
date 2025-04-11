<x-AdminLayout>
    <x-slot name="title">
        - مدیریت درباره ما
    </x-slot>

    <div class="card rounded-4">
        <div class="card-body">
            <a href="{{ route('abouts.create') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> افزودن درباره جدید </a>
            <table class="table table-bordered mt-4">
                <thead>
                <tr>
                    <th scope="col" width="50px">#</th>
                    <th scope="col" width="300px">عکس</th>
                    <th scope="col">عنوان</th>
                    <th scope="col" width="100px">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($abouts as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>
                            <img src="{{ asset('files/about/images/' . $row->image) }}" class="img-fluid" alt="" srcset="">
                        </td>
                        <td>{{ $row->title }}</td>
                        <td class="text-center">
                            <a href="{{ route('abouts.edit', $row->id) }}"><i class="fa-duotone fa-edit text-secondary"></i></a>
                            <a onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash text-danger"></i></a>
                            <form id="trash-{{$row->id}}" action="{{ route('abouts.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $abouts->links() }}
        </div>
    </div>
</x-AdminLayout>
