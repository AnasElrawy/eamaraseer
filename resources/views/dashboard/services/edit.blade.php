@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">تعديل الخدمة</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('services.index') }}">الخدمات</a></li>
                            <li class="breadcrumb-item active">تعديل الخدمة</li>
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
                        <h4 class="card-title mb-0">تفاصيل الخدمة</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('services.update', $service->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <div class="col-md-12">
                                    <div>
                                        <label for="name" class="form-label">اسم الخدمة</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="أدخل اسم الخدمة" value="{{ old('name', $service->name) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label for="description" class="form-label">وصف الخدمة</label>
                                        <textarea name="description" class="form-control" id="description" rows="4" placeholder="أدخل وصف الخدمة" required>{{ old('description', $service->description) }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="image" class="form-label">صورة الخدمة</label>
                                        <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                        @if ($service->image)
                                            <img src="{{ asset('/' . $service->image) }}" alt="Current Image" width="100" class="mt-2">
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="icon" class="form-label">أيقونة الخدمة</label>
                                        <input type="file" name="icon" class="form-control" id="icon" accept="image/*">
                                        @if ($service->icon)
                                            <img src="{{ asset('/' . $service->icon) }}" alt="Current Icon" width="100" class="mt-2">
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">تحديث الخدمة</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
