@extends('frontend.layouts.master_layout')
@section('content')

<!-- Budget Section -->
<section class="page-header mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-4 fw-bold text-dark">বাজেট</h1>
                <div class="border-bottom border-white border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
                <p class="mt-2 lead text-dark">বার্ষিক ও বিভিন্ন বাজেট</p>
            </div>
        </div>
    </div>
</section>

<!-- বাজেট List -->
<section class="py-2">
    <div class="container px-5">

        <!-- Single Budget Item -->
         @foreach($budgets as $budget)
            <div class="notice-card mb-4" data-category="urgent" data-year="2024">
                <div class="notice-header urgent">
                    <div class="d-flex align-items-center">
                        <div class="notice-icon urgent me-3">
                            <i class="fas fa-coins me-2"></i>
                        </div>
                        <div class="flex-grow-1">
                            <h5 class="mb-1 fw-bold text-dark">{{ $budget->title }}</h5>
                            <div class="notice-meta">
                                <span class="text-muted">
                                    <i class="fas fa-calendar me-1"></i>
                                    @bn($budget->date)
                                </span>
                            </div>
                        </div>
                        <div class="notice-actions">
                            <a href="{{ route('budget.download', $budget->pdf_path) }}" class="btn btn-sm btn-outline-warning" title="ডাউনলোড">
                                <i class="fa-solid fa-download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!-- Pagination -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center custom-pagination">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                        <i class="fas fa-arrow-left me-1"></i> পূর্ববর্তী
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">১</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">২</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">৩</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">৪</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">৫</a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="#">
                        পরবর্তী <i class="fas fa-arrow-right ms-1"></i>
                    </a>
                </li>
            </ul>
        </nav>

    </div>
</section>

@endsection