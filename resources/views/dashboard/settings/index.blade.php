@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Start Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">تحديث الإعدادات</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">الرئيسية</a></li>
                            <li class="breadcrumb-item active">الإعدادات</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mb-0">تحديث الإعدادات</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <label for="logo" class="form-label">شعار الموقع</label>
                                    <input type="file" name="logo" class="form-control" id="logo" accept="image/*">
                                    @if($settings->logo)
                                        <img src="{{ asset('/' . $settings->logo) }}" alt="Logo" width="100" class="mt-2">
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="footer_logo" class="form-label">شعار الفوتر</label>
                                    <input type="file" name="footer_logo" class="form-control" id="footer_logo" accept="image/*">
                                    @if($settings->footer_logo)
                                        <img src="{{ asset('/' . $settings->footer_logo) }}" alt="Footer Logo" width="100" class="mt-2">
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="favicon" class="form-label">أيقونة الموقع</label>
                                    <input type="file" name="favicon" class="form-control" id="favicon" accept="image/*">
                                    @if($settings->favicon)
                                        <img src="{{ asset('/' . $settings->favicon) }}" alt="Favicon" width="50" class="mt-2">
                                    @endif
                                </div>

                                <div class="col-md-6">
                                    <label for="phone" class="form-label">رقم الهاتف</label>
                                    <input type="text" name="phone" class="form-control" id="phone" value="{{ $settings->phone }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{ $settings->email }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="map_address" class="form-label">عنوان الخريطة</label>
                                    <input type="text" name="map_address" class="form-control" id="map_address" value="{{ $settings->map_address }}" required>
                                </div>


                                <div class="col-md-6">
                                    <label for="receiving_email" class="form-label">البريد الإلكتروني المستقبل</label>
                                    <input type="email" name="receiving_email" class="form-control" id="receiving_email" value="{{ $settings->receiving_email }}" required>
                                </div>


                                <div class="col-md-6">
                                    <label for="physical_address" class="form-label">العنوان الفعلي</label>
                                    <input type="text" name="physical_address" class="form-control" id="physical_address" value="{{ $settings->physical_address }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="copyright" class="form-label">نص حقوق الملكية</label>
                                    <input type="text" name="copyright" class="form-control" id="copyright" value="{{ $settings->copyright }}" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="meta_title" class="form-label">عنوان الميتا</label>
                                    <input type="text" name="meta_title" class="form-control" id="meta_title" value="{{ $settings->meta_title }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="meta_description" class="form-label">وصف الميتا</label>
                                    <textarea name="meta_description" class="form-control" id="meta_description" rows="3">{{ $settings->meta_description }}</textarea>
                                </div>

                                <div class="col-md-6">
                                    <label for="meta_keywords" class="form-label">الكلمات المفتاحية</label>
                                    <textarea name="meta_keywords" class="form-control" id="meta_keywords" rows="3">{{ $settings->meta_keywords }}</textarea>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">تحديث الإعدادات</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
