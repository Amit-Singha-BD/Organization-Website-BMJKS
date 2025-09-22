@extends('Backend.Layout.MasterLayout')

@section('Content')
<div class="container mt-4">
    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h5 class="mb-0">ইভেন্টের তালিকা</h5>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-0">
                    <thead class="table-success">
                        <tr>
                            <th scope="col" class="text-center">#</th>
                            <th scope="col">ইভেন্টের নাম</th>
                            <th scope="col">বিবরণ</th>
                            <th scope="col">সংগৃহীত অর্থের পরিমাণ</th>
                            <th scope="col" class="text-center">মোট সহায়তাকারী</th>
                            <th scope="col" class="text-center">ইভেন্টের বিস্তারিত</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>বন্যা দুর্গতদের সহায়তা</td>
                            <td>বন্যা কবলিত মানুষের জন্য খাদ্য ও চিকিৎসা সহায়তা প্রদান।</td>
                            <td>৳ ১,২০,০০০</td>
                            <td class="text-center">২৫০</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info">
                                    বিস্তারিত দেখুন
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>শীতবস্ত্র বিতরণ</td>
                            <td>শীতার্ত মানুষের জন্য শীতবস্ত্র ও কম্বল বিতরণ কর্মসূচি।</td>
                            <td>৳ ৮৫,০০০</td>
                            <td class="text-center">১৩০</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info">
                                    বিস্তারিত দেখুন
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>স্কুল উন্নয়ন</td>
                            <td>গ্রামীণ বিদ্যালয়ের অবকাঠামো উন্নয়ন ও বই সরবরাহ।</td>
                            <td>৳ ১,৫০,০০০</td>
                            <td class="text-center">৯৫</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info">
                                    বিস্তারিত দেখুন
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>স্বাস্থ্যসেবা ক্যাম্প</td>
                            <td>গ্রামাঞ্চলে বিনামূল্যে স্বাস্থ্য পরীক্ষা ও ওষুধ বিতরণ।</td>
                            <td>৳ ৬০,০০০</td>
                            <td class="text-center">৭৫</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info">
                                    বিস্তারিত দেখুন
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>ঈদ উপহার বিতরণ</td>
                            <td>অসহায় পরিবারকে ঈদের খাদ্য ও পোশাক সহায়তা প্রদান।</td>
                            <td>৳ ৯৫,০০০</td>
                            <td class="text-center">১৮০</td>
                            <td class="text-center">
                                <button class="btn btn-sm btn-info">
                                    বিস্তারিত দেখুন
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer text-center">
            <small class="text-muted">মোট ৫টি ইভেন্ট প্রদর্শিত হয়েছে</small>
        </div>
    </div>
</div>
@endsection