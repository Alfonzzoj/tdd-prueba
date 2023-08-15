{{-- Tipo de pie y corte acabado --}}
<div class="col-lg-6">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Tipo de corte </h6>
        </div>
        <div class="card-body py-md-25">
            <div class="row">

                {{-- Tipo de corte --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Pie" class="il-gray fs-14 fw-500 align-center mb-10">Corte</label>
                        <div class="w-full">
                            <div class="dm-select-list d-flex">
                                <select name="corte" id="tipo_corte" class="form-control select-search">
                                    <option value="bandera">Bandera</option>
                                    <option value="diagonal">Diagonal</option>
                                    <option value="laser">Laser</option>
                                    <option value="medio">Medio</option>
                                    <option value="recto">Recto</option>
                                    <option value="rollo">Rollo</option>
                                    <option value="termico">Termico</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Tipo de cinta --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="Pie" class="il-gray fs-14 fw-500 align-center mb-10">Cinta</label>
                        <div class="w-full">
                            <div class="dm-select-list d-flex">
                                <select name="cinta" id="cinta" class="form-control select-search">
                                    <option value="bandera">Blanco</option>
                                    <option value="diagonal">Satin </option>
                                    <option value="laser">Negro</option>
                                    <option value="medio">Rosado</option>
                                    <option value="recto">gris</option>
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
                {{-- Alto real --}}
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alto_real" class="il-gray fs-14 fw-500 align-center mb-10">Alto real</label>
                        <input type="number" step="0.1" min="1" name="alto_real"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="alto_real"
                            placeholder="Ingrese el alto de real" required>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>
{{-- Matriz de alto real --}}
<div class="col-lg-12">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Matriz de alto real </h6>
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
                                        <span class="userDatatable-title">Engrane</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Cilindros</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">1</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">2</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">3</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">4</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">5</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td rowspan="2">1 y 2</td>
                                        <td>53</td>
                                        <td>5</td>
                                        <td>132.07</td>
                                        <td>66.04</td>
                                        <td>44.02</td>
                                        <td>33.02</td>
                                        <td>26.41</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>1 y 2</td>
                                        <td>61</td>
                                        <td>5</td>
                                        <td>152.01</td>
                                        <td>76.01</td>
                                        <td>50.67</td>
                                        <td>38</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>1 y 2</td>
                                        <td>65</td>
                                        <td>4</td>
                                        <td>161.98</td>
                                        <td>80.99</td>
                                        <td>53.99</td>
                                        <td>40.5</td>
                                        <td>32.40</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>1 y 2</td>
                                        <td>73</td>
                                        <td>8</td>
                                        <td>181.91</td>
                                        <td>90.96</td>
                                        <td>60.64</td>
                                        <td>45.48</td>
                                        <td>36.38</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>1 y 2</td>
                                        <td>81</td>
                                        <td>5</td>
                                        <td>201.85</td>
                                        <td>100.93</td>
                                        <td>67.28</td>
                                        <td>50.46</td>
                                        <td>40.37</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>1 y 2</td>
                                        <td>100</td>
                                        <td>6</td>
                                        <td>249.2</td>
                                        <td>124.6</td>
                                        <td>83.07</td>
                                        <td>62.3</td>
                                        <td>49.84</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>1 y 2</td>
                                        <td>112</td>
                                        <td>4</td>
                                        <td>279.1</td>
                                        <td>139.55</td>
                                        <td>93.03</td>
                                        <td>69.78</td>
                                        <td>55.82</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>3</td>
                                        <td>42</td>
                                        <td>6+1</td>
                                        <td>133.35</td>
                                        <td>66.63</td>
                                        <td>44.42</td>
                                        <td>33.31</td>
                                        <td>0.00</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>3</td>
                                        <td>44</td>
                                        <td>6+1</td>
                                        <td>139.7</td>
                                        <td>69.85</td>
                                        <td>46.57</td>
                                        <td>34.93</td>
                                        <td>0.00</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>3</td>
                                        <td>48</td>
                                        <td>6+1</td>
                                        <td>152.4</td>
                                        <td>76.2</td>
                                        <td>50.8</td>
                                        <td>38.1</td>
                                        <td>0.00</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>3</td>
                                        <td>51</td>
                                        <td>6+1</td>
                                        <td>161.92</td>
                                        <td>80.96</td>
                                        <td>53.97</td>
                                        <td>40.48</td>
                                        <td>0.00</td>
                                    </div>
                                </tr>
                                <tr>
                                    <div class="userDatatable-content">
                                        <td>3</td>
                                        <td>57</td>
                                        <td>6+1</td>
                                        <td>180.97</td>
                                        <td>90.49</td>
                                        <td>60.32</td>
                                        <td>45.24</td>
                                        <td>0.00</td>
                                    </div>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>





            </div>
        </div>
    </div>
</div>
{{-- Tintas --}}
<div class="col-lg-6">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Tintas - Colores frente</h6>
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
                                        <span class="userDatatable-title">Color frente </span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Plasta</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Anilox</span>
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
                                            <input type="text" name="color_frente"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="color_frente" placeholder="Nombre del color del frente ">
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
                                                id="anilox" placeholder="Nombre del color del frente ">
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
{{-- Tintas reverso --}}
<div class="col-lg-6">
    <div class="card card-default card-md mb-4">
        <div class="card-header">
            <h6>Tintas - Colores reverso</h6>
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
                                        <span class="userDatatable-title">Color frente </span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Plasta</span>
                                    </th>
                                    <th>
                                        <span class="userDatatable-title">Anilox</span>
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
                                            <input type="text" name="color_frente"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="color_frente" placeholder="Nombre del color del frente ">
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
                                                id="anilox" placeholder="Nombre del color del frente ">
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
                {{-- Numero de tintas --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="numero_de_tintas" class="il-gray fs-14 fw-500 align-center mb-10">Numero de
                            tintas</label>
                        <input type="number" step="1" min="1" name="numero_de_tintas"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="numero_de_tintas"
                            placeholder="Ingrese numero de tintas" required>
                    </div>
                </div>
                {{-- piezas por metro --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="piezas_por_metro" class="il-gray fs-14 fw-500 align-center mb-10">Piezas por
                            metro</label>
                        <input type="number" step="1" min="1" name="piezas_por_metro"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="piezas_por_metro"
                            placeholder="Ingrese piezas por metro" required>
                    </div>
                </div>
                {{-- Produccion minima --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="produccion_minima" class="il-gray fs-14 fw-500 align-center mb-10">Produccion
                            minima</label>
                        <input type="number" step="1" min="1" name="produccion_minima"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="produccion_minima"
                            placeholder="Ingrese Produccion minima " required>
                    </div>
                </div>
                {{-- Cilindros --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cilindros" class="il-gray fs-14 fw-500 align-center mb-10">Cilindros</label>
                        <input type="number" step="1" min="1" name="cilindros"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="cilindros"
                            placeholder="Ingrese Cilindros " required>
                    </div>
                </div>
                {{-- Engrane --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="engrane" class="il-gray fs-14 fw-500 align-center mb-10">Engrane</label>
                        <input type="number" step="1" min="1" name="engrane"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="engrane"
                            placeholder="Ingrese Engrane " required>
                    </div>
                </div>
                {{-- Maquinas --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="maquina" class="il-gray fs-14 fw-500 align-center mb-10">Maquinas</label>
                        <input type="number" step="1" min="1" name="maquina"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="maquina"
                            placeholder="Ingrese Maquinas " required>
                    </div>
                </div>
                {{-- Alto real 1 --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="alto_real" class="il-gray fs-14 fw-500 align-center mb-10">Alto real 1 </label>
                        <input type="number" step="1" min="1" name="alto_real"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="alto_real"
                            placeholder="Ingrese Alto real 1  " required>
                    </div>
                </div>
                {{-- Repeticiones --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="repeticiones" class="il-gray fs-14 fw-500 align-center mb-10">Repeticiones </label>
                        <input type="number" step="1" min="1" name="repeticiones"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="repeticiones"
                            placeholder="Ingrese Repeticiones  " required>
                    </div>
                </div>
                {{-- Area cirel m2 --}}
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="repeticiones" class="il-gray fs-14 fw-500 align-center mb-10">Area cirel m2 </label>
                        <input type="number" step="1" min="1" name="repeticiones"
                            class="form-control ih-medium ip-light radius-xs b-light px-15" id="repeticiones"
                            placeholder="Ingrese Area cirel m2  " required>
                    </div>
                </div>
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
