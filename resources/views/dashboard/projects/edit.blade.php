@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">تحديث المشروع</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">المشاريع</a></li>
                            <li class="breadcrumb-item active">تحديث المشروع</li>
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
                        <form action="{{ route('projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <!-- حقل العنوان -->
                                <div class="col-md-6">
                                    <div>
                                        <label for="title" class="form-label">عنوان المشروع</label>
                                        <input type="text" name="title" class="form-control" id="title" value="{{ $project->title }}" placeholder="أدخل عنوان المشروع" required>
                                    </div>
                                </div>
                                <!-- حقل الصورة الرئيسية -->
                                <div class="col-md-6">
                                    <div>
                                        <label for="image" class="form-label">الصورة الرئيسية</label>
                                        <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                        @if ($project->image)
                                            <img src="{{ asset($project->image) }}" alt="الصورة الحالية" width="100" class="mt-2">
                                        @endif
                                    </div>
                                </div>
                                <!-- الوصف -->
                                <div class="col-md-12">
                                    <div>
                                        <label for="description" class="form-label">وصف المشروع</label>
                                        <textarea name="description" class="form-control" id="description" rows="4" placeholder="أدخل وصف المشروع" required>{{ $project->description }}</textarea>
                                    </div>
                                </div>
                                <!-- المحتوى -->
                                <div class="col-md-12">
                                    <div>
                                        <label for="content" class="form-label">المحتوى</label>
                                        <textarea name="content" class="form-control" id="summernote" rows="6" placeholder="أدخل محتوى المشروع" required>{{ $project->content }}</textarea>
                                    </div>
                                </div>
                                <!-- الصور المتعددة -->
                                <div class="col-md-12">
                                    <div>
                                        <label for="images" class="form-label">صور إضافية</label>
                                        <input type="file" name="images[]" class="form-control" id="images" accept="image/*" multiple>
                                        @if ($project->images)
                                            <div class="mt-2">
                                                @foreach (json_decode($project->images) as $image)
                                                    <img src="{{ asset($image) }}" alt="صورة إضافية" width="100" class="me-2">
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">تحديث المشروع</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
