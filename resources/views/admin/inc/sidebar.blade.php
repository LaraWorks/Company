<!-- Sidebar -->
<div class="bg-light border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <figure class="imgLogo">
            <img src="../art/Ranger.png" alt="" srcset="">
        </figure>
    </div>
    <div class="text-center p-3">
        <figure class="avatar">
            <img src="img/1.jpg" class="img-fluid" alt="">
        </figure>
        <div class="mt-3">
            <a href="" class="btn btn-secondary btn-sm rounded-3" title="ویرایش پروفایل"><i class="fa-duotone fa-gear"></i></a>
            <a href="" class="btn btn-danger btn-sm rounded-3" title="خروج"><i class="fa-duotone fa-sign-out"></i></a>
        </div>
    </div>
    <div class="mt-3 p-3">
        <div class="d-grid gep-3">
            <a href="{{ route('index') }}" class="btn {{ request()->routeIs('index') ? 'btn-light text-start border-0 active' : 'btn-light text-start border-0' }} rounded-3 mb-2"><i class="fa-duotone fa-home me-2"></i> پیشخوان </a>
            <a href="{{ route('users.index') }}" class="btn {{ request()->routeIs('users.index') || request()->routeIs('users.create') || request()->routeIs('users.edit')? 'btn-light text-start border-0 active' : 'btn-light text-start border-0' }} rounded-3 mb-2"><i class="fa-duotone fa-users me-2"></i> کاربران </a>
            <a href="{{ route('categories.index') }}" class="btn {{ request()->routeIs('categories.index') || request()->routeIs('categories.create') || request()->routeIs('categories.edit')? 'btn-light text-start border-0 active' : 'btn-light text-start border-0' }} rounded-3 mb-2"><i class="fa-duotone fa-list-tree me-2"></i> دسته بندی </a>
            <a href="{{ route('sliders.index') }}" class="btn {{ request()->routeIs('sliders.index') || request()->routeIs('sliders.create') || request()->routeIs('sliders.edit')? 'btn-light text-start border-0 active' : 'btn-light text-start border-0' }} rounded-3 mb-2"><i class="fa-duotone fa-sliders me-2"></i> اسلایدرها </a>
            <a href="{{ route('services.index') }}" class="btn {{ request()->routeIs('services.index') || request()->routeIs('services.create') || request()->routeIs('services.edit')? 'btn-light text-start border-0 active' : 'btn-light text-start border-0' }} rounded-3 mb-2"><i class="fa-duotone fa-boxes-stacked me-2"></i> خدمات ما </a>
            <a href="{{ route('abouts.index') }}" class="btn {{ request()->routeIs('abouts.index') || request()->routeIs('abouts.create') || request()->routeIs('abouts.edit')? 'btn-light text-start border-0 active' : 'btn-light text-start border-0' }} rounded-3 mb-2"><i class="fa-duotone fa-user-pen me-2"></i> درباره ما </a>
        </div>
    </div>
</div>
<!-- /#sidebar-wrapper -->
