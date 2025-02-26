
@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">تعديل الموظف</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div>
                                    <label for="name" class="form-label">الاسم</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ $employee->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" name="email" class="form-control" id="email" value="{{ $employee->email }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="password" class="form-label">كلمة المرور (اتركها فارغة إذا لا تريد تغييرها)</label>
                                    <input type="password" name="password" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="password_confirmation" class="form-label">تأكيد كلمة المرور</label>
                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">حفظ التعديلات</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
