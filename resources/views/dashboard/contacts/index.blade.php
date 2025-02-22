@extends('dashboard.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="d-flex justify-content-between">
                <h5 class="card-title mb-0">قائمة الرسائل</h5>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">جدول الرسائل</h5>
                </div>
                <div class="card-body">
                    <table id="model-datatables" class="table table-bordered nowrap table-striped align-middle" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>رقم الهاتف</th>
                                <th>الرسالة</th>
                                <th>تاريخ الإرسال</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contacts as $index => $contact)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>{{ $contact->message }}</td>
                                    <td>{{ $contact->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        <div class="dropdown d-inline-block">
                                            <button class="btn btn-subtle-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-fill align-middle"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li>
                                                    <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display: inline;">
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

@section('scripts')

<script>
    
    $(document).ready(function() {
        console.log("jQuery و DataTables يعملان!");
    
        $('#model-datatables').DataTable().destroy();

        $('#model-datatables').DataTable({
            dom: 'Bfrtip', // تحديد مكان ظهور الأزرار
            buttons: [
                {
                    extend: 'copy',
                    text: 'نسخ',
                    className: 'btn  mb-3'
                },
                {
                    extend: 'excel',
                    text: 'تصدير Excel',
                    className: 'btn mb-3'
                },
                {
                    extend: 'print',
                    text: 'طباعة',
                    className: 'btn mb-3'
                }
            ],
            language: {
                // url: "//cdn.datatables.net/plug-ins/1.11.5/i18n/Arabic.json"
                url: "/assets/fonts/ar.json"
            }
        });
    });
    
</script>

@endsection

