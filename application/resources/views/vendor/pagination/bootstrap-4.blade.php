@if ($paginator->hasPages())
    <div class="pagination clearfix">
        @if ($paginator->onFirstPage())
            <a class="btn color-4 hover-9 page-left" disabled="true" href="#">prev page</a>
        @else
            <a class="btn color-4 hover-9 page-left" href="{{ $paginator->previousPageUrl() }}">prev page</a>
        @endif
        @if ($paginator->hasMorePages())
            <a class="btn color-4 hover-9 page-right" href="{{ $paginator->nextPageUrl() }}">next page</a>
        @else
            <a class="btn color-4 hover-9 page-right" href="#" disabled="true">next page</a>

        @endif
        <div class="pages">
            @foreach ($elements as $element)
                @if (is_string($element))
                    <a class="btn color-5 hover-9" href="#" disabled="">{{ $element }}</a>
                @endif
                @if (is_array($element))
                    @foreach ($element as $page => $url)

                        @if ($page == $paginator->currentPage())
                            <a class="btn color-1 hover-9" href="#">{{ $page }}</a>
                        @else
                            <a class="btn color-5 hover-9" href="{{ $url }}">{{ $page }}</a>
                        @endif

                    @endforeach
                @endif
            @endforeach
        </div>


    </div>

@endif
{{--@if ($paginator->hasPages())--}}
{{--<ul class="pagination" role="navigation">--}}
{{-- Previous Page Link --}}
{{--@if ($paginator->onFirstPage())--}}
{{--<li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">--}}
{{--<span class="page-link" aria-hidden="true">&lsaquo;</span>--}}
{{--</li>--}}
{{--@else--}}
{{--<li class="page-item">--}}
{{--<a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>--}}
{{--</li>--}}
{{--@endif--}}

{{-- Pagination Elements --}}
{{--@foreach ($elements as $element)--}}
{{-- "Three Dots" Separator --}}
{{--@if (is_string($element))--}}
{{--<li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>--}}
{{--@endif--}}

{{-- Array Of Links --}}
{{--@if (is_array($element))--}}
{{--@foreach ($element as $page => $url)--}}
{{--@if ($page == $paginator->currentPage())--}}
{{--<li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>--}}
{{--@else--}}
{{--<li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>--}}
{{--@endif--}}
{{--@endforeach--}}
{{--@endif--}}
{{--@endforeach--}}

{{-- Next Page Link --}}
{{--@if ($paginator->hasMorePages())--}}
{{--<li class="page-item">--}}
{{--<a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>--}}
{{--</li>--}}
{{--@else--}}
{{--<li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">--}}
{{--<span class="page-link" aria-hidden="true">&rsaquo;</span>--}}
{{--</li>--}}
{{--@endif--}}
{{--</ul>--}}
{{--@endif--}}
