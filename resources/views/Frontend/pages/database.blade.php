@extends('frontend.layouts.master_layout')
@section('content')

<div class="container">
    <div class="row">
        <!-- সার্চ ফর্ম -->
        <div class="col-12 col-lg-4 order-1 order-lg-1 mb-4 mb-lg-0">
            <div class="card shadow-lg border-0 rounded-3 my-4">
                <h4 class="text-center card-title fw-bold py-3">
                    <i class="fas fa-search me-2"></i> সদস্য অনুসন্ধান
                </h4>
                <div class="card-body card-body-content">
                    <form class="row g-3" action="{{ route('bmjks.database.search') }}" method="POST">
                        @csrf
                        <!-- নাম -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-user"></i></span>
                                <input type="text" id="name" name="name" class="floating-input" placeholder=""/>
                                <label class="floating-label" for="name">নাম লিখুন</label>
                            </div>
                        </div>

                        <!-- পিতা/স্বামী -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-user-friends"></i></span>
                                <input type="text" id="father_husband_name" name="father_husband_name" class="floating-input" placeholder=""/>
                                <label class="floating-label" for="father_husband_name">পিতা/স্বামীর নাম লিখুন</label>
                            </div>
                        </div>

                        <!-- মাতার নাম -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-female"></i></span>
                                <input type="text" id="mother_name" name="mother_name" class="floating-input" placeholder=""/>
                                <label class="floating-label" for="mother_name">মাতার নাম লিখুন</label>
                            </div>
                        </div>

                        <!-- জন্ম তারিখ -->
                        <div class="col-12 floating-wrap">
                            <div class="row g-2">
                                <div class="col">
                                    <div class="floating-input-container">
                                        <span class="icon-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="date" name="date_of_birth_from" class="floating-input" id="dob_from"/>
                                        <label class="floating-label" for="dob_from">থেকে</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="floating-input-container">
                                        <span class="icon-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="date" name="date_of_birth_to" class="floating-input" id="dob_to"/>
                                        <label class="floating-label" for="dob_to">পর্যন্ত</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- লিঙ্গ -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-venus-mars"></i></span>
                                <select id="gender" name="gender" class="floating-input">
                                    <option value="" disabled selected hidden></option>
                                    <option value="male">পুরুষ</option>
                                    <option value="female">মহিলা</option>
                                    <option value="other">অন্যান্য</option>
                                </select>
                                <label class="floating-label" for="gender">লিঙ্গ</label>
                            </div>
                        </div>

                        <!-- গোত্র -->
                         <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-users"></i></span>
                                <select id="caste" name="caste" class="floating-input">
                                    <option value="" disabled selected hidden></option>
                                    <option value="single">অবিবাহিত</option>
                                    <option value="married">বিবাহিত</option>
                                    <option value="widowed">বিধবা</option>
                                    <option value="divorced">তালাকপ্রাপ্ত</option>
                                </select>
                                <label class="floating-label" for="caste">গোত্র লিখুন</label>
                            </div>
                        </div>

                        <!-- বৈবাহিক অবস্থা -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-ring"></i></span>
                                <select id="marital_status" name="marital_status" class="floating-input">
                                    <option value="" disabled selected hidden></option>
                                    <option value="single">অবিবাহিত</option>
                                    <option value="married">বিবাহিত</option>
                                    <option value="widowed">বিধবা</option>
                                    <option value="divorced">তালাকপ্রাপ্ত</option>
                                </select>
                                <label class="floating-label" for="marital_status">বৈবাহিক অবস্থা</label>
                            </div>
                        </div>

                        <!-- মোবাইল -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-phone"></i></span>
                                <input type="text" id="mobile_number" name="mobile_number" class="floating-input" placeholder=""/>
                                <label class="floating-label" for="mobile_number">মোবাইল লিখুন</label>
                            </div>
                        </div>

                        <!-- গ্রাম -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-home"></i></span>
                                <input type="text" id="village" name="village" class="floating-input" placeholder=""/>
                                <label class="floating-label" for="village">গ্রামের নাম লিখুন</label>
                            </div>
                        </div>

                        <!-- ডাকঘর -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-envelope"></i></span>
                                <input type="text" id="post_office" name="post_office" class="floating-input" placeholder=""/>
                                <label class="floating-label" for="post_office">পোস্ট অফিস লিখুন</label>
                            </div>
                        </div>

                        <!-- থানা -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-map-marker-alt"></i></span>
                                <input type="text" id="thana" name="thana" class="floating-input" placeholder=""/>
                                <label class="floating-label" for="thana">থানার নাম লিখুন</label>
                            </div>
                        </div>

                        <!-- জেলা -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-city"></i></span>
                                <input type="text" id="district" name="district" class="floating-input" placeholder=""/>
                                <label class="floating-label" for="district">জেলার নাম লিখুন</label>
                            </div>
                        </div>

                        <!-- পেশা -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-briefcase"></i></span>
                                <input type="text" id="profession" name="profession" class="floating-input" placeholder=""/>
                                <label class="floating-label" for="profession">পেশা লিখুন</label>
                            </div>
                        </div>

                        <!-- রক্তের গ্রুপ -->
                        <div class="col-12 floating-wrap">
                            <div class="floating-input-container">
                                <span class="icon-addon"><i class="fa fa-tint"></i></span>
                                <select name="blood_group" id="blood_group" class="floating-input">
                                    <option value="" disabled selected hidden></option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                <label class="floating-label" for="blood_group">রক্তের গ্রুপ</label>
                            </div>
                        </div>

                        <div class="col-12 d-grid mt-3">
                            <button type="submit" name="submit" class="btn btn-success py-2 fw-semibold">
                                <i class="fa fa-search me-2"></i> অনুসন্ধান করুন
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- সার্চ রেজাল্ট -->
        @if(Route::is('bmjks.database.search'))
        <div class="col-12 col-lg-8 order-2 order-lg-2">
            <div class="row py-3 justify-content-center">
                <div class="col-12 text-center">
                    <h2 class="text-secondary fw-bold mb-1">
                        <i class="fas fa-users me-2"></i> সার্চকৃত ব্যক্তির তথ্য তালিকা
                    </h2>
                </div>
            </div>

            <div class="card shadow-lg border-1 border-dark rounded-3">
                <div class="card-header text-white py-3 d-flex justify-content-between align-items-center">
                    <h5 class=" mb-0 fw-semibold">
                        <i class="fas fa-list me-2"></i> সার্চকৃত ব্যক্তির তালিকা
                    </h5>
                    <p class="mb-0">মোট {{ $persons->total() }} জন পাওয়া গেছে</p>
                </div>

                <div class=" p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col" class="text-center">#</th>
                                    <th scope="col">নাম</th>
                                    <th scope="col">গ্রাম</th>
                                    <th scope="col" class="text-center">একশন</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($persons as $person)
                                <tr>
                                    <td class="text-center fw-medium">{{ $loop->iteration + ($persons->currentPage()-1)*$persons->perPage() }}</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ $person->photo ? asset($person->photo) : asset('Frontend-Assets/images/profile_img.png') }}"
                                                class="rounded-circle me-2 object-fit-cover"
                                                width="40" height="40" alt="Profile">
                                            <span class="fw-semibold">{{ $person->name }}</span>
                                        </div>
                                    </td>
                                    <td>{{ $person->village }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-outline-success" 
                                                data-bs-toggle="modal" 
                                                data-bs-target="#modalViewMember{{ $person->id }}">
                                            <i class="fas fa-eye me-1"></i> দেখুন
                                        </button>
                                    </td>
                                </tr>

                                <!-- View Member Modal -->
                                <div class="modal fade" id="modalViewMember{{ $person->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content border-0 shadow-lg rounded-4">
                                            <div class="modal-header bg-primary text-white">
                                                <h5 class="modal-title fw-semibold">
                                                    <i class="fas fa-id-card me-2"></i> সদস্যের বিস্তারিত তথ্য
                                                </h5>
                                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row g-4">
                                                    <div class="col-12 text-center">
                                                        <img src="{{ $person->photo ? asset($person->photo) : asset('Frontend-Assets/images/profile_img.png') }}"
                                                            class="rounded-circle border border-4 border-info shadow object-fit-cover"
                                                            width="120" height="120" alt="Profile">
                                                        <h4 class="mt-3 mb-1 fw-bold text-primary">{{ $person->name }}</h4>
                                                        <span class="badge bg-secondary px-3 py-2">
                                                            {{ $person->profession ?? 'N/A' }}
                                                        </span>
                                                    </div>
                                                    <hr class="my-3">
                                                    <div class="col-md-6">
                                                        <h6 class="fw-semibold text-success mb-3">
                                                            <i class="fas fa-user-circle me-2"></i> ব্যক্তিগত তথ্য
                                                        </h6>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="mb-2"><strong>পিতার/স্বামীর নাম:</strong> {{ $person->father_husband_name ?? 'N/A' }}</li>
                                                            <li class="mb-2"><strong>মাতার নাম:</strong> {{ $person->mother_name ?? 'N/A' }}</li>
                                                            <li class="mb-2"><strong>লিঙ্গ:</strong> {{ $person->gender ?? 'N/A' }}</li>
                                                            <li class="mb-2"><strong>বৈবাহিক অবস্থা:</strong> {{ $person->marital_status ?? 'N/A' }}</li>
                                                            <li class="mb-2"><strong>রক্তের গ্রুপ:</strong> {{ $person->blood_group ?? 'N/A' }}</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6 class="fw-semibold text-success mb-3">
                                                            <i class="fas fa-address-card me-2"></i> যোগাযোগ ও ঠিকানা
                                                        </h6>
                                                        <ul class="list-unstyled mb-0">
                                                            <li class="mb-2"><strong>গোত্র:</strong> {{ $person->caste ?? 'N/A' }}</li>
                                                            <li class="mb-2"><strong>গ্রাম:</strong> {{ $person->village ?? 'N/A' }}</li>
                                                            <li class="mb-2"><strong>ডাকঘর:</strong> {{ $person->post_office ?? 'N/A' }}</li>
                                                            <li class="mb-2"><strong>থানা:</strong> {{ $person->thana ?? 'N/A' }}</li>
                                                            <li class="mb-2"><strong>জেলা:</strong> {{ $person->district ?? 'N/A' }}</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <i class="fas fa-times me-1"></i> বন্ধ করুন
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-danger fw-semibold py-4">
                                            <i class="fas fa-exclamation-circle me-2"></i>কোনো তথ্য পাওয়া যায়নি
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                @if($persons->hasPages())
                    <div class="card-footer bg-white">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                মোট {{ $persons->total() }} টি রেকর্ডের মধ্যে 
                                {{ $persons->firstItem() }} - {{ $persons->lastItem() }} দেখানো হচ্ছে
                            </div>
                            <div>
                                {{ $persons->links() }}
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