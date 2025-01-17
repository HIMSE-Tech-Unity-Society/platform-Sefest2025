@if ($paginator->hasPages())
    <div class="dataTable-bottom">
        <div class="dataTable-info">
            Showing {{ $paginator->firstItem() }} to {{ $paginator->lastItem() }} of {{ $paginator->total() }} entries
        </div>
        <nav class="dataTable-pagination">
            @if ($paginator->hasPages())
                <ul class="dataTable-pagination-list">
                    <!-- Previous Page Link -->
                    @if ($paginator->onFirstPage())
                        <li class="pager disable"><a class="disabled" rel="prev">‹</a></li>
                    @else
                        <li class="pager"><a class="cursor-pointer" wire:click="previousPage" rel="prev">‹</a></li>
                    @endif

                    <!-- Pagination Elements -->
                    @foreach ($paginator->links()->elements[0] as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a class="cursor-pointer" wire:click="gotoPage({{ $page }})">{{ $page }}</a></li>
                        @else
                            <li><a class="cursor-pointer" wire:click="gotoPage({{ $page }})">{{ $page }}</a></li>
                        @endif
                    @endforeach

                    <!-- Next Page Link -->
                    @if ($paginator->hasMorePages())
                        <li class="pager"><a wire:click="nextPage" class="cursor-pointer" rel="next">›</a></li>
                    @else
                        <li class="pager"><a class="disabled" rel="prev">›</a></li>
                    @endif
                </ul>
            @endif
        </nav>
    </div>
@endif
