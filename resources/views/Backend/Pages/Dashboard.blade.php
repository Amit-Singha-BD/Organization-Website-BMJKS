@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="row g-3">
        <!-- মোট নোটিশ -->
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">মোট নোটিশ</small>
                            <h4 class="mb-0">128</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-bullhorn"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- সদস্য -->
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">সদস্য</small>
                            <h4 class="mb-0">642</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-user-group"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- কমিটি -->
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">কমিটি</small>
                            <h4 class="mb-0">7</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-users-gear"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- আজকের ভিজিট -->
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">আজকের ভিজিট</small>
                            <h4 class="mb-0">1,203</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-chart-line"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- স্ট্যাট কার্ডস শেষ -->

    <!-- সাম্প্রতিক নোটিশ টেবিল শুরু -->
    <div class="row g-3 mt-1">
        <div class="col-lg-12">
            <div class="card table-card shadow-sm">
                <div class="card-header text-white text-center">
                    <i class="fa-solid fa-bullhorn"></i> সাম্প্রতিক নোটিশ
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr class="text-center">
                                <th>শিরোনাম</th>
                                <th>ধরন</th>
                                <th>তারিখ</th>
                                <th>দেখুন</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td data-label="শিরোনাম">সভা সংক্রান্ত জরুরি নোটিশ</td>
                                <td data-label="ধরন"><span class="badge type">জরুরি</span></td>
                                <td data-label="তারিখ">১২-১২-২০২৪</td>
                                <td data-label="অ্যাকশন">
                                    <div class="d-flex flex-row justify-content-center gap-2">
                                        <button type="button" class="action-btn-info" title="view" data-bs-toggle="modal" data-bs-target="#noticeViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td data-label="শিরোনাম">বার্ষিক সাধারণ সভা</td>
                                <td data-label="ধরন"><span class="badge type">সাধারণ</span></td>
                                <td data-label="তারিখ">১০-১২-২০২৪</td>
                                <td data-label="অ্যাকশন">
                                    <div class="d-flex flex-row justify-content-center gap-2">
                                        <button type="button" class="action-btn-info" title="view" data-bs-toggle="modal" data-bs-target="#noticeViewModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- সাম্প্রতিক নোটিশ টেবিল শেষ -->

    <!-- নোটিশ ভিউ মডাল শুরু -->
    <div class="modal fade" id="noticeViewModal" tabindex="-1" aria-labelledby="noticeViewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="noticeViewModalLabel">নোটিশের বিস্তারিত</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="notice-details">
                        <h4 id="noticeTitle">সভা সংক্রান্ত জরুরি নোটিশ</h4>
                        <p class="text-muted">
                            <span class="badge bg-primary">জরুরি</span>
                            <span>তারিখ: ১২-১২-২০২৪</span>
                        </p>
                        <hr>
                        <div id="noticeContent">
                            <p>
                                সম্মানিত সদস্যবৃন্দ,
                                <br><br>
                                আগামী ১৫ই ডিসেম্বর ২০২৪, রবিবার, বিকাল ৪:০০ ঘটিকায় আমাদের বার্ষিক সাধারণ সভা অনুষ্ঠিত হবে। উক্ত সভায় সকলের উপস্থিতি একান্তভাবে কাম্য। সভার এজেন্ডা নিম্নরূপ:
                            </p>
                            <ul>
                                <li>গত সভার কার্যবিবরণী অনুমোদন।</li>
                                <li>বার্ষিক প্রতিবেদন ও নিরীক্ষিত হিসাব পেশ।</li>
                                <li>নতুন কার্যনির্বাহী কমিটি গঠন।</li>
                                <li>বিবিধ আলোচনা।</li>
                            </ul>
                            <p>
                                সকলকে নির্ধারিত সময়ে উপস্থিত থাকার জন্য অনুরোধ করা হলো।
                                <br><br>
                                ধন্যবাদান্তে,
                                <br>
                                সাধারণ সম্পাদক
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                </div>
            </div>
        </div>
    </div>
    <!-- নোটিশ ভিউ মডাল শেষ -->

@endsection