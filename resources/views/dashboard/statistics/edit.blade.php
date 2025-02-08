@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">تعديل الإحصائية</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('statistics.update', $statistic->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div>
                                    <label for="name" class="form-label">اسم الإحصائية</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ $statistic->name }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <label for="count" class="form-label">عدد الإحصائية</label>
                                    <input type="number" name="count" class="form-control" id="count" value="{{ $statistic->count }}" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div>
                                    <label for="icon" class="form-label">أيقونة الإحصائية</label>
                                    <input type="file" name="icon" class="form-control" id="icon" accept="image/*">
                                </div>
                                @if($statistic->icon)
                                    <img src="{{ asset('/' . $statistic->icon) }}" alt="Current Icon" width="50" height="50">
                                @endif
                            </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">تحديث الإحصائية</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
