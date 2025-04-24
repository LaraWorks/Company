<x-AdminLayout>
    <x-slot name="title">
        - مدیریت دسته بندی نمونه کار
    </x-slot>

    <div class="row">
        <div class="col-md-8">
            <div class="card rounded-4">
                <div class="card-body">
                    <table class="table table-bordered mt-4">
                        <thead>
                        <tr>
                            <th scope="col" width="50px">#</th>
                            <th scope="col">عنوان دسته بندی</th>
                            <th scope="col" width="200px">نامک دسته بندی</th>
                            <th scope="col" width="100px">عملیات</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $row)
                            <tr>
                                <th scope="row">{{ $row->id }}</th>
                                <td>{{ $row->title }}</td>
                                <td>{{ $row->slug }}</td>
                                <td class="text-center">
                                    <a href="{{ route('items.edit', $row->id) }}"><i class="fa-duotone fa-edit text-secondary"></i></a>
                                    <a onclick="event.preventDefault();document.getElementById('trash-{{$row->id}}').submit()"><i class="fa-duotone fa-trash text-danger"></i></a>
                                    <form id="trash-{{$row->id}}" action="{{ route('items.destroy', $row->id) }}" method="POST">@csrf @method('DELETE')</form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $items->links() }}
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card rounded-4">
                <div class="card-body">
                    <form action="{{ route('items.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="Input1" class="form-label">عنوان دسته بندی</label>
                            <input type="text" class="form-control rounded-5 @error('title') is-invalid @enderror" name="title" id="Input1">
                            @error('title') {{ $message }} @enderror
                        </div>
                        <div class="mb-3">
                            <label for="Input2" class="form-label">نامک</label>
                            <input type="text" class="form-control rounded-5 @error('slug') is-invalid @enderror" name="slug" id="Input2">
                            @error('slug') {{ $message }} @enderror
                        </div>
                        <button type="submit" class="btn btn-primary rounded-5">ثبت دسته بندی</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-AdminLayout>
