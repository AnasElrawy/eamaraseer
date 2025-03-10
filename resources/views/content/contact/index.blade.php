@extends('content.layouts.app')

@php
    $setting = App\Models\Setting::first();
@endphp

@section('head')

    <title>{{ $setting->meta_title }} | تواصل معنا</title>
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
                        <h1 class="breadcumb-title">تواصل معنا</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
        Contact Area
        ==============================-->
    <div class="space">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">اتصل بنا</span>
                <h3 class="sec-title text-theme">للاستفسار عن أي من خدماتنا أو طلب المساعدة، نحن دائمًا في خدمتك. <br> يمكنك
                    التواصل معنا عبر</h3>
            </div>
            <div class="row gy-4 justify-content-center">
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-location-dot"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">العنوان </h6>
                            <p class="about-contact-details-text">
                                {{ $setting->physical_address }}

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">رقم الهاتف</h6>
                            <p class="about-contact-details-text"><a href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a></p>
                            {{-- <p class="about-contact-details-text"><a href="tel:0558878088">0558878088</a></p> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="about-contact-grid style2">
                        <div class="about-contact-icon">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="about-contact-details">
                            <h6 class="about-contact-details-title">البريد الالكتروني</h6>
                            <p class="about-contact-details-text"><a
                                    href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
        Contact Area
        ==============================-->
    <div class="space contact-area-3 z-index-common" data-bg-src="{{ asset('assets') }}/img/bg/contact-bg-1-1.png" data-overlay="title"
        data-opacity="3" id="contact-sec">
        <div class="contact-bg-shape3-1 spin shape-mockup " data-bottom="5%" data-left="12%">
            <img src="{{ asset('assets') }}/img/shape/section_shape_2_1.jpg" alt="img">
        </div>
        <div class="container">
            <div class="row gx-35">
                <div class="col-lg-6">
                    <div class="appointment-wrap2 bg-white me-xxl-5">
                        <h2 class="form-title text-theme">ابقَ على اتصال
                        </h2>
                        <form action="{{ route('contacts.store') }}" method="POST" class="appointment-form ajax-contact">
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
            </div>
        </div>



        <div class="location-map contact-sec-map z-index-common">
            <div class="contact-map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3789.288665967539!2d42.600928499999995!3d18.242583900000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15fb55773b5a90bb%3A0x27ee0dc52431a9b1!2z2KXYudmF2KfYsSDYudiz2YrYsSAtIEVBTUFSIEFTRUVS!5e0!3m2!1sar!2seg!4v1737318123293!5m2!1sar!2seg"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="location-map-address bg-theme">
                <div class="thumb">
                    <img src="{{ asset('assets') }}/img/property/property_inner_1.jpg" alt="img">
                </div>
                <div class="media-body">
                    <h4 class="title">العنوان:</h4>
                    <p class="text"> المحلة، طريق المحلة الرئيسي، أبها 62432، المملكة العربية السعودية,
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
