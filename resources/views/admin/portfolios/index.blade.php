<x-AdminLayout>
    <x-slot name="title">
        - مدیریت نمونه کارها
    </x-slot>

    <div class="card rounded-4">
        <div class="card-body">
            <a href="{{ route('portfolios.create') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> افزودن نمونه کار جدید </a>
            <table class="table table-bordered mt-4">
                <thead>
                <tr>
                    <th scope="col" width="50px">#</th>
                    <th scope="col" width="100px">عکس</th>
                    <th scope="col" width="250px">عنوان</th>
                    <th scope="col">توضیحات</th>
                    <th scope="col" width="100px">دسته بندی</th>
                    <th scope="col" width="50px">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($portfolios as $row)
                    <tr>
                        <th scope="row">{{ $row->id }}</th>
                        <td>
                            <img src="{{ asset('files/portfolios/images/' . $row->image) }}" class="img-fluid" alt="" srcset="">
                        </td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->description }}</td>
                        <td>
                            @foreach($row->items as $rows)
                                {{ $rows->title }}
                            @endforeach
                        </td>
                        <td class="text-center">
                            <a href="{{ route('portfolios.edit', $row->id) }}"><i class="fa-duotone fa-edit text-secondary"></i></a>
                            <a onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash text-danger"></i></a>
                            <form id="trash-{{$row->id}}" action="{{ route('portfolios.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-AdminLayout>
