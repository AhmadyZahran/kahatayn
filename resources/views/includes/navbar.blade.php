 <!-- Navbar Start -->
 <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">


    <nav class="navbar navbar-expand-lg navbar-dark py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="/" class="navbar-brand ms-4 ms-lg-0">
            <img src="{{ asset('img/hand.png') }}" alt="" style="width:55%; height:auto;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="/" class="nav-item nav-link active">الصفحة الرئيسية</a>
                <a href="/show/events" class="nav-item nav-link">الفعاليات</a>
                <a href="/about" class="nav-item nav-link">حول الموقع</a>
                <a href="/contact" class="nav-item nav-link">اتصل بنا</a>
            </div>

            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-primary py-2 px-3" href="/donateshow">
                    تبرع الآن
                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                        <i class="fa fa-arrow-left"></i>
                    </div>
                </a></div>

                @auth
                {{-- (Auth::user()) --}}
            <div class="d-none d-lg-flex ms-2">
                <a class="btn btn-outline-primary py-2 px-3" href="/profile">
                    حسابي
                    <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                        <i class="fa fa-user"></i>
                    </div>
                </a></div>

                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-primary py-2 px-3" href="/logout">
                        تسجيل الخروج
                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">

                            <i class="fa fa-door-closed"></i>
                                                    </div>
                    </a></div>


                    @else
                    <div class="d-none d-lg-flex ms-2">
                        <a class="btn btn-outline-primary py-2 px-3" href="../login">
                            تسجيل الدخول
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">

    <i class="fa fa-door-open"></i>
                            </div>
                        </a></div>

                @endauth
        </div>
    </nav>
</div>
<!-- Navbar End -->
