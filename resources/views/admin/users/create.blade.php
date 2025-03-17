<x-AdminLayout>
    <div class="col-md-4 offset-md-4">
        <div class="card rounded-4 mt-4">
            <div class="card-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="Input1" class="form-label">نام و نام خانوادگی :</label>
                        <input type="text" class="form-control rounded-5 @error('name') is-invalid @enderror" name="name" id="Input1">
                        <div class="text-danger">@error('name') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Input2" class="form-label">ایمیل :</label>
                        <input type="email" class="form-control rounded-5 @error('email') is-invalid @enderror" name="email" id="Input2">
                        <div class="text-danger">@error('email') {{ $message }} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="Input3" class="form-label">رمز عبور :</label>
                        <input type="password" class="form-control rounded-5 @error('password') is-invalid @enderror" name="password" id="Input3">
                        <div class="text-danger">@error('password') {{ $message }} @enderror</div>
                    </div>
                    <button type="submit" class="btn btn-primary rounded-5">ایجاد کاربر</button>
                </form>
            </div>
        </div>
    </div>
</x-AdminLayout>
