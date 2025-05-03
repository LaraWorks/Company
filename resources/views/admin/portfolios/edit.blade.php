<x-AdminLayout>
    <x-slot name="title">
        - ویرایش نمونه کار
    </x-slot>

    <div class="col-md-8 offset-md-2">
        <div class="card rounded-4 mt-4">
            <div class="card-body">
                <form action="{{ route('portfolios.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="Input1" class="form-label">عنوان :</label>
                        <input type="text" class="form-control rounded-5 @error('title') is-invalid @enderror" name="title" id="Input1" value="{{ $portfolio->title }}">
                        <div class="text-danger">@error('title') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Textarea1" class="form-label">توضیحات :</label>
                        <textarea class="form-control rounded-4 @error('description') is-invalid @enderror" name="description" id="Textarea1" rows="3">{{ $portfolio->description }}</textarea>
                        <div class="text-danger">@error('description') {{ $message }} @enderror</div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Input2" class="form-label">تکنولوژی به کار رفته :</label>
                                <input type="text" class="form-control rounded-5 @error('technology') is-invalid @enderror" name="technology" id="Input2" value="{{ $portfolio->technology }}">
                                <div class="text-danger">@error('technology') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Input2" class="form-label">خدمت به کار رفته :</label>
                                <input type="text" class="form-control rounded-5 @error('service') is-invalid @enderror" name="service" id="Input2" value="{{ $portfolio->service }}">
                                <div class="text-danger">@error('service') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Input2" class="form-label">تاریخ ساخت :</label>
                                <input type="text" class="form-control rounded-5 @error('date') is-invalid @enderror" name="date" id="Input2" value="{{ $portfolio->date }}">
                                <div class="text-danger">@error('date') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="Input2" class="form-label">پیوند نمونه کار :</label>
                                <input type="text" class="form-control rounded-5 @error('url') is-invalid @enderror" name="url" id="Input2" value="{{ $portfolio->url }}">
                                <div class="text-danger">@error('url') {{ $message }} @enderror</div>
                            </div>
                        </div>

                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">عکس نمونه کار :</label>
                        <input class="form-control rounded-5 @error('image') is-invalid @enderror" name="image" type="file" id="formFile">
                        <div class="text-danger">@error('image') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5">ایجاد اسلایدر</button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
