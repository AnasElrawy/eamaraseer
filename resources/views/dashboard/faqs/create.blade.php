    @extends('dashboard.layouts.app')

    @section('content')
        <div class="container-fluid">

            <!-- Start Page Title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">أضف سؤالاً جديداً</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ route('faqs.index') }}">الأسئلة الشائعة</a></li>
                                <li class="breadcrumb-item active">أضف سؤال</li>
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
                            <h4 class="card-title mb-0">تفاصيل السؤال</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('faqs.store') }}" method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <div>
                                            <label for="title" class="form-label">عنوان السؤال</label>
                                            <input type="text" name="title" class="form-control" id="title" placeholder="أدخل عنوان السؤال" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div>
                                            <label for="content" class="form-label">محتوى السؤال</label>
                                            <textarea name="content" class="form-control" id="summernote" rows="4" placeholder="أدخل محتوى السؤال" required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary">حفظ السؤال</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection
