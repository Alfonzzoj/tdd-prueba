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

        <div class="container">

          <div class="dm-tab tab-horizontal">
            <ul class="nav nav-tabs vertical-tabs d-flex justify-evenly" role="tablist">
              <li class="nav-item spaced">
                <a class="nav-link active" id="tab-items-1-tab" data-bs-toggle="tab" href="#tab-items-1" role="tab"
                  aria-selected="true">Cliente</a>
              </li>
              <li class="nav-item spaced">
                <a class="nav-link" id="tab-items-2-tab" data-bs-toggle="tab" href="#tab-items-2" role="tab"
                  aria-selected="false">Licencia</a>
              </li>
            </ul>
            <div class="tab-content">




              {{-- Tab CLIENTE --}}
              <div class="tab-pane fade show active" id="tab-items-1" role="tabpanel" aria-labelledby="tab-items-1-tab">

                <div class="col">
                  <table id="dt-pedidos" class="table table-bordered table-striped">
                    <thead class="thead-primary">
                      <tr>
                        <th scope="col">id</th>
                        <th scope="col">Tipo Cliente</th>
                        <th scope="col">Tipo Etiqueta</th>
                        <th scope="col">Nombre de la etiqueta</th>
                        <th scope="col">ACCIONES</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
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
              {{-- Tab LICENCIA --}}
              <div class="tab-pane fade" id="tab-items-2" role="tabpanel" aria-labelledby="tab-items-2-tab">
                <div class="col">
                  <table id="dt-pedidos" class="table table-bordered table-striped">
                    <thead class="thead-primary">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo Cliente</th>
                        <th scope="col">Tipo Etiqueta</th>
                        <th scope="col">Nombre de la etiqueta</th>
                        <th scope="col">ACCIONES</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Licencia</td>
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
                        <td>Licencia</td>
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
                        <td>Licencia</td>
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