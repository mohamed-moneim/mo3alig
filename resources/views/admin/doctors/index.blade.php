@extends('admin.layouts.master')

@section('title')
    المعالج
@endsection

@section('page-head')
    <div class="page-head">
        <div class="page-title">
            <h1> المعالج
            </h1>
        </div>
    </div>
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="">المعالج </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">  كل المعالجين </span>
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
                        <span class="caption-subject bold uppercase"> عرض كل المعالجين </span>
                    </div>
                    <div class="tools"></div>

                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a id="sample_editable_1_new" href=""
                                       class="btn sbold green">
                                        <i class="fa fa-plus"></i>
                                        اضافه معالج
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover  order-column"
                           id="sample_1">
                        <thead>
                        <tr>
                            <th> اسم معالج </th>
                            <th> الرقم القومى </th>
                            <th> رقم التلفون  </th>
                            <th> التحكم </th>
                        </tr>
                        </thead>
                        <tbody>
                           <?php
                           foreach($Dr as $dr){
                           
                           ?>
                        <tr class="odd gradeX">
                            <td>
                                 {{ $dr->name }}
                            </td>
                            <td>
                                 {{ $dr->national_id }}
                            </td>
                            <td>
                                 {{ $dr->phone }}
                            </td>
                            <td>
                                <a href="{{ route('doctors.approve',$dr->id) }}" class="btn btn-success" title="قبول المعالج" >  <i class="fa fa-check" ></i>  </a>
                                <a href="{{ route('doctors.show',$dr->id) }}" class="btn btn-info" title="عرض بيانات المعالج" >  <i class="fa fa-eye" ></i>  </a>
                                <a href="" class="btn btn-danger" title="مسح" >  <i class="fa fa-trash" ></i>  </a>

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