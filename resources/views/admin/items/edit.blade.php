<x-AdminLayout>
    <x-slot name="title">
        - ویرایش دسته بندی
    </x-slot>

    <div class="col-md-4 offset-md-4">
        <div class="card rounded-4">
            <div class="card-body">
                <form action="{{ route('items.update', $item->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Input1" class="form-label">عنوان دسته بندی</label>
                        <input type="text" class="form-control rounded-5 @error('title') is-invalid @enderror" name="title" id="Input1" value="{{ $item->title }}">
                        @error('title') {{ $message }} @enderror
                    </div>
                    <div class="mb-3">
                        <label for="Input1" class="form-label">نامک :</label>
                        <input type="text" class="form-control rounded-5 @error('slug') is-invalid @enderror" name="slug" id="Input1" value="{{ $item->slug }}">
                        @error('slug') {{ $message }} @enderror
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5">به روز رسانی دسته بندی</button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
