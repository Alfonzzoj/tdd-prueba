{{-- Tipo de pie y corte acabado --}}
<div class="col-lg-12">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Tipo de corte </h6>
        </div>
        <div class="card-body py-md-25">
            <div class="row">

                {{-- Tipo papel --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Pie" class="il-gray fs-14 fw-500 align-center mb-10">Tipo papel </label>
                        <div class="w-full">
                            <div class="dm-select-list d-flex">
                                <select name="corte" id="tipo_papel" class="form-control select-search">
                                    <option value="bandera">Pelicula</option>
                                    <option value="diagonal">Papel</option>
                                </select>
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

                {{-- Alto --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alto" class="il-gray fs-14 fw-500 align-center mb-10">Alto</label>
                        <input type="number" step="0.1" min="1" name="alto"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="alto"
                            placeholder="Ingrese alto" required>
                    </div>
                </div>
                {{-- Separacion horizontal --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="separacion_horizontal" class="il-gray fs-14 fw-500 align-center mb-10">Separacion
                            horizontal</label>
                        <input type="number" step="0.1" min="1" name="separacion_horizontal"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="separacion_horizontal"
                            placeholder="Ingrese separacion_horizontal" required>
                    </div>
                </div>
                {{-- Separacion vertical --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="separacion vertical" class="il-gray fs-14 fw-500 align-center mb-10">Separacion
                            vertical</label>
                        <input type="number" step="0.1" min="1" name="separacion vertical"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="separacion vertical"
                            placeholder="Ingrese separacion vertical" required>
                    </div>
                </div>

                {{-- Usar hoja --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Pie" class="il-gray fs-14 fw-500 align-center mb-10">Usar hoja</label>
                        <div class="w-full">
                            <div class="dm-select-list d-flex">
                                <select name="uso_hoja" id="uso_hoja" class="form-control select-search">
                                    <option value="bandera">Horizontal</option>
                                    <option value="diagonal">Vertical</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Etiquetas hoja total --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="etiquetas_hoja_total" class="il-gray fs-14 fw-500 align-center mb-10">Etiquetas hoja
                            total</label>
                        <input type="number" step="0.1" min="1" name="etiquetas_hoja_total"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="etiquetas_hoja_total"
                            placeholder="Ingrese etiquetas_hoja_total" required>
                    </div>
                </div>
                {{-- Cortes hoja vertical --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cortes_hoja_vertical" class="il-gray fs-14 fw-500 align-center mb-10">Cortes hoja
                            vertical</label>
                        <input type="number" step="0.1" min="1" name="cortes_hoja_vertical"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="cortes_hoja_vertical"
                            placeholder="Ingrese cortes_hoja_vertical" required>
                    </div>
                </div>
                {{-- Cortes hoja horizontal --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cortes_hoja_horizontal" class="il-gray fs-14 fw-500 align-center mb-10">Cortes hoja
                            horizontal</label>
                        <input type="number" step="0.1" min="1" name="cortes_hoja_horizontal"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="cortes_hoja_horizontal"
                            placeholder="Ingrese cortes_hoja_horizontal" required>
                    </div>
                </div>
                {{-- Cortes hoja total --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cortes_hoja_total" class="il-gray fs-14 fw-500 align-center mb-10">Cortes hoja
                            total</label>
                        <input type="number" step="0.1" min="1" name="cortes_hoja_total"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="cortes_hoja_total"
                            placeholder="Ingrese cortes_hoja_total" required>
                    </div>
                </div>
                {{-- Etiquetas por hoja total real --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="etiquetas_hoja_total_real" class="il-gray fs-14 fw-500 align-center mb-10">Etiquetas
                            por hoja total real</label>
                        <input type="number" step="0.1" min="1" name="etiquetas_hoja_total_real"
                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                            id="etiquetas_hoja_total_real" placeholder="Ingrese etiquetas_hoja_total_real" required>
                    </div>
                </div>
                {{-- Aurotizar ppr --}}
                <div class="col-md-6">
                    <label for="autizar_ppr" class="il-gray fs-14 fw-500 align-center mb-10">Autorizar Etiquetas hoja
                        total</label>

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





            </div>
        </div>
    </div>
</div>
{{-- Calculos de Medidas --}}
<div class="col-lg-6">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Calculos de medidas</h6>
        </div>
        <div class="card-body py-md-25">
            <div class="row">
                {{-- Ancho con margenes --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ancho_con_margenes" class="il-gray fs-14 fw-500 align-center mb-10">Ancho con
                            margenes</label>
                        <input type="number" step="0.1" min="1" name="ancho_con_margenes"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="ancho_con_margenes"
                            placeholder="Ingrese ancho_con_margenes" required>
                    </div>
                </div>

                {{-- Alto con Margenes --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alto_con_margenes" class="il-gray fs-14 fw-500 align-center mb-10">Alto con
                            Margenes</label>
                        <input type="number" step="0.1" min="1" name="alto_con_margenes"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="alto_con_margenes"
                            placeholder="Ingrese alto_con_margenes" required>
                    </div>
                </div>
                {{-- Etiquetas hoja horizontal --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="etiquetas_hoja_horizontal" class="il-gray fs-14 fw-500 align-center mb-10">Etiquetas
                            hoja horizontal</label>
                        <input type="number" step="0.1" min="1" name="etiquetas_hoja_horizontal"
                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                            id="etiquetas_hoja_horizontal" placeholder="Ingrese etiquetas_hoja_horizontal" required>
                    </div>
                </div>
                {{-- Etiquetas hoja vertical --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="etiquetas_hoja_vertical" class="il-gray fs-14 fw-500 align-center mb-10">Etiquetas
                            hoja vertical</label>
                        <input type="number" step="0.1" min="1" name="etiquetas_hoja_vertical"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="etiquetas_hoja_vertical"
                            placeholder="Ingrese etiquetas_hoja_vertical" required>
                    </div>
                </div>





            </div>
        </div>
    </div>
</div>

{{-- Tintas --}}
<div class="col-lg-12">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Tintas</h6>
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
                                        <span class="userDatatable-title">Color  </span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Tinta</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Plasta</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">No. Malla</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Color Malla</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Emulsion</span>
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
                                            <input type="text" name="color"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="color" placeholder="Nombre del color ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="text" name="color"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="color" placeholder="Nombre del tinta ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <div class="dm-select ">
                                                <select name="plasta" id="plasta"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15">
                                                    <option value="01">No</option>
                                                    <option value="02">Si</option>
                                                </select>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="text" name="anilox"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="anilox" placeholder="No. Malla ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="text" name="anilox"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="anilox" placeholder="Emulsion ">
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content">
                                            <input type="text" name="anilox"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="anilox" placeholder="Emulsion ">
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

{{-- Medidas y calculos --}}
<div class="col-lg-12">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Medidas y calculos </h6>
        </div>
        <div class="card-body py-md-25">
            <div class="row">

                {{-- Boceto --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="boceto" class="il-gray fs-14 fw-500 align-center mb-10">Boceto</label>

                        <div class="custom-file">
                            <input class="form-control custom-file-input" type="file" id="Boceto" name="boceto">
                            <label class="custom-file-label ps-15" for="Boceto">Cargar archivo</label>
                        </div>

                    </div>
                </div>
                {{-- Fit --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="fit" class="il-gray fs-14 fw-500 align-center mb-10">Fit </label>
                        <input type="text" name="fit" class="form-control ih-medium ip-light radius-xs b-light px-15"
                            id="fit" placeholder="Ingrese Fit  " required>
                    </div>
                </div>
                {{-- PDF EDITABLE --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="pdf_editable" class="il-gray fs-14 fw-500 align-center mb-10">PDF Editable</label>

                        <div class="custom-file">
                            <input class="form-control custom-file-input" type="file" id="pdf_editable"
                                name="pdf_editable">
                            <label class="custom-file-label ps-15" for="pdf_editable">Cargar archivo</label>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </div>
</div>
