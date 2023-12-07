<nav>
    <ul class="pagination pagination-style-one justify-content-center pt-80">
        @if ($paginator->onFirstPage())
            <li class="page-item page-arrow" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <a class="page-link"><i
                    class="bi bi-chevron-double-left"></i></a>
            </li>
        @else
            <li class="page-item page-arrow">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                    <i class="bi bi-chevron-double-left"></i>
                </a>
            </li>
        @endif
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true"><a>{{ $element }}</a></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><a class="page-link">0{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">0{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="page-item page-arrow">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <i
                                    class="bi bi-chevron-double-right"></i>
                    </a>
                </li>
            @else
                <li class="page-item page-arrow" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <a class="page-link" ><i
                        class="bi bi-chevron-double-right"></i></a>
                </li>
            @endif
    </ul>
</nav>
