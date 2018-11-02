@if ($row['list'])
  @php
  $center_text = (!empty($row['options']) && in_array('text-center', $row['options'])) ? ' text-center' : '';
  @endphp
  @if ($row['layout'] === 'columns')
    @include('flexcontent.partials.columns_list_columns')
  @elseif (($row['layout'] === 'rows'))
    @include('flexcontent.partials.columns_list_rows')
  @endif
@endif