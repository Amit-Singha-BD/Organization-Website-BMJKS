@extends('frontend.layouts.master_layout')
@section('content')

<div class="container">
    <div class="row">

        {{-- ১. সার্চ ফর্ম (মোবাইলে উপরে, ডেক্সটপে বামে) --}}
        <div class="col-12 col-lg-4 order-1 order-lg-1">
            <div class="container">
                <div class="card shadow-lg border-0 rounded-3 my-4">

                    <h4 class="text-center card-title fw-bold">
                        <i class="fas fa-search me-2"></i> ব্যক্তি অনুসন্ধান
                    </h4>

                    <div class="card-body card-body-content">
                        <form class="row g-3" action="{{ route('search.result') }}" method="POST">
                            @csrf
                            <div class="col-md-12 floating-wrap">
                                <div class="floating-input-container">
                                    <span class="icon-addon"><i class="fas fa-user"></i></span>
                                    <input type="text" id="fullname" name="name" class="floating-input" placeholder="" autocomplete="name"/>
                                    <label class="floating-label" for="fullname">ব্যাক্তির নাম</label>
                                </div>
                            </div>

                            <div class="col-md-12 floating-wrap">
                                <div class="floating-input-container">
                                    <span class="icon-addon"><i class="fas fa-person-half-dress"></i></span>
                                    <input type="text" id="fatherHusbandName" name="father_husband_name" class="floating-input" placeholder=""
                                        autocomplete="off"/>
                                    <label class="floating-label" for="fatherHusbandName">পিতা/স্বামীর নাম</label>
                                </div>
                            </div>

                            <div class="col-md-12 floating-wrap">
                                <div class="floating-input-container">
                                    <span class="icon-addon"><i class="fas fa-user-tag"></i></span>
                                    <input type="text" id="motherName" name="mother_name" class="floating-input" placeholder="" autocomplete="off"/>
                                    <label class="floating-label" for="motherName">মাতার নাম</label>
                                </div>
                            </div>

                            <div class="col-md-12 floating-wrap">
                                <div class="floating-input-container">
                                    <span class="icon-addon"><i class="fas fa-venus-mars"></i></span>
                                    <select id="gender" name="gender" class="floating-input">
                                        <option value="" disabled selected hidden></option>
                                        <option value="male">পুরুষ</option>
                                        <option value="female">মহিলা</option>
                                        <option value="other">অন্যান্য</option>
                                    </select>
                                    <label class="floating-label" for="gender">লিঙ্গ</label>
                                </div>
                            </div>
                            
                            <div class="col-md-12 floating-wrap">
                                <div class="floating-input-container">
                                    <span class="icon-addon"><i class="fas fa-ring"></i></span>
                                    <select id="maritalStatus" name="marital_status" class="floating-input">
                                        <option value="" disabled selected hidden></option>
                                        <option value="single">অবিবাহিত</option>
                                        <option value="married">বিবাহিত</option>
                                        <option value="widowed">বিধবা</option>
                                        <option value="divorced">তালাকপ্রাপ্ত</option>
                                    </select>
                                    <label class="floating-label" for="maritalStatus">বৈবাহিক অবস্থা</label>
                                </div>
                            </div>

                            <div class="col-md-12 floating-wrap">
                                <div class="floating-input-container">
                                    <span class="icon-addon"><i class="fas fa-hands-asl-interpreting"></i></span>
                                    <select id="caste" name="caste" class="floating-input">
                                        <option value="" disabled selected hidden></option>
                                        <option value="islam">ইসলাম</option>
                                        <option value="hindu">হিন্দু</option>
                                        <option value="buddhist">বৌদ্ধ</option>
                                        <option value="christian">খ্রিষ্টান</option>
                                        <option value="other">অন্যান্য</option>
                                    </select>
                                    <label class="floating-label" for="caste">গোত্র</label>
                                </div>
                            </div>
                            
                            <div class="col-md-12 floating-wrap">
                                <div class="floating-input-container">
                                    <span class="icon-addon"><i class="fas fa-house"></i></span>
                                    <input type="text" id="village" name="village" class="floating-input" placeholder=""
                                        autocomplete="address-line1"/>
                                    <label class="floating-label" for="village">গ্রাম</label>
                                </div>
                            </div>

                            <div class="col-md-12 floating-wrap">
                                <div class="floating-input-container">
                                    <span class="icon-addon"><i class="fas fa-briefcase"></i></span>
                                    <input type="text" id="occupation" name="profession" class="floating-input" placeholder=""
                                        autocomplete="organization-title" />
                                    <label class="floating-label" for="occupation">পেশা</label>
                                </div>
                            </div>

                            <div class="col-12 d-grid mt-4">
                                <button type="submit" name="submit" class="btn btn-primary btn-lg rounded-pill shadow-sm btn-submit">
                                    <i class="fa fa-search me-2"></i> অনুসন্ধান করুন
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- ২. ডান পাশের সার্চ রেজাল্ট (মোবাইলে নিচে, ডেক্সটপে ডানে) --}}
        @if(Route::is('search.result'))
        <div class="col-12 col-lg-8 order-2 order-lg-2">
            <div class="row mb-4 mt-4 mt-lg-0"> {{-- mt-4 for mobile spacing, mt-lg-0 to reset on desktop --}}
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

                                <div class="modal fade" id="modalViewMember{{ $person->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content border-0 shadow-lg rounded-4">
                                            
                                            <div class="modal-header bg-gradient-info text-white rounded-top-4 py-4">
                                                <h5 class="modal-title fw-bold fs-4">
                                                    <i class="fas fa-id-card me-3"></i>সদস্যের বিস্তারিত তথ্য
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                            </div>

                                            <div class="modal-body p-5">
                                                <div class="row g-5">
                                                    
                                                    <div class="col-12 text-center">
                                                        <img src="{{ $person->photo ? asset($person->photo) : asset('Frontend-Assets/images/profile_img.png') }}"
                                                            class="rounded-circle border border-4 border-info shadow-lg object-fit-cover mb-4"
                                                            width="140" height="140" alt="Profile">
                                                        <h3 class="fw-bold text-primary mb-2">{{ $person->name }}</h3>
                                                        <span class="badge bg-success fs-6 px-4 py-2">
                                                            {{ $person->profession ?? 'N/A' }}
                                                        </span>
                                                    </div>

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