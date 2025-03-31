<x-AdminLayout>
    <x-slot name="title">
        - ویرایش خدمات
    </x-slot>
    <div class="col-md-4 offset-md-4">
        <div class="card rounded-4 mt-4">
            <div class="card-body">
                <form action="{{ route('services.update', $service->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Input1" class="form-label">عنوان :</label>
                        <input type="text" class="form-control rounded-5 @error('title') is-invalid @enderror" name="title" id="Input1" value="{{ $service->title }}">
                        <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">آیکون :</label>
                        <input type="text" class="form-control rounded-5 @error('icon') is-invalid @enderror" name="icon" id="Input2" value="{{ $service->icon }}">
                        <div class="text-danger">@error('icon') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Input3" class="form-label">توضیحات :</label>
                        <textarea class="form-control rounded-4 @error('description') is-invalid @enderror" name="description" id="Input3">{{ $service->description }}</textarea>
                        <div class="text-danger">@error('description') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5">یه روز رسانی خدمات</button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
