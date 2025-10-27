@if ($paginator->hasPages())
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center custom-pagination">

            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <a class="page-link" href="#"><i class="fas fa-arrow-left me-1"></i> পূর্ববর্তী</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}"><i class="fas fa-arrow-left me-1"></i> পূর্ববর্তী</a>
                </li>
            @endif

            @php
                $currentPage = $paginator->currentPage();
                $lastPage = $paginator->lastPage();
            @endphp

            {{-- প্রথম পেজ --}}
            <li class="page-item {{ $currentPage == 1 ? 'active' : '' }}">
                <a class="page-link" href="{{ $paginator->url(1) }}">1</a>
            </li>

            {{-- ডটস (যদি current পেজ মাঝখানে থাকে) --}}
            @if ($currentPage > 3)
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            @endif

            {{-- বর্তমান পেজ --}}
            @if ($currentPage > 1 && $currentPage < $lastPage)
                <li class="page-item active"><a class="page-link" href="#">{{ $currentPage }}</a></li>
            @endif

            {{-- ডটস (শেষের দিকে থাকলে) --}}
            @if ($currentPage < $lastPage - 2)
                <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            @endif

            {{-- শেষ পেজ --}}
            @if ($lastPage > 1)
                <li class="page-item {{ $currentPage == $lastPage ? 'active' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($lastPage) }}">{{ $lastPage }}</a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">পরবর্তী <i class="fas fa-arrow-right ms-1"></i></a>
                </li>
            @else
                <li class="page-item disabled">
                    <a class="page-link" href="#">পরবর্তী <i class="fas fa-arrow-right ms-1"></i></a>
                </li>
            @endif

        </ul>
    </nav>
@endif