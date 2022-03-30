<div class="sidebar-menu-inner">

    <header class="logo-env">

        <!-- logo -->
        <div class="logo">
            <a href="index.html">
                <img src="{{asset('/')}}assets/images/logo@2x.png" width="120" alt="" />
            </a>
        </div>

        <!-- logo collapse icon -->
        <div class="sidebar-collapse">
            <a href="#" class="sidebar-collapse-icon">
                <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                <i class="entypo-menu"></i>
            </a>
        </div>


        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <!-- add class "with-animation" to support animation -->
                <i class="entypo-menu"></i>
            </a>
        </div>

    </header>


    <ul id="main-menu" class="main-menu">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- role -->
        <li class="{{request()->routeIs('role.*') ? 'active opened active' : '' }} has-sub">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span class="title">Role</span>
            </a>
            <ul class="{{request()->routeIs('role.*') ? 'visible' : '' }}">
                @can('role.index')
                <li class="{{request()->routeIs('role.index') ? 'active' : ''}}">
                    <a href="#">
                        <i class="entypo-flow-line"></i>
                        <span class="title">Roles</span>
                    </a>
                </li>
                @endcan
                @can('role.create')
                <li class="{{request()->routeIs('role.create') ? 'active' : ''}}">
                    <a href="{{route('role.create')}}">
                        <i class="entypo-flow-line"></i>
                        <span class="title">Create</span>
                    </a>
                </li>
                @endcan
            </ul>
        </li>

        <li class="{{request()->routeIs('permission.*') ? 'active opened active' : '' }} has-sub">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span class="title">Permission</span>
            </a>
            <ul class="{{request()->routeIs('permission.*') ? 'visible' : '' }}">
                @can('permission.index')
                <li class="{{request()->routeIs('permission.index') ? 'active' : ''}}">
                    <a href="#">
                        <i class="entypo-flow-line"></i>
                        <span class="title">Permissions</span>
                    </a>
                </li>
                @endcan
                @can('permission.create')
                <li class="{{request()->routeIs('permission.create') ? 'active' : ''}}">
                    <a href="{{route('permission.create')}}">
                        <i class="entypo-flow-line"></i>
                        <span class="title">Create</span>
                    </a>
                </li>
                @endcan
            </ul>
        </li>
        <!-- role -->
        <!-- <li class="active opened active has-sub">
            <a href="#">
                <i class="entypo-flow-tree"></i>
                <span class="title">Menu Levels</span>
            </a>
            <ul class="visible">
                <li class="active">
                    <a href="#">
                        <i class="entypo-flow-line"></i>
                        <span class="title">Menu Level 1.1</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="entypo-flow-line"></i>
                        <span class="title">Menu Level 1.2</span>
                    </a>
                </li>
                <li class="has-sub">
                    <a href="#">
                        <i class="entypo-flow-line"></i>
                        <span class="title">Menu Level 1.3</span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-parallel"></i>
                                <span class="title">Menu Level 2.1</span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a href="#">
                                <i class="entypo-flow-parallel"></i>
                                <span class="title">Menu Level 2.2</span>
                            </a>
                            <ul>
                                <li class="has-sub">
                                    <a href="#">
                                        <i class="entypo-flow-cascade"></i>
                                        <span class="title">Menu Level 3.1</span>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="entypo-flow-branch"></i>
                                                <span class="title">Menu Level 4.1</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="entypo-flow-cascade"></i>
                                        <span class="title">Menu Level 3.2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="entypo-flow-parallel"></i>
                                <span class="title">Menu Level 2.3</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li> -->
    </ul>

</div>