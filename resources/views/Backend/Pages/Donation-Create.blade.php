@extends('Backend.Layout.MasterLayout')

@section('Content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">ডোনেশন ফর্ম</h4>
                </div>
                <div class="card-body">
                    <form>
                        <!-- Donator (People) -->
                        <div class="mb-3">
                            <label for="people_id" class="form-label">ডোনার (ব্যক্তি)</label>
                            <select id="people_id" name="people_id" class="form-select">
                                <option selected disabled>একজন ডোনার নির্বাচন করুন</option>
                                <option value="1">আব্দুল করিম</option>
                                <option value="2">রাশেদা বেগম</option>
                                <option value="3">সোহেল রানা</option>
                            </select>
                        </div>

                        <!-- Event -->
                        <div class="mb-3">
                            <label for="event_id" class="form-label">ইভেন্ট নির্বাচন করুন</label>
                            <select id="event_id" name="event_id" class="form-select">
                                <option selected disabled>একটি ইভেন্ট নির্বাচন করুন</option>
                                <option value="1">শীতবস্ত্র বিতরণ</option>
                                <option value="2">বন্যার্তদের সাহায্য</option>
                                <option value="3">স্কুল উন্নয়ন ফান্ড</option>
                            </select>
                        </div>

                        <!-- Donate Amount -->
                        <div class="mb-3">
                            <label for="donate_amount" class="form-label">ডোনেশনের পরিমাণ (৳)</label>
                            <input type="number" id="donate_amount" name="donate_amount" class="form-control" placeholder="যেমন: 1000">
                        </div>

                        <!-- Date -->
                        <div class="mb-3">
                            <label for="date" class="form-label">ডোনেশনের তারিখ</label>
                            <input type="date" id="date" name="date" class="form-control">
                        </div>

                        <!-- Submit -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-success px-4">ডোনেশন জমা দিন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection