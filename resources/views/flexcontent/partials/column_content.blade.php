@if ($columns[$col]['content'])
  @foreach ($columns[$col]['content'] as $i3 => $content)
    @switch ($content['acf_fc_layout'])
      @case ('editor')
        @include('flexcontent.components.editor')
        @break
      @case ('button')
        @include('flexcontent.components.button')
        @break
      @case ('gallery')
        @include('flexcontent.components.gallery')
        @break
      @case ('alertbox')
        @include('flexcontent.components.alertbox')
        @break
      @case ('table')
        @include('flexcontent.components.table')
        @break
      @case ('quote')
        @include('flexcontent.components.quote')
        @break
      @case ('accordion')
        @include('flexcontent.components.accordion')
        @break
      @case ('video')
        @include('flexcontent.components.video')
        @break
      @case ('tabs')
        @include('flexcontent.components.tabs')
        @break
    @endswitch
  @endforeach
@endif
