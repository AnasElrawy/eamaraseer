@extends('content.layouts.app')

@section('content')
    <div class="hero-5" id="hero">
        <div class="swiper th-slider hero-slider5" id="heroSlide5"
            data-slider-options='{"effect":"fade", "autoHeight": "true"}'>
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="th-hero-bg" data-bg-src="{{ asset('' . $slider->image) }}"></div>
                            <div class="container">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="hero-style5 text-center">
                                            <h1 class="hero-title text-white">
                                                <span class="title1" data-ani="slideindown" data-ani-delay="0.3s">
                                                    {{ $slider->title }}
                                                </span>
                                            </h1>
                                            <a href="{{ route('consulting') }}" class="th-btn style4 th-btn-icon" data-ani="slideinup"
                                                data-ani-delay="0.6s">طلب استشارة
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>
            <div class="slider-pagination style4"></div>
        </div>
        <div class="hero-social-link">
            <div class="social-wrap">
                <a href="https://facebook.com/">FACEBOOK</a>
                <a href="https://instagram.com/">INSTAGRAM</a>
                <a href="https://twitter.com/">TWITTER</a>
            </div>
        </div>
        <div class="scroll-down">
            <a href="#about-sec" class="hero-scroll-wrap"></a>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
                                Property Area 2
                                ==============================-->
    <section class="space-top d-none" id="property-sec">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-6 col-lg-8">
                    <div class="title-area">
                        <span class="sub-title">قائمة مميزة
                        </span>
                        <h2 class="sec-title text-theme">عروض مميزة
                        </h2>
                        <p class="text-theme">يصبح تحويل المنازل بمثابة أحلام بصفتك وكيل العقارات الذي تلجأ إليه. يمكنك
                            الاعتماد علينا لمساعدتك في العودة بأمان إلى وطنك. منزل وشقة للبيع أو الإيجار أو الرهن
                            العقاري.

                        </p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="#" class="th-btn style4 th-btn-icon">عرض جميع العروض
                        </a>
                    </div>
                </div>
            </div>
            <div class="slider-area property-slider2 slider-drag-wrap z-index-common">
                <div class="swiper th-slider"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"},"1500":{"slidesPerView":"3"}},"spaceBetween":"24","grabCursor":"true","slideToClickedSlide":"true"}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="property-card3 style-border">
                                <div class="property-card-thumb img-shine">
                                    <img src="{{ asset('assets') }}/img/property/property3-1.png" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <h4 class="property-card-title"><a href="#">فيلا بيركل-إنشوت
                                        </a></h4>
                                    <p class="property-card-location"><i class="far fa-map-marker-alt me-2"></i>شارع
                                        لامار الدائري الداخلي، هيوستن، تكساس
                                    </p>
                                    <p class="property-card-text">يصبح تحويل المنازل بمثابة أحلام بصفتك وكيل العقارات
                                        الذي تلجأ إليه. يمكنك الاعتماد</p>
                                    <div class="property-card-meta">
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-1.svg"
                                                alt="img">Bed 4</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-2.svg"
                                                alt="img">Bath 2</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-3.svg"
                                                alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-btn-wrap">
                                        <div class="property-author-wrap">
                                            <img src="{{ asset('assets') }}/img/property/property-user-3-1.png"
                                                alt="img">
                                            <a href="#">مسؤل</a>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="#" class="th-btn style-border2 th-btn-icon">تفاصيل</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="property-card3 style-border">
                                <div class="property-card-thumb img-shine">
                                    <img src="{{ asset('assets') }}/img/property/property3-2.png" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <h4 class="property-card-title"><a href="#">تورونتو تاون هاوس
                                        </a></h4>
                                    <p class="property-card-location"><i class="far fa-map-marker-alt me-2"></i>شارع
                                        لامار الدائري الداخلي، هيوستن، تكساس
                                    </p>
                                    <p class="property-card-text">يصبح تحويل المنازل بمثابة أحلام بصفتك وكيل العقارات
                                        الذي تلجأ إليه. يمكنك الاعتماد</p>
                                    <div class="property-card-meta">
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-1.svg"
                                                alt="img">Bed 4</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-2.svg"
                                                alt="img">Bath 2</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-3.svg"
                                                alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-btn-wrap">
                                        <div class="property-author-wrap">
                                            <img src="{{ asset('assets') }}/img/property/property-user-3-2.png"
                                                alt="img">
                                            <a href="#">مسؤل</a>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="#" class="th-btn style-border2 th-btn-icon">تفاصيل</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="property-card3 style-border">
                                <div class="property-card-thumb img-shine">
                                    <img src="{{ asset('assets') }}/img/property/property3-3.png" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <h4 class="property-card-title"><a href="#">الشقق أوكلاند
                                        </a></h4>
                                    <p class="property-card-location"><i class="far fa-map-marker-alt me-2"></i>شارع
                                        لامار الدائري الداخلي، هيوستن، تكساس
                                    </p>
                                    <p class="property-card-text">يصبح تحويل المنازل بمثابة أحلام بصفتك وكيل العقارات
                                        الذي تلجأ إليه. يمكنك الاعتماد</p>
                                    <div class="property-card-meta">
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-1.svg"
                                                alt="img">Bed 4</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-2.svg"
                                                alt="img">Bath 2</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-3.svg"
                                                alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-btn-wrap">
                                        <div class="property-author-wrap">
                                            <img src="{{ asset('assets') }}/img/property/property-user-3-3.png"
                                                alt="img">
                                            <a href="#">مسؤل</a>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="#" class="th-btn style-border2 th-btn-icon">تفاصيل</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="property-card3 style-border">
                                <div class="property-card-thumb img-shine">
                                    <img src="{{ asset('assets') }}/img/property/property3-4.png" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <h4 class="property-card-title"><a href="#">سكن كليدوكان
                                        </a></h4>
                                    <p class="property-card-location"><i class="far fa-map-marker-alt me-2"></i>شارع
                                        لامار الدائري الداخلي، هيوستن، تكساس
                                    </p>
                                    <p class="property-card-text">يصبح تحويل المنازل بمثابة أحلام بصفتك وكيل العقارات
                                        الذي تلجأ إليه. يمكنك الاعتماد</p>
                                    <div class="property-card-meta">
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-1.svg"
                                                alt="img">Bed 4</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-2.svg"
                                                alt="img">Bath 2</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-3.svg"
                                                alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-btn-wrap">
                                        <div class="property-author-wrap">
                                            <img src="{{ asset('assets') }}/img/property/property-user-3-1.png"
                                                alt="img">
                                            <a href="#">مسؤل</a>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="#" class="th-btn style-border2 th-btn-icon">تفاصيل</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="property-card3 style-border">
                                <div class="property-card-thumb img-shine">
                                    <img src="{{ asset('assets') }}/img/property/property3-5.png" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <h4 class="property-card-title"><a href="#">سكن بيرماي
                                        </a></h4>
                                    <p class="property-card-location"><i class="far fa-map-marker-alt me-2"></i>شارع
                                        لامار الدائري الداخلي، هيوستن، تكساس
                                    </p>
                                    <p class="property-card-text">يصبح تحويل المنازل بمثابة أحلام بصفتك وكيل العقارات
                                        الذي تلجأ إليه. يمكنك الاعتماد</p>
                                    <div class="property-card-meta">
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-1.svg"
                                                alt="img">Bed 4</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-2.svg"
                                                alt="img">Bath 2</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-3.svg"
                                                alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-btn-wrap">
                                        <div class="property-author-wrap">
                                            <img src="{{ asset('assets') }}/img/property/property-user-3-2.png"
                                                alt="img">
                                            <a href="#">مسؤل</a>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="#" class="th-btn style-border2 th-btn-icon">تفاصيل</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="property-card3 style-border">
                                <div class="property-card-thumb img-shine">
                                    <img src="{{ asset('assets') }}/img/property/property3-6.png" alt="img">
                                </div>
                                <div class="property-card-details">
                                    <h4 class="property-card-title"><a href="#">تامان الصفاء
                                        </a></h4>
                                    <p class="property-card-location"><i class="far fa-map-marker-alt me-2"></i>شارع
                                        لامار الدائري الداخلي، هيوستن، تكساس
                                    </p>
                                    <p class="property-card-text">يصبح تحويل المنازل بمثابة أحلام بصفتك وكيل العقارات
                                        الذي تلجأ إليه. يمكنك الاعتماد</p>
                                    <div class="property-card-meta">
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-1.svg"
                                                alt="img">Bed 4</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-2.svg"
                                                alt="img">Bath 2</span>
                                        <span><img src="{{ asset('assets') }}/img/icon/property-icon1-3.svg"
                                                alt="img">1500 sqft</span>
                                    </div>
                                    <div class="property-btn-wrap">
                                        <div class="property-author-wrap">
                                            <img src="{{ asset('assets') }}/img/property/property-user-3-3.png"
                                                alt="img">
                                            <a href="#">مسؤل</a>
                                        </div>
                                        <div class="btn-wrap">
                                            <a href="#" class="th-btn style-border2 th-btn-icon">تفاصيل</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>


    <!--==============================
                                About Area
                                ==============================-->
    <div class="about-area-6 z-index-common position-relative space" id="about-sec">
        <div class="container">
            <div class="row gx-80 justify-content-between">
                <div class="col-xl-6 mb-50 mb-xl-0">
                    <div class="img-box6">
                        <div class="img1">
                            <img src="{{ asset('assets') }}/img/normal/about_6_1.png" alt="img">
                        </div>
                        <div class="img2">
                            <img src="{{ asset('assets') }}/img/normal/about_6_2.png" alt="img">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="title-area mb-32">
                        <span class="sub-title">لماذا نحن
                        </span>
                        <h2 class="sec-title text-theme">مرحبًا بكم في شركة أعمار عسير العقارية
                        </h2>
                        <p class="sec-text text-theme"> شركة أعمار عسير العقارية تقدم لكم خدمات متكاملة في عالم العقارات،
                            حيث نعمل بخبرة طويلة لتلبية احتياجاتكم بأسلوب احترافي وشفاف. سواء كنت تبحث عن تأجير، شراء، إدارة
                            أملاك، أو استشارات عقارية متخصصة، نحن هنا لنكون شريكك الأمثل.

                        </p>
                    </div>
                    <div class="about-wrap2">
                        <div class="checklist style5">
                            <ul>
                                <li>خبرة طويلة: سنوات من العمل الناجح في السوق العقاري.

                                </li>
                                <li> احترافية عالية: فريق متخصص لضمان أفضل النتائج.
                                </li>
                                <li>شفافية: نهتم بكل تفصيل صغير لضمان راحة عملائنا.
                                </li>
                            </ul>
                        </div>
                        <div class="call-btn">
                            <div class="icon-btn bg-theme">
                                <img src="{{ asset('assets') }}/img/icon/phone.svg" alt="img">
                            </div>
                            <div class="btn-content">
                                <h6 class="btn-title">اتصل بنا 24/7
                                </h6>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap mt-50 mb-50">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                Counter Area
                                ==============================-->
    <div class="space bg-theme" data-bg-src="{{ asset('assets') }}/img/bg/award-bg-1-1.png">
        <div class="container">
            <div class="counter-card-wrap">
                @foreach ($statistics as $statistic)
                    <div class="counter-card style4">
                        <div class="media-body">
                            <div class="box-icon">
                                <img src="{{ asset('' . $statistic->icon) }}" alt="img">
                            </div>
                            <h2 class="box-number text-white"><span
                                    class="counter-number text-white">{{ $statistic->count }}</span>+</h2>
                            <p class="box-text text-light">{{ $statistic->name }}
                            </p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
    <!--==============================
                                RSVP Area
                                ==============================-->
    <div class="space overflow-hidden">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-top="6%" data-left="4%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-2 wave-anim shape-mockup d-xl-block d-none"
            data-bg-src="{{ asset('assets') }}/img/shape/section_shape_2_2.jpg" data-top="25%" data-right="4%">
        </div>
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-bottom="0" data-left="3%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-xxl-6 col-lg-8">
                    <div class="title-area">
                        <span class="sub-title">
                            نحن شريككم الأمثل في كل خطوة عقارية
                        </span>
                        <h2 class="sec-title text-theme">خدماتنا تشمل
                        </h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <a href="#" class="th-btn style-border2 th-btn-icon">عرض جميع العقارات
                        </a>
                    </div>
                </div>
            </div>
            <div class="row gy-4 justify-content-center">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="rent-card">
                            <div class="box-icon">
                                <img src="{{ asset('' . $service->icon) }}" alt="img">
                            </div>
                            <h4 class="box-title"><a href="#">{{ $service->title }}
                                </a></h4>
                            <p class="box-text">{{ $service->description }}

                            </p>
                            <a href="#" class="th-btn style-border th-btn-icon">ابحث عن الصفحة الرئيسية
                            </a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </div>
    <!--==============================
                                Award Area
                                ==============================-->
    <section class="space overflow-hidden bg-theme position-relative award-area-1"
        data-bg-src="{{ asset('assets') }}/img/bg/award-bg-1-1.png">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title text-white">ابقَ على اتصال
                </span>
                <h2 class="sec-title text-white">تواصل معنا
                </h2>
            </div>
        </div>
    </section>
    <!--==============================
                                Contact Area
                                ==============================-->
    <div class="overflow-hidden contact-area-4 z-index-common" data-sec-pos="top-half" data-pos-for=".award-area-1"
        id="contact-sec">
        <div class="container">
            <div class="contact-wrap4">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="appointment-wrap2 bg-white">
                            <h2 class="form-title text-theme">جدولة الزيارة
                            </h2>
                            <form action="{{ route('contacts.store') }}" method="POST"
                                class="appointment-form ajax-contact">
                                @csrf
                                <div class="row">
                                    <div class="form-group style-border style-radius col-12">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="الاسم بالكامل*" required>
                                        <i class="fal fa-user"></i>
                                    </div>
                                    <div class="form-group style-border style-radius col-12">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="رقم الهاتف*" required>
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="col-12 form-group style-border style-radius">
                                        <i class="far fa-comments"></i>
                                        <textarea name="message" id="message" placeholder="رسالة..." class="form-control" required></textarea>
                                    </div>
                                    <div class="col-12 form-btn mt-4">
                                        <button class="th-btn" type="submit">ارسال <span class="btn-icon"><img
                                                    src="{{ asset('assets') }}/img/icon/paper-plane.svg" alt="img"></span></button>
                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-thumb4-1">
                            <img src="{{ asset('assets') }}/img/normal/contact_thumb_4_1.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
                                Property Area 4
                                ==============================-->
    <section class="space overflow-hidden">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-top="6%" data-left="4%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="sec-bg-shape2-2 wave-anim shape-mockup d-xl-block d-none"
            data-bg-src="{{ asset('assets') }}/img/shape/section_shape_2_2.jpg" data-top="12%" data-right="4%">
        </div>
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none" data-bottom="0" data-left="3%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-xxl-6 col-lg-8">
                    <div class="title-area text-center">
                        <span class="sub-title">أفضل مشروع
                        </span>
                        <h2 class="sec-title text-theme">المشاريع الجارية
                        </h2>
                        <p class="text-theme">يصبح تحويل المنازل بمثابة أحلام بصفتك وكيل العقارات الذي تلجأ إليه. يمكنك
                            الاعتماد علينا لمساعدتك في العودة بأمان إلى وطنك. منزل وشقة للبيع أو الإيجار أو الرهن
                            العقاري.

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-lg-0">
            <div class="slider-area project-slider4-1 slider-drag-wrap">
                <div class="swiper th-slider"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2.5"},"1500":{"slidesPerView":"2.5","spaceBetween":"64"}},"grabCursor":"true","slideToClickedSlide":"true","centeredSlides": "true"}'>
                    <div class="swiper-wrapper">


                        @foreach ($projects as $project)
                            <div class="swiper-slide">
                                <div class="portfolio-card style4">
                                    <div class="portfolio-img">
                                        <img src="{{ asset('assets') }}/img/project/project_4_1.png" alt="project image">
                                    </div>
                                    <div class="portfolio-content">
                                        <h3 class="portfolio-title"><a href="{{ route('project', $project->id ) }}">{{ $project->title }}
                                            </a></h3>
                                        <p class="portfolio-text">{{ $project->description }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="btn-wrap justify-content-center mt-55">
                <a href="#" class="th-btn style4 th-btn-icon">تصفح جميع المشاريع
                </a>
            </div>
        </div>

    </section>


    <!--==============================
                                Testimonial Area
                                ==============================-->
    <section class="overflow-hidden space-top bg-theme overflow-hidden"
        data-bg-src="{{ asset('assets') }}/img/bg/award-bg-1-1.png">
        <div class="container">
            <div class="row justify-content-lg-between align-items-center">
                <div class="col-xxl-6 col-lg-7">
                    <div class="title-area">
                        <span class="sub-title text-white">شهادة</span>
                        <h2 class="sec-title text-white">ماذا يقول عملاؤنا
                        </h2>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#testiSlider4-2"
                                class="slider-arrow style6 default slider-next"><img
                                    src="{{ asset('assets') }}/img/icon/arrow-right.svg" alt=""></button>
                            <button data-slider-next="#testiSlider4-2"
                                class="slider-arrow style6 default slider-prev"><img
                                    src="{{ asset('assets') }}/img/icon/arrow-left.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="swiper th-slider testi-slider4-2" id="testiSlider4-2"
                data-slider-options='{"spaceBetween":"32","breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"1"},"1200":{"slidesPerView":"2"},"1500":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($reviews as $review)
                        <div class="swiper-slide">
                            <div class="testi-card style3">
                                <p class="testi-card_text">{!! $review->rating !!}
                                </p>
                                <div class="testi-grid_review">
                                    <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                        class="fa-sharp fa-solid fa-star"></i>
                                </div>
                                <div class="testi-card_profile">
                                    <div class="quote-icon">
                                        <img src="{{ asset('assets') }}/img/icon/qoute.svg" alt="icon">
                                    </div>
                                    <div class="avatar">
                                        <img src="{{ asset('' . $review->image) }}" alt="avatar">
                                    </div>
                                    <div class="testi-card_profile-details">
                                        <h3 class="testi-card_name">{{ $review->name }}
                                        </h3>
                                        <span class="testi-card_desig">عميل لدينا
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>

    <!--==============================
                                Client Area
                                ==============================-->
    <div class="client-area-4 space bg-theme overflow-hidden"
        data-bg-src="{{ asset('assets') }}/img/bg/award-bg-1-1.png">
        <div class="container">
            <div class="swiper th-slider has-shadow" id="clientSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"}}}'>
                <div class="swiper-wrapper">

                    @foreach ($partners as $partner)
                        <div class="swiper-slide">
                            <a href="#" class="client-card">
                                <img src="{{ asset('' . $partner->image) }}" alt="Image">
                            </a>
                        </div>
                    @endforeach



                </div>
            </div>
        </div>
    </div>

    <!--==============================
                                Blog Area
                                ==============================-->
    <section class="overflow-hidden space bg-theme d-none" id="blog-sec">
        <div class="sec-bg-shape2-3 jump shape-mockup d-xl-block d-none text-white" data-bottom="40%" data-right="0%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_3.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-end">
                <div class="col-xl-5 col-lg-6">
                    <div class="title-area text-lg-start text-center">
                        <h2 class="sec-title text-white">أخبار ومقالات
                        </h2>
                        <p class="text-white">تساعدك شركة Realar على إنشاء موقع إلكتروني للتداول العقاري بسهولة. مع
                            وظيفة التسجيل، تسجيل الدخول، نشر الأخبار العقارية.
                        </p>
                    </div>
                </div>
                <div class="col-lg-auto">
                    <div class="sec-btn">
                        <a href="#" class="th-btn style-border3 th-btn-icon">تصفح كل المدونة
                        </a>
                    </div>
                </div>
            </div>
            <div class="slider-area blog-slider2">
                <div class="swiper th-slider" id="blogSlider2"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="{{ asset('assets') }}/img/blog/blog_2_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="#">April 22, 2024</a>
                                        <a href="#">08 دقيقة قراءة
                                        </a>
                                    </div>
                                    <h3 class="box-title"><a href="#">ما هي الاتجاهات التي نتوقع أن
                                            نبدأ في النمو في الرحلة المستقبلية القادمة؟
                                        </a></h3>
                                    <a href="#" class="th-btn style-border th-btn-icon">اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="{{ asset('assets') }}/img/blog/blog_2_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="#">June 16, 2024</a>
                                        <a href="#">10 دقيقة قراءة
                                        </a>
                                    </div>
                                    <h3 class="box-title"><a href="#">يحكي مكان العمل ويصرخ لمزيد من
                                            كبار المدونين الذين يتابعونهم بالفعل
                                        </a></h3>
                                    <a href="#" class="th-btn style-border th-btn-icon">اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="{{ asset('assets') }}/img/blog/blog_2_1.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="#">April 22, 2024</a>
                                        <a href="#">08 دقيقة قراءة
                                        </a>
                                    </div>
                                    <h3 class="box-title"><a href="#">ما هي الاتجاهات التي نتوقع أن
                                            نبدأ في النمو في الرحلة المستقبلية القادمة؟
                                        </a></h3>
                                    <a href="#" class="th-btn style-border th-btn-icon">اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="blog-card style2">
                                <div class="blog-img">
                                    <a href="#">
                                        <img src="{{ asset('assets') }}/img/blog/blog_2_2.jpg" alt="blog image">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <a href="#">June 16, 2024</a>
                                        <a href="#">10 دقيقة قراءة
                                        </a>
                                    </div>
                                    <h3 class="box-title"><a href="#">يحكي مكان العمل ويصرخ لمزيد من
                                            كبار المدونين الذين يتابعونهم بالفعل
                                        </a></h3>
                                    <a href="#" class="th-btn style-border th-btn-icon">اقرأ المزيد
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="space overflow-hidden">
        <div class="sec-bg-shape2-1 spin shape-mockup d-xl-block d-none" data-top="7%" data-right="15%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="container-fluid">
            <div class="swiper th-slider instagram-slider1" id="instaSlider1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"4"},"1200":{"slidesPerView":"5"}}}'>
                <div class="swiper-wrapper">


                    @foreach ($gallery as $photo)
                        <div class="col-auto swiper-slide">
                            <div class="insta-box">
                                <img src="{{ asset('' . $photo->image) }}" alt="Instagram">
                                <a target="_blank" href="https://www.tiktok.com/@eamaraseer?_t=ZS-8tCqTuS4XyR&_r=1" class="icon-btn"><i
                                        class="fa-brands fa-tiktok"></i></a>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
@endsection
