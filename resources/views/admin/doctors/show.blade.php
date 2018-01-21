@extends('admin.layouts.master')
@section('title')
    المعالج
@endsection
@section('page-head')
    <div class="page-head">
        <div class="page-title">
            <h1>    المعالجين

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
                        <i class="icon-user font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase"> اسم المعالج
                                            <span class="hidden-xs">| Dec 27, 2013 7:16:25 </span>
                                        </span>
                    </div>

                </div>
                <div class="portlet-body">
                                <div class="row">

                                    <div class="col-md-10 col-sm-12">
                                        <div class="portlet green box">
                                            <div class="portlet-title">
                                                <div class="caption">
                                                    <i class="fa fa-user"></i> بيانات المعالج  </div>

                                            </div>
                                            <div class="portlet-body">
                                                <div class="row static-info">
                                                    <?Php 
                                                    foreach ($Dr as $dr){
                                                        ?>
                                                    
                                                    <div class="col-md-5 name"> الاسم : </div>
                                                    <div class="col-md-7 value">{{$dr->name }}</div>
                                                </div>
                                                <div class="row static-info">
                                                    <div class="col-md-5 name"> البريد : </div>
                                                    <div class="col-md-7 value"> {{$dr->email }} </div>
                                                </div>
                                                <div class="row static-info">
                                                    <div class="col-md-5 name">  الرقم القومي  : </div>
                                                    <div class="col-md-7 value"> {{$dr->national_id }} </div>
                                                </div>
                                                <div class="row static-info">
                                                    <div class="col-md-5 name"> رقم التلفون  : </div>
                                                    <div class="col-md-7 value"> {{$dr->phone }} </div>
                                                </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <div class="row">
                        <div class="col-md-6">
                          <a href="{{ route('doctors.approve',$dr->id) }}" class="btn btn-success" title="قبول المعالج" > <i class="fa fa-check"></i> قبول    </a>

                            <a href="" class="btn btn-danger" > <i class="fa fa-remove"></i> رفض    </a>
                        </div>
                            <?php 
                                                    }
                                                    ?>
                    </div>

                </div>



            </div>
            <!-- End: life time stats -->
        </div>
    </div>
    <!-- END PAGE BASE CONTENT -->

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