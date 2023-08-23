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
    <div class="col-lg-12 mb-3">
      <a href="{{ route('clients.index',app()->getLocale())  }}" class="btn bg-#334155 btn-block">Regresar a
        listado</a>
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
            <a href="{{ route('items.create',['language'=>app()->getLocale()]) }}" class="btn btn-primary">
              Nuevo
            </a>

            {{-- <a href="#" class="btn btn-primary">
              Export
              <i class="las la-angle-down"></i>
            </a> --}}
          </div>
        </div>
        <div
          class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
          <div class="support-form__input">
            <div class="d-flex flex-wrap">
              <div class="support-form__input-status">
                <label>Tipo cliente </label>
                <div class="dm-select ">
                  <select name="select-search" class="select-search form-control ">
                    <option value="02">Todos</option>
                    <option value="01">Cliente</option>
                    <option value="02">Licencia</option>
                  </select>
                </div>
              </div>
              <div class="support-form__input-status">
                <label>Tipo etiqueta</label>
                <div class="dm-select ">
                  <select name="select-search" class="select-search form-control ">
                    <option value="01">Todos</option>
                    <option value="02">Tejida</option>
                    <option value="03">Estampada</option>
                    <option value="05">Transfer</option>
                    <option value="04">Impresa</option>
                    <option value="04">Impreso</option>
                  </select>
                </div>
              </div>
              <button class="support-form__input-button">Buscar</button>
            </div>
          </div>
          <div class="support-form__search">
            <div class="support-order-search">
              <form action="/" class="support-order-search__form">
                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Buscar"
                  aria-label="Search">
              </form>
            </div>
          </div>
        </div>

        <div class="container">


          <div class="col">
            <table id="dt-pedidos" class="table table-bordered table-striped">
              <thead class="thead-primary">
                <tr>
                  <th scope="col">id</th>
                  <th scope="col">Imagen</th>
                  <th scope="col">Tipo Cliente</th>
                  <th scope="col">Tipo Etiqueta</th>
                  <th scope="col">Nombre de la etiqueta</th>
                  <th scope="col">ACCIONES</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td class="userDatatable-content--priority">
                    <a href="{{ $item->image_path ?? 'https://via.placeholder.com/640x480.png/008899?text=aut' }}"
                      target="_blank">
                      <img src="{{ $item->image_path ?? 'https://via.placeholder.com/640x480.png/008899?text=aut' }}"
                        alt="Imagen" width="100" height="100">
                    </a>
                  </td>
                  <td>Cliente</td>
                  <td>Tejida</td>
                  <td>Clave 1</td>
                  <td>
                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-center items-center">

                      <li>
                        @include('items.partials.action-btn.generate-order')
                      </li>
                      <li>
                        @include('items.partials.action-btn.show')
                      </li>


                      <li>
                        @include('items.partials.action-btn.edit')

                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td class="userDatatable-content--priority">
                    <a href="{{ $item->image_path ?? 'https://via.placeholder.com/640x480.png/008899?text=aut' }}"
                      target="_blank">
                      <img src="{{ $item->image_path ?? 'https://via.placeholder.com/640x480.png/008899?text=aut' }}"
                        alt="Imagen" width="100" height="100">
                    </a>
                  </td>
                  <td>Cliente</td>
                  <td>Impresa</td>
                  <td>Clave 2</td>
                  <td>
                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-center items-center">

                      <li>
                        @include('items.partials.action-btn.generate-order')
                      </li>
                      <li>
                        @include('items.partials.action-btn.show')
                      </li>


                      <li>
                        @include('items.partials.action-btn.edit')

                      </li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>3</td>
                  <td class="userDatatable-content--priority">
                    <a href="{{ $item->image_path ?? 'https://via.placeholder.com/640x480.png/008899?text=aut' }}"
                      target="_blank">
                      <img src="{{ $item->image_path ?? 'https://via.placeholder.com/640x480.png/008899?text=aut' }}"
                        alt="Imagen" width="100" height="100">
                    </a>
                  </td>
                  <td>Cliente</td>
                  <td>Estampada</td>
                  <td>clave 3</td>
                  <td>
                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-center items-center">

                      <li>
                        @include('items.partials.action-btn.generate-order')
                      </li>
                      <li>
                        @include('items.partials.action-btn.show')
                      </li>


                      <li>
                        @include('items.partials.action-btn.edit')

                      </li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
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