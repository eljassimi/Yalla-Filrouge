@if ($paginator->hasPages())
    <div class="flex justify-center mt-8">
        <div class="inline-flex bg-[#b9baa3]/80 rounded">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <span class="px-4 py-2 text-white opacity-50 cursor-not-allowed">
                    Previous
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="px-4 py-2 text-white hover:bg-[#3b3b3b]">
                    Previous
                </a>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span class="px-4 py-2 text-white bg-[#b9baa3]">
                                {{ $page }}
                            </span>
                        @else
                            <a href="{{ $url }}" class="px-4 py-2 text-white hover:bg-[#3b3b3b]">
                                {{ $page }}
                            </a>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="px-4 py-2 text-white hover:bg-[#3b3b3b]">
                    Next
                </a>
            @else
                <span class="px-4 py-2 text-white opacity-50 cursor-not-allowed">
                    Next
                </span>
            @endif
        </div>
    </div>
@endif
