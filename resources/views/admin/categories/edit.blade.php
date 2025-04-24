<x-AdminLayout>
    <x-slot name="title">
        - ویرایش دسته بندی
    </x-slot>

    <div class="col-md-4 offset-md-4">
        <div class="card rounded-4">
            <div class="card-body">
                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Input1" class="form-label">عنوان دسته بندی</label>
                        <input type="text" class="form-control rounded-5 @error('name') is-invalid @enderror" name="name" id="Input1" value="{{ $category->name }}">
                        @error('name') {{ $message }} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Select1" class="form-label">انتخاب دسته والد</label>
                        <select class="form-select rounded-5 @error('category_id') is-invalid @enderror" name="category_id" id="Select1" aria-label="Default select example">
                            <option selected>انتخاب کنید ... </option>
                            <option value="">ندارد</option>
                            @foreach($parentCategories as $row)
                                <option value="{{ $row->id}}" @if($row->id === $category->category_id) selected @endif>{{ $row->name }}</option>
                            @endforeach
                        </select>
                        @error('category_id') {{ $message }} @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5">به روز رسانی دسته بندی</button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
