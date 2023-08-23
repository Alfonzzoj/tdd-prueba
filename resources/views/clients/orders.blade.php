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
        <h4 class="text-capitalize breadcrumb-title">{{ $title }}</h4>
        <div class="breadcrumb-action justify-content-center flex-wrap">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="#">
                  <i class="las la-home"></i>Produccion
                </a>
              </li>
              {{-- TODO: traducir --}}

              <li class="breadcrumb-item active" aria-current="page">{{ $title }}</li>
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
              <h4 class="text-capitalize fw-500 breadcrumb-title">Pedidos de cliente - {{ $client->razon_social ??
                "Error de cliente" }}</h4>
            </div>
          </div>
          <div class="action-btn">
            {{-- <a href="{{ route('items.create',['language'=>app()->getLocale()]) }}" class="btn btn-primary">
              Nuevo
            </a> --}}

            {{-- <a href="#" class="btn btn-primary">
              Export
              <i class="las la-angle-down"></i>
            </a> --}}
          </div>
        </div>

        <div class="container">
          <div class="col-lg-12">
            <div class="card card-default card-md mb-4">

              <div class="card-body py-md-25">
                <div class="row">
                  <div class="col">
                    <table id="dt-pedidos-cliente" class="table table-bordered text-center">
                      <thead class="thead-primary">
                        <tr>
                          <th scope="col">Folio</th>
                          <th scope="col">Tipo item</th>
                          <th scope="col">Nombre de la etiqueta</th>
                          <th scope="col">Status</th>
                          <th scope="col">ACCIONES</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>TE23-1244</td>
                          <td>TEJIDA 1</td>
                          <td>Activo</td>
                          <td>Etiqueta 1</td>
                          <td>
                            @include('orders.partials.action-btn.show',['id'=>1])
                          </td>
                        </tr>
                        <tr>
                          <td>TE23-2134</td>
                          <td>TEJIDA 2</td>
                          <td>Inactivo</td>
                          <td>Etiqueta 2</td>
                          <td>

                            @include('orders.partials.action-btn.show',['id'=>1])


                          </td>
                        </tr>
                        <tr>
                          <td>TE23-2135</td>
                          <td>TEJIDA 3</td>
                          <td>Descontinuado</td>
                          <td>Etiqueta 3</td>
                          <td>
                            @include('orders.partials.action-btn.show',['id'=>1])


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