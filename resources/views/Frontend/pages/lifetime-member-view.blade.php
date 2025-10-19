@extends('Frontend.Layouts.master_layout')

@section('content')

<div class="container member-table-wrapper py-5">
    <div class="row mb-4 align-items-center">
        <div class="col-md-6">
            <h2 class="page-title">ব্যক্তির তথ্য তালিকা</h2>
        </div>
    </div>

    <div class="card">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h5 class="mb-0">{{ $personTypeName ?? 'ক্যাটাগরি' }} তালিকা</h5>
            <span>মোট {{ $persons->total() }} জন</span>
        </div>

        <div class="card-body p-0">
            <div class="table">
                <table class="table table-bordered table-hover mb-0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>নাম</th>
                            <th>মোবাইল</th>
                            <th>গ্রাম</th>
                            <th>একশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($persons as $person)
                        <tr>
                            <td data-label="#">{{ $loop->iteration + ($persons->currentPage()-1)*$persons->perPage() }}</td>
                            <td data-label="নাম">{{ $person->name }}</td>
                            <td data-label="মোবাইল">{{ $person->mobile_number }}</td>
                            <td data-label="গ্রাম">{{ $person->village }}</td>
                            <td data-label="একশন" class="text-center">
                                <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewMemberModal{{ $person->id }}">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted">কোনো সদস্য পাওয়া যায়নি</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card-footer d-flex justify-content-between align-items-center flex-wrap">
            <div>মোট {{ $persons->total() }} টি রেকর্ড দেখানো হচ্ছে</div>
            <nav>
                {{ $persons->links() }}
            </nav>
        </div>
    </div>
</div>


{{-- =================== ALL MODALS =================== --}}
@foreach($persons as $person)
<div class="modal fade" id="viewMemberModal{{ $person->id }}" tabindex="-1" aria-labelledby="viewMemberModalLabel{{ $person->id }}" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="viewMemberModalLabel{{ $person->id }}">{{ $person->name }} - বিস্তারিত তথ্য</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="row g-3">
          <div class="col-12 text-center">
            <img src="{{ $person->photo ? asset($person->photo) : asset('Frontend-Assets/images/profile_img.png') }}" class="rounded-circle border border-3 border-info shadow-sm" width="120" height="120" alt="Profile">
            <h4 class="mt-3 mb-0">{{ $person->name }}</h4>
          </div>
          <hr class="mt-3">
          <div class="col-md-6">
            <p><strong>পিতার/স্বামীর নাম:</strong> {{ $person->father_husband_name ?? 'N/A' }}</p>
            <p><strong>মাতার নাম:</strong> {{ $person->mother_name ?? 'N/A' }}</p>
            <p><strong>জন্ম তারিখ:</strong> {{ $person->date_of_birth ?? 'N/A' }}</p>
            <p><strong>লিঙ্গ:</strong> {{ $person->gender ?? 'N/A' }}</p>
            <p><strong>বৈবাহিক অবস্থা:</strong> {{ $person->marital_status ?? 'N/A' }}</p>
            <p><strong>রক্তের গ্রুপ:</strong> {{ $person->blood_group ?? 'N/A' }}</p>
          </div>
          <div class="col-md-6">
            <p><strong>মোবাইল:</strong> {{ $person->mobile_number ?? 'N/A' }}</p>
            <p><strong>পেশা:</strong> {{ $person->profession ?? 'N/A' }}</p>
            <p><strong>গ্রাম:</strong> {{ $person->village ?? 'N/A' }}</p>
            <p><strong>ডাকঘর:</strong> {{ $person->post_office ?? 'N/A' }}</p>
            <p><strong>থানা:</strong> {{ $person->thana ?? 'N/A' }}</p>
            <p><strong>জেলা:</strong> {{ $person->district ?? 'N/A' }}</p>
          </div>
          <div class="col-12 mt-2 text-center">
            @if($person->personType && $person->personType->count() > 0)
                @foreach($person->personType as $type)
                    <span class="badge bg-success">{{ $type->person_type_name }}</span>
                @endforeach
            @else
                <span class="text-muted">কোনো টাইপ নেই</span>
            @endif
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection