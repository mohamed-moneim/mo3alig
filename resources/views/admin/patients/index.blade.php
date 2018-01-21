@extends('admin.layouts.master')

@section('title')
    المرضى
@endsection

@section('page-head')
    <div class="page-head">
        <div class="page-title">
            <h1> المرضى
            </h1>
        </div>
    </div>
@endsection

@section('breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="">المرضى </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">  كل المرضى </span>
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
                        <span class="caption-subject bold uppercase"> عرض كل المرضى </span>
                    </div>
                    <div class="tools"></div>

                </div>
                <div class="portlet-body">
                    <div class="table-toolbar">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="btn-group">
                                    <a id="sample_editable_1_new" href="{{ url('country/create') }}"
                                       class="btn sbold green">
                                        <i class="fa fa-plus"></i>
                                        اضافه مريض
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
                            <th> اسم المريض </th>
                            <th> الرقم القومى </th>
                            <th> رقم التلفون  </th>
                            <th> التحكم </th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                              foreach ($patient as $u){
                                        ?>
                            <tr class="odd gradeX">
                                <td>
                            {{ $u->name    }}
                                </td>
                                <td>
                                                                {{ $u->national_id   }}

                                </td>
                                <td>
                                                                {{  $u->phone    }}

                                </td>
                                <td>
                                    <a href="" class="btn btn-info" title="تعديل" >  <i class="fa fa-pencil" ></i>  </a>
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
