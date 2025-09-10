@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="row g-3">
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">মোট শাখা</small>
                            <h4 class="mb-0">12</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-sitemap"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="card stat-card shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <small class="text-dark">মোট শাখা সদস্য</small>
                            <h4 class="mb-0">156</h4>
                        </div>
                        <div class="display-6 social-color"><i class="fa-solid fa-users"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Action Buttons -->
    <div class="page-action-buttons mt-3">
        <div class="row g-2 d-flex justify-content-between align-items-center">

            <!-- Search Form -->
            <div class="col-12 col-md-8 col-lg-5">
                <form action="" method="get">
                    <div class="input-group">
                        <select class="form-select" name="village">
                            <option value="">গ্রাম নির্বাচন করুন</option>
                            <option value="gram1">গ্রাম ১</option>
                            <option value="gram2">গ্রাম ২</option>
                            <option value="gram3">গ্রাম ৩</option>
                        </select>
                        <input type="text" class="form-control" placeholder="সদস্যের নাম দিয়ে অনুসন্ধান করুন…">
                        <button class="btn btn-outline-success" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i> অনুসন্ধান
                        </button>
                    </div>
                </form>
            </div>

            <!-- Active/Inactive Buttons -->
            <div class="col-12 col-lg-3">
                <div class="btn-group w-100">
                    <button class="btn btn-success active" id="activeBtn">সক্রিয়</button>
                    <button class="btn btn-outline-success" id="inactiveBtn">নিষ্ক্রিয়</button>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="col-12 col-lg-3">
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-success w-50" data-bs-toggle="modal"
                        data-bs-target="#newCommitteeModal">
                        <i class="fa-solid fa-plus me-1"></i>নতুন কমিটি
                    </button>
                    <button type="button" class="btn btn-success w-50" data-bs-toggle="modal" data-bs-target="#modalBranch">
                        <i class="fa-solid fa-plus me-1"></i>নতুন শাখা
                    </button>
                </div>
            </div>

        </div>
    </div>

    <div class="row g-3 mt-1">
        <div class="col-lg-12">
            <div class="card table-card shadow-sm">
                <div class="card-header text-white text-center">
                    <i class="fa-solid fa-sitemap"></i> শাখা কমিটি তালিকা
                </div>
                <div class="table-responsive">
                    <table class="table align-middle mb-0">
                        <thead>
                            <tr class="text-center">
                                <th>শাখা নাম</th>
                                <th>ঠিকানা</th>
                                <th>সদস্য সংখ্যা</th>
                                <th>অবস্থা</th>
                                <th>অ্যাকশন</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td data-label="শাখা নাম">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-sitemap text-primary"></i>
                                        <strong>ঢাকা মহানগর</strong>
                                    </div>
                                </td>
                                <td data-label="ঠিকানা">মিরপুর-১০, ঢাকা</td>
                                <td data-label="সদস্য সংখ্যা">25</td>
                                <td data-label="অবস্থা"><span class="badge type">সক্রিয়</span></td>
                                <td data-label="অ্যাকশন">
                                    <div class="btn-group">
                                        <a href="{{ route('branch.committee.list') }}" class="btn btn-outline-success"
                                            title="View">
                                            <i class="fa-solid fa-hand-point-right"></i> দেখুন
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td data-label="শাখা নাম">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-sitemap text-primary"></i>
                                        <strong>চট্টগ্রাম</strong>
                                    </div>
                                </td>
                                <td data-label="ঠিকানা">আগ্রাবাদ, চট্টগ্রাম</td>
                                <td data-label="সদস্য সংখ্যা">18</td>
                                <td data-label="অবস্থা"><span class="badge type">সক্রিয়</span></td>
                                <td data-label="অ্যাকশন">
                                    <div class="btn-group">
                                        <a href="{{ route('branch.committee.list') }}" class="btn btn-outline-success"
                                            title="View">
                                            <i class="fa-solid fa-hand-point-right"></i> দেখুন
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="text-center">
                                <td data-label="শাখা নাম">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="fa-solid fa-sitemap text-primary"></i>
                                        <strong>সিলেট</strong>
                                    </div>
                                </td>
                                <td data-label="ঠিকানা">জিন্দাবাজার, সিলেট</td>
                                <td data-label="সদস্য সংখ্যা">15</td>
                                <td data-label="অবস্থা"><span class="badge type">অস্থায়ী</span></td>
                                <td data-label="অ্যাকশন">
                                    <div class="btn-group gap-2">
                                        <a href="{{ route('branch.committee.list') }}" class="btn btn-outline-success"
                                            title="View">
                                            <i class="fa-solid fa-hand-point-right"></i> দেখুন
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal: Branch -->
    <div class="modal fade" id="modalBranch" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">নতুন শাখা যোগ করুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form data-fake>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">শাখার নাম</label>
                                <input class="form-control" required>
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

    <!-- Modal: Committee -->
    <div class="modal fade" id="newCommitteeModal" tabindex="-1" aria-labelledby="newCommitteeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newCommitteeModalLabel">নতুন কমিটি তৈরি করুন</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="newCommitteeForm">
                        <div class="mb-3">
                            <label for="branchName" class="form-label">শাখা নির্বাচন</label>
                            <select class="form-select" id="branchName" name="branchName" required>
                                <option selected disabled value="">শাখা নির্বাচন করুন</option>
                                <option value="branch1">শাখা ১</option>
                                <option value="branch2">শাখা ২</option>
                                <option value="branch3">শাখা ৩</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="effectiveDate" class="form-label">কমিটি কার্যকর তারিখ</label>
                            <input type="date" class="form-control" id="effectiveDate" name="effectiveDate" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                    <button type="submit" form="newCommitteeForm" class="btn btn-success">সংরক্ষণ করুন</button>
                </div>
            </div>
        </div>
    </div>

@endsection