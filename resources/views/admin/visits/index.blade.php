@extends('admin.layouts.master')

@section('title')
      الزياره التشخيصيه
@endsection

@section('page-head')
    <div class="page-head">
        <div class="page-title">
            <h1>
                  الزياره التشخيصيه

            </h1>
        </div>
    </div>
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="">
                  الزياره التشخيصيه
            </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">
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
                        <span class="caption-subject bold uppercase"> عرض كل الزيارات  </span>
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
                            
                            <th>  اسم المعالج  </th>
                            <th>  اسم المريض </th>
                            <th>   حاله الزياره  </th>
                            <th> الوقت  </th>
                            <th> التاريخ </th>
                            <th> التحكم  </th>
                        </tr>
                        </thead>
                        <tbody>
 <?Php 
                                                    foreach ($vis as $v){                                                   
                                                        ?>
                                                    
                        <tr class="odd gradeX">
                            <td>{{ $v->n}} </td>
                            <td> {{ $v->name}} </td>
                            <td>
                                <span class="label label-sm label-success"> منتهيه  </span>
                            </td>
                            <td> {{ $v->time }}</td>
                            <td> {{ $v->date }} </td>
                            <td>
                                <a href="{{ url('admin/visits-report') }}" class="btn btn-info" title=" كتابه تقرير " >  <i class="fa fa-pencil" ></i>  </a>
                                <a href="" class="btn btn-success" title=" عرض التقييم " >  <i class="fa fa-star" ></i>  </a>
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