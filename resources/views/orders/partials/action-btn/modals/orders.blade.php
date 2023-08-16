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

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>


    </div>
</div>