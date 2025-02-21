@extends('content.layouts.app')

@php
    $setting = App\Models\Setting::first();
@endphp

@section('head')
    <title>{{ $setting->meta_title }} | {{ $project->title }}</title>
@endsection


@section('content')
    <div class="breadcumb-wrapper " data-bg-src="{{ asset('assets') }}/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content">
                        <h1 class="breadcumb-title">{{ $project->title }}</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('projects') }}">المشاريع</a></li>
                            <li>تفاصييل المشروع</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="slider-area property-slider1">
                <div class="swiper th-slider mb-4" id="propertySlider"
                    data-slider-options='{"effect":"fade","loop":true,"thumbs":{"swiper":".property-thumb-slider"},"autoplayDisableOnInteraction":"true"}'>
                    <div class="swiper-wrapper">
                        @if ($project->images)
                            @foreach (json_decode($project->images) as $image)
                                <div class="swiper-slide">
                                    <div class="property-slider-img">
                                        <img src="{{ asset($image) }}" alt="img">
                                    </div>
                                </div>
                            @endforeach
                        @endif


                    </div>
                </div>
                <div class="swiper th-slider property-thumb-slider"
                    data-slider-options='{"effect":"slide","loop":true,"breakpoints":{"0":{"slidesPerView":2},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"3"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}},"autoplayDisableOnInteraction":"true"}'>
                    <div class="swiper-wrapper">


                        @if ($project->images)
                            @foreach (json_decode($project->images) as $image)
                                <div class="swiper-slide">
                                    <div class="property-slider-img">
                                        <img src="{{ asset($image) }}" alt="img">
                                    </div>
                                </div>
                            @endforeach
                        @endif


                    </div>
                </div>

                <button data-slider-prev="#propertySlider" class="slider-arrow style3 slider-prev"><img
                        src="{{ asset('assets') }}/img/icon/arrow-left.svg" alt="icon"></button>
                <button data-slider-next="#propertySlider" class="slider-arrow style3 slider-next"><img
                        src="{{ asset('assets') }}/img/icon/arrow-right.svg" alt="icon"></button>
            </div>
            <div class="row gx-30">
                <div class="col-xxl-8 col-lg-7">
                    <div class="property-page-single">
                        <div class="page-content">
                            <div class="property-meta mb-30">
                                <a href="#">
                                    <img src="{{ asset('assets') }}/img/icon/calendar.svg" alt="img">
                                    {{ $project->created_at->format('d M, Y') }}
                                </a>
                                                                <a href="#"><img src="{{ asset('assets') }}/img/icon/comments.svg"
                                        alt="img">0
                                    تعليقات</a>
                            </div>
                            <p class="mb-30">{!! $project->content !!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-5">
                    <aside class="sidebar-area">
                        <div class="widget widget-property-contact">
                            <h4 class="widget_subtitle">للإيجار</h4>
                            <p class="widget_text">أنا مهتم بهذا العقار</p>


                            <form action="{{ route('contacts.store') }}" method="POST" class="widget-property-contact-form">
                                @csrf
                                <div class="row">
                                    <div class="form-group style-border style-border">
                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="الاسم بالكامل*" required>
                                    </div>
                                    <div class="form-group style-border style-border">
                                        <input type="text" class="form-control" name="phone" id="phone"
                                            placeholder="رقم الهاتف*" required>
                                    </div>
                                    <div class="col-12 form-btn mt-4">

                                        <button class="th-btn style-white th-btn-icon mt-15" type="submit">ارسال</button>

                                    </div>
                                </div>
                                <p class="form-messages mb-0 mt-3"></p>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
@endsection
