@php
$a = 'Tejida';
$item = App\Models\Item::where('tipo_etiqueta',$a)->first();
$pedidos = [];
$producto_terminado = [];
@endphp

{{-- Datos generales --}}
<div class="row">
    <div class="col-lg-12">

        <div class="card card-default card-md mb-4">
            <div class="card-header">
                <h6>Info por tipo </h6>
            </div>
            <div class="card-body py-md-25">
                <table class="table table-bordered text-center">
                    <thead class="thead-primary">
                        <tr>
                            <th scope="col">Pie</th>
                            <th scope="col">Tejido</th>
                            <th scope="col">Acabado</th>
                            <th scope="col">Corte</th>
                            <th scope="col">Ancho</th>
                            <th scope="col">Largo</th>
                            <th scope="col">PPR</th>
                            <th scope="col">PPR REAL</th>
                            <th scope="col">Luchaje</th>
                            <th scope="col">Verdugon</th>
                            <th scope="col">Produccion minima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>{{ $item->pie ??'Pie' }}</th>
                            <td>{{ $item->tejido ??'Tejido'}}</td>
                            <td>{{ $item->acabado ??'acabdo'}}</td>
                            <td>{{ $item->corte ??'corte'}}</td>
                            <td>{{ $item->ancho ??'ancho'}}</td>
                            <td>{{ $item->largo ??'largo'}}</td>
                            <td>{{ $item->ppr ??'ppr'}}</td>
                            <td>{{ $item->ppr_real ??'ppr_real'}}</td>
                            <td>{{ $item->luchaje ??'luchaje'}}</td>
                            <td>{{ $item->verdugon ??'verdugon'}}</td>
                            <td>{{ $item->produccion_minima ?? 0 }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



{{-- body --}}
<div class="row">
    <div class="col col-12">
        <div class="card card-default card-md mb-4">
            <div class="card-header">
                <h6>Informacion</h6>
            </div>
            <div class="card-body py-md-25">
                <!-- Boceto -->
                <div class="row">
                    <div class="col col-md-4 ">
                        {{-- BOCETO --}}
                        <div class="card card-default card-md mb-4 pr-3">
                            <div class="card-header">
                                <h6>Boceto</h6>
                            </div>
                            <div class="card-body py-0">
                                @if($item->imagen_path)
                                <img src="{{url($item->imagen_path)}}" alt="Imagen de etiqueta" width="300" height="400"
                                    style="max-width: 300px; max-height: 400px"
                                    class="myImg img-responsive center-block">
                                @else
                                <img src="https://via.placeholder.com/640x480.png/004488?text=Boceto"
                                    alt="Imagen de etiqueta" style="max-width: 200px; max-height: 200px"
                                    class="myImg img-responsive center-block">
                                @endif
                            </div>
                            <div class="card-footer mt-auto">
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <a href="https://via.placeholder.com/640x480.png/004488?text=Boceto" download>PDF
                                        Editable</a>
                                </button>
                                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <a href="https://via.placeholder.com/640x480.png/004488?text=Boceto"
                                        download>Archivo maquina</a>
                                </button>
                            </div>
                        </div>

                    </div>



                    <div class="col col-md-8">

                        <div class="row">

                            <div class="col col-md-8">

                                {{-- HILOS --}}
                                <div class="card card-default card-sm mb-4">
                                    <div class="card-header">
                                        <h6>HILOS</h6>
                                    </div>
                                    <div class="card-body py-0 p-0">
                                        <table class="table table-bordered text-center">
                                            <thead class="thead-primary">
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Hilo</th>
                                                    <th scope="col">Calibre</th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>AMARILLO</td>
                                                    <td>CALIBRE</td>
                                                </tr>
                                                {{-- @forelse ($item->hilos as $hilo)
                                                <tr>
                                                    <th>{{ $hilo->hilo_id }}</th>
                                                    <td>{{ $hilo->color }}</td>
                                                    <td>{{ $hilo->calibre }}</td>
                                                </tr>

                                                @empty
                                                Problema al obtener los hilos

                                                @endforelse --}}

                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                            </div>
                            {{-- COMPOSICIONES --}}
                            <div class="col col-md-4 ">
                                <div class="card card-default card-sm ">
                                    <div class="card-header">
                                        <h6>Composicion</h6>
                                    </div>
                                    <div class="card-body py-0 p-0">
                                        <table class="table table-bordered text-center">
                                            <thead class="thead-primary">
                                                <tr>
                                                    <th scope="col">Material</th>
                                                    <th scope="col">Porcentaje %</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Material</td>
                                                    <td>%</td>
                                                </tr>
                                                {{-- @forelse ($item->composiciones as $composicion)
                                                <tr>
                                                    <td>{{ $composicion->material }}</td>
                                                    <td>{{ $composicion->porcentaje }} %</td>
                                                </tr>

                                                @empty
                                                No posee composiciones personalizadas
                                                @endforelse --}}

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{-- TALLAS --}}
                        @include('items.partials.show.components.sizes')


                        {{-- CAJAS --}}
                        @include('items.partials.show.components.boxes')

                        {{-- Producto terminado --}}
                        @include('items.partials.show.components.finished_product')


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>