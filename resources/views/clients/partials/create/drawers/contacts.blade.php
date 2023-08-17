{{-- DRAWER CONTACTOS --}}
<div class="dm-drawer drawer-profile d-none">
  <div class="dm-drawer__header d-flex aling-items-center justify-content-between">
    <h6 class="drawer-title">Crear contacto</h6>
    <a href="#" class="btdrawer-close"><i class="la la-times"></i></a>
  </div>
  <div class="dm-drawer__body">
    <div class="drawer-content">
      <div class="row">

        {{-- Nombre --}}
        <div class="col-md-4">
          <div class="form-group">
            <label for="nombre_contacto" class="il-gray fs-14 fw-500 align-center mb-10">Nombre</label>
            <input type="text" name="nombre_contacto" class="form-control ih-medium ip-light radius-xs b-light px-15"
              id="nombre_contacto" placeholder="Ingrese nombre del contacto">
          </div>
        </div>
        {{-- Puesto --}}
        <div class="col-md-4">
          <div class="form-group">
            <label for="puesto_contacto" class="il-gray fs-14 fw-500 align-center mb-10">Puesto</label>
            <input type="text" name="puesto_contacto" class="form-control ih-medium ip-light radius-xs b-light px-15"
              id="puesto_contacto" placeholder="Ingrese puesto del contacto">
          </div>
        </div>
        {{-- Telefono --}}
        <div class="col-md-4">
          <div class="form-group">
            <label for="telefono_contacto" class="il-gray fs-14 fw-500 align-center mb-10">Telefono</label>
            <input type="phone" name="telefono_contacto" class="form-control ih-medium ip-light radius-xs b-light px-15"
              id="telefono_contacto" placeholder="55 000 0000">
          </div>
        </div>

        {{-- Dias de entrega --}}
        <div class="col-md-12">
          <label for="dias_semana_para_entrega_ctc" class="il-gray fs-14 fw-500 align-center mb-10">Dias de
            entrega</label>
          <div class="dm-select ">
            <select name="dias_semana_para_entrega_ctc[]" id="dias_semana_para_entrega_ctc"
              class="form-control select-multiple" multiple="multiple" size="7">
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


        {{-- Horario de entrega inicio --}}
        <div class="col-md-6">
          <div class="form-group">
            <label for="horario_entrega_inicio_contacto" class="il-gray fs-14 fw-500 align-center mb-10">Horario de
              entrega
              (Inicio)</label>
            <input type="time" name="horario_entrega_inicio_contacto"
              class="form-control ih-medium ip-light radius-xs b-light px-15" id="horario_entrega_inicio_contacto"
              placeholder="Ingrese el Horario de entrega">
          </div>
        </div>
        {{-- Horario de entrega fin --}}
        <div class="col-md-6">
          <div class="form-group">
            <label for="horario_entrega_fin_contacto" class="il-gray fs-14 fw-500 align-center mb-10">Horario
              de entrega
              (Fin)</label>
            <input type="time" name="horario_entrega_fin_contacto"
              class="form-control ih-medium ip-light radius-xs b-light px-15" id="horario_entrega_fin_contacto"
              placeholder="Ingrese el Horario de entrega">
          </div>
        </div>
        <div class="col-lg-12 mb-3">
          <button class="btn btn-primary btn-block" type="submit">Crear contacto</button>
        </div>

      </div>

    </div>
  </div>
</div>