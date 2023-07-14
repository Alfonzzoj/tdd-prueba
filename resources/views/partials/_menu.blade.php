<div class="sidebar__menu-group">
    <ul class="sidebar_nav">

        {{-- DASHBOARD --}}
        <li>
            <a href="" class="{{ Request::is(app()->getLocale().'/dashboards/demo-one') ? 'active':'' }}">
                <span class="nav-icon uil uil-create-dashboard"></span>
                <span class="menu-text">{{ trans('menu.dashboard-menu-title') }}</span>
            </a>
        </li>

        <li class="menu-title mt-10 ">
            <span>Clientes</span>
        </li>

        {{-- Clientes --}}
        <li>
            <a href="{{ route('clients.index',app()->getLocale()) }}"
                class="{{ Request::is(app()->getLocale().'/clients') || Request::is(app()->getLocale().'/clients/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-users-alt"></span>
                <span class="menu-text">Clientes</span>
                {{-- <span class="toggle-icon"></span> --}}
            </a>

        </li>
        <li class="menu-title mt-10 ">
            <span>CONTROL</span>
        </li>

        {{-- USUARIOS --}}
        <li>
            <a href="{{ route('user.table',app()->getLocale()) }}"  class="{{ Request::is(app()->getLocale().'/applications/user/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-users-alt"></span>
                <span class="menu-text">{{ trans('menu.user-menu-title') }}</span>
                {{-- <span class="toggle-icon"></span> --}}
            </a>

        </li>
        {{-- Roles --}}
        <li>
            <a href="{{ route('user.table',app()->getLocale()) }}"  class="{{ Request::is(app()->getLocale().'/applications/user/*') ? 'active':'' }}">
                <span class="nav-icon uil uil-users-alt"></span>
                <span class="menu-text">Roles</span>
                {{-- <span class="toggle-icon"></span> --}}
            </a>

        </li>



    </ul>
</div>
