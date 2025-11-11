@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="container mt-4">
        <div class="row align-items-center g-2">
            <!-- Create Button -->
            <div class="col-12 col-md-4 col-lg-2 ms-md-auto text-md-end">
                <button class="btn btn-success w-100 w-md-auto" data-bs-toggle="modal" data-bs-target="#createFinanceModal">
                    <i class="fa-solid fa-plus me-1"></i> নতুন চাঁদা যোগ
                </button>
            </div>
        </div>
    </div>

    <div class="card table-card shadow-sm my-3">
        <div class="card-header text-white text-center bg-success">
            <i class="fa-solid fa-hand-holding-dollar"></i> মাসিক চাঁদা তালিকা
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>ক্রমিক</th>
                            <th>কমিটির নাম</th>
                            <th>চাঁদার পরিমাণ</th>
                            <th>তারিখ</th>
                            <th>অ্যাকশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="ক্রমিক">১</td>
                            <td data-label="কমিটির নাম">রফিকুল ইসলাম</td>
                            <td data-label="চাঁদার পরিমাণ">৳ ৫০০</td>
                            <td data-label="তারিখ">২০২৫-১১-১১</td>
                            <td data-label="অ্যাকশন">
                                <div class="d-flex flex-row justify-content-center gap-2">
                                    <button class="btn action-btn-info" title="বিস্তারিত দেখুন" data-bs-toggle="modal" data-bs-target="#viewFinanceModal">
                                        <i class="fa-solid fa-eye"></i>
                                    </button>
                                    <button class="btn action-btn-success" title="সম্পাদনা করুন" data-bs-toggle="modal" data-bs-target="#editFinanceModal">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn action-btn-danger" title="মুছে ফেলুন" data-bs-toggle="modal" data-bs-target="#deleteFinanceModal">
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

    <!-- View Modal -->
    <div class="modal fade" id="viewFinanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h6 class="modal-title">চাঁদার বিবরণ</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <p><strong>সদস্যের নাম:</strong> রফিকুল ইসলাম</p>
                    <p><strong>চাঁদার পরিমাণ:</strong> ৳ ৫০০</p>
                    <p><strong>তারিখ:</strong> ২০২৫-১১-১১</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">বন্ধ করুন</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editFinanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h6 class="modal-title">চাঁদার তথ্য সম্পাদনা</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">সদস্যের নাম</label>
                                <input type="text" name="member_name" class="form-control" value="রফিকুল ইসলাম">
                            </div>
                            <div class="col-12">
                                <label class="form-label">চাঁদার পরিমাণ</label>
                                <input type="number" name="amount" class="form-control" value="500">
                            </div>
                            <div class="col-12">
                                <label class="form-label">তারিখ</label>
                                <input type="date" name="date" class="form-control" value="2025-11-11">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" name="submit" class="btn btn-success">আপডেট করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteFinanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h6 class="modal-title">চাঁদার তথ্য মুছুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body text-center">
                        <p>আপনি কি নিশ্চিত যে আপনি এই চাঁদার তথ্যটি মুছে ফেলতে চান?</p>
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

    <!-- Create Modal -->
    <div class="modal fade" id="createFinanceModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h6 class="modal-title">নতুন মাসের চাঁদা যোগ করুন</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label">কমিটির নাম</label>
                                <select name="committee_name" class="form-select" required>
                                    <option value="" disabled selected>কমিটি নির্বাচন করুন</option>
                                    <option value="কমিটি ১">কমিটি ১</option>
                                    <option value="কমিটি ২">কমিটি ২</option>
                                    <option value="কমিটি ৩">কমিটি ৩</option>
                                    <option value="কমিটি ৪">কমিটি ৪</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">চাঁদার পরিমাণ</label>
                                <input type="number" name="amount" class="form-control" placeholder="৳ পরিমাণ লিখুন" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">তারিখ</label>
                                <input type="date" name="date" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">বাতিল</button>
                        <button type="submit" name="submit" class="btn btn-success">যোগ করুন</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection