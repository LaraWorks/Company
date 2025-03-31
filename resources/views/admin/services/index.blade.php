<x-AdminLayout>
    <x-slot name="title">
        - مدیریت خدمات ما
    </x-slot>

    <div class="card rounded-4">
        <div class="card-body">
            <a href="{{ route('services.create') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> افزودن خدمات جدید </a>
            <table class="table table-bordered mt-4">
                <thead>
                <tr>
                    <th scope="col" width="50px">#</th>
                    <th scope="col" width="300px">عنوان</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col" width="200px">آیکون</th>
                    <th scope="col" width="100px">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->icon }}</td>
                        <td class="text-center">
                            <a href="{{ route('services.edit', $row->id) }}"><i class="fa-duotone fa-edit text-secondary"></i></a>
                            <a onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash text-danger"></i></a>
                            <form id="trash-{{$row->id}}" action="{{ route('services.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $services->links() }}
        </div>
    </div>
</x-AdminLayout>
