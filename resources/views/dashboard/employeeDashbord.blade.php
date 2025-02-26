@extends('dashboard.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-8">
                <div>
                    <h4 class="mb-4 text-primary">مرحبًا بك، {{ auth()->user()->name }}</h4>
                    
                    <div class="row gy-4">
                        <div class="col-sm-6">
                            <div class="text-center bg-light p-3 rounded">
                                <p class="text-uppercase fw-medium text-muted text-truncate fs-md">مشاريعي</p>
                                <h4 class="fw-semibold mb-3 text-primary">{{ $myProjectsCount }}</h4>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <h5 class="mb-3 text-secondary">أحدث مشاريعي</h5>
                        <div class="list-group">
                            @forelse($latestMyProjects as $project)
                                <a href="{{ route('projects.show', $project->id) }}" class="list-group-item list-group-item-action">
                                    <h6 class="mb-1 text-dark">{{ $project->title }}</h6>
                                    <p class="mb-1 text-muted">{{ Str::limit($project->description, 80) }}</p>
                                    <small class="text-info">تم الإنشاء بتاريخ: {{ $project->created_at->format('Y-m-d') }}</small>
                                </a>
                            @empty
                                <p class="text-center text-muted">لا توجد مشاريع حتى الآن.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="d-none d-xl-block">
                    <div class="card bg-primary-subtle shadow-none rounded-0 border-0 dashboard-widgets-wrapper">
                        <div class="card-body text-center mt-5 pt-5">
                            <h5>مرحبًا بك في لوحة تحكم الموظفين</h5>
                            <p class="text-muted fs-md">يمكنك إدارة مشاريعك وتتبع تقدم العمل بسهولة</p>
                            <img src="{{ asset('dashboard') }}/images/employeeDashboard.webp" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
