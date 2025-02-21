@extends('content.layouts.app')

@php
    $setting = App\Models\Setting::first();
@endphp

@section('head')
    <title>{{ $setting->meta_title }} | معلومات عنا</title>
@endsection

@section('content')
    <!--==============================
                        Breadcumb
                    ============================== -->
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets') }}/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">معلومات عنا</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                    About Area
                    ==============================-->
    <div class="overflow-hidden space" id="about-sec">
        <div class="container">
            <div class="about-page-wrap">
                <div class="row gy-40 justify-content-between align-items-center">
                    <div class="col-lg-6">
                        <div class="title-area mb-0">
                            <h2 class="sec-title text-theme mb-2">من نحن؟</h2>
                            <p class="mb-0 text-theme">شركة أعمار عسير العقارية تأسست لخدمة قطاع العقارات في منطقة عسير
                                والمملكة العربية السعودية. </p>
                            <p class="text-theme">نسعى لتوفير خدمات عقارية مبتكرة تخدم الأفراد والشركات على حد سواء، مع
                                الحرص على بناء علاقات طويلة الأمد مع شركائنا وعملائنا.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="{{ asset('assets') }}/img/normal/about_3_1.png" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="{{ asset('assets') }}/img/normal/about_3_2.png" alt="About">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="sec-title text-theme mb-2">رؤيتنا
                        </h2>

                        <p class="text-theme">
                            أن نصبح الخيار الأول للعملاء الباحثين عن جودة وخبرة في القطاع العقاري، وأن نقدم قيمة حقيقية في
                            كل صفقة عقارية.

                        </p>

                    </div>
                    <div class="col-lg-6">
                        <h2 class="sec-title text-theme mb-2">رسالتنا</h2>

                        <p class="text-theme">تمكين الأفراد والشركات من اتخاذ أفضل القرارات العقارية من خلال توفير خدمات
                            استشارية وإدارية متكاملة.

                        </p>
                        <div class="about-wrap2 style-theme mt-50">
                            <div class="checklist style4">
                                <ul>
                                    <li><img src="{{ asset('assets') }}/img/icon/checkmark.svg" alt="img">فريق عمل خبير: يضم مستشارين
                                        ومهنيين بخبرة عميقة في سوق العقارات</li>
                                    <li><img src="{{ asset('assets') }}/img/icon/checkmark.svg" alt="img">حلول مخصصة: تصميم
                                        استراتيجيات تناسب احتياجات كل عميل</li>
                                    <li><img src="{{ asset('assets') }}/img/icon/checkmark.svg" alt="img">تقنيات حديثة: نستخدم
                                        التكنولوجيا لتحليل البيانات وتحسين الخدمات</li>
                                </ul>
                            </div>
                            <div class="call-btn">
                                <div class="icon-btn bg-theme">
                                    <img src="{{ asset('assets') }}/img/icon/phone.svg" alt="img">
                                </div>
                                <div class="btn-content">
                                    <h6 class="btn-title text-theme">Call Us 24/7</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img-box3">
                            <div class="img1">
                                <img src="{{ asset('assets') }}/img/normal/about_3_3.png" alt="About">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                    Why Choose Us Area
                    ==============================-->
    <div class="why-sec-1 overflow-hidden space bg-theme" id="services">
        <div class="sec-bg-shape2-1 text-white spin shape-mockup d-xl-block d-none" data-bottom="15%" data-left="12%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-3 text-white jump shape-mockup d-xl-block d-none" data-bottom="0%" data-right="7%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-lg-6">
                    <div class="title-area">
                        <h2 class="sec-title text-white">خدماتنا العقارية المتكاملة
                        </h2>
                        <p class="text-light">نقدم في شركة أعمار عسير العقارية حزمة شاملة من الخدمات التي تغطي جميع جوانب
                            سوق العقارات.

                        </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="{{ route('consulting') }}" class="th-btn style-border th-btn-icon">طلب الحدمة</a>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($services as $service)
                        <div class="swiper-slide">
                            <div class="service-card style4">
                                <div class="service-card-icon">
                                    <img src="{{ asset('' . $service->icon) }}" alt="Icon">
                                </div>
                                <h3 class="box-title"><a href="#">{{ $service->name }}
                                    </a></h3>
                                <p class="box-text">


                                    {{ $service->description }}

                                </p>
                                <div class="service-img img-shine">
                                    <img src="{{ asset('' . $service->image) }}" alt="img">
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!--==============================
                    Testimonial Area
                    ==============================-->
    <section class="overflow-hidden space">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xxl-block d-none" data-bottom="8%" data-left="8%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-xxl-6 col-lg-7">
                    <div class="title-area text-lg-start text-center">
                        <h2 class="sec-title text-theme">ماذا يقول عملاؤنا</h2>
                        <p class="sec-text text-theme">يساعدك إعمار عسير على إنشاء موقع ويب لتجارة العقارات بسهولة. من خلال
                            وظيفة التسجيل وتسجيل الدخول ونشر أخبار العقارات.</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlider2" class="slider-arrow style5 default slider-prev"><img
                                    src="{{ asset('assets') }}/img/icon/arrow-left.svg" alt=""></button>
                            <button data-slider-next="#testiSlider2" class="slider-arrow style5 default slider-next"><img
                                    src="{{ asset('assets') }}/img/icon/arrow-right.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="testi-wrap2">
                <div class="swiper th-slider testi-slider2" id="testiSlider2"
                    data-slider-options='{"spaceBetween":"48","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">

                        @foreach ($reviews as $review)
                            <div class="swiper-slide">
                                <div class="testi-grid-wrap2">
                                    <div class="testi-grid-thumb">
                                        <img src="{{ asset('assets') }}/img/testimonial/testi_thumb_2_1.png" alt="img">
                                    </div>
                                    <div class="testi-card style2">
                                        <div class="testi-grid_review">
                                            <i class="fa-sharp fa-solid fa-star"></i><i
                                                class="fa-sharp fa-solid fa-star"></i><i
                                                class="fa-sharp fa-solid fa-star"></i><i
                                                class="fa-sharp fa-solid fa-star"></i><i
                                                class="fa-sharp fa-solid fa-star"></i>
                                        </div>
                                        <p class="testi-card_text">{!! $review->rating !!}</p>
                                        <div class="testi-card_profile">
                                            <div class="quote-icon">
                                                <img src="{{ asset('assets') }}/img/icon/qoute2.svg" alt="icon">
                                            </div>
                                            <div class="avatar">
                                                <img src="{{ asset('' . $review->image) }}" alt="avatar">
                                            </div>
                                            <div class="testi-card_profile-details">
                                                <h3 class="testi-card_name">{{ $review->name }}</h3>
                                                <span class="testi-card_desig">عميل لدينا</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
