@section('title',"Usuarios")
@section('description',"Usuarios")
@extends('layout.app')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<div class="container-fluid">
    {{-- Breadcrumb --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Usuarios</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="las la-home"></i>Control
                                </a>
                            </li>
                            {{-- TODO: traducir --}}

                            <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    {{-- Tejidas --}}
    <div class="row">
        <div class="col-12 mb-30">
            <div class="support-ticket-system support-ticket-system--search">
                <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div
                            class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Tejida</h4>
                        </div>
                    </div>
                    <div class="action-btn">
                        <a href="#" class="btn btn-primary">
                            Export
                            <i class="las la-angle-down"></i>
                        </a>
                    </div>
                </div>
                <div
                    class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
                    <div class="support-form__input">
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
                                <label>status:</label>
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
                    </div>
                    <div class="support-form__search">
                        <div class="support-order-search">
                            <form action="/" class="support-order-search__form">
                                <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
                                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search"
                                    aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
                    <div class="table-responsive">
                        <table class="table mb-0 table-borderless">
                            <thead>
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
                                        <span class="userDatatable-title">Nombre de etiqueta</span>
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
                                <tr>
                                    <td>1</td>
                                    <td class="userDatatable-content--priority">
                                        <a href="https://via.placeholder.com/640x480.png/00aacc?text=possimus" target="_blank">
                                            <img src="https://via.placeholder.com/640x480.png/00aacc?text=possimus" alt="Imagen" width="100" height="100">
                                        </a>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>Tejida</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="userDatatable-content--subject">
                                            nombre
                                        </div>
                                    </td>

                                    <td>
                                        <div class="userDatatable-content--priority">
                                           36
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            46
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
                                                    ['item'=>1,'language'=>app()->getLocale()] ) }}" class="show">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{
                                                    route('items.edit',
                                                    ['item'=>1,'language'=>app()->getLocale()] ) }}" class="edit">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                            </li>
                                            <li>


                                                <a href="{{ route('items.destroy', ['language' => app()->getLocale(), 'item' => 1]) }}"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form').submit();"  class="remove">
                                                    <i class="uil uil-trash-alt"></i>

                                                 </a>

                                                 <form id="delete-form" action="{{ route('items.destroy', ['language' => app()->getLocale(), 'item' => 1]) }}"
                                                       method="POST" style="display: none;">
                                                    @csrf
                                                    @method('DELETE')
                                                 </form>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex justify-content-end pt-30">
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
            </div>
        </div>


    </div>

</div>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
@endsection
