<x-AdminLayout>
    <div class="card rounded-4">
        <div class="card-body">
            <button type="button" class="btn btn-primary rounded-5"><i class="fa-duotone fa-plus"></i> افزودن کاربر جدید </button>
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
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>
                    <td class="text-center">
                        <i class="fa-duotone fa-edit"></i>
                        <i class="fa-duotone fa-trash text-danger"></i>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</x-AdminLayout>
