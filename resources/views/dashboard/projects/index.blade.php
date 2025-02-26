@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between">
                <h5 class="card-title mb-0">قائمة المشاريع</h5>
            @if(auth()->user()->role === 'employee')
                <a href="{{ route('employee.projects.create') }}" class="btn btn-primary">
            @elseif(auth()->user()->role === 'admin')
                <a href="{{ route('projects.create') }}" class="btn btn-primary">
            @endif          
                    <i class="ri-add-line align-middle"></i> إضافة مشروع جديد
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">قائمة المشاريع</h5>
                </div>
                <div class="card-body">
                    <table id="model-datatables" class="table table-bordered nowrap table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>العنوان</th>
                                <th>الوصف</th>
                                <th>الخدمة</th>
                                <th>الموظف المسؤول</th>
                                <th>الصورة الرئيسية</th>
                                <th>تاريخ الإنشاء</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projects as $index => $project)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $project->title }}</td>
                                    <td>{{ \Illuminate\Support\Str::limit($project->description, 50) }}</td>
                                    <td>{{ $project->service->name ?? 'غير محدد' }}</td> 
                                    <td>{{ $project->employee->name ?? 'غير محدد' }}</td> 
                                    <td>
                                        <img src="{{ asset($project->image) }}" alt="{{ $project->title }}" width="100">
                                    </td>
                                    <td>{{ $project->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    
                                                @if(auth()->user()->role === 'employee')
                                                    <a href="{{ route('employee.projects.edit', $project->id) }}" class="dropdown-item">
                                                @elseif(auth()->user()->role === 'admin')
                                                    <a href="{{ route('projects.edit', $project->id) }}" class="dropdown-item">
                                                @endif  
                                                        <i class="ri-pencil-fill align-bottom me-2 text-muted"></i> تعديل
                                                    </a>
                                                </li>
                                                <li>
                                                @if(auth()->user()->role === 'employee')
                                                    <form action="{{ route('employee.projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                                                @elseif(auth()->user()->role === 'admin')
                                                    <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                                                @endif   
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

