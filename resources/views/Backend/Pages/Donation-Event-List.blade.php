@extends('Backend.Layout.MasterLayout')

@section('Content')
<div class="container mt-4">

    <!-- Header -->
    <div class="row mb-3">
        <div class="col-md-12 d-flex justify-content-between align-items-center">
            <h2 class="text-success mb-0">সকল ইভেন্টের তালিকা</h2>
            <a href="{{ route('donation.event.create') }}" class="btn btn-success">
                <i class="fa fa-plus"></i> নতুন ইভেন্ট তৈরি করুন
            </a>
        </div>
    </div>

    <!-- Event List Card -->
    <div class="card shadow">
        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h5 class="mb-0"><i class="fa fa-calendar-check"></i> ইভেন্টের তালিকা</h5>
            <span class="badge bg-light text-dark">মোট {{ $donationEvent->total() }} ইভেন্ট</span>
        </div>
        
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered table-hover mb-0 align-middle">
                    <thead class="table-success text-center">
                        <tr>
                            <th scope="col" style="width: 50px">#</th>
                            <th scope="col">ইভেন্টের নাম</th>
                            <th scope="col">বিবরণ</th>
                            <th scope="col">সংগৃহীত অর্থের পরিমাণ</th>
                            <th scope="col">মোট সহায়তাকারী</th>
                            <th scope="col">ইভেন্টের অবস্থা</th>
                            <th scope="col">একশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($donationEvent as $event)
                        <tr>
                            <td class="text-center">
                                {{ $loop->iteration + ($donationEvent->currentPage()-1)*$donationEvent->perPage() }}
                            </td>
                            <td><strong>{{ $event->event_name }}</strong></td>
                            <td>{{ Str::limit($event->description, 60, '...') }}</td>
                            <td class="text-end text-success">৳ {{ number_format($event->total_amount, 0) }}</td>
                            <td class="text-center">{{ $event->total_donator }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-sm {{ $event->status == 'active' ? 'btn-outline-success' : 'btn-outline-secondary' }}" 
                                        data-bs-toggle="modal" data-bs-target="#eventModal{{$event->id}}">
                                    <i class="fas {{ $event->status == 'active' ? 'fa-eye' : 'fa-eye-slash' }} me-1"></i>
                                    {{ $event->status == 'active' ? 'চলমান' : 'শেষ হয়ে গেছে' }}
                                </button>
                            </td>
                            <td class="text-center">
                                <a href="{{route('donation.event.details',$event->id)}}" 
                                   class="btn btn-sm btn-info">
                                    <i class="fa fa-eye"></i> বিস্তারিত
                                </a>
                            </td>
                        </tr>
                        <!-- Status Change Modal -->
                        <div class="modal fade" id="eventModal{{$event->id}}" tabindex="-1" aria-labelledby="statusModalLabel{{$event->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content shadow-lg border-0">
                                    <div class="modal-header bg-primary text-white">
                                        <h5 class="modal-title" id="statusModalLabel{{$event->id}}">
                                            <i class="fas fa-exchange-alt me-2"></i>স্ট্যাটাস পরিবর্তন
                                        </h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body text-center py-4">
                                        @if($event->status == 'active')
                                            <div class="mb-3">
                                                <i class="fas fa-eye-slash fa-3x text-danger"></i>
                                            </div>
                                            <p class="fs-5">
                                                আপনি কি নিশ্চিত <strong class="text-primary">"{{ $event->event_name }}"</strong> ক্যাটাগরিটি 
                                                <span class="badge bg-success">চলমান</span> অবস্থা থেকে  
                                                <span class="badge bg-secondary">অচলমান</span> করতে চান?
                                            </p>
                                        @else
                                            <div class="mb-3">
                                                <i class="fas fa-eye fa-3x text-success"></i>
                                            </div>
                                            <p class="fs-5">
                                                আপনি কি নিশ্চিত <strong class="text-primary">"{{ $event->event_name }}"</strong> ক্যাটাগরিটি  
                                                <span class="badge bg-secondary">অচলমান</span> অবস্থা থেকে  
                                                <span class="badge bg-success">চলমান</span> করতে চান?
                                            </p>
                                        @endif
                                    </div>
                                    <div class="modal-footer justify-content-center border-0 pt-0">
                                        <form action="{{route('donation.event.status',$event->id)}}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-success px-4">
                                                <i class="fas fa-check me-1"></i> হ্যাঁ, পরিবর্তন করুন
                                            </button>
                                        </form>
                                        <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">
                                            <i class="fas fa-times me-1"></i> বাতিল
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted">🚫 কোনো ইভেন্ট পাওয়া যায়নি</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Footer with Pagination -->
        @if($donationEvent->hasPages())
        <div class="card-footer bg-white">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="small text-muted mb-2 mb-md-0">
                    মোট {{ $donationEvent->total() }} টি রেকর্ডের মধ্যে 
                    {{ $donationEvent->firstItem() }} - {{ $donationEvent->lastItem() }} দেখানো হচ্ছে
                </div>
                <div>
                    {{ $donationEvent->links() }}
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
