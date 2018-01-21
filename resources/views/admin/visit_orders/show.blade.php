@extends('admin.layouts.master')
@section('title')
    المعالج
@endsection
@section('page-head')
    <div class="page-head">
        <div class="page-title">
            <h1> المعالجين

            </h1>
        </div>
    </div>
@endsection
@section('breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="">
                المعالج
            </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">    اسم المعالج </span>
        </li>
    </ul>
@endsection
@section('content')


    <!-- BEGIN PAGE BASE CONTENT -->
    <div class="row">
        <div class="col-md-12">
            <!-- Begin: life time stats -->
            <div class="portlet light portlet-fit portlet-datatable bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase"> رقم الطلب  #12313232
                                            <span class="hidden-xs">| Dec 27, 2013 7:16:25 </span>
                                        </span>
                    </div>

                </div>
                <div class="portlet-body">

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="portlet yellow-crusta box">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i> متى بدأ الالم
                                    </div>

                                </div>
                                <div class="portlet-body">
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> Order #:</div>
                                        <div class="col-md-7 value"> 12313232
                                            <span class="label label-info label-sm"> Email confirmation was sent </span>
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> Order Date & Time:</div>
                                        <div class="col-md-7 value"> Dec 27, 2013 7:16:25 PM</div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> Order Status:</div>
                                        <div class="col-md-7 value">
                                            <span class="label label-success"> Closed </span>
                                        </div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> Grand Total:</div>
                                        <div class="col-md-7 value"> $175.25</div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> Payment Information:</div>
                                        <div class="col-md-7 value"> Credit Card</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="portlet blue-hoki box">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i>بيانات المريض
                                    </div>
                                    <div class="actions">
                                        <a href="javascript:;" class="btn btn-default btn-sm">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> Customer Name:</div>
                                        <div class="col-md-7 value"> Jhon Doe</div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> Email:</div>
                                        <div class="col-md-7 value"> jhon@doe.com</div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> State:</div>
                                        <div class="col-md-7 value"> New York</div>
                                    </div>
                                    <div class="row static-info">
                                        <div class="col-md-5 name"> Phone Number:</div>
                                        <div class="col-md-7 value"> 12234389</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="portlet green-meadow box">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-cogs"></i> عنوان المريض
                                    </div>
                                    <div class="actions">
                                        <a href="javascript:;" class="btn btn-default btn-sm">
                                            <i class="fa fa-pencil"></i> Edit </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="row static-info">
                                        <div class="col-md-12 value"> Jhon Done
                                            <br> #24 Park Avenue Str
                                            <br> New York
                                            <br> Connecticut, 23456 New York
                                            <br> United States
                                            <br> T: 123123232
                                            <br> F: 231231232
                                            <br></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="#responsive" class="btn btn-success " data-toggle="modal"> <i
                                        class="fa fa-check"></i> قبول </a>
                            <a href="" class="btn btn-danger"> <i class="fa fa-remove"></i> رفض </a>
                        </div>
                    </div>
                    @include('admin.visit_orders.approve_modal')

                </div>


            </div>
            <!-- End: life time stats -->
        </div>
    </div>
    <!-- END PAGE BASE CONTENT -->

@endsection

@section('css')




@endsection

@section('js-plugin')
    <script src="{{asset('assets/global/plugins/jquery-ui/jquery-ui.min.js')}}" type="text/javascript"></script>

@endsection
@section('js-script')
    <script src="{{asset('assets/pages/scripts/ui-modals.min.js')}}" type="text/javascript"></script>

@endsection