@extends('content.layouts.app')

@php
    $setting = App\Models\Setting::first();
@endphp

@section('head')
    <title>{{ $setting->meta_title }} | الاسئلة الشائعة</title>
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
                        <h1 class="breadcumb-title">الاسئلة الشائعة</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--==============================
    Faq Area
    ==============================-->
    <div class="space overflow-hidden">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="title-area text-center">
                        <h2 class="sec-title text-theme">اسئلة شائعة</h2>
                        <p class="sec-text text-theme">هل لديك أسئلة تريد إجابات عليها؟</p>
                    </div>
                    <div class="accordion" id="faqAccordion">


                        <div class="accordion" id="faqAccordion">
                            @foreach ($faqs as $faq)
                                <div class="accordion-card">
                                    <div class="accordion-header" id="collapse-item-{{ $faq->id }}">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $faq->id }}" aria-expanded="true"
                                            aria-controls="collapse-{{ $faq->id }}">
                                            {{ $loop->iteration }}. {{ $faq->title }}
                                        </button>
                                    </div>
                                    <div id="collapse-{{ $faq->id }}"
                                        class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                        aria-labelledby="collapse-item-{{ $faq->id }}" data-bs-parent="#faqAccordion">
                                        <div class="accordion-body">
                                            <p class="faq-text">{!!$faq->content !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" subscribe-area-2 z-index-common" data-bg-src="{{ asset('assets') }}/img/bg/subscribe-bg-2-1.png"
        data-overlay="theme" data-opacity="7">
        <div class="container">
            <div class="row gx-35 justify-content-center">
                <div class="col-xxl-10">
                    <div class="title-area text-center">
                        <h2 class="sec-title text-white">النشرة الإخبارية للحصول على آخر الأخبار</h2>
                    </div>
                    <form action="#" class="subscribe-form style2">
                        <div class="form-group style-border3 style-radius">
                            <input type="text" class="form-control" placeholder="أدخل البريد الإلكتروني">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <button class="th-btn">اشترك الآن <span class="btn-icon"><img
                                    src="{{ asset('assets') }}/img/icon/paper-plane.svg" alt="img"></span></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
