@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
  <div class="social-dash-wrap">
    <div class="row">
      <div class="col-lg-12">
        <div class="breadcrumb-main">
          <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.blank-menu-title') }}</h4>
          <div class="breadcrumb-action justify-content-center flex-wrap">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Estados de cuenta</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            @livewire('account-statements.account-statements-index')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection