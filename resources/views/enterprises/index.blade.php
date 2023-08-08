@section('title',$title)
@section('description',$description)
@extends('layout.app')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">

<div class="container-fluid">
    {{-- Breadcrumb --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">Empresas</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="las la-home"></i>Catalogos
                                </a>
                            </li>
                                                        {{-- TODO: traducir --}}

                            <li class="breadcrumb-item active" aria-current="page">Empresas</li>
                            {{-- <li class="breadcrumb-item"><a href="#">Apps</a></li> --}}
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    {{-- Main Content --}}
    <div class="row">
        <div class="col-12 mb-30">
            <div class="support-ticket-system support-ticket-system--search">
                <div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
                    <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                        <div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
                            {{-- TODO: traducir --}}
                            <h4 class="text-capitalize fw-500 breadcrumb-title">Informacion de empresas registrados</h4>
                        </div>
                    </div>
                    <div class="action-btn">
                        <a href="{{ route('enterprises.create',app()->getLocale()) }}" class="btn btn-primary">
                            Nuevo
                        </a>

                        {{-- <a href="#" class="btn btn-primary">
                            Export
                            <i class="las la-angle-down"></i>
                        </a> --}}
                    </div>
                </div>
                {{-- <div class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
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
                                <input class="form-control border-0 box-shadow-none" type="search" placeholder="Search" aria-label="Search">
                            </form>
                        </div>
                    </div>
                </div> --}}
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
                                @forelse ($enterprises as $enterprise)
                                <tr>
                                    <td>{{ $enterprise->id }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <div class="userDatatable-inline-title">
                                                <a href="#" class="text-dark fw-500">
                                                    <h6>{{ $enterprise->razon_social }}</h6>
                                                </a>
                                            </div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="userDatatable-content--subject">
                                            {{ $enterprise->rfc }}
                                        </div>
                                    </td>

                                    <td>
                                        <div class="userDatatable-content--priority">
                                            {{ $enterprise->direccion }}
                                        </div>
                                    </td>
                                    <td>
                                        <div class="userDatatable-content--priority">
                                            {{ $enterprise->deliveryZone[0]->nombre_direccion??'Mexico' }}
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
                                                    route('enterprises.show',
                                                    ['enterprise'=>$enterprise->id,'language'=>app()->getLocale()] ) }}" class="show">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{
                                                    route('enterprises.edit',
                                                    ['enterprise'=>$enterprise->id,'language'=>app()->getLocale()] ) }}" class="edit">
                                                    <i class="uil uil-edit"></i>
                                                </a>
                                            </li>
                                            <li>


                                                <a href="{{ route('enterprises.destroy', ['language' => app()->getLocale(), 'enterprise' => $enterprise->id]) }}"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form').submit();"  class="remove">
                                                    <i class="uil uil-trash-alt"></i>

                                                 </a>

                                                 <form id="delete-form" action="{{ route('enterprises.destroy', ['language' => app()->getLocale(), 'enterprise' => $enterprise->id]) }}"
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
