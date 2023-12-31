<div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="breadcrumb-main">
          <h4 class="text-capitalize breadcrumb-title">Crear cliente</h4>
          <div class="breadcrumb-action justify-content-center flex-wrap">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>Control</a></li>
                <li class="breadcrumb-item"><a href="{{ route('clients.index',app()->getLocale())  }}">Clientes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Nuevo</li>
              </ol>
            </nav>
          </div>
        </div>

      </div>
    </div>
    <div class="form-element">
      <form action="{{ route('clients.store',app()->getLocale()) }}" method="POST">
        @csrf
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
                      <input type="text" name="rfc" class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="rfc" placeholder="Ingrese RFC" required>
                    </div>
                  </div>
                  {{-- razon social --}}
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="razon_social" class="il-gray fs-14 fw-500 align-center mb-10">Razon
                        social</label>
                      <input type="text" name="razon_social"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="razon_social"
                        placeholder="Ingrese razon social" required>
                    </div>
                  </div>
                  {{-- Telefono corporativo --}}
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="telefono_corporativo" class="il-gray fs-14 fw-500 align-center mb-10">Telefono
                        corporativo</label>
                      <input type="phone" name="telefono_corporativo"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="telefono_corporativo"
                        placeholder="55 0000 0000" required>
                    </div>
                  </div>
                  {{-- Empresa --}}
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="empresa" class="il-gray fs-14 fw-500 align-center mb-10">Empresa</label>
                      <div class="w-full">
                        <div class="dm-select-list d-flex">
                          <select name="empresa" id="selectd" class="form-control select-search">
                            @foreach($enterprises as $enterprise)
                            <option value="{{ $enterprise->id }}">{{ $enterprise->razon_social
                              }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
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
                      <input type="text" name="calle" class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="calle" placeholder="Ingrese la calle" required>
                    </div>
                  </div>
                  {{-- No externo --}}
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="no_externo" class="il-gray fs-14 fw-500 align-center mb-10">No
                        externo</label>
                      <input type="text" name="no_externo"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="no_externo"
                        placeholder="Ingrese no externo" required>
                    </div>
                  </div>
                  {{-- No interno --}}
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="no_interno" class="il-gray fs-14 fw-500 align-center mb-10">No
                        interno</label>
                      <input type="text" name="no_interno"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="no_interno"
                        placeholder="Ingrese no interno" required>
                    </div>
                  </div>
                  {{-- Codigo postal --}}
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="codigo_postal" class="il-gray fs-14 fw-500 align-center mb-10">Codigo
                        postal</label>
                      <input type="text" name="codigo_postal"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="codigo_postal"
                        placeholder="Ingrese codigo postal" required>
                    </div>
                  </div>

                  {{-- Colonia --}}
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="colonia" class="il-gray fs-14 fw-500 align-center mb-10">Colonia</label>
                      <input type="text" name="colonia" class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="colonia" placeholder="Ingrese la colonia" required>
                    </div>
                  </div>
                  {{-- Delegacion --}}
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="delegacion" class="il-gray fs-14 fw-500 align-center mb-10">Delegación</label>
                      <input type="text" name="delegacion"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="delegacion"
                        placeholder="Ingrese la delegación" required>
                    </div>
                  </div>
                  {{-- Estado --}}
                  <div class="col-md-3">
                    <div class="form-group">
                      <label for="estado" class="il-gray fs-14 fw-500 align-center mb-10">Estado</label>
                      <input type="text" name="estado" class="form-control ih-medium ip-light radius-xs b-light px-15"
                        id="estado" placeholder="Ingrese el estado" required>
                    </div>
                  </div>
                  {{-- Pais --}}
                  {{-- Tiene id zonas de entrega para que al cerrar el drawer se vea correctamente en la panatalla, sino
                  queda muy arriba --}}
                  <div class="col-md-3" id="zonas-de-entrega">
                    <div class="form-group">
                      <label for="pais" class="il-gray fs-14 fw-500 align-center mb-10">País</label>
                      <input type="text" name="pais_dominio_fiscal"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="pais"
                        placeholder="Ingrese el país">
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <!-- ends: Domicilio fiscal -->

          <div></div>
          {{-- Zonas de entrega --}}
          <div class="col-lg-12">
            <div class="card card-default card-md mb-4">
              <div class="card-header">
                <h6>Zona de entrega</h6>
                <div class="drawer-btn d-flex justify-content-center">

                  <div>
                    <button class="btn btn-primary btn-default btn-squared drawer-trigger" data-drawer="account">Crear
                    </button>
                  </div>
                </div>

              </div>
              <div class="card-body py-md-25">

                <div class="row">
                  <div class="col">
                    <table id="dt-zonas-entrega" class="table table-bordered text-center">
                      <thead class="thead-primary">
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Dirección</th>
                          <th scope="col">Código Postal</th>
                          <th scope="col">Zona de Entrega</th>
                          <th scope="col">Horario de Entrega</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Zona 1</td>
                          <td>Dirección 1</td>
                          <td>12345</td>
                          <td>Zona A</td>
                          <td>9:00 AM - 6:00 PM</td>
                        </tr>
                        <tr>
                          <td>Zona 2</td>
                          <td>Dirección 2</td>
                          <td>67890</td>
                          <td>Zona B</td>
                          <td>8:00 AM - 5:00 PM</td>
                        </tr>
                        <!-- Agrega más filas según sea necesario -->
                      </tbody>
                    </table>
                  </div>

                </div>

              </div>
            </div>
          </div>



          {{-- wrapper de drawers --}}
          <div class="drawer-basic-wrap">

            @include('clients.partials.create.drawers.delivery-zone')

            @include('clients.partials.create.drawers.contacts')
          </div>

          <div class="overlay-dark  "></div>
          <div class="overlay-dark-l2"></div>




          <!-- ends: Zonas de entrega .card -->

          {{-- Contactos --}}
          <div class="col-lg-12">
            <div class="card card-default card-md mb-4">
              <div class="card-header">
                <h6>Contactos</h6>
                <div class="drawer-btn d-flex justify-content-center">
                  <button class="btn btn-primary btn-default btn-squared drawer-trigger" data-drawer="profile">Crear
                  </button>
                </div>

              </div>
              <div class="card-body py-md-25">

                <div class="row">
                  <div class="col">
                    <table id="dt-zonas-entrega" class="table table-bordered text-center">
                      <thead class="thead-primary">
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Apellido</th>
                          <th scope="col">Puesto</th>
                          <th scope="col">Correo</th>
                          <th scope="col">Telefono</th>
                          <th scope="col">Extension</th>
                          <th scope="col">Celular</th>
                          {{-- <th scope="col">Dias de entrega </th>
                          <th scope="col">Horario de Entrega</th> --}}
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Nombre 1</td>
                          <td>Apellido 1</td>
                          <td>Puesto 1</td>
                          <td>Correo 1</td>
                          <td>Telefono 1</td>
                          <td>Extension 1</td>
                          <td>Celular 1</td>
                          {{-- <td>Lunes, Martes, Miercoles</td>
                          <td>9:00 AM - 6:00 PM</td> --}}
                        </tr>
                        <tr>
                          <td>Nombre 2</td>
                          <td>Apellido 2</td>
                          <td>Puesto 2</td>
                          <td>Correo 2</td>
                          <td>Telefono 2</td>
                          <td>Extension 2</td>
                          <td>Celular 2</td>
                          {{-- <td>Lunes, Martes, Miercoles</td>
                          <td>9:00 AM - 6:00 PM</td> --}}
                        </tr>
                        <tr>
                          <td>Nombre 2</td>
                          <td>Apellido 2</td>
                          <td>Puesto 2</td>
                          <td>Correo 2</td>
                          <td>Telefono 2</td>
                          <td>Extension 2</td>
                          <td>Celular 2</td>
                          {{-- <td>Lunes, Martes, Miercoles</td>
                          <td>9:00 AM - 6:00 PM</td> --}}
                        </tr>
                        <tr>
                          <td>Nombre 2</td>
                          <td>Apellido 2</td>
                          <td>Puesto 2</td>
                          <td>Correo 2</td>
                          <td>Telefono 2</td>
                          <td>Extension 2</td>
                          <td>Celular 2</td>
                          {{-- <td>Lunes, Martes, Miercoles</td>
                          <td>9:00 AM - 6:00 PM</td> --}}
                        </tr>
                        <!-- Agrega más filas según sea necesario -->


                      </tbody>
                    </table>
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

                  {{-- Forma de pago --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="forma_pago" class="il-gray fs-14 fw-500 align-center mb-10">Forma de
                        pago </label>
                      {{-- <input type="text" name="forma_pago"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="forma_pago"
                        placeholder="Ingrese forma de pago "> --}}
                      <div class="dm-select-list d-flex">
                        <select name="payment_method" id="payment_method" class="form-control select-search ">
                          @foreach($payment_methods as $payment_method)
                          <option value="{{ $payment_method->id }}">{{ $payment_method->nombre }}
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  {{-- Condiciones de Pago --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="payment_condition" class="il-gray fs-14 fw-500 align-center mb-10">Condicion de
                        pago </label>
                      {{-- <input type="text" name="condicion_pago"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="condicion_pago"
                        placeholder="Ingrese forma de pago "> --}}
                      <div class="dm-select-list d-flex">
                        <select name="payment_condition" id="payment_condition" class="form-control select-search">
                          @foreach($payment_conditions as $payment_condition)
                          <option value="{{ $payment_condition->id }}">{{
                            $payment_condition->nombre }}
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  {{-- Factor porcentual de precio --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="nombre_etiqueta" class="il-gray fs-14 fw-500 align-center mb-10">Factor porcentual de
                        precio</label>
                      <input type="number" min="0" step="1" name="factor_porcentual"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="factor_porcentual"
                        placeholder="Ingrese factor para cliente" required>
                    </div>
                  </div>
                  {{-- Dias pago --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="dias_de_pago" class="il-gray fs-14 fw-500 align-center mb-10">Dias
                        de pago</label>
                      <input type="number" min="0" max="100"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="dias_de_pago"
                        placeholder="0-100 ">
                    </div>
                  </div>
                  {{-- Dias credito --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="dias_de_credito" class="il-gray fs-14 fw-500 align-center mb-10">Dias de
                        credito</label>
                      <input type="number" min="0" max="100"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="dias_de_credito"
                        placeholder="0-100 ">
                    </div>
                  </div>
                  {{-- monto credito --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="monto_de_credito" class="il-gray fs-14 fw-500 align-center mb-10">Monto de
                        credito</label>
                      <input type="number" min="0" max="100"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="monto_de_credito"
                        placeholder="0-100 ">
                    </div>
                  </div>
                  {{-- Anticipo --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="anticipo" class="il-gray fs-14 fw-500 align-center mb-10">Anticipo</label>
                      <div class="dm-select ">
                        <select name="anticipo" id="anticipo"
                          class="form-control ih-medium ip-light radius-xs b-light px-15">
                          <option value="01">No</option>
                          <option value="02">Si</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  {{-- % Anticipo --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="monto_de_credito" class="il-gray fs-14 fw-500 align-center mb-10">%
                        anticipo</label>
                      <input type="number" min="0" max="100"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="monto_de_credito"
                        placeholder="0-100 ">
                    </div>
                  </div>

                  {{-- Contraentrega --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="monto_de_credito"
                        class="il-gray fs-14 fw-500 align-center mb-10">Contraentrega</label>
                      <input type="number" min="0" max="100"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="monto_de_credito"
                        placeholder="0-100 ">
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

                  {{-- licencia --}}
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="licencia" class="il-gray fs-14 fw-500 align-center mb-10">Licencia</label>
                      {{-- <input type="text" name="licencia"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="licencia"
                        placeholder="Ingrese licencia"> --}}
                      <div class="dm-select ">
                        <select name="licences[]" id="licences" class="form-control select-multiple" multiple="multiple"
                          size="7">
                          @foreach($licences as $license)
                          <option value="{{ $license }}">{{ $license->nombre }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div>
                  {{-- Vendedor --}}
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="Vendedor" class="il-gray fs-14 fw-500 align-center mb-10">Vendedor</label>
                      {{-- <input type="text" name="empresa"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="empresa"
                        placeholder="55 0000 0000" required> --}}
                      <div class="dm-select-list d-flex">
                        <select name="vendedor" id="se" class="form-control  select-search">
                          <option value="Maria">Maria</option>
                          <option value="Juan">Juan</option>
                          <option value="Ana">Ana</option>
                          <option value="Pedro">Pedro</option>
                          <option value="Laura">Laura</option>
                        </select>
                      </div>
                    </div>
                  </div>

                  {{-- Tolerancia de entrega --}}
                  <div class="col-md-12">
                    <h6 class="mb-2">Tolerancia de entrega </h6>
                  </div>
                  {{-- % Minimo --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="tolerancia_minima" class="il-gray fs-14 fw-500 align-center mb-10">%
                        Minimo</label>
                      <input type="number" min="0" max="100"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="tolerancia_minima"
                        placeholder="0-100">
                    </div>
                  </div>
                  {{-- % Maxima --}}
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="tolerancia_maxima" class="il-gray fs-14 fw-500 align-center mb-10">%
                        Maxima</label>
                      <input type="number" min="0" max="100"
                        class="form-control ih-medium ip-light radius-xs b-light px-15" id="tolerancia_maxima"
                        placeholder="0-100 ">
                    </div>
                  </div>






                </div>

              </div>
            </div>
          </div>
          <!-- ends: Informacion de entrega .card -->

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
    var selectElements = document.querySelectorAll("#select-search, .kb__select, .select-search");


  });
  </script>
</div>