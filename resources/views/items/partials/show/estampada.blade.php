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

                            <th scope="col">Cinta</th>
                            <th scope="col">Ancho</th>
                            <th scope="col">Largo</th>
                            <th scope="col">Largo real</th>

                            <th scope="col">Produccion minima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>{{ $item->cinta->descripcion ?? "Sin especificar" }}</td>
                            <td>{{ $item->ancho ??'amcho'}}</td>
                            <td>{{ $item->largo ??'largo'}}</td>
                            <td>{{ $item->largo_real ??'largo_real'}}</td>

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
                                            <tr>
                                                <th>1</th>
                                                <td>Amarilla</td>


                                            </tr>
                                            {{-- @forelse ($item->item_estampada_tintas as $tinta)
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

                                            @endforelse --}}

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