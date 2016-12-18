<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('menus.general') }}</li>

            <!--  Catalog -->
            <ul class="treeview-menu menu-open" style="display: block;">
                <li class=" treeview menu-open">
                    <a href="#">
                        <span>{{ trans('innovate.menus.category') }}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li class="">
                            <a href="{!! url('admin/category') !!}">{{ trans('innovate.menus.product_category') }}</a>
                        </li>

                    </ul>
                </li>


                <li class="active">
                    <a href="{!! url('admin/product') !!}">{{ trans('innovate.menus.product') }}</a>
                </li>
            </ul><!--  End Catalog -->


            <!--  Sales -->
            <ul class="treeview-menu menu-open" style="display: block;">
                <li class="menu-open treeview">
                    <a href="#">
                        <span>{{ trans('innovate.menus.sales') }}</span>
                        <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu menu-open" style="display: block;">
                        <li class="">
                            <a href="{!! url('admin/order') !!}">{{ trans('innovate.menus.order') }}</a>
                        </li>
                        <li class="">
                            <a href="{!! url('admin/stock') !!}">{{ trans('innovate.menus.stock') }}</a>
                        </li>
                    </ul>
                </li>
                <!--  End Sales -->

            <li class=""><a
                        href="{!!url('admin/access/users')!!}"><span>{{ trans('menus.access_management') }}</span></a>
            </li>


            <li class="treeview">
                <a href="#">
                    <span>{{ trans('menus.log-viewer.main') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu menu-open" style="display: block">
                    <li class="">
                        <a href="{!! url('admin/log-viewer') !!}">{{ trans('menus.log-viewer.dashboard') }}</a>
                    </li>
                    <li class="">
                        <a href="{!! url('admin/log-viewer/logs') !!}">{{ trans('menus.log-viewer.logs') }}</a>
                    </li>
                </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
