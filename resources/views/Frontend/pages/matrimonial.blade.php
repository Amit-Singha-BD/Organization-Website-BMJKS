@extends('frontend.layouts.master_layout')
@section('content') 
<div class="container-fluid py-4">
    <div class="row g-4">
        <!-- বাম পাশের সার্চ ফিল্ড -->
        <div class="col-lg-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white py-4">
                    <h5 class="text-white card-title mb-0 fw-bold fs-4">
                        <i class="fas fa-search me-3"></i>সদস্য অনুসন্ধান
                    </h5>
                </div>
                <div class="card-body p-4">
    <form action="{{ route('search.result') }}" method="POST">
        @csrf

        <!-- নাম -->
        <div class="row mb-3 align-items-center">
            <label class="col-md-3 col-form-label fw-semibold text-dark">
                <i class="fas fa-user text-success me-2"></i> নাম
            </label>
            <div class="col-md-9">
                <input type="text" name="name" class="form-control" placeholder="সদস্যের নাম লিখুন">
            </div>
        </div>

        <!-- পিতা/স্বামীর নাম -->
        <div class="row mb-3 align-items-center">
            <label class="col-md-3 col-form-label fw-semibold text-dark">
                <i class="fas fa-user-friends text-success me-2"></i> পিতা/স্বামীর নাম
            </label>
            <div class="col-md-9">
                <input type="text" name="father_husband_name" class="form-control" placeholder="পিতা/স্বামীর নাম লিখুন">
            </div>
        </div>

        <!-- মাতার নাম -->
        <div class="row mb-3 align-items-center">
            <label class="col-md-3 col-form-label fw-semibold text-dark">
                <i class="fas fa-female text-success me-2"></i> মাতার নাম
            </label>
            <div class="col-md-9">
                <input type="text" name="mother_name" class="form-control" placeholder="মাতার নাম লিখুন">
            </div>
        </div>

        <!-- লিঙ্গ -->
        <div class="row mb-3 align-items-center">
            <label class="col-md-3 col-form-label fw-semibold text-dark">
                <i class="fas fa-venus-mars text-success me-2"></i> লিঙ্গ
            </label>
            <div class="col-md-9">
                <select name="gender" class="form-select">
                    <option value="">-- নির্বাচন করুন --</option>
                    <option value="male">পুরুষ</option>
                    <option value="female">মহিলা</option>
                    <option value="other">অন্যান্য</option>
                </select>
            </div>
        </div>

        <!-- বৈবাহিক অবস্থা -->
        <div class="row mb-3 align-items-center">
            <label class="col-md-3 col-form-label fw-semibold text-dark">
                <i class="fas fa-ring text-success me-2"></i> বৈবাহিক অবস্থা
            </label>
            <div class="col-md-9">
                <select name="marital_status" class="form-select">
                    <option value="">-- নির্বাচন করুন --</option>
                    <option value="single">অবিবাহিত</option>
                    <option value="married">বিবাহিত</option>
                    <option value="widowed">বিধবা</option>
                    <option value="divorced">তালাকপ্রাপ্ত</option>
                </select>
            </div>
        </div>

        <!-- গোত্র -->
        <div class="row mb-3 align-items-center">
            <label class="col-md-3 col-form-label fw-semibold text-dark">
                <i class="fas fa-users text-success me-2"></i> গোত্র
            </label>
            <div class="col-md-9">
                <input type="text" name="caste" class="form-control" placeholder="গোত্র লিখুন">
            </div>
        </div>

        <!-- গ্রাম -->
        <div class="row mb-3 align-items-center">
            <label class="col-md-3 col-form-label fw-semibold text-dark">গ্রাম</label>
            <div class="col-md-9">
                <input type="text" name="village" class="form-control" placeholder="গ্রামের নাম লিখুন">
            </div>
        </div>

        <!-- পেশা -->
        <div class="row mb-3 align-items-center">
            <label class="col-md-3 col-form-label fw-semibold text-dark">
                <i class="fas fa-briefcase text-success me-2"></i> পেশা
            </label>
            <div class="col-md-9">
                <input type="text" name="profession" class="form-control" placeholder="পেশা লিখুন">
            </div>
        </div>

        <!-- সার্চ বাটন -->
        <div class="row">
            <div class="offset-md-3 col-md-9">
                <button type="submit" class="btn btn-success w-100 fw-bold py-2 fs-5">
                    <i class="fas fa-search me-2"></i> অনুসন্ধান করুন
                </button>
            </div>
        </div>
    </form>
</div>

            </div>
        </div>

        <!-- ডান পাশের সার্চ রেজাল্ট -->
        @if(Route::is('search.result'))
        <div class="col-lg-8">
            <!-- হেডার সেকশন -->
            <div class="row mb-4">
                <div class="col-12">
                    <div class="card bg-gradient-primary text-white shadow-lg border-0 rounded-3">
                        <div class="card-body py-4">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h2 class="fw-bold mb-2">
                                        <i class="fas fa-users me-3"></i>সার্চকৃত ব্যক্তির তথ্য তালিকা
                                    </h2>
                                    <p class="mb-0 opacity-75">
                                        আপনার অনুসন্ধান অনুযায়ী পাওয়া সদস্যদের তালিকা
                                    </p>
                                </div>
                                <div class="col-md-4 text-md-end">
                                    <div class="bg-white text-success rounded-3 p-3 d-inline-block">
                                        <h4 class="fw-bold mb-0">{{ $persons->total() }}</h4>
                                        <small class="fw-semibold">মোট সদস্য</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- রেজাল্ট কার্ড -->
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-white py-4 border-bottom">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h5 class="card-title fw-bold text-success mb-0 fs-4">
                                <i class="fas fa-list me-3"></i>সার্চকৃত ব্যক্তির তালিকা
                            </h5>
                        </div>
                        <div class="col-md-6 text-md-end">
                            <span class="badge bg-success fs-6 px-3 py-2">
                                মোট {{ $persons->total() }} জন পাওয়া গেছে
                            </span>
                        </div>
                    </div>
                </div>

                <!-- টেবিল সেকশন -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col" class="text-center py-3 fs-6">#</th>
                                    <th scope="col" class="py-3 fs-6">সদস্য</th>
                                    <th scope="col" class="py-3 fs-6">মোবাইল</th>
                                    <th scope="col" class="py-3 fs-6">গ্রাম</th>
                                    <th scope="col" class="text-center py-3 fs-6">কর্ম</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($persons as $person)
                                <tr class="border-bottom">
                                    <td class="text-center fw-bold text-muted py-3">
                                        {{ $loop->iteration + ($persons->currentPage()-1)*$persons->perPage() }}
                                    </td>
                                    <td class="py-3">
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $person->photo ? asset($person->photo) : asset('Frontend-Assets/images/profile_img.png') }}"
                                                class="rounded-circle me-3 object-fit-cover border border-3 border-success"
                                                width="50" height="50" alt="Profile">
                                            <div>
                                                <h6 class="fw-bold mb-1 text-dark">{{ $person->name }}</h6>
                                                <small class="text-muted">
                                                    {{ $person->father_husband_name ?? 'N/A' }}
                                                </small>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="py-3">
                                        @if($person->mobile_number)
                                        <a href="tel:{{ $person->mobile_number }}" 
                                           class="badge bg-info text-dark text-decoration-none fs-6 px-3 py-2">
                                            <i class="fas fa-phone me-1"></i>{{ $person->mobile_number }}
                                        </a>
                                        @else
                                        <span class="badge bg-secondary fs-6 px-3 py-2">N/A</span>
                                        @endif
                                    </td>
                                    <td class="py-3">
                                        <span class="fw-semibold text-dark">{{ $person->village }}</span>
                                    </td>
                                    <td class="text-center py-3">
                                        <button type="button" class="btn btn-outline-success btn-sm px-3 py-2 fw-semibold" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalViewMember{{ $person->id }}">
                                            <i class="fas fa-eye me-2"></i>দেখুন
                                        </button>
                                    </td>
                                </tr>

                                <!-- View Member Modal -->
                                <div class="modal fade" id="modalViewMember{{ $person->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content border-0 shadow-lg rounded-4">
                                            
                                            <!-- Header -->
                                            <div class="modal-header bg-gradient-info text-white rounded-top-4 py-4">
                                                <h5 class="modal-title fw-bold fs-4">
                                                    <i class="fas fa-id-card me-3"></i>সদস্যের বিস্তারিত তথ্য
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Body -->
                                            <div class="modal-body p-5">
                                                <div class="row g-5">
                                                    
                                                    <!-- Profile Section -->
                                                    <div class="col-12 text-center">
                                                        <img src="{{ $person->photo ? asset($person->photo) : asset('Frontend-Assets/images/profile_img.png') }}"
                                                            class="rounded-circle border border-4 border-info shadow-lg object-fit-cover mb-4"
                                                            width="140" height="140" alt="Profile">
                                                        <h3 class="fw-bold text-primary mb-2">{{ $person->name }}</h3>
                                                        <span class="badge bg-success fs-6 px-4 py-2">
                                                            {{ $person->profession ?? 'N/A' }}
                                                        </span>
                                                    </div>

                                                    <!-- Information Sections -->
                                                    <div class="col-md-6">
                                                        <div class="card border-0 shadow-sm h-100">
                                                            <div class="card-header bg-light py-3">
                                                                <h6 class="fw-bold text-success mb-0">
                                                                    <i class="fas fa-user-circle me-2"></i>ব্যক্তিগত তথ্য
                                                                </h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="list-group list-group-flush">
                                                                    <div class="list-group-item border-0 px-0 py-2">
                                                                        <strong>পিতার/স্বামীর নাম:</strong><br>
                                                                        <span class="text-muted">{{ $person->father_husband_name ?? 'N/A' }}</span>
                                                                    </div>
                                                                    <div class="list-group-item border-0 px-0 py-2">
                                                                        <strong>মাতার নাম:</strong><br>
                                                                        <span class="text-muted">{{ $person->mother_name ?? 'N/A' }}</span>
                                                                    </div>
                                                                    <div class="list-group-item border-0 px-0 py-2">
                                                                        <strong>জন্ম তারিখ:</strong><br>
                                                                        <span class="text-muted">{{ $person->date_of_birth ?? 'N/A' }}</span>
                                                                    </div>
                                                                    <div class="list-group-item border-0 px-0 py-2">
                                                                        <strong>লিঙ্গ:</strong><br>
                                                                        <span class="text-muted">{{ $person->gender ?? 'N/A' }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="card border-0 shadow-sm h-100">
                                                            <div class="card-header bg-light py-3">
                                                                <h6 class="fw-bold text-success mb-0">
                                                                    <i class="fas fa-address-card me-2"></i>যোগাযোগ ও ঠিকানা
                                                                </h6>
                                                            </div>
                                                            <div class="card-body">
                                                                <div class="list-group list-group-flush">
                                                                    <div class="list-group-item border-0 px-0 py-2">
                                                                        <strong>মোবাইল:</strong><br>
                                                                        <span class="text-muted">{{ $person->mobile_number ?? 'N/A' }}</span>
                                                                    </div>
                                                                    <div class="list-group-item border-0 px-0 py-2">
                                                                        <strong>গোত্র:</strong><br>
                                                                        <span class="text-muted">{{ $person->caste ?? 'N/A' }}</span>
                                                                    </div>
                                                                    <div class="list-group-item border-0 px-0 py-2">
                                                                        <strong>গ্রাম:</strong><br>
                                                                        <span class="text-muted">{{ $person->village ?? 'N/A' }}</span>
                                                                    </div>
                                                                    <div class="list-group-item border-0 px-0 py-2">
                                                                        <strong>জেলা:</strong><br>
                                                                        <span class="text-muted">{{ $person->district ?? 'N/A' }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- Footer -->
                                            <div class="modal-footer border-0 py-4">
                                                <button type="button" class="btn btn-secondary px-4 py-2 fw-semibold" data-bs-dismiss="modal">
                                                    <i class="fas fa-times me-2"></i>বন্ধ করুন
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center py-5">
                                        <div class="text-muted">
                                            <i class="fas fa-exclamation-circle fa-3x mb-3"></i>
                                            <h5 class="fw-bold">কোনো তথ্য পাওয়া যায়নি</h5>
                                            <p>আপনার অনুসন্ধানের সাথে মিলিয়ে কোনো সদস্য পাওয়া যায়নি</p>
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Pagination -->
                @if($persons->hasPages())
                <div class="card-footer bg-white border-0 py-4">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <p class="mb-0 text-muted fw-semibold">
                                মোট {{ $persons->total() }} টি রেকর্ডের মধ্যে 
                                {{ $persons->firstItem() }} - {{ $persons->lastItem() }} দেখানো হচ্ছে
                            </p>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex justify-content-end">
                                {{ $persons->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
        @endif
    </div>
</div>

@endsection