<div class="sidebar__menu-group">
  <ul class="sidebar_nav">

    {{-- DASHBOARD --}}
    @can('dashboard')
    <li>
      <a href="" class="{{ Request::is(app()->getLocale().'/dashboards/demo-one') ? 'active':'' }}">
        <span class="nav-icon uil uil-create-dashboard"></span>
        <span class="menu-text">{{ trans('menu.dashboard-menu-title') }}</span>
      </a>
    </li>

    @endcan

    @can('clients')
    <li class="menu-title mt-10 ">
      <span>Clientes</span>
    </li>

    @can('clients.index')
    {{-- Clientes --}}
    <li>
      <a href="{{ route('clients.index',app()->getLocale()) }}"
        class="{{ Request::is(app()->getLocale().'/clients') || Request::is(app()->getLocale().'/clients/*') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Clientes</span>
        {{-- <span class="toggle-icon"></span> --}}
      </a>

    </li>
    @endcan {{-- end clients index --}}
    {{-- Clientes perfil de cliente --}}
    <li>
      <a href="{{
        route('clients.show',
        ['client'=>1,'language'=>app()->getLocale()] ) }}"
        class="{{  Request::is(app()->getLocale().'/clients/*') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Cliente</span>
        {{-- <span class="toggle-icon"></span> --}}
      </a>

    </li>
    {{-- Estados de cuenta --}}
    <li>
      <a href="{{ route('account_statements.index',app()->getLocale()) }}"
        class="{{ Request::is(app()->getLocale().'/account_statements') || Request::is(app()->getLocale().'/account_statements/*') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Estados de cuenta</span>
        {{-- <span class="toggle-icon"></span> --}}
      </a>

    </li>
    @endcan {{-- end clients --}}

    @can('control')
    <li class="menu-title mt-10 ">
      <span>CONTROL</span>
    </li>

    @can('control.users')
    {{-- USUARIOS --}}
    <li>
      <a href="{{ route('users.index',app()->getLocale()) }}"
        class="{{ Request::is(app()->getLocale().'/users') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Usuarios</span>
        {{-- <span class="toggle-icon"></span> --}}
      </a>

    </li>

    @endcan {{-- end control users --}}
    @can('control.roles')
    {{-- Roles --}}
    <li>
      <a href="{{ route('user.table',app()->getLocale()) }}"
        class="{{ Request::is(app()->getLocale().'/applications/user/*') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Roles</span>
        {{-- <span class="toggle-icon"></span> --}}
      </a>

    </li>


    @endcan {{-- end control roles --}}
    @endcan {{-- end control --}}

    @can('production')
    {{-- Produccion --}}
    <li class="menu-title mt-10 ">
      <span>Produccion</span>
    </li>
    <li
      class="has-child {{ Request::is(app()->getLocale().'/items') || Request::is(app()->getLocale().'/items/*') ? 'open':'' }}">
      <a href="#" class="{{ Request::is(app()->getLocale().'/items') ? 'active':'' }}">
        <span class="nav-icon uil uil-create-dashboard"></span>
        <span class="menu-text">Items</span>
        <span class="toggle-icon"></span>
      </a>
      <ul>
        <li class="{{
                  (request()->is(app()->getLocale().'/items') || Request::is(app()->getLocale().'/items/*')
                  ) && request()->query('tipo') === 'Tejidas'  ? 'active' :'' }}">
          <a href="{{ route('items.index', ['language'=> app()->getLocale(),'tipo' => 'Tejidas']) }}">
            Tejidas
          </a>
        </li>

        <li class="{{
                  (request()->is(app()->getLocale().'/items') || Request::is(app()->getLocale().'/items/*')
                  )&& request()->query('tipo') === 'Estampadas'  ? 'active':'' }}">
          <a href="{{ route('items.index', ['language'=> app()->getLocale(),'tipo' => 'Estampadas']) }}">Estampadas</a>
        </li>
        <li class="{{
              (request()->is(app()->getLocale().'/items') || Request::is(app()->getLocale().'/items/*')
                  ) && request()->query('tipo') === 'Transfers'  ? 'active':'' }}">
          <a href="{{ route('items.index', ['language'=> app()->getLocale(),'tipo' => 'Transfers']) }}">Transfers</a>
        </li>
        <li class="{{
              (request()->is(app()->getLocale().'/items') || Request::is(app()->getLocale().'/items/*')
                  ) && request()->query('tipo') === 'Impresas'  ? 'active':'' }}">
          <a href="{{ route('items.index', ['language'=> app()->getLocale(),'tipo' => 'Impresas']) }}">Hang
            tag</a>
        </li>
        <li class="{{
               (request()->is(app()->getLocale().'/items') || Request::is(app()->getLocale().'/items/*')
                  ) && request()->query('tipo') === 'Impresos'   ? 'active':'' }}">
          <a href="{{ route('items.index', ['language'=> app()->getLocale(),'tipo' => 'Impresos']) }}">Impresos</a>
        </li>

      </ul>
    </li>

    @endcan {{-- end produccion --}}

    @can('catalogs')
    {{-- Catalogos --}}
    <li class="menu-title mt-10 ">
      <span>CATALOGOS</span>
    </li>

    {{-- Unidades --}}
    <li>
      <a href="{{ route('enterprises.index',app()->getLocale()) }}"
        class="{{ Request::is(app()->getLocale().'/enterprises/*') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Empresas</span>
        {{-- <span class="toggle-icon"></span> --}}
      </a>

    </li>

    {{-- Condiciones de pago --}}
    <li>
      <a href="{{ route('payment_methods.index',app()->getLocale()) }}"
        class="{{ Request::is(app()->getLocale().'/applications/payment_condition/*') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Condiciones de pago </span>
        {{-- <span class="toggle-icon"></span> --}}
      </a>

    </li>
    {{-- Metodos de pago --}}
    <li>
      <a href="{{ route('payment_methods.index',app()->getLocale()) }}"
        class="{{ Request::is(app()->getLocale().'/applications/payment_method/*') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Metodos de pago</span>
        {{-- <span class="toggle-icon"></span> --}}
      </a>

    </li>
    {{-- Calibres --}}
    <li>
      <a href="{{ route('licences.index',app()->getLocale()) }}"
        class="{{ Request::is(app()->getLocale().'/applications/licences/*') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Licencias</span>
        {{-- <span class="toggle-icon"></span> --}}
      </a>

    </li>
    {{-- Zona entregas --}}
    {{-- <li>
      <a href="{{ route('user.table',app()->getLocale()) }}"
        class="{{ Request::is(app()->getLocale().'/applications/user/*') ? 'active':'' }}">
        <span class="nav-icon uil uil-users-alt"></span>
        <span class="menu-text">Zona entregas</span>
      </a>

    </li> --}}

    @endcan






  </ul>
</div>