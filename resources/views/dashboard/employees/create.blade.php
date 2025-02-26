@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">

        <!-- Start Page Title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">إضافة موظف جديد</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('employees.index') }}">الموظفون</a></li>
                            <li class="breadcrumb-item active">إضافة موظف</li>
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
                        <h4 class="card-title mb-0">تفاصيل الموظف</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('employees.store') }}" method="POST">
                            @csrf
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div>
                                        <label for="name" class="form-label">اسم الموظف</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="أدخل اسم الموظف" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="email" class="form-label">البريد الإلكتروني</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder="أدخل البريد الإلكتروني" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="password" class="form-label">كلمة المرور</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder="أدخل كلمة المرور" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="أعد إدخال كلمة المرور" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">حفظ الموظف</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
