@if ($content['button_link'] && $content['button_text'])
  @php
  $btn_text  = $content['button_text'];
  $btn_link  = $content['button_link'];
  $btn_size  = ' ' . $content['button_size'];
  $btn_color = ' ' . $content['button_color'];
  $btn_align = ' ' . $content['button_align'];
  @endphp
  <a href="{!! $btn_link['url'] !!}" target="{!! $btn_link['target'] !!}" class="mb-3 btn {!! $btn_color . $btn_size . $btn_align !!}" role="button">{!!$btn_text!!}</a>
@endif
