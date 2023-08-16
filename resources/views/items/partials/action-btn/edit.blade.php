<a href="{{
    route('items.edit',
    ['item'=>$item->id??0,'language'=>app()->getLocale(),'tipo'=>$tipo??'Sin definir'] ) }}" class="edit">
    <i class="uil uil-edit" title="Editar"></i>
</a>