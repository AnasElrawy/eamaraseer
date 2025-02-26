@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">أضف مشروعًا جديدًا</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                        @if(auth()->user()->role === 'employee')
                            <li class="breadcrumb-item"><a href="{{ route('employee.projects.index') }}">المشاريع</a></li>
                        @elseif(auth()->user()->role === 'admin')
                            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">المشاريع</a></li>
                        @endif  
                            <li class="breadcrumb-item active">أضف مشروع</li>
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
                        <h4 class="card-title mb-0">تفاصيل المشروع</h4>
                    </div>
                    <div class="card-body">
                    @if(auth()->user()->role === 'employee')
                        <form action="{{ route('employee.projects.store') }}" method="POST" enctype="multipart/form-data">
                    @elseif(auth()->user()->role === 'admin')
                        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                    @endif   
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div>
                                        <label for="title" class="form-label">عنوان المشروع</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="أدخل عنوان المشروع" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="image" class="form-label">الصورة الرئيسية</label>
                                        <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label for="description" class="form-label">وصف المشروع</label>
                                        <textarea name="description" class="form-control" id="description" rows="4" placeholder="أدخل وصف المشروع" required></textarea>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div>
                                        <label for="service_id" class="form-label">الخدمة</label>
                                        <select name="service_id" id="service_id" class="form-control" required>
                                            <option value="" disabled selected>اختر الخدمة</option>
                                            @foreach($services as $service)
                                                <option value="{{ $service->id }}">{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div>
                                        <label for="content" class="form-label">المحتوى</label>
                                        <textarea name="content" class="form-control" id="summernote" rows="6" placeholder="أدخل محتوى المشروع" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div>
                                        <label for="images" class="form-label">صور إضافية</label>
                                        <input type="file" name="images[]" class="form-control" id="images" accept="image/*" multiple>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">حفظ المشروع</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
