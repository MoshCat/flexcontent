@php
  $content = $row['content'];
@endphp
@if ('layout-1' === $row['layout'])
  @include('flexcontent.partials.cta_layout_1')
@else
  @include('flexcontent.partials.cta_layout_2')
@endif
