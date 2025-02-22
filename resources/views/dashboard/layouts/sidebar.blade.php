@php
    $setting = App\Models\Setting::first();
@endphp

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="{{ route('admin.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets') }}/img/logo-sm.png" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('' . $setting->logo) }}"" alt="" height="50">
            </span>
        </a>
        <a href="{{ route('admin.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets') }}/img/logo-sm.png" alt="" height="50">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('' . $setting->logo) }}"" alt="" height="50">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover shadow-none"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>القائمة</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.index') }}">
                        <i class="ti ti-dashboard"></i> <span>لوحة التحكم</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarSliders" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarSliders">
                        <i class="ti ti-photo"></i> <span>الصور</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarSliders">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('sliders.create') }}" class="nav-link"> إضافة صورة </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('sliders.index') }}" class="nav-link"> عرض كل الصور </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarContacts" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarConsultations">
                        <i class="ti ti-mail"></i> <span>رسائل التواصل</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarContacts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('contacts.index') }}" class="nav-link"> عرض الرسائل </a>
                            </li>
                        </ul>
                    </div>
                </li>


{{-- 
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarConsultations" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarConsultations">
                        <i class="ti ti-headset"></i> <span>الاستشارات</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarConsultations">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('consultations.index') }}" class="nav-link"> عرض الاستشارات </a>
                            </li>
                        </ul>
                    </div>
                </li> --}}

                
                <!-- المهتمين بالعقار -->
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarRealEstate" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarRealEstate">
                        <i class="ti ti-home"></i> <span>المهتمين بالعقار</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarRealEstate">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('real-estate-interests.index') }}" class="nav-link"> عرض المهتمين </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarServices" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarServices">
                        <i class="ti ti-briefcase"></i> <span>الخدمات</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarServices">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('services.create') }}" class="nav-link"> إضافة خدمة </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('services.index') }}" class="nav-link"> عرض الخدمات </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('consultations.index') }}" class="nav-link"> عرض طلبات الخدمات</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarPartners" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarPartners">
                        <i class="ti ti-users"></i> <span>الشركاء</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPartners">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('partners.create') }}" class="nav-link"> إضافة شريك </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('partners.index') }}" class="nav-link"> عرض الشركاء </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarGallery" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarGallery">
                        <i class="ti ti-photo"></i> <span>الصور المعرضية</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarGallery">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('gallery.create') }}" class="nav-link" "> إضافة صورة </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('gallery.index') }}" class="nav-link" > عرض الصور </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarStatistics" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarStatistics">
                        <i class="fas fa-chart-line"></i>

                        <span >الإحصائيات</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarStatistics">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('statistics.create') }}" class="nav-link" > إضافة إحصائية </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('statistics.index') }}" class="nav-link" > عرض الإحصائيات </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarProjects" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects">
                        <i class="ti ti-folder"></i> <span >المشاريع</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarProjects">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('projects.create') }}" class="nav-link" > إضافة مشروع </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('projects.index') }}" class="nav-link" > عرض المشاريع </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarReviews" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarReviews">
                        <i class="ti ti-star"></i> <span >التقييمات</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarReviews">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('reviews.create') }}" class="nav-link" "> إضافة تقييم </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('reviews.index') }}" class="nav-link"> عرض التقييمات </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarFaqs" data-bs-toggle="collapse"
                        role="button" aria-expanded="false" aria-controls="sidebarFaqs">
                        <i class="ti ti-help"></i> <span>الأسئلة الشائعة</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarFaqs">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('faqs.create') }}" class="nav-link""> إضافة سؤال </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('faqs.index') }}" class="nav-link"> عرض الأسئلة </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('settings.index') }}">
                        <i class="ti ti-settings"></i> <span>الإعدادات</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
