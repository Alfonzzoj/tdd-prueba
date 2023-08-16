<a href="{{
        route('items.show',
        ['item'=>$item->id??1,'language'=>app()->getLocale(),'tipo'=>$tipo??'Tejida'] ) }}" class="show">
  <i class="fas fa-eye" title="Ver item"></i>
</a>