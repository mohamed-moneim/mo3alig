@extends('admin.layouts.master')
@section('title')
    {{ trans('main.country') }}
@endsection
@section('page-head')
    <div class="page-head">
        <div class="page-title">
            <h1>    {{ trans('main.country') }}

            </h1>
        </div>
    </div>
@endsection
@section('breadcrumb')
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="">
                {{ trans('main.country') }}
            </a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">    {{ trans('main.add_country') }}</span>
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
                        <span class="caption-subject bold uppercase"> {{ trans('main.add_country') }} </span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen"
                           href="javascript:;"
                           data-original-title="" title="">
                        </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form role="form" action="{{ route('country.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-body">

                            @include('admin.country.fields')
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-10">
                                    <button type="submit" class="btn blue">
                                        <i class="fa fa-check"></i>
                                        {{ trans('main.add') }}
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