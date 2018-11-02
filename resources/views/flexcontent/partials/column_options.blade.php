@php
$inner_classes = ['inner'];
$bg_style      = '';

if ($columns[$col]['options']) {
  if (in_array('bg-img', $columns[$col]['options']) && $columns[$col]['bg_image']['image']) {
    $bg_style = ' style="background-image: url(' . wp_get_attachment_image_url($columns[$col]['bg_image']['image'], 'large') . ')"';
    array_push($inner_classes, 'bg-img');
    if ('center' !== $columns[$col]['bg_image']['position']) {
      array_push($inner_classes, 'bg-' . $columns[$col]['bg_image']['position']);
    }
    if ($columns[$col]['bg_image']['repeat']) {
      array_push($inner_classes, 'bg-repeat');
    }
  }
}
if ('none' !== $columns[$col]['bg_color']) {
  array_push($inner_classes, $columns[$col]['bg_color']);
}
echo 'class="' . implode(' ', $inner_classes) . '"' . $bg_style;
@endphp
