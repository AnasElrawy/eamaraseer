@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between">
                <h5 class="card-title mb-0">قائمة الخدمات</h5>
                <a href="{{ route('services.create') }}" class="btn btn-primary">
                    <i class="ri-add-line align-middle"></i> إضافة خدمة جديدة
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">قائمة الخدمات</h5>
                </div>
                <div class="card-body">
                    <table id="model-datatables" class="table table-bordered nowrap table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الخدمة</th>
                                <th>الصورة</th>
                                <th>الأيقونة</th>
                                <th>تاريخ الإنشاء</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($services as $index => $service)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td>
                                        @if($service->image)
                                            <img src="{{ asset('/' . $service->image) }}" alt="{{ $service->name }}" width="100">
                                        @else
                                            <span>لا توجد صورة</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($service->icon)
                                            <img src="{{ asset('/' . $service->icon) }}" alt="{{ $service->name }}" width="40">
                                        @else
                                            <span>لا توجد أيقونة</span>
                                        @endif
                                    </td>
                                    <td>{{ $service->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <a href="{{ route('services.edit', $service->id) }}" class="dropdown-item">
                                                        <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> تعديل
                                                    </a>
                                                </li>
                                                <li>
                                                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item text-danger">
                                                            <i class="ri-delete-bin-fill align-bottom me-2"></i> حذف
                                                        </button>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->
</div>
@endsection
