@php
if ($content['gallery'] ) {
  $ids     = [];
  $columns = $content['gallery_columns'];
  $size    = $content['gallery_size'];
  $link    = $content['gallery_link'];
  foreach($content['gallery'] as $item) {
    array_push($ids, $item['id']);
  }
  $shortcode = '[gallery columns="' . $columns . '" size="' . $size . '" link="' . $link . '" ids="' . implode(',', $ids) . '"]';
  echo do_shortcode($shortcode);
}
@endphp
