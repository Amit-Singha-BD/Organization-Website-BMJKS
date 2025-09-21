@extends('Backend.Layout.MasterLayout')

@section('Content')
    <div class="container ">
        <div class="row">
            <!-- বাম পাশের সার্চ ফিল্ড -->
            <div class="col-md-4">
                <div class="card shadow-sm border-1 border-success">
                    <div class="card-header bg-success  text-white py-3">
                        <h5 class="card-title mb-0 fw-semibold">
                            <i class="fas fa-search me-2"></i> সদস্য অনুসন্ধান
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('search.result') }}" method="POST" class="row g-3">
                            @csrf

                            <div class="col-12">
                                <label class="form-label fw-medium">নাম</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fa fa-user text-success"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="নাম লিখুন">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">পিতা/স্বামীর নাম</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fa fa-user-friends text-success"></i></span>
                                    <input type="text" name="father_husband_name" class="form-control" placeholder="পিতা/স্বামীর নাম লিখুন">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">মাতার নাম</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fa fa-female text-success"></i></span>
                                    <input type="text" name="mother_name" class="form-control" placeholder="মাতার নাম লিখুন">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label">জন্ম তারিখ</label>
                                <div class="d-flex align-items-center flex-nowrap">

                                    <!-- শুরুর তারিখ -->
                                    <div class="me-1" style="flex: 1 1 auto; min-width: 0;">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-calendar text-success"></i></span>
                                            <input type="date" name="date_of_birth_from" class="form-control" placeholder="শুরুর তারিখ">
                                        </div>
                                    </div>

                                    <!-- থেকে -->
                                    <div>
                                        <span class="px-3 py-2 border rounded bg-light fw-bold text-center">থেকে</span>
                                    </div>

                                    <!-- শেষ তারিখ -->
                                    <div class="ms-1" style="flex: 1 1 auto; min-width: 0;">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-calendar text-success"></i></span>
                                            <input type="date" name="date_of_birth_to" class="form-control" placeholder="শেষ তারিখ">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">লিঙ্গ</label>
                                <select name="gender" class="form-select">
                                    <option value="">-- নির্বাচন করুন --</option>
                                    <option value="male">পুরুষ</option>
                                    <option value="female">মহিলা</option>
                                    <option value="other">অন্যান্য</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">গোত্র</label>
                                <input type="text" name="caste" class="form-control" placeholder="গোত্র লিখুন">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">বৈবাহিক অবস্থা</label>
                                <select name="marital_status" class="form-select">
                                    <option value="">-- নির্বাচন করুন --</option>
                                    <option value="single">অবিবাহিত</option>
                                    <option value="married">বিবাহিত</option>
                                    <option value="widowed">বিধবা</option>
                                    <option value="divorced">তালাকপ্রাপ্ত</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">মোবাইল নম্বর</label>
                                <div class="input-group">
                                    <span class="input-group-text bg-light"><i class="fa fa-phone text-success"></i></span>
                                    <input type="text" name="mobile_number" class="form-control" placeholder="মোবাইল লিখুন">
                                </div>
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">গ্রাম</label>
                                <input type="text" name="village" class="form-control" placeholder="গ্রামের নাম লিখুন">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">পোস্ট অফিস</label>
                                <input type="text" name="post_office" class="form-control" placeholder="পোস্ট অফিস লিখুন">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">থানা</label>
                                <input type="text" name="thana" class="form-control" placeholder="থানার নাম লিখুন">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">জেলা</label>
                                <input type="text" name="district" class="form-control" placeholder="জেলার নাম লিখুন">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">পেশা</label>
                                <input type="text" name="profession" class="form-control" placeholder="পেশা লিখুন">
                            </div>

                            <div class="col-12">
                                <label class="form-label fw-medium">রক্তের গ্রুপ</label>
                                <input type="text" name="blood_group" class="form-control" placeholder="রক্তের গ্রুপ লিখুন">
                            </div>

                            <div class="col-12 d-grid mt-3">
                                <button type="submit" class="btn btn-success py-2 fw-semibold">
                                    <i class="fa fa-search me-2"></i> অনুসন্ধান করুন
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- ডান পাশের খালি জায়গা -->
            @if(Route::is('search.result'))
            <div class="col-md-8">
                <!-- Title -->
                <div class="row py-3 justify-content-center">
                    <div class="col-md-12 text-center">
                        <h2 class="text-success fw-bold mb-1">
                            <i class="fas fa-users me-2"></i> সার্চকৃত ব্যক্তির তথ্য তালিকা
                        </h2>
                    </div>
                </div>

                <!-- Card -->
                <div class="card shadow-lg border-1 border-dark rounded-3">
                    <div class="card-header bg-success text-white py-3 d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0 fw-semibold">
                            <i class="fas fa-list me-2"></i> সার্চকৃত ব্যক্তির তালিকা
                        </h5>
                        <p class="mb-0">মোট {{ $persons->total() }} জন পাওয়া গেছে</p>
                    </div>


                    <!-- Card Body -->
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-success">
                                    <tr>
                                        <th scope="col" class="text-center">#</th>
                                        <th scope="col">নাম</th>
                                        <th scope="col">মোবাইল</th>
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
                                        <td>
                                            <span class="badge bg-info text-dark">{{ $person->mobile_number ?? 'N/A' }}</span>
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
                                                
                                                <!-- Header -->
                                                <div class="modal-header bg-info text-white">
                                                    <h5 class="modal-title fw-semibold">
                                                        <i class="fas fa-id-card me-2"></i> সদস্যের বিস্তারিত তথ্য
                                                    </h5>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                                </div>

                                                <!-- Body -->
                                                <div class="modal-body">
                                                    <div class="row g-4">
                                                        
                                                        <!-- Profile Image & Name -->
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

                                                        <!-- Personal Information -->
                                                        <div class="col-md-6">
                                                            <h6 class="fw-semibold text-success mb-3">
                                                                <i class="fas fa-user-circle me-2"></i> ব্যক্তিগত তথ্য
                                                            </h6>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="mb-2"><strong>পিতার/স্বামীর নাম:</strong> {{ $person->father_husband_name ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>মাতার নাম:</strong> {{ $person->mother_name ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>জন্ম তারিখ:</strong> {{ $person->date_of_birth ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>লিঙ্গ:</strong> {{ $person->gender ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>বৈবাহিক অবস্থা:</strong> {{ $person->marital_status ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>রক্তের গ্রুপ:</strong> {{ $person->blood_group ?? 'N/A' }}</li>
                                                            </ul>
                                                        </div>

                                                        <!-- Contact & Address -->
                                                        <div class="col-md-6">
                                                            <h6 class="fw-semibold text-success mb-3">
                                                                <i class="fas fa-address-card me-2"></i> যোগাযোগ ও ঠিকানা
                                                            </h6>
                                                            <ul class="list-unstyled mb-0">
                                                                <li class="mb-2"><strong>মোবাইল:</strong> {{ $person->mobile_number ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>গোত্র:</strong> {{ $person->caste ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>গ্রাম:</strong> {{ $person->village ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>ডাকঘর:</strong> {{ $person->post_office ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>থানা:</strong> {{ $person->thana ?? 'N/A' }}</li>
                                                                <li class="mb-2"><strong>জেলা:</strong> {{ $person->district ?? 'N/A' }}</li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>

                                                <!-- Footer -->
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

                    <!-- Pagination -->
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
