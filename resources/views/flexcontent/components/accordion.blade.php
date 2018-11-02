@if ($content['accordion'])
  <div id="accordion_{!! $i2 . '_'. $col !!}" class="accordion mb-4">
  @foreach ($content['accordion'] as $i => $accordion_item)
    <div class="card accordion_item">
      <div class="card-header">
        <h5 id="heading_{!! $i2 . '_' . $col . $i !!}" class="mb-0">
          <a href="javascript:void(0)" class="d-block p-3" data-toggle="collapse" data-target="#collapse_{!! $i2 . '_' . $col . $i !!}" aria-expanded="{!! ($i == 0) ? 'true' : 'false' !!}" aria-controls="collapse_{!! $i2 . '_' . $col . $i !!}">
            {!! $accordion_item['title'] !!}
          </a>
        </h5>
      </div>
      <div id="collapse_{!! $i2 . '_' . $col . $i !!}" class="collapse{!! ($i == 0) ? ' show' : '' !!}" aria-labelledby="heading_{!! $i2 . '_' . $col .$i !!}" data-parent="#accordion_{!! $i2 . '_' . $col !!}">
        <div class="inner card-body">
          {!! $accordion_item['content'] !!}
        </div>
      </div>
    </div>
  @endforeach
  </div>
@endif
