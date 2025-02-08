@php
    $setting = App\Models\Setting::first();
@endphp
<div class="sidemenu-wrapper sidemenu-info d-none d-lg-block ">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget  ">
            <div class="th-widget-about">
                <div class="about-logo">
                    <a href="{{ route('index') }}"><img src="{{ asset('' . $setting->favicon) }}" alt="Realar"></a>
                </div>
                <p class="about-text"> {{ $setting->meta_description }}

                </p>
            </div>
        </div>
        <div class="widget  ">
            <h3 class="widget_title">تواصل معنا</h3>
            <div class="th-widget-contact">
                <div class="info-box_text">
                    <div class="icon">
                        <img src="{{ asset('assets') }}/img/icon/location-dot.svg" alt="img">
                    </div>
                    <div class="details">
                        <p>
                            {{ $setting->physical_address }}

                        </p>
                    </div>
                </div>
                <div class="info-box_text">
                    <div class="icon">
                        <img src="{{ asset('assets') }}/img/icon/phone.svg" alt="img">
                    </div>
                    <div class="details">
                        <p><a href="tel:{{ $setting->phone }}" class="info-box_link">{{ $setting->phone }}</a></p>
                    </div>
                </div>
                <div class="info-box_text">
                    <div class="icon">
                        <img src="{{ asset('assets') }}/img/icon/envelope.svg" alt="img">
                    </div>
                    <div class="details">
                        <p><a href="mailto:{{ $setting->email }}" class="info-box_link">{{ $setting->email }}</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget newsletter-widget  ">
            <h3 class="widget_title">اشترك في النشرة الشهرية</h3>
            <form class="newsletter-form">
                <div class="form-group">
                    <input class="form-control" type="email" placeholder="البريد الالكتروني" required="">
                    <button type="submit" class="th-btn"><i class="far fa-paper-plane text-theme"></i></button>
                </div>
            </form>
            <div class="th-social style2">
                <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                <a href="https://www.behance.com/"><i class="fab fa-behance"></i></a>
                <a href="https://www.vimeo.com/"><i class="fab fa-vimeo-v"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="popup-search-box d-none d-lg-block">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
        <input type="text" placeholder="What are you looking for?">
        <button type="submit"><i class="fal fa-search"></i></button>
    </form>
</div>
<!--==============================
Mobile Menu
============================== -->
<div class="th-menu-wrapper onepage-nav">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ route('index') }}">
                <img src="{{ asset('assets') }}/img/logo-white.png" alt="Realar">
            </a>
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li>
                    <a href="{{ route('index') }}">
                        الرئيسية
                    </a>
                </li>
                <li><a href="{{ route('about') }}">
                        معلومات عنا
                    </a></li>
                <li>
                    <a href="{{ route('about') }}#services">
                        الخدمات
                    </a>
                </li>
                <li>
                    <a href="{{ route('faqs') }}">
                        الاسئلة الشائعة
                    </a>
                </li>
                <li><a href="{{ route('contact') }}">
                        تواصل معنا
                    </a></li>

                <li><a href="{{ route('consulting') }}">
                        الاستشارات العقارية
                    </a></li>

            </ul>
        </div>
    </div>
</div>
<!--==============================
Header Area
==============================-->
<header class="th-header header-layout3 onepage-nav">
    <div class="sticky-wrapper">
        <!-- Main Menu Area -->
        <div class="menu-area">
            <button type="button" class="simple-icon sideMenuInfo sidebar-btn style3">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        <div class="header-logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets') }}/img/logo-white.png" alt="Realar">
                            </a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <nav class="main-menu d-none d-lg-inline-block">
                            <ul>
                                <li>
                                    <a href="{{ route('index') }}">
                                        الرئيسية
                                    </a>
                                </li>
                                <li><a href="{{ route('about') }}">
                                        معلومات عنا
                                    </a></li>
                                <li>
                                    <a href="{{ route('about') }}#services">
                                        الخدمات
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('faqs') }}">
                                        الاسئلة الشائعة
                                    </a>
                                </li>
                                <li><a href="{{ route('contact') }}">
                                        تواصل معنا
                                    </a></li>
                            </ul>
                        </nav>
                        <div class="header-button d-flex d-lg-none">
                            <button type="button" class="th-menu-toggle sidebar-btn">
                                <span class="line"></span>
                                <span class="line"></span>
                                <span class="line"></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-auto d-none d-xl-block">
                        <div class="header-button">
                            <a href="{{ route('consulting') }}" class="th-btn style-border th-btn-icon">طلب
                                استشارة
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--==============================
Hero Area
==============================-->
