<x-AdminLayout>
    <x-slot name="title">
        - مدیریت اسلایدرها
    </x-slot>

    <div class="card rounded-4">
        <div class="card-body">
            <a href="{{ route('sliders.create') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> افزودن اسلایدر جدید </a>
            <table class="table table-bordered mt-4">
                <thead>
                <tr>
                    <th scope="col" width="50px">#</th>
                    <th scope="col" width="100px">عکس</th>
                    <th scope="col" width="300px">عنوان</th>
                    <th scope="col" width="300px">توضیحات</th>
                    <th scope="col" width="100px">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sliders as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>
                            <img src="{{ asset('files/sliders/images/' . $row->image) }}" class="img-fluid" alt="" srcset="">
                        </td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->description }}</td>
                        <td class="text-center">
                            <a href="{{ route('sliders.edit', $row->id) }}"><i class="fa-duotone fa-edit text-secondary"></i></a>
                            <a onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash text-danger"></i></a>
                            <form id="trash-{{$row->id}}" action="{{ route('sliders.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $sliders->links() }}
        </div>
    </div>
</x-AdminLayout>
