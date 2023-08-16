<a data-bs-toggle="modal" data-bs-target="#modal-items-{{ $id }}" class="show" title="Items">
	<i class="fas fa-tags"></i>
</a>


{{-- Items modal;--}}

<div class="modal-basic modal fade show" id="modal-items-{{ $id }}" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-xl" role="document">
		<div class="modal-content modal-bg-white ">
			<div class="modal-header">



				<h6 class="modal-title">Items</h6>
				<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
					<img src="{{ asset('assets/img/svg/x.svg') }} " alt="x" class="svg">
				</button>
			</div>
			<div class="modal-body">
				<div class="tab-wrapper">

					<div class="dm-tab tab-horizontal">
						<ul class="nav nav-tabs vertical-tabs" role="tablist">

							<li class="nav-item">
								<a class="nav-link active" id="tab-v-1-tab" data-bs-toggle="tab" href="#tab-v-1" role="tab" aria-selected="true">Cliente</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="tab-v-2-tab" data-bs-toggle="tab" href="#tab-v-2" role="tab" aria-selected="false">Licencia</a>
							</li>
						</ul>
						<div class="tab-content">


							{{-- Tab CLIENTE --}}
							<div class="tab-pane fade show active" id="tab-v-1" role="tabpanel" aria-labelledby="tab-v-1-tab">

								<div class="col">
									<table id="dt-pedidos" class="table table-bordered table-striped">
										<thead class="thead-primary">
											<tr>
												<th scope="col">id</th>
												<th scope="col">Tipo Cliente</th>
												<th scope="col">Tipo Etiqueta</th>
												<th scope="col">Nombre de la etiqueta</th>
												<th scope="col">ACCIONES</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Cliente</td>
												<td>Tejida</td>
												<td>Clave 1</td>
												<td>
													<ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-center items-center">

														<li>
															@include('items.partials.action-btn.generate-order')
														</li>
														<li>
															@include('items.partials.action-btn.show')
														</li>


														<li>
															@include('items.partials.action-btn.edit')

														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Cliente</td>
												<td>Impresa</td>
												<td>Clave 2</td>
												<td>
													<ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-center items-center">

														<li>
															@include('items.partials.action-btn.generate-order')
														</li>
														<li>
															@include('items.partials.action-btn.show')
														</li>


														<li>
															@include('items.partials.action-btn.edit')

														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Cliente</td>
												<td>Estampada</td>
												<td>clave 3</td>
												<td>
													<ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-center items-center">

														<li>
															@include('items.partials.action-btn.generate-order')
														</li>
														<li>
															@include('items.partials.action-btn.show')
														</li>


														<li>
															@include('items.partials.action-btn.edit')

														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							{{-- Tab LICENCIA --}}
							<div class="tab-pane fade" id="tab-v-2" role="tabpanel" aria-labelledby="tab-v-2-tab">
								<div class="col">
									<table id="dt-pedidos" class="table table-bordered table-striped">
										<thead class="thead-primary">
											<tr>
												<th scope="col">#</th>
												<th scope="col">Tipo Cliente</th>
												<th scope="col">Tipo Etiqueta</th>
												<th scope="col">Nombre de la etiqueta</th>
												<th scope="col">ACCIONES</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Licencia</td>
												<td>Tejida</td>
												<td>Clave 1</td>
												<td>
													<ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-center items-center">

														<li>
															@include('items.partials.action-btn.generate-order')
														</li>
														<li>
															@include('items.partials.action-btn.show')
														</li>


														<li>
															@include('items.partials.action-btn.edit')

														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Licencia</td>
												<td>Impresa</td>
												<td>Clave 2</td>
												<td>
													<ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-center items-center">

														<li>
															@include('items.partials.action-btn.generate-order')
														</li>
														<li>
															@include('items.partials.action-btn.show')
														</li>


														<li>
															@include('items.partials.action-btn.edit')

														</li>
													</ul>
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Licencia</td>
												<td>Estampada</td>
												<td>clave 3</td>
												<td>
													<ul class="orderDatatable_actions mb-0 d-flex flex-wrap justify-center items-center">
														<li>
															@include('items.partials.action-btn.generate-order')
														</li>
														<li>
															@include('items.partials.action-btn.show')
														</li>
														<li>
															@include('items.partials.action-btn.edit')
														</li>
													</ul>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

						</div>

					</div>
				</div>
				<div class="modal-footer">

					<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>


	</div>
</div>
