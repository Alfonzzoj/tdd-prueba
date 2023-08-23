<a data-bs-toggle="modal" data-bs-target="#modal-estado-cuenta-{{ $id }}" class="show" title="Estados de cuenta ">
  <i class="fas fa-balance-scale"></i>
</a>
{{-- estados de cuenta --}}
<div class="modal-basic modal fade show" id="modal-estado-cuenta-{{ $id }}" tabindex="-1" role="dialog"
  aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content modal-bg-white ">
      <div class="modal-header">



        <h6 class="modal-title">Estado de cuenta</h6>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <img src="{{ asset('assets/img/svg/x.svg') }} " alt="x" class="svg">
        </button>
      </div>
      <div class="modal-body">

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


        <div class="modal-footer">

          <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>


  </div>
</div>