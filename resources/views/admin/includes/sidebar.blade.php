<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">

            <li class="nav-item start ">
                <a href="{{url('')}}" class="nav-link nav-toggle">
                    <i class="fa fa-home"></i>
                    <span class="title">  {{ trans('main.home') }}</span>
                </a>
            </li>

            <li class="nav-item start ">
                <a href="{{url('admin/patients')}}" class="nav-link nav-toggle">
                    <i class="fa fa-home"></i>
                    <span class="title">  المرضى </span>
                </a>
            </li>

            <li class="nav-item start ">
                <a href="{{url('admin/doctors')}}" class="nav-link nav-toggle">
                    <i class="fa fa-home"></i>
                    <span class="title">  الدكاتره </span>
                </a>
            </li>

            <li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-gears"></i>
                    <span class="title"> طلبات التشخيص  </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="{{ url('admin/visit-order/1') }}" class="nav-link ">
                            <i class="icon-globe"></i>
                            <span class="title">  طلبات عاديه  </span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="{{ url('admin/visit-order/2') }}" class="nav-link ">
                            <i class="icon-globe"></i>
                            <span class="title">  طلبات عاجله  </span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item start ">
                <a href="{{url('admin/visits')}}" class="nav-link nav-toggle">
                    <i class="fa fa-home"></i>
                    <span class="title">  زيارات تشخيصيه  </span>
                </a>
            </li>
            <li class="nav-item start ">
                <a href="{{url('')}}" class="nav-link nav-toggle">
                    <i class="fa fa-home"></i>
                    <span class="title">  جلسات العلاج  </span>
                </a>
            </li>

    <!--
            <li class="nav-item start ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="fa fa-users"></i>
                    <span class="title"> {{ trans('main.users') }}</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item start ">
                        <a href="" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">  المرضى </span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">  التشخيص </span>
                        </a>
                    </li>
                    <li class="nav-item start ">
                        <a href="" class="nav-link ">
                            <i class="icon-users"></i>
                            <span class="title">  الدكاتره </span>
                        </a>
                    </li>
                </ul>
            </li>
    -->

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>