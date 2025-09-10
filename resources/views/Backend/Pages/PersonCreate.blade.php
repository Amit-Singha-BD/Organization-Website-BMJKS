@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="container my-4">
        <div class="card shadow-sm mx-auto" style="max-width: 70rem;">
            <div class="card-header bg-success text-white">
                <h5 class="mb-0">সদস্য তৈরি করুন</h5>
            </div>
            <form action="member_save.php" method="post" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="row g-3">

                        <div class="col-12">
                            <label for="member_type" class="form-label">সদস্য বাছাই করুন</label>
                            <select name="member_type" id="member_type" class="form-select" required>
                                <option value="" selected disabled>একটি নির্বাচন করুন</option>
                                <option value="honorable">গুণীমান্য ব্যক্তিবর্গ</option>
                                <option value="lifetime">আজীবন সদস্য</option>
                                <option value="general">সাধারণ সদস্য</option>
                            </select>
                        </div>

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
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-success">সংরক্ষণ</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewMemberPhoto(event) {
            const input = event.target;
            const preview = document.getElementById('previewPhoto');
            const reader = new FileReader();
            reader.onload = function () {
                preview.src = reader.result;
                preview.style.display = 'block';
            }
            reader.readAsDataURL(input.files[0]);
        }
    </script>


@endsection