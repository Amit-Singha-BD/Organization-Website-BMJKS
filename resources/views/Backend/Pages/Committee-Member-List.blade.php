@extends('Backend.Layout.MasterLayout')

@section('Content')

    <!-- Page Action Buttons -->
    <div class="container mt-4">
        <div class="row g-3 d-flex justify-content-end align-items-center">

            <!-- New Member -->
            <div class="col-12 col-md-6 col-lg-2">
                <button type="button" class="btn btn-success w-100" 
                    data-bs-toggle="modal" data-bs-target="#memberModal">
                    <i class="fa-solid fa-user-plus me-1"></i> নতুন সদস্য
                </button>
            </div>

        </div>
    </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <!-- Members Table -->
    <div class="row g-3 mt-3">
        <div class="col-lg-12">
            <div class="card table-card shadow-sm">
                <div class="card-header text-white text-center">
                    <i class="fa-solid fa-sitemap"></i> কমিটি সদস্য তালিকা
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr class="text-center">
                                <th>ক্রমিক</th>
                                <th>ছবি</th>
                                <th>নাম</th>
                                <th>ভূমিকা</th>
                                <th>মোবাইল</th>
                                <th>অ্যাকশন</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($committeeMember as $member)
                            <tr class="text-center">
                                <td>{{ $member->id }}</td>
                                <td data-label="ছবি"><img src="{{ $member->photo ? asset($member->photo) : asset('Frontend-Assets/images/profile_img.png') }}" alt="" width="42" height="42"
                                        class="rounded-circle object-fit-cover"></td>
                                <td data-label="নাম">{{ $member->name }}</td>
                                <td data-label="ভূমিকা"><span class="badge type">{{ $member->role }}</span></td>
                                <td data-label="মোবাইল">{{ $member->mobile }}</td>
                                <td data-label="অ্যাকশন">
                                    <div class="d-flex flex-row justify-content-center gap-2">
                                        <button type="button" class="action-btn-info" title="বিস্তারিত দেখুন"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#modalViewMember{{ $member->id }}"
                                            data-id="{{ $member->id }}">
                                            <i class="fas fa-eye"></i>
                                        </button>

                                        <button class="action-btn-success" 
                                            data-bs-toggle="modal"
                                            data-bs-target="#modalMember{{ $member->id }}"
                                            data-id="{{ $member->id }}">
                                            <i class="fas fa-edit"></i>
                                        </button>

                                        <button type="button" class="btn action-btn-danger" title="Delete" 
                                            data-bs-toggle="modal"
                                            data-bs-target="#deleteMemberModal{{ $member->id }}"
                                            data-id="{{ $member->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            <!-- View Member Modal -->
                            <div class="modal fade" id="modalViewMember{{ $member->id }}" tabindex="-1" aria-labelledby="modalViewMemberLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info text-white">
                                            <h6 class="modal-title" id="modalViewMemberLabel">সদস্যের বিস্তারিত তথ্য</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row g-3">
                                                <div class="col-12 text-center">
                                                    <img id="memberPhoto" src="{{ $member->photo ? asset($member->photo) : asset('Frontend-Assets/images/profile_img.png') }}" alt="সদস্যের ছবি"
                                                        class="rounded-circle object-fit-cover" width="100" height="100">
                                                </div>
                                                <div class="col-12 text-center">
                                                    <h5 id="memberName" class="mb-0 mt-2">{{ $member->name }}</h5>
                                                    <p id="memberPosition" class="text-muted">{{ $member->role }}</p>
                                                </div>
                                                <hr>
                                                <div class="col-12">
                                                    <p class="mb-1"><strong>মোবাইল:</strong> <span id="memberMobile">{{ $member->mobile }}</span></p>
                                                    <p class="mb-1"><strong>ইমেইল:</strong> {{ $member->email }}</p>
                                                    <p class="mb-1"><strong>ঠিকানা:</strong> {{ $member->address }}</p>
                                                    <p class="mb-1">
                                                        <strong>ফেসবুক লিংক:</strong>
                                                        <a href="{{ $member->facebook }}" target="_blank" rel="noopener noreferrer">
                                                            {{ $member->facebook }}
                                                        </a>
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

                            <!-- Edit Member Modal -->
                            <div class="modal fade" id="modalMember{{ $member->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header bg-success text-white">
                                            <h6 class="modal-title">কমিটি সদস্য তথ্য সম্পাদনা</h6>
                                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                                        </div>
                                        <form action="{{ route('committeeMember.update', $member->id) }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-body">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <label class="form-label @error('name') text-danger @enderror">
                                                            @error('name')
                                                                {{ $message }}
                                                            @else
                                                                নাম
                                                            @enderror
                                                        </label>
                                                        <input class="form-control" name="name" value="{{ $member->name }}">
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label @error('role') text-danger @enderror">
                                                            @error('role')
                                                                {{ $message }}
                                                            @else
                                                                ভূমিকা
                                                            @enderror
                                                        </label>
                                                        <select class="form-select" id="role" name="role">
                                                            <option value="1" {{ $member->role == 1 ? 'selected' : '' }}>সভাপতি</option>
                                                            <option value="2" {{ $member->role == 2 ? 'selected' : '' }}>সহ-সভাপতি</option>
                                                            <option value="3" {{ $member->role == 3 ? 'selected' : '' }}>সহ-সভাপতি মহিলা</option>
                                                            <option value="4" {{ $member->role == 4 ? 'selected' : '' }}>সাধারণ সম্পাদক</option>
                                                            <option value="5" {{ $member->role == 5 ? 'selected' : '' }}>সহ-সাধারণ সম্পাদক</option>
                                                            <option value="6" {{ $member->role == 6 ? 'selected' : '' }}>অর্থ সম্পাদক</option>
                                                            <option value="7" {{ $member->role == 7 ? 'selected' : '' }}>প্রচার ও প্রকাশনী সম্পাদক</option>
                                                            <option value="8" {{ $member->role == 8 ? 'selected' : '' }}>সাহিত্য ও সাংস্কৃতিক সম্পাদক</option>
                                                            <option value="9" {{ $member->role == 9 ? 'selected' : '' }}>দপ্তর সম্পাদক</option>
                                                            <option value="10" {{ $member->role == 10 ? 'selected' : '' }}>ক্রীড়া সম্পাদক</option>
                                                            <option value="11" {{ $member->role == 11 ? 'selected' : '' }}>সাংগঠনিক সম্পাদক</option>
                                                            <option value="12" {{ $member->role == 12 ? 'selected' : '' }}>সমাজকল্যান সম্পাদক</option>
                                                            <option value="13" {{ $member->role == 13 ? 'selected' : '' }}>শিক্ষা সম্পাদক</option>
                                                            <option value="14" {{ $member->role == 14 ? 'selected' : '' }}>তথ্য ও প্রযুক্তি উন্নয়ন সম্পাদক</option>
                                                            <option value="15" {{ $member->role == 15 ? 'selected' : '' }}>মহিলা বিষয়ক সম্পাদক</option>
                                                            <option value="16" {{ $member->role == 16 ? 'selected' : '' }}>সাধারণ কার্যকরী সদস্য</option>
                                                        </select>
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label @error('mobile') text-danger @enderror">
                                                            @error('mobile')
                                                                {{ $message }}
                                                            @else
                                                                মোবাইল নম্বর
                                                            @enderror
                                                        </label>
                                                        <input class="form-control" name="mobile" value="{{ $member->mobile }}">
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label @error('email') text-danger @enderror">
                                                            @error('email')
                                                                {{ $message }}
                                                            @else
                                                                ইমেইল
                                                            @enderror
                                                        </label>
                                                        <input type="email" class="form-control" name="email" value="{{ $member->email }}">
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label @error('address') text-danger @enderror">
                                                            @error('address')
                                                                {{ $message }}
                                                            @else
                                                                ঠিকানা
                                                            @enderror
                                                        </label>
                                                        <input type="text" class="form-control" name="address" value="{{ $member->address }}">
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label @error('facebook') text-danger @enderror">
                                                            @error('facebook')
                                                                {{ $message }}
                                                            @else
                                                                ফেসবুক লিঙ্ক
                                                            @enderror
                                                        </label>
                                                        <input type="url" class="form-control" name="facebook" value="{{ $member->facebook }}">
                                                    </div>

                                                    <div class="col-12">
                                                        <label class="form-label @error('photo') text-danger @enderror">
                                                            @error('photo')
                                                                {{ $message }}
                                                            @else
                                                                ছবি
                                                            @enderror
                                                        </label>
                                                        <input type="file" class="form-control" name="photo" id="memberPhoto" accept="image/*"
                                                            onchange="previewMemberImage(event)">
                                                    </div>

                                                    <div class="col-12 text-center">
                                                        <img id="memberPhotoPreview" src="{{ $member->photo ? asset($member->photo) : asset('Frontend-Assets/images/profile_img.png') }}" alt="ছবি প্রিভিউ"
                                                            class="img-fluid rounded-circle shadow-sm d-none" style="max-width: 150px;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">বাতিল</button>
                                                <button type="submit" name="submit" class="btn btn-success">আপডেট করুন</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Member Delete Modal -->
                            <div class="modal fade" id="deleteMemberModal{{ $member->id }}" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header bg-danger text-white">
                                            <h6 class="modal-title">সদস্য মুছে ফেলুন</h6>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('committeeMember.destroy', $member->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" id="{{ $member->id }}">
                                            <div class="modal-body text-center">
                                                <p>আপনি কি নিশ্চিত যে আপনি এই সদস্যকে মুছে ফেলতে চান?</p>
                                                <p class="text-danger">এই কাজটি পূর্বাবস্থায় ফেরানো যাবে না।</p>
                                            </div>
                                            <div class="modal-footer justify-content-center">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                                                <button type="submit" name="submit" class="btn btn-danger">মুছে ফেলুন</button>
                                            </div>
                                        </form>
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

    <!-- Member Create Modal -->
    <div class="modal fade" id="memberModal" tabindex="-1" aria-labelledby="memberModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="memberModalLabel"><i class="fa-solid fa-users me-2"></i> নতুন সদস্য যোগ করুন
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('committeeMember.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" value="{{ $id }}" name="CommitteeYear_id">
                            <label for="name" class="form-label @error('name') text-danger @enderror">
                                @error('name')
                                    {{ $message }}
                                @else
                                    নাম
                                @enderror
                            </label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="সদস্যের নাম লিখুন" required>
                        </div>

                        <div class="mb-3">
                            <label for="photo" class="form-label @error('photo') text-danger @enderror">
                                @error('photo')
                                    {{ $message }}
                                @else
                                    ছবি
                                @enderror    
                            </label>
                            <input type="file" class="form-control" id="photo" name="photo" accept="image/*"
                                onchange="previewImage(event)">
                        </div>

                        <div class="mb-3 text-center">
                            <img id="photoPreview" src="#" alt="ছবি প্রিভিউ" class="img-fluid rounded shadow-sm d-none"
                                style="max-width: 200px;" />
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label @error('role') text-danger @enderror">
                                @error('role')
                                    {{ $message }}
                                @else
                                    পদবী
                                @enderror
                            </label>
                            <select class="form-select" id="role" name="role">
                                <option value="">পদবী নির্বাচন করুন</option>
                                <option value="1">সভাপতি</option>
                                <option value="2">সহ-সভাপতি</option>
                                <option value="3">সহ-সভাপতি মহিলা</option>
                                <option value="4">সাধারণ সম্পাদক</option>
                                <option value="5">সহ-সাধারণ সম্পাদক</option>
                                <option value="6">অর্থ সম্পাদক</option>
                                <option value="7">প্রচার ও প্রকাশনী সম্পাদক</option>
                                <option value="8">সাহিত্য ও সাংস্কৃতিক সম্পাদক</option>
                                <option value="9">দপ্তর সম্পাদক</option>
                                <option value="10">ক্রীড়া সম্পাদক</option>
                                <option value="11">সাংগঠনিক সম্পাদক</option>
                                <option value="12">সমাজকল্যান সম্পাদক</option>
                                <option value="13">শিক্ষা সম্পাদক</option>
                                <option value="14">তথ্য ও প্রযুক্তি উন্নয়ন সম্পাদক</option>
                                <option value="15">মহিলা বিষয়ক সম্পাদক</option>
                                <option value="16">সাধারণ কার্যকরী সদস্য</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label @error('address') text-danger @enderror">
                                @error('address')
                                    {{ $message }}
                                @else
                                    ঠিকানা
                                @enderror
                            </label>
                            <textarea class="form-control" id="address" name="address" rows="2" placeholder="ঠিকানা লিখুন"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="mobile" class="form-label @error('mobile') text-danger @enderror">
                                @error('mobile')
                                    {{ $message }}
                                @else
                                    মোবাইল নম্বর
                                @enderror
                            </label>
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="মোবাইল নম্বর লিখুন" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label @error('email') text-danger @enderror">
                                @error('email')
                                    {{ $message }}
                                @else
                                    ইমেইল
                                @enderror
                            </label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="ইমেইল লিখুন">
                        </div>

                        <div class="mb-3">
                            <label for="facebook" class="form-label @error('facebook') text-danger @enderror">
                                @error('facebook')
                                    {{ $message }}
                                @else
                                    ফেসবুক লিঙ্ক
                                @enderror
                            </label>
                            <input type="url" class="form-control" id="facebook" name="facebook" placeholder="ফেসবুক প্রোফাইল লিঙ্ক দিন">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                    <button type="submit" name="submit" class="btn btn-success">সংরক্ষণ করুন</button>
                </div>
                </form>
            </div>
        </div>
    </div>

@endsection