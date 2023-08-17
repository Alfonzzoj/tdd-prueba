@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
{{--
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css"> --}}

<div class="container-fluid">
  {{-- Breadcrumb --}}
  <div class="row">
    <div class="col-lg-12">
      <div class="breadcrumb-main">
        <h4 class="text-capitalize breadcrumb-title">Clientes</h4>



        <div class="breadcrumb-action justify-content-center flex-wrap">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">
                  <i class="las la-home"></i>Control
                </a>
              </li>
              {{-- TODO: traducir --}}

              <li class="breadcrumb-item active" aria-current="page">Clientes</li>
              {{-- <li class="breadcrumb-item"><a href="#">Apps</a></li> --}}
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>


  <!-- ends: Datos fiscales-->
</div>
{{-- Main Content --}}
<div class="row">
  <div class="col-12 mb-30">
    <div class="support-ticket-system support-ticket-system--search">
      <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
        <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
          <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
            {{-- TODO: traducir --}}
            <h4 class="text-capitalize fw-500 breadcrumb-title">Informacion de clientes registrados
            </h4>
          </div>
        </div>
        <div class="action-btn">
          {{-- Nuevo --}}
          @include('clients.partials.action-btn.new')

          {{-- <a href="#" class="btn btn-primary">
            Export
            <i class="las la-angle-down"></i>
          </a> --}}
        </div>
      </div>
      @livewire('clients.clients-index')
    </div>
  </div>

</div>
</div>

@endsection