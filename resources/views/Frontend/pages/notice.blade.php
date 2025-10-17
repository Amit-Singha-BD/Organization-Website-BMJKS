@extends('frontend.layouts.master_layout')
@section('content') 
   <!-- Page Header -->
    <section class="page-header mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4 fw-bold ">নোটিশ </h1>
					<div class="border-bottom border-white border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
                    <p class="mt-2 lead">নোটিশ, প্রবিধান এবং গুরুত্বপূর্ণ তথ্য</p>
                </div>
            </div>
        </div>
    </section>

    <div class="container mb-5">
        <!-- নোটিশ ট্যাব -->
        <div class="tab-pane fade show active" id="notice" role="tabpanel" aria-labelledby="notice-tab">
            <!-- Search and Filter Section -->
            <section class="py-2 bg-light rounded mb-3">
                <div class="container">
                    <div class="row g-2 d-flex justify-content-around align-items-center">
                        <div class="col-lg-4">
                            <form action="{{ route('frontend.notice') }}" method="GET" >
                                <div class="input-group input-group-sm">
                                    <input type="text" name="title" class="form-control form-control-sm" 
                                        placeholder="নোটিশের শিরোনাম লিখে অনুসন্ধান করুন..." 
                                        value="{{ request('title') }}" required>
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>		
                        </div>

                        <div class="col-12 col-lg-6 bg-light border border-2 p-1 rounded">
                            <form class="row g-1 align-items-center" action="{{ route('frontend.notice') }}" method="get">
                                <!-- Date Range -->
                                <div class="col-12 col-md">
                                    <div class="row row-cols-3 g-1 align-items-center text-center">
                                        <!-- From Date -->
                                        <div class="col">
                                            <input class="form-control form-control-sm" name="from_date" type="date" value="{{ request('from_date') }}" required>
                                        </div>
                                        <!-- Label -->
                                        <div class="col d-flex align-items-center justify-content-center fw-semibold small">
                                            থেকে
                                        </div>
                                        <!-- To Date -->
                                        <div class="col">
                                            <input class="form-control form-control-sm" name="to_date" type="date" value="{{ request('to_date') }}" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Filter Button -->
                                <div class="col-12 col-md-auto">
                                    <button class="btn btn-outline-secondary btn-sm w-100" type="submit">
                                        <i class="fas fa-filter me-1"></i> ফিল্টার
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>                
            <!-- Notice List -->
            <section class="py-3">
                <div class="container">
                    <!-- Urgent Notice -->
                     @forelse($notices as $notice)
                    <div class="notice-card mb-4" data-category="urgent" data-year="2024">
                        <div class="notice-header " data-bs-toggle="modal" data-bs-target="#noticeModal{{ $notice->id }}">
                            <div class="d-flex align-items-center">
                                <div class="notice-icon me-3">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                                <div class="flex-grow-1 title-date-container">
                                    <h5 class=" notice-title" >{{$notice->title}}</h5>
                                    <div class="notice-date">
                                        <span class="text-muted">
                                            <i class="fas fa-calendar me-1"></i>{{$notice->date}}
                                        </span>
                                    </div>
                                </div>
                                <div class="notice-actions">
                                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#noticeModal{{ $notice->id }}" title="view">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="notice-body">
                            <p class="mt-1">{{$notice->description}}</p>
                        </div>
                    </div>
                     <!-- Modal -->
                    <div class="modal fade" id="noticeModal{{ $notice->id }}" tabindex="-1" aria-labelledby="noticeModalLabel{{ $notice->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content border-0 shadow">
                                <div class="modal-header bg-primary text-white">
                                    <h5 class="modal-title" id="noticeModalLabel{{ $notice->id }}">
                                        <i class="fas fa-bullhorn me-2"></i> {{ $notice->title }}
                                    </h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p class="mb-2 text-muted">
                                        <i class="fas fa-calendar-alt me-2"></i>{{ $notice->date }}
                                    </p>
                                    <hr>
                                    <div class="notice-description">
                                        {!! nl2br(e($notice->description)) !!}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        বন্ধ করুন
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="d-flex justify-content-center align-items-center" style="min-height:150px;">
                        <div class="text-center">
                            <i class="bi bi-info-circle text-success fs-3 mb-2"></i>
                            <h6 class="text-muted mb-0">কোনো নোটিশ পাওয়া যায়নি</h6>
                        </div>
                    </div>

                    @endforelse

                    <!-- পেজিনেশন -->
                    <!-- <nav aria-label="Page navigation">
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
                    </nav> -->


                    <div class="Page navigation">
                        <div class=" pagination justify-content-center custom-pagination">
                            <div>
                                মোট {{ $notices->total() }} টি রেকর্ডের মধ্যে 
                                {{ $notices->firstItem() }} - {{ $notices->lastItem() }} দেখানো হচ্ছে
                            </div>
                            <div>
                               {{ $notices->links() }}
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection