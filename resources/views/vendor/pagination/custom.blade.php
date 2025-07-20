@if ($paginator->hasPages())
    <nav class="pagination" aria-label="Pagination navigation">
        {{-- Previous Page --}}
        @if ($paginator->onFirstPage())
            <button aria-label="Previous page" id="prevBtn" disabled style="opacity: 0.5;">PREV</button>
        @else
            <button aria-label="Previous page" id="prevBtn" onclick="location.href='{{ $paginator->previousPageUrl() }}'">PREV</button>
        @endif

        {{-- Page Numbers --}}
        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="page-number" style="font-weight: bold;">{{ str_pad($page, 2, '0', STR_PAD_LEFT) }}</span>
                    @else
                        <span class="page-number" onclick="location.href='{{ $url }}'" style="cursor: pointer;">
                            {{ str_pad($page, 2, '0', STR_PAD_LEFT) }}
                        </span>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page --}}
        @if ($paginator->hasMorePages())
            <button aria-label="Next page" id="nextBtn" onclick="location.href='{{ $paginator->nextPageUrl() }}'">NEXT</button>
        @else
            <button aria-label="Next page" id="nextBtn" disabled style="opacity: 0.5;">NEXT</button>
        @endif
    </nav>
@endif
