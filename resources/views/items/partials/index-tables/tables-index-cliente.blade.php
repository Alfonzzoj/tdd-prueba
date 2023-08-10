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
                        <span class="userDatatable-title">Imagen</span>
                    </th>
                    <th>
                        <span class="userDatatable-title">Tipo</span>
                    </th>
                    <th>
                        <span class="userDatatable-title">Nombre etiqueta</span>
                    </th>
                    <th>
                        <span class="userDatatable-title">Largo</span>
                    </th>
                    <th>
                        <span class="userDatatable-title">Ancho</span>
                    </th>

                    <th class="actions">
                        <span class="userDatatable-title">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td class="userDatatable-content--priority">
                        <a href="{{ $item->image_path }}" target="_blank">
                            <img src="{{ $item->image_path }}" alt="Imagen" width="100" height="100">
                        </a>
                    </td>
                    <td>
                        <div class="d-flex">
                            <div class="userDatatable-inline-title">
                                <a href="#" class="text-dark fw-500">
                                    <h6>{{ $item->tipo_etiqueta }}</h6>
                                </a>
                            </div>
                        </div>
                    </td>

                    <td>
                        <div class="userDatatable-content--subject">
                            {{ $item->nombre_etiqueta }}
                        </div>
                    </td>

                    <td>
                        <div class="userDatatable-content--priority">
                            {{ $item->largo }}
                        </div>
                    </td>
                    <td>
                        <div class="userDatatable-content--priority">
                            {{ $item->ancho }}
                        </div>
                    </td>
                    <td>
                        <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                            {{-- <li>
                                <a href="#" class="view">
                                    <i class="uil uil-setting"></i>
                                </a>
                            </li> --}}
                            <li>
                                <a href="{{
                                    route('items.show',
                                    ['item'=>$item->id,'language'=>app()->getLocale()] ) }}" class="show">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{
                                    route('items.edit',
                                    ['item'=>$item->id,'language'=>app()->getLocale()] ) }}" class="edit">
                                    <i class="uil uil-edit"></i>
                                </a>
                            </li>
                            <li>


                                <a href="{{ route('items.destroy', ['language' => app()->getLocale(), 'item' => $item->id]) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete-form').submit();"  class="remove">
                                    <i class="uil uil-trash-alt"></i>

                                 </a>

                                 <form id="delete-form" action="{{ route('items.destroy', ['language' => app()->getLocale(), 'item' => $item->id]) }}"
                                       method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                 </form>
                            </li>
                        </ul>
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
                    <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-left"></span></a>
                    <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                    <a href="#" class="dm-pagination__link active"><span class="page-number">2</span></a>
                    <a href="#" class="dm-pagination__link"><span class="page-number">3</span></a>
                    <a href="#" class="dm-pagination__link pagination-control"><span class="page-number">...</span></a>
                    <a href="#" class="dm-pagination__link"><span class="page-number">12</span></a>
                    <a href="#" class="dm-pagination__link pagination-control"><span class="la la-angle-right"></span></a>
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
