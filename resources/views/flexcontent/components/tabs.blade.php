@if ($content['tabs'])
  <ul class="nav nav-tabs" role="tablist">
    @foreach ($content['tabs'] as $i => $tab_item)
      <li class="nav-item">
        <a class="nav-link{!! ($i == 0) ? ' active' : '' !!}" id="tab_{!! $i2 . '_'. $col. $i !!}" data-toggle="tab" href="#tabcontent_{!! $i2 . '_'. $col. $i !!}" role="tab" aria-controls="tabcontent_{!! $i2 . '_'. $col. $i !!}" aria-selected="{!! ($i == 0) ? 'true' : 'false' !!}">
          {!! $tab_item['title'] !!}
        </a>
      </li>
    @endforeach
  </ul>
  <div class="tab-content py-3 px-2">
    @foreach ($content['tabs'] as $i => $tab_item)
      <div class="tab-pane fade{!! ($i == 0) ? ' show active' : '' !!}" id="tabcontent_{!! $i2 . '_'. $col. $i !!}" role="tabpanel" aria-labelledby="tab{!! $i2 . '_'. $col. $i !!}">
        {!! $tab_item['content'] !!}
      </div>
    @endforeach
  </div>
@endif
