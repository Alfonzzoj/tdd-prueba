<div>
    <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
        <div class="table-responsive">
            <table id="myTable" class="table mb-0 table-borderless">
                <thead>
                    {{-- TODO: traducir --}}

                    <tr class="userDatatable-header">
                        <th>
                            <span class="userDatatable-title">ID</span>
                        </th>
                        <th>
                            <span class="userDatatable-title">Razon Social</span>
                        </th>
                        <th>
                            <span class="userDatatable-title">RFC</span>
                        </th>
                        <th>
                            <span class="userDatatable-title">Dirección</span>
                        </th>
                        <th>
                            <span class="userDatatable-title">Zona de entrega</span>
                        </th>

                        <th class="actions">
                            <span class="userDatatable-title">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($clients as $client)
                    <tr>
                        <td >{{ $client->id }}</td>
                        <td>
                            <div class="d-flex">
                                <div class="userDatatable-inline-title">
                                    <a href="#" class="text-dark fw-500">
                                        <h6>{{ $client->razon_social }}</h6>
                                    </a>
                                </div>
                            </div>
                        </td>

                        <td >
                            <div>
                                {{ $client->rfc }}
                            </div>
                        </td>

                        <td>
                            <div >
                                {{ \Illuminate\Support\Str::limit($client->enterprise->direccion, 50)  }} </div>
                        </td>
                        <td>
                            <div>
                                {{ $client->deliveryZone[0]->nombre_direccion??'Mexico' }}
                            </div>
                        </td>
                        <td>
                            <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">

                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#modal-items-{{ $client->id }}"
                                        class="show" title="Items">
                                        <i class="fas fa-tags"></i>
                                    </a>

                                </li>
                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#modal-estado-cuenta-{{ $client->id }}"
                                        class="show" title="Estados de cuenta ">
                                        <i class="fas fa-balance-scale"></i>
                                    </a>

                                </li>
                                <li>
                                    <a data-bs-toggle="modal" data-bs-target="#modal-pedidos-{{ $client->id }}"
                                        class="show" title="Pedidos">
                                        <i class="fas fa-clipboard-list"></i>
                                    </a>

                                </li>
                                <li>
                                    <a href="{{
                                        route('clients.show',
                                        ['client'=>$client->id,'language'=>app()->getLocale()] ) }}" class="show"
                                        title="Ver">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{
                                        route('clients.edit',
                                        ['client'=>$client->id,'language'=>app()->getLocale()] ) }}" class="edit"
                                        title="Editar">
                                        <i class="uil uil-edit"></i>
                                    </a>
                                </li>
                                <li>


                                    <a href="{{ route('clients.destroy', ['language' => app()->getLocale(), 'client' => $client->id]) }}"
                                        onclick="event.preventDefault(); document.getElementById('delete-form').submit();"
                                        class="remove" title="Eliminar">
                                        <i class="uil uil-trash-alt"></i>

                                    </a>

                                    <form id="delete-form"
                                        action="{{ route('clients.destroy', ['language' => app()->getLocale(), 'client' => $client->id]) }}"
                                        method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </li>
                            </ul>
                            {{-- Modals --}}
                            {{-- Items --}}
                            <div class="modal-basic modal fade show" id="modal-items-{{ $client->id }}" tabindex="-1"
                                role="dialog" aria-hidden="true">


                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content modal-bg-white ">
                                        <div class="modal-header">



                                            <h6 class="modal-title">Items</h6>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <img src="{{ asset('assets/img/svg/x.svg') }} " alt="x" class="svg">
                                            </button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm">Save
                                                changes</button>
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- estados de cuenta --}}
                            <div class="modal-basic modal fade show" id="modal-estado-cuenta-{{ $client->id }}"
                                tabindex="-1" role="dialog" aria-hidden="true">


                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content modal-bg-white ">
                                        <div class="modal-header">



                                            <h6 class="modal-title">Estados de cuenta </h6>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <img src="{{ asset('assets/img/svg/x.svg') }} " alt="x" class="svg">
                                            </button>
                                        </div>
                                        <div class="modal-body">
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
                                                            <th colspan="3" style="text-align:right">Total saldo
                                                                Pendiente:
                                                            </th>
                                                            <th colspan="3"><span
                                                                    id="totalSaldoPendiente2">$150.00</span>
                                                            </th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            {{-- Pedidos --}}
                            <div class="modal-basic modal fade show" id="modal-pedidos-{{ $client->id }}" tabindex="-1"
                                role="dialog" aria-hidden="true">


                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content modal-bg-white ">
                                        <div class="modal-header">



                                            <h6 class="modal-title">Pedidos</h6>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <img src="{{ asset('assets/img/svg/x.svg') }} " alt="x" class="svg">
                                            </button>
                                        </div>
                                        <div class="modal-body">
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
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary btn-sm">Save
                                                changes</button>
                                            <button type="button" class="btn btn-secondary btn-sm"
                                                data-bs-dismiss="modal">Cancel</button>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </td>
                    </tr>

                    @empty
                    <tr>
                        No info
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
        {{-- <div class="d-flex justify-content-end pt-30">
            <nav class="dm-page ">
                <ul class="dm-pagination d-flex">
                    <li class="dm-pagination__item">
                        <a href="#" class="dm-pagination__link pagination-control"><span
                                class="la la-angle-left"></span></a>
                        <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                        <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                        <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                        <a href="#" class="dm-pagination__link pagination-control"><span
                                class="page-number">...</span></a>
                        <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                        <a href="#" class="dm-pagination__link pagination-control"><span
                                class="la la-angle-right"></span></a>
                        <a href="#" class="dm-pagination__option">
                        </a>
                    </li>
                    <li class="dm-pagination__item">
                        <div class="paging-option">
                            <select name="page-number" class="page-selection">
                                <option value="20">20/page</option>
                                <option value="40">40/page</option>
                                <option value="60">60/page</option>
                            </select>
                        </div>
                    </li>
                </ul>
            </nav>
        </div> --}}
    </div>

</div>
