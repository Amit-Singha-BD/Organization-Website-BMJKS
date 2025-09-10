@extends('Backend.Layout.MasterLayout')

@section('Content')

    <!-- Search Sidebar -->
    <div class="search-sidebar">
        <div class="search-sidebar-header">
            <h6 class="mb-0 text-white">
                <i class="fa-solid fa-search me-2"></i>উন্নত অনুসন্ধান
            </h6>
            <button class="btn search-close" data-toggle="search-sidebar">
                <i class="fa-solid fa-times"></i>
            </button>
        </div>
        <div class="search-sidebar-body">
            <form class="search-form">
                <div class="mb-3">
                    <label class="form-label">নাম</label>
                    <input type="text" name="name" class="form-control" placeholder="সদস্যের নাম লিখুন">
                </div>

                <div class="mb-3">
                    <label class="form-label">পিতার নাম/স্বামী</label>
                    <input type="text" name="father_husband" class="form-control" placeholder="পিতার নাম/স্বামীর নাম লিখুন">
                </div>

                <div class="mb-3">
                    <label class="form-label">মাতার নাম</label>
                    <input type="text" name="mother" class="form-control" placeholder="মাতার নাম লিখুন">
                </div>

                <div class="mb-3">
                    <label class="form-label">জেলা</label>
                    <select name="district" class="form-select">
                        <option value="">সব জেলা</option>
                        <option value="dhaka">ঢাকা</option>
                        <option value="chittagong">চট্টগ্রাম</option>
                        <option value="rajshahi">রাজশাহী</option>
                        <option value="khulna">খুলনা</option>
                        <option value="barisal">বরিশাল</option>
                        <option value="sylhet">সিলেট</option>
                        <option value="rangpur">রংপুর</option>
                        <option value="mymensingh">ময়মনসিংহ</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">থানা</label>
                    <select name="thana" class="form-select">
                        <option value="">সব থানা</option>
                        <option value="thana1">থানা-১</option>
                        <option value="thana2">থানা-২</option>
                        <option value="thana3">থানা-৩</option>
                        <option value="thana4">থানা-৪</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">পোস্ট অফিস</label>
                    <select name="post_office" class="form-select">
                        <option value="">সব পোস্ট অফিস</option>
                        <option value="po1">পোস্ট অফিস-১</option>
                        <option value="po2">পোস্ট অফিস-২</option>
                        <option value="po3">পোস্ট অফিস-৩</option>
                        <option value="po4">পোস্ট অফিস-৪</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">গ্রাম</label>
                    <select name="village" class="form-select">
                        <option value="">সব গ্রাম</option>
                        <option value="village1">গ্রাম-১</option>
                        <option value="village2">গ্রাম-২</option>
                        <option value="village3">গ্রাম-৩</option>
                        <option value="village4">গ্রাম-৪</option>
                        <option value="village5">গ্রাম-৫</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">জন্ম তারিখ</label>
                    <input type="date" name="dob" class="form-control">
                </div>

                <div class="mb-3">
                    <label class="form-label">লিঙ্গ</label>
                    <select name="gender" class="form-select">
                        <option value="">নির্বাচন করুন</option>
                        <option value="male">পুরুষ</option>
                        <option value="female">নারী</option>
                        <option value="other">অন্যান্য</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">গোত্র</label>
                    <input type="text" name="gotra" class="form-control" placeholder="গোত্র লিখুন">
                </div>

                <div class="mb-3">
                    <label class="form-label">বৈবাহিক অবস্থা</label>
                    <select name="marital_status" class="form-select">
                        <option value="">নির্বাচন করুন</option>
                        <option value="single">অবিবাহিত</option>
                        <option value="married">বিবাহিত</option>
                        <option value="widowed">বিধবা/বিপত্নীক</option>
                        <option value="divorced">তালাকপ্রাপ্ত</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">মোবাইল নম্বর</label>
                    <input type="tel" name="mobile" class="form-control" placeholder="01XXXXXXXXX">
                </div>

                <div class="mb-3">
                    <label class="form-label">পেশা</label>
                    <input type="text" name="profession" class="form-control" placeholder="পেশা লিখুন">
                </div>

                <div class="mb-3">
                    <label class="form-label">সামাজিক পদ</label>
                    <input type="text" name="social_position" class="form-control" placeholder="সামাজিক পদ লিখুন">
                </div>

                <div class="mb-3">
                    <label class="form-label">রক্তের গ্রুপ</label>
                    <select name="blood_group" class="form-select">
                        <option value="">নির্বাচন করুন</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                    </select>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa-solid fa-search me-2"></i>অনুসন্ধান করুন
                    </button>
                    <button type="reset" class="btn btn-outline-secondary">
                        <i class="fa-solid fa-rotate-left me-2"></i>রিসেট করুন
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Search Sidebar Overlay -->
    <div class="search-sidebar-overlay"></div>

    <div class="row g-3">
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">মোট সদস্য</small>
                            <h4 class="mb-0">642</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-user-group"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">সক্রিয় সদস্য</small>
                            <h4 class="mb-0">589</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-user-check"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">প্রয়াত সদস্য</small>
                            <h4 class="mb-0">23</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-praying-hands"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">এই মাসে যোগ</small>
                            <h4 class="mb-0">18</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-calendar-plus"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Action Buttons -->
    <div class="container mt-4">
        <div class="row g-3 align-items-center">

            <!-- New Member -->
            <div class="col-12 col-md-6 col-lg-2 ms-md-auto">
                <a class="btn btn-success w-100 w-md-auto" data-bs-toggle="modal" href="#modalMember" role="button">
                    <i class="fa-solid fa-user-plus me-1"></i> নতুন সদস্য
                </a>
            </div>

        </div>
    </div>

    <div class="card table-card shadow-sm mt-4">
        <div class="card-header text-white text-center">
            <i class="fa-solid fa-user-group"></i> গুণীমান্য ব্যক্তিবর্গের তালিকা
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>ক্রমিক নং</th>
                            <th>ছবি</th>
                            <th>নাম</th>
                            <th>ভূমিকা</th>
                            <th>মোবাইল</th>
                            <th>স্ট্যাটাস</th>
                            <th>অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td>1</td>
                            <td data-label="ছবি"><img src="Assets/img/Hero1.png" alt="" width="42" height="42"
                                    class="rounded-circle object-fit-cover"></td>
                            <td data-label="নাম">
                                <div>
                                    <strong>জনাব রফিকুল ইসলাম</strong>
                                    <br><small class="text-muted">শিক্ষক, ঢাকা কলেজ</small>
                                </div>
                            </td>
                            <td data-label="ভূমিকা"><span class="badge type">সদস্য</span></td>
                            <td data-label="মোবাইল">01715-222222</td>
                            <td data-label="স্ট্যাটাস"><span class="badge type">সক্রিয়</span></td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <button type="button" class="action-btn-info" title="বিস্তারিত দেখুন" data-bs-toggle="modal"
                                        data-bs-target="#modalViewMember">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <button type="button" class="btn action-btn-success" title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#editMemberModal">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <button type="button" class="btn action-btn-danger" title="Delete"
                                        data-bs-toggle="modal" data-bs-target="#deleteMemberModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td data-label="ছবি"><img src="Assets/img/Hero2.png" alt="" width="42" height="42"
                                    class="rounded-circle object-fit-cover"></td>
                            <td data-label="নাম">
                                <div>
                                    <strong>ড. সাবরিনা আক্তার</strong>
                                    <br><small class="text-muted">প্রফেসর, রাজশাহী বিশ্ববিদ্যালয়</small>
                                </div>
                            </td>
                            <td data-label="ভূমিকা"><span class="badge type">সহ-সভাপতি</span></td>
                            <td data-label="মোবাইল">01815-333333</td>
                            <td data-label="স্ট্যাটাস"><span class="badge type">সক্রিয়</span></td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <button type="button" class="action-btn-info" title="বিস্তারিত দেখুন" data-bs-toggle="modal"
                                        data-bs-target="#modalViewMember">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <button type="button" class="btn action-btn-success" title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#editMemberModal">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <button type="button" class="btn action-btn-danger" title="Delete"
                                        data-bs-toggle="modal" data-bs-target="#deleteMemberModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>3</td>
                            <td data-label="ছবি">
                                <div class="rounded-circle bg-light d-inline-flex align-items-center justify-content-center"
                                    style="width:42px;height:42px;">MK</div>
                            </td>
                            <td data-label="নাম">
                                <div>
                                    <strong>মুহাম্মদ কামাল</strong>
                                    <br><small class="text-muted">ব্যবসায়ী</small>
                                </div>
                            </td>
                            <td data-label="ভূমিকা"><span class="badge type">সদস্য</span></td>
                            <td data-label="মোবাইল">01915-444444</td>
                            <td data-label="স্ট্যাটাস"><span class="badge type">অস্থায়ী</span></td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <button type="button" class="action-btn-info" title="বিস্তারিত দেখুন" data-bs-toggle="modal"
                                        data-bs-target="#modalViewMember">
                                        <i class="fas fa-eye"></i>
                                    </button>

                                    <button type="button" class="btn action-btn-success" title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#editMemberModal">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <button type="button" class="btn action-btn-danger" title="Delete"
                                        data-bs-toggle="modal" data-bs-target="#deleteMemberModal">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Member Create Modal -->
    <div class="modal fade" id="modalMember" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">নতুন গুণীমান্য ব্যক্তি যোগ করুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="member_save.php" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">নাম</label>
                                <input name="name" class="form-control" required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">পিতার নাম / স্বামী</label>
                                <input name="father_husband" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">মাতার নাম</label>
                                <input name="mother" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">ছবি</label>
                                <input type="file" name="photo" class="form-control" onchange="previewMemberPhoto(event)">
                                <img id="previewPhoto" src="" alt="Preview" class="mt-2 rounded"
                                    style="max-height:120px; display:none;">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">জন্ম তারিখ</label>
                                <input type="date" name="dob" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">লিঙ্গ</label>
                                <select name="gender" class="form-select">
                                    <option value="">নির্বাচন করুন</option>
                                    <option>পুরুষ</option>
                                    <option>মহিলা</option>
                                    <option>অন্যান্য</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">গোত্র</label>
                                <input name="gotra" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">বৈবাহিক অবস্থা</label>
                                <select name="marital_status" class="form-select">
                                    <option value="">নির্বাচন করুন</option>
                                    <option>অবিবাহিত</option>
                                    <option>বিবাহিত</option>
                                    <option>বিধবা</option>
                                    <option>তালাকপ্রাপ্ত</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">মোবাইল নম্বর</label>
                                <input name="mobile" class="form-control" placeholder="01XXXXXXXXX">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">গ্রাম</label>
                                <input name="village" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">পোস্ট অফিস</label>
                                <input name="post_office" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">থানা</label>
                                <input name="thana" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">জেলা</label>
                                <input name="district" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">পেশা</label>
                                <input name="occupation" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">সামাজিক পদ</label>
                                <input name="social_position" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">রক্তের গ্রুপ</label>
                                <select name="blood_group" class="form-select">
                                    <option value="">নির্বাচন করুন</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" class="btn btn-success">সংরক্ষণ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Member View Modal -->
    <div class="modal fade" id="modalViewMember" tabindex="-1" aria-labelledby="modalViewMemberLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h6 class="modal-title" id="modalViewMemberLabel">সদস্যের বিস্তারিত তথ্য</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-12 text-center">
                            <img id="memberPhoto" src="Assets/img/Hero1.png" alt="সদস্যের ছবি"
                                class="rounded-circle object-fit-cover" width="100" height="100">
                        </div>
                        <div class="col-12 text-center">
                            <h5 id="memberName" class="mb-0 mt-2">জনাব আব্দুল করিম</h5>
                            <p id="memberPosition" class="text-muted">সভাপতি</p>
                        </div>
                        <hr>
                        <div class="col-12">
                            <p class="mb-1"><strong>মোবাইল:</strong> <span id="memberMobile">01711-000000</span></p>
                            <p class="mb-1"><strong>শাখা:</strong> কেন্দ্রীয় কমিটি</p>
                            <p class="mb-1"><strong>যোগদানের তারিখ:</strong> ১০-০৩-২০২১</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Member Edit Modal -->
    <div class="modal fade" id="editMemberModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h6 class="modal-title">সদস্য তথ্য সম্পাদনা</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form data-fake>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">নাম</label>
                                <input class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">পিতার নাম / স্বামী</label>
                                <input class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">মাতার নাম</label>
                                <input class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">ছবি</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">জন্ম তারিখ</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">লিঙ্গ</label>
                                <select class="form-select">
                                    <option value="">নির্বাচন করুন</option>
                                    <option>পুরুষ</option>
                                    <option>নারী</option>
                                    <option>অন্যান্য</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">গোত্র</label>
                                <input class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">বৈবাহিক অবস্থা</label>
                                <select class="form-select">
                                    <option value="">নির্বাচন করুন</option>
                                    <option>অবিবাহিত</option>
                                    <option>বিবাহিত</option>
                                    <option>বিধবা</option>
                                    <option>তালাকপ্রাপ্ত</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">মোবাইল নম্বর</label>
                                <input type="text" class="form-control" placeholder="01XXXXXXXXX">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">গ্রাম</label>
                                <input class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">পোস্ট অফিস</label>
                                <input class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">থানা</label>
                                <input class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">জেলা</label>
                                <input class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">পেশা</label>
                                <input class="form-control" placeholder="যেমন: শিক্ষক, ব্যবসায়ী">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">সামাজিক পদ</label>
                                <input class="form-control" placeholder="যেমন: সভাপতি, সম্পাদক">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">রক্তের গ্রুপ</label>
                                <select class="form-select">
                                    <option value="">নির্বাচন করুন</option>
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" class="btn btn-success">আপডেট করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Member Delete Modal -->
    <div class="modal fade" id="deleteMemberModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h6 class="modal-title">সদস্য মুছে ফেলুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>আপনি কি নিশ্চিত যে আপনি এই সদস্যকে মুছে ফেলতে চান?</p>
                    <p class="text-danger">এই কাজটি পূর্বাবস্থায় ফেরানো যাবে না।</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                    <button type="button" class="btn btn-danger">মুছে ফেলুন</button>
                </div>
            </div>
        </div>
    </div>

@endsection