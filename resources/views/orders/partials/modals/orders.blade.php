<a data-bs-toggle="modal" data-bs-target="#modal-pedidos-{{ $id }}" class="show" title="Pedidos">
  <i class="fas fa-clipboard-list"></i>
</a>


{{-- Pedidos --}}
{{-- estados de cuenta --}}
<div class="modal-basic modal fade show" id="modal-pedidos-{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content modal-bg-white ">
      <div class="modal-header">



        <h6 class="modal-title">Pedidos</h6>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <img src="{{ asset('assets/img/svg/x.svg') }} " alt="x" class="svg">
        </button>
      </div>
      <div class="modal-body">

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
                        <td> </td>
                      </tr>
                      <tr>
                        <td>TE23-2134</td>
                        <td>TEJIDA 2</td>
                        <td>Inactivo</td>
                        <td>Etiqueta 2</td>
                        <td> </td>
                      </tr>
                      <tr>
                        <td>TE23-2135</td>
                        <td>TEJIDA 3</td>
                        <td>Descontinuado</td>
                        <td>Etiqueta 3</td>
                        <td> </td>
                      </tr>
                    </tbody>
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