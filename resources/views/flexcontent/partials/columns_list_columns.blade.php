@php
$img_shape_str = ('round' === $row['image_shape'] || 'square' === $row['image_shape']) ? '_square' : '';
switch($row['layout_column_options']['column_amount']) {
  case '2':
    $column_classes = 'col-sm-6';
    $image_size     = 'one_half' . $img_shape_str;
    break;
  case '3':
    $column_classes = 'col-sm-6 col-lg-4';
    $image_size     = 'one_third' . $img_shape_str;
    break;
  case '4':
    $column_classes = 'col-sm-6 col-lg-3';
    $image_size     = 'one_fourth' . $img_shape_str;
    break;
}
@endphp
<div class="row columns_list layout-columns justify-content-center">
  @foreach ($row['list'] as $list_item)
    @php
    $image = ($list_item['image']) ? wp_get_attachment_image($list_item['image'], $image_size, '', array('class' => $row['image_shape'] . ' w-75 mx-auto mb-3')) : '';
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
    <div class="col-12 {!!$column_classes !!} mb">
      <div class="listitem">
        {!! $image !!}
        <div class="listitem-body{!! $center_text !!}">
          {!! $list_item['content']['editor'] !!}
        </div>
        <div class="listitem-footer">
          {!! $button !!}
        </div>
      </div>
    </div>
  @endforeach
</div>
