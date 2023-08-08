@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">

            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Ver cliente</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Control</a></li>
                            <li class="breadcrumb-item"><a
                                    href="{{ route('clients.index',app()->getLocale())  }}">Clientes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Ver</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
        <div class="col-lg-12 mb-3">
            <a href="{{ route('clients.index',app()->getLocale())  }}" class="btn bg-#334155 btn-block">Regresar a
                listado</a>
        </div>
    </div>
    <div class="form-element">

        <div class="row">

            {{-- Datos fiscales --}}
            <div class="col-lg-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Datos fiscales</h6>
                    </div>
                    <div class="card-body py-md-25">
                        <div class="row">
                            {{-- RFC --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="rfc" class="il-gray fs-14 fw-500 align-center mb-10">RFC</label>
                                    <input readonly type="text" name="rfc"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="rfc"
                                        placeholder="Ingrese RFC" required value="{{ $client->rfc }}">
                                </div>
                            </div>
                            {{-- razon social --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="razon_social" class="il-gray fs-14 fw-500 align-center mb-10">Razon
                                        social</label>
                                    <input readonly type="text" name="razon_social"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                        id="razon_social" placeholder="Ingrese razon social" required
                                        value="{{ $client->razon_social }}">
                                </div>
                            </div>
                            {{-- Telefono corporativo --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono_corporativo"
                                        class="il-gray fs-14 fw-500 align-center mb-10">Telefono corporativo</label>
                                    <input readonly type="phone" name="telefono_corporativo"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                        id="telefono_corporativo" placeholder="55 0000 0000" required
                                        value="{{ $client->telefono_corporativo }}">
                                </div>
                            </div>
                            {{-- Empresa --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="empresa" class="il-gray fs-14 fw-500 align-center mb-10">Empresa</label>
                                    <input readonly type="text" name="empresa"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="empresa"
                                        placeholder="55 0000 0000" required value="{{ $client->enterprise->empresa }}">
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
            <!-- ends: Datos fiscales-->

            {{-- Domicilio fiscal --}}
            <div class="col-lg-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Domicilio fiscal</h6>
                    </div>
                    <div class="card-body py-md-25">
                        <div class="row">
                            {{-- Calle --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="calle" class="il-gray fs-14 fw-500 align-center mb-10">Calle</label>
                                    <input readonly type="text" name="calle"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="calle"
                                        placeholder="Ingrese la calle" required
                                        value="{{ $client->taxAddress->calle }}">

                                </div>
                            </div>
                            {{-- No externo --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="no_externo" class="il-gray fs-14 fw-500 align-center mb-10">No
                                        externo</label>
                                    <input readonly type="text" name="no_externo"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="no_externo"
                                        placeholder="Ingrese no externo" required
                                        value="{{ $client->taxAddress->numero_externo }}">
                                </div>
                            </div>
                            {{-- No interno --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="no_interno" class="il-gray fs-14 fw-500 align-center mb-10">No
                                        interno</label>
                                    <input readonly type="text" name="no_interno"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="no_interno"
                                        placeholder="Ingrese no interno" required
                                        value="{{ $client->taxAddress->numero_interno }}">
                                </div>
                            </div>
                            {{-- Codigo postal --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="codigo_postal" class="il-gray fs-14 fw-500 align-center mb-10">Codigo
                                        postal</label>
                                    <input readonly type="text" name="codigo_postal"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                        id="codigo_postal" placeholder="Ingrese codigo postal" required
                                        value="{{ $client->taxAddress->codigo_postal }}">
                                </div>
                            </div>

                            {{-- Colonia --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="colonia" class="il-gray fs-14 fw-500 align-center mb-10">Colonia</label>
                                    <input readonly type="text" name="colonia"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="colonia"
                                        placeholder="Ingrese la colonia" required
                                        value="{{ $client->taxAddress->colonia }}">
                                </div>
                            </div>
                            {{-- Delegacion --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="delegacion"
                                        class="il-gray fs-14 fw-500 align-center mb-10">Delegación</label>
                                    <input readonly type="text" name="delegacion"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="delegacion"
                                        placeholder="Ingrese la delegación" required
                                        value="{{ $client->taxAddress->delegacion }}">
                                </div>
                            </div>
                            {{-- Estado --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="estado" class="il-gray fs-14 fw-500 align-center mb-10">Estado</label>
                                    <input readonly type="text" name="estado"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="estado"
                                        placeholder="Ingrese el estado" required
                                        value="{{ $client->taxAddress->estado }}">
                                </div>
                            </div>
                            {{-- Pais --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="pais" class="il-gray fs-14 fw-500 align-center mb-10">País</label>
                                    <input readonly type="text" name="pais_dominio_fiscal"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="pais"
                                        placeholder="Ingrese el país" value="{{ $client->taxAddress->pais }}">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- ends: Domicilio fiscal -->

            {{-- Zonas de entrega --}}
            <div class="col-lg-12">
                <div class="card card-default card-md mb-4">
                    <div class="card-header">
                        <h6>Zona de entrega</h6>
                    </div>
                    <div class="card-body py-md-25">

                        <div class="row">
                            {{-- Nombre direccion --}}
                            <div class="col-md-3">
                                {{-- Direccion zona de entrega --}}
                                <div class="form-group">
                                    <label for="nombre_direccion" class="il-gray fs-14 fw-500 align-center mb-10">Nombre
                                        direccion</label>
                                    <input readonly type="text" name="nombre_direccion"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                        id="nombre_direccion" placeholder="Ingrese la direccion"
                                        value="{{ $client->deliveryZones[0]->nombre_direccion }}">
                                </div>
                            </div>

                            {{-- Zona entrega --}}
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="zona_entrega" class="il-gray fs-14 fw-500 align-center mb-10">Zona
                                        entrega</label>
                                    <input readonly type="text" name="zona_entrega"
                                        class="form-control ih-medium ip-light radius-xs b-light px-15"
                                        id="zona_entrega" placeholder="Ingrese zona de entrega"
                                        value="{{ $client->deliveryZones[0]->zona_entrega }}"">
                                </div>
                            </div>

                            {{-- calle zonaenterga --}}
                            <div class=" col-md-3">
                                    <div class="form-group">
                                        <label for="calle_zona_entrega"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Calle</label>
                                        <input readonly type="text" name="calle_zona_entrega"
                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                            id="calle_zona_entrega" placeholder="Ingrese la calle"
                                            value="{{ $client->deliveryZones[0]->calle }}">
                                    </div>
                                </div>

                                {{-- No externo ze--}}
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="no_externo_zona_entrega"
                                            class="il-gray fs-14 fw-500 align-center mb-10">No
                                            externo</label>
                                        <input readonly type="text" name="no_externo_zona_entrega"
                                            class="form-control ih-medium ip-light radius-xs b-light px-15"
                                            id="no_externo_zona_entrega" placeholder="Ingrese no externo"
                                            value="{{ $client->deliveryZones[0]->numero_externo }}"">
                                </div>
                            </div>
                            {{-- No interno ze--}}
                            <div class=" col-md-3">
                                        <div class="form-group">
                                            <label for="no_interno_zona_entrega"
                                                class="il-gray fs-14 fw-500 align-center mb-10">No
                                                interno</label>
                                            <input readonly type="text" name="no_interno_zona_entrega"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="no_interno_zona_entrega" placeholder="Ingrese no interno"
                                                value="{{ $client->deliveryZones[0]->numero_interno }}">
                                        </div>
                                    </div>
                                    {{-- Codigo postal ze --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="codigo_postal_zona_entrega"
                                                class="il-gray fs-14 fw-500 align-center mb-10">Codigo
                                                postal</label>
                                            <input readonly type="text" name="codigo_postal_zona_entrega"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="codigo_postal_zona_entrega" placeholder="Ingrese codigo postal"
                                                value="{{ $client->deliveryZones[0]->codigo_postal }}">
                                        </div>
                                    </div>
                                    {{-- Colonia ze --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="colonia_zona_entrega"
                                                class="il-gray fs-14 fw-500 align-center mb-10">Colonia</label>
                                            <input readonly type="text" name="colonia_zona_entrega"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="colonia_zona_entrega" placeholder="Ingrese la colonia"
                                                value="{{ $client->deliveryZones[0]->colonia }}">
                                        </div>
                                    </div>
                                    {{-- Delegacion zona entrega --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="delegacion_zona_entrega"
                                                class="il-gray fs-14 fw-500 align-center mb-10">Delegación</label>
                                            <input readonly type="text" name="delegacion_zona_entrega"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="delegacion_zona_entrega" placeholder="Ingrese la delegación"
                                                value="{{ $client->deliveryZones[0]->delegacion }}">
                                        </div>
                                    </div>
                                    {{-- Estado zona entrega --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="estado_zona_entrega"
                                                class="il-gray fs-14 fw-500 align-center mb-10">Estado</label>
                                            <input readonly type="text" name="estado_zona_entrega"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="estado_zona_entrega" placeholder="Ingrese el estado"
                                                value="{{ $client->deliveryZones[0]->estado }}">
                                        </div>
                                    </div>
                                    {{-- pais zona entrega --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="pais_zona_entrega"
                                                class="il-gray fs-14 fw-500 align-center mb-10">País</label>
                                            <input readonly type="text" name="pais_zona_entrega"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="pais_zona_entrega" placeholder="Ingrese el país"
                                                value="{{ $client->deliveryZones[0]->pais }}">
                                        </div>
                                    </div>
                                    {{-- Dias de entrega zona entrega--}}
                                    <div class="col-md-6">
                                        <label for="dias_semana_para_entrega"
                                            class="il-gray fs-14 fw-500 align-center mb-10">Dias de
                                            entrega</label>
                                        <div class="dm-select ">
                                            <select name="dias_semana_para_entrega[]" id="dias_semana_para_entrega"
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
                                    {{-- Horario de entrega inicio zona entrega --}}
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="horario_entrega_inicio_zona_entrega"
                                                class="il-gray fs-14 fw-500 align-center mb-10">Horario de entrega
                                                (Inicio)</label>
                                            <input readonly type="time" name="horario_entrega_inicio_zona_entrega"
                                                class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                id="horario_entrega_inicio_zona_entrega"
                                                placeholder="Ingrese el Horario de entrega"
                                                value="{{ $client->deliveryZones[0]->horario_entrega }}"">
                                </div>
                            </div>
                            {{-- Horario de entrega fin zona entrega --}}
                            <div class=" col-md-3">
                                            <div class="form-group">
                                                <label for="horario_entrega_fin_zona_entrega"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Horario de entrega
                                                    (Fin)</label>
                                                <input readonly type="time" name="horario_entrega_fin_zona_entrega"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="horario_entrega_fin_zona_entrega"
                                                    placeholder="Ingrese el Horario de entrega"
                                                    value="{{ $client->deliveryZones[0]->horario_entrega }}">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ends: Zonas de entrega .card -->

                        {{-- Contactos --}}
                        <div class="col-lg-12">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Contactos</h6>
                                </div>
                                <div class="card-body py-md-25">

                                    <div class="row">

                                        {{-- Nombre --}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="nombre_contacto"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Nombre</label>
                                                <input readonly type="text" name="nombre_contacto"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="nombre_contacto" placeholder="Ingrese nombre del contacto"
                                                    value="{{ $client->contacts[0]->nombre_direccion }}">
                                            </div>
                                        </div>
                                        {{-- Puesto --}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="puesto_contacto"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Puesto</label>
                                                <input readonly type="text" name="puesto_contacto"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="puesto_contacto" placeholder="Ingrese puesto del contacto"
                                                    value="{{ $client->contacts[0]->puesto }}">
                                            </div>
                                        </div>

                                        {{-- Telefono --}}
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="telefono_contacto"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Telefono</label>
                                                <input readonly type="phone" name="telefono_contacto"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="telefono_contacto" placeholder="55 000 0000">
                                            </div>
                                        </div>

                                        {{-- Dias de entrega --}}
                                        <div class="col-md-6">
                                            <label for="dias_semana_para_entrega_ctc"
                                                class="il-gray fs-14 fw-500 align-center mb-10">Dias de
                                                entrega</label>
                                            <div class="dm-select ">
                                                <select name="dias_semana_para_entrega_ctc[]"
                                                    id="dias_semana_para_entrega_ctc"
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
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="horario_entrega_inicio_contacto"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Horario de entrega
                                                    (Inicio)</label>
                                                <input readonly type="time" name="horario_entrega_inicio_contacto"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="horario_entrega_inicio_contacto"
                                                    placeholder="Ingrese el Horario de entrega">
                                            </div>
                                        </div>
                                        {{-- Horario de entrega fin --}}
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="horario_entrega_fin_contacto"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Horario de entrega
                                                    (Fin)</label>
                                                <input readonly type="time" name="horario_entrega_fin_contacto"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="horario_entrega_fin_contacto"
                                                    placeholder="Ingrese el Horario de entrega">
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ends: Contactos .card -->

                        {{-- Informacion de pago --}}
                        <div class="col-lg-6">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Informacion de pago </h6>
                                </div>
                                <div class="card-body py-md-25">

                                    <div class="row mb-4">

                                        {{-- licencia --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="licencia"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Licencia</label>
                                                <input readonly type="text" name="licencia"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="licencia" placeholder="Ingrese licencia">
                                            </div>
                                        </div>
                                        {{-- Forma de pago --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="forma_pago"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Forma de
                                                    pago </label>
                                                <input readonly type="text" name="forma_pago"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="forma_pago" placeholder="Ingrese forma de pago ">
                                            </div>
                                        </div>
                                        {{-- Condiciones de Pago --}}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="condicion_pago"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Condicion de
                                                    pago</label>
                                                <input readonly type="text" name="condicion_pago"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="condicion_pago" placeholder="Ingrese la condicion de pago">
                                            </div>
                                        </div>
                                        {{-- Vendedor --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="Vendedor"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">Vendedor</label>
                                                {{-- <input type="text" name="empresa"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="empresa" placeholder="55 0000 0000" required> --}}
                                                <div class="dm-select-list d-flex">
                                                    <div class="dm-select ">
                                                        <select name="vendedor" id="se"
                                                            class="form-control  select-search">
                                                            <option value="Maria">Maria</option>
                                                            <option value="Juan">Juan</option>
                                                            <option value="Ana">Ana</option>
                                                            <option value="Pedro">Pedro</option>
                                                            <option value="Laura">Laura</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>



                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ends: Informacion de pago .card -->

                        {{-- Informacion de entrega --}}
                        <div class="col-lg-6">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Informacion de entrega </h6>
                                </div>
                                <div class="card-body py-md-25">

                                    <div class="row">
                                        {{-- Tolerancia de entrega --}}
                                        <div class="col-md-12">
                                            <h6 class="mb-2">Tolerancia de entrega </h6>
                                        </div>
                                        {{-- % Minimo --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="tolerancia_minima"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">%
                                                    Minimo</label>
                                                <input readonly type="number" min="0" max="100"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="tolerancia_minima" placeholder="0-100">
                                            </div>
                                        </div>
                                        {{-- % Maxima --}}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="tolerancia_maxima"
                                                    class="il-gray fs-14 fw-500 align-center mb-10">%
                                                    Maxima</label>
                                                <input readonly type="number" min="0" max="100"
                                                    class="form-control ih-medium ip-light radius-xs b-light px-15"
                                                    id="tolerancia_maxima" placeholder="0-100 ">
                                            </div>
                                        </div>






                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- ends: Informacion de entrega .card -->

                        {{-- Estados de cuenta --}}
                        <div class="col-lg-12">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Estados de cuenta </h6>
                                </div>
                                <div class="card-body py-md-25">
                                    <div class="row">
                                        <div class="col">
                                            <table id="dt-estados-cuenta" class="table table-bordered text-center">
                                                <thead class="thead-primary">
                                                    <tr>
                                                        <th scope="col">Folio</th>
                                                        <th scope="col">Fecha Creacion</th>
                                                        <th scope="col">Fecha entrega</th>
                                                        <th scope="col">Total a pagar</th>
                                                        <th scope="col">Pagado</th>
                                                        <th scope="col">Pendiente</th>
                                                        <th scope="col">Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>TE23-23451</td>
                                                        <td>2021-01-01</td>
                                                        <td>2021-01-10</td>
                                                        <td>$100.00</td>
                                                        <td>$50.00</td>
                                                        <td>$50.00</td>
                                                        <td>Acciones</td>
                                                    </tr>
                                                    <tr>
                                                        <td>TE23-23452</td>
                                                        <td>2021-02-01</td>
                                                        <td>2021-02-10</td>
                                                        <td>$200.00</td>
                                                        <td>$100.00</td>
                                                        <td>$100.00</td>
                                                        <td>Acciones</td>
                                                    </tr>
                                                    <!-- Agrega más filas de ejemplo según sea necesario -->
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th colspan="3" style="text-align:right">Total:</th>
                                                        <th colspan="3"><span id="total2">$300.00</span></th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3" style="text-align:right">Total Pagado:</th>
                                                        <th colspan="3"><span id="totalPagado2">$150.00</span></th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="3" style="text-align:right">Total saldo Pendiente:
                                                        </th>
                                                        <th colspan="3"><span id="totalSaldoPendiente2">$150.00</span>
                                                        </th>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: Estados de cuenta-->
                        {{-- Pedidos de cliente --}}
                        <div class="col-lg-12">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Pedidos de cliente </h6>
                                </div>
                                <div class="card-body py-md-25">
                                    <div class="row">
                                        <div class="col">
                                            <table id="dt-pedidos-cliente" class="table table-bordered text-center">
                                                <thead class="thead-primary">
                                                    <tr>
                                                        <th scope="col">Folio</th>
                                                        <th scope="col">Tipo item</th>
                                                        <th scope="col">Nombre de la etiqueta</th>
                                                        <th scope="col">ACCIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>TE23-1244</td>
                                                        <td>TEJIDA 1</td>
                                                        <td>Etiqueta 1</td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TE23-2134</td>
                                                        <td>TEJIDA 2</td>
                                                        <td>Etiqueta 2</td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>TE23-2135</td>
                                                        <td>TEJIDA 3</td>
                                                        <td>Etiqueta 3</td>
                                                        <td> </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: Pedidos de cliente-->
                        {{-- Items de cliente --}}
                        <div class="col-lg-12">
                            <div class="card card-default card-md mb-4">
                                <div class="card-header">
                                    <h6>Items de cliente </h6>
                                </div>
                                <div class="card-body py-md-25">
                                    <div class="row">
                                        <div class="col">
                                            <table id="dt-pedidos" class="table table-bordered table-striped">
                                                <thead class="thead-primary">
                                                    <tr>
                                                        <th scope="col">id</th>
                                                        <th scope="col">Tipo</th>
                                                        <th scope="col">Nombre de la etiqueta</th>
                                                        <th scope="col">ACCIONES</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Tejida</td>
                                                        <td>Clave 1</td>
                                                        <td>Etiqueta 1</td>
                                                        <td> </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Impresa</td>
                                                        <td>Clave 2</td>
                                                        <td>Etiqueta 2</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Estampada</td>
                                                        <td>clave 3</td>
                                                        <td>Etiqueta 3</td>
                                                        <td></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ends: Items de cliente-->


                        <div class="col-lg-12 mb-3">
                            <a href="{{ redirect()->back()  }}" class="btn btn-scondary btn-block">Regresar a
                                listado</a>
                        </div>




                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                const selectMultiples =  document.querySelectorAll('.select-multiple');

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
                var selectElements = document.querySelectorAll("#select-search, .kb__select, .select-search");

                selectElements.forEach(function(selectElement) {
                selectElement.select2({
                    placeholder: "Search a person",
                    dropdownCssClass: "category-member",
                    allowClear: true
                });
                });
                });
                </script>
                @endsection
