<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
         <div class="pull-left image">
            <img src="{{ access()->user()->picture }}" class="img-circle" alt="User Image" />
         </div><!--pull-left-->
         <div class="pull-left info">
            <p>{{ access()->user()->full_name }}</p>
            <!-- Status -->
            <div>
               <p>{{ access()->user()->roles[0]->name }}</p>
            </div>
         </div><!--pull-left-->
      </div><!--user-panel-->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
         <li class="header">{{ trans('menus.backend.sidebar.general') }}</li>

         <li class="{{ active_class(Active::checkUriPattern('admin/dashboard')) }}">
            <a href="{{ route('admin.dashboard') }}">
               <i class="fa fa-dashboard"></i>
               <span>{{ trans('menus.backend.sidebar.dashboard') }}</span>
            </a>
         </li>

         <li class="header">{{ trans('menus.backend.sidebar.management') }}</li>

         <li class="{{ active_class(Active::checkUriPattern('admin/management/costing/project*')) }}">
            <a href="{{ route('admin.management.costing.project.index') }}">
               <i class="fa fa-money"></i>
               <span>{{ trans('menus.backend.costing_management.title') }}</span>
            </a>
         </li>

         <li class="{{ active_class(Active::checkUriPattern('admin/management/material_requisition/request*')) }}">
            <a href="{{ route('admin.management.material_requisition.request.index') }}">
               <i class="fa fa-wrench"></i>
               <span>{{ trans('menus.backend.material_requisition.title') }}</span>
            </a>
         </li>

         <li class="header">{{ trans('menus.backend.sidebar.system') }}</li>

         @role(1)
         <li class="{{ active_class(Active::checkUriPattern('admin/access/*')) }} treeview">
            <a href="#">
               <i class="fa fa-users"></i>
               <span>{{ trans('menus.backend.access.title') }}</span>

               @if ($pending_approval > 0)
               <span class="label label-danger pull-right">{{ $pending_approval }}</span>
               @else
               <i class="fa fa-angle-left pull-right"></i>
               @endif
            </a>

            <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/access/*'), 'menu-open') }}" style="display: none; {{ active_class(Active::checkUriPattern('admin/access/*'), 'display: block;') }}">
               <li class="{{ active_class(Active::checkUriPattern('admin/access/user*')) }}">
                  <a href="{{ route('admin.access.user.index') }}">
                     <i class="fa fa-circle-o"></i>
                     <span>{{ trans('labels.backend.access.users.management') }}</span>

                     @if ($pending_approval > 0)
                     <span class="label label-danger pull-right">{{ $pending_approval }}</span>
                     @endif
                  </a>
               </li>

               <li class="{{ active_class(Active::checkUriPattern('admin/access/role*')) }}">
                  <a href="{{ route('admin.access.role.index') }}">
                     <i class="fa fa-circle-o"></i>
                     <span>{{ trans('labels.backend.access.roles.management') }}</span>
                  </a>
               </li>
            </ul>
         </li>
         @endauth

         <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer*')) }} treeview">
            <a href="#">
               <i class="fa fa-list"></i>
               <span>{{ trans('menus.backend.log-viewer.main') }}</span>
               <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'menu-open') }}" style="display: none; {{ active_class(Active::checkUriPattern('admin/log-viewer*'), 'display: block;') }}">
               <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer')) }}">
                  <a href="{{ route('log-viewer::dashboard') }}">
                     <i class="fa fa-circle-o"></i>
                     <span>{{ trans('menus.backend.log-viewer.dashboard') }}</span>
                  </a>
               </li>

               <li class="{{ active_class(Active::checkUriPattern('admin/log-viewer/logs')) }}">
                  <a href="{{ route('log-viewer::logs.list') }}">
                     <i class="fa fa-circle-o"></i>
                     <span>{{ trans('menus.backend.log-viewer.logs') }}</span>
                  </a>
               </li>
            </ul>
         </li>
      </ul><!-- /.sidebar-menu -->
   </section><!-- /.sidebar -->
</aside>
