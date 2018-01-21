@extends('admin.layouts.master')
@section('title')
      كتابه تقرير الزياره
@endsection
@section('page-head')
    <div class="page-head">
        <div class="page-title">
            <h1>
                تقرير الزياره
            </h1>
        </div>
    </div>
@endsection
@section('breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="">
                تقرير الزياره
            </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">  كتابه التقرير </span>
        </li>
    </ul>
@endsection
@section('content')
    @include('admin.includes.errors')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class="icon-plus font-green-haze"></i>
                        <span class="caption-subject bold uppercase"> كتابه تقرير الزياره </span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen"
                           href="javascript:;"
                           data-original-title="" title="">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-body">

                            {{ csrf_field() }}

                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label"> سبب الزيارة </label>
                                <div class="col-md-6">
                                    <input type="text" name="phone_code" class="form-control" required>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label">   الملاحظات الاكلينيكية </label>
                                <div class="col-md-6">
                                    <input type="text" name="phone_code" class="form-control" required>
                                    <div class="form-control-focus"></div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label"> هدف بعيد المدى </label>
                                <div class="col-md-6">
                                    <input type="text" name="phone_code" class="form-control" required>
                                    <div class="form-control-focus"></div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label"> هدف قريب المدى </label>
                                <div class="col-md-6">
                                    <input type="text" name="phone_code" class="form-control" required>
                                    <div class="form-control-focus"></div>
                                </div>
                            </div>

                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label"> الخطة العلاجية </label>
                                <div class="col-md-6">
                                    <input type="text" name="phone_code" class="form-control" required>
                                    <div class="form-control-focus"></div>
                                </div>
                            </div>
                            <div class="form-group form-md-line-input">
                                <label class="col-md-2 control-label"> الوصفة الطبية </label>
                                <div class="col-md-6">
                                    <input type="text" name="phone_code" class="form-control" required>
                                    <div class="form-control-focus"></div>
                                </div>
                            </div>

                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <button type="submit" class="btn blue">
                                        <i class="fa fa-check"></i>
                                         حفظ
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->

        </div>
    </div>



@endsection

@section('css')

    <link href="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet"
          type="text/css"/>



@endsection

@section('js-plugin')
    <script src="{{asset('assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}"
            type="text/javascript"></script>



@endsection
@section('js-script')

@endsection