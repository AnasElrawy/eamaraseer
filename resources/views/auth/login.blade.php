@php
    $setting = App\Models\Setting::first();
@endphp


<!doctype html>
<html lang="ar" dir="rtl" data-layout="vertical" data-sidebar="dark" data-sidebar-size="lg" data-preloader="disable"
    data-bs-theme="light">

<head>

    <meta charset="utf-8">
    <title>{{ $setting->meta_title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="{{ $setting->meta_description }}" name="description">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('' . $setting->favicon) }}">

    <!-- Layout config Js -->
    <script src="{{ asset('dashboard') }}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('dashboard') }}/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css">
    <!-- Icons Css -->
    <link href="{{ asset('dashboard') }}/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{ asset('dashboard') }}/css/app-rtl.min.css" rel="stylesheet" type="text/css">
    <!-- custom Css-->
    <link href="{{ asset('dashboard') }}/css/custom.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.css"
        integrity="sha512-kJlvECunwXftkPwyvHbclArO8wszgBGisiLeuDFwNM8ws+wKIw0sv1os3ClWZOcrEB2eRXULYUsm8OVRGJKwGA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>

<body>
    <section
        class="auth-page-wrapper py-5 position-relative bg-light d-flex align-items-center justify-content-center min-vh-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="row g-0 align-items-center">
                                <div class="col-xxl-12 mx-auto">
                                    <div class="card mb-0 border-0 shadow-none mb-0">
                                        <div class="card-body p-sm-5 m-lg-4">
                                            <div class="text-center mt-5">
                                                <h5 class="fs-3xl">مرحبًا بعودتك</h5>
                                                <p class="text-muted">تسجيل الدخول لمواصلة الي لوحة التحكم.</p>
                                            </div>
                                            <div class="p-2 mt-5">
                                                <form action="{{ route('login') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <div class="input-group">
                                                            <span class="input-group-text" id="basic-addon"><i
                                                                    class="ri-mail-line"></i></span>
                                                            <input type="text" name="email" class="form-control"
                                                                id="email" placeholder="أدخل البريد الإلكتروني">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div
                                                            class="position-relative auth-pass-inputgroup overflow-hidden">
                                                            <div class="input-group">
                                                                <span class="input-group-text" id="basic-addon1"><i
                                                                        class="ri-lock-2-line"></i></span>
                                                                <input type="password" name="password"
                                                                    class="form-control pe-5 password-input"
                                                                    placeholder="أدخل كلمة المرور" id="password-input">
                                                            </div>
                                                            <button
                                                                class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                                type="button" id="password-addon"><i
                                                                    class="ri-eye-fill align-middle"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="float-end">
                                                        <a href="#" class="text-muted">هل نسيت كلمة
                                                            السر?</a>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="auth-remember-check">
                                                        <label class="form-check-label"
                                                            for="auth-remember-check">تذكرنى</label>
                                                    </div>
                                                    <div class="mt-4">
                                                        <button class="btn btn-primary w-100" type="submit">تسجيل
                                                            الدخول</button>
                                                    </div>
                                                    <div class="mt-4 pt-2 text-center">
                                                        <div class="signin-other-title position-relative">
                                                            <h5 class="fs-sm mb-4 title">تسجيل الدخول مع</h5>
                                                        </div>
                                                        <div class="pt-2 hstack gap-2 justify-content-center">
                                                            <button type="button"
                                                                class="btn btn-subtle-primary btn-icon"><i
                                                                    class="ri-facebook-fill fs-lg"></i></button>
                                                            <button type="button"
                                                                class="btn btn-subtle-danger btn-icon"><i
                                                                    class="ri-google-fill fs-lg"></i></button>
                                                            <button type="button"
                                                                class="btn btn-subtle-dark btn-icon"><i
                                                                    class="ri-github-fill fs-lg"></i></button>
                                                            <button type="button"
                                                                class="btn btn-subtle-info btn-icon"><i
                                                                    class="ri-twitter-fill fs-lg"></i></button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- end card body -->
                                    </div>
                                    <!-- end card -->
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </section>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('dashboard') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('dashboard') }}/js/plugins.js"></script>



    <script src="{{ asset('dashboard') }}/js/pages/password-addon.init.js"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('dashboard') }}/libs/swiper/swiper-bundle.min.js"></script>

    <!-- swiper.init js -->
    <script src="{{ asset('dashboard') }}/js/pages/swiper.init.js"></script>

</body>

</html>
