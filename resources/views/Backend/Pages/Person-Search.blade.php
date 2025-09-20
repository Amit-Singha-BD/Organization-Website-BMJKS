@extends('Backend.Layout.MasterLayout')

@section('Content')
<div class="container mt-4">
    <div class="row">
        <!-- বাম পাশের সার্চ ফিল্ড -->
        <div class="col-md-4">
            <h5 class="mb-3">🔍 সদস্য অনুসন্ধান</h5>
            <form action="{{ route('search.result') }}" method="POST" class="row g-3">
                @csrf

                <div class="col-12">
                    <label class="form-label">নাম</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                        <input type="text" name="name" class="form-control" placeholder="নাম লিখুন">
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label">পিতা/স্বামীর নাম</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-user-friends"></i></span>
                        <input type="text" name="father_husband_name" class="form-control" placeholder="পিতা/স্বামীর নাম লিখুন">
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label">মাতার নাম</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-female"></i></span>
                        <input type="text" name="mother_name" class="form-control" placeholder="মাতার নাম লিখুন">
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label">জন্ম তারিখ</label>
                    <div class="d-flex align-items-center flex-nowrap">

                        <!-- শুরুর তারিখ -->
                        <div class="me-1" style="flex: 1 1 auto; min-width: 0;">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
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
                                <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                <input type="date" name="date_of_birth_to" class="form-control" placeholder="শেষ তারিখ">
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-12">
                    <label class="form-label">লিঙ্গ</label>
                    <select name="gender" class="form-select">
                        <option value="">-- নির্বাচন করুন --</option>
                        <option value="male">পুরুষ</option>
                        <option value="female">মহিলা</option>
                        <option value="other">অন্যান্য</option>
                    </select>
                </div>

                <div class="col-12">
                    <label class="form-label">গোত্র</label>
                    <input type="text" name="caste" class="form-control" placeholder="গোত্র লিখুন">
                </div>

                <div class="col-12">
                    <label class="form-label">বৈবাহিক অবস্থা</label>
                    <select name="marital_status" class="form-select">
                        <option value="">-- নির্বাচন করুন --</option>
                        <option value="single">অবিবাহিত</option>
                        <option value="married">বিবাহিত</option>
                        <option value="widowed">বিধবা</option>
                        <option value="divorced">তালাকপ্রাপ্ত</option>
                    </select>
                </div>

                <div class="col-12">
                    <label class="form-label">মোবাইল নম্বর</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                        <input type="text" name="mobile_number" class="form-control" placeholder="মোবাইল লিখুন">
                    </div>
                </div>

                <div class="col-12">
                    <label class="form-label">গ্রাম</label>
                    <input type="text" name="village" class="form-control" placeholder="গ্রামের নাম লিখুন">
                </div>

                <div class="col-12">
                    <label class="form-label">পোস্ট অফিস</label>
                    <input type="text" name="post_office" class="form-control" placeholder="পোস্ট অফিস লিখুন">
                </div>

                <div class="col-12">
                    <label class="form-label">থানা</label>
                    <input type="text" name="thana" class="form-control" placeholder="থানার নাম লিখুন">
                </div>

                <div class="col-12">
                    <label class="form-label">জেলা</label>
                    <input type="text" name="district" class="form-control" placeholder="জেলার নাম লিখুন">
                </div>

                <div class="col-12">
                    <label class="form-label">পেশা</label>
                    <input type="text" name="profession" class="form-control" placeholder="পেশা লিখুন">
                </div>

                <div class="col-12">
                    <label class="form-label">রক্তের গ্রুপ</label>
                    <input type="text" name="blood_group" class="form-control" placeholder="রক্তের গ্রুপ লিখুন">
                </div>

                <div class="col-12 d-grid mt-3">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-search"></i> অনুসন্ধান করুন
                    </button>
                </div>
            </form>
        </div>

        <!-- ডান পাশের খালি জায়গা -->
        @if(Route::is('search.result'))
        <div class="col-md-8">
            
            <div class="row my-3 justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="text-success">সার্চকৃত ব্যক্তির তথ্য তালিকা</h2>
                </div>
            </div>

            <div class="card shadow">
                <div class="card-header bg-success text-white py-3">
                    <h5 class="card-title mb-0">সার্চকৃত ব্যক্তির তালিকা</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover mb-0">
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
                                <!-- Demo Row 1 -->
                                @foreach($persons as $person)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration}}</td>
                                    <td>{{$person->name}}</td>
                                    <td>{{ $person->mobile_number }}</td>
                                    <td>{{ $person->village }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modalViewMember1">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </td>
                                </tr>
                                <!-- View Member Modal -->
                                <div class="modal fade" id="modalViewMember{{ $person->id }}" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-lg">
                                        <div class="modal-content">
                                            
                                            <!-- Header -->
                                            <div class="modal-header bg-info text-white">
                                                <h5 class="modal-title">সদস্যের বিস্তারিত তথ্য</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                            </div>

                                            <!-- Body -->
                                            <div class="modal-body">
                                                <div class="row g-3">
                                                    
                                                    <!-- Profile Image & Name -->
                                                    <div class="col-12 text-center">
                                                        <img src="{{ $person->photo ? asset($person->photo) : asset('Frontend-Assets/images/profile_img.png') }}"
                                                            class="rounded-circle border border-3 border-info shadow-sm object-fit-cover"
                                                            width="120" height="120" alt="Profile">
                                                        <h4 class="mt-3 mb-0">{{ $person->name }}</h4>
                                                        <p class="text-muted">{{ $person->profession ?? 'N/A' }}</p>
                                                    </div>

                                                    <hr class="mt-2">

                                                    <!-- Personal Information -->
                                                    <div class="col-md-6">
                                                        <p><strong>পিতার/স্বামীর নাম:</strong> {{ $person->father_husband_name ?? 'N/A' }}</p>
                                                        <p><strong>মাতার নাম:</strong> {{ $person->mother_name ?? 'N/A' }}</p>
                                                        <p><strong>জন্ম তারিখ:</strong> {{ $person->date_of_birth ?? 'N/A' }}</p>
                                                        <p><strong>লিঙ্গ:</strong> {{ $person->gender ?? 'N/A' }}</p>
                                                        <p><strong>বৈবাহিক অবস্থা:</strong> {{ $person->marital_status ?? 'N/A' }}</p>
                                                        <p><strong>রক্তের গ্রুপ:</strong> {{ $person->blood_group ?? 'N/A' }}</p>
                                                    </div>

                                                    <!-- Contact & Address -->
                                                    <div class="col-md-6">
                                                        <p><strong>মোবাইল:</strong> {{ $person->mobile_number ?? 'N/A' }}</p>
                                                        <p><strong>গোত্র:</strong> {{ $person->caste ?? 'N/A' }}</p>
                                                        <p><strong>গ্রাম:</strong> {{ $person->village ?? 'N/A' }}</p>
                                                        <p><strong>ডাকঘর:</strong> {{ $person->post_office ?? 'N/A' }}</p>
                                                        <p><strong>থানা:</strong> {{ $person->thana ?? 'N/A' }}</p>
                                                        <p><strong>জেলা:</strong> {{ $person->district ?? 'N/A' }}</p>
                                                    </div>

                                                </div>
                                            </div>

                                            <!-- Footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>



            </div>
        </div>
        @endif

    </div>
</div>

@endsection
