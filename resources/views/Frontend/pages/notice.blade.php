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
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control form-control-sm" placeholder="অনুসন্ধান..." aria-label="Search">
                                <button class="btn btn-primary btn-sm" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>		
                        </div>

                        <div class="col-12 col-lg-6 bg-light border border-2 p-1 rounded">
                            <form class="row g-1 align-items-center" action="" method="get">
                                <!-- Date Range -->
                                <div class="col-12 col-md">
                                    <div class="row row-cols-3 g-1 align-items-center text-center">
                                        <!-- From Date -->
                                        <div class="col">
                                            <input class="form-control form-control-sm" type="date">
                                        </div>
                                        <!-- Label -->
                                        <div class="col d-flex align-items-center justify-content-center fw-semibold small">
                                            থেকে
                                        </div>
                                        <!-- To Date -->
                                        <div class="col">
                                            <input class="form-control form-control-sm" type="date">
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
                    <div class="notice-card mb-4" data-category="urgent" data-year="2024">
                        <div class="notice-header " data-bs-toggle="modal" data-bs-target="#myModal">
                            <div class="d-flex align-items-center">
                                <div class="notice-icon me-3">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                                <div class="flex-grow-1 title-date-container">
                                    <h5 class=" notice-title" > আমাকে আমার মতো থাকতে দাও তকাদকিতাহকত াুদিাতকুদিাকহাুিকাতকদতকদকুাি জরুরি সভার নোটিশ</h5>
                                    <div class="notice-date">
                                        <span class="text-muted">
                                            <i class="fas fa-calendar me-1"></i>১৫ মার্চ, ২০২৪
                                        </span>
                                    </div>
                                </div>
                                <div class="notice-actions">
                                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#myModal" title="view">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="notice-body">
                            <p class="mt-1">আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                            আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                            আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                            আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                            </p>
                        </div>
                    </div>

                    <div class="notice-card mb-4" data-category="urgent" data-year="2024">
                        <div class="notice-header " data-bs-toggle="modal" data-bs-target="#myModal">
                            <div class="d-flex align-items-center">
                                <div class="notice-icon me-3">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                                <div class="flex-grow-1 title-date-container">
                                    <h5 class=" notice-title" > আমাকে আমার মতো থাকতে দাও তকাদকিতাহকত াুদিাতকুদিাকহাুিকাতকদতকদকুাি জরুরি সভার নোটিশ</h5>
                                    <div class="notice-date">
                                        <span class="text-muted">
                                            <i class="fas fa-calendar me-1"></i>১৫ মার্চ, ২০২৪
                                        </span>
                                    </div>
                                </div>
                                <div class="notice-actions">
                                    <button class="btn btn-sm btn-outline-warning" data-bs-toggle="modal" data-bs-target="#myModal" title="view">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="notice-body">
                            <p class="mt-1">আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।</p>
                        </div>
                    </div>
                    
                    
    
                    <!-- পেজিনেশন -->
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
        </div>
    </div>
@endsection