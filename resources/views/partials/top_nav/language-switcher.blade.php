<li class="nav-flag-select">
  <div class="dropdown-custom">
    @switch(app()->getLocale())
    @case('es')
    <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/spa.png') }}" alt=""
        class="rounded-circle"></a>
    @break
    @case('en')
    <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/eng.png') }}" alt=""
        class="rounded-circle"></a>
    @break
    @case('ar')
    <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/iraq.png') }}" alt=""
        class="rounded-circle"></a>
    @break
    @case('gr')
    <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/ger.png') }}" alt=""
        class="rounded-circle"></a>
    @break
    @default
    <a href="javascript:;" class="nav-item-toggle"><img src="{{ asset('assets/img/spa.png') }}" alt=""
        class="rounded-circle"></a>
    @break
    @endswitch
    {{-- <div class="dropdown-wrapper dropdown-wrapper--small">
      <a href="{{ route(Route::currentRouteName(),'es') }}"><img src="{{ asset('assets/img/spa.png') }}" alt="">
        Español</a>
      <a href="{{ route(Route::currentRouteName(),'en') }}"><img src="{{ asset('assets/img/eng.png') }}" alt="">
        English</a>
      <a href="{{ route(Route::currentRouteName(),'ar') }}"><img src="{{ asset('assets/img/iraq.png') }}" alt="">
        Arabic</a>
      <a href="{{ route(Route::currentRouteName(),'gr') }}"><img src="{{ asset('assets/img/ger.png') }}" alt="">
        German</a>
    </div> --}}
  </div>
</li>