@extends('Backend.Layout.MasterLayout')

@section('Content')
<div class="container py-4">
    <div class="row mb-3">
        <div class="col-md-12 text-center">
            <h2 class="text-success">রিসেন্ট দাতাদের তথ্য তালিকা</h2>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-header bg-success text-white py-3 d-flex justify-content-between">
            <h5 class="card-title mb-0">দাতা তালিকা</h5>
            <p class="mb-0">মোট 5 জন</p>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="table-success">
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">নাম</th>
                            <th scope="col">পিতার নাম</th>
                            <th scope="col">গ্রাম</th>
                            <th scope="col" >সহায়তার পরিমান</th>
                            <th scope="col" class="text-center">ইভেন্টের নাম</th>
                            <th scope="col" class="text-center">প্রফাইল</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Row 1 -->
                        <tr>
                            <td class="text-center">1</td>
                            <td>মোঃ কামাল হোসেন</td>
                            <td>মোঃ জামাল হোসেন</td>
                            <td>ঢাকা</td>
                            <td>৳ 678/-</td>
                            <td class="text-center">চিকিৎসা</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-info" title="বিস্তারিত দেখুন"
                                    data-bs-toggle="modal" data-bs-target="#modalViewMember1">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Row 2 -->
                         <tr>
                            <td class="text-center">1</td>
                            <td>মোঃ কামাল হোসেন</td>
                            <td>মোঃ জামাল হোসেন</td>
                            <td>ঢাকা</td>
                            <td>৳ 678/-</td>
                            <td class="text-center">চিকিৎসা</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-info" title="বিস্তারিত দেখুন"
                                    data-bs-toggle="modal" data-bs-target="#modalViewMember1">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        <!-- Row 3 -->
                         <tr>
                            <td class="text-center">1</td>
                            <td>মোঃ কামাল হোসেন</td>
                            <td>মোঃ জামাল হোসেন</td>
                            <td>ঢাকা</td>
                            <td>৳ 678/-</td>
                            <td class="text-center">চিকিৎসা</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-info" title="বিস্তারিত দেখুন"
                                    data-bs-toggle="modal" data-bs-target="#modalViewMember1">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer bg-white">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    মোট 5 টি রেকর্ডের মধ্যে 1 - 3 দেখানো হচ্ছে
                </div>
                <div>
                    <!-- Static Pagination -->
                    <nav>
                        <ul class="pagination mb-0">
                            <li class="page-item disabled"><a class="page-link">«</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">»</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Member Modal 1 -->
<div class="modal fade" id="modalViewMember1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info text-white">
                <h5 class="modal-title">সদস্যের বিস্তারিত তথ্য</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="row g-3">
                    <div class="col-12 text-center">
                        <img src="https://via.placeholder.com/120" 
                             class="rounded-circle border border-3 border-info shadow-sm object-fit-cover"
                             width="120" height="120" alt="Profile">
                        <h4 class="mt-3 mb-0">মোঃ কামাল হোসেন</h4>
                        <p class="text-muted">ব্যবসায়ী</p>
                    </div>
                    <hr class="mt-2">
                    <div class="col-md-6">
                        <p><strong>পিতার/স্বামীর নাম:</strong> আব্দুল্লাহ</p>
                        <p><strong>মাতার নাম:</strong> আয়েশা খাতুন</p>
                        <p><strong>জন্ম তারিখ:</strong> 1990-05-20</p>
                        <p><strong>লিঙ্গ:</strong> পুরুষ</p>
                        <p><strong>বৈবাহিক অবস্থা:</strong> বিবাহিত</p>
                        <p><strong>রক্তের গ্রুপ:</strong> O+</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>মোবাইল:</strong> 01712345678</p>
                        <p><strong>ইমেইল:</strong> kamal@example.com</p>
                        <p><strong>গ্রাম:</strong> ঢাকা</p>
                        <p><strong>ডাকঘর:</strong> সদর</p>
                        <p><strong>থানা:</strong> ধানমন্ডি</p>
                        <p><strong>জেলা:</strong> ঢাকা</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
            </div>
        </div>
    </div>
</div>
@endsection