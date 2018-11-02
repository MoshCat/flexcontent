@if ($content['quote'])
  <blockquote class="blockquote {!! $content['align'] !!}">
    {!! $content["quote"] !!}
    @if ($content["source"])
      <footer class="blockquote-footer">{!! $content['by'] !!} <cite title="Source Title">{!! $content['source'] !!}</cite></footer>
    @endif
  </blockquote>
@endif
