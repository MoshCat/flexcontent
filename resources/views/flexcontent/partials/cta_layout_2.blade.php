@php
  $bg_style = ($row['image']) ? ' style="background-image: url(' . $row['image']['sizes']['large'] . ');"' : '';
@endphp
<div class="row cta cta_2">
  <div class="col-12 col-md-10 col-8-xl mx-auto">
    <div class="overlay-wrapper rounded">
      <div class="inner"{!! $bg_style !!}>
        {!! $row['content']['editor'] !!}
        @if ($row['content']['button_text'] && $row['content']['button_link'])
          <a href="{!! $content['button_link']['url'] !!}" target="{!! $content['button_link']['target'] !!}" class="btn btn-primary btn-lg" role="button">
            {!! $row['content']['button_text'] !!}
          </a>
        @endif
      </div>
    </div>
  </div>
</div>
