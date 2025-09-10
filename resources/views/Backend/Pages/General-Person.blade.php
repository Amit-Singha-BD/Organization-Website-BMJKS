@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="row g-3">
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">মোট আজীবন সদস্য</small>
                            <h4 class="mb-0">89</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-crown"></i></div>
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
                            <h4 class="mb-0">76</h4>
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
                            <h4 class="mb-0">12</h4>
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
                            <h4 class="mb-0">5</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-calendar-plus"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Action Buttons -->
    <div class="container mt-4">
        <div class="row align-items-center">
            <!-- Search -->
            <div class="col-12 col-md-8 col-lg-5">
                <form action="" method="get">
                    <div class="input-group">
                        <select class="form-select" name="village">
                            <option value="">গ্রাম নির্বাচন করুন</option>
                            <option value="gram1">গ্রাম ১</option>
                            <option value="gram2">গ্রাম ২</option>
                            <option value="gram3">গ্রাম ৩</option>
                        </select>
                        <input type="text" class="form-control" placeholder="সদস্যের নাম লিখে অনুসন্ধান করুন…">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i> অনুসন্ধান
                        </button>
                    </div>
                </form>
            </div>

            <!-- Member Button -->
            <div class="col-12 col-md-4 col-lg-2 ms-md-auto mt-2 mt-md-0 text-md-end">
                <a class="btn btn-success w-100 w-md-auto" data-bs-toggle="modal" href="#modalMember" role="button">
                    <i class="fa-solid fa-user-plus me-1"></i> নতুন সদস্য
                </a>
            </div>
        </div>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-lg-12">
            <div class="card table-card shadow-sm">
                <div class="card-header text-white text-center">
                    <i class="fa-solid fa-user"></i> সাধারণ সদস্য তালিকা
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr class="text-center">
                                <th>ক্রমিক নং</th>
                                <th>ছবি</th>
                                <th>নাম</th>
                                <th>পদবি</th>
                                <th>যোগদানের তারিখ</th>
                                <th>অবস্থা</th>
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
                                        <strong>ড. আব্দুল হামিদ</strong>
                                        <br><small class="text-muted">প্রফেসর, ঢাকা বিশ্ববিদ্যালয়</small>
                                    </div>
                                </td>
                                <td data-label="পদবি"><span class="badge type">সভাপতি</span></td>
                                <td data-label="যোগদানের তারিখ">১৫-০৩-২০২০</td>
                                <td data-label="অবস্থা"><span class="badge type">সক্রিয়</span></td>
                                <td data-label="অ্যাকশন">
                                    <div class="d-flex flex-row justify-content-center gap-2">
                                        <button type="button" class="action-btn-info" title="বিস্তারিত দেখুন"
                                            data-bs-toggle="modal" data-bs-target="#modalViewMember">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button type="button" class="btn action-btn-success" title="Edit"
                                            data-bs-toggle="modal" data-bs-target="#editMemberModal">
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
                                        <strong>জনাব ফাতেমা বেগম</strong>
                                        <br><small class="text-muted">সাবেক সচিব, শিক্ষা মন্ত্রণালয়</small>
                                    </div>
                                </td>
                                <td data-label="পদবি"><span class="badge type">সদস্য</span></td>
                                <td data-label="যোগদানের তারিখ">২২-০৭-২০১৯</td>
                                <td data-label="অবস্থা"><span class="badge type">সক্রিয়</span></td>
                                <td data-label="অ্যাকশন">
                                    <div class="d-flex flex-row justify-content-center gap-2">
                                        <button type="button" class="action-btn-info" title="বিস্তারিত দেখুন"
                                            data-bs-toggle="modal" data-bs-target="#modalViewMember">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button type="button" class="btn action-btn-success" title="Edit"
                                            data-bs-toggle="modal" data-bs-target="#editMemberModal">
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
                                <td data-label="পদবি"><span class="badge type">সহ-সভাপতি</span></td>
                                <td data-label="যোগদানের তারিখ">১০-১২-২০১৮</td>
                                <td data-label="অবস্থা"><span class="badge type">সক্রিয়</span></td>
                                <td data-label="অ্যাকশন">
                                    <div class="d-flex flex-row justify-content-center gap-2">
                                        <button type="button" class="action-btn-info" title="বিস্তারিত দেখুন"
                                            data-bs-toggle="modal" data-bs-target="#modalViewMember">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        <button type="button" class="btn action-btn-success" title="Edit"
                                            data-bs-toggle="modal" data-bs-target="#editMemberModal">
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
    </div>

    <!-- Member Add Modal -->
    <div class="modal fade" id="modalMember" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">নতুন আজীবন সদস্য যোগ করুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form data-fake>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">নাম</label>
                                <input class="form-control" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">পেশা / পদবি</label>
                                <input class="form-control" placeholder="উদাহরণ: শিক্ষক, ব্যবসায়ী">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">ভূমিকা</label>
                                <select class="form-select" required>
                                    <option value="">নির্বাচন করুন</option>
                                    <option>সভাপতি</option>
                                    <option>সহ-সভাপতি</option>
                                    <option>সাধারণ সম্পাদক</option>
                                    <option>সদস্য</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">যোগদানের তারিখ</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">মোবাইল</label>
                                <input class="form-control" placeholder="01XXXXXXXXX">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">ইমেইল</label>
                                <input type="email" class="form-control" placeholder="example@email.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label">ছবি</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">বিস্তারিত তথ্য</label>
                                <textarea class="form-control" rows="3"
                                    placeholder="শিক্ষা, অভিজ্ঞতা, অবদান ইত্যাদি"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" class="btn btn-primary">সংরক্ষণ করুন</button>
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
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h6 class="modal-title">সদস্য তথ্য সম্পাদনা</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form data-fake>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">নাম</label>
                                <input class="form-control" required value="মামুনুর রশিদ">
                            </div>
                            <div class="col-12">
                                <label class="form-label">পেশা / পদবি</label>
                                <input class="form-control" placeholder="উদাহরণ: শিক্ষক, ব্যবসায়ী" value="শিক্ষক">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">ভূমিকা</label>
                                <select class="form-select" required>
                                    <option value="">নির্বাচন করুন</option>
                                    <option>সভাপতি</option>
                                    <option>সহ-সভাপতি</option>
                                    <option>সাধারণ সম্পাদক</option>
                                    <option>সদস্য</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">মোবাইল</label>
                                <input class="form-control" placeholder="01XXXXXXXXX" value="01XXXXXXXXX">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">অবস্থা</label>
                                <select class="form-select" required>
                                    <option value="">নির্বাচন করুন</option>
                                    <option>সক্রিয়</option>
                                    <option>নিষ্ক্রিয়</option>
                                    <option>অস্থায়ী</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">ইমেইল</label>
                                <input type="email" class="form-control" placeholder="example@email.com"
                                    value="example@email.com">
                            </div>
                            <div class="col-12">
                                <label class="form-label">ছবি</label>
                                <input type="file" class="form-control">
                            </div>
                            <div class="col-12">
                                <label class="form-label">বিস্তারিত তথ্য</label>
                                <textarea class="form-control" rows="3"
                                    placeholder="শিক্ষা, অভিজ্ঞতা, অবদান ইত্যাদি">বিস্তারিত তথ্য এখানে থাকবে।</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">বাতিল</button>
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
                    <p class="text-danger">এই কাজটি পূর্বাবস্থায় ফিরানো যাবে না।</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                    <button type="button" class="btn btn-danger">মুছে ফেলুন</button>
                </div>
            </div>
        </div>
    </div>

@endsection