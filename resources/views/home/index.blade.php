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
            <div class="col-md-3">
                <div class="card rounded-3 text-center">
                    <div class="card-body">
                        <i class="fa-brands fa-laravel fa-4x"></i>
                        <h2 class="fs-4 fw-bold mt-3 mb-3">لورم ایپسوم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded-3 text-center">
                    <div class="card-body">
                        <i class="fa-brands fa-laravel fa-4x"></i>
                        <h2 class="fs-4 fw-bold mt-3 mb-3">لورم ایپسوم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card rounded-3 text-center">
                    <div class="card-body">
                        <i class="fa-brands fa-laravel fa-4x"></i>
                        <h2 class="fs-4 fw-bold mt-3 mb-3">لورم ایپسوم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
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
    {{-- About us --}}
    <section class="mt-5 mb-5">
        <div class="row">
            <div class="col-md-5">
                <figure>
                    <img src="{{ asset('img/Development.gif') }}" class="img-fluid rounded-5" alt="" srcset="">
                </figure>
            </div>
            <div class="col-md-7">
                <div class="title text-center">
                    <h2 class="fw-bold">درباره ما</h2>
                </div>
                <div class="mt-5">
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>

                    <ul>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                        <li>لورم ایپسوم</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- End About us --}}
    {{-- Portfolios --}}
    <section class="mb-3">
        <div class="title text-center">
            <h2 class="fw-bold">نمونه کارهای ما</h2>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <article class="portfolios">
                    <div class="img-box">
                        <img src="{{ asset('img/laravel.png') }}" class="img-fluid" alt="" srcset="">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="#" class="btn btn-outline-warning"><i class="fa-duotone fa-eye"></i> مشاهده نمونه کار </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4 mb-4">
                <article class="portfolios">
                    <div class="img-box">
                        <img src="{{ asset('img/laravel.png') }}" class="img-fluid" alt="" srcset="">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="#" class="btn btn-outline-warning"><i class="fa-duotone fa-eye"></i> مشاهده نمونه کار </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4 mb-4">
                <article class="portfolios">
                    <div class="img-box">
                        <img src="{{ asset('img/laravel.png') }}" class="img-fluid" alt="" srcset="">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="#" class="btn btn-outline-warning"><i class="fa-duotone fa-eye"></i> مشاهده نمونه کار </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4 mb-4">
                <article class="portfolios">
                    <div class="img-box">
                        <img src="{{ asset('img/laravel.png') }}" class="img-fluid" alt="" srcset="">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="#" class="btn btn-outline-warning"><i class="fa-duotone fa-eye"></i> مشاهده نمونه کار </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4 mb-4">
                <article class="portfolios">
                    <div class="img-box">
                        <img src="{{ asset('img/laravel.png') }}" class="img-fluid" alt="" srcset="">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="#" class="btn btn-outline-warning"><i class="fa-duotone fa-eye"></i> مشاهده نمونه کار </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-4 mb-4">
                <article class="portfolios">
                    <div class="img-box">
                        <img src="{{ asset('img/laravel.png') }}" class="img-fluid" alt="" srcset="">
                        <div class="overlay">
                            <div class="box">
                                <div class="content">
                                    <a href="#" class="btn btn-outline-warning"><i class="fa-duotone fa-eye"></i> مشاهده نمونه کار </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </section>
    {{-- End Portfolios --}}
    {{-- Company Statistics --}}
    <section class="mt-4 mb-4">
        <div class="title text-center">
            <h2 class="fw-bold">آمار شرکت</h2>
        </div>
        <div class="card text-center rounded-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <h1 class="fw-bold">100+</h1>
                        <p class="fw-bold">لورم ایپسوم</p>
                    </div>
                    <div class="col-md-3">
                        <h1 class="fw-bold">100+</h1>
                        <p class="fw-bold">لورم ایپسوم</p>
                    </div>
                    <div class="col-md-3">
                        <h1 class="fw-bold">100+</h1>
                        <p class="fw-bold">لورم ایپسوم</p>
                    </div>
                    <div class="col-md-3">
                        <h1 class="fw-bold">100+</h1>
                        <p class="fw-bold">لورم ایپسوم</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End Company Statistics  --}}
    {{-- Blog  --}}
    <section class="mt-4 mb-4">
        <div class="title text-center">
            <h2 class="fw-bold">وبلاگ</h2>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <article class="card rounded-4">
                    <div class="card-body">
                        <figure>
                            <img src="{{ asset('img/laravel.png') }}" class="img-fluid rounded-4" alt="" srcset="">
                        </figure>
                        <h2 class="fs-4 fw-bold">لورم ایپسوم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                        <div class="mt-3">
                            <i class="fa-duotone fa-heart"></i> 50
                            <div class="float-end">
                                <i class="fa-duotone fa-comment"></i> 50
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4 mb-3">
                <article class="card rounded-4">
                    <div class="card-body">
                        <figure>
                            <img src="{{ asset('img/laravel.png') }}" class="img-fluid rounded-4" alt="" srcset="">
                        </figure>
                        <h2 class="fs-4 fw-bold">لورم ایپسوم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                        <div class="mt-3">
                            <i class="fa-duotone fa-heart"></i> 50
                            <div class="float-end">
                                <i class="fa-duotone fa-comment"></i> 50
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-4 mb-3">
                <article class="card rounded-4">
                    <div class="card-body">
                        <figure>
                            <img src="{{ asset('img/laravel.png') }}" class="img-fluid rounded-4" alt="" srcset="">
                        </figure>
                        <h2 class="fs-4 fw-bold">لورم ایپسوم</h2>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                        <div class="mt-3">
                            <i class="fa-duotone fa-heart"></i> 50
                            <div class="float-end">
                                <i class="fa-duotone fa-comment"></i> 50
                            </div>
                        </div>
                    </div>
                </article>
            </div>

        </div>
    </section>
    {{-- End Blog --}}
    {{-- Footer --}}
    <footer class="card rounded-4 mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="fs-5 fw-bold"><i class="fa-duotone fa-circle"></i> درباره ما </h2>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد</p>
                </div>
                <div class="col-md-4">
                    <h2 class="fs-5 fw-bold"><i class="fa-duotone fa-link"></i> پیوند های مفید </h2>
                    <ul>
                        <li>تست</li>
                        <li>تست</li>
                        <li>تست</li>
                        <li>تست</li>
                        <li>تست</li>
                        <li>تست</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h2 class="fs-5 fw-bold"><i class="fa-duotone fa-share"></i> ارتباط با ما </h2>

                    <ul class="mt-4">
                        <li><i class="fa-duotone fa-mobile"></i> شماره موبایل : 0921000000</li>
                        <li><i class="fa-duotone fa-phone"></i> شماره تماس : 02100000000</li>
                        <li><i class="fa-duotone fa-at"></i> ایمیل : test@gmail.com </li>
                        <li><i class="fa-duotone fa-location"></i> آدرس شرکت : تهران - پردیس </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {{-- End Blog --}}
</x-HomeLayout>
