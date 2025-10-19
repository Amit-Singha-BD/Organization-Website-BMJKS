@extends('frontend.layouts.master_layout')
@section('content')
<div class="container donator py-4">

    <!-- Page Header -->
    <section class="page-header mt-5 text-center">
        <h1 class="display-5 fw-bold">ডোনেটরদের তালিকা</h1>
        <div class="border-bottom border-3 mx-auto" style="width: 100px; background-color:#1A9B9F;"></div>
        <p class="mt-2 lead">দাতাদের সম্পূর্ণ বিবরণ</p>
    </section>

    <!-- Main Card -->
    <div class="card shadow-lg border-0 mt-4">
        <div class="card-header bg-primary text-white py-3 d-flex justify-content-between align-items-center flex-wrap gap-2">
            <h5 class="mb-0"><i class="fas fa-users me-2"></i>দাতা তালিকা</h5>
            <span class="badge bg-light text-success fs-6">মোট {{ $persons->total() }} জন</span>
        </div>

        <div class="card-body p-3">
            <!-- Desktop Table -->
            <div class="table d-none d-md-block">
                <table class="table table-bordered table-hover mb-0 align-middle">
                    <thead class="table-success text-center">
                        <tr>
                            <th>#</th>
                            <th>নাম</th>
                            <th>পিতার নাম</th>
                            <th>গ্রাম</th>
                            <th>সহায়তার পরিমান</th>
                            <th>সহায়তার তালিকা</th>
                            <th>প্রফাইল</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($persons as $person)
                        <tr>
                            <td class="text-center fw-bold text-success">
                                {{ $loop->iteration + ($persons->currentPage() - 1) * $persons->perPage() }}
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="https://ui-avatars.com/api/?name={{ urlencode($person->name) }}&background=random&color=fff&size=32" 
                                         class="rounded-circle me-2" alt="Profile">
                                    <span class="fw-semibold">{{ $person->name }}</span>
                                </div>
                            </td>
                            <td>{{ $person->father_husband_name ?? 'N/A' }}</td>
                            <td>{{ $person->village ?? 'N/A' }}</td>
                            <td class="text-center text-success fw-bold">৳ {{ number_format($person->totalDonation, 2) }}</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#eventView{{ $person->id }}">
                                    <i class="fas fa-list"></i>
                                </button>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modalViewMember{{ $person->id }}">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>

                        <!-- Donation List Modal -->
                        <div class="modal fade" id="eventView{{ $person->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content shadow-lg border-0">
                                    <div class="modal-header bg-info text-white">
                                        <h5 class="modal-title"><i class="fas fa-donate me-2"></i>ডোনেশনের তথ্য</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center mb-3">
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($person->name) }}&background=0D8ABC&color=fff&size=100"
                                                 class="rounded-circle border border-3 border-info shadow-sm"
                                                 width="100" height="100" alt="Profile">
                                            <h4 class="mt-3 mb-1 text-dark">{{ $person->name }}</h4>
                                            <p class="text-muted mb-0">{{ $person->profession ?? 'N/A' }}</p>
                                            <p class="text-success fw-bold mb-0">মোট ডোনেশন: ৳ {{ number_format($person->totalDonation, 2) }}</p>
                                        </div>
                                        <hr>
                                        @forelse($person->donations as $donation)
                                        <div class="card mb-2 shadow-sm border-0">
                                            <div class="card-body">
                                                <div class="row align-items-center">
                                                    <div class="col-8">
                                                        <h6 class="mb-1 text-primary">{{ $donation->event->event_name ?? 'N/A' }}</h6>
                                                        <small class="text-muted">
                                                            <i class="fas fa-calendar me-1"></i>
                                                            {{ \Carbon\Carbon::parse($donation->date)->format('d M, Y') }}
                                                        </small>
                                                    </div>
                                                    <div class="col-4 text-end">
                                                        <span class="fw-bold text-success fs-6">
                                                            ৳ {{ number_format($donation->donate_amount, 2) }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="alert alert-warning text-center py-3">
                                            <i class="fas fa-exclamation-circle me-2"></i>
                                            কোনো ডোনেশন পাওয়া যায়নি
                                        </div>
                                        @endforelse
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <i class="fas fa-times me-1"></i>বন্ধ করুন
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Member Profile Modal -->
                        <div class="modal fade" id="modalViewMember{{ $person->id }}" tabindex="-1" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content shadow-lg border-0">
                                    <div class="modal-header bg-warning text-dark">
                                        <h5 class="modal-title">
                                            <i class="fas fa-user-circle me-2"></i>সদস্যের বিস্তারিত তথ্য
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center mb-3">
                                            <img src="https://ui-avatars.com/api/?name={{ urlencode($person->name) }}&background=FFC107&color=000&size=120"
                                                 class="rounded-circle border border-3 border-warning shadow-sm"
                                                 width="120" height="120" alt="Profile">
                                            <h4 class="mt-3 mb-1 text-dark">{{ $person->name }}</h4>
                                            <p class="text-muted mb-0">{{ $person->profession ?? 'N/A' }}</p>
                                        </div>
                                        <hr>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <h6 class="text-success mb-3 border-bottom pb-2"><i class="fas fa-user me-2"></i>ব্যক্তিগত তথ্য</h6>
                                                <p><strong>পিতার/স্বামীর নাম:</strong> {{ $person->father_husband_name ?? 'N/A' }}</p>
                                                <p><strong>মাতার নাম:</strong> {{ $person->mother_name ?? 'N/A' }}</p>
                                                <p><strong>জন্ম তারিখ:</strong> {{ $person->date_of_birth ?? 'N/A' }}</p>
                                                <p><strong>লিঙ্গ:</strong> {{ $person->gender ?? 'N/A' }}</p>
                                                <p><strong>বৈবাহিক অবস্থা:</strong> {{ $person->marital_status ?? 'N/A' }}</p>
                                                <p><strong>রক্তের গ্রুপ:</strong> <span class="badge bg-danger">{{ $person->blood_group ?? 'N/A' }}</span></p>
                                            </div>
                                            <div class="col-md-6">
                                                <h6 class="text-success mb-3 border-bottom pb-2"><i class="fas fa-address-card me-2"></i>যোগাযোগের তথ্য</h6>
                                                <p><strong>মোবাইল:</strong> <span class="badge bg-primary">{{ $person->mobile_number ?? 'N/A' }}</span></p>
                                                <p><strong>পেশা:</strong> {{ $person->profession ?? 'N/A' }}</p>
                                                <p><strong>গ্রাম:</strong> {{ $person->village ?? 'N/A' }}</p>
                                                <p><strong>ডাকঘর:</strong> {{ $person->post_office ?? 'N/A' }}</p>
                                                <p><strong>থানা:</strong> {{ $person->thana ?? 'N/A' }}</p>
                                                <p><strong>জেলা:</strong> <span class="badge bg-info">{{ $person->district ?? 'N/A' }}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                            <i class="fas fa-times me-1"></i>বন্ধ করুন
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @empty
                        <tr>
                            <td colspan="7" class="text-center text-muted py-4">কোনো দাতা পাওয়া যায়নি</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Mobile Cards -->
            <div class="d-block d-md-none">
                @forelse($persons as $person)
                <div class="card shadow-sm mb-3 border-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($person->name) }}&background=random&color=fff&size=50" 
                                 class="rounded-circle me-3 border border-2 border-primary" alt="Profile">
                            <div>
                                <h5 class="mb-0 fw-bold">{{ $person->name }}</h5>
                                <small class="text-muted">{{ $person->father_husband_name ?? 'N/A' }}</small>
                            </div>
                        </div>
                        <p class="mb-1"><strong>গ্রাম:</strong> {{ $person->village ?? 'N/A' }}</p>
                        <p class="mb-2"><strong>মোট সহায়তা:</strong> <span class="text-success fw-bold">৳ {{ number_format($person->totalDonation, 2) }}</span></p>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-sm btn-info w-50 me-2" data-bs-toggle="modal" data-bs-target="#eventView{{ $person->id }}">
                                <i class="fas fa-list me-1"></i> সহায়তা
                            </button>
                            <button class="btn btn-sm btn-warning w-50" data-bs-toggle="modal" data-bs-target="#modalViewMember{{ $person->id }}">
                                <i class="fas fa-user me-1"></i> প্রোফাইল
                            </button>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center text-muted py-4">
                    <i class="fas fa-users fa-3x mb-2"></i>
                    <p>কোনো দাতা পাওয়া যায়নি</p>
                </div>
                @endforelse
            </div>
        </div>

        <!-- Card Footer -->
        <div class="card-footer bg-light text-center">
            <div class="small text-muted">
                মোট {{ $persons->total() }} টি রেকর্ডের মধ্যে 
                <strong>{{ $persons->firstItem() }} - {{ $persons->lastItem() }}</strong> দেখানো হচ্ছে
            </div>
            <div class="mt-2">
                {{ $persons->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>

<style>
.donator .table th, .donator .table td { vertical-align: middle; font-size: 0.9rem; }
.donator .card { border-radius: 10px; }
.donator .card-body p { font-size: 0.9rem; }
.donator .modal-content { border-radius: 15px; }
@media (max-width: 768px) {
    .donator h1.display-5 { font-size: 1.8rem; }
    .donator .card-body h5 { font-size: 1.1rem; }
    .donator .btn { font-size: 0.85rem; }
    .modal-dialog { max-width: 95% !important; margin: 1rem auto; }
}
</style>
@endsection
