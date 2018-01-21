@extends('admin.layouts.master')

@section('title')
    طلبات  الزياره التشخيصيه
@endsection

@section('page-head')
    <div class="page-head">
        <div class="page-title">
            <h1>
                طلبات الزياره التشخيصيه

            </h1>
        </div>
    </div>
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="">
                طلبات الزياره التشخيصيه
            </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active"> طلبات عاديه
          </span>
        </li>
    </ul>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-list font-dark"></i>
                        <span class="caption-subject bold uppercase"> عرض كل الطلبات </span>
                    </div>
                    <div class="tools"></div>

                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">

                    </div>
                    <table class="table table-striped table-bordered table-hover  order-column"
                           id="sample_1">
                        <thead>
                        <tr>
                            <th> رقم الطلب</th>
                            <th> اسم المريض</th>
                            <th> الوقت</th>
                            <th> التاريخ</th>
                            <th> التحكم</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                            foreach($V as $v){                            
                            ?>

                        <tr class="odd gradeX">
                            <td>{{ $v->id }}</td>
                            <td>{{ $v->who_need_session }}  </td>
                            <td> {{ $v->time }} </td>
                            <td> {{ $v->date }}</td>
                            <td>
                                <a href="" class="btn btn-info"
                                   title="عرض بيانات الطلب"> <i class="fa fa-eye"></i> </a>
                            </td>
                        </tr>
<?php
                            } 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>

@endsection

@section('css')
    <link href="{{asset('assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap-rtl.css')}}"
          rel="stylesheet" type="text/css"/>

@endsection

@section('js-plugin')
    <script src="{{asset('assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}"
            type="text/javascript"></script>
@endsection


@section('js-script')
    <script src="{{asset('assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
@endsection