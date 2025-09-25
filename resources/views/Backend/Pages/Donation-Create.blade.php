@extends('Backend.Layout.MasterLayout')

@section('Content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg">
                <div class="card-header bg-success text-white text-center">
                    <h4 class="mb-0">ডোনেশন এন্ট্রি ফর্ম</h4>
                </div>
                <div class="card-body">
                    <form>
                        <!-- Donator (People) -->
                        <div class="mb-3">
                            <label for="people_id" class="form-label">ডোনার এর নং</label>
                            <input type="number" id="people_id" name="people_id" class="form-control" placeholder="ব্যাক্তির ফোন নং দাও ">
                        </div>

                        <!-- Event -->
                        <div class="mb-3">
                            <label for="event_id" class="form-label">ইভেন্ট নির্বাচন করুন</label>
                            <select id="event_id" name="event_id" class="form-select">
                                <option selected disabled>একটি ইভেন্ট নির্বাচন করুন</option>
                                @foreach($donationEvent as $event)
                                <option value="{{$event->id}}">{{$event->event_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Donate Amount -->
                        <div class="mb-3">
                            <label for="donate_amount" class="form-label">ডোনেশনের পরিমাণ (ইংরেজী)</label>
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