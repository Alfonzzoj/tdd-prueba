{{-- Tipo de pie y corte acabado --}}
<div class="col-lg-6">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Datos de la etiqueta</h6>
        </div>
        <div class="card-body py-md-25">
            <div class="row">
                {{-- Tipo de pie --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Pie" class="il-gray fs-14 fw-500 align-center mb-10">Pie</label>
                        <div class="w-full">
                            <div class="dm-select-list d-flex">
                                <select name="pie" id="tipo_pie" class="form-control select-search">
                                    <option value="blanco">Blanco</option>
                                    <option value="negro">Negro</option>
                                    <option value="satin">Satin</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tipo de Tejido --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Pie" class="il-gray fs-14 fw-500 align-center mb-10">Tejido</label>
                        <div class="w-full">
                            <div class="dm-select-list d-flex">
                                <select name="tejido" id="tipo_tejido" class="form-control select-search">
                                    <option value="damasco">Damasco</option>
                                    <option value="macizo">Macizo</option>
                                    <option value="palmita">Palmita</option>
                                    <option value="prestige">Prestige</option>
                                    <option value="sarga">Sarga</option>
                                    <option value="satin">Satin</option>
                                    <option value="tafeta">Tafeta</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tipo de Acabado --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Pie" class="il-gray fs-14 fw-500 align-center mb-10">Acabado</label>
                        <div class="w-full">
                            <div class="dm-select-list d-flex">
                                <select name="acabado" id="tipo_acabado" class="form-control select-search">
                                    <option value="a_presto">A presto</option>
                                    <option value="entretela">Entretela</option>
                                    <option value="adhesivo">Adhesivo</option>
                                    <option value="ninguno">Ninguno</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tipo de corte --}}
                {{-- <div class="col-md-6">
                    <div class="form-group">
                        <label for="Pie" class="il-gray fs-14 fw-500 align-center mb-10">Corte</label>
                        <div class="w-full">
                            <div class="dm-select-list d-flex">
                                <select name="corte" id="tipo_corte" class="form-control select-search">
                                    <option value="bandera" data-icon="">Bandera</option>
                                    <option value="diagonal" data-icon="images/diagonal.png">Diagonal</option>
                                    <option value="laser" data-icon="images/laser.png">Laser</option>
                                    <option value="medio" data-icon="images/medio.png">Medio</option>
                                    <option value="recto" data-icon="images/recto.png">Recto</option>
                                    <option value="rollo" data-icon="images/rollo.png">Rollo</option>
                                    <option value="termico" data-icon="images/termico.png">Termico</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div> --}}







                <div class="col-md-12">
                    <label for="Corte" class="il-gray fs-14 fw-500 align-center mb-10">Corte</label>
                    <div class="row">
                        <div class="radio-theme-default custom-radio row">

                            <div class="col-md-2 d-flex flex-column align-items-center">
                                <input class="radio" type="radio" name="radio-cortes" value=2 id="radio-cortes-bandera"
                                    checked>
                                <label for="radio-cortes-bandera">Bandera</label>


                                <img src="{{ asset('images/items/tipo_cortes/bandera.png') }}"
                                    alt="Descripción de la imagen" width="100%" class="mt-2">


                            </div>

                            <div class="col-md-2 d-flex flex-column align-items-center">
                                <input class="radio" type="radio" name="radio-cortes" value=2 id="radio-cortes-diagonal" >
                                <label for="radio-cortes-diagonal">Diagonal</label>

                                <img src="{{ asset('images/items/tipo_cortes/diagonal.png') }}"
                                    alt="Descripción de la imagen" width="100%" class="mt-2">
                            </div>

                            <div class="col-md-2 d-flex flex-column align-items-center">
                                <input class="radio" type="radio" name="radio-cortes" value=2 id="radio-cortes-laser" >
                                <label for="radio-cortes-laser">Laser</label>

                                <img src="{{ asset('images/items/tipo_cortes/laser.png') }}"
                                    alt="Descripción de la imagen" width="60%" class="mt-2">
                            </div>

                            <div class="col-md-2 d-flex flex-column align-items-center">
                                <input class="radio" type="radio" name="radio-cortes" value=2 id="radio-cortes-medio" >
                                <label for="radio-cortes-medio">Medio</label>

                                <img src="{{ asset('images/items/tipo_cortes/medio.png') }}"
                                    alt="Descripción de la imagen" width="80%" class="mt-2">
                            </div>

                            <div class="col-md-2 d-flex flex-column align-items-center">
                                <input class="radio" type="radio" name="radio-cortes" value=2 id="radio-cortes-recto" >
                                <label for="radio-cortes-recto">Recto</label>

                                <img src="{{ asset('images/items/tipo_cortes/recto.png') }}"
                                    alt="Descripción de la imagen" width="80%" class="mt-2">
                            </div>

                            <div class="col-md-2 d-flex flex-column align-items-center">
                                <input class="radio" type="radio" name="radio-cortes" value=2 id="radio-cortes-rollo" >
                                <label for="radio-cortes-rollo">Rollo</label>

                                <img src="{{ asset('images/items/tipo_cortes/rollo.png') }}"
                                    alt="Descripción de la imagen" width="80%" class="mt-2">
                            </div>

                            <div class="col-md-2 d-flex flex-column align-items-center">
                                <input class="radio" type="radio" name="radio-cortes" value=2 id="radio-cortes-termico" >
                                <label for="radio-cortes-termico">Termico</label>

                                <img src="{{ asset('images/items/tipo_cortes/termico.png') }}"
                                    alt="Descripción de la imagen" width="60%" class="mt-2">
                            </div>

                        </div>
                    </div>

                </div>



            </div>
        </div>
    </div>
</div>
{{-- Medidas --}}
<div class="col-lg-6">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Medidas</h6>
        </div>
        <div class="card-body py-md-25">
            <div class="row">
                {{-- Ancho --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ancho" class="il-gray fs-14 fw-500 align-center mb-10">Ancho</label>
                        <input type="number" step="0.1" min="1" name="ancho"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="ancho"
                            placeholder="Ingrese ancho" required>
                    </div>
                </div>
                {{-- Ancho real --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ancho_real" class="il-gray fs-14 fw-500 align-center mb-10">Ancho real</label>
                        <input type="number" step="0.1" min="1" name="ancho_real"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="ancho_real"
                            placeholder="Ingrese ancho_real" required>
                    </div>
                </div>
                {{-- Largo --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="largo" class="il-gray fs-14 fw-500 align-center mb-10">Largo</label>
                        <input type="number" step="0.1" min="1" name="largo"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="largo"
                            placeholder="Ingrese largo" required>
                    </div>
                </div>
                {{-- Largo vista --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="largo_vista" class="il-gray fs-14 fw-500 align-center mb-10">Largo vista</label>
                        <input type="number" step="0.1" min="1" name="largo_vista"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="largo_vista"
                            placeholder="Ingrese el largo de vista" required>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
{{-- Hilos --}}
<div class="col-lg-8">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Hilos</h6>
        </div>
        <div class="card-body py-md-25">
            <div class="row">
                <div class="table4 p-25 mb-20">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr class="userDatatable-header">
                                    <th>
                                        <span class="userDatatable-title">#</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Hilo</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Cantidad</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Doble pasada</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            1
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <div class="dm-select-list d-flex">
                                                <select name="hilo2" id="hilo2" class="form-control  select-search">
                                                    <option value="ta">Seleccione alguna opcion</option>
                                                    <option value="ta">Trama amarilla </option>
                                                    <option value="negro">Trama amarillo mango</option>
                                                    <option value="Ana">Negro </option>
                                                    <option value="Pedro">Blanco </option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="number" step="0.1" min="0.1" name="cantidad_hilo_mm"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="cantidad_hilo_mm" placeholder="Cantidad del hilo en mm ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dm-select ">
                                            <select name="doble_pasada" id="doble_pasada"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                <option value="01">No</option>
                                                <option value="02">Si</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            2
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <div class="dm-select-list d-flex">
                                                <select name="hilo1" id="hilo1" class="form-control  select-search">
                                                    <option value="ta">Seleccione alguna opcion</option>
                                                    <option value="ta">Trama amarilla </option>
                                                    <option value="negro">Trama amarillo mango</option>
                                                    <option value="Ana">Negro </option>
                                                    <option value="Pedro">Blanco </option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="number" step="0.1" min="0.1" name="cantidad_hilo_mm"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="cantidad_hilo_mm" placeholder="Cantidad del hilo en mm ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dm-select ">
                                            <select name="doble_pasada" id="doble_pasada"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                <option value="01">No</option>
                                                <option value="02">Si</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            3
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <div class="dm-select-list d-flex">
                                                <select name="hilo4" id="hilo4" class="form-control  select-search">
                                                    <option value="ta">Seleccione alguna opcion</option>
                                                    <option value="ta">Trama amarilla </option>
                                                    <option value="negro">Trama amarillo mango</option>
                                                    <option value="Ana">Negro </option>
                                                    <option value="Pedro">Blanco </option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="number" step="0.1" min="0.1" name="cantidad_hilo_mm"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="cantidad_hilo_mm" placeholder="Cantidad del hilo en mm ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dm-select ">
                                            <select name="doble_pasada" id="doble_pasada"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                <option value="01">No</option>
                                                <option value="02">Si</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            4
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <div class="dm-select-list d-flex">
                                                <select name="hilo5" id="hilo5" class="form-control  select-search">
                                                    <option value="ta">Seleccione alguna opcion</option>
                                                    <option value="ta">Trama amarilla </option>
                                                    <option value="negro">Trama amarillo mango</option>
                                                    <option value="Ana">Negro </option>
                                                    <option value="Pedro">Blanco </option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="number" step="0.1" min="0.1" name="cantidad_hilo_mm"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="cantidad_hilo_mm" placeholder="Cantidad del hilo en mm ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dm-select ">
                                            <select name="doble_pasada" id="doble_pasada"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                <option value="01">No</option>
                                                <option value="02">Si</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            5
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <div class="dm-select-list d-flex">
                                                <select name="hilo3" id="hilo3" class="form-control  select-search">
                                                    <option value="ta">Seleccione alguna opcion</option>
                                                    <option value="ta">Trama amarilla </option>
                                                    <option value="negro">Trama amarillo mango</option>
                                                    <option value="Ana">Negro </option>
                                                    <option value="Pedro">Blanco </option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="number" step="0.1" min="0.1" name="cantidad_hilo_mm"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="cantidad_hilo_mm" placeholder="Cantidad del hilo en mm ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dm-select ">
                                            <select name="doble_pasada" id="doble_pasada"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                <option value="01">No</option>
                                                <option value="02">Si</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            6
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <div class="dm-select-list d-flex">
                                                <select name="hilo6" id="hilo6" class="form-control  select-search">
                                                    <option value="ta">Seleccione alguna opcion</option>
                                                    <option value="ta">Trama amarilla </option>
                                                    <option value="negro">Trama amarillo mango</option>
                                                    <option value="Ana">Negro </option>
                                                    <option value="Pedro">Blanco </option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="number" step="0.1" min="0.1" name="cantidad_hilo_mm"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="cantidad_hilo_mm" placeholder="Cantidad del hilo en mm ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dm-select ">
                                            <select name="doble_pasada" id="doble_pasada"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                <option value="01">No</option>
                                                <option value="02">Si</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            7
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <div class="dm-select-list d-flex">
                                                <select name="hilo7" id="hilo7" class="form-control  select-search">
                                                    <option value="ta">Seleccione alguna opcion</option>
                                                    <option value="ta">Trama amarilla </option>
                                                    <option value="negro">Trama amarillo mango</option>
                                                    <option value="Ana">Negro </option>
                                                    <option value="Pedro">Blanco </option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="number" step="0.1" min="0.1" name="cantidad_hilo_mm"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="cantidad_hilo_mm" placeholder="Cantidad del hilo en mm ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dm-select ">
                                            <select name="doble_pasada" id="doble_pasada"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                <option value="01">No</option>
                                                <option value="02">Si</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="userDatatable-content">
                                            8
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <div class="dm-select-list d-flex">
                                                <select name="hilo8" id="hilo8" class="form-control  select-search">
                                                    <option value="ta">Seleccione alguna opcion</option>
                                                    <option value="ta">Trama amarilla </option>
                                                    <option value="negro">Trama amarillo mango</option>
                                                    <option value="Ana">Negro </option>
                                                    <option value="Pedro">Blanco </option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="number" step="0.1" min="0.1" name="cantidad_hilo_mm"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="cantidad_hilo_mm" placeholder="Cantidad del hilo en mm ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dm-select ">
                                            <select name="doble_pasada" id="doble_pasada"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                <option value="01">No</option>
                                                <option value="02">Si</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>
{{-- CalculosHilos --}}
<div class="col-lg-4">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Calculos de hilos </h6>
        </div>
        <div class="card-body py-md-25">
            <div class="row">
                {{-- Total hilo --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="total_hilo" class="il-gray fs-14 fw-500 align-center mb-10">Total hilo</label>
                        <input type="number" step="0.1" min="1" name="total_hilo"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="total_hilo"
                            placeholder="0.00">
                    </div>
                </div>
                {{-- PPR --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="ppr" class="il-gray fs-14 fw-500 align-center mb-10">PPR</label>
                        <input type="number" step="0.1" min="1" name="ppr"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="ppr" placeholder="0.00">
                    </div>
                </div>
                {{-- PPR real --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="ppr_real" class="il-gray fs-14 fw-500 align-center mb-10">PPR real</label>
                        <input type="number" step="0.1" min="1" name="ppr_real"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="ppr_real"
                            placeholder="0.00">
                    </div>
                </div>
                {{-- Aurotizar ppr --}}
                <div class="col-md-12">
                    <label for="autizar_ppr" class="il-gray fs-14 fw-500 align-center mb-10">Autorizar PPR</label>

                    <div class="mb-3">
                        <div class="radio-theme-default custom-radio row">
                            <div class="col-md-3">
                                <input class="radio" type="radio" name="radio-default" value=0 id="radio-un4" checked>
                                <label for="radio-un4">
                                    <span class="radio-text">No</span>
                                </label>

                            </div>
                            <div class="col-md-3">
                                <input class="radio " type="radio" name="radio-default" value=0 id="radio-un2">
                                <label for="radio-un2">
                                    <span class="radio-text">Si</span>
                                </label>

                            </div>
                        </div>


                    </div>


                </div>
                {{-- Produccion minima --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="produccion_minima" class="il-gray fs-14 fw-500 align-center mb-10">Produccion
                            minima</label>
                        <input type="number" step="0.1" min="1" name="produccion_minima"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="produccion_minima"
                            placeholder="0.00">
                    </div>
                </div>
                {{-- Boceto --}}
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="boceto" class="il-gray fs-14 fw-500 align-center mb-10">Boceto</label>

                        <div class="custom-file">
                            <input class="form-control custom-file-input" type="file" id="Boceto" name="boceto">
                            <label class="custom-file-label ps-15" for="Boceto">Cargar archivo</label>
                        </div>

                    </div>
                </div>







            </div>
        </div>
    </div>
</div>
