<div>

  <div
    class="support-form datatable-support-form d-flex justify-content-xxl-between justify-content-center align-items-center flex-wrap">
    {{-- filtros --}}
    <div class="support-form__input">
      <div class="d-flex flex-wrap">
        <div class="support-form__input-id">
          <label>Fecha de inicio:</label>
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
          <label>Fecha fin:</label>
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

  @if ($accountStatements->count())
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
            <th wire:click="order('pedido_folio')">
              <span class="userDatatable-title">Pedido - Folio</span>
              {{-- Sort --}}
              @if ($sort=='pedido_folio')
              @if ($direction=='asc')
              <span class="fas fa-sort-alpha-up-alt float-right mt-1"></span>
              @else
              <span class="fas fa-sort-alpha-down-alt float-right mt-1"></span>
              @endif
              @else
              <i class="fas fa-sort float-right mt-1"></i>
              @endif
            </th>
            <th wire:click="order('fecha_creacion')">
              <span class="userDatatable-title">Fecha de creacion</span>
              {{-- Sort --}}
              @if ($sort=='fecha_creacion')
              @if ($direction=='asc')
              <span class="fas fa-sort-alpha-up-alt float-right mt-1"></span>
              @else
              <span class="fas fa-sort-alpha-down-alt float-right mt-1"></span>
              @endif
              @else
              <i class="fas fa-sort float-right mt-1"></i>
              @endif
            </th>
            <th wire:click="order('fecha_entrega')">
              <span class="userDatatable-title">Fecha de entrega</span>
              {{-- Sort --}}
              @if ($sort=='fecha_entrega')
              @if ($direction=='asc')
              <span class="fas fa-sort-alpha-up-alt float-right mt-1"></span>
              @else
              <span class="fas fa-sort-alpha-down-alt float-right mt-1"></span>
              @endif
              @else
              <i class="fas fa-sort float-right mt-1"></i>
              @endif
            </th>
            <th wire:click="order('pagado')">
              <span class="userDatatable-title">Pagado</span>
              {{-- Sort --}}
              @if ($sort=='pagado')
              @if ($direction=='asc')
              <span class="fas fa-sort-alpha-up-alt float-right mt-1"></span>
              @else
              <span class="fas fa-sort-alpha-down-alt float-right mt-1"></span>
              @endif
              @else
              <i class="fas fa-sort float-right mt-1"></i>
              @endif
            </th>
            <th wire:click="order('pendiente')">
              <span class="userDatatable-title">Pendiente</span>
              {{-- Sort --}}
              @if ($sort=='pendiente')
              @if ($direction=='asc')
              <span class="fas fa-sort-alpha-up-alt float-right mt-1"></span>
              @else
              <span class="fas fa-sort-alpha-down-alt float-right mt-1"></span>
              @endif
              @else
              <i class="fas fa-sort float-right mt-1"></i>
              @endif
            </th>


            <th class="actions">
              <span class="userDatatable-title">Acciones</span>
            </th>
          </tr>
        </thead>
        <tbody>
          @forelse ($accountStatements as $accountStatement)
          <tr>
            <td>{{ $accountStatement->id }}</td>
            <td>
              <div class="d-flex">
                <div class="userDatatable-inline-title">
                  <a href="#" class="text-dark fw-500">
                    <h6> {{ $accountStatement->pedido->folio ?? 'PR23-1111' }}</h6>
                  </a>
                </div>
              </div>
            </td>

            <td>
              @date($accountStatement->fecha_creacion)
            </td>

            <td>
              @date($accountStatement->fecha_entrega)
            </td>
            <td>
              @money($accountStatement->pagado)
            </td>
            <td>
              @money($accountStatement->pendiente)
            </td>
            <td>
              <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">


                <li>
                  {{-- Items --}}
                  {{-- @include('items.partials.action-btn.modals.items',['id'=>$accountStatement->id]) --}}
                  {{-- @include('items.partials.action-btn.accountStatement-items',['id'=>$accountStatement->id]) --}}
                </li>
                <li>
                  {{-- Estados de cuenta --}}
                  {{--
                  @include('account_statements.partials.action-btn.modals.account-statements',['id'=>$accountStatement->id])
                  --}}

                  {{--
                  @include('account_statements.partials.action-btn.accountStatement-account-statements',['id'=>$accountStatement->id])
                  --}}
                </li>
                <li>
                  {{-- Pedidos --}}
                  {{-- @include('orders.partials.action-btn.accountStatement-orders',['id'=>$accountStatement->id]) --}}
                </li>

                <li>
                  {{-- Show --}}
                  {{-- @include('accountStatements.partials.action-btn.show',['id'=>$accountStatement->id]) --}}
                </li>
                <li>
                  {{-- Editar --}}
                  {{-- @include('accountStatements.partials.action-btn.edit',['id'=>$accountStatement->id]) --}}

                </li>
                <li>
                  {{-- Delete --}}
                  {{-- @include('accountStatements.partials.action-btn.delete',['id'=>$accountStatement->id]) --}}
                </li>
              </ul>



            </td>
          </tr>

          @empty
          <tr>
            No informacion de estados de cuenta
          </tr>
          @endforelse


        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-end pt-30">

      {{-- {{ $accountStatements->links() }} --}}
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
  No hay estados de cuenta disponibles

  @endif


</div>