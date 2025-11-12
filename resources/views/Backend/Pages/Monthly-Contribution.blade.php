@extends('Backend.Layout.MasterLayout')

@section('Content')

    <div class="card table-card shadow-sm my-3">
        <div class="card-header text-white text-center bg-success">
            <i class="fa-solid fa-hand-holding-dollar"></i> কমিটি সমূহের মাসিক চাঁদার তালিকা
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                        <tr class="text-center">
                            <th>ক্রমিক</th>
                            <th>কমিটির নাম</th>
                            <th>মোট চাঁদার পরিমাণ</th>
                            @if(Auth::user()->account_type == 'admin')
                                <th>পরিশোধিত চাঁদা</th>
                            @else
                                <th>আদায়কৃত চাঁদা</th>
                            @endif
                            <th>বকেয়া চাঁদার পরিমাণ</th>
                            <th>চাঁদার তালিকা</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td data-label="ক্রমিক">১</td>
                            <td data-label="কমিটির নাম">রফিকুল ইসলাম</td>
                            <td data-label="মোট চাঁদার পরিমাণ">৳ ৫০০ (9)</td>
                            @if(Auth::user()->account_type == 'admin')
                                <td data-label="পরিশোধিত">৳ ৩০০ (9)</td>
                            @else
                                <td data-label="আদায়কৃত চাঁদা">৳ ৩০০ (9)</td>
                            @endif
                            <td data-label="বকেয়া চাঁদার পরিমাণ">৳ ২০০ (9)</td>
                            <td data-label="চাঁদার তালিকা">
                                <a href="{{ route('monthly.contribution.list') }}" class="btn btn-outline-success" title="View">
                                    <i class="fa-solid fa-hand-point-right"></i> বিস্তারিত দেখুন
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection