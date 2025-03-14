@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">أضف مراجعة جديدة</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('reviews.index') }}">المراجعات</a></li>
                        <li class="breadcrumb-item active">أضف مراجعة</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">تفاصيل المراجعة</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('reviews.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-12">
                                <div>
                                    <label for="name" class="form-label">اسم العميل</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="أدخل اسم العميل" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <label for="rating" class="form-label">التقييم</label>
                                    <textarea name="rating" class="form-control" id="summernote"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <label for="image" class="form-label">صورة المراجعة</label>
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">حفظ المراجعة</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
