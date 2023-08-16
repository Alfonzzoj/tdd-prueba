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
				<h4 class="text-capitalize breadcrumb-title">Licencias - Items</h4>
				<div class="breadcrumb-action justify-content-center flex-wrap">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item">
								<a href="#">
									<i class="las la-home"></i>Catalogos
								</a>
							</li>
							{{-- TODO: traducir --}}

							<li class="breadcrumb-item" aria-current="page"><a
									href="{{ route('licences.index',['language'=>app()->getLocale()])  }}">Licencias</a></li>
							<li class="breadcrumb-item active">Items</li>
						</ol>
					</nav>
				</div>
			</div>
		</div>
		<div class="col-lg-12 mb-3">
			<a href="{{ route('licences.index',['language'=>app()->getLocale()])  }}"
				class="btn bg-#334155 btn-block">Regresar a
				listado</a>
		</div>
	</div>

	{{-- Main Content --}}
	{{-- Items --}}
	<div class="row">
		<div class="col-12 mb-30">
			<div class="support-ticket-system support-ticket-system--search">
				<div class="breadcrumb-main m-0 breadcrumb-main--table justify-content-sm-between ">
					<div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
						<div class="d-flex align-items-center ticket__title justify-content-center me-md-25 mb-md-0 mb-20">
							<h4 class="text-capitalize fw-500 breadcrumb-title">Items</h4>
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
							{{-- <div class="support-form__input-id">
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
							</div> --}}
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
							<button class="support-form__input-button">Buscar</button>
						</div>
					</div>
					<div class="support-form__search">
						<div class="support-order-search">
							<form action="/" class="support-order-search__form">
								<img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
								<input class="form-control border-0 box-shadow-none" type="search" placeholder="Buscar"
									aria-label="Search">
							</form>
						</div>
					</div>
				</div>

				<div class="tab-wrapper">

					<div class="dm-tab tab-horizontal">
						<ul class="nav nav-tabs vertical-tabs" role="tablist">

							<li class="nav-item">
								<a class="nav-link active" id="tab-tipo-etiqueta-1-tab" data-bs-toggle="tab" href="#tab-tipo-etiqueta-1"
									role="tab" aria-selected="true">Tejida</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tab-tipo-etiqueta-2-tab" data-bs-toggle="tab" href="#tab-tipo-etiqueta-2"
									role="tab" aria-selected="false">Estampada</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tab-tipo-etiqueta-3-tab" data-bs-toggle="tab" href="#tab-tipo-etiqueta-3"
									role="tab" aria-selected="false">Transfer</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tab-tipo-etiqueta-4-tab" data-bs-toggle="tab" href="#tab-tipo-etiqueta-4"
									role="tab" aria-selected="false">Impresa</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tab-tipo-etiqueta-5-tab" data-bs-toggle="tab" href="#tab-tipo-etiqueta-5"
									role="tab" aria-selected="false">Impreso</a>
							</li>



						</ul>
						<div class="tab-content">



							<div class="tab-pane fade show active" id="tab-tipo-etiqueta-1" role="tabpanel"
								aria-labelledby="tab-tipo-etiqueta-1-tab">
								1
								@include('licences.items.table')
							</div>
							<div class="tab-pane fade" id="tab-tipo-etiqueta-2" role="tabpanel"
								aria-labelledby="tab-tipo-etiqueta-2-tab">
								2
								@include('licences.items.table')

							</div>
							<div class="tab-pane fade" id="tab-tipo-etiqueta-3" role="tabpanel"
								aria-labelledby="tab-tipo-etiqueta-3-tab">
								3
								@include('licences.items.table')

							</div>
							<div class="tab-pane fade" id="tab-tipo-etiqueta-4" role="tabpanel"
								aria-labelledby="tab-tipo-etiqueta-4-tab">
								4
								@include('licences.items.table')

							</div>
							<div class="tab-pane fade" id="tab-tipo-etiqueta-5" role="tabpanel"
								aria-labelledby="tab-tipo-etiqueta-4-tab">
								5
								@include('licences.items.table')

							</div>

						</div>
					</div>

				</div>


			</div>
		</div>


	</div>

</div>
{{--
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />

<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script> --}}
@endsection
