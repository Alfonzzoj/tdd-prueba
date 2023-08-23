@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">

      <div class="breadcrumb-main">
        <h4 class="text-capitalize breadcrumb-title">Crear Item - {{ $tipo }}</h4>
        <div class="breadcrumb-action justify-content-center flex-wrap">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Produccion</a></li>
              <li class="breadcrumb-item"><a
                  href="{{ route('items.index',['language'=>app()->getLocale(),'tipo'=>$tipo])  }}">Items</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Nuevo - {{ $tipo }}</li>
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
    <form action="{{ route('items.store',app()->getLocale()) }}" method="POST">
      @csrf
      <div class="row">

        {{-- Informacion basica --}}
        <div class="col-lg-12">
          <div class="card card-default card-md mb-4">
            <div class="card-header">
              <h6>Informacion basica </h6>
            </div>
            <div class="card-body py-md-25">
              <div class="row">
                {{-- nombre de la etiqueta --}}
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="nombre_etiqueta" class="il-gray fs-14 fw-500 align-center mb-10">Cliente</label>
                    <input type="text" name="nombre_etiqueta"
                      class="form-control ih-medium ip-light radius-xs b-light px-15" id="nombre_etiqueta"
                      placeholder="Ingrese nombre de la etiqueta" required>
                  </div>
                </div>

                {{-- Clave del item --}}
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="clave_item" class="il-gray fs-14 fw-500 align-center mb-10">Clave
                      del item</label>
                    <input type="text" name="clave_item" class="form-control ih-medium ip-light radius-xs b-light px-15"
                      id="clave_item" placeholder="Ingrese Clave del item" required>
                  </div>
                </div>
                {{-- nombre de la etiqueta --}}
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nombre_etiqueta" class="il-gray fs-14 fw-500 align-center mb-10">Nombre etiqueta
                    </label>
                    <input type="text" name="nombre_etiqueta"
                      class="form-control ih-medium ip-light radius-xs b-light px-15" id="nombre_etiqueta"
                      placeholder="Ingrese nombre de la etiqueta" required>
                  </div>
                </div>





              </div>
            </div>
          </div>
        </div>

        <!-- ends: Informacion basica-->
        {{-- Informacion segun tipo de item --}}
        @if ($tipo == 'Tejidas')
        @include('items.partials.create.tejida')
        @elseif($tipo === 'Estampadas')
        @include('items.partials.create.estampada')
        @elseif($tipo === 'Transfers')
        @include('items.partials.create.transfer')
        @else
        "Tipo no definido"
        @endif
        {{-- end Informacion segun tipo de item --}}

        {{-- Informacion basica --}}
        <div class="col-lg-12">
          <div class="card card-default card-md mb-4">
            <div class="card-header">
              <h6>Detalles adicionales</h6>
            </div>
            <div class="card-body py-md-25">
              <div class="row">
                {{-- Tipo de Tejido --}}
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="estado" class="il-gray fs-14 fw-500 align-center mb-10">Estado</label>
                    <div class="w-full">
                      <div class="dm-select ">
                        <select name="estado" id="estado"
                          class="form-control ih-medium ip-light radius-xs b-light px-15">
                          <option value="01">Seleccione alguna opcion </option>
                          <option value="01">Activo</option>
                          <option value="02">Descontinuado</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                {{-- precioo --}}
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="nombre_etiqueta" class="il-gray fs-14 fw-500 align-center mb-10">Precio</label>
                    <input type="number" min="0" step="1" name="precio"
                      class="form-control ih-medium ip-light radius-xs b-light px-15" id="precio"
                      placeholder="Ingrese precio" required>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 mb-3">
          <button class="btn btn-primary btn-block" type="submit">Crear</button>
        </div>

    </form>




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