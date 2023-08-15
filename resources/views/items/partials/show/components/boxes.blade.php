<div class="row">

    <div class="col col-md-4">
        <div class="card card-default card-sm ">
            <div class="card-header">
                <h6>CAJAS</h6>
            </div>
            <div class="card-body py-0 p-0">
                <table class="table table-bordered text-center">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col">Medida</th>
                            <th scope="col">Piezas por caja</th>

                        </tr>
                    </thead>
                    <tbody>
                        @if ($item->cajas != null)
                        @forelse ($item->cajas as $key => $caja)
                        <tr>
                            <td>{{$caja->medida}}</td>
                            <td>{{$caja->pivot->pzas_caja}}</td>
                        </tr>

                        @empty
                        No hay informacion sobre cajas
                        @endforelse
                        @endif


                    </tbody>
                </table>
            </div>
        </div>


    </div>
    {{-- ETIQUETAS EN PRODUCCION --}}
    <div class="col col-md-8 ">
        <div class="card card-default card-sm ">
            <div class="card-header">
                <h6>Etiquetas en produccion </h6>
            </div>
            <div class="card-body py-0 p-0">
                <table class="table table-bordered text-center">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col">PEDIDO</th>
                            <th scope="col">CANTIDAD</th>
                            <th scope="col">PROCESO</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>TE23-2133</td>
                            <td>2133</td>
                            <td>ACTIVO</td>
                            <td>
                                <a href="" class="show" title="Ver">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        {{-- @forelse ($pedidos as $pedido)
                        <tr>
                            <td>{{ $pedido->folio }}</td>
                            <td>{{ $pedido->cantidad }}</td>
                            <td>{{ $pedido->status }}</td>
                            <td>
                                <a href="{{ route('pedido.show',[$pedido->pedido_id])  }}"
                                    class="btn btn-sm btn-primary ">VER
                                    PEDIDO</a>
                            </td>
                        </tr>

                        @empty
                        Esta etiqueta no esta presente en pedidos en produccion
                        @endforelse --}}



                    </tbody>
                </table>
            </div>




        </div>
    </div>
</div>