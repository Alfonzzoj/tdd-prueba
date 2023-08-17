{{-- DRAWER ZONA DE ENTREGA --}}
<div class="dm-drawer drawer-account d-none">
  <div class="dm-drawer__header d-flex aling-items-center justify-content-between">
    <h6 class="drawer-title">Crear zona de entrega </h6>
    <a href="#zonas-de-entrega" class="btdrawer-close"><i class="la la-times"></i></a>
  </div>
  <div class="dm-drawer__body">
    <div class="drawer-content">
      <div class="drawer-zona_entrega-form form-basic">
        {{-- <form action="#"> --}}
          <div class="row">
            {{-- Nombre direccion --}}
            <div class="col-md-3">
              {{-- Direccion zona de entrega --}}
              <div class="form-group">
                <label for="nombre_direccion" class="il-gray fs-14 fw-500 align-center mb-10">Nombre
                  direccion</label>
                <input type="text" name="nombre_direccion" wire:model.defer="nombre_direccion"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="nombre_direccion"
                  placeholder="Ingrese la direccion">
              </div>
            </div>

            {{-- Zona entrega --}}
            <div class="col-md-3">
              <div class="form-group">
                <label for="zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Zona
                  entrega</label>
                <input type="text" name="zona_entrega" wire:model.defer="zona_entrega"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="zona_entrega"
                  placeholder="Ingrese zona de entrega">
              </div>
            </div>
            {{-- calle zonaenterga --}}
            <div class="col-md-3">
              <div class="form-group">
                <label for="calle_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Calle</label>
                <input type="text" name="calle_zona_entrega" wire:model.defer="calle"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="calle_zona_entrega"
                  placeholder="Ingrese la calle">
              </div>
            </div>

            {{-- No externo ze--}}
            <div class="col-md-3">
              <div class="form-group">
                <label for="no_externo_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">No
                  externo</label>
                <input type="text" name="no_externo_zona_entrega" wire:model.defer="numero_externo"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="no_externo_zona_entrega"
                  placeholder="Ingrese no externo">
              </div>
            </div>
            {{-- No interno ze--}}
            <div class="col-md-3">
              <div class="form-group">
                <label for="no_interno_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">No
                  interno</label>
                <input type="text" name="no_interno_zona_entrega" wire:model.defer="numero_interno"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="no_interno_zona_entrega"
                  placeholder="Ingrese no interno">
              </div>
            </div>
            {{-- Codigo postal ze --}}
            <div class="col-md-3">
              <div class="form-group">
                <label for="codigo_postal_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Codigo
                  postal</label>
                <input type="text" name="codigo_postal_zona_entrega" wire:model.defer="codigo_postal"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="codigo_postal_zona_entrega"
                  placeholder="Ingrese codigo postal">
              </div>
            </div>
            {{-- Colonia ze --}}
            <div class="col-md-3">
              <div class="form-group">
                <label for="colonia_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Colonia</label>
                <input type="text" name="colonia_zona_entrega" wire:model.defer="colonia"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="colonia_zona_entrega"
                  placeholder="Ingrese la colonia">
              </div>
            </div>
            {{-- Delegacion zona entrega --}}
            <div class="col-md-3">
              <div class="form-group">
                <label for="delegacion_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Delegación</label>
                <input type="text" name="delegacion_zona_entrega" wire:model.defer="delegacion"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="delegacion_zona_entrega"
                  placeholder="Ingrese la delegación">
              </div>
            </div>
            {{-- Estado zona entrega --}}
            <div class="col-md-3">
              <div class="form-group">
                <label for="estado_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Estado</label>
                <input type="text" name="estado_zona_entrega" wire:model.defer="estado"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="estado_zona_entrega"
                  placeholder="Ingrese el estado">
              </div>
            </div>
            {{-- pais zona entrega --}}
            <div class="col-md-3">
              <div class="form-group">
                <label for="pais_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">País</label>
                <input type="text" name="pais_zona_entrega" wire:model.defer="pais"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="pais_zona_entrega"
                  placeholder="Ingrese el país">
              </div>
            </div>

            {{-- Dias de entrega zona entrega--}}
            <div class="col-md-6">
              <label for="dias_semana_para_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Dias de
                entrega</label>
              <div class="dm-select ">
                <select name="dias_semana_para_entrega[]" id="dias_semana_para_entrega"
                  wire:model.defer="dias_semana_para_entrega" class="form-control select-multiple" multiple="multiple"
                  size="7">
                  <option value="lunes">Lunes</option>
                  <option value="martes">Martes</option>
                  <option value="miercoles">Miércoles</option>
                  <option value="jueves">Jueves</option>
                  <option value="viernes">Viernes</option>
                  <option value="sabado">Sábado</option>
                  <option value="domingo">Domingo</option>
                </select>
              </div>
            </div>

            {{-- Horario de entrega inicio zona entrega --}}
            <div class="col-md-4">
              <div class="form-group">
                <label for="horario_entrega_inicio_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Horario
                  de entrega
                  (Inicio)</label>
                <input type="time" name="horario_entrega_inicio_zona_entrega" wire:model.defer="horario_entrega_inicio"
                  class="form-control ih-medium ip-light radius-xs b-light px-15"
                  id="horario_entrega_inicio_zona_entrega" placeholder="Ingrese el Horario de entrega">
              </div>
            </div>
            {{-- Horario de entrega fin zona entrega --}}
            <div class="col-md-4">
              <div class="form-group">
                <label for="horario_entrega_fin_zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Horario
                  de entrega (Fin)</label>
                <input type="time" name="horario_entrega_fin_zona_entrega" wire:model.defer="horario_entrega_fin"
                  class="form-control ih-medium ip-light radius-xs b-light px-15" id="horario_entrega_fin_zona_entrega"
                  placeholder="Ingrese el Horario de entrega">
              </div>
            </div>
          </div>



          <div class="col-lg-12 mb-3">
            <button class="btn btn-primary btn-block" wire:click="saveDeliveryZone">Crear zona de
              entrega</button>
          </div>
          {{--
        </form> --}}
      </div>
    </div>
  </div>
</div>