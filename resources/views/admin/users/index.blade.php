<x-AdminLayout>
    <x-slot name="title">
        - مدیریت کاربران
    </x-slot>

    <div class="card rounded-4">
        <div class="card-body">
            <a href="{{ route('users.create') }}" type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> افزودن کاربر جدید </a>
            <table class="table table-bordered mt-4">
                <thead>
                <tr>
                    <th scope="col" width="50px">#</th>
                    <th scope="col">نام و نام خانوادگی</th>
                    <th scope="col" width="300px">ایمیل</th>
                    <th scope="col" width="100px">دسترسی</th>
                    <th scope="col" width="200px">تاریخ ایجاد</th>
                    <th scope="col" width="100px">عملیات</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($users as $row)
                        <tr>
                            <th scope="row">{{ $row->id }}</th>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->getRolePersian() }}</td>
                            <td>{{ $row->created_at }}</td>
                            <td class="text-center">
                                <a href="{{ route('users.edit', $row->id) }}"><i class="fa-duotone fa-edit text-secondary"></i></a>
                                <a onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash text-danger"></i></a>
                                <form id="trash-{{$row->id}}" action="{{ route('users.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
</x-AdminLayout>
