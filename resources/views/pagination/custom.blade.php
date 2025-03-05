@if ($paginator->hasPages())
    <ul class="pagination justify-content-center">
        {{-- زر "السابق" --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><span class="page-link">السابق</span></li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">السابق</a>
            </li>
        @endif

        {{-- أرقام الصفحات --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- زر "التالي" --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next">التالي</a>
            </li>
        @else
            <li class="page-item disabled"><span class="page-link">التالي</span></li>
        @endif
    </ul>
@endif


<style>
    .pagination .page-link {
    color: #1c2d37;
    border-radius: 5px;
    margin: 0 5px;
    transition: all 0.3s ease-in-out;
}
.pagination .page-item.active .page-link {
    background-color: #1c2d37;
    border-color: #1c2d37;
    color: #fff;
}
.pagination .page-item .page-link:hover {
    background-color: #1c2d37;
    color: #fff;
}

</style>