<?php

?>

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        {{--<ul class="sidebar-menu">--}}
            {{--@can('system')--}}
            {{--<li class="treeview {{ (Request::is('admin/permissions') ||  Request::is('admin/users') ||  Request::is('admin/roles'))? 'active' : '' }}">--}}
                {{--<a href="#">--}}
                    {{--<i class="fa fa-dashboard"></i> <span>Platform Management</span>--}}
                    {{--<span class="pull-right-container"></span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="/admin/permissions"><i class="fa fa-circle-o"></i> Authority Management</a></li>--}}
                    {{--<li><a href="/admin/users"><i class="fa fa-circle-o"></i> Users Management</a></li>--}}
                    {{--<li><a href="/admin/roles"><i class="fa fa-circle-o"></i> Role Management</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
            {{--@endcan--}}
            {{--@can('post')--}}
            {{--<li class="{{ Request::is('admin/posts')? 'active' : '' }}">--}}
                {{--<a href="/admin/posts">--}}
                    {{--<i class="fa fa-dashboard"></i> <span>Articles Management</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@endcan--}}

            {{--@can('topic')--}}
            {{--<li class="{{ Request::is('admin/topics')? 'active' : '' }}">--}}
                {{--<a href="/admin/topics">--}}
                    {{--<i class="fa fa-dashboard"></i> <span>Topics Management</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@endcan--}}

            {{--@can('notice')--}}
            {{--<li class="{{ Request::is('admin/notices')? 'active' : '' }}">--}}
                {{--<a href="/admin/notices">--}}
                    {{--<i class="fa fa-dashboard"></i> <span>Notice Management</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--@endcan--}}
        {{--</ul>--}}
    </section>
    <!-- /.sidebar -->
</aside>