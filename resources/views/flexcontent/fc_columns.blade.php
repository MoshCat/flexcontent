@if ($row['columns'])
  @php
  $row_classes = [];
  if (!empty($row['options'])) {
    if (in_array('no-gutters', $row['options'])) {
      array_push($row_classes, 'no-gutters');
    }
    if (in_array('v-center', $row['options'])) {
      array_push($row_classes, 'v-center');
    }
  }
  @endphp
  <div class="row {!! implode(' ', $row_classes) !!}">
    @foreach ($row['columns'] as $i2 => $columns)
      @switch ($columns['acf_fc_layout'])
        @case('heading')
          @php $el = $columns['size'] @endphp
          <div class="col-12 mt-2 text-center column-heading">
            <{!! $el !!}>{!! $columns['heading'] !!}</{!! $el !!}>
          </div>
          @break
        @case('divider')
          <div class="col-12 column-divider">
            @php $divider = ($columns['display_line']) ? '<hr>' : '<div class="w-100 mb"></div>'; @endphp
            {!! $divider !!}
          </div>
          @break
        @case('one_column_small')
          @php $col = 'col_1' @endphp
          <div class="col-12 col-md-10 col-lg-8 mx-auto">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          <div class="w-100"></div>
          @break
        @case('one_column')
          @php $col = 'col_1' @endphp
          <div class="col-12">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @break
        @case ('two_columns')
          @php $col = 'col_1' @endphp
          <div class="col-12 col-md-6">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @php $col = 'col_2' @endphp
          <div class="col-12 col-md-6">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @break
        @case ('three_columns')
          @php $col = 'col_1' @endphp
          <div class="col col-md-4">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @php $col = 'col_2' @endphp
          <div class="col col-md-4">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @php $col = 'col_3' @endphp
          <div class="col col-md-4">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @break
        @case ('left_wide')
          @php $col = 'col_1' @endphp
          <div class="col-12 col-md-8">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @php $col = 'col_2' @endphp
          <div class="col-12 col-md-4">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @break
        @case ('right_wide')
          @php $col = 'col_1' @endphp
          <div class="col-12 col-md-4">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @php $col = 'col_2' @endphp
          <div class="col-12 col-md-8">
            <div @include('flexcontent.partials.column_options')>
              @include('flexcontent.partials.column_content')
            </div>
          </div>
          @break
      @endswitch
    @endforeach
  </div>
@endif