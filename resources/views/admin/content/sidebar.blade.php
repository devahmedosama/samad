<div class="left side-menu">
                <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
                    <i class="ion-close"></i>
                </button>

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{ URL::to('admin') }}" class="logo"><i class="mdi mdi-assistant"></i>{{ $setting->name }}</a>
                        <!-- <a href="index.html" class="logo"><img src="{{ URL::to('assets/admin') }}/images/logo.png" height="24" alt="logo"></a> -->
                    </div>
                </div>

                <div class="sidebar-inner slimscrollleft">

                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="{{ URL::to('admin') }}" class="waves-effect">
                                    <i class="mdi mdi-airplay"></i>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-layers"></i> <span> Home parts </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ URL::to('admin/pages/add') }}">New part</a></li>
                                    <li><a href="{{ URL::to('admin/pages') }}">All </a></li>
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-bullseye"></i> <span> Projects </span> <span class="float-right"><i class="mdi mdi-chevron-right"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{ URL::to('admin/projects/add') }}">New project</a></li>
                                    <li><a href="{{ URL::to('admin/projects') }}">All </a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{ URL::to('admin/settings') }}" class="waves-effect"><i class="mdi mdi-calendar-clock"></i><span> Settings </span></a>
                            </li>

                            

                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div> <!-- end sidebarinner -->
            </div>