@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">إضافة إحصائية جديدة</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('statistics.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div>
                                    <label for="name" class="form-label">اسم الإحصائية</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="أدخل اسم الإحصائية" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="count" class="form-label">عدد الإحصائية</label>
                                    <input type="number" name="count" class="form-control" id="count" placeholder="أدخل عدد الإحصائية" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <label for="icon" class="form-label">أيقونة الإحصائية</label>
                                    <input type="file" name="icon" class="form-control" id="icon" accept="image/*" required>
                                </div>
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">حفظ الإحصائية</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
