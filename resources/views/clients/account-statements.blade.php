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
  <div class="row">

  </div>

  {{-- Main Content --}}
  <div class="row">
    <div class="col-12 mb-30">
      <div class="support-ticket-system support-ticket-system--search">
        <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
          <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
            <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
              {{-- TODO: traducir --}}
              <h4 class="text-capitalize fw-500 breadcrumb-title">Informacion Sobre estados de cuenta</h4>
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

        {{-- <div
          class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
          <div class="support-form__input">
            <div class="d-flex flex-wrap">
              <div class="support-form__input-status">
                <label>Fecha de inicio</label>
                <div class="dm-select ">
                  <select name="select-search" class="select-search form-control ">
                    <option value="02">Todos</option>
                    <option value="01">Cliente</option>
                    <option value="02">Licencia</option>
                  </select>
                </div>
              </div>
              <div class="support-form__input-status">
                <label>Fecha fin</label>
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
        </div> --}}
        <div class="col-md-6">
          <div class="date-picker-list">
            {{-- <div class="dm-date-picker">
              <div class="form-group mb-0 form-group-calender">
                <div class="position-relative">
                  <input type="text" class="form-control form-control-default" id="datepicker"
                    placeholder="January 20, 2018">
                  <a href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar" class="svg"></a>
                </div>
              </div>
            </div> --}}
            <div class="dm-date-ranger position-relative d-flex align-items-center">
              <div class="form-group mb-0">
                <input type="text" name="date-range-from" class="form-control form-control-default" id="date-from-2"
                  placeholder="Start">
              </div>
              <span class="divider">-</span>
              <div class="form-group mb-0">
                <input type="text" name="date-range-to" class="form-control form-control-default" id="date-to-2"
                  placeholder="End">
              </div>
              <a class="date-picker-icon" href="#"><img src="{{ asset('assets/img/svg/calendar.svg') }}" alt="calendar"
                  class="svg"></a>
            </div>

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
                          <td>
                            <ul class="d-flex flex-wrap ">
                              <li>
                                <a href="#" class="btn btn-xs btn-success mb-1 me-1 ">
                                  <i class="fas fa-money-bill  p-0 m-0" title="Pagar"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#" class="btn btn-xs btn-info  mb-1 me-1">
                                  <i class="fas fa-file-archive  p-0 m-0" title="Adjuntar comprobante"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#" class="btn btn-xs btn-dark  mb-1 me-1 ">
                                  <i class="fas fa-download p-0 m-0" title="Descargar comprobante"></i>
                                </a>
                              </li>
                            </ul>
                          </td>
                        </tr>
                        <tr>
                          <td>TE23-23452</td>
                          <td>2021-02-01</td>
                          <td>2021-02-10</td>
                          <td>$200.00</td>
                          <td>$100.00</td>
                          <td>$100.00</td>
                          <td>
                            <ul class="d-flex flex-wrap ">
                              <li>
                                <a href="#" class="btn btn-xs btn-success mb-1 me-1 ">
                                  <i class="fas fa-money-bill  p-0 m-0" title="Pagar"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#" class="btn btn-xs btn-info  mb-1 me-1">
                                  <i class="fas fa-file-archive  p-0 m-0" title="Adjuntar comprobante"></i>
                                </a>
                              </li>
                              <li>
                                <a href="#" class="btn btn-xs btn-dark  mb-1 me-1 ">
                                  <i class="fas fa-download p-0 m-0" title="Descargar comprobante"></i>
                                </a>
                              </li>
                            </ul>
                          </td>
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