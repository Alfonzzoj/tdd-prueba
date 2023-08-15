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

                            <th scope="col">Tipo papel</th>
                            <th scope="col">Medianil horizontal</th>
                            <th scope="col">Medianil vertical</th>
                            <th scope="col">Ancho</th>
                            <th scope="col">Largo</th>

                            <th scope="col">Produccion minima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>{{ $item->separacion_horizontal ??'sh'}}</td>
                            <td>{{ $item->separacion_vertical ??'sv'}}</td>
                            <td>{{ $item->tipo_papel ??'tipapel'}}</td>
                            <td>{{ $item->ancho_etiqueta ??'aetiquet'}}</td>
                            <td>{{ $item->alto_etiqueta ??'aetiqe'}}</td>

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

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
{{-- end body --}}