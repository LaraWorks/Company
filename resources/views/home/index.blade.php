<x-HomeLayout>
    {{-- header --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary mt-5 rounded-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">نشان</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">خانه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">پیوند</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            دیگر ...
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2 rounded-5" type="search" placeholder="جستجو در سایت ..." aria-label="Search">
                </form>
                <button class="btn btn-primary rounded-5" type="button">ورود و عضویت</button>
            </div>
        </div>
    </nav>
    {{-- End Header--}}
    {{-- Slider --}}
    <section class="mt-3 mb-3">
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/1.jpg') }}" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/2.jpg') }}" class="d-block w-100 rounded-3" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/3.jpg') }}" class="d-block w-100 rounded-3" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    {{-- End Slider--}}
    {{-- Services --}}
    <section class="mt-3 mb-3">
        <div class="title text-center">
            <h2 class="fw-bold">خدمات ما</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card rounded-3 text-center">
                    <div class="card-body">
                        <i class="fa-brands fa-laravel fa-4x"></i>
                        <h2 class="fs-4 fw-bold mt-3 mb-3">لورم ایپسوم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-3 text-center">
                    <div class="card-body">
                        <i class="fa-brands fa-laravel fa-4x"></i>
                        <h2 class="fs-4 fw-bold mt-3 mb-3">لورم ایپسوم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card rounded-3 text-center">
                    <div class="card-body">
                        <i class="fa-brands fa-laravel fa-4x"></i>
                        <h2 class="fs-4 fw-bold mt-3 mb-3">لورم ایپسوم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Services --}}
</x-HomeLayout>
