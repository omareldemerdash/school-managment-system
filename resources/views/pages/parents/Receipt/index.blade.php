@extends('layouts.master')
@section('css')
    @toastr_css
@section('title')
{{trans('main_trans.received_fees')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
@section('PageTitle')
{{trans('main_trans.received_fees')}}
@stop
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">
                <div class="col-xl-12 mb-30">
                    <div class="card card-statistics h-100">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                    data-page-length="50" style="text-align: center">
                                    <thead>
                                        <tr class="alert-success">
                                            <th>#</th>
                                            <th>الاسم</th>
                                            <th>المبلغ</th>
                                            <th>البيان</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($receipt_students as $receipt_student)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $receipt_student->student->name }}</td>
                                                <td>{{ number_format($receipt_student->Debit, 2) }}</td>
                                                <td>{{ $receipt_student->description }}</td>
                                            </tr>
                                        @endforeach
                                    <tfoot>
                                        <tr class="alert-info">

                                            <td>رصيد الطالب :</td>
                                            <td>{{ number_format($student->student_account->sum('Debit') - $student->student_account->sum('credit'), 2) }}
                                            </td>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')
@toastr_js
@toastr_render
@endsection
