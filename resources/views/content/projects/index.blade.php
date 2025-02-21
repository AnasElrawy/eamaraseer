@extends('content.layouts.app')

@section('head')
    <title>جميع المشاريع</title>
@endsection

@section('content')
    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/bg/breadcumb-bg.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="breadcumb-content text-center">
                        <h1 class="breadcumb-title">جميع المشاريع</h1>
                        <ul class="breadcumb-menu">
                            <li><a href="{{ route('index') }}">الرئيسية</a></li>
                            <li>المشاريع</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row g-4">
                @foreach ($projects as $project)
                    <div class="col-lg-4 col-md-6">
                        <div class="card project-card h-100 shadow-sm border-0">
                            <a href="{{ route('project', $project->id) }}" class="image-hover">
                                <img src="{{ asset($project->images ? json_decode($project->images)[0] : 'assets/img/default.png') }}" 
                                     class="card-img-top rounded-top" alt="{{ $project->title }}">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $project->title }}</h5>
                                <p class="card-text text-muted">{{ Str::limit(strip_tags($project->content), 300) }}</p>
                                {{-- <a href="{{ route('project', $project->id) }}" class="btn btn-primary btn-sm"> --}}
                                    <a href="{{ route('project', $project->id) }}" class="th-btn style4 ">
                                    عرض التفاصيل <i class="fas fa-arrow-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($projects->isEmpty())
                <div class="text-center mt-5">
                    <h4 class="text-muted">لا توجد مشاريع متاحة حاليًا</h4>
                </div>
            @endif
        </div>
    </section>

    <style>
        .image-hover img {
            transition: transform 0.3s ease-in-out;
        }
        .image-hover:hover img {
            transform: scale(1.05);
        }
        .btn-primary {
            background-color: #1c2d37;
            border: none;
            transition: background-color 0.3s;
        }
        .btn-primary:hover {
            background-color: #1c2d37;
        }
        .card {
            transition: transform 0.3s ease-in-out;
        }
        .card:hover {
            transform: translateY(-5px);
        }
    </style>
@endsection
