<div class="row pt-60">
    <div class="col-lg-12 d-flex justify-content-center">
        <div class="innerpage-pagination-area">
            @if ($paginator->lastPage() > 1)
                <ul class="paginations">
                    {{-- Previous --}}
                    <li class="page-item paginations-button {{ $paginator->onFirstPage() ? 'disabled' : '' }}">
                        <a href="{{ $paginator->previousPageUrl() ?? '#' }}">
                            <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.554577 7.37568L7.67478 0.255608C7.83946 0.090796 8.0593 0 8.2937 0C8.52811 0 8.74794 0.090796 8.91262 0.255608L9.43698 0.779831C9.77818 1.12142 9.77818 1.6766 9.43698 2.01767L3.45797 7.99668L9.44361 13.9823C9.60829 14.1471 9.69922 14.3668 9.69922 14.6011C9.69922 14.8357 9.60829 15.0554 9.44361 15.2203L8.91926 15.7444C8.75445 15.9092 8.53474 16 8.30034 16C8.06593 16 7.8461 15.9092 7.68141 15.7444L0.554577 8.61782C0.389504 8.45248 0.298839 8.23174 0.299359 7.99707C0.298839 7.7615 0.389504 7.54088 0.554577 7.37568Z"
                                    fill="#111111" fill-opacity="0.25"></path>
                            </svg>
                        </a>
                    </li>

                    {{-- Page Numbers --}}
                    @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                        @if ($i == $paginator->currentPage())
                            <li class="page-item active"><a href="#">{{ $i }}</a></li>
                        @elseif (
                            $i == 1 ||
                                $i == $paginator->lastPage() ||
                                ($i >= $paginator->currentPage() - 1 && $i <= $paginator->currentPage() + 1))
                            <li class="page-item"><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                        @elseif ($i == $paginator->currentPage() - 2 || $i == $paginator->currentPage() + 2)
                            <li class="page-item"><span>...</span></li>
                        @endif
                    @endfor

                    {{-- Next --}}
                    <li class="page-item paginations-button {{ !$paginator->hasMorePages() ? 'disabled' : '' }}">
                        <a href="{{ $paginator->nextPageUrl() ?? '#' }}">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12.4454 7.37568L5.32522 0.255608C5.16054 0.090796 4.9407 0 4.7063 0C4.47189 0 4.25206 0.090796 4.08738 0.255608L3.56302 0.779831C3.22182 1.12142 3.22182 1.6766 3.56302 2.01767L9.54203 7.99668L3.55639 13.9823C3.39171 14.1471 3.30078 14.3668 3.30078 14.6011C3.30078 14.8357 3.39171 15.0554 3.55639 15.2203L4.08074 15.7444C4.24555 15.9092 4.46526 16 4.69966 16C4.93407 16 5.1539 15.9092 5.31859 15.7444L12.4454 8.61782C12.6105 8.45248 12.7012 8.23174 12.7006 7.99707C12.7012 7.7615 12.6105 7.54088 12.4454 7.37568Z"
                                    fill="#111111" fill-opacity="0.25"></path>
                            </svg>
                        </a>
                    </li>

                </ul>
            @endif
        </div>
    </div>
