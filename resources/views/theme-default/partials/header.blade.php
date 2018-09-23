<!-- Preloader -->
<div id="preloader">
    <div class="south-load"></div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area">
        <div class="h-100 d-md-flex justify-content-between align-items-center">
            <div class="email-address">
                <a href="mailto:{{ setting('lien-he.email') }}">{{ setting('lien-he.email') }}</a>
            </div>
            <div class="phone-number d-flex">
                <div class="icon">
                    <img src="{{ asset('assets/img/icons/phone-call.png') }}" alt="">
                </div>
                <div class="number">
                    <a href="tel:{{ setting('lien-he.phone') }}">{{ setting('lien-he.phone') }}</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header Area -->
    <div class="main-header-area" id="stickyHeader">
        <div class="classy-nav-container breakpoint-off">
            <!-- Classy Menu -->
            <nav class="classy-navbar justify-content-between" id="southNav">

                <!-- Logo -->
                <a class="nav-brand" href="{{ route('frontend.pages.home') }}"><img src="{{ Voyager::image(setting('site.logo')) }}" alt=""></a>

                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>

                <!-- Menu -->
                <div class="classy-menu">

                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>

                    <!-- Nav Start -->
                    <div class="classynav">
                        {{ menu('frontend', 'theme-default.partials.main-menu') }}
                        <!-- Search Form -->
                        <div class="south-search-form">
                            <form action="{{ route('frontend.pages.search') }}" method="get">
                                <input type="search" name="search" id="search" placeholder="Nhập nội dung bạn muốn tìm...">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Search Button -->
                        <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->