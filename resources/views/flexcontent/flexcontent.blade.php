@php
$rows = get_field('fc');
@endphp
@if ($rows)
  @foreach ($rows as $i1 => $row)
    @php 
    $wrapper_classes   = [];
    $container_classes = [(!empty($row['container_width'])) ? $row['container_width'] : ''];
    $bg_style          = '';
    if ('none' !== $row['bg_color']) {
      array_push($wrapper_classes, $row['bg_color']);
    }
    if (!empty($row['options'])) {
      if (in_array('bg-img', $row['options']) && $row['bg_image']['image']) {
        $bg_style = ' style="background-image: url(' . wp_get_attachment_image_url($row['bg_image']['image'], 'large') . ')"';
        array_push($wrapper_classes, 'bg-img');
        if ('center' !== $row['bg_image']['position']) {
          array_push($wrapper_classes, 'bg-' . $row['bg_image']['position']);
        }
        if ($row['bg_image']['repeat']) {
          array_push($wrapper_classes, 'bg-repeat');
        }
      }
      if (in_array('mb', $row['options']) && $wrapper_classes) {
        array_push($wrapper_classes, 'mb');
      } elseif (in_array('mb', $row['options'])) {
        array_push($container_classes, 'mb');
      }
    }
    @endphp
    @if ($wrapper_classes)
      <div class="{!! implode(' ', $wrapper_classes) !!}"{!! $bg_style !!}>
    @endif
    @if ($row['acf_fc_layout'])
      <section class="{!! implode(' ', $container_classes) !!}">
        @switch ($row['acf_fc_layout'])
          @case('columns')
            @include('flexcontent.fc_columns')
            @break
          @case('columns_list')
            @include('flexcontent.fc_columns_list')
            @break
          @case('cta')
            @include('flexcontent.fc_cta')
            @break
        @endswitch
      </section>
    @endif
    @if ($wrapper_classes)
      </div>
    @endif
  @endforeach
@endif
