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

                            <th scope="col">Ancho</th>
                            <th scope="col">Largo</th>
                            <th scope="col">Sustrato</th>
                            <th scope="col">Medida sustrato</th>
                            <th scope="col">Tamaños por pliego</th>
                            <th scope="col">Tamaño final sustrato</th>
                            <th scope="col">Empalmado</th>
                            <th scope="col">Suaje</th>
                            <th scope="col">Produccion minima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $item->ancho ??'ancho'}}</td>
                            <td>{{ $item->alto }} ?? 'alto</td>
                            @if ($item->sustrato!=null)
                            <td>{{ "No especificado"}}</td>
                            @else
                            <td>Sin sustrato</td>
                            @endif
                            <td>{{ $item->sustrato->medida ?? "No especificado"}}</td>
                            <td>{{ $item->tamano_pliego ?? "No especificado"}}</td>
                            <td>{{ $item->tamano_final ?? "No especificado"}}</td>
                            <td>{{ $item->empalmado ?? "No especificado"}}</td>
                            <td>{{ $item->suaje ?? "No especificado"}}</td>
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
                        {{-- TINTAS --}}
                        <div class="row">

                            {{-- Tintas --}}
                            <div class="col col-md-7 panel panel-default">
                                <h4 class="text-bold">TINTAS</h4>

                                {{-- FRENTE --}}
                                <div class="col">
                                    <table class="table table-bordered text-center">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">FRENTE</th>
                                                <th scope="col">VUELTA</th>
                                                <th scope="col">PANTONES</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($item->item_impresa_tintas as $tinta)
                                            <tr>
                                                @if ($tinta->tipo == 'frente')
                                                <th>{{ $tinta->id }}</th>
                                                <td>{{ $tinta->color }}</td>

                                                @elseif($tinta->tipo == 'reverso')
                                                <td>{{ $tinta->id }}</td>
                                                <td>{{ $tinta->color }}</td>
                                                @elseif($tinta->tipo == 'secundaria')
                                                <td>{{ $tinta->id }}</td>
                                                <td>{{ $tinta->color }}</td>
                                                @endif
                                            </tr>

                                            @empty
                                            Problema al obtener las tintas

                                            @endforelse

                                        </tbody>
                                    </table>

                                </div>

                            </div>
                            {{-- ACABADOS --}}
                            <div class="col col-md-5 panel panel-default">
                                <h4 class="text-bold">ACABADOS</h4>

                                <div class="row">
                                    <table class="table table-bordered text-center">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col">Laminado</th>
                                                <th scope="col">Barniz</th>
                                                <th scope="col">Perforado</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $item->laminado }}</td>
                                                <td>{{ $item->acabado_barniz ??$item->barniz }}</td>
                                                <td>{{ $item->perforado }}</td>
                                            </tr>


                                        </tbody>
                                    </table>

                                </div>

                                <div class="row">
                                    <table class="table table-bordered text-center">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col">Suajado</th>
                                                <th scope="col">Hot stamping</th>
                                                <th scope="col">Guillonado</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{ $item->suaje }}</td>
                                                <td>{{ $item->hot_stamping }}</td>
                                                <td>{{ $item->guillotinado }}</td>
                                            </tr>


                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div>
                        <div class="row">

                            {{-- Tintas --}}
                            <div class="col col-md-12 panel panel-default">
                                <h4 class="text-bold">TINTAS</h4>

                                {{-- FRENTE --}}
                                <div class="col">
                                    <table class="table table-bordered text-center">
                                        <thead class="thead-primary">
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">FRENTE</th>
                                                <th scope="col">VUELTA</th>
                                                <th scope="col">PANTONES</th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            @forelse ($item->item_estampada_tintas as $tinta)
                                            <tr>
                                                @if ($tinta->tipo == 'frente')
                                                <th>{{ $tinta->id }}</th>
                                                <td>{{ $tinta->color }}</td>

                                                @elseif($tinta->tipo == 'reverso')
                                                <td>{{ $tinta->id }}</td>
                                                <td>{{ $tinta->color }}</td>
                                                @elseif($tinta->tipo == 'secundaria')
                                                <td>{{ $tinta->id }}</td>
                                                <td>{{ $tinta->color }}</td>
                                                @endif
                                            </tr>

                                            @empty
                                            Problema al obtener las tintas

                                            @endforelse

                                        </tbody>
                                    </table>

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
{{-- end body --}}