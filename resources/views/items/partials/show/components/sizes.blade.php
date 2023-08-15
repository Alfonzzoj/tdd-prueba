<div class="row">
    <div class="col col-md-12 ">
        <div class="card card-default card-sm">
            <div class="card-header">
                <h6>Tallas</h6>
            </div>
            <div class="card-body py-0 p-0">
                <div class="col col-md-12">
                    <table class="table table-bordered text-center">
                        <thead class="thead-primary">
                            <tr>
                                <th scope="col">Talla</th>
                                <th scope="col">Pedido</th>
                                <th scope="col">Terminado</th>
                                <th scope="col">Faltante</th>
                                <th scope="col">Cantidad en stock</th>

                                <th scope="col">Surtir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>CH</td>
                                <td>TE23-2323</td>
                                <td>200</td>
                                <td>100</td>
                                <td>1000</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-primary btn-block disabled"
                                        title="Pedido sin programar">Surtir pedido</a>
                                </td>


                            </tr>
                            {{-- @forelse ($pedido->informacion_de_tallas as $talla)
                            <tr>
                                <td>{{ $talla->talla }}</td>
                                <td>{{ $talla->folio }}</td>
                                <td>{{ $talla->terminado }}</td>
                                <td>{{ $talla->pendiente }}</td>
                                <td>
                                    @if ($pedido->programacion_pedido_id )
                                    <a href="{{ route('almacen_hilo.surtir_pedido', $pedido->programacion_pedido_id) }}"
                                        class="btn btn-sm btn-primary btn-block">Surtir
                                        pedido</a>
                                    @else
                                    <a href="{{ route('almacen_hilo.surtir_pedido', $pedido->programacion_pedido_id) }}"
                                        class="btn btn-sm btn-primary btn-block disabled"
                                        title="Pedido sin programar">Surtir pedido</a>
                                </td>


                                @endif
                            </tr>
                            @empty
                            No hay ordenes de produccion disponibles
                            @endforelse --}}


                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>

</div>