@extends('Backend.Layout.MasterLayout')

@section('Content')

<div class="container py-4">
    <div class="row mb-4">
        <div class="col-md-8">
            <h2 class="text-success">ব্যক্তির তথ্য তালিকা</h2>
        </div>
    </div>

    <div class="card shadow">
        <div class="card-header bg-success text-white py-3 d-flex justify-content-between">
            <h5 class="card-title mb-0">{{ $personTypeName ?? 'ক্যাটাগরি' }} তালিকা</h5>
            <p class="mb-0">মোট {{ $persons->total() }} জন </p>
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
                        @forelse($persons as $person)
                        <tr>
                            <td data-label="ক্রমিক নং" class="text-center">{{ $loop->iteration + ($persons->currentPage()-1)*$persons->perPage() }}</td>
                            <td data-label="নাম">{{ $person->name }}</td>
                            <td data-label="মোবাইল নং">{{ $person->mobile_number }}</td>
                            <td data-label="গ্রাম">{{ $person->village }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm btn-info" title="বিস্তারিত দেখুন"
                                    data-bs-toggle="modal" data-bs-target="#modalViewMember{{ $person->id }}">
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
                                                <p><strong>ইমেইল:</strong> {{ $person->email ?? 'N/A' }}</p>
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

                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">কোনো সদস্য পাওয়া যায়নি</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

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
    </div>
</div>
@endsection
