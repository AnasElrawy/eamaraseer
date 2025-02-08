@php
    $setting = App\Models\Setting::first();
@endphp

<footer class="footer-wrapper footer-default bg-theme">
    <div class="widget-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <div class="th-widget-about">
                            <div class="about-logo">
                                <a href="{{ route('index') }}"><img src="{{ asset('' . $setting->logo) }}"
                                        alt="Realar"></a>
                            </div>
                            <p class="about-text">
                                {{ $setting->meta_description }}

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">تواصل معنا
                        </h3>
                        <div class="th-widget-contact">
                            <div class="info-box_text">
                                <div class="icon"><img src="{{ asset('assets') }}/img/icon/location-dot.svg"
                                        alt="img"></div>
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
                                    <p><a href="mailto:{{ $setting->email }}"
                                            class="info-box_link">{{ $setting->email }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">رابط مفيد
                        </h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">معلومات عنا
                                    </a></li>
                                <li><a href="#">الخدمات
                                    </a></li>
                                <li><a href="#">الاسئلة الشائعة
                                    </a></li>
                                <li><a href="#">تواصل معنا
                                    </a></li>
                                <li><a href="#">طلب استشارة</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto">
                    <div class="widget widget_nav_menu footer-widget">
                        <h3 class="widget_title">يستكشف</h3>
                        <div class="menu-all-pages-container">
                            <ul class="menu">
                                <li><a href="#">جميع العقارات
                                    </a></li>
                                <li><a href="#">وكلائنا</a></li>
                                <li><a href="#">جميع المشاريع
                                    </a></li>
                                <li><a href="#">عمليتنا
                                    </a></li>
                                <li><a href="#">حيّ
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap bg-light">
        <div class="container">
            <div class="row gy-3 align-items-center">
                <div class="col-lg-6">
                    <p class="copyright-text">
                        {{ $setting->copyright }}

                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="th-social justify-content-lg-end justify-content-center">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-youtube"></i></a>
                        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
