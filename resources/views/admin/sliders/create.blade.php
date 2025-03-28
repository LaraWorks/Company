<x-AdminLayout>
    <x-slot name="title">
        - افزودن اسلایدر جدید
    </x-slot>

    <div class="col-md-4 offset-md-4">
        <div class="card rounded-4 mt-4">
            <div class="card-body">
                <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="Input1" class="form-label">عنوان :</label>
                        <input type="text" class="form-control rounded-5 @error('title') is-invalid @enderror" name="title" id="Input1">
                        <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Textarea1" class="form-label">توضیحات :</label>
                        <textarea class="form-control rounded-4 @error('description') is-invalid @enderror" name="description" id="Textarea1" rows="3"></textarea>
                        <div class="text-danger">@error('description') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">لینک به اسلایدر :</label>
                        <input type="text" class="form-control rounded-5 @error('link') is-invalid @enderror" name="link" id="Input2">
                        <div class="text-danger">@error('link') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">عکس اسلایدر :</label>
                        <input class="form-control rounded-5 @error('image') is-invalid @enderror" name="image" type="file" id="formFile">
                        <div class="text-danger">@error('image') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5">ایجاد اسلایدر</button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
