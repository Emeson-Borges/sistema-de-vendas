@if ($paginator->hasMorePages())
<ul class="pagination">
  {{--Previous page link--}}
  @if ($paginator->onFirstPage())
     <li class="disabled"><li class="material-icons">chevron-left</i></li>   
  @else
     <li class="waves-effect"><a href="{{ $paginator->previousPageUrl() }}"><i class="material-incons"></i></a></li>   
  @endif

  {{-- Pagination Elements --}}
  @foreach ($elements as $element)
     {{-- "Three Dots" Separator --}}
     @if (is_string($element))
        <li class="disabled">{{ $element }}</li>
        @endif
        {{-- Array Of Links --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <li class="active">
                      <a>{{ $page }}</a>
                    </li>
                @else
                    <li class="waves-effect"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                @endif
            @endforeach
        @endif
    @endforeach
    
    {{-- Next Page Link --}}
    @if ($paginator->hasMorePages())
        <li class="waves-effect"><a href="{{ $paginator->nextPageUrl() }}"><i class="material-icons"></i></a></li>
    @else
        <li class="disabled"><a href="{{ $paginator->nestPageUrl() }}"><i class="material-icons"></i></a></li>
    @endif
  
</ul>
@endif