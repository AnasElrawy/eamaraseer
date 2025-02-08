@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">أضف شريط التمرير الجديد</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('sliders.index') }}">الصور</a></li>
                            <li class="breadcrumb-item active">أضف شريط التمرير</li>
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
                        <h4 class="card-title mb-0">تفاصيل شريط التمرير</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('sliders.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div>
                                        <label for="title" class="form-label">عنوان شريط التمرير</label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="أدخل عنوان شريط التمرير" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="image" class="form-label">صورة شريط التمرير</label>
                                        <input type="file" name="image" class="form-control" id="image" accept="image/*" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">حفظ شريط التمرير</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
