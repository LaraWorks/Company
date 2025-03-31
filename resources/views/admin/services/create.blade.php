<x-AdminLayout>
    <x-slot name="title">
        - ایجاد خدمات جدید
    </x-slot>
    <div class="col-md-4 offset-md-4">
        <div class="card rounded-4 mt-4">
            <div class="card-body">
                <form action="{{ route('services.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Input1" class="form-label">عنوان :</label>
                        <input type="text" class="form-control rounded-5 @error('title') is-invalid @enderror" name="title" id="Input1">
                        <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">آیکون :</label>
                        <input type="text" class="form-control rounded-5 @error('icon') is-invalid @enderror" name="icon" id="Input2">
                        <div class="text-danger">@error('icon') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Input3" class="form-label">توضیحات :</label>
                        <textarea class="form-control rounded-4 @error('description') is-invalid @enderror" name="description" id="Input3"></textarea>
                        <div class="text-danger">@error('description') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5">ایجاد خدمات</button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
