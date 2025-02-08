@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">تعديل الشريك</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('partners.index') }}">الشركاء</a></li>
                            <li class="breadcrumb-item active">تعديل الشريك</li>
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
                        <h4 class="card-title mb-0">تفاصيل الشريك</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div>
                                        <label for="name" class="form-label">اسم الشريك</label>
                                        <input type="text" name="name" class="form-control" id="name" value="{{ $partner->name }}" placeholder="أدخل اسم الشريك" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="image" class="form-label">شعار الشريك</label>
                                        <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                        @if($partner->image)
                                            <div class="mt-2">
                                                <img src="{{ asset('/' . $partner->image) }}" alt="الشعار الحالي" width="100">
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">تحديث الشريك</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
