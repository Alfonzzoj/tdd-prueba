@section('title',$title ??1)
@section('description',$description??2)
@extends('layout.app')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

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
                <a href="{{ route('clients.index',app()->getLocale())  }}">
                  <i class="las la-home"></i>Clientes
                </a>
              </li>
              {{-- TODO: traducir --}}

              <li class="breadcrumb-item active" aria-current="page">Estados de cuenta</li>
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

          {{-- Estados de cuenta --}}
          <div class="col-lg-12">
            <div class="card card-default card-md mb-4">
              {{-- <div class="card-header">
                <h6>Estados de cuenta </h6>
              </div> --}}
              <div class="card-body py-md-25">
                <div class="row">
                  <div class="col">
                    <table id="dt-estados-cuenta" class="table table-bordered text-center">
                      <thead class="thead-primary">
                        <tr>
                          <th scope="col">Folio</th>
                          <th scope="col">Fecha Creacion</th>
                          <th scope="col">Fecha entrega</th>
                          <th scope="col">Total a pagar</th>
                          <th scope="col">Pagado</th>
                          <th scope="col">Pendiente</th>
                          <th scope="col">Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>TE23-23451</td>
                          <td>2021-01-01</td>
                          <td>2021-01-10</td>
                          <td>$100.00</td>
                          <td>$50.00</td>
                          <td>$50.00</td>
                          <td>Acciones</td>
                        </tr>
                        <tr>
                          <td>TE23-23452</td>
                          <td>2021-02-01</td>
                          <td>2021-02-10</td>
                          <td>$200.00</td>
                          <td>$100.00</td>
                          <td>$100.00</td>
                          <td>Acciones</td>
                        </tr>
                        <!-- Agrega más filas de ejemplo según sea necesario -->
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan="3" style="text-align:right">Total:</th>
                          <th colspan="3"><span id="total2">$300.00</span></th>
                        </tr>
                        <tr>
                          <th colspan="3" style="text-align:right">Total Pagado:</th>
                          <th colspan="3"><span id="totalPagado2">$150.00</span></th>
                        </tr>
                        <tr>
                          <th colspan="3" style="text-align:right">Total saldo Pendiente:
                          </th>
                          <th colspan="3"><span id="totalSaldoPendiente2">$150.00</span>
                          </th>
                        </tr>
                      </tfoot>
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