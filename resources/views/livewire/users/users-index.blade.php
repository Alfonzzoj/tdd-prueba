<div>
    <div
    class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
    {{-- filtros --}}
    {{-- <div class="support-form__input">
        <div class="d-flex flex-wrap">
            <div class="support-form__input-id">
                <label>Id:</label>
                <div class="dm-select ">
                    <select name="select-search" class="select-search form-control ">
                        <option value="01">All</option>
                        <option value="02">Option 2</option>
                        <option value="03">Option 3</option>
                        <option value="04">Option 4</option>
                        <option value="05">Option 5</option>
                    </select>
                </div>
            </div>
            <div class="support-form__input-status">
                <label>Email:</label>
                <div class="dm-select ">
                    <select name="select-search" class="select-search form-control ">
                        <option value="01">All</option>
                        <option value="02">Option 2</option>
                        <option value="03">Option 3</option>
                        <option value="04">Option 4</option>
                        <option value="05">Option 5</option>
                    </select>
                </div>
            </div>
            <button class="support-form__input-button">search</button>
        </div>
    </div> --}}
    {{-- Buscador  --}}
    <div class="support-form__search">
        <div class="support-order-search">
            <form action="/" class="support-order-search__form">
                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                <input wire:model="search" class="form-control border-0 box-shadow-none" type="search" placeholder="Ingrese nombre o correo del usuario a buscar"
                    aria-label="Buscador">
            </form>
        </div>
    </div>
</div>
    @if ($users->count())
        <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
            <div class="table-responsive">
                <table class="table mb-0 table-borderless">
                    <thead>
                        <tr class="userDatatable-header">
                            <th>
                                <span class="userDatatable-title">ID</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">Nombre </span>
                            </th>
                            <th>
                                <span class="userDatatable-title">Email</span>
                            </th>
                            <th>
                                <span class="userDatatable-title">Role</span>
                            </th>


                            <th class="actions">
                                <span class="userDatatable-title">Actions</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>

                            <td>
                                <div class="d-flex">
                                    <div class="userDatatable-inline-title">
                                        <a href="#" class="text-dark fw-500">
                                            <h6>{{ $user->name }}</h6>
                                        </a>
                                    </div>
                                </div>
                            </td>

                            <td>
                                <div class="userDatatable-content--subject">
                                    {{ $user->email }}
                                </div>
                            </td>
                            <td>
                                <div class="userDatatable-content--subject">
                                    /
                                </div>
                            </td>

                            <td>
                                <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">

                                    <li>
                                        <a href="{{
                                            route('users.show',
                                            ['user'=>$user->id,'language'=>app()->getLocale()] ) }}" class="show">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{
                                            route('users.edit',
                                            ['user'=>$user->id,'language'=>app()->getLocale()] ) }}" class="edit">
                                            <i class="uil uil-edit"></i>
                                        </a>
                                    </li>
                                    <li>


                                        <a href="{{ route('users.destroy', ['language' => app()->getLocale(), 'user' => 1]) }}"
                                            onclick="event.preventDefault(); document.getElementById('delete-form').submit();"  class="remove">
                                            <i class="uil uil-trash-alt"></i>

                                        </a>

                                        <form id="delete-form" action="{{ route('users.destroy', ['language' => app()->getLocale(), 'user' => 1]) }}"
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
                            <td colspan="4" class="text-center">No hay usuarios registrados</td>
                        </tr>

                        @endforelse


                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-end pt-30">

                {{ $users->links()  }}
                <nav class="dm-page ">
                    <ul class="dm-pagination d-flex">
                        <li class="dm-pagination__item">
                            <a href="#" class="dm-pagination__link pagination-control"><span
                                    class="la la-angle-left"></span></a>
                            <a href="#" class="dm-pagination__link"><span class="page-number">1</span></a>
                            <a href="#" class="dm-pagination__link active"><span
                                    class="page-number">2</span></a>
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
            </div>
        </div>

    @else
    No hay usuarios registrados

    @endif



</div>
