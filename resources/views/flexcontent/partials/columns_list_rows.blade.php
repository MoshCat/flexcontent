@php
  $alternate = (!empty($row['layout_row_options']['options']) && in_array('alternate', $row['layout_row_options']['options'])) ? ' alternate' : '';
  if (!empty($row['layout_row_options']['options']) && in_array('lg-img', $row['layout_row_options']['options'])) {
    $img_column   = 'col-md-5';
    $txt_column   = 'col-md-7';
    $img_size     = 'one_half_square';
  } else {
    $img_column   = 'col-md-4';
    $txt_column   = 'col-md-8';
    $img_size     = 'one_third_square';
  }
@endphp
<div class="columns_list layout-rows v-center{!! $alternate . $center_text !!}">
  @foreach ($row['list'] as $list_item)
    <div class="row">
      @php
      $image = ($list_item['image']) ? wp_get_attachment_image($list_item['image'], $img_size, '', array('class' => $row['image_shape'] . ' mx-auto')) : '';
      if ($list_item['content']['button_link'] && $list_item['content']['button_text']) {
        $btn_link  = $list_item['content']['button_link'];
        $btn_text  = $list_item['content']['button_text'];
        $btn_color = ' ' . $row['buttons']['button_color'];
        $btn_size  = ' ' . $row['buttons']['button_size'];
        $btn_align = ' ' . $row['buttons']['button_align'];
        $button    = '<a href="' . $btn_link . '" class="btn' . $btn_color . $btn_size . $btn_align . '" role="button">' . $btn_text .'</a>';
      } else {
        $button = '';
      }
      @endphp
      <div class="listitem-image col-12 {!! $img_column !!}">
        {!! $image !!}
      </div>
      <div class="listitem-body col-12 {!! $txt_column !!}">
        <div class="inner">
          {!! $list_item['content']['editor'] !!}
          {!! $button !!}
        </div>
      </div>
    </div>
  @endforeach
</div>