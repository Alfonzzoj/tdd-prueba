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
    {{-- Buscador --}}
    <div class="support-form__search">
      <div class="support-order-search">
        <form action="/" class="support-order-search__form">
          <img src="{{ asset('assets/img/svg/search.svg') }}" alt="search" class="svg">
          <input wire:model="search" class="form-control border-0 box-shadow-none" type="search"
            placeholder="Ingrese nombre o correo del usuario a buscar" aria-label="Buscador">
        </form>
      </div>
    </div>
  </div>

  @if ($clients->count())
  <div class="userDatatable userDatatable--ticket userDatatable--ticket--2 mt-1">
    <div class="table-responsive">
      <table class="table mb-0 table-borderless">
        <thead>
          <tr class="userDatatable-header ">
            <th class="w-24" wire:click="order('id')">
              <span class="userDatatable-title">ID</span>
              {{-- Sort --}}
              @if ($sort=='id')
              @if ($direction=='asc')
              <span class="fas fa-sort-alpha-up-alt float-right mt-1"></span>
              @else
              <span class="fas fa-sort-alpha-down-alt float-right mt-1"></span>
              @endif
              @else
              <i class="fas fa-sort float-right mt-1"></i>
              @endif
            </th>
            <th wire:click="order('razon_social')">
              <span class="userDatatable-title">Razon Social</span>
              {{-- Sort --}}
              @if ($sort=='razon_social')
              @if ($direction=='asc')
              <span class="fas fa-sort-alpha-up-alt float-right mt-1"></span>
              @else
              <span class="fas fa-sort-alpha-down-alt float-right mt-1"></span>
              @endif
              @else
              <i class="fas fa-sort float-right mt-1"></i>
              @endif
            </th>
            <th wire:click="order('rfc')">
              <span class="userDatatable-title">RFC</span>
              {{-- Sort --}}
              @if ($sort=='rfc')
              @if ($direction=='asc')
              <span class="fas fa-sort-alpha-up-alt float-right mt-1"></span>
              @else
              <span class="fas fa-sort-alpha-down-alt float-right mt-1"></span>
              @endif
              @else
              <i class="fas fa-sort float-right mt-1"></i>
              @endif
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
            <td>{{ $client->id }}</td>
            <td>
              <div class="d-flex">
                <div class="userDatatable-inline-title">
                  <a href="#" class="text-dark fw-500">
                    <h6>{{ $client->razon_social }}</h6>
                  </a>
                </div>
              </div>
            </td>

            <td>
              <div>
                {{ $client->rfc }}
              </div>
            </td>

            <td>
              <div>
                {{ \Illuminate\Support\Str::limit($client->enterprise->direccion, 50) }} </div>
            </td>
            <td>
              <div>
                {{ $client->deliveryZone[0]->nombre_direccion??'Mexico' }}
              </div>
            </td>
            <td>
              <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">


                <li>
                  {{-- Items --}}
                  {{-- @include('items.partials.action-btn.modals.items',['id'=>$client->id]) --}}
                  @include('items.partials.action-btn.client-items',['id'=>$client->id])
                </li>
                <li>
                  {{-- Estados de cuenta --}}
                  {{-- @include('account_statements.partials.action-btn.modals.account-statements',['id'=>$client->id])
                  --}}

                  @include('account_statements.partials.action-btn.client-account-statements',['id'=>$client->id])
                </li>
                <li>
                  {{-- Pedidos --}}
                  {{-- @include('orders.partials.action-btn.modals.orders',['id'=>$client->id]) --}}
                  @include('orders.partials.action-btn.client-orders',['id'=>$client->id])
                </li>

                <li>
                  {{-- Show --}}
                  @include('clients.partials.action-btn.show',['id'=>$client->id])
                </li>
                <li>
                  {{-- Editar --}}
                  @include('clients.partials.action-btn.edit',['id'=>$client->id])

                </li>
                <li>
                  {{-- Delete --}}
                  @include('clients.partials.action-btn.delete',['id'=>$client->id])
                </li>
              </ul>



            </td>
          </tr>

          @empty
          <tr>
            No informacion de clientes
          </tr>
          @endforelse


        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-end pt-30">

      {{ $clients->links() }}
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
    </div>
  </div>

  @else
  No hay usuarios registrados

  @endif



</div>