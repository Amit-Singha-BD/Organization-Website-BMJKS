@extends('frontend.layouts.master_layout')
@section('content') 
      <!-- Page Header -->
        <section class="page-header mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="display-4 fw-bold text-dark">নোটিশ </h1>
                        <div class="border-bottom border-white border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
                        <p class="mt-2 lead text-dark">নোটিশ, প্রবিধান এবং গুরুত্বপূর্ণ তথ্য</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mb-5">
            <!-- নোটিশ ট্যাব -->
            <div class="tab-pane fade show active" id="notice" role="tabpanel" aria-labelledby="notice-tab">
                <!-- Search and Filter Section -->
                <section class="py-4 bg-light rounded mb-4">
                    <div class="container">
                        <div class="row g-3 d-flex justify-content-around align-items-center">
                            <div class="col-lg-4">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="অনুসন্ধান..." aria-label="Search">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>		
                            </div>

                            <div class="col-12 col-lg-6  bg-light border border-3 p-2">
                                <form class="row g-2 align-items-center" action="" method="get">
                                    <div class="col-12 col-sm-5 col-md-4">
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="col-12 col-sm-auto text-center">
                                        <p class="m-0">থেকে</p>
                                    </div>
                                    <div class="col-12 col-sm-5 col-md-4">
                                        <input class="form-control" type="date">
                                    </div>
                                    <div class="col-12 col-sm-2 col-md-auto">
                                        <button class="btn btn-outline-success w-100" type="submit"><i class="fas fa-filter me-2"></i>ফিল্টার</button>
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
                            <div class="notice-header urgent">
                                <div class="d-flex align-items-center">
                                    <div class="notice-icon urgent me-3">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-bold text-dark">জরুরি সভার নোটিশ</h5>
                                        <div class="notice-meta">
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
                                <p class="mb-3 text-dark">আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।</p>
                            </div>
                        </div>

                        <div class="notice-card mb-4" data-category="urgent" data-year="2024">
                            <div class="notice-header urgent">
                                <div class="d-flex align-items-center">
                                    <div class="notice-icon urgent me-3">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-bold text-dark">জরুরি সভার নোটিশ</h5>
                                        <div class="notice-meta">
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
                                <p class="mb-3 text-dark">আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।</p>
                            </div>
                        </div>

                        <div class="notice-card mb-4" data-category="urgent" data-year="2024">
                            <div class="notice-header urgent">
                                <div class="d-flex align-items-center">
                                    <div class="notice-icon urgent me-3">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-bold text-dark">জরুরি সভার নোটিশ</h5>
                                        <div class="notice-meta">
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
                                <p class="mb-3 text-dark">আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।</p>
                            </div>
                        </div>

                        <div class="notice-card mb-4" data-category="urgent" data-year="2024">
                            <div class="notice-header urgent">
                                <div class="d-flex align-items-center">
                                    <div class="notice-icon urgent me-3">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h5 class="mb-1 fw-bold text-dark">জরুরি সভার নোটিশ</h5>
                                        <div class="notice-meta">
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
                                <p class="mb-3 text-dark">আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।</p>
                            </div>
                        </div>
                        <!-- Pagination -->
                        <nav aria-label="Notice pagination" class="mt-4">
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1">পূর্ববর্তী</a>
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
                                    <a class="page-link" href="#">পরবর্তী</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </section>
            </div>
        </div>


        <!-- Bootstrap Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">নোটিশ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <!-- 👉 এখানে আপনার সেকশন কপি করবেন -->
                    <section id="mySection">
                    <h3 class="text-secondary">What is Lorem Ipsum </h3>
                    <p class="fw-bold text-dark"><i class="fas fa-calendar"></i> ১৫ মার্চ, ২০২৪</p>
                    <p>
                        আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                        আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                        আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                        আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                        আগামী ২০ মার্চ, ২০২৪ তারিখে সন্ধ্যা ৭টায় জরুরি সভা অনুষ্ঠিত হবে। সকল সদস্যদের উপস্থিত থাকার জন্য বিশেষভাবে অনুরোধ করা হচ্ছে।
                    </p>
                    </section>
                </div>

                </div>
            </div>
        </div>


@endsection