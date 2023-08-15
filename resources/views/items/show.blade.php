@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Ver Item</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Control</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('items.index',['language'=>app()->getLocale(),'tipo'=>$tipo]) }}">Items</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Ver</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-lg-12 mb-3">
            <a href="{{ route('items.index',['language'=>app()->getLocale(),'tipo'=>$tipo])  }}"
                class="btn bg-#334155 btn-block">Regresar a
                listado</a>
        </div>
    </div>
    <div class="form-element">
        {{-- Datos generales --}}
        <div class="row">

            <div class="col-lg-12">

                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Datos generales </h6>
                    </div>
                    <div class="card-body py-md-25">
                        <table id="dt-estados-cuenta" class="table table-bordered text-center">
                            <thead class="thead-primary">
                                <tr>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Cliente</th>
                                    <th scope="col">Clave de item</th>
                                    <th scope="col">Nombre de la etiqueta</th>
                                    <th scope="col">Tiene tallas</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cliente</td>
                                    <td>Cliente</td>
                                    <td>VALLEFOR30TW</td>
                                    <td>VALLEY FORGE TWIN</td>
                                    <td>No</td>
                                    <td>
                                        <div class="d-flex justify-content-center">
                                            <a href="#" class="btn btn-primary btn-sm btn-block m-2">
                                                Generar pedido
                                            </a>
                                            <a href="#" class="btn btn-warning btn-block btn-sm">
                                                Modificar ficha tecnica
                                            </a>
                                        </div>
                                    </td>
                                </tr>

                                <!-- Agrega más filas de ejemplo según sea necesario -->
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- End datos generales --}}



        @if ($item->tipo_etiqueta == "Tejida")
        @include('items.partials.show.tejida')

        @elseif($item->tipo_etiqueta == "Estampada")
        @include('items.partials.show.estampada')
        @else

        <table class="table table-bordered text-center">
            <thead class="thead-primary">
                <tr>

                    <th scope="col">Ancho</th>
                    <th scope="col">Largo</th>

                    <th scope="col">Produccion minima</th>
                </tr>
            </thead>
            <tbody>
                <tr>

                    <td>{{ $item->ancho ?? 0}}</td>
                    <td>{{ $item->largo ?? 0}}</td>

                    <td>{{ $item->produccion_minima ?? 0 }}</td>
                </tr>
            </tbody>
        </table>


        @endif



    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
  const selectMultiples = document.querySelectorAll('.select-multiple');

  if (selectMultiples.length > 0) {
    selectMultiples.forEach(selectMultiple => {
      $(selectMultiple).select2({
        placeholder: "Seleccione alguna o varias opciones",
        dropdownCssClass: "tag",
        tags: [],
        allowClear: true
      });
    });
  }
});
</script>
@endsection