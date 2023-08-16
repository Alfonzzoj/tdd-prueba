@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<div class="container-fluid">
  {{-- Breadcrumb --}}
  <div class="row">
    <div class="col-lg-12">
      <div class="breadcrumb-main">
        <h4 class="text-capitalize breadcrumb-title">Items</h4>
        <div class="breadcrumb-action justify-content-center flex-wrap">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">
                  <i class="las la-home"></i>Produccion
                </a>
              </li>
              {{-- TODO: traducir --}}

              <li class="breadcrumb-item active" aria-current="page">Items</li>
              {{-- <li class="breadcrumb-item"><a href="#">Apps</a></li> --}}
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>

  {{-- Main Content --}}
  <div class="row">
    <div class="col-12 mb-30">
      <div class="support-ticket-system support-ticket-system--search">
        <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
          <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
            <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
              {{-- TODO: traducir --}}
              <h4 class="text-capitalize fw-500 breadcrumb-title">Informacion de Items registrados</h4>
            </div>
          </div>
          <div class="action-btn">
            <a href="{{ route('items.create',['language'=>app()->getLocale(),'tipo'=>$tipo]) }}"
              class="btn btn-primary">
              Nuevo
            </a>

            {{-- <a href="#" class="btn btn-primary">
              Export
              <i class="las la-angle-down"></i>
            </a> --}}
          </div>
        </div>
        {{-- <div
          class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
          <div class="support-form__input">
            <div class="d-flex flex-wrap">
              <div class="support-form__input-id">
                <label>Id:</label>
                <div class="dm-select ">
                  <select name="select-search" class="select-search form-control ">
                    <option value="01">All</option>
                    <option value="02">Option 2</option>
                    <option value="03">Option 3</option>
                    <option value="04">Option 4</option>
                    <option value="05">Option 5</option>
                  </select>
                </div>
              </div>
              <div class="support-form__input-status">
                <label>status:</label>
                <div class="dm-select ">
                  <select name="select-search" class="select-search form-control ">
                    <option value="01">All</option>
                    <option value="02">Option 2</option>
                    <option value="03">Option 3</option>
                    <option value="04">Option 4</option>
                    <option value="05">Option 5</option>
                  </select>
                </div>
              </div>
              <button class="support-form__input-button">search</button>
            </div>
          </div>
          <div class="support-form__search">
            <div class="support-order-search">
              <form action="/" class="support-order-search__form">
                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search"
                  aria-label="Search">
              </form>
            </div>
          </div>
        </div> --}}
        <div class="tab-wrapper">

          <div class="dm-tab tab-horizontal">
            <ul class="nav nav-tabs vertical-tabs" role="tablist">

              <li class="nav-item">
                <a class="nav-link active" id="tab-v-1-tab" data-bs-toggle="tab" href="#tab-v-1" role="tab"
                  aria-selected="true">Items sin ficha</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-v-2-tab" data-bs-toggle="tab" href="#tab-v-2" role="tab"
                  aria-selected="false">Cliente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-v-3-tab" data-bs-toggle="tab" href="#tab-v-3" role="tab"
                  aria-selected="false">Licencia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="tab-v-4-tab" data-bs-toggle="tab" href="#tab-v-4" role="tab"
                  aria-selected="false">Descontinuados</a>
              </li>



            </ul>
            <div class="tab-content">



              <div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">
                1
                @include('items.partials.index-tables.tables-index-sinficha')
              </div>
              <div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
                2
                @include('items.partials.index-tables.tables-index-cliente')
              </div>
              <div class="tab-pane fade" id="tab-v-3" role="tabpanel" aria-labelledby="tab-v-3-tab">
                3
                @include('items.partials.index-tables.tables-index-licencia')
              </div>
              <div class="tab-pane fade" id="tab-v-4" role="tabpanel" aria-labelledby="tab-v-4-tab">
                4
                @include('items.partials.index-tables.tables-index-descontinuados')
              </div>

            </div>
          </div>

        </div>

      </div>
    </div>

  </div>
</div>
{{--
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" /> --}}

{{-- <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
  $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script> --}}
@endsection
